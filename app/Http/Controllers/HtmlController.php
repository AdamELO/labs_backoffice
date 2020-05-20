<?php

namespace App\Http\Controllers;

use App\Bannercar;
use App\Menu;
use App\Logo;
use App\Presentation;
use App\Slogan;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HtmlController extends Controller {
    public function home() {
        $menus = Menu::first();
        $logo = Logo::first();
        $slogan = Slogan::first();
        $bannercars = Bannercar::all();
        $services = Service::all();
        $presentation = Presentation::first();
        return view( 'index', compact( 'menus','bannercars','slogan','logo','services','presentation' ) );
    }

    public function services() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'services', compact( 'menus','logo') );
    }

    public function blog() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blog', compact( 'menus','logo' ) );
    }

    public function blogpost() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blogpost', compact( 'menus','logo' ) );
    }

    public function contact() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'contact', compact( 'menus','logo' ) );
    }
}
