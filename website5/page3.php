<?php 
	#存储多个值
	$users = ['name' =>'henry','email' => 'henry@gmail.com','age' =>30];
	#数组转化成字节流
	$users = serialize($users);
	setcookie('users',$users,time()+86400);

	#拿取cookie的时候要反解析字节流
	$users = unserialize($_COOKIE['users']);
	print_r($users);

?>