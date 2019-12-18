<?php

namespace App\Http\Controllers\Admin;

use App\Model\GalleryItem;
use App\Model\News;
use App\Model\Project;
use App\Model\Say;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            'projects' => Project::count(),
            'news' => News::count(),
            'says' => Say::count(),
            'gallery' => GalleryItem::count(),
        ];
        return view('admin.dashboard', compact('data'));
    }
}
