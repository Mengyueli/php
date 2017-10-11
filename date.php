<?php 
	// echo date();#至少哟啊给一个参数
	echo date('d');#d:day 
	echo date('m');//月
	echo date('y');//17 year
	echo date('Y');//2017 year
	echo '<br>';
	echo date('l');#day of week 周几
	echo date('Y-m-d');//2017-10-11
	echo date('d/m/y');//11/10/17
	echo '<br>';

	#时分秒
	echo date('h');#hour
	echo '<br>';
	echo date('i');#minutes
	echo '<br>';
	echo date('s');#seconds
	echo '<br>';
	echo date('a');#AM or PM
	echo '<br>';

	#设置时区 date_default_timezone_set ?????
	date_default_timezone_set("Asia/Shanghai");
	echo '<hr>';
	echo date('h:i:sa');

	#make time
	echo '<hr>';
	$timeStep = mktime(07,00,12,1,24,1988);//时 分 秒 月 日 年
	echo $timeStep;

	#完整时间
	echo '<hr>';
	echo date('m/d/Y h:i:sa',$timeStep);

	#字符串转时间
	echo '<hr>';
	$timeStep2 = strtotime('7:00pm March 22 2017');
	// echo $timeStep2;
	echo '<hr>';
	$timeStep3 = strtotime("tomorrow");
	echo date('m/d/Y h:i:sa',$timeStep3);//


	$timeStep4 = strtotime('next sunday');
	echo '<hr>';
	echo date('m/d/Y h:i:sa',$timeStep4);

	$timeStep5 = strtotime('+2 Days');
	echo '<hr>';
	echo date('m/d/Y h:i:sa',$timeStep5);
 ?>