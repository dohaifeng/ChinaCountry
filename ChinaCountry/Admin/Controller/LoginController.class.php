<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function logForm() {
        C('View',TRUE);
        $this->display();
    }

    //验证码自动调用的方法
    public function StartCaptchaServlet() {
        C('View',TRUE);
        Vendor('Verify/web/StartCaptchaServlet');
    }

    //登录验证
    public function logTodo() {
        //验证用户信息的有效性和真实性
        $userModel = D("User");
        if (FALSE == $userModel->create()) {
            $this->error($userModel->getError());
            exit();
        }

        $post = I('post.');

        //验证码提交验证
        Vendor('Verify/web/VerifyLoginServlet');
        $verfiy = new \verfiy();
        $verifyE = $verfiy->index($post);
        if ($verifyE == 'error')
            $this->error('验证码操作失败');


        //验证账号
        $userRec = $userModel->where(array("name" => I("post.name")))->find();
        if (empty($userRec)) {
            $this->error("账号不存在，请检查！");
        } else if ($userRec['password'] != md5(I("post.password"))) {
            $this->error("密码错误，请重新输入！");
        } else {//登陆成功
            //将用户信息写入session 用以判断是否登陆
            session(array('name' => session_name(), 'expire' => 3600));
            session("ChinaAdminUserData", $userRec);
            //修改登陆状态
            $userModel->where(array("id" => $userRec['id']))->setInc("times", 1);
            //将createtime字段的值给logined 
            $userModel->where(array("id" => $userRec['id']))->data(array("logined" => $userRec['createtime']))->save();
            //将当前时间写入createtime
            $userModel->where(array("id" => $userRec['id']))->data(array("createtime" => time()))->save();
            //跳转至首页
//            $this->success("登陆成功，正在跳转", U("Index/index"), 3);
            $this->redirect("Index/index");
        }
    }

    //用户退出
    public function logout() {
        //销毁用来检测登陆状态的userData属性
        session("ChinaAdminUserData", null);
        //跳转回首页
        $this->redirect("Index/index");
    }

}
