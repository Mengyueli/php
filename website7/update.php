<?php 
	function updateData($sql){
		#链接数据库
		$mysqli = new mysqli("localhost", "root","","people");
		#测试是否链接成功
		if($mysqli->connect_errno){
			die($mysqli->connect_error);
		}

		#设置UTF-8		
		$mysqli->query("set names utf8");
		#执行sql语句
		$result = $mysqli->query($sql);
		if($result){
			echo '更新成功';
		}else{
			echo '更新失败';
		}
		#断开链接
		$mysqli->close();
	}
	#准备SQL语句
	$sql = "UPDATE customers SET name='孙帅',email='ss@gmail.com' WHERE id=10";
	updateData($sql);

?>