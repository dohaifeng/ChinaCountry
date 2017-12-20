<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/chinacountry/Public/Admin/css/bootstrap.css">
        <link rel="stylesheet" href="/chinacountry/Public/Admin/css/public.css">
        <script type="text/javascript" src="/chinacountry/Public/Admin/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/js/public.js"></script>

        <title>会员基本信息</title>
    </head>
    <body>
        <table class="table table-striped table-bordered table-hover tableW">
            <tr class="tableTop">
                <td width="900" colspan='4' class="text_left">
                    <a href='<?php echo U("Bak/backups");?>' class="blue">添加数据备份</a>
                </td>
            </tr>
            <tr>
                <th>备份名称</th>
                <th>文件大小</th>
                <th>备份时间</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                    <td><?php echo ($v["name"]); ?></td>
                    <td><?php echo ($v["size"]); ?>Kb</td>
                    <td><?php echo ($v["time"]); ?></td>
                    <td>
                        <a href='<?php echo U("Bak/reduction",array("name"=>$v["name"]));?>' class="btn btn-info">还原</a>
                        <!-- <a href='<?php echo U("Bak/down",array("url"=>$v["url"]));?>' class="btn btn-info">下载</a> -->
                        <a href='<?php echo U("Bak/del",array("name"=>$v["name"]));?>' class="btn btn-warning">删除</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</body>
</html>