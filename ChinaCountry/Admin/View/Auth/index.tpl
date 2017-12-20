<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/plugins/wbox/wbox/wbox.css" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link rel='stylesheet' href='__PUBLIC__/Admin/Css/auth_index.css' />
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/plugins/wbox/wbox-min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/plugins/wbox/mapapi.js"></script>
    </head>

    <body>
        <table class="table tableW">
            <form action="{:U('Auth/opts')}" method="post">
                <input type="submit" name="submit" value="选中有效" class="blue" style="margin: 15px 15px 15px 30px;" />
                <input type="submit" name="submit" value="选中禁用" class="blue" style="margin: 15px;"/>
                <input type="submit" name="submit" value="选中删除" class="blue" style="margin: 15px;"/>
                <tr>
                    <td class="th" colspan="20">权限列表</td>
                </tr>
                <tr class="tableTop">
                    <td >#</td>
                    <td class="tdLittle18">URL</td>
                    <td >标题</td>
                    <td >状态</td>
                    <td >操作</td>
                </tr>
                <foreach name='auth_list' key='key' item='tmp'>
                    <tr>
                        <td>
                            <label class="checkbox" for="checkbox{$tmp['id']}">
                                <input type="checkbox" name='ids[]' value="{$tmp['id']}" id="checkbox{$tmp['id']}" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    {$tmp['id']}
                            </label>
                        </td>
                        <td>{$tmp['name']}</td>
                        <td>{$tmp['title']}</td>
                        <td>
                            <if condition="$tmp['status'] eq 1"> 
                                有效
                                <else /> 
                                <font color="red">禁用</font> 
                            </if>
                        </td>
                        <td><input type="button" aid="{$tmp['id']}" value="编辑" class="blue" /></td>
                    </tr>
                </foreach>
            </form>
        </table>
    </body>
    <script src="__PUBLIC__/Admin/js/auth_index.js"></script>
    <script>

    </script>
</html>