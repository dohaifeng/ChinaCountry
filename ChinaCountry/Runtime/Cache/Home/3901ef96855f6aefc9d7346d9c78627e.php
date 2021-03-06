<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ($site["0"]["title"]); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="keyword" content="<?php echo ($site["0"]["keyword"]); ?>">
        <meta name="description" content="<?php echo ($site["0"]["description"]); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
        <!-- 兼容国产浏览器的高速模式 -->
        <meta name="renderer" content="webkit">
        <link href="/chinacountry/Public/Home/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="bootstrap-3.3.6-dist/js/html5shiv.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/respond.min.js"></script>
        <![endif]-->
        <link href="/chinacountry/Public/Home/css/base.css" rel="stylesheet">
        <link href="/chinacountry/Public/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="/chinacountry/Public/Home/fonts/iconfont.css"/>
    </head>

    <body>

    
<!-- TODO 顶部大图-->
        <div class="imageTop">
            <img src="/chinacountry/Public/Home/img/images/index_01.png" class="img-responsive img-01"/>
            <img src="/chinacountry/Public/Home/img/images/index_02.png" class="img-responsive img-02"/>
        </div>
        <!-- 顶部大图end-->
        <!-- TODO 导航条-->
        <nav class="nav navbar-default">
            <div class="container navbarTop">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navTop">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navTop">
                    <ul class="nav navbar-nav">
                        <li class="holder"><a href="javascript:void(0);">占位符</a></li>
                        <li class="activeColor"><a href="<?php echo U('Index/index');?>">网<i class="placeH"></i>站<i class="placeH"></i>首<i class="placeH"></i>页</a></li>
                        <li><a href="<?php echo U('Introduce/index');?>">栏<i class="placeH"></i>目<i class="placeH"></i>介<i class="placeH"></i>绍</a></li>
                        <li><a href="<?php echo U('Foreshow/index');?>">精<i class="placeH"></i>彩<i class="placeH"></i>预<i class="placeH"></i>告</a></li>
                        <li><a href="<?php echo U('Retrospect/index');?>">视<i class="placeH"></i>频<i class="placeH"></i>点<i class="placeH"></i>播</a></li>
                        <li><a href="<?php echo U('Dynamic/index');?>">栏<i class="placeH"></i>目<i class="placeH"></i>动<i class="placeH"></i>态</a></li>
                        <li><a href="<?php echo U('Group/index');?>">团<i class="placeH"></i>队<i class="placeH"></i>档<i class="placeH"></i>案</a></li>
                        <li><a href="<?php echo U('Contact/index');?>">联<i class="placeH"></i>系<i class="placeH"></i>我<i class="placeH"></i>们</a></li>
                        <li class="holder"><a href="javascript:void(0);">占位符</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" method="post" action="<?php echo U('Search/index');?>">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name='search' placeholder="输入关键字来搜索">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            <input type="submit" value="" class="btnSub"/>
                        </div>
                    </form>
                </div>

            </div>
        </nav>
        <!-- 导航条end-->
    <!-- 主体部分-->
    <section>
        <div class="float-left">
            <!-- TODO 轮播图-->
            <div class="container-fluid" id="leftCarousel">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php if(is_array($advertising)): foreach($advertising as $key=>$tmp): ?><!-- <div class="imgHalf"></div> -->
                            <div class="item">
                                <a href="javascript:void(0);" target="_blank">

                                    <img src="/chinacountry<?php echo ($tmp["picture"]); ?>" />
                                </a>
                                <div class="carousel-caption">
                                </div>
                            </div><?php endforeach; endif; ?>
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
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目预告</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="<?php echo U('foreshow/index');?>">See More Videos</a></i>
                </div>
                <div class="pro-video foreshow fore">
                    <?php if(is_array($foreshow)): foreach($foreshow as $key=>$tmp): ?><a href="<?php echo U('Content/index',array("id" => $tmp['id']));?>">
                            <div class="float-left indexVideo">
                                <div class="inDiv">
                                    <img src="/chinacountry<?php echo ($tmp["thumbnail"]); ?>"/>
                                    <!-- <div class="modelImg"></div> -->
                                    
                                    <p class="br"><?php echo ($tmp["title"]); ?></p>
                                    <!-- <span class="brbr"><?php echo (date('Y-m-d',(isset($tmp["date"]) && ($tmp["date"] !== ""))?($tmp["date"]):time())); ?></span> -->
                                </div>
                            </div>
                        </a><?php endforeach; endif; ?>

                </div>
            </div>
            <!-- 栏目预告end-->
            <!-- 视频点播start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>视频点播</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="<?php echo U('retrospect/index');?>">See More Videos</a></i>
                </div>
                <div class="pro-video sowing">
                    <?php if(is_array($demand)): foreach($demand as $key=>$tmp): ?><a href="<?php echo U('Content/index',array("id" => $tmp['id']));?>">
                            <div class="float-left indexVideo">
                                <div class="inDiv">
                                    <img src="/chinacountry<?php echo ($tmp["thumbnail"]); ?>"/>
                                    <!-- <div class="modelImg"></div> -->
                                    <i class="iconfont icon-iconfont0103"></i>
                                    <p class="br"><?php echo ($tmp["title"]); ?></p>
                                    <!-- <span class="brbr"><?php echo (date('Y-m-d',(isset($tmp["date"]) && ($tmp["date"] !== ""))?($tmp["date"]):time())); ?></span> -->
                                </div>
                            </div>
                        </a><?php endforeach; endif; ?>
                </div>
            </div>
            <!-- 视频点播end-->
            <!-- 团队风采start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>团队风采</span>
                    <i class="glyphicon glyphicon-eye-open float-right"><a href="<?php echo U('group/index');?>">See More Teams</a></i>
                </div>
                <div class="pro-photo newList flexslider">
                    <!--<span class="glyphicon glyphicon-menu-left teamControl newList-nav-prev"></span>-->
                    <ul class="slides">
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/bianDao/huanjiangping.jpg"/></a>
                                    <p>黄嘉平</p>
                                    <p>制片人 导演</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/bianDao/jiangbo.jpg"/></a>
                                    <p>姜波</p>
                                    <p>编导</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/bianDao/qiujie.jpg"/></a>
                                    <p>邱杰</p>
                                    <p>编导</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/zhuChiRen/songwenbin.jpg"/></a>
                                    <p>宋文彬</p>
                                    <p>主持人</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/zhuChiRen/xuxiaoqing.jpg"/></a>
                                    <p>徐小晴</p>
                                    <p>主持人</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/zhuChiRen/luyinliang.jpg"/></a>
                                    <p>陆银亮</p>
                                    <p>摄像</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/zhenzheng.jpg"/></a>
                                    <p>郑振</p>
                                    <p>总监</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/tangmanyang.jpg"/></a>
                                    <p>唐扬满</p>
                                    <p>总监助理</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/tangrucai.jpg"/></a>
                                    <p>唐如才</p>
                                    <p>栏目组副主任</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/zhongjing.jpg"/></a>
                                    <p>钟晶</p>
                                    <p>栏目组副主任</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/shenjinxiang.jpg"/></a>
                                    <p>沈金祥</p>
                                    <p>行政顾问</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/xingZheng/zhudongming.jpg"/></a>
                                    <p>朱东明</p>
                                    <p>司机</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/huangdongmei.jpg"/></a>
                                    <p>黄冬梅</p>
                                    <p>外联主任</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/zhuzhuqing.jpg"/></a>
                                    <p>朱祝青</p>
                                    <p>外联主任</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/shenqing.jpg"/></a>
                                    <p>沈卿</p>
                                    <p>外联</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="scro">
                                <li class="float-left">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/songlin.jpg"/></a>
                                    <p>宋林</p>
                                    <p>外联</p>
                                </li>
                                <li class="float-left float-middle">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/yudaxiang.jpg"/></a>
                                    <p>于大祥</p>
                                    <p>外联</p>
                                </li>
                                <li class="float-right">
                                    <a href="<?php echo U('group/index');?>"><img src="/chinacountry/Public/Home/img/peoples/waiLian/lulifu.jpg"/></a>
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
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目介绍</span>
                </div>
                <div>
                    <img src="/chinacountry/Public/Home/img/images/index_05.png"/>
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
            <div class="introduce">
    <div class="bottomImg">
        <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
        <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
    </div>
    <div class="pro-header">
        <span>线索征集</span>
    </div>
    <div class="pro-middle">
        <p>
            欢迎您提供重大新闻线索，对具有重大新闻价值的线索一旦采用并查实，将给予奖励。我们将对线索提供者的个人资料进行保密。
        </p>
    </div>
    <div class="pro-footer sear">
        <p>栏目热线：010-82101758/82101799</p>
        <p>新闻线索征集邮箱：</p>
        <p>cctvlife567@126.com</p>
    </div>
