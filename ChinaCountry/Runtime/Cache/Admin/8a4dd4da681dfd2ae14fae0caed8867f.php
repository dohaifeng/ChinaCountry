<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/user.css" rel="stylesheet"/>
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method='post' action='/chinacountry/index.php/Admin/User/insert' enctype="multipart/form-data">
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加后台用户</td>
                </tr>
                <tr>
                    <td>用户名：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='name'/></td>
                </tr>
                <tr>
                    <td>昵称：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='nickname' /></td>
                </tr>                
                <tr>
                    <td>密码：</td>
                    <td><input class="form-control input-sm inputw" type='password' name='password'/></td>
                </tr>
                <tr>
                    <td>确认密码：</td>
                    <td><input class="form-control input-sm inputw" type='password' name='repassword'/></td>
                </tr>
                <tr>
                    <td class="colorBlack">角色：</td>
                    <td class='text_left'>
                        <select class="form-control select select-primary select-block" name="group_id">
                            <option value="">-请选择-</option>
                            <?php if(is_array($auth_group_list)): foreach($auth_group_list as $key=>$tmp): ?><option value="<?php echo ($tmp['id']); ?>"><?php echo ($tmp['title']); ?></option><?php endforeach; endif; ?>
                        </select>
                    </td>
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
    <script>
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
        $(':checkbox').radiocheck();
    </script>
</html>