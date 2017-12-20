<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/user.css" rel="stylesheet"/>
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method='post' action='/chinacountry/index.php/Admin/User/Update'>
            <table class="table tableW">
                <input type="hidden" name="id" value="<?php echo ($user_rec['id']); ?>" />
                <tr >
                    <td class="th" colspan="2">修改密码</td>
                </tr>
                <tr>
                    <td>用户名：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='name' value='<?php echo ($user_rec["name"]); ?>' disabled /></td>
                </tr>
                <tr>
                    <td>昵称：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='nickname' value='<?php echo ($user_rec["nickname"]); ?>' /></td>
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
                    <td>角色：</td>
                    <td class='text_left'>
                        <select class="form-control select select-primary select-block" name="group_id">
                            <?php if(is_array($auth_group_list)): foreach($auth_group_list as $key=>$tmp): if($user_rec['AuthGroupAccess']['group_id'] == $tmp['id']): ?><option class="option" value="<?php echo ($tmp['id']); ?>" selected><?php echo ($tmp['title']); ?></option>
                                    <?php else: ?>
                                    <option class="option" value="<?php echo ($tmp['id']); ?>"><?php echo ($tmp['title']); ?></option><?php endif; endforeach; endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>上次登陆</td>
                    <td><input class="form-control input-sm inputw" type='text' name='logined' value='<?php echo (date('Y-m-d H:i:s',(isset($user_rec["logined"]) && ($user_rec["logined"] !== ""))?($user_rec["logined"]):time())); ?>'disabled /></td>
                </tr>
                <tr>
                    <td>本次登陆</td>
                    <td><input class="form-control input-sm inputw" type='text' name='login' value='<?php echo (date('Y-m-d H:i:s',(isset($user_rec["createtime"]) && ($user_rec["createtime"] !== ""))?($user_rec["createtime"]):time())); ?>' disabled /></td>
                </tr>
                <tr>
                    <td>登陆次数</td>
                    <td><input class="form-control input-sm inputw" type='text' name='times' value='<?php echo (date('Y-m-d H:i:s',(isset($user_rec["times"]) && ($user_rec["times"] !== ""))?($user_rec["times"]):time())); ?>' disabled /></td>
                </tr>
                <tr>
                    <td class='text_left' colspan="2">
                        <input type="submit" value="修改" class="input_button"/>
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