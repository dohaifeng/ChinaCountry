<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/public.css" />
    </head>
    <body>
        <table class="table tableW">

            <tr>
                <td colspan='2' class="th"><span class="span_people">&nbsp</span>管理员信息</td>
            </tr>
            <tr>
                <td class="td2">用户名</td>
                <td class="td1">{$user['0']['name']}</td>
            </tr>
            <tr>
                <td class="td2">昵称</td>
                <td class="td1">{$user['0']['nickname']}</td>
            </tr>
            <tr>
                <td class="td2">当前登录时间</td>
                <td class="td1">{$user.0.createtime|default=time()|date='Y-m-d H:i:s',###}</td>
            </tr>
            <tr>
                <td class="td2">上次登录时间</td>
                <td class="td1">{$user.0.logined|default=time()|date='Y-m-d H:i:s',###}</td>
            </tr>
            <tr>
                <td class="td2">累计登录</td>
                <td class="td1">{$user['0']['times']} 次</td>
            </tr>
            <tr>
                <td colspan='2' class="th"><span class="span_server" style="float:left">&nbsp</span>服务器信息</td>
            </tr>

            <tr>
                <td class="td2">操作系统</td>
                <td class="td1">{$info['操作系统']}</td>
            </tr>
            <tr>
                <td class="td2">运行环境</td>
                <td class="td1">{$info['运行环境']}</td>
            </tr>        
            <tr>
                <td class="td2">服务器时间</td>
                <td class="td1">{$info['服务器时间']}</td>
            </tr>
            <tr>
                <td class="td2">北京时间</td>
                <td class="td1">{$info['北京时间']}</td>
            </tr>
            <tr>
                <td class="td2">服务器域名/IP</td>
                <td class="td1">{$info['服务器域名/IP']}</td>
            </tr>
            <tr>
                <td class="td2">上传附件限制</td>
                <td class="td1">{$info['上传附件限制']}</td>
            </tr>
            <tr>
                <td class="td2">执行时间限制</td>
                <td class="td1">{$info['执行时间限制']}</td>
            </tr>
        </table>
    </body>
</html>
