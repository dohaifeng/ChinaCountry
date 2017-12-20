
seajs.config({
    plugins: ['shim'],
    // 别名配置
    alias: {
        'common':'common.js',
        'jquery':'jquery-2.1.1.min.js',
        'imgdaly':'imageOperation.js',
        'FlexSlider':'flexSlider.js',
        "zepto":'zepto.js',
        "Tab":'Tab.js',
        "layer":'layer.js',
        "util":"util.js",
         "lazyload":"jquery.lazyload.js",
        "fastclick":"fastclick.js",
        "flatUi":"flat-ui-pro.min.js",
        "datezh-CN":"datezh-CN.js",
        "page":"page.js"
    },

    // 路径配置
    paths: {

    },

    // 变量配置
    vars: {
        'locale': 'zh-cn'
    },

    // 映射配置
    map: [
    ],

    // 预加载项
    preload: [
        Function.prototype.bind ? '' : 'es5-safe',
        this.JSON ? '' : 'json'
    ],

    // 调试模式
    debug: false,

    // Sea.js 的基础路径
    base:urlCode,

    // 文件编码
    charset: 'utf-8',

});
function getPath(){
    //获取当前网址，如： http://localhost:8083/uimcardprj/share/meun.jsp
    var curWwwPath=window.document.location.href;
    //获取主机地址之后的目录，如： uimcardprj/share/meun.jsp
    var pathName=window.document.location.pathname;
    pathName=pathName.substr(0,pathName.lastIndexOf("/"));
    var pos=curWwwPath.indexOf(pathName);
    //获取主机地址，如： http://localhost:8083
    var localhostPaht=curWwwPath.substring(0,pos);
    //获取带"/"的项目名，如：/uimcardprj
    var projectName=pathName.substring(0,pathName.substr(1).indexOf('/')+1);
    return  pathName;

}

