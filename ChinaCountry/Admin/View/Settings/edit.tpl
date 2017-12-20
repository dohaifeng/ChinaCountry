<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/public.css" rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/user.css" rel="stylesheet"/>
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method='post' action='{:U("Settings/update")}'>
            <table class="table tableW">
                <input type="hidden" name="id" value="{$edit.0.id}" />
                <tr >
                    <td class="th" colspan="2">编辑站点信息</td>
                </tr>
                <tr>
                    <td>标题：</td>
                    <td>
                        <div class="form-group clearfix">
                            <div class="demo-col">
                                <textarea class="form-control" name='title' rows="3" style="margin: 0px -5px 0px 0px; width: 300px; height: 86px;">{$edit.0.title}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>关键字：</td>
                    <td>
                        <div class="form-group clearfix">
                            <div class="demo-col">
                                <textarea class="form-control" name='keyword' rows="3" style="margin: 0px -5px 0px 0px; width: 300px; height: 86px;">{$edit.0.keyword}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>                        
                <tr>
                    <td>站点描述：</td>
                    <td>
                        <div class="form-group clearfix">
                            <div class="demo-col">
                                <textarea class="form-control" name='description' rows="3" style="margin: 0px -5px 0px 0px; width: 300px; height: 86px;">{$edit.0.description}</textarea>
                            </div>
                        </div>
                    </td>
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