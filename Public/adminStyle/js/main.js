/**
 * Created by Administrator on 2016/3/22.
 */
define(urlCode+"main",["jquery","flexSlider","util","imgdaly","fastclick","flatUi","datezh-CN"],function (require, exports, module) {
    var $=require.async("jquery")

    var main={

    };
    main.navObj=require("index").nav;
    main.init=function(){
        this.navObj.init();
        this.navObj.childrenClikc(this);

        this.navObj.close(this);
        this.navObj.view(this);
        this.navObj.navValue(this);
        
    }
    module.exports.main= main
})

define("index",function (require, exports, module) {
    var page=require("page").page;
    var nav={
        init:function(){
            this.navChilder()
            this.navBtn();
            this.navTip();
            this.btnEvent();      
            //this.navValue();
            //this.replaceVal();
            this.triggerNav();
        },
        navChilder:function(){
            var old=$(".navBtn").width();
            $(document).on("click",".navList >li >div",function(){
                var childern=$(this).parent().find(".children");
                //alert(childern.length);
                if(childern.is(":hidden")){
                    $(".maskDiv").show();
                    $(".navList li").find(".children").hide(200);
                    $(".navList >li div").find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(".navList >li div").find("span:nth-of-type(3)").addClass("icon-jia");
                    $(this).find("span:nth-of-type(3)").removeClass("icon-jia")
                    $(this).find("span:nth-of-type(3)").addClass("icon-jian");
                    $(".hLeft").attr("style","width:"+old+"px !important")
                    $(".hRight").css({"left":old})
                    $(".navBtn").find(".btnIcon2").show(200)
                    $(".navBtn").find(".btnIcon").hide(200);
                    $(".navBtn").data("flag",false)
                    childern.show(200);
                }else{
                    childern.hide(200);
                    $(".navList li").find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(".navList li").find("span:nth-of-type(3)").addClass("icon-jia");
                    $(this).find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(this).find("span:nth-of-type(3)").addClass("icon-jia")
                }
            });
           /* $(".navList >li >div").click(function(){
                var childern=$(this).parent().find(".children");
                if(childern.is(":hidden")){
                    $(".maskDiv").show();
                    $(".navList li").find(".children").hide(200);
                    $(".navList >li div").find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(".navList >li div").find("span:nth-of-type(3)").addClass("icon-jia");
                    $(this).find("span:nth-of-type(3)").removeClass("icon-jia")
                    $(this).find("span:nth-of-type(3)").addClass("icon-jian");
                    $(".hLeft").attr("style","width:"+old+"px !important")
                    $(".hRight").css({"left":old})
                    $(".navBtn").find(".btnIcon2").show(200)
                    $(".navBtn").find(".btnIcon").hide(200);
                    $(".navBtn").data("flag",false)
                    childern.show(200);
                }else{
                    childern.hide(200);
                    $(".navList li").find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(".navList li").find("span:nth-of-type(3)").addClass("icon-jia");
                    $(this).find("span:nth-of-type(3)").removeClass("icon-jian")
                    $(this).find("span:nth-of-type(3)").addClass("icon-jia")
                }
            })*/
        },
        navBtn:function(){
            var old=$(".navBtn").width();
            var oldIoc= $('[data-toggle="right"]').width();
            $(".navBtn").click(function(){
                if(!$(this).data("flag")){
                    $(".maskDiv").hide();
                    $(this).find(".btnIcon2").hide()
                    $(this).find(".btnIcon").show();
                    $(".hLeft").attr("style","width:"+oldIoc+"px !important");
                    $(".hRight").css({"left":oldIoc})
                    $(".children").hide(200);
                    $(this).data("flag",true);         
                    $('.navItems').show();
                }else{
                   $(".maskDiv").show();
                    $(".navListPopover").hide();
                    $(this).find(".btnIcon2").show()
                    $(this).find(".btnIcon").hide();
                    $(".hLeft").attr("style","width:"+old+"px !important")
                    $(".hRight").css({"left":old})
                    $(this).data("flag",false);
                    $('.navItems').hide();
                }
            })
        },
        //解绑button的默认事件
        btnEvent:function(){
           $(document).on("click","button",function(){
               return false;
           })
        },
        childrenClikc:function(This){
            $(document).on("click",".children li div",function(ev){
                    var ev=ev||event
                    $(".children li div").removeClass("iCurrt");
                    $(this).addClass("iCurrt");
                    var objName=$(this).attr("data-toggle");
                    //获取nav链接url
                    var chtml=$(this).attr("onlink");
                    var child=$(this).attr("data-toggle-children");
                    console.info(page[objName]);
                    var obj=page[objName]["children"][child];
                    //url值覆盖
                    obj.url=chtml;

                    loadingHtml(This,obj)
                    ev.stopPropagation();
            });
           /* $(".children li div").click(function(ev){
                var ev=ev||event
                $(".children li div").removeClass("iCurrt");
                $(this).addClass("iCurrt");
                var objName=$(this).attr("data-toggle");
                //获取nav链接url
                var chtml=$(this).attr("onlink");
                var child=$(this).attr("data-toggle-children");
                console.info(page[objName]);
                var obj=page[objName]["children"][child];
                //url值覆盖
                obj.url=chtml;

                loadingHtml(This,obj)
                ev.stopPropagation();
            })*/
            function loadingHtml(This,obj){
                console.time("a")
                $(".content").load(obj.url,function(){
                    obj.init();
                });
                console.timeEnd("a")
            }
        },
        navTip:function(){                   
            $('.navList>li').each(function(index){             
                 var _top=Util.getValueToTop($(this)[0]);              
                var html='<div class="popover right navListPopover'+index+'"> '+
                     '   <div class="arrow"></div> '+
                     '   <div class="popover-content">'+$(this).find("span[data-toggle='right']").attr("data-original-title")+'</div> '+
                    '</div>';
                var divHtml='<div class="navItems navItem'+index+'"></div>';

                //$("navListPopover"+index+"").addClass($(this).find("span[data-toggle='right']").attr("data-toggle"));
                $(".blWrap").append(divHtml);              
                $(".navItem"+index+"").append(html);
                
                $(".navItem"+index+"").css({"top":_top}); 
                                                        
            });
           $(".navItems").each(function(index){
                $(this).attr("idx",index);
                var _this = $(this);
                $(this).mouseover(function(){                 
                    if( $(".navBtn").data("flag")){
                        var _idx=$(this).attr("idx");
                        $(this).css({
                          "width":"180px"         
                        }); 
                        $(".navListPopover"+_idx+"").stop(true,true).show();
                        $('.navItems').show(); 
                                    
                    }else{
                        $('.navItems').hide();
                    }
                });
                $(this).mouseout(function(){              
                    if($(".navBtn").data("flag")){
                         var _idx=$(this).attr("idx");
                        $(".navListPopover"+_idx+"").stop(true,true).hide();
                        $(this).css({
                          "width":"52px"         
                        }); 
                        $('.navItems').show();
                    }else{
                        $('.navItems').hide();
                    }
                });  
           });
                          
        },

        view:function(This){
            $(document).on("click",".btn",function(){
                $(".modal-dialog").css("display","block");
            });
        },
        close:function(This){
            $(".modal-content .modal-header .close").click(function(){
                $(this).parents(".modal-dialog").css("display","none");
            });
        },
        //获取nav侧边栏点击的值
//        navValue:function(){
//            $(document).on("click",".children li div .pos",function(ev){     
//                //子列表名
//              var Zname=$(this).attr('data-name').trim();
//              //主列表名
//              var fname=$(this).parents(".navList li").find("span:nth-of-type(2)").text().trim();
//              if(window.localStorage){
//                localStorage.setItem("Zname",Zname);
//                localStorage.setItem("fname",fname);
//              }             
//            });
//        },
//        replaceVal:function(){
//            if(window.localStorage){
//                var z1 = localStorage.getItem("Zname");
//                var f1 = localStorage.getItem("fname");
//              }
//             //替换掉 rightTop中的值
//            var tr_secondLi=$(document).find(".rightTop li:nth-of-type(2)").children()[0];
//            var tr_sartLi=$(document).find(".rightTop li:nth-of-type(3)").children()[0];
//            tr_secondLi.innerHTML=f1;
//            tr_sartLi.innerHTML=z1;
//        },
        triggerNav:function(){
            $(".navItems").click(function(){
                var _this = $(this);
                var idx = $(this).attr("idx");
                $(".navList li").each(function(index){
                    if(index == idx){
                        $(".navList>li").eq(idx).find(">div").trigger("click");
                        _this.hide();
                    }

                });
            });
        }
    }
    module.exports.nav= nav;
})

define("page",function (require, exports, module) {
    module.exports.page={
       
    }
})
