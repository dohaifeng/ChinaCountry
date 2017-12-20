<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link rel='stylesheet' href='__PUBLIC__/Admin/Css/auth_index.css' />
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>
    </head>
        <body>
            <form method="post" action="__URL__/updateTitle" name="updT">
                <input type="hidden" name="groupid" value="{$group['id']}" />
                <p>原有分组名：<strong>{$group['title']}</strong></p>
                <p>新的分组名：<input type="text" name="title" value="{$auth_rec['title']}" class="form-control input-sm inputw" /></p>
                <p align='right'><input type="submit" name="todo" value="确定" class='blue' /> </p>
            </form>
        </body>
        <script>
                document.updT.onsubmit = function () {
                        var groupid = this.groupid.value;
                        var title = this.title.value;
                        if (title.match(/^\s*$/) !== null) {
                                alert("标题不能为空");
                                return false;
                        }
                        return true;
                };
        </script>
</html>