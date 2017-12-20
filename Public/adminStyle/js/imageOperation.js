/**
 * Created by Administrator on 2015-12-13.
 */

Array.prototype.removeIndex=function(dx)
{
    if(isNaN(dx)||dx>this.length){return false;}
    for(var i=0,n=0;i<this.length;i++)
    {
        if(this[i]!=this[dx])
        {
            this[n++]=this[i]
        }
    }
    this.length-=1
}
function imageOperation(parameter){
    this.parameter={
        selector:'',
        type:''
    }
    $.extend(this.parameter,parameter);
    loading(this.parameter.selector);
    this.init();

}
imageOperation.prototype.init=function(){
    if(this.parameter.type=="NeedLoad"){
        NeedLoad(this.parameter.selector,this.parameter.callba);
    }else{
        delayedLoad(this.parameter.selector,this.parameter.callba)
    }

}
function loading(selector){


    $(selector).each(function(){
        $(this).attr("src","/img/51413.gif")
    });
}
function NeedLoad(selector,callba){
    var imgs=$(selector);
    var iNOW=0;
    onLOad ();
    function onLOad (){

        imgs[iNOW].src= imgs[iNOW].attr("data-src");
        callba();
        imgs[iNOW].onload=function(){
            iNOW++;
            if(iNOW<imgs.length){
                onLOad ();
            }
        }
        imgs[iNOW].onerror=function(){
            iNOW++;
            onLOad ();
        }
    }

}

function delayedLoad(selector,callba){
    var imgs=$(selector);
    var i=imgs.length
    showImg();
    window.onscroll=showImg
    function showImg(){
        var scroll=document.documentElement.scrollTop||document.body.scrollTop;
        for(var i=0;i<imgs.length;i++){
            var obj=imgs.eq(i)
            var _top=getValueToTop(obj[0]);
            if((!obj.data("flag"))&&(_top<scroll+document.documentElement.clientHeight)){
                    obj.attr("src",obj.attr("data-original"));
                    obj.data("flag",true);
            }
        }

    }
}

function getValueToTop(obj){
    var iTop=0;
    while(obj){
        iTop+= obj.offsetTop;
        obj=obj.offsetParent;
    }
    return iTop
}

