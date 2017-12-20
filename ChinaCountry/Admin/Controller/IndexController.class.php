<?php

/*
 * Copyright(c)2015 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  LiuTian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-3-16 14:17:44
 * @Version 1.0
 */
//Index控制器

namespace Admin\Controller;

class IndexController extends BaseController {

    public function index() {
        date_default_timezone_set('asia/shanghai');
//        $date = date("Y-m-d") . $this->cnWeek(date('Y-M-d')); //已遗弃
        //组装环境运行信息数组
        $info = array(
            '操作系统' => PHP_OS,
            '运行环境' => I("server.SERVER_SOFTWARE"),
            '上传附件限制' => ini_get('upload_max_filesize'),
            '执行时间限制' => ini_get('max_execution_time') . '秒',
            '服务器时间' => date("Y年n月j日 H:i:s"),
            '北京时间' => gmdate("Y年n月j日 H:i:s", time() + 8 * 3600),
            '服务器域名/IP' => I("server.SERVER_NAME") . ' [ ' . gethostbyname(I("server.SERVER_NAME")) . ' ]',
        );

        //查询用户信息
        $user = M("admin_user")->where(array("id" => session("ChinaAdminUserData.id")))->select();
        $this->assign("user", $user);
        $this->assign("info", $info);
//        $this->assign("date", $date); 已遗弃
    }

    public function cnWeek($date) {
        $arr = array(' 星期天 ', ' 星期一 ', ' 星期二 ', ' 星期三 ', ' 星期四 ', ' 星期五 ', ' 星期六 ');
        return $arr[date('w', strtotime($date))];
    }

}
