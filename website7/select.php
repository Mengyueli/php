<?php 
	function selectData($sql){
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
		// var_dump($result);
		if($result->num_rows){
			$data = $result->fetch_all(MYSQLI_ASSOC);//MYSQLI_BOTH(下标和关联数组) MYSQLI_NUM(返回下标数组);
			//默认下标数组
			// print_r($data);
			echo json_encode($data);
		}
		#断开链接
		$mysqli->close();
	}
	#准备SQL语句
	$sql = "SELECT * FROM customers";
	//输出id=2的那一行
	// $sql = "SELECT * FROM customers WHERE id=2";
	//仅仅输出id=2
	// $sql = "SELECT ID=2 FROM customers";
	selectData($sql);

?>