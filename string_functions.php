<?php 

	# string function: 处理字符串的函数
	
	# 返回字符串的一部分 substr(substring)
	$output = 'helloWorld';
	// $output = substr($output, 1);
	// $output = substr($output,1,5);
	// echo $output;
	
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos
	echo strpos($output,'lo');
	echo'<hr>';
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	echo strrpos($output, 'l');
	echo'<hr>';
	# 去除首尾空格trim
	$output = '  helloWorld  ';
	echo strlen($output);
	$newString = trim($output);	
	echo strlen($newString);//10
	echo'<hr>';
	# 将字符串转为大写 strtoupper
	$str = 'helloworld';
	echo strtoupper($str);
	
	# 将字符串转为小写 strtolower
	$str = 'HELLOWORLD';
	echo strtolower($str);
	
	# 将每个单词首字母大写 ucwords
	$str = 'hello world';
	echo ucwords($str);
	echo '<hr>';
	# 替换所有匹配的内容  str_replace
	$text = 'hello world';
	$output = str_replace("world", "everybody", $text);
	echo $output;
	echo '<br>';
	# 判断是否是字符串  is_string
	$value = '22';
	echo is_string($value);//1只有在是字符串的时候打印出1
	# 过滤掉数组中非字符串的值
	$values = array(true,false,'Hello',32,'32',23,'23',12.3,'234','','  ',0,'0');
	foreach ($values as $value) {
		# 判断value是否是字符串
		if(is_string($value)){
			echo $value.'is a string !<br>';
		}
	}
	# 压缩字符串  gzcompress
	$string = '那块地方';
	$compressed = gzcompress($string);
	echo $compressed;
	# 解压字符串
	echo gzuncompress($compressed);


 ?>