<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/bootstrap.css">
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/public.css">
        <script type="text/javascript" src="__PUBLIC__/Admin/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/js/public.js"></script>

        <title>会员基本信息</title>
    </head>
    <body>
        <table class="table table-striped table-bordered table-hover tableW">
            <tr class="tableTop">
                <td width="900" colspan='4' class="text_left">
                    <a href='{:U("Bak/backups")}' class="blue">添加数据备份</a>
                </td>
            </tr>
            <tr>
                <th>备份名称</th>
                <th>文件大小</th>
                <th>备份时间</th>
                <th>操作</th>
            </tr>
            <tbody>
            <foreach name='data' item='v'>
                <tr>
                    <td>{$v.name}</td>
                    <td>{$v.size}Kb</td>
                    <td>{$v.time}</td>
                    <td>
                        <a href='{:U("Bak/reduction",array("name"=>$v["name"]))}' class="btn btn-info">还原</a>
                        <!-- <a href='{:U("Bak/down",array("url"=>$v["url"]))}' class="btn btn-info">下载</a> -->
                        <a href='{:U("Bak/del",array("name"=>$v["name"]))}' class="btn btn-warning">删除</a>
                    </td>
                </tr>
            </foreach>
        </tbody>
    </table>
</body>
</html>