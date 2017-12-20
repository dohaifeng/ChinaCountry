<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/public.css" />
        <link href="/chinacountry/Public/Admin/css/role_index.css" rel="stylesheet" />
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>

        <link type="text/css" rel="stylesheet" href="/chinacountry/Public/Admin/css/role_index.css" />
        <link type="text/css" rel="stylesheet" href="/chinacountry/Public/plugins/wbox/wbox/wbox.css" />
        <script src="/chinacountry/Public/plugins/wbox/mapapi.js"></script>
        <script src="/chinacountry/Public/plugins/wbox/wbox.js"></script>
    </head>
    <body>
        <table class="table tableW">
            <tr>
                <td class="th" colspan="20">用户列表</td>
            </tr>
            <tr class="tableTop">
                <td class="tdLittle1">ID</td>
                <td>标题</td>
                <td>相应权限</td>
            </tr>
            <?php if(is_array($group_list)): foreach($group_list as $key=>$item): ?><tr>
                    <td valign="top"><a href="javascript:del(<?php echo ($item['id']); ?>);" class="remove"></a><br /><?php echo ($key + 1); ?></td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="<?php echo ($item['id']); ?>" class="edit"></a><br /><span><?php echo ($item['title']); ?></span> </td>
                    <td class="text_left">
                        <?php if(is_array($rule_list)): foreach($rule_list as $idx=>$tmp): if(in_array(($tmp['id']), is_array($item['rules'])?$item['rules']:explode(',',$item['rules']))): ?><!-- <input type="checkbox"   groupid="<?php echo ($item['id']); ?>"  value="<?php echo ($tmp['id']); ?>" checked /><?php echo ($tmp['title']); ?> -->
                                <label class="checkbox checkboxW" for="<?php echo ($key); echo ($tmp['id']); ?>">
                                    <input type="checkbox" groupid="<?php echo ($item['id']); ?>" value="<?php echo ($tmp['id']); ?>" checked id="<?php echo ($key); echo ($tmp['id']); ?>" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        <?php echo ($tmp['title']); ?>
                                </label>
                                <?php else: ?>
                                <!-- <input type="checkbox"    groupid="<?php echo ($item['id']); ?>"  value="<?php echo ($tmp['id']); ?>" /><?php echo ($tmp['title']); ?> -->
                                <label class="checkbox checkboxW" for="<?php echo ($key); echo ($tmp['id']); ?>">
                                    <input type="checkbox" groupid="<?php echo ($item['id']); ?>" value="<?php echo ($tmp['id']); ?>" id="<?php echo ($key); echo ($tmp['id']); ?>" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        <?php echo ($tmp['title']); ?>
                                </label><?php endif; ?>
                            <?php if($idx % 5 == 4): ?><br /><?php endif; endforeach; endif; ?>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
    </body>
    <script src='/chinacountry/Public/Admin/js/role_index.js'></script>
</html>