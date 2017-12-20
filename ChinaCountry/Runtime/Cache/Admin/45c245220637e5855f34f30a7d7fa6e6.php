<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dth">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/essay.css" rel="stylesheet"/>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>
    </head>

    <body>
        <form method="post" action="<?php echo U('Video/index');?>" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="<?php echo ($keyword); ?>" class="form-control" onfocus="if($keyword === '请输入标题')<?php echo ($keyword =null); ?>"/>
            </div>
                            <input class="btn btn-default button" type="submit" value="查　询" />
        </form>
        <table class="table tableW">
            <tr>
                <th class="th" colspan="6">视频列表 | <a href="<?php echo U('Video/add');?>">上传视频</a></th>
            </tr>
            <tr class="tableTop">
                <th class="tdLittle0 colorGray">ID</th>
                <th class="tdLittle7 colorGray">标题</th>
                <th class="tdLittle8 colorGray">所属分类</th>
                <th class="tdLittle11 colorGray">更新时间</th>
                <th class="tdLittle7 colorGray">访问量</th>
                <th class="text_left colorGray">操作</th>
            </tr>
            <?php if(is_array($video)): foreach($video as $key=>$tmp): ?><tr>
                    <td class="paddingTop2"><?php echo ($tmp['id']); ?></td>
                    <td class="paddingTop2"><?php echo ($tmp['title']); ?></td>
                    <td class="paddingTop2"><?php echo ($tmp['name']); ?></td>
                    <td class="paddingTop2"><?php echo (date('Y年m月d日',(isset($tmp["date"]) && ($tmp["date"] !== ""))?($tmp["date"]):time())); ?></td>
                    <td class="paddingTop2"><?php echo ($tmp['times']); ?></td>
                    <td class="text_left">
                        <!-- <a href="<?php echo U('Home/Content/index',array("id" => $tmp['id']));?>" target="_Blank" class="blue">查看详情</a> -->
                        <a href="/chinacountry/index.php/Admin/Video/edit/id/<?php echo ($tmp['id']); ?>" class="blue">编辑</a>
                        <a href="javascript:void 0;" id="<?php echo ($tmp['id']); ?>" class="orange del">删除</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div class="page"><?php echo ($page); ?></div>
    </body>

</html>