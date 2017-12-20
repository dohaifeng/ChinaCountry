<?php

return array(
    //'配置项'=>'配置值'
    //M层的配置
    /* 数据库设置 */
    'DB_TYPE' => 'mysqli', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'chinacountry', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PREFIX' => 'cc_', // 数据库表前缀
    //视图层配置
    'TMPL_ENGINE_TYPE' => 'Think', // 默认模板引擎 以下设置仅对使用Think模板引擎有效
    'TMPL_TEMPLATE_SUFFIX' => '.tpl', // 默认模板文件后缀
    'TMPL_CACHE_ON' => FALSE, // 是否开启模板编译缓存,设为false则每次都会重新编译
    'TMPL_L_DELIM' => '{', // 模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '}', // 模板引擎普通标签结束标记
    //控制层配置
    'DEFAULT_M_LAYER' => 'Model', // 默认的模型层名称
    'DEFAULT_C_LAYER' => 'Controller', // 默认的控制器层名称
    'DEFAULT_V_LAYER' => 'View', // 默认的视图层名称
    'DEFAULT_MODULE' => 'Admin', // 默认模块
    'DEFAULT_CONTROLLER' => 'Index', // 默认控制器名称
    'DEFAULT_ACTION' => 'index', // 默认操作名称
    //系统配置
    'URL_CASE_INSENSITIVE' => true, // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL' => 1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_HTML_SUFFIX' => 'html', // URL伪静态后缀设置
    'SHOW_PAGE_TRACE' => 'true', //开启调试模式
    //配置分页显示条数
    'PER_PAGE' => 15,
    //跳转页面默认页面
    'TMPL_ACTION_SUCCESS'   => 'Admin/dispatch_jump',
    'TMPL_ACTION_ERROR'     => 'Admin/dispatch_error', 
    /* //配置权限
      "AUTH" => array(
      "AUTH_ON" => TRUE,		//开启权限验证
      "AUTH_GROUP_ACCESS" => 'think_auth_group_access',		//用户对应权限组的数据表
      "AUTH_GROUP" => "think_auth_group",				//所有权限的分组
      "AUTH_RULE" => "think_auth_rule",				//每个分组的权限
      "AUTH_USER" => "think_user",					//用户信息
      ), */

    //自动加载文件
//	"LOAD_EXT_FILE"=>"functions",//函数文件
    //后台关闭token验证
    'TOKEN_ON' => false, //是否开启令牌验证
    /* 自动运行配置 */
    'CRON_CONFIG_ON' => true, // 是否开启自动运行
    'CRON_CONFIG' => array(
        '测试定时任务1' => array('Admin/Cronbak/systemBackup', '84600', ''), //路径(格式同R)、间隔秒（0为一直运行）、指定一个开始时间
    ),
);
