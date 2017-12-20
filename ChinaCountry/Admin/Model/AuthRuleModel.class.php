<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthRuleModel
 *
 * @author feng
 */
namespace Admin\Model;
class AuthRuleModel extends \Think\Model{
	//
	public $tableName = "auth_rule";
	public $_validate = array(
		array("name", "", "已有该权限名",self::MUST_VALIDATE, "unique", self::MODEL_BOTH),
		array("title", "require", "标题不能为空"),
	);
}