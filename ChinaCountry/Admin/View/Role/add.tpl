<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/public.css" rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/role_index.css" rel="stylesheet" />
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method="post" action='__URL__/insert'>
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加权限</td>
                </tr>
                <tr>
                    <td>标题：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='title'/></td>
                </tr>
                <tr>
                    <td>权限：</td>
                    <td>
                        <table id="list">
                            <foreach name="rule_list" key="key" item="tmp">
                                <if condition='$key % 5 == 0'><tr></if>
                                <td class="border_none tdLittle15">
                                    <label class="checkbox checkboxW" for="{$tmp['id']}">
                                        <input type="checkbox"  name="rules[]" value="{$tmp['id']}" id="{$tmp['id']}" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            {$tmp['title']}
                                    </label>
                                </td>
                                <if condition='$key % 5 == 4'><td></td></tr></if>
                            </foreach>
                            <td class="border_none">
                                <label class="checkbox checkboxW" for="selectAll">
                                    <input type="checkbox" value="" id="selectAll"  data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        全选
                                </label>
                            </td>
                        </table>
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
        $("#selectAll").click(function() {
            if (this.checked) {
                $("#list :checkbox").attr("checked", true);
            } else {
                $("#list :checkbox").attr("checked", false);
            }
        });
    </script>
</html>
