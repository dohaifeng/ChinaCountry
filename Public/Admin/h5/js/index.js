/**
 * Created by Administrator on 2016/6/3.
 */
$(function () {
    $(".musicBox").data("flag",true);
    $(".musicBox").on("touchend",function () {
        var flag=$(".musicBox").data("flag")
        if(flag=="true"){
            $(".musicBox").data("flag",false);
            $(".musicBox").addClass("close");
            $("#music-audio")[0].pause();
        }else{
            $(".musicBox").data("flag",true);
            $(".musicBox").removeClass("close");
            $("#music-audio")[0].play();
        }
    })
    $(".content").on("touchend",function () {
            $("form").addClass("formAN")
    })
})