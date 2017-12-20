<?php

/*
 * Copyright(c)2015 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  LiuTian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-3-17 14:57:17
 * @Version 1.0
 */
/**
 * 基本控制器类
 */

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {

    //初始化控制器时的执行动作
    public function _initialize() {
        header("content-type:text/html;charset=utf-8");
        //验证登陆
        $this->chkLogin();
        //验证权限
        $this->chkAuth();
        //查询所有栏目 写入模板中
//		$this->col_list = M("column")->order("CONCAT_WS(',',path,cid)")->select();
    }

    //检查用户是否已经登陆
    public function chkLogin() {
        //用户控制器过来的操作都无需验证
        if (!session("?ChinaAdminUserData")) {
//			$this->error("用户尚未登陆，无法查看！");
            //跳转到登陆页面
            $this->redirect("Login/logForm");
        }
    }

    //检查用户是否有相应操作的权限
    public function chkAuth() {
        //获取要验证的URL
        $rows = M("auth_rule")->where("status = 1")->field("name,title")->select();
        $auth_list = array();
        foreach ($rows as $tmp) {//array("Post/add" => "日志添加", "Post/delete" => "日志删除", "Post/update"......);
            $auth_list[$tmp['name']] = $tmp['title'];
        }
        //判断当前要访问的路由是否需要验证
        if (array_key_exists(CONTROLLER_NAME . "/" . ACTION_NAME, $auth_list)) {
            $Auth = new \Think\Auth();
            $userRec = session("ChinaAdminUserData");
            if (!$Auth->check(CONTROLLER_NAME . "/" . ACTION_NAME, $userRec['id'])) {
                $this->error("用户无权" . $auth_list[CONTROLLER_NAME . "/" . ACTION_NAME] . "！");
            }
        }
    }

    /**
     * 操作成功跳转提示的方法
     * @param string $msg		提示信息
     * @param string $url		跳转地址
     * @param int $delay		延迟时间
     */
    public function showMsg($msg, $url = NULL, $delay = 3, $isScript = FALSE) {
        empty($url) && $url = $_SERVER['REQUEST_URI'];
        if ($isScript) {
            echo "<html><meta charset='utf-8' /><body>{$msg}，{$delay}秒后为你跳转！<script>setTimeout(function () {";
            echo "var L = parent.location || location; ";
            echo "L.href = '{$url}';";
            echo "},{$delay}*1000);</script></body></html>";
        } else {
            echo "<html><meta charset='utf-8' /><meta http-equiv='refresh' content='{$delay};url={$url}' />";
            echo "<body>{$msg}，{$delay}秒后为你跳转~</body></html>";
        }
    }

    //Excel导出
    public function getExcel($fileName, $headArr, $data) {
        //调用及包含Excel文件
        Vendor('Excel/Classes/PHPExcel');
        $date = date("Y_m_d", time());
        $fileName .= "_{$date}.xls";
        $objPHPExcel = new \PHPExcel();
        $objProps = $objPHPExcel->getProperties();


        $key = ord("A"); //A--65
        $key2 = ord("@"); //@--64
        foreach ($headArr as $v) {
            if ($key > ord("Z")) {
                $key2 += 1;
                $key = ord("A");
                $colum = chr($key2) . chr($key); //超过26个字母时才会启用  
            } else {
                if ($key2 >= ord("A")) {
                    $colum = chr($key2) . chr($key); //超过26个字母时才会启用  
                } else {
                    $colum = chr($key);
                }
            }
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($colum . '1', $v);
            $key += 1;
        }

        $column = 2;
        $objActSheet = $objPHPExcel->getActiveSheet();

        foreach ($data as $key => $rows) { // 行写入
            $span = ord("A");
            $span2 = ord("@");
            foreach ($rows as $keyName => $value) { // 列写入
                if ($span > ord("Z")) {
                    $span2 += 2;
                    $span = ord("A");
                    $j = chr($span2) . chr($span); //超过26个字母时才会启用  dingling 20150626 
                    $objActSheet->setCellValue($j . $column, $value);
                    $span ++;
                } else {
                    if ($span2 >= ord("A")) {
                        $j = chr($span2) . chr($span);
                    } else {
                        $j = chr($span);
                    }

                    $objActSheet->setCellValue($j . $column, $value);
                    $span ++;
                }
            }
            $column ++;
        }





        $fileName = iconv("utf-8", "gb2312", $fileName);
        // 重命名表
        // 设置活动单指数到第一个表,所以Excel打开这是第一个表
        $objPHPExcel->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header('Cache-Control: max-age=0');

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); // 文件通过浏览器下载
        exit();
    }

    //下载文件
    public function download_file($file) {
        if (is_file($file)) {
            $length = filesize($file);
//            $type = mime_content_type($file);
            $showname = ltrim(strrchr($file, '/'), '/');
            header("Content-Description: File Transfer");
            header('Content-type: ' . $type);
            header('Content-Length:' . $length);
            if (preg_match('/MSIE/', $_SERVER['HTTP_USER_AGENT'])) { //for IE
                header('Content-Disposition: attachment; filename="' . rawurlencode($showname) . '"');
            } else {
                header('Content-Disposition: attachment; filename="' . $showname . '"');
            }
            readfile($file);
            exit;
        } else {
            exit('文件已被删除！');
        }
    }

}
