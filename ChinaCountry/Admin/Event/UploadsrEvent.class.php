<?php 
namespace Admin\Event;
use Think\Controller;
use Admin\Event\UploadsEvent;
use Think\Upload;

class UploadsrEvent extends Controller{ 
	

	public function upload($post){ 
    	//实例化上传类
    	$upload=new Upload($post);
    	
    	//上传文件大小
    	$upload->maxSize=3145738;
    	//上传文件格式
    	$upload->exts=array('jpg','jpeg','gif','png');
    	//上传文件夹
    	$upload->savePath= '/Uploads/'.date('Y-m-d',time()).'/';
    	
    	//同名覆盖
    	$upload->replace=true;
    	//设置子目录格式
    	$upload->subName='imge';
    	//控制加密是否开启
    	$upload->hash=false;

    	//返回上传结果是否成功
    	$info=$upload->upload();

    	$data=array();
    	if(!$info){
    		$callback['error']=$upload->getError();
    	}else{
    		foreach($info as $file){
    			//设置文件名
    			//$upload->saveName=strval(uniqid());
    			/*//文件名
    			echo $file['key'].'<br />';
    			//文件夹路径
    			echo $file['savepath'].'<br />';
    			//完整文件名
    			echo $file['name'].'<br />';
    			//转换文件名
    			echo $file['savename'].'<br />';
    			//文件大小 
    			echo $file['size'].'<br />';
    			//文件类型
    			echo $file['type'].'<br />';
    			//格式
    			echo $file['ext'].'<br />';
    			//md5加密
    			echo $file['md5'].'<br />';
    			//sha1加密
    			echo $file['sha1'].'<br />';*/
    			$callback[$file['key']][]= $file['savepath'].$file['savename'];
    		}
    		
    		//$this->success('上传成功');
    	}
        return $callback;
    }
}