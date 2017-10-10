<?php
	header('content-type:text/html;charset=utf-8'); 
	//分支 
	#if & switch
	
	#关系运算符 
	/* > < == >= <= === !=== */

	// $num = 2;
	// if($num <= 4)echo "num的值一定是小于或者等于4";echo "hello";

	#if else
	// if($num >=4){
	// 	echo "true";
	// }else{
	// 	echo "false";
	// }

	#nesting if
	/*$num = 4;
	if($num >= 4){
		if($num <=10){
			echo "num一定是在4到10之间";
		}else{
			echo "num 大于10";
		}
	}else{
		echo "num一定<4";
	}*/

	#逻辑运算符
	/*
		逻辑与 && AND 
		逻辑或 || OR
		逻辑非 ！
		逻辑异或 XOR
	*/
	/*$num = 3;
	if($num >10 XOR $num <5){
		echo "num 大于3 并且 小于10";
	}*/
	/*
		AND: 一假即假
		OR: 一真既真
		XOR :只有一边为真结果才是真
	*/
	//与和或都有短路现象

	#switch(条件>=4的时候)
	//只有在js里 case里判断的是===
	$favcolor = 1;
	switch ($favcolor) {
		case '1':
			echo 'angry';
			break;
		case 'yellow':
			echo 'happy';
			break;
		case 'blue':
			echo 'silence';
			break;
		case 'green':
			echo 'forgive';
			break;
		default:
			echo 'GUN';
			break;
	}
	
 ?>