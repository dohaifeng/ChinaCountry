<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>团队档案 - {$site.0.title}</title>
   
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
    <link rel="stylesheet" href="__PUBLIC__/Home/css/TeamFiles.css"/>
    <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
</head>

<body>
<div id="header"></div>
<include file='./Tpl/header' />
<!-- 主体部分-->
<section>
    <!-- 路径导航start-->
    <ol class="breadcrumb">
        <li><a href="{:U('Index/index')}">首页</a></li>
        <li>团队档案</li>
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
                <span>团队档案</span>
            </div>
            <div class="posi">
                <ul class="selectCha classify">
                    <a href="#jumpBianDao"><li>编导</li></a>
                    <a href="#jumpSheXiang"><li>主持人和摄像</li></a>
                    <a href="#jumpXingZheng"><li>行政</li></a>
                    <a href="#jumpWaiLian"><li>外联</li></a>
                    
                </ul>
            </div>
            <div class="classify teamA">
                <div class="teamC" id="jumpBianDao">
                    <p class="teamTitle">编导</p>
                    <div class="teamB float-left">
                        <img src="__PUBLIC__/Home/img/peoples/bianDao/huanjiangping.jpg"/>
                        <p>黄嘉平</p>
                        <p>制片人 导演</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-middle">
                        <img src="__PUBLIC__/Home/img/peoples/bianDao/jiangbo.jpg"/>
                        <p>姜波</p>
                        <p>编导</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/bianDao/qiujie.jpg"/>
                        <p>邱杰</p>
                        <p>编导</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>
                <div class="teamC" id="jumpSheXiang">
                    <p class="teamTitle">主持人与摄像</p>
                    <div class="teamB float-left">
                        <img src="__PUBLIC__/Home/img/peoples/zhuChiRen/xuxiaoqing.jpg"/>
                        <p>徐小晴</p>
                        <p>主持人</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-middle">
                        <img src="__PUBLIC__/Home/img/peoples/zhuChiRen/songwenbin.jpg"/>
                        <p>宋文彬</p>
                        <p>主持人</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/zhuChiRen/luyinliang.jpg"/>
                        <p>陆银亮</p>
                        <p>摄像</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>
                <div class="teamC" id="jumpXingZheng">
                    <p class="teamTitle">行政</p>
                    <div class="teamB float-left">
                    <img src="__PUBLIC__/Home/img/peoples/xingZheng/zhenzheng.jpg"/>
                    <p>郑振</p>
                    <p>总监</p>
                    <div class="fadeAnimate"></div>

                    </div>
                    <div class="teamB float-middle">
                    <img src="__PUBLIC__/Home/img/peoples/xingZheng/tangmanyang.jpg"/>
                    <p>唐扬满</p>
                    <p>总监助理</p>
                    <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/xingZheng/tangrucai.jpg"/>
                        <p>唐如才</p>
                        <p>栏目组副主任</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>
                <div class="teamC teamD">
                    <div class="teamB float-left">
                        <img src="__PUBLIC__/Home/img/peoples/xingZheng/zhongjing.jpg"/>
                        <p>钟晶</p>
                        <p>栏目组副主任</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-middle">
                        <img src="__PUBLIC__/Home/img/peoples/xingZheng/shenjinxiang.jpg"/>
                        <p>沈金祥</p>
                        <p>行政顾问</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/xingZheng/zhudongming.jpg"/>
                        <p>朱东明</p>
                        <p>驾驶员</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>
                <div class="teamC" id="jumpWaiLian">
                    <p class="teamTitle">外联</p>
                    <div class="teamB float-left">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/huangdongmei.jpg"/>
                        <p>黄冬梅</p>
                        <p>外联主任</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-middle">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/zhuzhuqing.jpg"/>
                        <p>朱祝青</p>
                        <p>外联主任</p>
                        <div class="fadeAnimate"></div>
                        
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/shenqing.jpg"/>
                        <p>沈卿</p>
                        <p>外联</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>
                <div class="teamC teamD">
                    <div class="teamB float-left">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/songlin.jpg"/>
                        <p>宋林</p>
                        <p>外联</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-middle">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/yudaxiang.jpg"/>
                        <p>于大祥</p>
                        <p>外联</p>
                        <div class="fadeAnimate"></div>
                    </div>
                    <div class="teamB float-right">
                        <img src="__PUBLIC__/Home/img/peoples/waiLian/lulifu.jpg"/>
                        <p>卢立富</p>
                        <p>外联</p>
                        <div class="fadeAnimate"></div>
                    </div>
                </div>

            </div>
        </div>
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
<script src="__PUBLIC__/Home/js/TeamFiles.js"></script>
</html>
