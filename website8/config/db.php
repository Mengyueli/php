<!-- 提取的公共部分 -->
<?php 
	#面向过程的方法链接数据库
	#链接数据库
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	#判断是否链接成功
	if(mysqli_connect_errno()){//0成功 不是0返回错误信息
		echo "数据库链接失败".mysqli_connect_errno();
	}
?>