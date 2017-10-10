<!-- html标签可以嵌套php -->
<!-- <h1>
	<?php 
		// echo "Hello World!";
	 ?>	
</h1> -->
<!--  可以写多个 -->
<?php 
	// echo "Hello World!";
?>	
<!-- <?php 
	// echo "Hello Everybody";
 ?> -->
 <!-- 注释 -->
 <!--// 单行注释 -->
 <!-- #单行注释 -->
<!-- /**/多行注释
	快捷键：alt+command+/ -->
<!-- 变量：在项目运行过程中可以被改变的量 -->
<?php 
	// $output = "hello world";
	// echo $output;
	/*
		-前缀 $
		-以字母数字下划线开头，
		-数字不能开头
		-大小写敏感
		-驼峰命名法
	*/
		#数据类型
		/*
			String Integer Float Boolean Array Object Resource

		*/
		$num = 22;
		// echo $num;
		$float = 2.13;
		// echo $float;
		$bool = false;
		echo $bool;//0打印不出来


		#运算符
		$num1 = 10;
		$num2 = 20;
		echo $num1,$num2;//,可以打印多个变量
		$sum = $num1 + $num2;
		// echo $sum;

		#字符串拼接
		$string1 = "hello";
		$string2 = "world";
		// (注意PHP中，+就是加号，没有拼接功能)
		// $greeting = $string1 + $string2;
		$greeting = $string1." ".$string2."!";
		// echo $greeting;

		#php中引号的区别
		// 在php中，''中的内容是单纯的字符串
		$greeting2 = '$string1 $string2';
		// "" 中的变量可以被正常的解析
		$greeting3 = "$string1 $string2";

		#转义字符
		$string3 = 'They\'re there';
		$string4 = "they're there";
		// echo $string3;
		echo $string4."<br>";//换行
		echo '<hr>';
		// echo $greeting3;

		//输出
		// printf($string4);
		//printf();是一个方法，输出的话有返回值，成功的话返回值是1；速度比较慢

		#常量(一旦被定义不可以被改变)常量的name必须全部大写
		// define(name,value);
		define("GREETING","whatever");
		//常量的第三个参数为布尔，true为不分大小写
		define('greeting','   what   ',true);
		// echo GREETING;
		// echo greeting;
		var_dump(greeting);
	
 ?>