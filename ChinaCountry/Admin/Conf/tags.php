<?php
return array(
    // 添加下面一行定义即可
    //'view_filter' => array('Behavior\TokenBuildBehavior'),
	/*'view_parse'    => array('Home\Behavior\UserBehavior'),
	'test' => array('Home\Unit\TestUnit'),*/
     'app_end'    => array('Admin\Behavior\ViewBehavior'),
    'app_begin' => array('Admin\Behavior\CronRunBehavior'),
);
?>