<?php

	$link = mysqli_connect('localhost','root','') or die('数据库连接失败');
	//选择项目的数据库
	mysqli_select_db($link,'zyqx');
	//设置数据库编码格式为utf8
	mysqli_query($link,'set names utf8');
	//执行SQL语句
	$sql = 'select * from clean ';
	$sql1="select count(*) from newsinfo";
	$result = mysqli_query($link,$sql);
	$result1=mysqli_query($link,$sql1);
	//处理结果集
	$data = array(); //定义数组用于保存数据
	while($row = mysqli_fetch_array($result)){
		$data[] = $row;
	}
//$num=mysqli_fetch_row($result1);
//$num1=$num[0];
	//载入HTML模板
	require './index.php';

?>
