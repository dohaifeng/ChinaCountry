<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>栏目介绍 - {$site.0.title}</title>
       
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
        <link rel="stylesheet" href="__PUBLIC__/Home/css/columnIntroduce.css"/>
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>
    <include file='./Tpl/header' />
    <!-- 主体部分-->
    <section>
        <!-- 路径导航start-->
        <ol class="breadcrumb">
            <li><a href="{:U('Index/index')}">首页</a></li>
            <li>栏目介绍</li>
        </ol>
        <!-- 路径导航end-->
        <div class="float-left">
            <!-- 栏目介绍start-->
            <div class="classify">
                <div class="bottomImg">
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
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
                    <img src="__PUBLIC__/Home/img/images/index_15.png"/>
                    <img src="__PUBLIC__/Home/img/images/index_16.png"/>
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
<script src="__PUBLIC__/Home/js/columnIntroduce.js"></script>
</html>
