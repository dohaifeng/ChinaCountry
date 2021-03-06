<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthController
 *
 * @author feng
 */

namespace Admin\Controller;

class AuthController extends BaseController {

    public function index() {
        //查找所有权限
        $this->auth_list = M("auth_rule")->order("name ASC")->select();
        //显示模板
    }

    /**
     * 各选项操作
     */
    public function opts() {
        C("View",true);
        //组装字段条件
        $where = "id in (" . join(",", I("post.ids")) . ")";
        //执行相应操作
        switch (I("post.submit")) {
            case "选中有效" :
                $result = M("auth_rule")->where($where)->setField("status", 1);
                break;
            case "选中禁用" :
                $result = M("auth_rule")->where($where)->setField("status", 0);
                break;
            case "选中删除" :
                $result = M("auth_rule")->where($where)->delete();
                break;
        }
        //返回提示信息
        if ($result !== FALSE) {
            $this->success("操作成功！", U("Auth/index"));
        } else {
            $this->error("操作失败！");
        }
    }

    //添加用户权限
    public function add() {
    }

    //添加用户权限
    public function insert() {
        C('View',TRUE);
        $authRule = D("AuthRule");
        //创建数据对象
        if (FALSE == $authRule->create()) {
            $this->error($authRule->getError());
        }
        //执行插入
        $result = $authRule->add();
        if ($result !== FALSE) {
            $this->success("添加成功", U("Auth/index"), 1);
        } else {
            $this->error("添加失败");
        }
    }

    //编辑权限
    public function edit() {
        C('View',true);
        //查找权限记录
        $auth_rec = M("auth_rule")->where(array("id" => I("get.id")))->find();
        $this->assign('auth_rec',$auth_rec);
        $this->display();
    }

    //修改用户
    public function update() {
        C('View',true);
        $authRule = D("AuthRule");
        //创建数据对象
        if (FALSE == $authRule->create()) {
            $this->error($authRule->getError());
        }
        //执行插入
        $result = $authRule->where(array("id" => I("post.id")))->save();
        if ($result !== FALSE) {
            $this->showMsg("修改成功", U("Auth/index"), 2, TRUE);
        } else {
            $this->error("修改失败");
        }
    }

}
