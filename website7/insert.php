<?php 
	/*
	*1.链接数据库
	*2.执行SQL语句
	*3.获取数据并使用
	*4.断开连接
	*/
	function insertData($sql){
		#1链接数据库
		$mysqli = new mysqli("localhost", "root","","people");
		#测试是否链接成功
		if($mysqli->connect_errno){//如果连接到数据库的话，会返回0，失败的话返回别的数字
			die($mysqli->connect_errno);
		}

		#设置UTF-8		
		$mysqli->query("set names utf8");
		#执行sql语句
		$result = $mysqli->query($sql);
		if($result){
			echo '插入成功';
		}else{
			echo '插入失败';
		}
		#断开链接
		$mysqli->close();
	}
	#准备SQL语句
	$sql = "INSERT INTO customers(
			name,email,adress,city,state) VALUES ('鑫鑫','xinxin@gmail.com','定泗路','北京','昌平区')";
	insertData($sql);
?>
