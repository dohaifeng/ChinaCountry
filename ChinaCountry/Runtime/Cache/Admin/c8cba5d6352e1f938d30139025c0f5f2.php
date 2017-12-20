<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/public.css" />
        <link rel='stylesheet' href='/chinacountry/Public/Admin/Css/auth_add.css' />
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form action="/chinacountry/index.php/Admin/Auth/update" method="post">
            <input type="hidden" name="id" value="<?php echo ($auth_rec['id']); ?>" />
            <p>权限名称：<input type="text" name="name" value="<?php echo ($auth_rec['name']); ?>" class="form-control input-sm inputw" /> (如：Post/index)</p>
            <p>权限标题：<input type="text" name="title" value="<?php echo ($auth_rec['title']); ?>" class="form-control input-sm inputw" /> (如：查看日志)</p>
            <p class='text_left'>
                <div class="form-group check clearfix" id="check1">
                    <label class="radio" >
                        <input type="radio" data-toggle="radio" name="auth" id="optionsRadios3" value="1" <?php echo ($auth_rec['status']?'checked':''); ?> data-radiocheck-toggle="radio" required="" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                            <span class="font colorBlack">有效</span>
                    </label>
                    <label class="radio active" >
                        <input type="radio" data-toggle="radio" name="auth" id="optionsRadios4" value="0" <?php echo ($auth_rec['status']?'':'checked'); ?> data-radiocheck-toggle="radio" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                            <span class="font colorBlack">禁用</span>
                    </label>
                    <div class="tip"></div>
                </div>
            </p>

            <input type="submit" value="提交" class='blue'/>
        </form>
    </body>
</html>