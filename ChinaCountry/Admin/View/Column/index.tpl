<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/column.css" rel="stylesheet" />
        <script src="__PUBLIC__/Admin/js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>

    <body>
        <table class="table tableW">
            <input type='hidden' name='parentid' value='0' />
            <input type='hidden' name='path' value='0'/>
            <tr>
                <td class="th" colspan="5">类别列表</td>
            </tr>
            <tr class="tableTop">
                <td  class="tdLittle1">ID</td>
                <th>分类名称</th>
                <th>类型</th>
                <th>URL</th>
                <th class='text_left'>操作</th>
            </tr>
            <foreach name="columns" key="key" item="tmp">
                <if condition="$tmp['parentid'] eq 0">
                    <tr>
                        <td class="tdLittle1">{$tmp['id']}</td>
                        <td class="text_left">|{$tmp['name']}</td>
                        <td>主栏目</td>
                        <td>{$tmp['url']}</td>
                        <td class="text_left">
                            <!--<a href="{:U('Column/index',array("id" => $tmp['id']))}" class="blue">查看内容</a>-->
                            <a href="{:U('Column/edit',array("id" => $tmp['id']))}" class="blue">编辑</a>
                            <a href="javascript:void 0;" name="delete" id="{$tmp['id']}" class="orange" >删除</a>
                            <a href='javascript:void 0;' name="addClassify" class="blue">添加子菜单</a>
                        </td>
                        <tr class="trHide">
                            <form action="{:U('Column/insertChild')}" method="post">
                                <td class="border_none" colspan="2">#
                                    <input type="hidden" name="parentid" value="{$tmp['id']}" />
                                    <input type="hidden" name="path" value="0,{$tmp['id']}" />
                                </td>
                                <td class="border_none">分类名称：<input class="form-control input-sm inputw inputh" type="text" name="name" /></td>
                                <td class="border_none">栏目链接: <input class="form-control input-sm inputw inputh" type="text" name="url" /></td>
                                <td class="border_none text_left"><input type="submit" value="添加" class="input_button"/></td>
                            </form>
                        </tr>
                    </tr>
                    <else />
                    <tr>
                        <td class="tdLittle1">{$tmp['id']}</td>
                        <td class="text_left">|------ {$tmp['name']}</td>
                        <td>菜单</td>
                        <td>{$tmp['url']}</td>
                        <td class='text_left'>
                            <!--<a href="{:U('Column/index',array("id" => $tmp['id']))}" class="blue">查看内容</a>-->
                            <a href="{:U('Column/edit',array("id" => $tmp['id']))}" class="blue">编辑</a>
                            <a href="javascript:void 0;" name="delete" id="{$tmp['id']}" class="orange" >删除</a>
                        </td>
                    </tr>
                </if>
            </foreach>
        </table>
        <div class="page">
            <p>{$page}</p>
        </div>
    </body>
    <script src="__PUBLIC__/Admin/js/column.js"></script>
</html>