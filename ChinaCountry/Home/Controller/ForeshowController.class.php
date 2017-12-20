<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of advanceNoticeController
 *
 * @author feng
 */

namespace Home\Controller;

class ForeshowController extends BaseController {

    public function index() {
        //分页加查询
        $where = array("column_id" => 1);
        $grade = M("video");
        $count = $grade->where($where)->count();
        $pagecount = 5;
        $page = new \Think\Page($count, $pagecount);
        $page->parameter = $where; //此处的row是数组，为了传递查询条件
        $page->setConfig('first', '首页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', "尾页");
        $show = $page->show();
        $foreshow = $grade->where($where)->order('id desc')->field('id,title,date,thumbnail,introduce')->limit($page->firstRow . ',' . $page->listRows)->select();
        foreach ($foreshow as $key => $value) {
            $foreshow[$key]['introduce'] = htmlspecialchars_decode($value['introduce']);
        }

        $news = M("news")->order('id desc')->field('id,title,date')->limit(10)->select();
        $file_url['file_url'] = array('NEQ','');
        $video = M("video")->where($file_url)->order('times desc')->field('id,title,times,file_url')->limit(5)->select();
        $site = M("site_information")->field('title')->select();
        $this->assign('site',$site);
        $this->assign('video', $video);
        $this->assign('news', $news);
        $this->assign('foreshow', $foreshow);
        $this->assign('page', $show);
        $this->display();
    }

}
