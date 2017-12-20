<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dth">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/public.css" rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/essay.css" rel="stylesheet"/>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>
    </head>

    <body>
        <form method="post" action="{:U('Video/index')}" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="{$keyword}" class="form-control" onfocus="if($keyword === '请输入标题'){$keyword =null}"/>
            </div>
                            <input class="btn btn-default button" type="submit" value="查　询" />
        </form>
        <table class="table tableW">
            <tr>
                <th class="th" colspan="6">视频列表 | <a href="{:U('Video/add')}">上传视频</a></th>
            </tr>
            <tr class="tableTop">
                <th class="tdLittle0 colorGray">ID</th>
                <th class="tdLittle7 colorGray">标题</th>
                <th class="tdLittle8 colorGray">所属分类</th>
                <th class="tdLittle11 colorGray">更新时间</th>
                <th class="tdLittle7 colorGray">访问量</th>
                <th class="text_left colorGray">操作</th>
            </tr>
            <foreach name="video" key="key" item="tmp">
                <tr>
                    <td class="paddingTop2">{$tmp['id']}</td>
                    <td class="paddingTop2">{$tmp['title']}</td>
                    <td class="paddingTop2">{$tmp['name']}</td>
                    <td class="paddingTop2">{$tmp.date|default=time()|date='Y年m月d日',###}</td>
                    <td class="paddingTop2">{$tmp['times']}</td>
                    <td class="text_left">
                        <!-- <a href="{:U('Home/Content/index',array("id" => $tmp['id']))}" target="_Blank" class="blue">查看详情</a> -->
                        <a href="__URL__/edit/id/{$tmp['id']}" class="blue">编辑</a>
                        <a href="javascript:void 0;" id="{$tmp['id']}" class="orange del">删除</a>
                    </td>
                </tr>
            </foreach>
        </table>
        <div class="page">{$page}</div>
    </body>

</html>
