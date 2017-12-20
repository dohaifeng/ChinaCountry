<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/user.css" rel="stylesheet"/>
        <link href="__PUBLIC__/Admin/css/public.css" rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/column_edit.css" rel="stylesheet" />
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method='post' action='__URL__/Update'>
            <table class="table tableW">
                <input type='hidden' name='id' value='{$col_recc["id"]}'/>
                <tr >
                    <td class="th" colspan="2">修改栏目</td>
                </tr>
                <tr>
                    <td>栏目名称：</td>
                    <td>
                        <input class="form-control input-sm inputw" type='text' name='name' value='{$col_recc["name"]}' />
                    </td>
                </tr>                        
                <tr>
                    <td>栏目链接：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='url' value='{$col_recc["url"]}'/></td>
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