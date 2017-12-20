<taglib name="edit" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/add_category.css" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/essay.css" />
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form action="{:U('News/insert')}" method="post" enctype="multipart/form-data">
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加新闻</td>
                </tr>
                <tr>
                    <td class="colorBlack">标题：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="title"/></td>
                </tr>
                <tr>
                    <td class="colorBlack">正文内容：</td>
                    <td><edit:kineditor public="__PUBLIC__/Admin" name='content'></edit:kineditor></td>

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
