<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet"/>
        <link href="/chinacountry/Public/Admin/css/column_add.css" rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method="post" action='/chinacountry/index.php/Admin/Column/insert'>
            <table class="table tableW">
                <input type='hidden' name='parentid' value='0' />
                <input type='hidden' name='path' value='0'/>
                <tr >
                    <td class="th" colspan="2">添加栏目</td>
                </tr>
                <tr>
                    <td>栏目名称：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='name'/></td>
                </tr>
                <tr>
                    <td>栏目链接：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="url" /></td>
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