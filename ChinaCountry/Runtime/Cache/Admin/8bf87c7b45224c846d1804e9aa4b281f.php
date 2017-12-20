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
            <tr>
                    <td valign="top"><a href="javascript:del(1);" class="remove"></a><br />1</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="1" class="edit"></a><br /><span>管理员</span> </td>
                    <td class="text_left">
                        <!-- <input type="checkbox"   groupid="1"  value="1" checked />查看用户 -->
                                <label class="checkbox checkboxW" for="01">
                                    <input type="checkbox" groupid="1" value="1" checked id="01" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="2" checked />添加用户 -->
                                <label class="checkbox checkboxW" for="02">
                                    <input type="checkbox" groupid="1" value="2" checked id="02" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="3" checked />插入用户 -->
                                <label class="checkbox checkboxW" for="03">
                                    <input type="checkbox" groupid="1" value="3" checked id="03" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="4" checked />编辑用户 -->
                                <label class="checkbox checkboxW" for="04">
                                    <input type="checkbox" groupid="1" value="4" checked id="04" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="5" checked />修改用户 -->
                                <label class="checkbox checkboxW" for="05">
                                    <input type="checkbox" groupid="1" value="5" checked id="05" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="1"  value="6" checked />删除用户 -->
                                <label class="checkbox checkboxW" for="06">
                                    <input type="checkbox" groupid="1" value="6" checked id="06" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="7" checked />查看分组角色 -->
                                <label class="checkbox checkboxW" for="07">
                                    <input type="checkbox" groupid="1" value="7" checked id="07" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="20" checked />修改分组权限 -->
                                <label class="checkbox checkboxW" for="020">
                                    <input type="checkbox" groupid="1" value="20" checked id="020" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="9" checked />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="09">
                                    <input type="checkbox" groupid="1" value="9" checked id="09" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="10" checked />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="010">
                                    <input type="checkbox" groupid="1" value="10" checked id="010" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="1"  value="11" checked />添加角色分组 -->
                                <label class="checkbox checkboxW" for="011">
                                    <input type="checkbox" groupid="1" value="11" checked id="011" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="12" checked />插入角色分组 -->
                                <label class="checkbox checkboxW" for="012">
                                    <input type="checkbox" groupid="1" value="12" checked id="012" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="13" checked />删除角色分组 -->
                                <label class="checkbox checkboxW" for="013">
                                    <input type="checkbox" groupid="1" value="13" checked id="013" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="14" checked />查看权限 -->
                                <label class="checkbox checkboxW" for="014">
                                    <input type="checkbox" groupid="1" value="14" checked id="014" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="15" checked />添加权限 -->
                                <label class="checkbox checkboxW" for="015">
                                    <input type="checkbox" groupid="1" value="15" checked id="015" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="1"  value="16" checked />插入权限 -->
                                <label class="checkbox checkboxW" for="016">
                                    <input type="checkbox" groupid="1" value="16" checked id="016" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="17" checked />编辑权限 -->
                                <label class="checkbox checkboxW" for="017">
                                    <input type="checkbox" groupid="1" value="17" checked id="017" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="18" checked />修改权限 -->
                                <label class="checkbox checkboxW" for="018">
                                    <input type="checkbox" groupid="1" value="18" checked id="018" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="19" checked />权限操作 -->
                                <label class="checkbox checkboxW" for="019">
                                    <input type="checkbox" groupid="1" value="19" checked id="019" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="21" checked />设置用户角色 -->
                                <label class="checkbox checkboxW" for="021">
                                    <input type="checkbox" groupid="1" value="21" checked id="021" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="1"  value="23" checked />查看备份 -->
                                <label class="checkbox checkboxW" for="023">
                                    <input type="checkbox" groupid="1" value="23" checked id="023" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="24" checked />添加备份 -->
                                <label class="checkbox checkboxW" for="024">
                                    <input type="checkbox" groupid="1" value="24" checked id="024" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>
                                                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(8);" class="remove"></a><br />2</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="8" class="edit"></a><br /><span>超级用户</span> </td>
                    <td class="text_left">
                        <!-- <input type="checkbox"   groupid="8"  value="1" checked />查看用户 -->
                                <label class="checkbox checkboxW" for="11">
                                    <input type="checkbox" groupid="8" value="1" checked id="11" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="8"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="12">
                                    <input type="checkbox" groupid="8" value="2" id="12" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                            <!-- <input type="checkbox"   groupid="8"  value="3" checked />插入用户 -->
                                <label class="checkbox checkboxW" for="13">
                                    <input type="checkbox" groupid="8" value="3" checked id="13" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="8"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="14">
                                    <input type="checkbox" groupid="8" value="4" id="14" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="15">
                                    <input type="checkbox" groupid="8" value="5" id="15" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="8"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="16">
                                    <input type="checkbox" groupid="8" value="6" id="16" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                            <!-- <input type="checkbox"   groupid="8"  value="7" checked />查看分组角色 -->
                                <label class="checkbox checkboxW" for="17">
                                    <input type="checkbox" groupid="8" value="7" checked id="17" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>
                                                            <!-- <input type="checkbox"   groupid="8"  value="20" checked />修改分组权限 -->
                                <label class="checkbox checkboxW" for="120">
                                    <input type="checkbox" groupid="8" value="20" checked id="120" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="8"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="19">
                                    <input type="checkbox" groupid="8" value="9" id="19" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="110">
                                    <input type="checkbox" groupid="8" value="10" id="110" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="8"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="111">
                                    <input type="checkbox" groupid="8" value="11" id="111" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="112">
                                    <input type="checkbox" groupid="8" value="12" id="112" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="113">
                                    <input type="checkbox" groupid="8" value="13" id="113" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                            <!-- <input type="checkbox"   groupid="8"  value="14" checked />查看权限 -->
                                <label class="checkbox checkboxW" for="114">
                                    <input type="checkbox" groupid="8" value="14" checked id="114" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="8"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="115">
                                    <input type="checkbox" groupid="8" value="15" id="115" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="8"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="116">
                                    <input type="checkbox" groupid="8" value="16" id="116" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="117">
                                    <input type="checkbox" groupid="8" value="17" id="117" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="118">
                                    <input type="checkbox" groupid="8" value="18" id="118" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="119">
                                    <input type="checkbox" groupid="8" value="19" id="119" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="121">
                                    <input type="checkbox" groupid="8" value="21" id="121" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="8"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="123">
                                    <input type="checkbox" groupid="8" value="23" id="123" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="8"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="124">
                                    <input type="checkbox" groupid="8" value="24" id="124" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(10);" class="remove"></a><br />3</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="10" class="edit"></a><br /><span>普通用户</span> </td>
                    <td class="text_left">
                        <!-- <input type="checkbox"   groupid="10"  value="1" checked />查看用户 -->
                                <label class="checkbox checkboxW" for="21">
                                    <input type="checkbox" groupid="10" value="1" checked id="21" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="10"  value="2" checked />添加用户 -->
                                <label class="checkbox checkboxW" for="22">
                                    <input type="checkbox" groupid="10" value="2" checked id="22" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="10"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="23">
                                    <input type="checkbox" groupid="10" value="3" id="23" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="24">
                                    <input type="checkbox" groupid="10" value="4" id="24" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="25">
                                    <input type="checkbox" groupid="10" value="5" id="25" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="26">
                                    <input type="checkbox" groupid="10" value="6" id="26" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="27">
                                    <input type="checkbox" groupid="10" value="7" id="27" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="220">
                                    <input type="checkbox" groupid="10" value="20" id="220" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="29">
                                    <input type="checkbox" groupid="10" value="9" id="29" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="210">
                                    <input type="checkbox" groupid="10" value="10" id="210" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="211">
                                    <input type="checkbox" groupid="10" value="11" id="211" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="212">
                                    <input type="checkbox" groupid="10" value="12" id="212" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="213">
                                    <input type="checkbox" groupid="10" value="13" id="213" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="214">
                                    <input type="checkbox" groupid="10" value="14" id="214" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="215">
                                    <input type="checkbox" groupid="10" value="15" id="215" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="216">
                                    <input type="checkbox" groupid="10" value="16" id="216" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="217">
                                    <input type="checkbox" groupid="10" value="17" id="217" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="218">
                                    <input type="checkbox" groupid="10" value="18" id="218" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="219">
                                    <input type="checkbox" groupid="10" value="19" id="219" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="221">
                                    <input type="checkbox" groupid="10" value="21" id="221" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="223">
                                    <input type="checkbox" groupid="10" value="23" id="223" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="224">
                                    <input type="checkbox" groupid="10" value="24" id="224" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                </td>
                </tr>        </table>
    </body>
    <script src='/chinacountry/Public/Admin/js/role_index.js'></script>
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