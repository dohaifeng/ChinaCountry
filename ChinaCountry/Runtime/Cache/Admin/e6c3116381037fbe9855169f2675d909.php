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
        <link href="/chinacountry/Public/Admin/css/public.css" rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/role_index.css" rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form method="post" action='/chinacountry/index.php/Admin/Role/insert'>
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加权限</td>
                </tr>
                <tr>
                    <td>标题：</td>
                    <td><input class="form-control input-sm inputw" type='text' name='title'/></td>
                </tr>
                <tr>
                    <td>权限：</td>
                    <td>
                        <table id="list">
                            <tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="1" /> 查看用户 -->
                                    <label class="checkbox checkboxW" for="1">
                                        <input type="checkbox"  name="rules[]" value="1" id="1" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看用户                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="2" /> 添加用户 -->
                                    <label class="checkbox checkboxW" for="2">
                                        <input type="checkbox"  name="rules[]" value="2" id="2" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加用户                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="3" /> 插入用户 -->
                                    <label class="checkbox checkboxW" for="3">
                                        <input type="checkbox"  name="rules[]" value="3" id="3" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            插入用户                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="4" /> 编辑用户 -->
                                    <label class="checkbox checkboxW" for="4">
                                        <input type="checkbox"  name="rules[]" value="4" id="4" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑用户                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="5" /> 修改用户 -->
                                    <label class="checkbox checkboxW" for="5">
                                        <input type="checkbox"  name="rules[]" value="5" id="5" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            修改用户                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="6" /> 删除用户 -->
                                    <label class="checkbox checkboxW" for="6">
                                        <input type="checkbox"  name="rules[]" value="6" id="6" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            删除用户                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="7" /> 查看分组角色 -->
                                    <label class="checkbox checkboxW" for="7">
                                        <input type="checkbox"  name="rules[]" value="7" id="7" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看分组角色                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="20" /> 修改分组权限 -->
                                    <label class="checkbox checkboxW" for="20">
                                        <input type="checkbox"  name="rules[]" value="20" id="20" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            修改分组权限                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="9" /> 编辑分组角色显示名 -->
                                    <label class="checkbox checkboxW" for="9">
                                        <input type="checkbox"  name="rules[]" value="9" id="9" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑分组角色显示名                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="10" /> 修改分组角色显示名 -->
                                    <label class="checkbox checkboxW" for="10">
                                        <input type="checkbox"  name="rules[]" value="10" id="10" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            修改分组角色显示名                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="11" /> 添加角色分组 -->
                                    <label class="checkbox checkboxW" for="11">
                                        <input type="checkbox"  name="rules[]" value="11" id="11" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加角色分组                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="12" /> 插入角色分组 -->
                                    <label class="checkbox checkboxW" for="12">
                                        <input type="checkbox"  name="rules[]" value="12" id="12" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            插入角色分组                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="13" /> 删除角色分组 -->
                                    <label class="checkbox checkboxW" for="13">
                                        <input type="checkbox"  name="rules[]" value="13" id="13" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            删除角色分组                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="14" /> 查看权限 -->
                                    <label class="checkbox checkboxW" for="14">
                                        <input type="checkbox"  name="rules[]" value="14" id="14" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看权限                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="15" /> 添加权限 -->
                                    <label class="checkbox checkboxW" for="15">
                                        <input type="checkbox"  name="rules[]" value="15" id="15" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加权限                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="16" /> 插入权限 -->
                                    <label class="checkbox checkboxW" for="16">
                                        <input type="checkbox"  name="rules[]" value="16" id="16" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            插入权限                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="17" /> 编辑权限 -->
                                    <label class="checkbox checkboxW" for="17">
                                        <input type="checkbox"  name="rules[]" value="17" id="17" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑权限                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="18" /> 修改权限 -->
                                    <label class="checkbox checkboxW" for="18">
                                        <input type="checkbox"  name="rules[]" value="18" id="18" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            修改权限                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="19" /> 权限操作 -->
                                    <label class="checkbox checkboxW" for="19">
                                        <input type="checkbox"  name="rules[]" value="19" id="19" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            权限操作                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="21" /> 设置用户角色 -->
                                    <label class="checkbox checkboxW" for="21">
                                        <input type="checkbox"  name="rules[]" value="21" id="21" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            设置用户角色                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="23" /> 查看备份 -->
                                    <label class="checkbox checkboxW" for="23">
                                        <input type="checkbox"  name="rules[]" value="23" id="23" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看备份                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="24" /> 添加备份 -->
                                    <label class="checkbox checkboxW" for="24">
                                        <input type="checkbox"  name="rules[]" value="24" id="24" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加备份                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="25" /> 查看分类 -->
                                    <label class="checkbox checkboxW" for="25">
                                        <input type="checkbox"  name="rules[]" value="25" id="25" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看分类                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="26" /> 添加分类 -->
                                    <label class="checkbox checkboxW" for="26">
                                        <input type="checkbox"  name="rules[]" value="26" id="26" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加分类                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="27" /> 编辑分类 -->
                                    <label class="checkbox checkboxW" for="27">
                                        <input type="checkbox"  name="rules[]" value="27" id="27" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑分类                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="28" /> 查看新闻 -->
                                    <label class="checkbox checkboxW" for="28">
                                        <input type="checkbox"  name="rules[]" value="28" id="28" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看新闻                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="29" /> 添加新闻 -->
                                    <label class="checkbox checkboxW" for="29">
                                        <input type="checkbox"  name="rules[]" value="29" id="29" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加新闻                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="30" /> 编辑新闻 -->
                                    <label class="checkbox checkboxW" for="30">
                                        <input type="checkbox"  name="rules[]" value="30" id="30" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑新闻                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="31" /> 查看视频 -->
                                    <label class="checkbox checkboxW" for="31">
                                        <input type="checkbox"  name="rules[]" value="31" id="31" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看视频                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="32" /> 添加视频 -->
                                    <label class="checkbox checkboxW" for="32">
                                        <input type="checkbox"  name="rules[]" value="32" id="32" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加视频                                    </label>
                                </td>
                                <td></td></tr><tr>                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="33" /> 编辑视频 -->
                                    <label class="checkbox checkboxW" for="33">
                                        <input type="checkbox"  name="rules[]" value="33" id="33" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑视频                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="34" /> 查看轮播图 -->
                                    <label class="checkbox checkboxW" for="34">
                                        <input type="checkbox"  name="rules[]" value="34" id="34" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            查看轮播图                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="35" /> 添加轮播图 -->
                                    <label class="checkbox checkboxW" for="35">
                                        <input type="checkbox"  name="rules[]" value="35" id="35" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            添加轮播图                                    </label>
                                </td>
                                                                <td class="border_none tdLittle15">
                                    <!-- <input type="checkbox" name="rules[]" value="36" /> 编辑轮播图 -->
                                    <label class="checkbox checkboxW" for="36">
                                        <input type="checkbox"  name="rules[]" value="36" id="36" data-toggle="checkbox" class="custom-checkbox">
                                            <span class="icons">
                                                <span class="icon-unchecked colorGray"></span>
                                                <span class="icon-checked colorGreen"></span>
                                            </span>
                                            编辑轮播图                                    </label>
                                </td>
                                                            <td class="border_none">
                                <label class="checkbox checkboxW" for="selectAll">
                                    <input type="checkbox" value="" id="selectAll"  data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        全选
                                </label>
                            </td>
                        </table>
                    </td>
                </tr>                
                <tr>
                    <td class="text_left" colspan="2">
                        <input type="submit" value="提交" class="input_button"/>
                        <input type="reset" class="input_button"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
    <script>
        $("#selectAll").click(function() {
            if (this.checked) {
                $("#list :checkbox").attr("checked", true);
            } else {
                $("#list :checkbox").attr("checked", false);
            }
        });
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