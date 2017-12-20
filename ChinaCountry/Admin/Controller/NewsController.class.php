<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author feng
 */

namespace Admin\Controller;

class NewsController extends BaseController {

    //新闻列表
    public function index() {
        $postkeyword = I("post.keyword");
        //组装搜索条件
        if (!empty($postkeyword)) {
            $keyword = trim(I("post.keyword"));
            $where = " title LIKE '%" . $keyword . "%'";
        } else {
            $keyword = "请输入标题";
            $where = NULL;
        }
        
        //分页加查询
        $news = M("news");
        $count = $news->where($where)->count();
        $pagecount = 20;
        $page = new \Think\Page($count, $pagecount);
        $page->parameter = $where; //此处的row是数组，为了传递查询条件
        $page->setConfig('first', '首页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', "尾页");
        $show = $page->show();
        $notice = $news->where($where)->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->field('id,title,date,times')->select();
        $this->assign('news', $notice);
        $this->assign('page', $show);
        $this->assign("keyword", $keyword);
    }

    //添加新闻
    public function add() {
        
    }

    //写入数据库
    public function insert() {
        C('View', TRUE);
        //创建数据对象 执行相关验证和自动完成
        $NewsModel = D("News");
        // 构建写入的数据数组
        $data["title"] = I("post.title");
        $data["content"] = I("post.content");
        $data["date"] = time();

        if (FALSE === $NewsModel->create()) {
            $this->error($NewsModel->getError());
            exit();
        }

        //插入用户基本信息
        if (FALSE !== $NewsModel->add($data)) {
            $this->success("添加文章成功", U("News/index"), 1);
        } else {
            $this->error("添加文章失败");
        }
    }
    
    //编辑
    public function edit() {
        //获取新闻信息
        $NewsModel = D("News");
        $news = $NewsModel->where(array("id" => I("get.id")))->field('id,title,content')->find();
        $this->assign("news", $news);
    }
    
    //执行修改
    public function update() {
        C('View',true);
        //1、创建数据表模型
        $NewsModel = D("News");

        // 构建写入的数据数组
        $data["title"] = I("post.title");
        $data["content"] = I("post.content");
        $data["date"] = time();

        //判断数据对象
        if (FALSE === $NewsModel->create()) {
            $this->error($NewsModel->getError());
            exit();
        }

        if (FALSE !== $NewsModel->where(array("id" => I("post.id")))->save($data)) {
            $this->success("修改成功", U("News/index"), 3);
        } else {
            $this->error("修改失败~");
        }
    }

    //删除
    public function delete() {
        C('View', true);
        $essay = M("video");
        if (FALSE === $result = $essay->delete(I("get.id"))) {
            $this->error("删除失败！");
        } else {
            $this->success("成功删除了{$result}条记录", U("News/index"), 2);
        }
    }
}
