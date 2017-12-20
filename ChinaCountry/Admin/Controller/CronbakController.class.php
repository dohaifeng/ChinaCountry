<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class CronbakController extends Controller {
	//数据库名
	public $Tables='';
    //备份下载
    public function down(){
        $get=I('get.','','htmlspecialchars');
        $get['url']=str_replace('-o-', '/', $get['url']);
        $get['url']=urldecode($get['url']);

        download_file($get['url']);
    }
	public function index(){
        $dir="./sql/backup/";
        $dirs=dirname(dirname(dirname(dirname(__FILE__))));
        $file_arr=$this->file_arr($dir);
        foreach($file_arr as $k=>$v){
            $file_arr[$k]=array(
                    'time'=>date('Y-m-d H:i:s',filemtime('./sql/backup/'.iconv('gbk','utf-8',$v))),
                    //这里字符集反转化
                    'size'=>ceil(filesize('./sql/backup/'.iconv('utf-8','gbk',$v))/1024),
                    'url' =>urlencode(str_replace('/', '-o-',$dirs.'/sql/backup/'.iconv('utf-8','gbk',$v))),
                    'name'=>rtrim($v,'.sql'),
                );
        }
        $this->assign('data',$file_arr);
		$this->display();
	}
    public function del(){
        if(IS_GET){
            $get=I('get.','','htmlspecialchars');
            if(unlink('./sql/backup/'.iconv('utf-8','gbk',$get['name']).'.sql')) $this->success('删除成功',U('Bak/index'));else $this->error('删除失败');
        }
    }
    
    //还原
    public function reduction(){
        if(IS_GET){
            $get=I('get.','','htmlspecialchars');
            $dir="./sql/backup/".$get['name'].'.sql';
            $sql=file_get_contents($dir);
            $sql = str_replace("\r", "\n", $sql);
            $sql = explode(";\n", $sql);
            $model=new Model();
            foreach($sql as $v){
                $model->execute($v);
            }
            $this->success('还原成功');
        }
    }
    //获取文件
    private function file_arr($post){
        header("Content-Type: text/html; charset=UTF-8");
        $file=scandir($post);
        foreach($file as $k=>$v){
            if($k<=1) unset($file[$k]);else{
                if(preg_match('/.sql/', $v)){
                    $file[$k]=iconv('gbk' , 'utf-8' , $v );
                }else unset($file[$k]);
                
            }
        }
        $file=array_values($file);
        return $file;
    }
	//数据备份
    public function backups(){
    	if(IS_POST){
            $file_arr=$this->file_arr('./sql/backup/');
            $post=I('post.');
            $post['name']=empty($post['name'])?'systemBackup'.time():$post['name'];
            if(in_array($post['name'].'.sql',$file_arr)){
                $this->error('该备份名称已被使用');
            }
    		//获得数据表
    		$this->backupTables();
    		$result='';
            $arr=array();
    		foreach($this->Tables as $v){
    			foreach($v as $h){
                    $arr[]=str_replace(C('DB_PREFIX'),'',$h);
    				//组合建表语句
    				$result.=$this->backupConnect($h);
    			}
    		}
    		
			$result.=$this->backupPreset($arr);
    		if(file_put_contents('./sql/backup/'.$post['name'].'.sql', $result)){
                $this->success('备份成功,返回首页',U('Bak/index'));
            }else{
                $this->error('备份失败');
            }
    	}
    	$this->assign('time',date('Ymd',time()).'_1');
    	$this->display();
    }
    public function systemBackup($token){
        if($token==='systemBackup10010001010101'){
                $file_arr=$this->file_arr('./sql/backup/');
                $post['name']='systemBackup'.time();
                if(in_array($post['name'].'.sql',$file_arr)){
                    $this->error('该备份名称已被使用');
                }
                //获得数据表
                $this->backupTables();
                $result='';
                $arr=array();
                foreach($this->Tables as $v){
                    foreach($v as $h){
                        $replace=str_replace(C('DB_PREFIX'),'',$h);
                        //去掉索引产生的错误表
                        if($h==C('DB_PREFIX').$replace){
                            $arr[]=$replace;
                        }
                        //组合建表语句
                        $result.=$this->backupConnect($h);
                    }
                }
                $result.=$this->backupPreset($arr);
                file_put_contents('./sql/backup/'.$post['name'].'.sql', $result);
        }
        
    }
    public function backupTables(){
    	$model=new Model();
    	//获取系统所用数据库
    	//$DB_NAME=C('DB_NAME');
    	//打印数据表
    	$Tables=$model->query('show tables');
    	if(empty($Tables)){
    		$this->error('获取数据表结构出错');
    	}else{
    		$this->Tables=$Tables;
    		return true;
    	}
    }
    public function backupConnect($post){
    	$model=new Model();
    	$Tables=$model->query('show full fields from `'.$post.'`');
    	$data="\n\r-- ----------------------------\n\r";
		$data.="-- Table structure for `'.$post.'`\n\r";
		$data.="-- ----------------------------\n\r";
    	$data.='DROP TABLE IF EXISTS `'.$post.'`;'."\n\r";
		$data.="CREATE TABLE `".$post."` (\n\r";
    	foreach($Tables as $v){
    		$arr['NO']=($v['Null']=='NO')?'NOT NULL':'';
    		$arr['Default']=($v['Default']==0 || empty($v['Default']))?'':'DEFAULT '.$v['Default'];
    		if($v['Key']=='PRI') $arr['Key'][]=$v['Field'];
    		$data.="`".$v['Field']."` ".$v['Type'].' '.$arr['NO'].' '.$arr['Default'].' '.$v['Extra']." COMMENT '".$v['Comment']."',\n\r";
    	}
    	$data=rtrim($data,",\n\r");
    	if(!empty($arr['Key']) && is_array($arr['Key'])){
    		$data.=",\n\rPRIMARY KEY (";
				foreach($arr['Key'] as $v){
					$data.="`".$v."`,";
				}
			$data=rtrim($data,',');
    		$data.=")";
		}
		//UNIQUE KEY
		if(!empty($arr['Key']) && is_array($arr['Key'])){
			$Tables=$model->query('show keys from `'.$post.'`');
			foreach($Tables as $k=>$v){
				if($v['Key_name']=='PRIMARY'){
					unset($Tables[$k]);
					continue;
				}
				$Tables[$v['Key_name']][]=$v;
				unset($Tables[$k]);
			}
				foreach($Tables as $k=>$v){
					if($v[0]['Non_unique']==0) $data.=",\n\rUNIQUE ";
					$data.="KEY `".$k."` (";
					foreach($v as $h){
						$data.="`".$h['Column_name']."`,";
					}
					$data=rtrim($data,',');
					$data.="),\n\r";
				}
				$data=rtrim($data,",\n\r");
		}
    	$data.="\n\r) ENGINE=InnoDB DEFAULT CHARSET=utf8;\n\r";
		return $data;
    }
    public function backupPreset($arr){
    	
    	foreach($arr as $v){
    		$data[$v]=M($v)->select();
    	}
    	//INSERT INTO `mini_auth_group` VALUES ('1', '默认管理组', '1', '1,2,3,11,14,20,25,27', 'superman不动');
    	foreach($data as $k=>$v){
    		
    		foreach($v as $h){
    			$datas.="INSERT INTO `".C(DB_PREFIX)."$k` VALUES (";
    			foreach($h as $m){
    				$datas.="'".str_replace("'", '"', $m)."',";
    			}
    			$datas=rtrim($datas,',');
    			$datas.=");\n\r";
    		}
    	}
    	return $datas;
    }
}