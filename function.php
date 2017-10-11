<?php 
	#function :函数 -具有某一功能的代码块
	/*
		Camel Case - my Function();驼峰
		Lower Case - my_function();小驼峰
		Pascal Case - MyFunction();大驼峰
	*/

	//定义函数(注意：函数一定会有返回值，没有return的话就是undefined)
	#01.无参数，无返回值
	function SimpleFunction(){
		echo 'Hello World!';
	}
	// 函数只有在被调用的时候才会写入到内存中
	SIMPLEFUNCTION();//在php中函数的名字大小写不敏感
	echo '<hr>';
	#02.有参数无返回值
	function buy($money = '￥30'){
		echo $money.'给了但是没返回值';
	}
	// PHP里如果定义了参数不传参的话后悔报错
	//如果不传参的话，可以给他一个默认值
	buy();
	buy('￥100');
	echo '<hr>';
	#03.多参有返回值
	function sumValue($num1,$num2){
		$sum =  $num1 + $num2;
		return $sum;
	}
	echo sumValue(5,6);
	echo '<hr>';
	#04.无参数 有返回值
	function buyDrink(){
		return '饭后的饮料';
	}
	echo buyDrink();
	echo '<hr>';
	#函数传引用
	$myNum = 10;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);//15
	echo $myNum;//&取地址符 拿到了Mynum的引用（地址或指针），改变了内存中的数值，所以是15
	

 ?>