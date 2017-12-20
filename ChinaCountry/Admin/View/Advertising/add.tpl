<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/advertising.css" rel="stylesheet"/>
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <table class="table tableW">
            <form method='post' action='__URL__/insert' enctype="multipart/form-data">
                <tr >
                    <td class="th" colspan="2">添加轮播图</td>
                </tr>
                <tr>
                    <td>标题：</td>
                    <td class='td1'><input class="form-control input-sm inputw" type="text" name="title" /></td>
                </tr>
                <tr>
                    <td>图片：</td>
                    <td>
                        <div class="form-group">
                            <div class="fileinput fileinput-new essay_add" data-provides="fileinput">
                                <span class="btn btn-primary btn-embossed btn-file">
                                    <span class="fileinput-new"><span class="fui-upload"></span>　选择图片</span>
                                    <span class="fileinput-exists"><span class="fui-gear"></span>　重选</span>
                                    <input type="file" name="picture" accept=".jpg,.png,.jpeg,">
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>外链：</td>
                    <td class='td1'><input class="form-control input-sm inputw" type='text' name='hret' /></td>
                </tr>
                <tr>
                    <td class="text_left" colspan="2">
                        <input type="submit" value="添加" class="input_button"/>
                        <input type="reset" class="input_button"/>
                    </td>
                </tr>
            </form>
        </table>
    </body>
    <script>
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
        $(':checkbox').radiocheck();
    </script>
</html>