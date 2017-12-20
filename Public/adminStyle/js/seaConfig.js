
seajs.config({
    plugins: ['shim'],
    // ��������
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

    // ·������
    paths: {

    },

    // ��������
    vars: {
        'locale': 'zh-cn'
    },

    // ӳ������
    map: [
    ],

    // Ԥ������
    preload: [
        Function.prototype.bind ? '' : 'es5-safe',
        this.JSON ? '' : 'json'
    ],

    // ����ģʽ
    debug: false,

    // Sea.js �Ļ���·��
    base:urlCode,

    // �ļ�����
    charset: 'utf-8',

});
function getPath(){
    //��ȡ��ǰ��ַ���磺 http://localhost:8083/uimcardprj/share/meun.jsp
    var curWwwPath=window.document.location.href;
    //��ȡ������ַ֮���Ŀ¼���磺 uimcardprj/share/meun.jsp
    var pathName=window.document.location.pathname;
    pathName=pathName.substr(0,pathName.lastIndexOf("/"));
    var pos=curWwwPath.indexOf(pathName);
    //��ȡ������ַ���磺 http://localhost:8083
    var localhostPaht=curWwwPath.substring(0,pos);
    //��ȡ��"/"����Ŀ�����磺/uimcardprj
    var projectName=pathName.substring(0,pathName.substr(1).indexOf('/')+1);
    return  pathName;

}