</div>
            <!-- 线索征集end-->
            <!-- 专题活动start-->
            <div class="introduce">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>专题活动</span>
                    <a href="javascript:void(0);" class="introducePro">More</a>
                </div>
                <div class="pro-pic">
                    <div>
                        <img src="/chinacountry/Public/Home/img/images/index_09.jpg"/>
                        <p>暑期系列 神奇乡村</p>
                    </div>
                    <div>
                        <img src="/chinacountry/Public/Home/img/images/index_10.jpg"/>
                        <p>2015最美乡村</p>
                    </div>
                    <div>
                        <img src="/chinacountry/Public/Home/img/images/index_11.png"/>
                        <p>2014 CCTV中国最美乡村</p>
                    </div>
                </div>
            </div>
            <!-- 专题活动end-->
            <!-- 栏目动态start-->
            <div class="introduce dynamic-state">
    <div class="bottomImg">
        <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
        <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
    </div>
    <div class="pro-header">
        <span>栏目动态</span>
        <i class="glyphicon glyphicon-eye-open float-right"><a href="<?php echo U('dynamic/index');?>">See More News</a></i>
    </div>
    <div class="pro-news">
        <?php if(is_array($news)): foreach($news as $key=>$tmp): ?><p>
                <a href="<?php echo U('Content/newsDetails',array("id" => $tmp['id']));?>"><span class="float-left"><?php echo ($tmp["title"]); ?></span>
                    <span class="float-right"><?php echo (date('m-d',(isset($tmp["date"]) && ($tmp["date"] !== ""))?($tmp["date"]):time())); ?></span></a>
            </p><?php endforeach; endif; ?>
    </div>
