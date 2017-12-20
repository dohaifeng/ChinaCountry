<taglib name="edit" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/add_category.css" />
    </head>
    <body>
        <form action="__URL__/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{$news['id']}" />
            <table class="table">
                <tr >
                    <td class="th" colspan="2">编辑新闻 | <a href="__URL__/index" class="colorBlue">上级</a></td>
                </tr>
                <tr>
                    <td class="colorBlack">标题：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="title" value="{$news['title']}"/></td>
                </tr>
                <tr>
                    <td class="colorBlack">正文内容：</td>
                    <td><edit:kineditor public="__PUBLIC__/Admin" name='content' content="{$news['content']}"></edit:kineditor></td>

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
