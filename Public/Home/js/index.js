$('.carousel-inner>div:first-child').addClass('active');
/*----------------------------------------------------�첽������ģ��*/
function getHeader(){
    var url =$('#header').attr('url');
    return url;
};
   
$('#header').load(getHeader(),function(){ 
        boot();
        navT();
});
//ƨ��
$('#foot').load('Home/view/tpl/footer.html',function(){
    boot();
});
//��Ŀ��̬
$('#dynamicColumn').load('Home/view/tpl/dynamicColumn.html',function(){
    boot();
    $('.pro-news p').mouseover(function(){
        $(this).children('a').css('color','#ff5a00');
    });
    $('.pro-news p').mouseout(function(){
        $(this).children('a').css('color','#575757');
    });
});
//��������
$('#clueCollect').load('Home/view/tpl/clueCollect.html',function(){
    boot();
});


//----------------------------------------------------�ֻ�����Ӧʽ
function boot(){
    var screenWidth = parseFloat(window.screen.width);
    if( screenWidth < 768){
        //轮播
        var lunBoWidth = screenWidth*0.903-1;
        $('.nav.navbar-default').css('width',screenWidth);
        $('.carousel-inner img').css('width',screenWidth);
        $('.carousel-inner img').css('height',lunBoWidth*0.5625);
        $('section').css('width',screenWidth-40);
        $('.footer').css('width',screenWidth-40);
        $('.introduce').css('display','none');
        $('.dynamic-state').css('width',screenWidth-40);
        $('.dynamic-state div p:gt(5)').css('display','none');
        $('.classify').css('width',screenWidth-40);
        $('.disNone').css('display','none');
        //视频图片尺寸
        $('.pro-video.sowing>div:gt(1)').css('display','none');
        /*$('.pro-video div>img').css('width','auto');*/
        //团队档案
        $('.scro div:gt(1)').css('display','none');
        $('.foot-dotted span').html('<br/><br/>');
    }
    if( screenWidth <596){
        $('.pro-video.foreshow.fore .indexVideo:gt(1)').css('display','none');
        $('.pro-video.sowing .indexVideo:gt(3)').css('display','none');
    }
    var imgWidth = screenWidth-135;
    var imgHeight = $('.pro-video.sowing div:first-child img').height();
    if(screenWidth >376 &&screenWidth <550) {
        /*$('.indexVideo').css('margin-left',imgWidth/13);*/
    }
    if (screenWidth < 361){
        $('.scro img').css({
            'width':screenWidth/4-5,
            'height':screenWidth/4-5
        });
        $('.br').css('display','inline-block');
        $('.brbr').css('display','block');
    }else if(screenWidth < 550) {

        $('.scro img').css({
            'width':screenWidth/4-1,
            'height':screenWidth/4-1
        });
        $('.br').css('display','inline-block');
        $('.brbr').css('display','block');
    }else if(screenWidth < 667){

    }else if(screenWidth < 768) {

    }

};
//----------------------------------------------------��Ŀ����
$('.pro-video div').mouseover(function(){
    $(this).children('p').css('color','#ff5a00');
    $(this).children('span').css('color','#ff5a00');
    $(this).children('i').css('color','#ff5a00');
    /*$(this).children('div').css('opacity','0.2');*/
});
$('.pro-video div').mouseout(function(){
    $('.pro-video p').css('color','#000');
    $('.pro-video span').css('color','#000');
    $(this).children('i').css('color','#fff');
    /*$(this).children('div').css('opacity','0');*/
});
/*----------------------------------------------------�ֲ�ͼ start*/
    $('.newList').flexslider({
        namespace:"newList-",
        animation: "slide",
        maxItems:3,
        itemWidth:1000,
        animationLoop:true,
        slideshow:true,
        slideshowSpeed:4000,
        useCSS:false,
        customDirectionNav:".companyBanner .controller",
        controlNav:false,
        directionNav: true,
        keyboardNav: true,
        pauseOnAction:false,
        start: function(slider){
        }
    });
    $('.newList-nav-prev a').html('<span class="glyphicon glyphicon-menu-left teamControl"></span>');
    $('.newList-nav-next a').html('<span class="glyphicon glyphicon-menu-right teamControl"></span>');
/*----------------------------------------------------�ֲ�ͼ end*/

/*----------------------------------------------------������start*/
(function(){
    var btn = $('.nav.navbar-default button');
    btn.click(function(){
        if(!$('#navTop').hasClass('in')) {
            /*btn.html('<span class="glyphicon glyphicon-remove"></span>');*/
            $('.iconBar02').css('display','none');
        }else {
            /*btn.html('<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>');*/
            $('.iconBar02').css('display','block');
        }
    });
})();
/*----------------------------------------------------������end*/
$(function(){
    boot();
    /*navT();*/
$('.pro-news p').mouseover(function(){
        $(this).children('a').css('color','#ff5a00');
    });
    $('.pro-news p').mouseout(function(){
        $(this).children('a').css('color','#575757');
    });
})



