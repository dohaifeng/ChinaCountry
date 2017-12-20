<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteModel
 *
 * @author feng
 */
namespace Admin\Model;

class SiteModel extends \Think\Model{
    public $tableName = "site_information";
    public $_validate = array(
        array("title", "require", "标题不能为空"),
        array("keyword", "require", "关键字不能为空"),
        array("description", "require", "描述不能为空")
    );
}
