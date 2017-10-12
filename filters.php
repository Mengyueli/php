<div class="container">
	<?php 
		#检查是否存在data的name属性
		if(filter_has_var(INPUT_POST,"data")){
			// echo "data存在";
			$email = $_POST['data'];
			#echo $email;
			#过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;
			#验证是否是一个有效的邮箱
			// if(filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)){
			if(filter_var($email,FILTER_SANITIZE_EMAIL)){
				echo "邮箱合法";
			}
			else{
				echo "邮箱不合法";
			}
		}else{
			echo "data不存在";
		}
		/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
		#练习：验证一个变量中的值是否是合法的整型
		echo '<hr>';
		$var = "23";//合法
		if(filter_var($var,FILTER_VALIDATE_INT)){
			echo '222合法';
		}else{
			echo '222不合法';
		}
		#获取字符串中所有的数值
		echo '<hr>';
		$string = 'af1561gfg48a5fg1f';
		var_dump(filter_var($string,FILTER_SANITIZE_NUMBER_INT));

		#特殊字符
		$var = '<script>alert(1);</script>';
		// echo $var;//能弹出
		echo '<hr>';
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
			
		#验证数组中每隔元素
		echo '<hr>'; 
		$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				'filter' => FILTER_VALIDATE_INT,//'filter':规定好的
				'options' => array(
					'min_range' => 1,
					'max_range' => 150
				)

			)
		);
		// print_r(filter_input_array(INPUT_POST,$filters));
		echo '<hr>'; 
		#验证form表单中input的内容，第一个input一定是email，第二个input一定是数值,并且数值在1~150之间
		/*if(filter_has_var($INPUT_POST, 'data')){
			if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
				echo '邮箱合法';
			}else{
				echo '邮箱不合法';
			}
		}else{
			echo 'data不存在';
		}
		
		echo '<br>';
		if(filter_has_var($INPUT_POST,'data2')){
			if(filter_input(INPUT_POST,'data2',FILTER_VALIDATE_INT)){
				// echo '数字合法';
				$num = $_POST['data2'];
				if($num>1&&$num<150){
					echo '数字合法';
				}
			}else{
				echo '数字不合法';
			}
		}else{
			echo 'data2不存在';
		}
		
		echo'<hr>';
		echo '0';*/

		#filter_var_array — 获取多个变量并且过滤它们
		$array = array(
			"name"=>'henry',
			"age"=>'30',
			"email"=>'henry@gmail.com'
		);
		$filters = array(
			'name'=>array(
				'filter'=>FILTER_CALLBACK,//回调option里指定的函数
				'options'=>'ucwords'
			),
			'age'=>array(
				'filter'=>FILTER_VALIDATE_INT,
				'options'=>array(
					"min_range"=>1,
					'max_range'=>100
				)
			),
			'email'=>FILTER_SANITIZE_EMAIL

		);
		print_r(filter_var_array($array,$filters));

	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters 过滤器</title>
	<!-- <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<input type="text" name="data" class="form-control">
			<br>
			<input type="text" name="data2" class="form-control">
			<br>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>