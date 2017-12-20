/**
 * Created by Administrator on 2016/3/29.
 */
define("page",function (require, exports, module) {
    var page={
        spmanage:{
            name:"商品管理",
            url:"addSp.html",
            children:[{
                objName:"",
                name:"商品列表",
                url:"addSp.html"
            },{
                objName:"",
                name:"添加新商品",
                url:"addSp.html"
            },{
                objName:"",
                name:"管理分类",
                url:"addSp.html"
            }]
        }
    }
    module.exports.page=page;
})