<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColumnModel
 *
 * @author feng
 */
namespace Admin\Model;
use Think\Model;
class ColumnModel extends Model{
    //表模型配置信息
    public $tableName = "column";
    public $_validate = array(
		array("name","require","栏目名称未填写",self::MUST_VALIDATE, "", self::MODEL_BOTH),
		array("url", "require", "栏目链接未填写",self::MUST_VALIDATE, "", self::MODEL_BOTH),
	);
}
