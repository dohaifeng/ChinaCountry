<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColumnController
 *
 * @author feng
 */
namespace Admin\Controller;

class ColumnController extends BaseController{
    //显示根栏目
	public function index() {
		//查询所有根栏目
		$this->columns = M("column")->order("CONCAT_WS(',',path,id)")->select();
	}
        
        //添加栏目
	public function add() {
	}
        //插入栏目
	public function insert() {
            C('View',true);
		$categoryModel = D("Column");
		/**
		 * 写入数据
		 */
		//创建数据对象
		if (FALSE == $categoryModel->create()) {
			$this->error($categoryModel->getError());
		}
		//添加一条记录
		if (FALSE !== $result = $categoryModel->add()) {
			$this->success("成功插入一条记录，编号：" . $result, U("Column/index"), 1);
		} else {
			$this->error("操作失败");
		}
	}
        
        //插入子菜单
	public function insertChild() {
		/**
		 * 将菜单写入数据库
		 */
		//创建数据对象
		$CategoryModel = D("Column");
		if (FALSE === $CategoryModel->create($data)) {
			$this->error($CategoryModel->getError());
		}
		//执行添加数据
		if (FALSE !== $CategoryModel->add()) {
			//跳转提示
			$this->success("添加菜单成功", U("Column/index"), 1);
		} else {
			$this->error("添加菜单失败");
		}
	}
        
        //删除分类
	public function delete() {
            C('View',true);
		/**
		 * 删除该栏目或菜单
		 */
		$result = M("column")->where("id = " . I("get.id") . " or path like '%" . I("get.id") . "%'")->delete();
		if ($result !== FALSE) {
			$this->success("删除成功，影响了{$result}条记录", U("column/index"));
		} else {
			$this->error("删除失败");
		}
	}
        
        //编辑分类
	public function edit() {
		//查询该栏目信息
		$col_recc = M("Column")->where(array("id" => I("get.id")))->find();
		if ($col_recc['parentid'] == 0 && $col_rec['path'] == 0) {
			//如果该类拥有子类 则不能修改
			$result = M("Column")->where("path like '%".I("get.id")."%'")->find();
			!empty($result) && $this->error("该栏目含有菜单不能被编辑");	
		}
                $this->assign("col_recc",$col_recc);
	}

	//修改分类
	public function update() {
            C("view",true);
		//实例化表模型
		$columnModel = D("Column");
		//创建数据对象
		if (FALSE === $columnModel->create()) {
			$this->error($columnModel->getError());
		}
		//执行修改
		if (FALSE !== $columnModel->where(array("id" => I("post.id")))->save()) {
			$this->success("修改成功", U("Column/index"), 1);
		} else {
			$this->error("修改失败");
		}
	}
}
