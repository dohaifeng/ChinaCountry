<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="zh-CN">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/chinacountry/Public/adminStyle/css/base.css"  rel="stylesheet">
    <link href="/chinacountry/Public/adminStyle/css/bootstrap.min.css"  rel="stylesheet">
    <link href="/chinacountry/Public/adminStyle/css/flat-ui-pro.min.css"  rel="stylesheet">
    <link href="/chinacountry/Public/adminStyle/css/style.css"  rel="stylesheet">
    <link href="/chinacountry/Public/adminStyle/iconfont/iconfont.css"  rel="stylesheet">
    <script type="text/javascript">
        var urlCode="/chinacountry/Public/adminStyle/js/";
    </script>
    <script src="/chinacountry/Public/adminStyle/js/sea.js"></script>
    <script src="/chinacountry/Public/adminStyle/js/seaConfig.js"></script>
    <script src="/chinacountry/Public/adminStyle/js/jquery-2.1.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/chinacountry/Public/adminStyle/js/vendor/html5shiv.min.js"></script>
    <script src="/chinacountry/Public/adminStyle/js/vendor/respond.min.js"></script>
    <![endif]-->
    <title>网站后台管理</title>
</head>
<body>
    <div class="blWrap clearfix">

        <div class="top">
            <span class="appName">网站后台管理</span>
            <ul class="user">
                <li onclick="window.location.href='/chinacountry/index.php/admin/user/index.html'">柚子</li>
                <li></li>
                <li onclick="window.location.href='/chinacountry/index.php/admin/user/edit.html'">修改密码</li>
                <li onclick="window.open('/chinacountry/index.php/home/index/index.html')">前台首页</li>
                <li onclick="window.location.href='/chinacountry/index.php/admin/login/logout.html'">退出系统</li>
            </ul>
        </div>
       <nav class="navbar navbar-inverse visible-xs-block mobile">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-3">
           </button>
       </nav>
        <!-- <div class="popover right navListPopover">
            <div class="arrow"></div>
            <div class="popover-content">
            </div>
        </div> -->
        <nav class="hLeft visible-sm-block visible-lg-block visible-md-block">
            <div class="navBtn">
                <div  class="btnIcon" >

                </div>
                <div class="btnIcon2"></div>
            </div>
            <ul class="navList">
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-duojilanmu" data-toggle="right" data-original-title="分类管理"></span>
                        <span>分类管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="plfh">
                
                                <a href="/chinacountry/index.php/admin/column/index.html" class="pos" data-name="分类列表"><span>分类列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="hpManage">
                
                                <a href="/chinacountry/index.php/admin/column/add.html" class="pos" data-name="添加分类"><span>添加分类</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-zixun" data-toggle="right" data-original-title="新闻资讯管理"></span>
                        <span>新闻资讯管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="plfh">
                
                                <a href="/chinacountry/index.php/admin/news/index.html" class="pos" data-name="新闻列表"><span>新闻列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="hpManage">
                
                                <a href="/chinacountry/index.php/admin/news/add.html" class="pos" data-name="添加新闻"><span>添加新闻</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-ziyuanguanli" data-toggle="right" data-original-title="视频资讯管理"></span>
                        <span>视频资讯管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="plfh">
                
                                <a href="/chinacountry/index.php/admin/video/index.html" class="pos" data-name="视频列表"><span>视频列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="hpManage">
                
                                <a href="/chinacountry/index.php/admin/video/add.html" class="pos" data-name="添加视频"><span>添加视频</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-tupianlunbo" data-toggle="right" data-original-title="视频资讯管理"></span>
                        <span>轮播图管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="plfh">
                
                                <a href="/chinacountry/index.php/admin/advertising/index.html" class="pos" data-name="轮播图列表"><span>轮播图列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="ddmanage" data-toggle-children="hpManage">
                
                                <a href="/chinacountry/index.php/admin/advertising/add.html" class="pos" data-name="添加轮播图"><span>添加轮播图</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-quanxian" data-toggle="right" data-original-title="权限管理"></span>
                        <span>权限管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        <li>
                            <div onlink="" data-toggle="hymanage" data-toggle-children="vipManages">
                                <a href="/chinacountry/index.php/admin/auth/index.html"><span class="pos" data-name="权限列表">权限列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div onlink="" data-toggle="hymanage" data-toggle-children="vipManages">
                                <a href="/chinacountry/index.php/admin/auth/add.html"><span class="pos" data-name="添加权限">添加权限</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-icon1" data-toggle="right" data-original-title="权限控制"></span>
                        <span>角色管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                                <a href="/chinacountry/index.php/admin/role/index.html" class="pos" data-name="角色列表"><span>角色列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                                <a href="/chinacountry/index.php/admin/role/add.html" class="pos" data-name="添加角色组"><span>添加角色组</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-yonghu" data-toggle="right" data-original-title="用户管理"></span>
                        <span>用户管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                
                                <a href="/chinacountry/index.php/admin/user/index.html" class="pos" data-name="用户列表"><span>用户列表</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                
                                <a href="/chinacountry/index.php/admin/user/add.html" class="pos" data-name="添加用户"><span>添加用户</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div>
                        <div class="maskDiv"></div>
                        <span class="iconfont icon-shezhi" data-toggle="right" data-original-title="系统管理"></span>
                        <span>系统管理</span>
                       <span class="iconfont icon-jia"></span>
                    </div>
                    <ul class="children">
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                
                                <a href="/chinacountry/index.php/admin/settings/site.html" class="pos" data-name="设置站点介绍"><span>设置站点介绍</span></a>
                            </div>
                        </li>
                        <li>
                            <div data-toggle="cxmanage" data-toggle-children="couponManages">
                
                                <a href="/chinacountry/index.php/admin/bak/index.html" class="pos" data-name="数据备份还原"><span>数据备份还原</span></a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--  -->
        </nav>
       
        <div class="hRight">
            <div class=" rightTop">
                <ul>
                    <li><a href="/chinacountry/index.php/admin/index/index.html">首页</a></li>
                    <li><a href="javascript:void(0);">栏目管理</a></li>
                    <li><a href="javascript:void(0);">栏目列表</a></li>
                </ul>
            </div>
            <!-- start-->
            <!DOCTYPE html>
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
                    <a href='/chinacountry/index.php/admin/bak/backups.html' class="blue">添加数据备份</a>
                </td>
            </tr>
            <tr>
                <th>备份名称</th>
                <th>文件大小</th>
                <th>备份时间</th>
                <th>操作</th>
            </tr>
            <tbody>
            <tr>
                    <td>20160812_2</td>
                    <td>7Kb</td>
                    <td>2016-08-12 11:22:36</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/20160812_2.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-20160812_2.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/20160812_2.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>20160815_1</td>
                    <td>9Kb</td>
                    <td>2016-08-15 13:54:50</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/20160815_1.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-20160815_1.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/20160815_1.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>20160816_1</td>
                    <td>9Kb</td>
                    <td>2016-08-16 10:38:46</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/20160816_1.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-20160816_1.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/20160816_1.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1471498969</td>
                    <td>11Kb</td>
                    <td>2016-08-18 13:42:49</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1471498969.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1471498969.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1471498969.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1471915021</td>
                    <td>12Kb</td>
                    <td>2016-08-23 09:17:01</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1471915021.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1471915021.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1471915021.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1472004470</td>
                    <td>12Kb</td>
                    <td>2016-08-24 10:07:51</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1472004470.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1472004470.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1472004470.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1472176229</td>
                    <td>12Kb</td>
                    <td>2016-08-26 09:50:29</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1472176229.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1472176229.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1472176229.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1472286384</td>
                    <td>12Kb</td>
                    <td>2016-08-27 16:26:25</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1472286384.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1472286384.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1472286384.html' class="btn btn-warning">删除</a>
                    </td>
                </tr><tr>
                    <td>systemBackup1472460179</td>
                    <td>12Kb</td>
                    <td>2016-08-29 16:43:00</td>
                    <td>
                        <a href='/chinacountry/index.php/admin/bak/reduction/name/systemBackup1472460179.html' class="btn btn-info">还原</a>
                        <!-- <a href='/chinacountry/index.php/admin/bak/down/url/D%253A%255Cwamp%255Cwww%255CChinaCountry-o-sql-o-backup-o-systemBackup1472460179.sql.html' class="btn btn-info">下载</a> -->
                        <a href='/chinacountry/index.php/admin/bak/del/name/systemBackup1472460179.html' class="btn btn-warning">删除</a>
                    </td>
                </tr>        </tbody>
    </table>
</body>
</html>
        </div>
    </div>
<script>
    seajs.use("/chinacountry/Public/adminStyle/js/main.js",function(a){
        a.main.init();
    })
</script>
</body>

</html>