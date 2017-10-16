<?php 
	#取消对应的session
	session_start();
	unset($_SESSION['name']);
	#毁掉所有的session
	session_destroy();

?>