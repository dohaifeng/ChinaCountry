<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/advertising.css" rel="stylesheet"/>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>	
    </head>
    <body>
        <form method="post" action="<?php echo U('Advertising/index');?>" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="<?php echo ($keyword); ?>" onfocus="javascript:if (this.value === '<?php echo ($keyword); ?>')
                            this.value = '';" class="form-control"/>
            </div>
                            <input type='submit' class="btn btn-default button" value="查　询" />
        </form>
        <table class="table tableW">
            <tr>
                <td class="th" colspan="4">成绩列表</td>
            </tr>
            <tr class="tableTop">
                <th class="tdLittle8">标题</th>
                <th class="pictureW">缩放图</th>
                <th class='text_left'>操作</th>
            </tr>
            <?php if(is_array($advertising)): foreach($advertising as $key=>$tmp): ?><tr>
                    <td><?php echo ($tmp['title']); ?></td>
                    <td><img src="/chinacountry<?php echo ($tmp['picture']); ?>" width="90" ></td>
                    <td class='text_left'>
                        <a href="/chinacountry/index.php/Admin/Advertising/edit/id/<?php echo ($tmp['id']); ?>" class="blue">修改</a>
                        <a href="javascript:void 0;" name="delete" id="<?php echo ($tmp['id']); ?>" class="orange">删除</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div class="page">
            <p><?php echo ($page); ?></p>
        </div>
    </body>
    <script src="/chinacountry/Public/Admin/js/advertising.js"></script>
</html>