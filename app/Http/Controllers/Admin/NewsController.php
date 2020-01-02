<?php

namespace App\Http\Controllers\Admin;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class NewsController extends Controller
{
    public function index() {
        $newses = News::paginate(10);

        return view('admin.news.all', compact('newses'));
    }

    public function add() {
        return view('admin.news.add');
    }

    public function addPost(Request $request) {
        $request->validate([
            'image' => 'required|image',
            'upload_date' => 'required',
            'description' => 'required'
        ]);

        // Upload Image
        $file = $request->file('image');
        $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'public/uploads/news/image';
        $file->move($destinationPath, $filename);

        $news = new News();
        $news->image = $filename;
        $news->description = $request->description;
        $news->uploaded_at = $request->upload_date;
        $news->save();

        return redirect()->route('admin_all_news')->with('message', 'News add successfully.');
    }

    public function edit(News $news) {
        return view('admin.news.edit', compact('news'));
    }

    public function editPost(News $news, Request $request) {
        $request->validate([
            'image' => 'image',
            'upload_date' => 'required',
            'description' => 'required'
        ]);

        if ($request->image) {
            //unlink('public/uploads/news/image/' . $news->image);

            $file = $request->file('image');
            $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads/news/image';
            $file->move($destinationPath, $filename);

            $news->image = $filename;
        }


        $news->description = $request->description;
        $news->uploaded_at = $request->upload_date;
        $news->save();

        return redirect()->route('admin_all_news')->with('message', 'News update successfully.');
    }

    public function delete(Request $request) {
        $news = News::find($request->id);
        //unlink('public/uploads/news/image/'.$news->image);
        //unlink('public/uploads/news/file/'.$news->filename);
        $news->delete();
    }
}
