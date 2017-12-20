<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/public.css" />
        <link href="/chinacountry/Public/Admin/css/user.css" rel="stylesheet" />
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>

    </head>

    <body>
        <form method="post" action="<?php echo U('User/index');?>" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="<?php echo ($keyword); ?>" onfocus="javascript:if (this.value === '<?php echo ($keyword); ?>')
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
            <?php if(is_array($list)): foreach($list as $key=>$tmp): ?><tr>
                    <td><?php echo ($tmp['id']); ?></td>
                    <td><?php echo ($tmp['name']); ?></td>
                    <td><?php echo ($tmp['nickname']); ?></td>
                    <td><?php echo (date('Y-m-d',(isset($tmp['logined']) && ($tmp['logined'] !== ""))?($tmp['logined']):time())); ?></td>
                    <td class='text_left tdLittle22'>
                        <select class="form-control select select-primary select-block" id="<?php echo ($tmp['id']); ?>">
                            <?php if(is_array($auth_group)): foreach($auth_group as $key=>$item): if($tmp['AuthGroupAccess']['group_id'] == $item['id']): ?><option value="<?php echo ($item['id']); ?>" selected><?php echo ($item['title']); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo ($item['id']); ?>"><?php echo ($item['title']); ?></option><?php endif; endforeach; endif; ?>
                        </select>
                    </td>
                    <td><?php echo ($tmp['times']); ?> 次</td>
                    <td>
                        <a href="/chinacountry/index.php/Admin/User/edit/id/<?php echo ($tmp['id']); ?>" class="blue">编辑</a> 
                        <a href="javascript:void 0;" name="delete" id="<?php echo ($tmp['id']); ?>" class="orange">删除</a>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
        <div class="page">
            <p><?php echo ($page); ?></p>
        </div>
    </body>
    <script src="/chinacountry/Public/Admin/js/user.js"></script>
    <script>
                     $("select").select2({dropdownCssClass: 'dropdown-inverse'});
                     $(':checkbox').radiocheck();
    </script>
</html>