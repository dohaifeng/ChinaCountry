<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$content.0.title} - {$site.0.title}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
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
        <link rel="stylesheet" href="__PUBLIC__/Home/css/video-js.min.css"/>
        <link href="__PUBLIC__/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="__PUBLIC__/Home/css/content.css"/>
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>
        <include file='./Tpl/header' />
        <!-- 主体部分-->
        <section>
            <!-- 路径导航start-->
            <ol class="breadcrumb">
                <li><a href="{:U('Index/index')}">首页</a></li>
                <li><a href="{:U('dynamic/index')}">栏目动态</a></li>
                <li class="active">{$content.0.title}</li>
            </ol>
            <!-- 路径导航end-->
            <div class="float-left">
                <!-- 栏目介绍start-->
                <div class="classify">
                    <div class="bottomImg">
                        <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                        <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                    </div>
                    <div class="pro-header proText">
                        <div class="textTitle">
                            <h1>{$content.0.title}</h1>
                            <h6>{$content.0.date|default=time()|date='Y-m-d H:i',###}</h6>
                        </div>
                    </div>
                    <div class="pro-middle">
                        <p>{$content.0.content}</p>
                    </div>
                    <div class="pro-footer">
                        <span>上一篇 ： <a href="{:U('Content/newsDetails',array("id" => $up_id))}">{$up}</a></span>
                        <br/>
                        <span>下一篇 ： <a href="{:U('Content/newsDetails',array("id" => $next_id))}">{$next}</a></span>

                    </div>
                    <div class="pro-footer fenXiang">
                        <div class="fX">
                            <span class="float-left">分享到：</span>
                            <div class="bdsharebuttonbox">
                                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                <a href="#" class="bds_sqq" data-cmd="sqq" title="分享给QQ好友"></a>
                                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            </div>
                        </div>
                        <!--<ul>
                            <li id="bp-qqxiaoyou">
                                <div class="bsHot"></div>
                                <a class="bsPlatIcon" title="朋友网">
                                    <img class="bsPlatImg" src="http://static.bshare.cn/frame/images//logos/mp2/qqxiaoyou.gif">
                                </a>
                                <div class="bsPlatName" title="朋友网">朋友网</div>
                            </li>
                        </ul>-->
                    </div>
                </div>
                <!-- 栏目介绍end-->
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
    <script src="__PUBLIC__/Home/js/video.min.js"></script>
    <script src="__PUBLIC__/Home/js/index.js"></script>
    <script src="__PUBLIC__/Home/js/content.js"></script>
</html>
