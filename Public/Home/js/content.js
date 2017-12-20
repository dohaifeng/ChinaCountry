
$(function(){
    boot();
    /*navT();*/
    if($('.breadcrumb li:nth-child(2)').text() === '精彩预告'){
        $('#navTop ul li:nth-child(4)').addClass('activeColor').siblings('li').removeClass('activeColor');
    }else if($('.breadcrumb li:nth-child(2)').text() === '视频点播'){
        $('#navTop ul li:nth-child(5)').addClass('activeColor').siblings('li').removeClass('activeColor');
    }else if($('.breadcrumb li:nth-child(2)').text() === '栏目动态'){
        $('#navTop ul li:nth-child(6)').addClass('activeColor').siblings('li').removeClass('activeColor');
    }
    $('.pro-rank a').mouseover(function(){
        $(this).children('p').css('color','#ff5a00');
    });
    $('.pro-rank a').mouseout(function(){
        $(this).children('p').css('color','#575757');
        $(this).children('p').next('p').css('color','#a9a9a9');
    });
})
window._bd_share_config={
    "common":{"bdSnsKey":{},
    "bdText":"",
    "bdMini":"2",
    "bdMiniList":false,
    "bdPic":"",
    "bdStyle":"2",
    "bdSize":"24"},
    "share":{},
    image : [{
        "tag" : "img/images/eye.png",
        viewType : 'list',
        viewPos : 'top',
        viewColor : 'black',
        viewSize : '16',
        viewList : ['qzone','tsina','huaban','tqq','renren']
    },{
        "tag" : "img/images/eye.png",
        viewType : 'list',
        viewPos : 'top',
        viewColor : 'black',
        viewSize : '16',
        viewList : ['qzone','tsina','huaban','tqq','renren']
    }]
};
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];