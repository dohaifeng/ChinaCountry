<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SettingsController
 *
 * @author feng
 */

namespace Admin\Controller;

class SettingsController extends BaseController {

    public function site() {
        $site = M("site_information")->select();
        $this->assign('site', $site);
    }

    //跳转添加页面
    public function add() {
        
    }

    //执行添加
    public function insert() {
        C("View", TRUE);
        //创建数据对象 执行相关验证和自动完成
        $SiteModel = D("Site");
        // 构建写入的数据数组
        $data["title"] = I("post.title");
        $data["keyword"] = I("post.keyword");
        $data["description"] = I("post.description");

        if (FALSE === $SiteModel->create()) {
            $this->error($SiteModel->getError());
            exit();
        }

        //插入用户基本信息
        if (FALSE !== $SiteModel->add($data)) {
            $this->success("添加站点信息成功", U("Settings/site"), 1);
        } else {
            $this->error("添加站点信息失败");
        }
    }

    //跳转编辑页面
    public function edit() {
        $edit = M("site_information")->where(array('id' => I("get.id")))->select();
        $this->assign('edit', $edit);
    }

    //执行编辑
    public function update() {
        C('View', TRUE);
        dump($_POST);
        //1、创建数据表模型
        $SiteModel = D("Site");

        // 构建写入的数据数组
        $data["title"] = I("post.title");
        $data["keyword"] = I("post.keyword");
        $data["description"] = I("post.description");
        ;

        //判断数据对象
        if (FALSE === $SiteModel->create()) {
            $this->error($SiteModel->getError());
            exit();
        }

        if (FALSE !== $SiteModel->where(array("id" => I("post.id")))->save($data)) {
            $this->success("修改成功", U("Settings/site"), 3);
        } else {
            $this->error("修改失败~");
        }
    }

    //删除
    public function delete() {
        C('View', true);
        $site = M("site_information");
        if (FALSE === $result = $site->delete(I("get.id"))) {
            $this->error("删除失败！");
        } else {
            $this->success("成功删除了{$result}条记录", U("Settings/site"), 2);
        }
    }

}
