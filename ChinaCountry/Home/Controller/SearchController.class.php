<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchController
 *
 * @author feng
 */

namespace Home\Controller;

class SearchController extends BaseController {

    public function index() {
        $search = I('post.search');
        $where = " title LIKE '%" . $search . "%'";
//        $where=array('title' => '%'.$search. '%');
        $video = M("video")->where($where)->order('id desc')->field('id,title,date,type')->select();
        $news = M("news")->where($where)->order('id desc')->field('id,title,date,type')->select();
        if (isset($video) && isset($news)) {
            $newarray = array_merge($video, $news);
        } elseif (isset($video)) {
            $newarray = $video;
        } elseif (isset($news)) {
            $newarray = $news;
        }
        $count = count($newarray);
        $video_among = M("video")->order('times desc')->field('id,title,times')->limit(5)->select();
        $site = M("site_information")->field('title')->select();
        $this->assign('site',$site);
        $this->assign('video', $video_among);
        $this->assign('newarray', $newarray);
        $this->assign('count', $count);
        $this->assign('search', $search);
        $this->display();
    }

}
