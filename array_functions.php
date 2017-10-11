<?php 
	$array = array('Henry','Bucky','Emily');
	# 计算数组个数 count
	// echo count($array);//3
	# 将数组开头的单元移出数组 array_shift //返回的是删除掉的
	$newArray = array_shift($array);
	// print_r($newArray);
	// print_r($array);

	# 在数组开头插入一个或多个单元 array_unshift
	$insertValue = array_unshift($array,'Hemia');
	// print_r($array);
	// echo $insertValue;//3

	# 将一个或多个单元压入数组的末尾（入栈）array_push
	array_push($array,'Elyse');
	print_r($array);

	# 弹出数组最后一个单元（出栈） array_pop
	array_pop($array);
	print_r($array);
	echo '<hr>';

	# 数组排序 sort
	$values = array(11,12,45,356,23,'ab');
	sort($values);//按照ASCII码值排序
	print_r($values);
	echo '<hr>';

	# 数组转字符串 implode
	$arrayToString = array('a','b','c');
	$value = implode(',', $arrayToString);
	echo $value;
	echo '<br>';
	# 字符串转数组 explode
	$array = explode(',', $value);
	// echo $array[0];
	var_dump($array);

 ?>