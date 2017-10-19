<?php 
	require('config/config.php');
	require('config/db.php');
	#编辑
	if(isset($_POST['submit'])){
		#获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		#获取到update_id
		$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
		#判断是否为空
		if(!empty($title) && !empty($author) && !empty($body)){
			$query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id={$update_id} ";
			mysqli_query($conn,"set names utf8");
			$result = mysqli_query($conn,$query);
			if($result){
				header('location:index.php');
			}else{
				echo '数据编辑失败'.mysqli_error($conn);
			}
		}
	}

	mysqli_query($conn,"set names utf8");
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query = "SELECT * FROM posts WHERE id={$id}";
	#执行sql语句
	$result = mysqli_query($conn,$query);
	#获取数据
	$posts = mysqli_fetch_assoc($result);//获取关联数组的数据(单个数组)mysqli_fetch_num($result);
	#var_dump($post);

	#释放数据
	mysqli_free_result($result);
	#断开链接
	mysqli_close($conn);
?>
<?php include ('inc/header.php'); ?>
	<div class="container">
		<h1 class="text-muted">编辑博客</h1>
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<div class="form-gpoup">
				<label for="">标题</label>
				<br>
				<input type="text" name="title" class="form-control" value="<?php echo $posts['title']; ?>">
				<br>
			</div>
			<div class="form-gpoup">
				<label for="">作者</label>
				<br>
				<input type="text" name="author" class="form-control" value="<?php echo $posts['author']; ?>">
				<br>
			</div>
			<div class="form-gpoup">
				<label for="">内容</label>
				<br>
				<input type="text" name="body" class="form-control" value="<?php echo $posts['body']; ?>">
				<br>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $posts['id']; ?>">
			<input type="submit" value="确认" name="submit" class="btn btn-primary">
		</form>
	</div>
<?php include ('inc/footer.php'); ?>
