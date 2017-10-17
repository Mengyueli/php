<?php 
	#拿到数据库里的数据
	#01.链接数据库
	$conn = mysqli_connect('localhost','root','','ajaxtest');
	#02.查询
	$query = "SELECT * FROM users";
	#03.执行(返回的是查到的结果 或 )
	$result = mysqli_query($conn,$query);
	#04.获取数据
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);//关联数组 下标数组MYSQL_NUM;
	// print_r($users);
	#解析(数组转换成json)
	echo json_encode($users);
?>