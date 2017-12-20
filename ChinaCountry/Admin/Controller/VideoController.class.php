<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VideoController
 *
 * @author feng
 */

namespace Admin\Controller;

class VideoController extends BaseController {

    //视频列表
    public function index() {
        $postkeyword = I("post.keyword");
        //组装搜索条件
        if (!empty($postkeyword)) {
            $keyword = trim(I("post.keyword"));
            $where = " a.title LIKE '%" . $keyword . "%'";
        } else {
            $keyword = "请输入标题";
            $where = NULL;
        }
        //分页加查询
        $video = M("video");
        $count = $video->where($where)->count();
        $pagecount = 20;
        $page = new \Think\Page($count, $pagecount);
        $page->parameter = $where; //此处的row是数组，为了传递查询条件
        $page->setConfig('first', '首页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', "尾页");
        $show = $page->show();
        $notice = $video->Alias('a')->Join(C('DB_PREFIX') . 'column as b on a.column_id=b.id')->where($where)->order('a.id desc')->limit($page->firstRow . ',' . $page->listRows)->field("a.id,a.title,a.date,a.times,b.name")->select();
        $this->assign('video', $notice);
        $this->assign('page', $show);
        $this->assign("keyword", $keyword);
    }

    //添加视频
    public function add() {
        $column = M("column")->field('id,name')->select();
        $this->assign('column', $column);
    }

    //执行添加
    public function insert() {
        C('View', true);
        //文件上传
        $upfile = A('Uploads', 'Event');
        $post = $upfile->upload($_FILES);
        $avatar = $post['video']['0'];
        $date['file_url'] = $avatar;

        $upfileimg = A('Uploadsr', 'Event');
        $postimg = $upfileimg->upload($_FILES);
        $thumbnail = $postimg['img']['0'];
        $date['thumbnail'] = $thumbnail;
        //创建数据对象 执行相关验证和自动完成
        $VideoModel = D("Video");

        $date['title'] = I("post.title");
//        $date['video'] = I("post.video");
        $date['introduce'] = I("post.introduce");
        $date['column_id'] = I("post.column_id");
        $date['date'] = time();

        if (FALSE === $VideoModel->create()) {
            $this->error($VideoModel->getError());
            exit();
        }

        //插入用户基本信息
        if (FALSE !== $VideoModel->add($date)) {
            $this->success("添加视频成功", U("Video/index"), 1);
        } else {
            $this->error("添加视频失败");
        }
    }

    //编辑
    public function edit() {
        $video = M("video")->where(array("id" => I("get.id")))->field('id,title,times,video,introduce,column_id')->select();
        $column = M("column")->field('id,name')->select();
        $this->assign('column',$column);
        $this->assign('video', $video);
    }

    //执行修改
    public function update() {
        C('View', true);
        //文件上传
        $upfile = A('Uploads', 'Event');
        $post = $upfile->upload($_FILES);
        $avatar = $post['video']['0'];
        $date['file_url'] = $avatar;

        $upfileimg = A('Uploadsr', 'Event');
        $postimg = $upfileimg->upload($_FILES);
        $thumbnail = $postimg['img']['0'];
        $date['thumbnail'] = $thumbnail;

        //如果图片为空 则表示不重写 使用原有值
        if ($date['file_url'] == "") {
            unset($date['file_url']);
        }

        if ($date['thumbnail'] == "") {
            unset($date['thumbnail']);
        }

        $date['title'] = I("post.title");
        $date['video'] = I("post.video");
        $date['date'] = time();
        //创建数据表模型
        $videoModel = D("Video");
        //创建数据对象
        if (FALSE === $videoModel->create()) {
            $this->error($videoModel->getError());
            exit();
        }

        if (FALSE !== $videoModel->where(array("id" => I("post.id")))->save($date)) {
            $this->success("修改成功", U("Video/index"), 3);
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
            $this->success("成功删除了{$result}条记录", U("Video/index"), 2);
        }
    }

}
