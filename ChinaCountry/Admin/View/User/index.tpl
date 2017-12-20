<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link href="__PUBLIC__/Admin/css/user.css" rel="stylesheet" />
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>

    </head>

    <body>
        <form method="post" action="{:U('User/index')}" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="{$keyword}" onfocus="javascript:if (this.value === '{$keyword}')
                            this.value = '';" class="form-control"/>
            </div>
            <input type="submit" class="btn btn-default button" value="查　询" />
        </form>
        <table class="table tableW">
            <tr>
                <td class="th" colspan="20">用户列表</td>
            </tr>
            <tr class="tableTop">
                <td class="tdLittle1">ID</td>

                <td>用户名</td>
                <td>昵称</td>
                <td>上次登陆</td>
                <td>权限组</td>
                <td>累计登陆</td>
                <td>操作</td>
            </tr>
            <foreach name="list" key="key" item="tmp">
                <tr>
                    <td>{$tmp['id']}</td>
                    <td>{$tmp['name']}</td>
                    <td>{$tmp['nickname']}</td>
                    <td>{$tmp['logined']|default=time()|date='Y-m-d',###}</td>
                    <td class='text_left tdLittle22'>
                        <select class="form-control select select-primary select-block" id="{$tmp['id']}">
                            <foreach name="auth_group" key="key" item="item">
                                <if condition="$tmp['AuthGroupAccess']['group_id'] eq $item['id']">
                                    <option value="{$item['id']}" selected>{$item['title']}</option>
                                    <else />
                                    <option value="{$item['id']}">{$item['title']}</option>
                                </if>
                            </foreach>
                        </select>
                    </td>
                    <td>{$tmp['times']} 次</td>
                    <td>
                        <a href="__URL__/edit/id/{$tmp['id']}" class="blue">编辑</a> 
                        <a href="javascript:void 0;" name="delete" id="{$tmp['id']}" class="orange">删除</a>
                    </td>
                </tr>
            </foreach>
        </table>
        <div class="page">
            <p>{$page}</p>
        </div>
    </body>
    <script src="__PUBLIC__/Admin/js/user.js"></script>
    <script>
                     $("select").select2({dropdownCssClass: 'dropdown-inverse'});
                     $(':checkbox').radiocheck();
    </script>
</html>