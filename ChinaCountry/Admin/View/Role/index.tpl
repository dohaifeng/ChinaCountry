<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
        <link href="__PUBLIC__/Admin/css/role_index.css" rel="stylesheet" />
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>

        <link type="text/css" rel="stylesheet" href="__PUBLIC__/Admin/css/role_index.css" />
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/plugins/wbox/wbox/wbox.css" />
        <script src="__PUBLIC__/plugins/wbox/mapapi.js"></script>
        <script src="__PUBLIC__/plugins/wbox/wbox.js"></script>
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
            <foreach name="group_list" key="key" item="item">
                <tr>
                    <td valign="top"><a href="javascript:del({$item['id']});" class="remove"></a><br />{$key + 1}</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="{$item['id']}" class="edit"></a><br /><span>{$item['title']}</span> </td>
                    <td class="text_left">
                        <foreach name="rule_list" key="idx" item="tmp">
                            <in name="tmp['id']" value="$item['rules']">
                                <!-- <input type="checkbox"   groupid="{$item['id']}"  value="{$tmp['id']}" checked />{$tmp['title']} -->
                                <label class="checkbox checkboxW" for="{$key}{$tmp['id']}">
                                    <input type="checkbox" groupid="{$item['id']}" value="{$tmp['id']}" checked id="{$key}{$tmp['id']}" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        {$tmp['title']}
                                </label>
                                <else />
                                <!-- <input type="checkbox"    groupid="{$item['id']}"  value="{$tmp['id']}" />{$tmp['title']} -->
                                <label class="checkbox checkboxW" for="{$key}{$tmp['id']}">
                                    <input type="checkbox" groupid="{$item['id']}" value="{$tmp['id']}" id="{$key}{$tmp['id']}" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        {$tmp['title']}
                                </label>
                            </in>
                            <if condition="$idx % 5 == 4"><br /></if>
                        </foreach>
                    </td>
                </tr>
            </foreach>
        </table>
    </body>
    <script src='__PUBLIC__/Admin/js/role_index.js'></script>
</html>