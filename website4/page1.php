<?php 
	#使用sussion要先调用,session是把数据存储到服务器，localhost，cookie是把数据存储在浏览器
	if(isset($_POST['submit'])){
		session_start();
		// echo '123';
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];
		var_dump($_SESSION);
		header('Location: page2.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>
