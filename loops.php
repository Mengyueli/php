<?php 
	#loop：循环（高效）--让项目制作的更高效
	#根据某个条件，重复执行某段代码
	/*
		-For
		-While
		-Do.. .While
		-Foreach


	*/
	
	#For 循环
	#@params -init（初始化）,condition（条件）,inc(自增)
	for ($i=0; $i < 10 ; $i++) { 
		// echo ($i+1).'<br>';
	}
	// echo $i;//10
	// 内存:5个区 栈 堆 代码区 静态区 常量

	#while循环
	#@params -condition
	$i = 0;
	while ($i<10) {
		echo $i.'<br>';
		$i++;
	}
	// echo $i;
	/* 
		for循环在知道循环次数的时候使用，while循环在知不知道循环次数的时候都可以使用
	*/
	#do...while
	#@params -condition
	$i=0;
	do{
		echo $i.'<br>';
		$i++;
	}while($i<10);	

	#foreach循环 下标数组
	// $people = array('Henry','Bucky','Emily');
	// foreach($people as $person){
	// 	echo $person.'<br>';
	// 	// echo '<br>';
	// }

	$people = array (
		'Henry' => 'Henry@email.com',
		'Bucky' => 'Bucky@email.com',
		'Emily' => 'Emily@email.com'
	);
	foreach($people as $key => $value){
		echo $key.':'.$value;
		echo '<br>';
	}

	/*
		打印1~100之间7的倍数；
		打印1~100之间个位为7的数；
		打印1~100之间十位为7的数
		打印1~100之间个位不为7以及十位不为7，以及不是7的倍数；

		打印九九乘法表
	*/


 ?>