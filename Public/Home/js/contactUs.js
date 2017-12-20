
$(function(){
    boot();
   /* navT();*/
    $('#navTop ul li:nth-child(8)').addClass('activeColor').siblings('li').removeClass('activeColor');
    $('.pro-rank a').mouseover(function(){
        $(this).children('p').css('color','#ff5a00');
    });
    $('.pro-rank a').mouseout(function(){
        $(this).children('p').css('color','#575757');
        $(this).children('p').next('p').css('color','#a9a9a9');
    });
})