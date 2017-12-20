<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>网站管理系统-CMS</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>
        <link href="/chinacountry/Public/Admin/iconfont/iconfont.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/logForm.css" rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/js/jquery-1.9.1.min.js"></script>
        <!-- 引入封装了failback的接口--initGeetest -->
        <script src="/chinacountry/Public/Admin/js/failback.js"></script>

    </head>
    <body style="background:url(/chinacountry/Public/Admin/Images/bsl1.jpg);">
        <div class="charLogin">
            <<< 后台管理登录
        </div>
        <form method="post" name="login" action="/chinacountry/index.php/Admin/Login/logTodo">
            <div class="red">
                <div class="Login">
                    <div class="input-group inputW margin-botton">
                        <span class="input-group-addon"><i class="iconfont icon-username font-size15"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="USERNAME" />
                    </div>
                    <div class="input-group inputW margin-botton">
                        <span class="input-group-addon"><i class="iconfont icon-icon16 font-size15"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="PASSWORD" />
                    </div>
                    <div id="embed-captcha"></div>
                    <p id="wait" class="show">正在加载验证码......</p>
                    <p id="notice" class="hide font-size15">请先拖动验证码到相应位置</p>
                    <button type="submit" id="embed-submit" class="btn btn-default subb">登　录</button>
                </div>
            </div>
        </form>
    </body>
    <!-- 验证码js调用函数方法  -->
    <script>
        var handlerEmbed = function(captchaObj) {
            $("#embed-submit").click(function(e) {
                var validate = captchaObj.getValidate();
                if (!validate) {
                    $("#notice")[0].className = "show";
                    setTimeout(function() {
                        $("#notice")[0].className = "hide";
                    }, 2000);
                    e.preventDefault();
                }
            });
            // 将验证码加到id为captcha的元素里
            captchaObj.appendTo("#embed-captcha");
            captchaObj.onReady(function() {
                $("#wait")[0].className = "hide";
            });
            // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
        };
        $.ajax({
            // 获取id，challenge，success（是否启用failback）
            url: "<?php echo U('Login/StartCaptchaServlet',array('t'=>time()));?>", // 加随机数防止缓存
            type: "get",
            dataType: "json",
            success: function(data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
                    challenge: data.challenge,
                    product: "float", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                    offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                }, handlerEmbed);
            }
        });
    </script>
</html>