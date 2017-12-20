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
                        <span class="iconfont icon-shezhi" data-toggle="right" data-original-title="系统管理"></span>
                        <span>系统管理</span>
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
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="/chinacountry/Public/plugins/wbox/wbox/wbox.css" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/public.css" />
        <link rel='stylesheet' href='/chinacountry/Public/Admin/Css/auth_index.css' />
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/Admin/Js/public.js"></script>	
        <script src="/chinacountry/Public/Admin/js/flat-ui-pro.min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/plugins/wbox/wbox-min.js"></script>
        <script type="text/javascript" src="/chinacountry/Public/plugins/wbox/mapapi.js"></script>
    </head>

    <body>
        <table class="table tableW">
            <form action="/chinacountry/index.php/admin/auth/opts.html" method="post">
                <input type="submit" name="submit" value="选中有效" class="blue" style="margin: 15px 15px 15px 30px;" />
                <input type="submit" name="submit" value="选中禁用" class="blue" style="margin: 15px;"/>
                <input type="submit" name="submit" value="选中删除" class="blue" style="margin: 15px;"/>
                <tr>
                    <td class="th" colspan="20">权限列表</td>
                </tr>
                <tr class="tableTop">
                    <td >#</td>
                    <td class="tdLittle18">URL</td>
                    <td >标题</td>
                    <td >状态</td>
                    <td >操作</td>
                </tr>
                <tr>
                        <td>
                            <label class="checkbox" for="checkbox15">
                                <input type="checkbox" name='ids[]' value="15" id="checkbox15" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    15                            </label>
                        </td>
                        <td>Auth/add</td>
                        <td>添加权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="15" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox17">
                                <input type="checkbox" name='ids[]' value="17" id="checkbox17" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    17                            </label>
                        </td>
                        <td>Auth/edit</td>
                        <td>编辑权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="17" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox14">
                                <input type="checkbox" name='ids[]' value="14" id="checkbox14" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    14                            </label>
                        </td>
                        <td>Auth/index</td>
                        <td>查看权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="14" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox16">
                                <input type="checkbox" name='ids[]' value="16" id="checkbox16" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    16                            </label>
                        </td>
                        <td>Auth/insert</td>
                        <td>插入权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="16" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox19">
                                <input type="checkbox" name='ids[]' value="19" id="checkbox19" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    19                            </label>
                        </td>
                        <td>Auth/opts</td>
                        <td>权限操作</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="19" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox18">
                                <input type="checkbox" name='ids[]' value="18" id="checkbox18" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    18                            </label>
                        </td>
                        <td>Auth/update</td>
                        <td>修改权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="18" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox24">
                                <input type="checkbox" name='ids[]' value="24" id="checkbox24" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    24                            </label>
                        </td>
                        <td>Bak/add</td>
                        <td>添加备份</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="24" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox23">
                                <input type="checkbox" name='ids[]' value="23" id="checkbox23" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    23                            </label>
                        </td>
                        <td>Bak/index</td>
                        <td>查看备份</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="23" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox26">
                                <input type="checkbox" name='ids[]' value="26" id="checkbox26" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    26                            </label>
                        </td>
                        <td>Column/add</td>
                        <td>添加分类</td>
                        <td>
                             
                                <font color="red">禁用</font>                        </td>
                        <td><input type="button" aid="26" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox27">
                                <input type="checkbox" name='ids[]' value="27" id="checkbox27" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    27                            </label>
                        </td>
                        <td>Column/edit</td>
                        <td>编辑分类</td>
                        <td>
                             
                                <font color="red">禁用</font>                        </td>
                        <td><input type="button" aid="27" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox25">
                                <input type="checkbox" name='ids[]' value="25" id="checkbox25" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    25                            </label>
                        </td>
                        <td>column/index</td>
                        <td>查看分类</td>
                        <td>
                             
                                <font color="red">禁用</font>                        </td>
                        <td><input type="button" aid="25" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox11">
                                <input type="checkbox" name='ids[]' value="11" id="checkbox11" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    11                            </label>
                        </td>
                        <td>Role/add</td>
                        <td>添加角色分组</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="11" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox13">
                                <input type="checkbox" name='ids[]' value="13" id="checkbox13" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    13                            </label>
                        </td>
                        <td>Role/delete</td>
                        <td>删除角色分组</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="13" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox9">
                                <input type="checkbox" name='ids[]' value="9" id="checkbox9" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    9                            </label>
                        </td>
                        <td>Role/editTitle</td>
                        <td>编辑分组角色显示名</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="9" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox7">
                                <input type="checkbox" name='ids[]' value="7" id="checkbox7" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    7                            </label>
                        </td>
                        <td>Role/index</td>
                        <td>查看分组角色</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="7" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox12">
                                <input type="checkbox" name='ids[]' value="12" id="checkbox12" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    12                            </label>
                        </td>
                        <td>Role/insert</td>
                        <td>插入角色分组</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="12" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox20">
                                <input type="checkbox" name='ids[]' value="20" id="checkbox20" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    20                            </label>
                        </td>
                        <td>Role/setAuthGroup</td>
                        <td>修改分组权限</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="20" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox10">
                                <input type="checkbox" name='ids[]' value="10" id="checkbox10" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    10                            </label>
                        </td>
                        <td>Role/updateTitle</td>
                        <td>修改分组角色显示名</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="10" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox2">
                                <input type="checkbox" name='ids[]' value="2" id="checkbox2" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    2                            </label>
                        </td>
                        <td>User/add</td>
                        <td>添加用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="2" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox6">
                                <input type="checkbox" name='ids[]' value="6" id="checkbox6" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    6                            </label>
                        </td>
                        <td>User/delete</td>
                        <td>删除用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="6" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox4">
                                <input type="checkbox" name='ids[]' value="4" id="checkbox4" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    4                            </label>
                        </td>
                        <td>User/edit</td>
                        <td>编辑用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="4" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox1">
                                <input type="checkbox" name='ids[]' value="1" id="checkbox1" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    1                            </label>
                        </td>
                        <td>User/index</td>
                        <td>查看用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="1" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox3">
                                <input type="checkbox" name='ids[]' value="3" id="checkbox3" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    3                            </label>
                        </td>
                        <td>User/insert</td>
                        <td>插入用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="3" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox21">
                                <input type="checkbox" name='ids[]' value="21" id="checkbox21" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    21                            </label>
                        </td>
                        <td>User/setAuthGroupAccess</td>
                        <td>设置用户角色</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="21" value="编辑" class="blue" /></td>
                    </tr><tr>
                        <td>
                            <label class="checkbox" for="checkbox5">
                                <input type="checkbox" name='ids[]' value="5" id="checkbox5" data-toggle="checkbox" class="custom-checkbox">
                                    <span class="icons">
                                        <span class="icon-unchecked colorGray"></span>
                                        <span class="icon-checked colorGreen"></span>
                                    </span>
                                    5                            </label>
                        </td>
                        <td>User/update</td>
                        <td>修改用户</td>
                        <td>
                            有效
                                                        </td>
                        <td><input type="button" aid="5" value="编辑" class="blue" /></td>
                    </tr>            </form>
        </table>
    </body>
    <script src="/chinacountry/Public/Admin/js/auth_index.js"></script>
    <script>

    </script>
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