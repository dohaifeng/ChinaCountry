<?php

/*
 * Copyright(c)2015 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  LiuTian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-3-21 14:55:26
 * @Version 1.0
 */
/**
 * 文件下载操作
 * @param string $src_file	要下载的文件
 */
function downloadFile($src_file) {
	//读取文件信息
	$path_info = pathinfo($src_file);
	//发送头编码 告知文件类型
	header('Content-type: application/' . $path_info["extension"]);
	//以附件形式 不直接打开
	header('Content-Disposition: attachment; filename=' . iconv("utf-8", "gbk", $path_info["basename"]));
	//读取保存缓冲区的文件 
	readfile($src_file);
}

/*
 * 递归删除非空目录
 */
function deleteFold($dirRoot) {
	//将UTF8文件编码成GBK 用于系统验证
	$dirRoot = iconv("utf-8", "gbk", $dirRoot);
	if (!is_readable($dirRoot))		return;
	//打开目录
	$handle = opendir($dirRoot);
	//读取文件
	while ($file = readdir($handle)) {
		//过滤快捷方式等
		if ($file == "." || $file == "..")  continue ;
		//组装文件
		$full_path = $dirRoot . "/" . $file; //纯GBK
		//如果是目录 递归执行删除
		if (is_dir($full_path)) {
			deleteFold(iconv("gbk", "utf-8", $full_path));
		//如果是文件 则直接删除之
		} elseif (is_file($full_path)) {
			unlink($full_path);
		}
	}
	//关闭目录
	closedir($handle);
	//删除最外层
	rmdir($dirRoot);
}

//前台截取字符串
function truncate_cn($string, $length = 0, $ellipsis = '…', $start = 0) {
    $string = strip_tags(htmlspecialchars_decode($string));
    $string = preg_replace('/(\s|\&nbsp\;|　|\xc2\xa0)/', '', $string);
    $ellipsis = (mb_strlen($string, 'utf-8') > $length) ? $ellipsis : '';
    $string = mb_substr($string, $start, $length, 'utf-8');
    return $string . $ellipsis;
}