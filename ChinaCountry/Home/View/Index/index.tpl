<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$site.0.title}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="keyword" content="{$site.0.keyword}">
        <meta name="description" content="{$site.0.description}">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
        <!-- 兼容国产浏览器的高速模式 -->
        <meta name="renderer" content="webkit">
        <link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="bootstrap-3.3.6-dist/js/html5shiv.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/respond.min.js"></script>
        <![endif]-->
        <link href="__PUBLIC__/Home/css/base.css" rel="stylesheet">
        <link href="__PUBLIC__/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>

    <include file='./tpl/header' />
    <!-- 主体部分-->
    <section>
        <div class="float-left">
            <!-- TODO 轮播图-->
            <div class="container-fluid" id="leftCarousel">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <foreach name="advertising" key="key" item="tmp">
                            <!-- <div class="imgHalf"></div> -->
                            <div class="item">
                                <a href="javascript:void(0);" target="_blank">

                                    <img src="__ROOT__{$tmp.picture}" />
                                </a>
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </foreach>
                    </div>
                    <!-- 左右控制按钮-->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- 轮播图end-->
            <!-- 栏目预告start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目预告</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="{:U('foreshow/index')}">See More Videos</a></i>
                </div>
                <div class="pro-video foreshow fore">
                    <foreach name='foreshow' key='key' item='tmp'>
                        <a href="{:U('Content/index',array("id" => $tmp['id']))}">
                            <div class="float-left indexVideo">
                                <div class="inDiv">
                                    <img src="__ROOT__{$tmp.thumbnail}"/>
                                    <!-- <div class="modelImg"></div> -->
                                    
                                    <p class="br">{$tmp.title}</p>
                                    <!-- <span class="brbr">{$tmp.date|default=time()|date='Y-m-d',###}</span> -->
                                </div>
                            </div>
                        </a>
                    </foreach>

                </div>
            </div>
            <!-- 栏目预告end-->
            <!-- 视频点播start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>视频点播</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="{:U('retrospect/index')}">See More Videos</a></i>
                </div>
                <div class="pro-video sowing">
                    <foreach name='demand' key='key' item='tmp'>
                        <a href="{:U('Content/index',array("id" => $tmp['id']))}">
                            <div class="float-left indexVideo">
                                <div class="inDiv">
                                    <img src="__ROOT__{$tmp.thumbnail}"/>
                                    <!-- <div class="modelImg"></div> -->
                                    <i class="iconfont icon-iconfont0103"></i>
                                    <p class="br">{$tmp.title}</p>
                                    <!-- <span class="brbr">{$tmp.date|default=time()|date='Y-m-d',###}</span> -->
                                </div>
                            </div>
                        </a>
                    </foreach>
                </div>
            </div>
            <!-- 视频点播end-->
            <!-- 团队风采start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>团队风采</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="{:U('group/index')}">See More Teams</a></i>
                </div>
                <div class="pro-photo newList flexslider">
                    <!--<span class="glyphicon glyphicon-menu-left teamControl newList-nav-prev"></span>-->
                    <ul class="slides">
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/bianDao/huanjiangping.jpg"/></a>
                                    <p>黄嘉平</p>
                                    <p>制片人 导演</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/bianDao/jiangbo.jpg"/></a>
                                    <p>姜波</p>
                                    <p>编导</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/bianDao/qiujie.jpg"/></a>
                                    <p>邱杰</p>
                                    <p>编导</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/zhuChiRen/songwenbin.jpg"/></a>
                                    <p>宋文彬</p>
                                    <p>主持人</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/zhuChiRen/xuxiaoqing.jpg"/></a>
                                    <p>徐小晴</p>
                                    <p>主持人</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/zhuChiRen/luyinliang.jpg"/></a>
                                    <p>陆银亮</p>
                                    <p>摄像</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/zhenzheng.jpg"/></a>
                                    <p>郑振</p>
                                    <p>总监</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/tangmanyang.jpg"/></a>
                                    <p>唐扬满</p>
                                    <p>总监助理</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/tangrucai.jpg"/></a>
                                    <p>唐如才</p>
                                    <p>栏目组副主任</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/zhongjing.jpg"/></a>
                                    <p>钟晶</p>
                                    <p>栏目组副主任</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/shenjinxiang.jpg"/></a>
                                    <p>沈金祥</p>
                                    <p>行政顾问</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/xingZheng/zhudongming.jpg"/></a>
                                    <p>朱东明</p>
                                    <p>司机</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/huangdongmei.jpg"/></a>
                                    <p>黄冬梅</p>
                                    <p>外联主任</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/zhuzhuqing.jpg"/></a>
                                    <p>朱祝青</p>
                                    <p>外联主任</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/shenqing.jpg"/></a>
                                    <p>沈卿</p>
                                    <p>外联</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/songlin.jpg"/></a>
                                    <p>宋林</p>
                                    <p>外联</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/yudaxiang.jpg"/></a>
                                    <p>于大祥</p>
                                    <p>外联</p>
                                </li>
                                <li class="float-right">
                                    <a href="{:U('group/index')}"><img src="__PUBLIC__/Home/img/peoples/waiLian/lulifu.jpg"/></a>
                                    <p>卢立富</p>
                                    <p>外联</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--<span class="glyphicon glyphicon-menu-right teamControl newList-nav-next"></span>-->
                </div>
            </div>
            <!-- 团队风采end-->
        </div>
        <div class="float-right">
            <!-- 栏目介绍start-->
            <div class="introduce">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目介绍</span>
                </div>
                <div>
                    <img src="__PUBLIC__/Home/img/images/index_05.png"/>
                </div>
                <div class="pro-footer">
                    <span>首播 | 周一至周四 18:05</span>
                    <span>重播 | 次日 23:17</span>
                    <p>
                        《美丽中国乡村行》是央视唯一一档纯粹的乡村旅游节目，她以美丽中国的秀美乡村为着眼点，以“乡村旅游，生态文明”为主题，通过外景主持人和美丽乡村体验员的深度体
                        <span>...</span><a href="javascript:void(0);">[详细]</a>
                    </p>
                </div>
            </div>
            <!-- 栏目介绍end-->
            <!-- 线索征集start-->
            <include file='./tpl/clueCollect' />
            <!-- 线索征集end-->
            <!-- 专题活动start-->
            <div class="introduce">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>专题活动</span>
                    <a href="javascript:void(0);" class="introducePro">More</a>
                </div>
                <div class="pro-pic">
                    <div>
                        <img src="__PUBLIC__/Home/img/images/index_09.jpg"/>
                        <p>暑期系列 神奇乡村</p>
                    </div>
                    <div>
                        <img src="__PUBLIC__/Home/img/images/index_10.jpg"/>
                        <p>2015最美乡村</p>
                    </div>
                    <div>
                        <img src="__PUBLIC__/Home/img/images/index_11.png"/>
                        <p>2014 CCTV中国最美乡村</p>
                    </div>
                </div>
            </div>
            <!-- 专题活动end-->
            <!-- 栏目动态start-->
            <include file='./tpl/dynamicColumn' />
            <!-- 栏目动态end-->
        </div>




    </section>
    <footer>
        <include file='./tpl/footer' />
    </footer>
</body>
<script src="__PUBLIC__/Home/js/jquery-2.2.4.js"></script>
<script src="__PUBLIC__/Home/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/Home/js/jquery.flexslider.js"></script>
<script src="__PUBLIC__/Home/js/index.js"></script>
</html>
