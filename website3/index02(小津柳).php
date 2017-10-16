<?php 
	#提示用户的内容
	$msg = '';
	#弹窗的效果
	$msgClass = '';
	#验证用户有没触发submit按钮事件
	// var_dump(filter_has_var(INPUT_POST, "submit"));
	if (filter_has_var(INPUT_POST, "submit")) {
		// echo "123";
		#拿到需要的内容
		$name = $_POST["name"];
		$email = $_POST['email'];
		$message = $_POST["message"];
		#验证用户有没有输入（输入的内容是否我空）
		if(!empty($name) && !empty($email) && !empty($message)){
			#验证邮箱
			// var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
			if(filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
				$msg = "请输入合法的邮箱";
				$msgClass = "alert-danger";

			}else{
				$toEmail = "1242178302@qq.com";
				$subject = "本周五放假";
				$body = 
					"<h2>BJH170705 每周五都需要外出拓展！</h2>
					<h4>姓名：".$name."</h4>
					<h4>邮箱：".$email."</h4>
					<h4>内容：".$message."</h4>"


					;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "发自：" .$name. "<" .$email. ">"."\r\n";
				#判断邮件发送是否成功
				if (mail($toEmail,$subject,$body,$headers)) {
					$msg = "邮件发送成功";
					$msgClass = "alert-success";
				}else{
					$msg = "邮件发送失败";
					$msgClass = "alert-danger";
				}

			}

		}else{
			$msg = "请输入对应的内容";
			$msgClass = "alert-danger";
		}

		
	}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php mail sender</title>
	<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
	<!-- 导航 -->
	<nav class="navbar navbar-inverse">
		<!-- inverse 取反色 default默认色  -->
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">邮件发送</a>
			</div>
		</div>
	</nav>
	<!-- form -->
	<div class="container" >
		<!-- 友情提示 -->
		<?php if($msg != ""): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
				
			</div>
		<?php endif; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="">姓名</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name: ""; ?>">

			</div>
			<div class="form-group">
				<label for="">邮箱</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: ""; ?>">
				
			</div>
			<div class="form-group">
				<label for="">信息</label>
				<textarea name="message" class="form-control" ><?php echo isset($_POST['message']) ? $message: ""; ?></textarea>
				
			</div>
			<button name="submit" type="submit" class="btn btn-info btn-block">发送</button>
		</form>
	</div>
</body>
</html>