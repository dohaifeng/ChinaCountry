<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsModel
 *
 * @author feng
 */
namespace Admin\Model;
class NewsModel extends \Think\Model{
    //表模型配置信息
    public $tableName = "news";
    //自动验证规则配置
    public $_validate = array(
        //添加时 标题不能为空
        array("title", "require", "标题不能为空",self::MODEL_INSERT),
        //添加时  内容不能为空
        array("content","require", "内容不能为空" , self::MODEL_INSERT),
    );
}
