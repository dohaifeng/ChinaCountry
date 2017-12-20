<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

class UserController extends BaseController {

    public function index() {
        if (isset($_POST['keyword'])) {
            $keyword = trim(I("post.keyword"));
            $where = " name LIKE '%" . $keyword . "%' OR nickname LIKE '%" . $keyword . "%'";
        } else {
            $keyword = "请输入用户名或昵称";
            $where = NULL;
        }

        //分页加查询
        $userModel = D("User");
        $count = $userModel->where($where)->count();
        $pagecount = 15;
        $page = new \Think\Page($count, $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first', '首页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '尾页');
        $show = $page->show();
        $list = $userModel->relation(true)->where($where)->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();
        $auth_group = M("auth_group")->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->assign("keyword", $keyword);
        $this->assign("auth_group", $auth_group);
    }

    public function add() {
        //获取权限信息
        $auth_group_list = M("auth_group")->select();
        //发送数据
        $this->assign("auth_group_list", $auth_group_list);
    }

    //插入用户
    public function insert() {
        C('View', true);
        //创建数据对象 执行相关验证和自动完成
        $userModel = D("User");
        if (FALSE === $userModel->create()) {
            $this->error($userModel->getError());
            exit();
        }
        //插入用户基本信息
        if (FALSE !== $result = $userModel->add()) {
            //添加用户角色组
            if (FALSE !== M("auth_group_access")->data(array("uid" => $result, "group_id" => I("post.group_id")))->add()) {
                $this->success("添加用户成功", U("User/index"), 1);
            } else {
                $this->error("添加用户失败");
            }
        } else {
            $this->error("添加用户失败");
        }
    }

    //删除用户操作
    public function delete() {
        C("View",true);
        if (FALSE !== $result = M("admin_user")->delete(I("get.id"))) {
            if (FALSE !== M("auth_group_access")->where(array("uid" => I("get.id")))->delete()) {
                $this->success("成功删除了{$result}条记录", U("User/index"), 2);
            } else {
                $this->error("删除失败！");
            }
        }
    }

    public function edit() {
        //组装where
        $getid = I('get.id');
        if (!empty($getid)) {
            $userid = I('get.id');
        } else {
            $userid = session("ChinaAdminUserData.id");
        }
        //获取用户信息
        $userModel = D("User");
        $user_rec = $userModel->where(array("id" => $userid))->relation(true)->find();
        //获取权限信息
        $auth_group_list = M("auth_group")->select();
        //发送数据
        $this->assign("user_rec", $user_rec);
        $this->assign("auth_group_list", $auth_group_list);
    }

    //修改用户数据
    public function update() {
        C('View', true);
        /**
         * 修改用户基本信息
         * 1、创建用户表模型

         * 2、自动验证数据
         * 3、校验密码 重组数据
         * 4、执行修改
         */
        //1、创建数据表模型
        $userModel = D("User");
        //3、创建数据对象
        if (FALSE === $userModel->create()) {
            $this->error($userModel->getError());
            exit();
        }
        //如果密码为空 则表示不重写 使用原有值
        if ($userModel->data['password'] == md5("")) {
            unset($userModel->data['password']);
        }

        //4、执行修改
        if (FALSE !== $result = $userModel->where(array("id" => I("post.id")))->save()) {
            //修改用户权限
            if (FALSE !== $result = M("auth_group_access")->where(array("uid" => I("post.id")))->data(array("group_id" => I("post.group_id")))->save()) {
                $this->success("修改成功", U("User/index"), 2);
            } else {
                $this->error("修改失败~");
            }
        } else {
            $this->error("修改失败~");
        }
    }

    //设置用户角色
    public function setAuthGroupAccess() {
        //实例化控制器对象
        $AuthGroupAccessModel = M("AuthGroupAccess");
        //执行修改
        $result = $AuthGroupAccessModel->where(array("uid" => I("get.id")))->data(array("group_id" => I("get.group_id")))->save();
        if ($result !== FALSE) {
            $this->ajaxReturn(array("status" => 1, "info" => "执行成功"));
        } else {
            $this->ajaxReturn(array("status" => 0, "info" => "执行失败"));
        }
    }

}
