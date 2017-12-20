<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link href="__PUBLIC__/Admin/css/column.css" rel="stylesheet" />
        <script src="__PUBLIC__/Admin/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
    </head>

    <body>
        <table class="table tableW">
                <input type='hidden' name='parentid' value='0' />
                <input type='hidden' name='path' value='0'/>
                <tr>
                    <td class="th" colspan="5">类别列表 | <a class="colorBlue" href='{:U('Settings/add')}'>添加信息</a></td>
                </tr>
            <tr class="tableTop">
                <th class="tdLittle8 colorGray">标题</th>
                <th class="tdLittle6 colorGray">关键字</th>
                <th class="tdLittle6 colorGray">站点描述</th>
                <th class="text_left colorGray">操作</th>
            </tr>
            <foreach name="site" key="key" item="tmp">
                <tr>
                    <td class="paddingTop2">{$tmp['title']}</td>
                    <td class="paddingTop2">{$tmp['keyword']}</td>
                    <td class="paddingTop2">{$tmp['description']}</td>
                    <td class="text_left">
                        <a href="{:U('Settings/edit',array("id" => $tmp['id']))}" class="blue">编辑</a>
                        <a href="javascript:void 0;" name="delete" id="{$tmp['id']}" class="orange" >删除</a>
                    </td>
                </tr>
            </foreach>
        </table>
        <div class="page">
            <p>{$page}</p>
        </div>
    </body>
    <script src="__PUBLIC__/Admin/js/column.js"></script>
</html>