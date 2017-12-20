/**
 * Created by Administrator on 2016-01-08.
 */
function Tab(options){
    this.oPtions={
        events:"click",
        tabController:"",
        pageController:"",
        current:"",
        before:function(){},
        after:function(){}

    }
    this.init(options);
    this.change();
}
Tab.prototype.init=function(options){
    $.extend(this.oPtions,options);
}
Tab.prototype.change=function(){
    var This=this;
    var time=""
    $(this.oPtions.tabController).on(this.oPtions.events,function(){
        var _this=this
        if(This.oPtions.events=="mouseover"&&This.oPtions.delay){
            time=setTimeout(function(){
                show(This,_this)
            },This.oPtions.delay)
        }else{
            show(This,_this)
        }

    }).mouseout(function(){
        clearInterval(time)
    })
}
function Tip(options,fn){
    this.oPtions={
        events:"click",
        id:"",
        tips:"",
        color:"",
        position:""
    }
    this.init(options);
    this.operation(fn);

}
Tip.prototype.init=function(options){
    $.extend(this.oPtions,options);
}
Tip.prototype.operation=function(fn){
    var This=this
    $(this.oPtions.id).on(this.oPtions.events,function(){
        if(!This.oPtions.stock){
            This.oPtions.msg= fn.call($(this));
        }else{
            This.oPtions.msg= fn.call($(this),This.oPtions.stock);
        }
        if( typeof This.oPtions.msg !=="boolean"){
            if(This.oPtions.msg.tips){
                This.oPtions.tips= This.oPtions.msg.tips;
            }
        }
        showTips(This.oPtions,$(this))
    })
}
function show(This,_this){
    var size=$(_this).index();
    This.oPtions.before(size);
    $(This.oPtions.tabController).removeClass( This.oPtions.current);
    $(_this).addClass( This.oPtions.current);
    $(This.oPtions.pageController).removeClass( This.oPtions.current);
    $(This.oPtions.pageController).eq(size).addClass( This.oPtions.current)
    This.oPtions.after();

}


function showTips(oPtions,_this){

    if(oPtions.msg==false||oPtions.msg.flag==false){
        layer.tips(oPtions.tips, _this, {
            tips: [oPtions.position, oPtions.color],
            time: 2000
        });
    }

}

function Rex(str){
    var type = /^[0-9]*[1-9][0-9]*$/;
    var re = new RegExp(type);
    if (str.match(re) == null) {
        return false;
    }
    return true
}

function slideHead(idname,topname){
    var headname = document.getElementById(idname);
    var divname = document.getElementById(topname);
    var alen =divname.children.length;
    if (alen <4) {
        return
    };
    var aa = divname.getElementsByTagName('li')[0].clientWidth;
    var awid = aa*alen;
    divname.style.width=alen*2.5+"rem";
    var iScroll=0;
    var iStartX=0;
    var iStartPageX=0;
    var iNow=0;
    var leng = Math.ceil(alen*2.5/10);
    divname.addEventListener("touchstart",fnStart,false);
    function fnStart(ev){
        ev.preventDefault();
        iStartPageX=ev.changedTouches[0].pageX;
        iStartX=iScroll;
        // divname.style.WebkitTransition=divname.style.MozTransition=divname.style.transition="none";
    };
    divname.addEventListener("touchmove",fnMove,false);
    function fnMove(ev){
        ev.preventDefault();
        var iDis=ev.changedTouches[0].pageX-iStartPageX;
        iScroll=iStartX+iDis;

        if (iScroll >=0) {
            iScroll=0;
        }else if (iScroll <= -(awid-aa*3)) {
            iScroll=-(awid-aa*3);
        };
        // divname.style.WebkitTransition=divname.style.MozTransition=divname.style.transition=".1s";
        setStyle();
    };

    function setStyle(){
        //  divname.style.WebkitTransform=divname.style.MozTransform=divname.style.transform="translateX("+iScroll+"px)";
        divname.style.marginLeft=iScroll+'px';
    }
}