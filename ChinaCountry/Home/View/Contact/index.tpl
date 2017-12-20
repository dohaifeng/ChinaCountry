<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>联系我们 - {$site.0.title}</title>
    
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
        <link rel="stylesheet" href="__PUBLIC__/Home/css/contactUs.css"/>
        <link rel="stylesheet" href="__PUBLIC__/Home/fonts/iconfont.css"/>
    </head>

    <body>
    <include file='./Tpl/header' />
    <!-- 主体部分-->
    <section>
        <!-- 路径导航start-->
        <ol class="breadcrumb">
            <li><a href="{:U('Index/index')}">首页</a></li>
            <li>联系我们</li>
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
                    <span>联系我们</span>
                </div>
                <div class="pro-footer pro-jingCai">
                    <div class="contact">
                        <div>
                            <p>
                                <span>栏目联系地址：</span>
                                <span>北京市海淀区中关村南大街10号 《美丽中国乡村行》栏目</span>
                            </p>
                            <p>
                                <span>邮      编：</span>
                                <span>100081</span>
                            </p>
                            <p>
                                <span>栏目热线： </span>
                                <span>010-82101758/82101799</span>
                            </p>
                            <p>
                                <span>咨询邮箱：</span>
                                <span>cctv7life567@126.com</span>
                            </p>
                            <p>
                                <span>新闻线索征集邮箱：</span>
                                <span>cctv7life567@126.com</span>
                            </p>
                        </div>
                        <div>
                            <p>
                                <span>栏目广告招商：</span>
                                <span>杭州山潭影视文化传媒有限公司</span>
                            </p>
                            <p>
                                <span>地       址：</span>
                                <span>杭州市江干区凤起东路338号凤起时代大厦A楼1201</span>
                            </p>
                            <p>
                                <span>联系电话： </span>
                                <span>0571一86961721</span>
                            </p>
                            <p>
                                <span>邮箱：</span>
                                <span>623772@qq.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="baiduMap">
                        <img src="__PUBLIC__/Home/img/images/baiduMap.png" class="img-responsive"/>
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
<script src="__PUBLIC__/Home/js/contactUs.js"></script>
</html>
