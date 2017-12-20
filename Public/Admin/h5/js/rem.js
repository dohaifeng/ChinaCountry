/**
 * Created by Administrator on 2016/6/3.
 */

$(function () {
    initRem();
})

window.onresize = function(){
    initRem();
}
function initRem(){
    var cw = document.documentElement.clientWidth;
    if (cw > 640) {
        cw = 640;
    }
    document.getElementsByTagName("html")[0].style.fontSize=20 * ( cw / 320) + 'px'
}