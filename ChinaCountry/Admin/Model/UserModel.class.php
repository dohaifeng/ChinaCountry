<?php

/*
 * Copyright(c)2015 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  LiuTian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-3-17 14:17:57
 * @Version 1.0
 */
/**
 * 用户表模型操作
 */

namespace Admin\Model;

class UserModel extends \Think\Model\RelationModel{

    //表模型配置信息
    public $tableName = "admin_user";
    //自动完成
    protected $_auto = array(
        //1 增2修改3任意
        array('password', 'md5', 3, 'function'),
    );
    //自动验证规则配置
    public $_validate = array(
        //全部时间 账号不能为空
        array("name", "require", "登陆账号不能为空"),
        //登陆时 必须验证密码长度
        array("password", "6,15", "密码长度应为6-15位", self::MUST_VALIDATE, 'length', 4),
        //昵称在修改和添加时必须验证
        array("nickname", 'require', "昵称未填写", self::EXISTS_VALIDATE, '', self::MODEL_BOTH),
        //添加时 密码必须验证
        array("password", "6,15", "密码长度应为6-15位", self::MUST_VALIDATE, "length", self::MODEL_INSERT),
        //添加时 重复密码必须验证
        array("repassword", "password", "两次密码输入不一致", self::EXISTS_VALIDATE, "confirm", self::MODEL_INSERT),
        //修改时 密码如果不为空必须验证
        array("password", "6,15", "密码长度应为6-15位", self::VALUE_VALIDATE, "length", self::MODEL_UPDATE),
        //修改时 重复密码如果不为空必须验证
        array("repassword", "password", "两次密码输入不一致", self::EXISTS_VALIDATE, "confirm", self::MODEL_UPDATE),
    );
    
    //设置表关联模型
	public $_link = array(
                        "auth_group_access" => array(
			"mapping_type" => self::HAS_ONE,
			"class_name" => "auth_group_access",
			"foreign_key" => "uid",
			"mapping_name" => "AuthGroupAccess", 
		),
	);

}
