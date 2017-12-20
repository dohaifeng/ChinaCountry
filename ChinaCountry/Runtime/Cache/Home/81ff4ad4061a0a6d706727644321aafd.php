<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>栏目介绍 - <?php echo ($site["0"]["title"]); ?></title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 兼容国产浏览器的高速模式 -->
        <meta name="renderer" content="webkit">
        <link href="/chinacountry/Public/Home/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="bootstrap-3.3.6-dist/js/html5shiv.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/respond.min.js"></script>
        <![endif]-->
        <link href="/chinacountry/Public/Home/css/base.css" rel="stylesheet">
        <link href="/chinacountry/Public/Home/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="/chinacountry/Public/Home/css/columnIntroduce.css"/>
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
        <!-- 路径导航start-->
        <ol class="breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li>栏目介绍</li>
        </ol>
        <!-- 路径导航end-->
        <div class="float-left">
            <!-- 栏目介绍start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目介绍</span>
                </div>
                <div class="pro-middle">
                    <p class="cI">《美丽中国乡村行》是央视唯一一档纯粹的乡村旅游节目，她以美丽中国的秀美乡村为着眼点，以“乡村旅游、生态文明”为主题，通过外景主持人和美丽乡村体验员的深度体验，展示生态美景，品味健康美食，体验休闲农业，推介最有特色的乡村旅游资源，提供全面丰富的旅游资讯，全景式描绘中国乡村旅游画卷，让观众足不出户领略中国乡村的自然之美、人文之美、倡导新型生态旅游模式。</p>
                </div>
                <div class="pro-footer pro-jieShao">
                    <span>首播时间 ： CCTV7 周一至周五 18:05</span>
                    <span>重播时间 ： CCTV7 周一至周五 23:17</span>

                </div>
            </div>
            <!-- 栏目介绍end-->
            <!-- 栏目荣誉start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
                    <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
                </div>
                <div class="pro-header">
                    <span>栏目荣誉</span>
                </div>
                <div class="pro-mid">
                    <div class="pro-sml">
                        <i>01</i>
                        <p>2011三农人物推介活动总导演屈哲，作品《2011三农人物颁奖晚会》荣获中国广播影视大奖赛22届“星光奖”综艺类大奖。</p>
                    </div>
                    <div class="pro-sml">
                        <i>02</i>
                        <p>2011年《生活567》栏目荣获广电总局“2010年十大创新创优栏目”。</p>
                    </div>
                    <div class="pro-sml">
                        <i>03</i>
                        <p>2011年《生活567》栏目在第三届中国公益新闻年会上荣获“2010年中国传媒公益推动力大奖”。</p>
                    </div>
                    <div class="pro-sml">
                        <i>04</i>
                        <p>2011年6月，屈哲被中国广播电视协会评为第四届“记录·中国”评选活动优秀制片人。</p>
                    </div>
                    <div class="pro-sml">
                        <i>05</i>
                        <p>中宣部《新闻阅评》高度评价《我和春天有个约会-走基层，再回访》特别节目运用“走转改”的形式，既走出了真情实感，也走出了节目创新之路，是一部无愧于时代的新闻力作。</p>
                    </div>
                    <div class="pro-sml">
                        <i>06</i>
                        <p>《2012手挽手新春公益晚会》得到中宣部新闻阅评高度肯定，认为晚会关注民生、传播公益、传递爱心，深度体现“公益三农”的服务大局，彰显社会责任。</p>
                    </div>
                    <div class="pro-sml">
                        <i>07</i>
                        <p>2012《我和春天有个约会-冰湖挖藕人》荣获第四届新农村电视艺术节年度对农电视（专题片）最佳作品奖。</p>
                    </div>
                    <div class="pro-sml">
                        <i>08</i>
                        <p>2012《变迁》获得农业部好新闻二等奖。</p>
                    </div>
                </div>
            </div>
            <!-- 栏目荣誉end-->
        </div>
        <div class="float-right">
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
            <!-- 视频播放排行start-->
            <div class="introduce videoPlay">
    <div class="bottomImg">
        <img src="/chinacountry/Public/Home/img/images/index_15.png"/>
        <img src="/chinacountry/Public/Home/img/images/index_16.png"/>
    </div>
    <div class="pro-header">
        <span>视频播放排行</span>
    </div>
    <div class="pro-rank">
        <?php if(is_array($video)): foreach($video as $key=>$tmp): ?><div>
                <img src="/chinacountry/Public/Home/img/images/index_num_0<?php echo ($key+1); ?>.png" class="float-left"/>
                <a href="<?php echo U('Content/index',array("id" => $tmp['id']));?>" class="float-left">
                    <p><?php echo ($tmp["title"]); ?></p>
                    <p>播放量：<span><?php echo ($tmp["times"]); ?></span></p>
                </a>
            </div><?php endforeach; endif; ?>
    </div>
</div>
            <!-- 视频播放排行end-->
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
<script src="/chinacountry/Public/Home/js/columnIntroduce.js"></script>
</html>