<?php 
	// echo 'Hello World';
	// if(isset($_GET['name'])){
	// 	echo "你的名字是：".$_GET['name'];
	// }
	
	//SQL插入信息
	#1.连接数据库(面向过程)
	$conn = mysqli_connect('localhost','root','','ajaxtest');
	//参数：
	//host:Can be either a host name or an IP address.
	//username：The MySQL user name.
	//passwd：If not provided or NULL, 
	//dbname(数据库名字):If provided will specify the default database to be used when performing queries.
	//port(网络数据库需要写):Specifies the port number to attempt to connect to the MySQL server.
	if(isset($_POST['name'])){
		#echo "你的名字是：".$_POST['name'];
		$name = $_POST['name'];
		$query = "INSERT INTO users(name) VALUES('$name')";//users:表名（name）字段
		$result = mysqli_query($conn,$query);//1 || 0
		//‘set names utf8’
		if($result){
			echo '数据插入成功';

		}else{
			echo '数据插入失败'.mysqli_error($conn);
		}
	}
?>