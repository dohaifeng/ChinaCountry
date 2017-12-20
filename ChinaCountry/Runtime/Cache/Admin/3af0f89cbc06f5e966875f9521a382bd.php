<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/public.css" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/column.css" rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
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
            <?php if(is_array($columns)): foreach($columns as $key=>$tmp): if($tmp['parentid'] == 0): ?><tr>
                        <td class="tdLittle1"><?php echo ($tmp['id']); ?></td>
                        <td class="text_left">|<?php echo ($tmp['name']); ?></td>
                        <td>主栏目</td>
                        <td><?php echo ($tmp['url']); ?></td>
                        <td class="text_left">
                            <!--<a href="<?php echo U('Column/index',array("id" => $tmp['id']));?>" class="blue">查看内容</a>-->
                            <a href="<?php echo U('Column/edit',array("id" => $tmp['id']));?>" class="blue">编辑</a>
                            <a href="javascript:void 0;" name="delete" id="<?php echo ($tmp['id']); ?>" class="orange" >删除</a>
                            <a href='javascript:void 0;' name="addClassify" class="blue">添加子菜单</a>
                        </td>
                        <tr class="trHide">
                            <form action="<?php echo U('Column/insertChild');?>" method="post">
                                <td class="border_none" colspan="2">#
                                    <input type="hidden" name="parentid" value="<?php echo ($tmp['id']); ?>" />
                                    <input type="hidden" name="path" value="0,<?php echo ($tmp['id']); ?>" />
                                </td>
                                <td class="border_none">分类名称：<input class="form-control input-sm inputw inputh" type="text" name="name" /></td>
                                <td class="border_none">栏目链接: <input class="form-control input-sm inputw inputh" type="text" name="url" /></td>
                                <td class="border_none text_left"><input type="submit" value="添加" class="input_button"/></td>
                            </form>
                        </tr>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td class="tdLittle1"><?php echo ($tmp['id']); ?></td>
                        <td class="text_left">|------ <?php echo ($tmp['name']); ?></td>
                        <td>菜单</td>
                        <td><?php echo ($tmp['url']); ?></td>
                        <td class='text_left'>
                            <!--<a href="<?php echo U('Column/index',array("id" => $tmp['id']));?>" class="blue">查看内容</a>-->
                            <a href="<?php echo U('Column/edit',array("id" => $tmp['id']));?>" class="blue">编辑</a>
                            <a href="javascript:void 0;" name="delete" id="<?php echo ($tmp['id']); ?>" class="orange" >删除</a>
                        </td>
                    </tr><?php endif; endforeach; endif; ?>
        </table>
        <div class="page">
            <p><?php echo ($page); ?></p>
        </div>
    </body>
    <script src="/chinacountry/Public/Admin/js/column.js"></script>
</html>