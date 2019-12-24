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
        $projects = Project::latest()->take(8)->get();
        $newses = News::latest()->take(3)->get();
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

    public function project($type) {
        if ($type == 'complete') {
            $projects = Project::where('type', 'Complete')->paginate(9);
        } elseif ($type == 'ongoing') {
            $projects = Project::where('type', 'Ongoing')->paginate(9);
        } elseif ($type == 'shortlisted') {
            $projects = Project::where('type', 'Shortlisted')->paginate(9);
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
        $items = GalleryItem::paginate(16);

        return view('gallery', compact('items'));
    }
public function client(){
    $data['nationals']= Client::where('type','National')->get();
    $data['internationals'] = Client::where('type','International')->get();


    return view('client',$data);
}
public function ourTeam(){
        $data['bordMember']=Member::where('type','Board of Directors')->get();
        $data['cheifMember']=Member::where('type','Chief official Team')->get();
    $data['executiveMember']=Member::where('type','Executive Team')->get();
        $data['staffMember']=Member::where('type','Office staff')->get();

        return view('team',$data);
}

public function recentActivities(){
        $data['activites']=Activity::paginate(9);
        return view('activities',$data);
}
public function activityDetails($id){
        $data['activity']=Activity::find($id);
    return view('activity_details',$data);
}
    public function news() {
        $newses = News::latest()->paginate(6);

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

        Mail::to(['ctashiqkhan@gmail.com','shantotrs@gmail.com'])->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Message sent successfully.');
    }
}
