<?php 
	# array:数组 （有效的控制资源）--存储一堆数据的集合
	/*
		数组的分类：
		下标数组：下标以0开始
		关联数组：以第一个添加的名字开始，以-0结尾
	*/
	#下标数组
	$people = array("Kevin","Henry","Hemia");
	// echo $people[1];//Henry
	// echo $people[3];//数组越界
	
	// $ids = [23,45,62];
	// echo $ids[2];

	$cars = ['Honda','Toyota','BYD'];
	$cars[3] = "BMW";
	// echo $cars[3];
	// echo count($cars);//打印当前数组的个数

	#打印数组的方法
	// print_r($cars);

	#万能打印方法
	// var_dump($cars);

	#关联数组(类似于key：vlaue的形式)
		$people = array('Henry' => 35,'Bucky' =>25,'Emaily' =>20 );
		// echo $people['Emaily'];
		$ids =[22 => 'Henry',25 => 'Bucky'];
		// echo $ids[22];
		//添加关联数组
		$ids[35] = 'Emaily';

		// echo $ids[35];
		// print_r($ids);


		#观察
		$cars[] = 'Bence';
		// print_r($cars);

		$ids[] =  'Join';
		// print_r($ids);

		$people[] = 55;
		// print_r($people);
		// echo $people[0];

		#多维数组
		$cars = array(
			array('Honda',20,10),
			array('dz',20,20),
			array('Ford',15,10)
		);
		// $cars = [[],[],[]];
		echo $cars[2][1];
 ?>