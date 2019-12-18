<?php

namespace App\Http\View\Composers;
use App\Model\GalleryItem;
use App\Model\Menu;
use App\Model\News;
use Illuminate\View\View;

class FrontLayoutComposer
{
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus = Menu::orderBy('sort')->with('subMenus')->get();
        $newses = News::latest()->take(2)->get();
        $footerGallery=GalleryItem::latest()->take(6)->get();

        $data = [
            'menus' => $menus,
            'newses' => $newses,
            'footerGallery' => $footerGallery,
        ];

        $view->with('layoutData', $data);
    }
}
