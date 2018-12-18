<?php

namespace App\Repository;

use App\Bulletin;
use App\BulletinType;

class BulletinRepo
{
    public function __construct(Bulletin $bulletin, BulletinType $bulletin_type)
    {
        $this->bulletin = $bulletin;
        $this->bulletin_type = $bulletin_type;
    }
    /**
     * 取得公告標題
     * [getBulletin description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletin($wparams)
    {
        return $this->bulletin->selectRaw('id, type_id, date(created_at) as date, title')->where($wparams)->orderBy('created_at', 'DESC')->paginate(7);
    }

    /**
     * 取得公告類別選單
     * [getBulletinType description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletinType()
    {
        return $this->bulletin_type->get();
    }

    /**
     * 取得公告類別
     * [getBulletinList description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletinList($id)
    {
        return $this->bulletin->where('type_id', $id)->orderBy('created_at', 'DESC')->paginate(15);
    }

    /**
     * 取得公告內容
     * [getBulletinInfo description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletinInfo($id)
    {
        return $this->bulletin->where('id', $id)->first();
    }

    /**
     * 取得上一則
     * [getBulletinInfo description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletinPrev($id, $id_time, $type_id)
    {
        $res = $this->bulletin->select('id')->where('id', '<>', $id)->where('created_at', '>', $id_time)->where('type_id', $type_id)->orderBy('created_at', 'ASC')->limit(1)->first();
        return empty($res) ? false : $res;
    }

    /**
     * 取得下一則
     * [getBulletinInfo description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function getBulletinNext($id, $id_time, $type_id)
    {
        $res = $this->bulletin->select('id')->where('id', '<>', $id)->where('created_at', '<', $id_time)->where('type_id', $type_id)->orderBy('created_at', 'DESC')->limit(1)->first();
        return empty($res) ? false : $res;
    }
}
