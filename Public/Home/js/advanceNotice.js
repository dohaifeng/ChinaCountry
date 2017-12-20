
$('.pro-video div').mouseover(function(){
    $(this).children('p').css('color','#747474');
});
$('.pro-video div').mouseout(function(){
    $('.pro-video p').css('color','#747474');
});
function bot(){
    var screenW = parseFloat(window.screen.width);
    if( screenW < 596){
        $('.pro-video.foreshow .indexVideo:lt(9)').css('display','block');
    }
}
$(function(){
    boot();
    bot();
/*    navT();*/
    $('#navTop ul li:nth-child(4)').addClass('activeColor').siblings('li').removeClass('activeColor');
    $('.pro-rank a').mouseover(function(){
        $(this).children('p').css('color','#ff5a00');
    });
    $('.pro-rank a').mouseout(function(){
        $(this).children('p').css('color','#575757');
        $(this).children('p').next('p').css('color','#a9a9a9');
    });
})