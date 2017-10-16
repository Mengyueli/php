<?php 
	#监听用户是否触发了submit方法
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		// 设置cookie,参数1：cookie的名字，参数2:属性里要存储的值，参数3：cookie要存储的时间（3600s一小时以后过期）
		setcookie('username',$username,time() + 86400*30);
		header('location:page2.php');
	}
	#time() 函数返回自 Unix 纪元（January 1 1970 00:00:00 GMT）起的当前时间的秒数。
	// echo time();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
	<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
			<div class="form-group">
				<label for="">姓名</label>
				<input type="text" name="username" placeholder="enter your name" class="form-control">
				<br>
				<input type="submit" value="Submit" name="submit" class="form-control btn btn-info">
			</div>
			
		</form>	
	</div>
	
</body>
</html>