<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //查询轮播图
        $Advertising = M("advertising")->field('id,title,picture,hret')->limit(3)->select();
        //查询视频信息
        $foreshow = M("video")->where(array("column_id" => 1))->field('id,title,date,thumbnail')->limit(3)->select();
        $demand = M("video")->where(array("column_id" => 2))->field('id,title,date,thumbnail')->limit(6)->select();
        $news = M("news")->cache('key',60)->order('id desc')->field('id,title,date')->limit(10)->select();
        //查询站点信息
        $site = M("site_information")->field('title,keyword,description')->select();
        $this->assign('site',$site);
        $this->assign('news',$news);
        $this->assign('demand',$demand);
        $this->assign('foreshow',$foreshow);
        $this->assign('advertising',$Advertising);
        $this->display();
    }
}