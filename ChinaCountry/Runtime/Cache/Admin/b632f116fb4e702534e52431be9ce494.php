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
                                                            <!-- <input type="checkbox"   groupid="1"  value="25" checked />查看分类 -->
                                <label class="checkbox checkboxW" for="025">
                                    <input type="checkbox" groupid="1" value="25" checked id="025" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="26" checked />添加分类 -->
                                <label class="checkbox checkboxW" for="026">
                                    <input type="checkbox" groupid="1" value="26" checked id="026" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="27" checked />编辑分类 -->
                                <label class="checkbox checkboxW" for="027">
                                    <input type="checkbox" groupid="1" value="27" checked id="027" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>
                                                            <br />                                <!-- <input type="checkbox"    groupid="1"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="028">
                                    <input type="checkbox" groupid="1" value="28" id="028" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="1"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="029">
                                    <input type="checkbox" groupid="1" value="29" id="029" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                            <!-- <input type="checkbox"   groupid="1"  value="30" checked />编辑新闻 -->
                                <label class="checkbox checkboxW" for="030">
                                    <input type="checkbox" groupid="1" value="30" checked id="030" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="31" checked />查看视频 -->
                                <label class="checkbox checkboxW" for="031">
                                    <input type="checkbox" groupid="1" value="31" checked id="031" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>
                                                            <!-- <input type="checkbox"   groupid="1"  value="32" checked />添加视频 -->
                                <label class="checkbox checkboxW" for="032">
                                    <input type="checkbox" groupid="1" value="32" checked id="032" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>
                                                            <br />                                <!-- <input type="checkbox"    groupid="1"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="033">
                                    <input type="checkbox" groupid="1" value="33" id="033" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="1"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="034">
                                    <input type="checkbox" groupid="1" value="34" id="034" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="1"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="035">
                                    <input type="checkbox" groupid="1" value="35" id="035" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                            <!-- <input type="checkbox"   groupid="1"  value="36" checked />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="036">
                                    <input type="checkbox" groupid="1" value="36" checked id="036" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>
                                                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(10);" class="remove"></a><br />2</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="10" class="edit"></a><br /><span>普通用户</span> </td>
                    <td class="text_left">
                        <!-- <input type="checkbox"   groupid="10"  value="1" checked />查看用户 -->
                                <label class="checkbox checkboxW" for="11">
                                    <input type="checkbox" groupid="10" value="1" checked id="11" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="10"  value="2" checked />添加用户 -->
                                <label class="checkbox checkboxW" for="12">
                                    <input type="checkbox" groupid="10" value="2" checked id="12" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="10"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="13">
                                    <input type="checkbox" groupid="10" value="3" id="13" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="14">
                                    <input type="checkbox" groupid="10" value="4" id="14" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="15">
                                    <input type="checkbox" groupid="10" value="5" id="15" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="16">
                                    <input type="checkbox" groupid="10" value="6" id="16" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="17">
                                    <input type="checkbox" groupid="10" value="7" id="17" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="120">
                                    <input type="checkbox" groupid="10" value="20" id="120" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="19">
                                    <input type="checkbox" groupid="10" value="9" id="19" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="110">
                                    <input type="checkbox" groupid="10" value="10" id="110" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="111">
                                    <input type="checkbox" groupid="10" value="11" id="111" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="112">
                                    <input type="checkbox" groupid="10" value="12" id="112" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="113">
                                    <input type="checkbox" groupid="10" value="13" id="113" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="114">
                                    <input type="checkbox" groupid="10" value="14" id="114" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="115">
                                    <input type="checkbox" groupid="10" value="15" id="115" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="116">
                                    <input type="checkbox" groupid="10" value="16" id="116" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="117">
                                    <input type="checkbox" groupid="10" value="17" id="117" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="118">
                                    <input type="checkbox" groupid="10" value="18" id="118" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="119">
                                    <input type="checkbox" groupid="10" value="19" id="119" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="121">
                                    <input type="checkbox" groupid="10" value="21" id="121" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="123">
                                    <input type="checkbox" groupid="10" value="23" id="123" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="124">
                                    <input type="checkbox" groupid="10" value="24" id="124" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="125">
                                    <input type="checkbox" groupid="10" value="25" id="125" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="126">
                                    <input type="checkbox" groupid="10" value="26" id="126" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="127">
                                    <input type="checkbox" groupid="10" value="27" id="127" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="128">
                                    <input type="checkbox" groupid="10" value="28" id="128" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="129">
                                    <input type="checkbox" groupid="10" value="29" id="129" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="130">
                                    <input type="checkbox" groupid="10" value="30" id="130" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="131">
                                    <input type="checkbox" groupid="10" value="31" id="131" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="132">
                                    <input type="checkbox" groupid="10" value="32" id="132" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="10"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="133">
                                    <input type="checkbox" groupid="10" value="33" id="133" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="134">
                                    <input type="checkbox" groupid="10" value="34" id="134" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="135">
                                    <input type="checkbox" groupid="10" value="35" id="135" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="10"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="136">
                                    <input type="checkbox" groupid="10" value="36" id="136" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(11);" class="remove"></a><br />3</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="11" class="edit"></a><br /><span>ces</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="11"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="21">
                                    <input type="checkbox" groupid="11" value="1" id="21" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="22">
                                    <input type="checkbox" groupid="11" value="2" id="22" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="23">
                                    <input type="checkbox" groupid="11" value="3" id="23" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="24">
                                    <input type="checkbox" groupid="11" value="4" id="24" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="25">
                                    <input type="checkbox" groupid="11" value="5" id="25" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="26">
                                    <input type="checkbox" groupid="11" value="6" id="26" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="27">
                                    <input type="checkbox" groupid="11" value="7" id="27" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="220">
                                    <input type="checkbox" groupid="11" value="20" id="220" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="29">
                                    <input type="checkbox" groupid="11" value="9" id="29" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="210">
                                    <input type="checkbox" groupid="11" value="10" id="210" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="211">
                                    <input type="checkbox" groupid="11" value="11" id="211" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="212">
                                    <input type="checkbox" groupid="11" value="12" id="212" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="213">
                                    <input type="checkbox" groupid="11" value="13" id="213" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="214">
                                    <input type="checkbox" groupid="11" value="14" id="214" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="215">
                                    <input type="checkbox" groupid="11" value="15" id="215" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="216">
                                    <input type="checkbox" groupid="11" value="16" id="216" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="217">
                                    <input type="checkbox" groupid="11" value="17" id="217" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="218">
                                    <input type="checkbox" groupid="11" value="18" id="218" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="219">
                                    <input type="checkbox" groupid="11" value="19" id="219" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="221">
                                    <input type="checkbox" groupid="11" value="21" id="221" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="223">
                                    <input type="checkbox" groupid="11" value="23" id="223" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="224">
                                    <input type="checkbox" groupid="11" value="24" id="224" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="225">
                                    <input type="checkbox" groupid="11" value="25" id="225" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="226">
                                    <input type="checkbox" groupid="11" value="26" id="226" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="227">
                                    <input type="checkbox" groupid="11" value="27" id="227" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="228">
                                    <input type="checkbox" groupid="11" value="28" id="228" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="229">
                                    <input type="checkbox" groupid="11" value="29" id="229" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="230">
                                    <input type="checkbox" groupid="11" value="30" id="230" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="231">
                                    <input type="checkbox" groupid="11" value="31" id="231" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="232">
                                    <input type="checkbox" groupid="11" value="32" id="232" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="11"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="233">
                                    <input type="checkbox" groupid="11" value="33" id="233" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="234">
                                    <input type="checkbox" groupid="11" value="34" id="234" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="235">
                                    <input type="checkbox" groupid="11" value="35" id="235" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="11"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="236">
                                    <input type="checkbox" groupid="11" value="36" id="236" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(12);" class="remove"></a><br />4</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="12" class="edit"></a><br /><span>tt</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="12"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="31">
                                    <input type="checkbox" groupid="12" value="1" id="31" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="32">
                                    <input type="checkbox" groupid="12" value="2" id="32" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="33">
                                    <input type="checkbox" groupid="12" value="3" id="33" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="34">
                                    <input type="checkbox" groupid="12" value="4" id="34" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="35">
                                    <input type="checkbox" groupid="12" value="5" id="35" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="36">
                                    <input type="checkbox" groupid="12" value="6" id="36" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="37">
                                    <input type="checkbox" groupid="12" value="7" id="37" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="320">
                                    <input type="checkbox" groupid="12" value="20" id="320" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="39">
                                    <input type="checkbox" groupid="12" value="9" id="39" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="310">
                                    <input type="checkbox" groupid="12" value="10" id="310" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="311">
                                    <input type="checkbox" groupid="12" value="11" id="311" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="312">
                                    <input type="checkbox" groupid="12" value="12" id="312" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="313">
                                    <input type="checkbox" groupid="12" value="13" id="313" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="314">
                                    <input type="checkbox" groupid="12" value="14" id="314" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="315">
                                    <input type="checkbox" groupid="12" value="15" id="315" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="316">
                                    <input type="checkbox" groupid="12" value="16" id="316" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="317">
                                    <input type="checkbox" groupid="12" value="17" id="317" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="318">
                                    <input type="checkbox" groupid="12" value="18" id="318" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="319">
                                    <input type="checkbox" groupid="12" value="19" id="319" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="321">
                                    <input type="checkbox" groupid="12" value="21" id="321" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="323">
                                    <input type="checkbox" groupid="12" value="23" id="323" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="324">
                                    <input type="checkbox" groupid="12" value="24" id="324" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="325">
                                    <input type="checkbox" groupid="12" value="25" id="325" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="326">
                                    <input type="checkbox" groupid="12" value="26" id="326" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="327">
                                    <input type="checkbox" groupid="12" value="27" id="327" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="328">
                                    <input type="checkbox" groupid="12" value="28" id="328" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="329">
                                    <input type="checkbox" groupid="12" value="29" id="329" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="330">
                                    <input type="checkbox" groupid="12" value="30" id="330" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="331">
                                    <input type="checkbox" groupid="12" value="31" id="331" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="332">
                                    <input type="checkbox" groupid="12" value="32" id="332" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="12"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="333">
                                    <input type="checkbox" groupid="12" value="33" id="333" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="334">
                                    <input type="checkbox" groupid="12" value="34" id="334" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="335">
                                    <input type="checkbox" groupid="12" value="35" id="335" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="12"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="336">
                                    <input type="checkbox" groupid="12" value="36" id="336" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(13);" class="remove"></a><br />5</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="13" class="edit"></a><br /><span>tt</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="13"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="41">
                                    <input type="checkbox" groupid="13" value="1" id="41" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="42">
                                    <input type="checkbox" groupid="13" value="2" id="42" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="43">
                                    <input type="checkbox" groupid="13" value="3" id="43" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="44">
                                    <input type="checkbox" groupid="13" value="4" id="44" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="45">
                                    <input type="checkbox" groupid="13" value="5" id="45" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="46">
                                    <input type="checkbox" groupid="13" value="6" id="46" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="47">
                                    <input type="checkbox" groupid="13" value="7" id="47" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="420">
                                    <input type="checkbox" groupid="13" value="20" id="420" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="49">
                                    <input type="checkbox" groupid="13" value="9" id="49" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="410">
                                    <input type="checkbox" groupid="13" value="10" id="410" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="411">
                                    <input type="checkbox" groupid="13" value="11" id="411" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="412">
                                    <input type="checkbox" groupid="13" value="12" id="412" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="413">
                                    <input type="checkbox" groupid="13" value="13" id="413" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="414">
                                    <input type="checkbox" groupid="13" value="14" id="414" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="415">
                                    <input type="checkbox" groupid="13" value="15" id="415" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="416">
                                    <input type="checkbox" groupid="13" value="16" id="416" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="417">
                                    <input type="checkbox" groupid="13" value="17" id="417" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="418">
                                    <input type="checkbox" groupid="13" value="18" id="418" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="419">
                                    <input type="checkbox" groupid="13" value="19" id="419" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="421">
                                    <input type="checkbox" groupid="13" value="21" id="421" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="423">
                                    <input type="checkbox" groupid="13" value="23" id="423" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="424">
                                    <input type="checkbox" groupid="13" value="24" id="424" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="425">
                                    <input type="checkbox" groupid="13" value="25" id="425" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="426">
                                    <input type="checkbox" groupid="13" value="26" id="426" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="427">
                                    <input type="checkbox" groupid="13" value="27" id="427" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="428">
                                    <input type="checkbox" groupid="13" value="28" id="428" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="429">
                                    <input type="checkbox" groupid="13" value="29" id="429" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="430">
                                    <input type="checkbox" groupid="13" value="30" id="430" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="431">
                                    <input type="checkbox" groupid="13" value="31" id="431" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="432">
                                    <input type="checkbox" groupid="13" value="32" id="432" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="13"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="433">
                                    <input type="checkbox" groupid="13" value="33" id="433" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="434">
                                    <input type="checkbox" groupid="13" value="34" id="434" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="435">
                                    <input type="checkbox" groupid="13" value="35" id="435" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="13"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="436">
                                    <input type="checkbox" groupid="13" value="36" id="436" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(14);" class="remove"></a><br />6</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="14" class="edit"></a><br /><span>tt</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="14"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="51">
                                    <input type="checkbox" groupid="14" value="1" id="51" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="52">
                                    <input type="checkbox" groupid="14" value="2" id="52" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="53">
                                    <input type="checkbox" groupid="14" value="3" id="53" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="54">
                                    <input type="checkbox" groupid="14" value="4" id="54" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="55">
                                    <input type="checkbox" groupid="14" value="5" id="55" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="56">
                                    <input type="checkbox" groupid="14" value="6" id="56" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="57">
                                    <input type="checkbox" groupid="14" value="7" id="57" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="520">
                                    <input type="checkbox" groupid="14" value="20" id="520" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="59">
                                    <input type="checkbox" groupid="14" value="9" id="59" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="510">
                                    <input type="checkbox" groupid="14" value="10" id="510" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="511">
                                    <input type="checkbox" groupid="14" value="11" id="511" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="512">
                                    <input type="checkbox" groupid="14" value="12" id="512" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="513">
                                    <input type="checkbox" groupid="14" value="13" id="513" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="514">
                                    <input type="checkbox" groupid="14" value="14" id="514" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="515">
                                    <input type="checkbox" groupid="14" value="15" id="515" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="516">
                                    <input type="checkbox" groupid="14" value="16" id="516" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="517">
                                    <input type="checkbox" groupid="14" value="17" id="517" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="518">
                                    <input type="checkbox" groupid="14" value="18" id="518" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="519">
                                    <input type="checkbox" groupid="14" value="19" id="519" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="521">
                                    <input type="checkbox" groupid="14" value="21" id="521" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="523">
                                    <input type="checkbox" groupid="14" value="23" id="523" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="524">
                                    <input type="checkbox" groupid="14" value="24" id="524" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="525">
                                    <input type="checkbox" groupid="14" value="25" id="525" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="526">
                                    <input type="checkbox" groupid="14" value="26" id="526" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="527">
                                    <input type="checkbox" groupid="14" value="27" id="527" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="528">
                                    <input type="checkbox" groupid="14" value="28" id="528" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="529">
                                    <input type="checkbox" groupid="14" value="29" id="529" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="530">
                                    <input type="checkbox" groupid="14" value="30" id="530" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="531">
                                    <input type="checkbox" groupid="14" value="31" id="531" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="532">
                                    <input type="checkbox" groupid="14" value="32" id="532" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="14"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="533">
                                    <input type="checkbox" groupid="14" value="33" id="533" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="534">
                                    <input type="checkbox" groupid="14" value="34" id="534" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="535">
                                    <input type="checkbox" groupid="14" value="35" id="535" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="14"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="536">
                                    <input type="checkbox" groupid="14" value="36" id="536" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(15);" class="remove"></a><br />7</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="15" class="edit"></a><br /><span>ss</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="15"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="61">
                                    <input type="checkbox" groupid="15" value="1" id="61" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="62">
                                    <input type="checkbox" groupid="15" value="2" id="62" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="63">
                                    <input type="checkbox" groupid="15" value="3" id="63" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="64">
                                    <input type="checkbox" groupid="15" value="4" id="64" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="65">
                                    <input type="checkbox" groupid="15" value="5" id="65" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="66">
                                    <input type="checkbox" groupid="15" value="6" id="66" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="67">
                                    <input type="checkbox" groupid="15" value="7" id="67" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="620">
                                    <input type="checkbox" groupid="15" value="20" id="620" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="69">
                                    <input type="checkbox" groupid="15" value="9" id="69" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="610">
                                    <input type="checkbox" groupid="15" value="10" id="610" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="611">
                                    <input type="checkbox" groupid="15" value="11" id="611" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="612">
                                    <input type="checkbox" groupid="15" value="12" id="612" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="613">
                                    <input type="checkbox" groupid="15" value="13" id="613" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="614">
                                    <input type="checkbox" groupid="15" value="14" id="614" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="615">
                                    <input type="checkbox" groupid="15" value="15" id="615" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="616">
                                    <input type="checkbox" groupid="15" value="16" id="616" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="617">
                                    <input type="checkbox" groupid="15" value="17" id="617" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="618">
                                    <input type="checkbox" groupid="15" value="18" id="618" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="619">
                                    <input type="checkbox" groupid="15" value="19" id="619" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="621">
                                    <input type="checkbox" groupid="15" value="21" id="621" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="623">
                                    <input type="checkbox" groupid="15" value="23" id="623" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="624">
                                    <input type="checkbox" groupid="15" value="24" id="624" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="625">
                                    <input type="checkbox" groupid="15" value="25" id="625" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="626">
                                    <input type="checkbox" groupid="15" value="26" id="626" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="627">
                                    <input type="checkbox" groupid="15" value="27" id="627" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="628">
                                    <input type="checkbox" groupid="15" value="28" id="628" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="629">
                                    <input type="checkbox" groupid="15" value="29" id="629" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="630">
                                    <input type="checkbox" groupid="15" value="30" id="630" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="631">
                                    <input type="checkbox" groupid="15" value="31" id="631" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="632">
                                    <input type="checkbox" groupid="15" value="32" id="632" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="15"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="633">
                                    <input type="checkbox" groupid="15" value="33" id="633" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="634">
                                    <input type="checkbox" groupid="15" value="34" id="634" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="635">
                                    <input type="checkbox" groupid="15" value="35" id="635" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="15"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="636">
                                    <input type="checkbox" groupid="15" value="36" id="636" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(16);" class="remove"></a><br />8</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="16" class="edit"></a><br /><span>ss</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="16"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="71">
                                    <input type="checkbox" groupid="16" value="1" id="71" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="72">
                                    <input type="checkbox" groupid="16" value="2" id="72" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="73">
                                    <input type="checkbox" groupid="16" value="3" id="73" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="74">
                                    <input type="checkbox" groupid="16" value="4" id="74" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="75">
                                    <input type="checkbox" groupid="16" value="5" id="75" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="76">
                                    <input type="checkbox" groupid="16" value="6" id="76" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="77">
                                    <input type="checkbox" groupid="16" value="7" id="77" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="720">
                                    <input type="checkbox" groupid="16" value="20" id="720" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="79">
                                    <input type="checkbox" groupid="16" value="9" id="79" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="710">
                                    <input type="checkbox" groupid="16" value="10" id="710" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="711">
                                    <input type="checkbox" groupid="16" value="11" id="711" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="712">
                                    <input type="checkbox" groupid="16" value="12" id="712" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="713">
                                    <input type="checkbox" groupid="16" value="13" id="713" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="714">
                                    <input type="checkbox" groupid="16" value="14" id="714" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="715">
                                    <input type="checkbox" groupid="16" value="15" id="715" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="716">
                                    <input type="checkbox" groupid="16" value="16" id="716" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="717">
                                    <input type="checkbox" groupid="16" value="17" id="717" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="718">
                                    <input type="checkbox" groupid="16" value="18" id="718" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="719">
                                    <input type="checkbox" groupid="16" value="19" id="719" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="721">
                                    <input type="checkbox" groupid="16" value="21" id="721" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="723">
                                    <input type="checkbox" groupid="16" value="23" id="723" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="724">
                                    <input type="checkbox" groupid="16" value="24" id="724" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="725">
                                    <input type="checkbox" groupid="16" value="25" id="725" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="726">
                                    <input type="checkbox" groupid="16" value="26" id="726" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="727">
                                    <input type="checkbox" groupid="16" value="27" id="727" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="728">
                                    <input type="checkbox" groupid="16" value="28" id="728" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="729">
                                    <input type="checkbox" groupid="16" value="29" id="729" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="730">
                                    <input type="checkbox" groupid="16" value="30" id="730" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="731">
                                    <input type="checkbox" groupid="16" value="31" id="731" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="732">
                                    <input type="checkbox" groupid="16" value="32" id="732" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="16"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="733">
                                    <input type="checkbox" groupid="16" value="33" id="733" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="734">
                                    <input type="checkbox" groupid="16" value="34" id="734" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="735">
                                    <input type="checkbox" groupid="16" value="35" id="735" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="16"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="736">
                                    <input type="checkbox" groupid="16" value="36" id="736" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(17);" class="remove"></a><br />9</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="17" class="edit"></a><br /><span>ss</span> </td>
                    <td class="text_left">
                                                        <!-- <input type="checkbox"    groupid="17"  value="1" />查看用户 -->
                                <label class="checkbox checkboxW" for="81">
                                    <input type="checkbox" groupid="17" value="1" id="81" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="2" />添加用户 -->
                                <label class="checkbox checkboxW" for="82">
                                    <input type="checkbox" groupid="17" value="2" id="82" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="3" />插入用户 -->
                                <label class="checkbox checkboxW" for="83">
                                    <input type="checkbox" groupid="17" value="3" id="83" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="4" />编辑用户 -->
                                <label class="checkbox checkboxW" for="84">
                                    <input type="checkbox" groupid="17" value="4" id="84" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="5" />修改用户 -->
                                <label class="checkbox checkboxW" for="85">
                                    <input type="checkbox" groupid="17" value="5" id="85" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="6" />删除用户 -->
                                <label class="checkbox checkboxW" for="86">
                                    <input type="checkbox" groupid="17" value="6" id="86" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="7" />查看分组角色 -->
                                <label class="checkbox checkboxW" for="87">
                                    <input type="checkbox" groupid="17" value="7" id="87" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="20" />修改分组权限 -->
                                <label class="checkbox checkboxW" for="820">
                                    <input type="checkbox" groupid="17" value="20" id="820" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="9" />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="89">
                                    <input type="checkbox" groupid="17" value="9" id="89" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="10" />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="810">
                                    <input type="checkbox" groupid="17" value="10" id="810" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="11" />添加角色分组 -->
                                <label class="checkbox checkboxW" for="811">
                                    <input type="checkbox" groupid="17" value="11" id="811" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="12" />插入角色分组 -->
                                <label class="checkbox checkboxW" for="812">
                                    <input type="checkbox" groupid="17" value="12" id="812" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="13" />删除角色分组 -->
                                <label class="checkbox checkboxW" for="813">
                                    <input type="checkbox" groupid="17" value="13" id="813" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="14" />查看权限 -->
                                <label class="checkbox checkboxW" for="814">
                                    <input type="checkbox" groupid="17" value="14" id="814" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="15" />添加权限 -->
                                <label class="checkbox checkboxW" for="815">
                                    <input type="checkbox" groupid="17" value="15" id="815" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="16" />插入权限 -->
                                <label class="checkbox checkboxW" for="816">
                                    <input type="checkbox" groupid="17" value="16" id="816" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="17" />编辑权限 -->
                                <label class="checkbox checkboxW" for="817">
                                    <input type="checkbox" groupid="17" value="17" id="817" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="18" />修改权限 -->
                                <label class="checkbox checkboxW" for="818">
                                    <input type="checkbox" groupid="17" value="18" id="818" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="19" />权限操作 -->
                                <label class="checkbox checkboxW" for="819">
                                    <input type="checkbox" groupid="17" value="19" id="819" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="21" />设置用户角色 -->
                                <label class="checkbox checkboxW" for="821">
                                    <input type="checkbox" groupid="17" value="21" id="821" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="23" />查看备份 -->
                                <label class="checkbox checkboxW" for="823">
                                    <input type="checkbox" groupid="17" value="23" id="823" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="24" />添加备份 -->
                                <label class="checkbox checkboxW" for="824">
                                    <input type="checkbox" groupid="17" value="24" id="824" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="25" />查看分类 -->
                                <label class="checkbox checkboxW" for="825">
                                    <input type="checkbox" groupid="17" value="25" id="825" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="26" />添加分类 -->
                                <label class="checkbox checkboxW" for="826">
                                    <input type="checkbox" groupid="17" value="26" id="826" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="27" />编辑分类 -->
                                <label class="checkbox checkboxW" for="827">
                                    <input type="checkbox" groupid="17" value="27" id="827" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="28" />查看新闻 -->
                                <label class="checkbox checkboxW" for="828">
                                    <input type="checkbox" groupid="17" value="28" id="828" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="29" />添加新闻 -->
                                <label class="checkbox checkboxW" for="829">
                                    <input type="checkbox" groupid="17" value="29" id="829" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="30" />编辑新闻 -->
                                <label class="checkbox checkboxW" for="830">
                                    <input type="checkbox" groupid="17" value="30" id="830" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="31" />查看视频 -->
                                <label class="checkbox checkboxW" for="831">
                                    <input type="checkbox" groupid="17" value="31" id="831" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="32" />添加视频 -->
                                <label class="checkbox checkboxW" for="832">
                                    <input type="checkbox" groupid="17" value="32" id="832" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>                            <br />                                <!-- <input type="checkbox"    groupid="17"  value="33" />编辑视频 -->
                                <label class="checkbox checkboxW" for="833">
                                    <input type="checkbox" groupid="17" value="33" id="833" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="834">
                                    <input type="checkbox" groupid="17" value="34" id="834" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="835">
                                    <input type="checkbox" groupid="17" value="35" id="835" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="17"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="836">
                                    <input type="checkbox" groupid="17" value="36" id="836" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
                </tr><tr>
                    <td valign="top"><a href="javascript:del(18);" class="remove"></a><br />10</td>
                    <td valign="top"> <a href="javascript:void 0;" groupid="18" class="edit"></a><br /><span>ss</span> </td>
                    <td class="text_left">
                        <!-- <input type="checkbox"   groupid="18"  value="1" checked />查看用户 -->
                                <label class="checkbox checkboxW" for="91">
                                    <input type="checkbox" groupid="18" value="1" checked id="91" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="2" checked />添加用户 -->
                                <label class="checkbox checkboxW" for="92">
                                    <input type="checkbox" groupid="18" value="2" checked id="92" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="3" checked />插入用户 -->
                                <label class="checkbox checkboxW" for="93">
                                    <input type="checkbox" groupid="18" value="3" checked id="93" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="4" checked />编辑用户 -->
                                <label class="checkbox checkboxW" for="94">
                                    <input type="checkbox" groupid="18" value="4" checked id="94" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="5" checked />修改用户 -->
                                <label class="checkbox checkboxW" for="95">
                                    <input type="checkbox" groupid="18" value="5" checked id="95" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改用户                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="6" checked />删除用户 -->
                                <label class="checkbox checkboxW" for="96">
                                    <input type="checkbox" groupid="18" value="6" checked id="96" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除用户                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="7" checked />查看分组角色 -->
                                <label class="checkbox checkboxW" for="97">
                                    <input type="checkbox" groupid="18" value="7" checked id="97" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分组角色                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="20" checked />修改分组权限 -->
                                <label class="checkbox checkboxW" for="920">
                                    <input type="checkbox" groupid="18" value="20" checked id="920" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="9" checked />编辑分组角色显示名 -->
                                <label class="checkbox checkboxW" for="99">
                                    <input type="checkbox" groupid="18" value="9" checked id="99" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分组角色显示名                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="10" checked />修改分组角色显示名 -->
                                <label class="checkbox checkboxW" for="910">
                                    <input type="checkbox" groupid="18" value="10" checked id="910" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改分组角色显示名                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="11" checked />添加角色分组 -->
                                <label class="checkbox checkboxW" for="911">
                                    <input type="checkbox" groupid="18" value="11" checked id="911" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="12" checked />插入角色分组 -->
                                <label class="checkbox checkboxW" for="912">
                                    <input type="checkbox" groupid="18" value="12" checked id="912" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="13" checked />删除角色分组 -->
                                <label class="checkbox checkboxW" for="913">
                                    <input type="checkbox" groupid="18" value="13" checked id="913" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        删除角色分组                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="14" checked />查看权限 -->
                                <label class="checkbox checkboxW" for="914">
                                    <input type="checkbox" groupid="18" value="14" checked id="914" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="15" checked />添加权限 -->
                                <label class="checkbox checkboxW" for="915">
                                    <input type="checkbox" groupid="18" value="15" checked id="915" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加权限                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="16" checked />插入权限 -->
                                <label class="checkbox checkboxW" for="916">
                                    <input type="checkbox" groupid="18" value="16" checked id="916" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        插入权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="17" checked />编辑权限 -->
                                <label class="checkbox checkboxW" for="917">
                                    <input type="checkbox" groupid="18" value="17" checked id="917" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="18" checked />修改权限 -->
                                <label class="checkbox checkboxW" for="918">
                                    <input type="checkbox" groupid="18" value="18" checked id="918" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        修改权限                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="19" checked />权限操作 -->
                                <label class="checkbox checkboxW" for="919">
                                    <input type="checkbox" groupid="18" value="19" checked id="919" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        权限操作                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="21" checked />设置用户角色 -->
                                <label class="checkbox checkboxW" for="921">
                                    <input type="checkbox" groupid="18" value="21" checked id="921" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        设置用户角色                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="23" checked />查看备份 -->
                                <label class="checkbox checkboxW" for="923">
                                    <input type="checkbox" groupid="18" value="23" checked id="923" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看备份                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="24" checked />添加备份 -->
                                <label class="checkbox checkboxW" for="924">
                                    <input type="checkbox" groupid="18" value="24" checked id="924" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加备份                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="25" checked />查看分类 -->
                                <label class="checkbox checkboxW" for="925">
                                    <input type="checkbox" groupid="18" value="25" checked id="925" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看分类                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="26" checked />添加分类 -->
                                <label class="checkbox checkboxW" for="926">
                                    <input type="checkbox" groupid="18" value="26" checked id="926" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加分类                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="27" checked />编辑分类 -->
                                <label class="checkbox checkboxW" for="927">
                                    <input type="checkbox" groupid="18" value="27" checked id="927" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑分类                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="28" checked />查看新闻 -->
                                <label class="checkbox checkboxW" for="928">
                                    <input type="checkbox" groupid="18" value="28" checked id="928" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看新闻                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="29" checked />添加新闻 -->
                                <label class="checkbox checkboxW" for="929">
                                    <input type="checkbox" groupid="18" value="29" checked id="929" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加新闻                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="30" checked />编辑新闻 -->
                                <label class="checkbox checkboxW" for="930">
                                    <input type="checkbox" groupid="18" value="30" checked id="930" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑新闻                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="31" checked />查看视频 -->
                                <label class="checkbox checkboxW" for="931">
                                    <input type="checkbox" groupid="18" value="31" checked id="931" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看视频                                </label>
                                                            <!-- <input type="checkbox"   groupid="18"  value="32" checked />添加视频 -->
                                <label class="checkbox checkboxW" for="932">
                                    <input type="checkbox" groupid="18" value="32" checked id="932" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加视频                                </label>
                                                            <br /><!-- <input type="checkbox"   groupid="18"  value="33" checked />编辑视频 -->
                                <label class="checkbox checkboxW" for="933">
                                    <input type="checkbox" groupid="18" value="33" checked id="933" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑视频                                </label>
                                                                                            <!-- <input type="checkbox"    groupid="18"  value="34" />查看轮播图 -->
                                <label class="checkbox checkboxW" for="934">
                                    <input type="checkbox" groupid="18" value="34" id="934" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        查看轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="18"  value="35" />添加轮播图 -->
                                <label class="checkbox checkboxW" for="935">
                                    <input type="checkbox" groupid="18" value="35" id="935" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        添加轮播图                                </label>                                                            <!-- <input type="checkbox"    groupid="18"  value="36" />编辑轮播图 -->
                                <label class="checkbox checkboxW" for="936">
                                    <input type="checkbox" groupid="18" value="36" id="936" data-toggle="checkbox" class="custom-checkbox">
                                        <span class="icons">
                                            <span class="icon-unchecked colorGray"></span>
                                            <span class="icon-checked colorGreen"></span>
                                        </span>
                                        编辑轮播图                                </label>                                                </td>
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