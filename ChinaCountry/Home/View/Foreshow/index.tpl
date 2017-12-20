<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>精彩预告 - {$site.0.title}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 兼容国产浏览器的高速模式 -->
        <meta name="renderer" content="webkit">
        <link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="bootstrap-3.3.6-dist/js/html5shiv.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/respond.min.js"></script>
        <![endif]-->
        <link href="__PUBLIC__/Home/css/base.css" rel="stylesheet">
        <link href="__PUBLIC__/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="__PUBLIC__/Home/css/advanceNotice.css"/>
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>
    <include file='./Tpl/header' />
    <!-- 主体部分-->
    <section>
        <!-- 路径导航start-->
        <ol class="breadcrumb">
            <li><a href="{:U('Index/index')}">首页</a></li>
            <li>精彩预告</li>
        </ol>
        <!-- 路径导航end-->
        <div class="float-left">
            <!-- 精彩预告start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>精彩预告</span>
                </div>
                <foreach name='foreshow' key='key' item='tmp'>
                    <div class="pro-footer">
                        <div class="pro-video">
                            <a href="{:U('Content/index',array("id" => $tmp['id']))}">
                                <div class="float-left">
                                    <img src="__ROOT__{$tmp.thumbnail}"/>
                                    <div class="modelImg"></div>
                                    <!-- <i class="iconfont icon-iconfont0103"></i> -->
                                </div>
                            </a>
                            <div class="media-body">
                                <a href="{:U('Content/index',array("id" => $tmp['id']))}">
                                    <h4 class="media-heading">{$tmp.title} </h4>
                                </a>
                                <a href="{:U('Content/index',array("id" => $tmp['id']))}">
                                    {$tmp['introduce']|truncate_cn=120}【MORE】
                                    <p>{$tmp.date|default=time()|date='Y-m-d H:i:s',###}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </foreach>
            </div>
            <div>{$page}</div>
            <!-- 精彩预告end-->
        </div>
        <div class="float-right">
            <!-- 栏目动态start-->
            <include file='./Tpl/dynamicColumn' />
            <!-- 栏目动态end-->
            <!-- 视频播放排行start-->
            <include file='./Tpl/videoPlayRank' />
            <!-- 视频播放排行end-->
            <!-- 线索征集start-->
            <include file='./Tpl/clueCollect' />
            <!-- 线索征集end-->
        </div>




    </section>
    <footer>
        <include file='./Tpl/footer' />
    </footer>
</body>
<script src="__PUBLIC__/Home/js/jquery-2.2.4.js"></script>
<script src="__PUBLIC__/Home/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/Home/js/jquery.flexslider.js"></script>
<script src="__PUBLIC__/Home/js/index.js"></script>
<script src="__PUBLIC__/Home/js/advanceNotice.js"></script>
</html>
