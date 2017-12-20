
$('.pro-rank a').mouseover(function(){
    $(this).children('p').css('color','#ff5a00');
});
$('.pro-rank a').mouseout(function(){
    $(this).children('p').css('color','#575757');
    $(this).children('p').next('p').css('color','#a9a9a9');
});
$('.textRow').mouseover(function(){
    $(this).children('div').css('color','#ff5a00');
});
$('.textRow').mouseout(function(){
    $(this).children('div').css('color','#575757');
   
});
$(function(){
    boot();
   /* navT();*/
    $('#navTop ul li:nth-child(6)').addClass('activeColor').siblings('li').removeClass('activeColor');
    $('.fenyeNum').mouseover(function(){
        $(this).css('background','#ff5a00');
        $(this).children('a').css('color','#fff');
    });
    $('.fenyeNum').mouseout(function(){
        $(this).css('background','#fff');
        $(this).children('a').css('color','#5e5e5e');
    });
})