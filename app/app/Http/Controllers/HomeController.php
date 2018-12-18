<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\BulletinService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */

    public function __construct(BannerService $banner, BulletinService $bulletin)
    {
        $this->bulletin = $bulletin;
        $this->banner = $banner;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banner = $this->banner->getBanner();

        $type_arr = $this->bulletin->getBulletinType();

        foreach ($type_arr as $k => $val) {
            $type_list[$val->id] = $val->short;
            $list[] = $this->bulletin->getBulletin(['type_id' => $val->id]);
        }

        return view('home', compact('banner', 'type_list', 'list'));
    }

    public function launcher()
    {

        $banner = $this->banner->getLauncherBanner();

        $type_arr = $this->bulletin->getBulletinType();

        foreach ($type_arr as $k => $val) {
            $type_list[$val->id] = $val->short;
        }

        $list = $this->bulletin->getBulletin([]);
        return view('launcher', compact('banner', 'type_list', 'list'));
    }

    // public function condition()
    // {
    //     return view('condition');
    // }
}
