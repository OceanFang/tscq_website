<?php

namespace App\Services;

use App\Repository\BannerRepo;

class BannerService
{
    protected $repo;
    public function __construct(BannerRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * 取得輪播banner.
     * @return [type] [description]
     */
    public function getBanner()
    {
        return $this->repo->getBanner();
    }

    /**
     * 取得輪播banner.
     * @return [type] [description]
     */
    public function getLauncherBanner()
    {
        return $this->repo->getLauncherBanner();
    }

}
