<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContentController
 *
 * @author feng
 */

namespace Home\Controller;

class ContentController extends BaseController {

    public function index($get_id = NULL) {
        if (empty($get_id)) {
            $get_id = I("get.id");
        }
        //查询主信息
        $content = M("video")->where(array("id" => $get_id))->field('id,title,date,video,file_url,introduce,thumbnail,column_id')->select();
        M("video")->where(array("id" => $get_id))->setInc("times", 1);
        foreach ($content as $key => $value) {
            $content[$key]['introduce'] = htmlspecialchars_decode($value['introduce']);
            if (empty($value['video'])) {
                $content[$key]['video'] = $value['file_url'];
                unset($content[$key]['file_url']);
            }
        }
        $up_id = $get_id + 1;
        $next_id = $get_id - 1;
        $up = M("video")->where(array("id" => $up_id))->field('title')->select();
        if (empty($up)) {
            $up = "没有上一篇了！";
        } else {
            $up = $up['0']['title'];
        }
        $next = M("video")->where(array("id" => $next_id))->field('title')->select();
        if (empty($next)) {
            $next = "没有下一篇了！";
        } else {
            $next = $next['0']['title'];
        }
        //查询右边栏信息
        $news = M("news")->order('id desc')->field('id,title,date')->limit(10)->select();
        $file_url['file_url'] = array('NEQ','');
        $video = M("video")->where($file_url)->order('times desc')->field('id,title,times,file_url')->limit(5)->select();
        //查询分类
        $where = array("id" => $content['0']['column_id']);
        $column = M("column")->where($where)->field('name,url')->select();
        $site = M("site_information")->field('title')->select();
        $this->assign('site',$site);
        //内容输出
        $this->assign('column', $column);
        $this->assign('content', $content);
        $this->assign('video', $video);
        $this->assign('news', $news);
        $this->assign('next_id', $next_id);
        $this->assign('up', $up);
        $this->assign('up_id', $up_id);
        $this->assign('next', $next);
        $this->display("index");
    }

    public function newsDetails($get_id = NULL) {
        if (empty($get_id)) {
            $get_id = I('get.id');
        }
        //查询主信息
        $content = M("news")->where(array("id" => $get_id))->field('id,title,date,content')->select();
        M("video")->where(array("id" => $get_id))->setInc("times", 1);
        foreach ($content as $key => $value) {
            $content[$key]['content'] = htmlspecialchars_decode($value['content']);
        }
        $up_id = $get_id + 1;
        $next_id = $get_id - 1;
        $up = M("news")->where(array("id" => $up_id))->field('id,title')->select();
        if (empty($up)) {
            $up = "没有上一篇了！";
        } else {
            $up = $up['0']['title'];
        }
        $next = M("news")->where(array("id" => $next_id))->field('id,title')->select();
        if (empty($next)) {
            $next = "没有下一篇了！";
        } else {
            $next = $next['0']['title'];
        }
        //查询右边栏信息
        $news = M("news")->order('id desc')->field('id,title,date')->limit(10)->select();
        $video = M("video")->order('times desc')->field('id,title,times')->limit(5)->select();
        $site = M("site_information")->field('title')->select();
        $this->assign('site',$site);
        //内容输出
        $this->assign('content', $content);
        $this->assign('video', $video);
        $this->assign('news', $news);
        $this->assign('next_id', $next_id);
        $this->assign('up', $up);
        $this->assign('up_id', $up_id);
        $this->assign('next', $next);
        $this->display("newsDetails");
    }

    public function search() {
        $get_id = I("get.id");
        $type = I("get.type");
        if ($type == 1) {
            $this->newsDetails($get_id);
        } elseif ($type == 2) {
            $this->index($get_id);
        }
    }

}
