<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/advertising.css" rel="stylesheet"/>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Admin/Js/public.js"></script>	
        <script src="__PUBLIC__/Admin/js/flat-ui-pro.min.js"></script>	
    </head>
    <body>
        <form method="post" action="{:U('Advertising/index')}" role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" name="keyword" value="{$keyword}" onfocus="javascript:if (this.value === '{$keyword}')
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
            <foreach name="advertising" key="key" item="tmp">
                <tr>
                    <td>{$tmp['title']}</td>
                    <td><img src="__ROOT__{$tmp['picture']}" width="90" ></td>
                    <td class='text_left'>
                        <a href="__URL__/edit/id/{$tmp['id']}" class="blue">修改</a>
                        <a href="javascript:void 0;" name="delete" id="{$tmp['id']}" class="orange">删除</a>
                    </td>
                </tr>
            </foreach>
        </table>
        <div class="page">
            <p>{$page}</p>
        </div>
    </body>
    <script src="__PUBLIC__/Admin/js/advertising.js"></script>
</html>
