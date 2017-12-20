<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$content.0.title} - {$site.0.title}</title>
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
            <li><a href="{:U($column['0']['url'])}">{$column.0.name}</a></li>
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
                <if condition="$content['0']['video'] NEQ null">
                    <div class="pro-img">
                        <!--<video src="http://tv.cctv.com/2016/08/09/VIDEnt2P2NNuzxssQKYpC9GC160809.shtml" poster="img/images/index_03.png" controls preload="auto" id="countyVideo"></video>-->
                        <video id="countyVideo" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="640" height="264"
                               poster="__ROOT__{$content.0.thumbnail}"
                               data-setup="{}">
                            <source src="__ROOT__{$content.0.video}" type='video/mp4' />
                            <source src="__RO
                                    <!--<source src="source/birds.webm" type='video/webm' />
                                    <source src="source/birds.ogg" type='video/ogg' />-->
                            <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                            <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                        </video>
                        <!--<i class="iconfont icon-iconfont0103"></i>-->
                    </div>
                </if>
                <div class="pro-middle">
                    <p>{$content.0.introduce}</p>
                </div>
                <div class="pro-footer">
                    <span>上一篇 ： <a href="{:U('Content/index',array("id" => $up_id))}">{$up}</a></span>
                    <br/>
                    <span>上一篇 ： <a href="{:U('Content/index',array("id" => $next_id))}">{$next}</a></span>

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
