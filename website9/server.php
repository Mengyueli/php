<?php 
	session_start();
	$errors = [];
	$db = mysqli_connect('localhost','root','','registration');
	//判断
	if(isset($_POST['reg_user'])){
		//假设数据库里没有输入的
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$useremail = mysqli_real_escape_string($db,$_POST['email']);
		$password1 = mysqli_real_escape_string($db,$_POST['password1']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);
		if(empty($username)){
			array_push($errors,"用户名不能为空");

		}
		if(empty($useremail)){
			array_push($errors,"邮箱不能为空");

		}
		if(empty($password1)){
			array_push($errors,"密码不能为空");

		}
		if($password1 != $password2){
			array_push($errors,"两次密码不一致");

		}
		if(count($errors) == 0){
			$password = md5($password1);
			$query = "INSERT INTO users(username,email,password) VALUES ('$username','$useremail','$password')";
			mysqli_query($db,'set names utf8');
			echo '123';
			if(mysqli_query($db,$query)){
				echo '456';
				header('location: login.php');

			}
		}
	}
	#用户登录
	if(isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password1']);
		if(empty($username)){
			array_push($errors,'用户名不能为空！');
		}
		if(empty($password)){
			array_push($errors,'密码不能为空！');
		}
		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
			mysqli_query($db,"set names utf8");
			$result = mysqli_query($db,$query);
			// var_dump($result);
			#判断有没有获取到数据
			if(mysqli_num_rows($result) == 1){
				// echo '213';
				// session
				$_SESSION['success'] = 'success';
				$_SESSION['username'] = $username;
				header('location:index.php');
			}
		}
	}


?>