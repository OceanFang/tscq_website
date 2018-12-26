<?php

namespace App\Repository;

use App\Banner;
use App\IngameEventBanner;
use App\LauncherBanner;
use Carbon\Carbon;

class BannerRepo
{
    /**
     * 取得輪播banner.
     * @return [type] [description]
     */
    public function getBanner()
    {
        return Banner::select('img', 'url', 'description')->where('start_time', '<=', Carbon::now())->where('end_time', '>=', Carbon::now())->orderBy('sort', 'asc')->get();
    }

    /**
     * 取得輪播banner.
     * @return [type] [description]
     */
    public function getLauncherBanner()
    {
        return LauncherBanner::select('img', 'url', 'description')->where('start_time', '<=', Carbon::now())->where('end_time', '>=', Carbon::now())->orderBy('sort', 'asc')->get();
    }

    /**
     * 取得ingame輪播banner.
     * @return [type] [description]
     */
    public function getIngameEventBanner()
    {
        return IngameEventBanner::select('img', 'url', 'description')->where('start_time', '<=', Carbon::now())->where('end_time', '>=', Carbon::now())->orderBy('sort', 'asc')->get();
    }
}