</div>
            <!-- 栏目动态end-->
        </div>




    </section>
    <footer>
        <div class="footer">
    <div class="float-left mess">
        <p>网站导航</p>
        <p>
            <a href="<?php echo U('Index/index');?>">网站首页</a>
            <a href="<?php echo U('introduce/index');?>">栏目介绍</a>
            <a href="<?php echo U('foreshow/index');?>">精彩预告</a>
        </p>
        <p>
            <a href="<?php echo U('retrospect/index');?>">视频点播</a>
            <a href="<?php echo U('dynamic/index');?>">栏目动态</a>
            <a href="<?php echo U('group/index');?>">团队档案</a>
        </p>
    </div>
    <div class="float-left mess">
        <p>栏目播出</p>
        <p>
            <a>首播时间：</a>
            <a>周一至周四 18:05</a>
        </p>
        <p>
            <a>重播时间：</a>
            <a>周二至周五 23:17</a>
        </p>
        <p>
            <a>独播频道：</a>
            <a>CCTV-7</a>
        </p>
        <p>
            <a>官方微信：</a>
            <a>CCTV7mlzgxcx</a>
        </p>
    </div>
    <div class="float-left mess">
        <p>联系我们</p>
        <p>
            <a>联系地址：</a>
            <a>北京市海淀区中关村南大街10号 《美丽中国乡村行》 栏目</a>
        </p>
        <p>
            <a>邮<i class="postPlace"></i>编：</a>
            <a>100081</a>
        </p>
        <p>
            <a>栏目热线：</a>
            <a>010-82101758/82101799</a>
        </p>
        <p>
            <a>广告代理：</a>
            <a>0571-88552233</a>
        </p>
    </div>
    <div class="foot-dotted">
        <p>Copyright&copy;2016 All Rights Reserved <span>/</span> CCTV 《美丽中国乡村行》 栏目官方网站 / 浙ICP备13023200号</p>
    </div>
</div>
    </footer>
</body>
<script src="/chinacountry/Public/Home/js/jquery-2.2.4.js"></script>
<script src="/chinacountry/Public/Home/js/bootstrap.min.js"></script>
<script src="/chinacountry/Public/Home/js/jquery.flexslider.js"></script>
<script src="/chinacountry/Public/Home/js/index.js"></script>
</html>