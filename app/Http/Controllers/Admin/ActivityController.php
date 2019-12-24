<?php

namespace App\Http\Controllers\Admin;

use App\Model\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{

    public function allActivity(){
            $data['activities']=Activity::paginate(8);
            return view('admin.activity.all_activity',$data);
    }
    public function addOurActivityForm(){

        return view('admin.activity.add_our_activity');
    }

    public function addOurActivity(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'date' => 'required',
            'description' => 'required',

        ]);

        $file = $request->file('image1');
        $filename1 = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'public/uploads/activity';
        $file->move($destinationPath, $filename1);

        $file = $request->file('image2');
        $filename2 = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'public/uploads/activity';
        $file->move($destinationPath, $filename2);

        $file = $request->file('image3');
        $filename3 = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'public/uploads/activity';
        $file->move($destinationPath, $filename3);


        $activity = new Activity();
        $activity->title = $request->title;
        $activity->image1 = $filename1;
        $activity->image2 = $filename2;
        $activity->image3 = $filename3;
        $activity->description = $request->description;
        $activity->date =Carbon::parse($request->date);
        $activity->save();

        return redirect()->route('all.activity')->with('message', 'Our activity add successfully.');

    }


    public function editOurActivity(Activity $activity){

        return view('admin.activity.edit_our_activity',compact('activity'));
    }

    public function updateOurActivity(Activity $activity,Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'image1' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'date' => 'required',
            'description' => 'required',

        ]);

        if ($request->image1) {
            //unlink('public/uploads/activity/'.$activity->image1);
            $file = $request->file('image1');
            $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads/activity/';
            $file->move($destinationPath, $filename);

            $activity->image1= $filename;
        }
        if ($request->image2) {
            //unlink('public/uploads/activity/'.$activity->image2);
            $file = $request->file('image2');
            $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads/activity/';
            $file->move($destinationPath, $filename);

            $activity->image2= $filename;
        }
        if ($request->image3) {
            //unlink('public/uploads/activity/'.$activity->image3);
            $file = $request->file('image3');
            $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads/activity/';
            $file->move($destinationPath, $filename);

            $activity->image3= $filename;
        }


        $activity->title = $request->title;
        $activity->date = Carbon::parse($request->date);
        $activity->description = $request->description;

        $activity->update();

        return redirect()->route('all.activity')->with('message', 'Our activity update successfully.');

    }

    public function deleteOurActivity(Request $request){
        $activity = Activity::find($request->id);
        //unlink('public/uploads/activity/'.$activity->image1);
        //unlink('public/uploads/activity/'.$activity->image2);
        //unlink('public/uploads/activity/'.$activity->image3);
        $activity->delete();
    }
}
