<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdvertisingController
 *
 * @author feng
 */

namespace Admin\Controller;

class AdvertisingController extends BaseController {

    public function index() {
        //组装搜索条件
        if (isset($_POST['keyword'])) {
            $keyword = trim(I("post.keyword"));
            $where = " title LIKE '%" . $keyword . "%'";
        } else {
            $keyword = "请输入标题";
            $where = NULL;
        }
        $Advertising = M("Advertising")->where($where)->select();
        $this->assign('advertising',$Advertising);

    }

    //添加
    public function add() {
        
    }

    //执行添加
    public function insert() {
        C('View', true);

        //文件上传
        $upfile = A('Uploadsr', 'Event');
        $post = $upfile->upload($_FILES);
        $avatar = $post['picture']['0'];
        $data["picture"] = $avatar;
        $data['title'] = I('post.title');
        $data['hret'] = I('post.hret');
        
        //创建数据对象 执行相关验证和自动完成
        $AdvertisingModel = D("Advertising");

        if (FALSE === $AdvertisingModel->create()) {
            $this->error($AdvertisingModel->getError());
            exit();
        }

        //插入用户基本信息
        if (FALSE !== $AdvertisingModel->add($data)) {
            $this->success("添加轮播图成功", U("Advertising/index"), 1);
        } else {
            $this->error("添加轮播图失败");
        }
    }

    //修改
    public function edit() {
        //获取成绩信息
        $AdvertisingModel = D("Advertising");
        $Advertising = $AdvertisingModel->where(array("id" => I("get.id")))->find();
        //发送数据
        $this->assign("Advertising", $Advertising);
    }
    
    //执行编辑
    public function update() {
        C('View', true);
        //文件上传
        $upfile = A('Uploads', 'Event');
        $post = $upfile->upload($_FILES);
        $picture = $post['picture']['0'];
        $data["picture"] = $picture;

        //如果图片为空 则表示不重写 使用原有值
        if ($data["picture"] == "") {
            unset($data["picture"]);
        }
        $data['title'] = I('post.title');
        $data['hret'] = I('post.hret');
        
        //创建数据表模型
        $AdvertisingModel = D("Advertising");
        //创建数据对象
        if (FALSE === $AdvertisingModel->create()) {
            $this->error($AdvertisingModel->getError());
            exit();
        }

        if (FALSE !== $AdvertisingModel->where(array("id" => I("post.id")))->save($data)) {
            $this->success("修改成功", U("Advertising/index"), 3);
        } else {
            $this->error("修改失败~");
        }
    }
    
    //删除
    public function delete() {
        C('View', true);
        $essay = M("advertising");
        if (FALSE === $result = $essay->delete(I("get.id"))) {
            $this->error("删除失败！");
        } else {
            $this->success("成功删除了{$result}条记录", U("advertising/index"), 2);
        }
    }
}
