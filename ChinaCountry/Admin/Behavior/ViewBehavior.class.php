<?php 
//行为
namespace Admin\Behavior;
use Think\Behavior;
use Think\Controller;
	class ViewBehavior extends Controller{
		/*
		1.C('view',true);页面不调用任何模板;
		2.C('rewrite','Index/test');调用自定义模板;
		3.C('templateRemove',true);取消调用子模板;
		4.C('templateContent','自定义内容');使用变量内容作为模板输出;
		*/
		public function run(&$params){
			if(!C('view')){
				//echo '行为模式';
				$header = $this->fetch('Index:public:header');
				$rewrite=C('rewrite');
				if(!C('templateRemove')){
					$arr=empty($rewrite)?CONTROLLER_NAME.':'.ACTION_NAME:$rewrite;
					$content = $this->fetch($arr);
				}else{
					$content = C('templateContent');
				}
		        $data=sprintf($header,$content);
		        $this->show($data,'utf-8','text/html');
			}
		}
	}
?>
