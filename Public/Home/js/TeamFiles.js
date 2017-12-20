
$(function(){
     boot();
    /*navT();*/
    $('#navTop ul li:nth-child(7)').addClass('activeColor').siblings('li').removeClass('activeColor');
    $('.pro-rank a').mouseover(function(){
        $(this).children('p').css('color','#ff5a00');
    });
    $('.pro-rank a').mouseout(function(){
        $(this).children('p').css('color','#575757');
        $(this).children('p').next('p').css('color','#a9a9a9');
    });
})
//锚点跳转动画效果
$('.selectCha.classify a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 300);
    return false;
});
$('.teamB').each(function(index){
    $(this).hover(function(event){
        //$(this).siblings('.fadeAnimate').fadeIn(500);
        $(this).find('.fadeAnimate').fadeIn(500);
        console.log(1)
        return false;
    },function(event){
        // $(this).siblings('.fadeAnimate').fadeOut(500);
        $(this).find('.fadeAnimate').fadeOut(500);
        console.log(2)
        return false;
    });
})