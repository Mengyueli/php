<?php require "./inc/header.php" ?>
<?php require "./inc/header.php" ?>
	<h1>Home</h1>

<?php include "./inc/footer.php" ?>	
<!-- require一旦报错之后的代码不会继续
	include 报错之后代码会继续 -->
<!-- include & require的区别
	如果有报错信息，include会显示报错信息，但不会影响后面的代码执行
	如果有报错信息，require会显示报错信息，但会影响后面的代码执行
	include_once & reqiuire_once的作用
	重复引入，只识别一次
	 -->