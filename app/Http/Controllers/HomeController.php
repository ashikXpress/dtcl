<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Model\Activity;
use App\Model\Client;
use App\Model\GalleryItem;
use App\Model\Member;
use App\Model\Menu;
use App\Model\News;
use App\Model\Project;
use App\Model\Say;
use App\Model\Slider;
use App\Model\SubMenu;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders = Slider::orderBy('sort')->get();
        $projects = Project::orderBy('start_date','desc')->take(8)->get();
        $newses = News::latest()->take(4)->get();
        $says = Say::all();
        $activities=Activity::latest()->take(5)->get();
        $allproject=Project::count();
        $ongoing=Project::where('type','Ongoing')->count();
        $shortlisted=Project::where('type','Shortlisted')->count();
        $complete=Project::where('type','Complete')->count();

        return view('home', compact('sliders', 'projects', 'newses', 'says','allproject','ongoing','shortlisted','complete','activities'));
    }

    public function page($slug) {
        $item = Menu::where('slug', $slug)->first();

        if (!$item) {
            $item = SubMenu::where('slug', $slug)->first();
        }

        if (!$item)
            abort(404);

        return view('page', compact('item'));
    }

    public function sectorPage($slug) {
        $item = SubMenu::where('slug', $slug)->first();

        if (!$item)
            abort(404);

        $projects = Project::where('sector', $item->name)->get();

        return view('sector_page', compact('item', 'projects'));
    }

    public function project($type) {
        if ($type == 'complete') {
            $projects = Project::where('type', 'Complete')->orderBy('start_date','desc')->paginate(9);
        } elseif ($type == 'ongoing') {
            $projects = Project::where('type', 'Ongoing')->orderBy('start_date','desc')->paginate(9);
        } elseif ($type == 'shortlisted') {
            $projects = Project::where('type', 'Shortlisted')->orderBy('start_date','desc')->paginate(9);
        } else {
            abort(404);
        }

        return view('project', compact('projects', 'type'));
    }

    public function projectDetails($id) {
        $project = Project::findOrFail($id);

        return view('project_details', compact('project'));
    }

    public function gallery() {
        $items = GalleryItem::orderBy('id','desc')->paginate(16);

        return view('gallery', compact('items'));
    }
public function client(){
    $data['nationals']= Client::where('type','National')->get();
    $data['internationals'] = Client::where('type','International')->get();


    return view('client',$data);
}

public function clientProject($id){
        $client=Client::where('id',$id)->first();
        $projects=Project::where('client',$client->name)->paginate(20);
        return view('client_project',compact('projects','client'));
}
public function ourTeam(){
        $data['bordMember']=Member::where('type','Board of Directors')->get();
        $data['cheifMember']=Member::where('type','Chief official Team')->get();
    $data['executiveMember']=Member::where('type','Executive Team')->get();
        $data['staffMember']=Member::where('type','Office staff')->get();

        return view('team',$data);
}

public function recentActivities(){
        $data['activites']=Activity::orderBy('date','desc')->paginate(9);
        return view('activities',$data);
}
public function activityDetails($id){
        $data['activity']=Activity::find($id);
    return view('activity_details',$data);
}
    public function news() {
        $newses = News::orderBy('uploaded_at','desc')->paginate(9);

        return view('news', compact('newses'));
    }

    public function newsDetails($id) {
        $news = News::findOrFail($id);

        return view('news_details', compact('news'));
    }

    public function contact() {
        return view('contact');
    }

    public function contactPost(Request $request) {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to(['info@dtcltd.org','info.dtclgroup@gmail.com'])->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Message sent successfully.');
    }
}
