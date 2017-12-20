<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/auth_add.css" rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form action="/chinacountry/index.php/Admin/Auth/insert" method="post">
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加权限</td>
                </tr>
                <tr>
                    <td>权限名称：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='name'/>(如：Post/index)</td>
                </tr>
                <tr>
                    <td>权限标题：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='title' />(如：查看日志)</td>
                </tr>                
                <tr>
                    <td>状态：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='status' value="0" readonly/></td>
                </tr>
                <tr>
                    <td colspan="2">初始状态未避免访问受限，只允许设为禁用！&nbsp;&nbsp请先 获取权限，再设为有效！</td>
                </tr>
                <tr>
                    <td class="text_left" colspan="2">
                        <input type="submit" value="提交" class="input_button"/>
                        <input type="reset" class="input_button"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>