<?php 
	#三目
	
	$loggedIn = true;
	$names = ['henry','bucky','emily'];
	/*
	if($loggedIn){
		echo 'you are login';
	}else{
		echo 'you are NOt login';
	}
	#三目运算符
	echo $loggedIn?'you are login':'NOT';

	#简写得到的true或者false
	$isRegistered = ($loggedIn == true)?true:false;
	echo '<hr>';
	echo $isRegistered;//1

	#三目嵌套
	$age = 18;
	$score = 80;
	echo 'Your score is'.($score > 70 ?($age < 20 ? "优秀":"一般"):($age < 20 ? "一般":"差等"));
	*/

?>
<!-- html + php 嵌套语法糖 -->
<div>
	<?php if($loggedIn){?>
	<p>Welcome to Beijing!</p>
	<?php }else{ ?>
	<p>Welcome to Zhengzhou!</p>
	<?php } ?>
</div>
<!-- 优化 -->
<div>
	<?php if($loggedIn): ?>
	<p>Welcome to Beijing!</p>
	<?php else: ?>
	<p>Welcome to Zhengzhou!</p>
	<?php endif; ?>
</div>
<!-- 遍历数组  Foreach-->
<div>
	<?php foreach($names as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach ?>
</div>
<!--遍历数组使用for循环  -->
<div>
	<?php for($i=0;$i<count($names);$i++): ?>
	<?php echo $names[$i];  ?>
<?php endfor ?>
</div>