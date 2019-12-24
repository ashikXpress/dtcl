<?php

namespace App\Http\Controllers\Admin;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::paginate(10);

        return view('admin.project.all', compact('projects'));
    }

    public function add() {
        return view('admin.project.add');
    }

    public function addPost(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'image' => 'required|image',
            'sector' => 'required',
            'client' => 'required',
            'date' => 'required',
        ]);

        // Upload Image
        $file = $request->file('image');
        $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'public/uploads/project';
        $file->move($destinationPath, $filename);

        $project = new Project();
        $project->type = $request->type;
        $project->title = $request->title;
        $project->sector = $request->sector;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->image = $filename;

        $project->save();

        return redirect()->route('admin_all_project')->with('message', 'Project add successfully.');

    }

    public function edit(Project $project) {
        return view('admin.project.edit', compact('project'));
    }

    public function editPost(Project $project, Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'image' => 'image',
            'sector' => 'required',
            'client' => 'required',
            'date' => 'required',
        ]);

        if ($request->image) {
            //unlink('public/uploads/project/'.$project->image);

            $file = $request->file('image');
            $filename = Uuid::uuid1()->toString().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads/project';
            $file->move($destinationPath, $filename);

            $project->image = $filename;
        }

        $project->type = $request->type;
        $project->title = $request->title;
        $project->sector = $request->sector;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->save();

        return redirect()->route('admin_all_project')->with('message', 'Project update successfully.');
    }

    public function delete(Request $request) {
        $project = Project::find($request->id);
        //unlink('public/uploads/project/'.$project->image);
        $project->delete();
    }
}
