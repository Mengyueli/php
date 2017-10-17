<?php 
	function deleteData($sql){
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
			echo '删除成功';
		}else{
			echo '删除失败';
		}
		#断开链接
		$mysqli->close();
	}
	#准备SQL语句
	$sql = "DELETE FROM customers WHERE id=11";
	deleteData($sql);

?>