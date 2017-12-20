<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>搜索结果 - {$site.0.title}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 兼容国产浏览器的高速模式 -->
        <meta name="renderer" content="webkit">
        <link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="bootstrap-3.3.6-dist/js/html5shiv.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="__PUBLIC__/Home/img/images/favicon.ico" />
        <link href="__PUBLIC__/Home/css/base.css" rel="stylesheet">
        <link href="__PUBLIC__/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="__PUBLIC__/Home/css/search.css"/>
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>
    <include file='./Tpl/header' />
    <!-- 主体部分-->
    <section>
        <!-- 路径导航start-->
        <ol class="breadcrumb">
            <li><a href="{:U('Index/index')}">首页</a></li>
            <li>搜索</li>
        </ol>
        <!-- 路径导航end-->
        <div class="float-left">
            <!-- 精彩预告start-->
            <div class="classify">
                <div class="pro-footer pro-new">
                    <div class="searxhTitle">
                        <span class="larg">关键字：</span>
                        <span class="radiu">{$search}</span>
                        <span class="larg">搜索结果：</span>
                        <span class="larg">总计<span class="larg">{$count}</span>条</span>
                    </div>
                    <foreach name='newarray' key='key' item='tmp'>
                        <div class="textRow">
                            <a href='{:U('content/search',array("id" => $tmp['id'],"type" => $tmp['type']))}'>
                                <div class="float-left">
                                    <span>{$tmp.title}</span>
                                </div>
                                <div class="float-right">
                                    <span>{$tmp.date|default=time()|date='m-d',###}</span>
                                    <span>{$tmp.date|default=time()|date='Y',###}</span>
                                </div>
                            </a>
                        </div>
                    </foreach>
                </div>
            </div>
            <!-- 分页查询-->
            <div id="paging"></div>
            <div class="placeH classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
            </div>
            <!-- 精彩预告end-->
        </div>
        <div class="float-right">
            <!-- 视频播放排行start-->
            <include file='./Tpl/videoPlayRank' />
            <!-- 视频播放排行end-->
            <!-- 线索征集start-->
            <include file='./Tpl/clueCollect'/>
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
<script src="__PUBLIC__/Home/js/search.js"></script>
</html>
