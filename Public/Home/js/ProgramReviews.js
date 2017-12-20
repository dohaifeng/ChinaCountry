
(function(){
    var screenWidth = parseFloat(window.screen.width);
    if( screenWidth < 768) {
        $('#dynamicColumn').css('display', 'none');
        $('.classify.claBottom').css('width','auto');
    }
})();
$(function(){
    boot();
   /* navT();*/
    $('#navTop ul li:nth-child(5)').addClass('activeColor').siblings('li').removeClass('activeColor');
    $('.pro-rank a').mouseover(function(){
        $(this).children('p').css('color','#ff5a00');
    });
    $('.pro-rank a').mouseout(function(){
        $(this).children('p').css('color','#575757');
        $(this).children('p').next('p').css('color','#a9a9a9');
    });
    $('.fenyeNum').mouseover(function(){
        $(this).css('background','#ff5a00');
        $(this).children('a').css('color','#fff');
    });
    $('.fenyeNum').mouseout(function(){
        $(this).css('background','#fff');
        $(this).children('a').css('color','#5e5e5e');
    });
});