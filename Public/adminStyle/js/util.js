/**
 * Created by Administrator on 2016/1/24.
 */
var Util={
    getHtFontSize:function(){
        var cw=document.documentElement.clientWidth;
        if(cw>640){
            cw=640;
        }
        $("html").css({
            fontSize:12 * ( cw/ 320) + 'px'
        });
    },
    getCssAttr:function(obj,attr){
        if(obj.currentStyle){
            return obj.currentStyle[attr]
        }else{
            return getComputedStyle(obj,false)[attr];
        }
    },
    getValueToTop:function(obj){
        var iTop=0;
        while(obj){
            //????????????¶À?????????????????obj?????????
            iTop+= obj.offsetTop;
            obj=obj.offsetParent;
        }
        return iTop;
    },
    getEventNames:function(){
       if(browserRedirect()){
           return {
               dj:"touchend",
               sbd:"touchstart",
               sbm:"touchmove",
               sbu:"touchend",
               type:"Mobile"
           }
       }
        return {
            dj:"click",
            sbd:"onmousedown",
            sbm:"onmousemove",
            sbu:"onmouseup",
            type:"PC"
        }
    }

}

function browserRedirect(){//≈–∂œ“∆∂Øªπ «pc
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
        return true
    } else {
        return false
    }
}