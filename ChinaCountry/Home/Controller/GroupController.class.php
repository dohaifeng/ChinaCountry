<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GroupController
 *
 * @author feng
 */
namespace Home\Controller;

class GroupController extends BaseController{

    public function index() {
        $news = M("news")->order('id desc')->field('id,title,date')->limit(10)->select();
        $file_url['file_url'] = array('NEQ','');
        $video = M("video")->where($file_url)->order('times desc')->field('id,title,times,file_url')->limit(5)->select();
        $site = M("site_information")->field('title')->select();
        $this->assign('site',$site);
        $this->assign('video', $video);
        $this->assign('news', $news);
        $this->display();
    }
}
