<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2013 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think\Template\TagLib;
use Think\Template\TagLib;
defined('THINK_PATH') or exit();
/**
 * CX标签库解析类
 */
class Edit extends TagLib {
		protected $tags=array(
			//使用标签必须使用的属性color和border  close=1表示单标签2表示对标签
			'editor'=>array('attr'=>'name,content','close'=>2),
			'kineditor'=>array('attr'=>'name,content','close'=>2),
			);
		public function _editor($tag){
			//百度编辑器
			$box='<script type="text/javascript" charset="utf-8" src="'.$tag['public'].'/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="'.$tag['public'].'/Ueditor/ueditor.all.min.js"> </script><script type="text/javascript" charset="utf-8" src="'.$tag['public'].'/Ueditor/lang/zh-cn/zh-cn.js"></script>';
			$box.='<script id="editor" name="'.$tag['name'].'" type="text/plain" style="width:80%;height:250px;">'.$tag['content'].' </script>';
			$box.='<script type="text/javascript"> UE.getEditor("editor").ready(function() { this.setContent()})</script>';
			return $box;
		}
		public function _kineditor($tag){
			
			//kinedit编辑器
			$box='<link rel="stylesheet" href="'.$tag['public'].'/kindeditor/themes/default/default.css" />';
			$box.='<link rel="stylesheet" href="'.$tag['public'].'/kindeditor/plugins/code/prettify.css" />';
			$box.='<script charset="utf-8" src="'.$tag['public'].'/kindeditor/kindeditor-all-min.js"></script>';
			$box.='<script charset="utf-8" src="'.$tag['public'].'/kindeditor/lang/zh-CN.js"></script>';
			$box.='<script charset="utf-8" src="'.$tag['public'].'/kindeditor/plugins/code/prettify.js"></script>';
			$box.='<script>KindEditor.ready(function(K) {';
			$box.="var editor1 = K.create('textarea[name=".$tag['name']."]', {";
			$box.="cssPath : '".$tag['public']."/kindeditor/plugins/code/prettify.css',";
			$box.="uploadJson : '".$tag['public']."/kindeditor/inlcude/upload_json.php',";
			$box.="fileManagerJson : '".$tag['public']."/kindeditor/inlcude/file_manager_json.php',";
			$box.="allowFileManager : true,";
			$box.="afterCreate : function() {";
			$box.="var self = this;";
			$box.="K.ctrl(document, 13, function() {";
			$box.="self.sync();";
			$box.="K('form[name=example]')[0].submit();";
			$box.="});";
			$box.="K.ctrl(self.edit.doc, 13, function() {";
			$box.="self.sync();";
			$box.="K('form[name=example]')[0].submit();";
			$box.="});";
			$box.="}";
			$box.="});";
			$box.="prettyPrint();";
			$box.="});";
			$box.="</script>";
			$box.='<textarea name="'.$tag['name'].'" style="width:800px;height:400px;visibility:hidden;">'.$tag['content'].'</textarea>';
			return $box;
		}
    }
