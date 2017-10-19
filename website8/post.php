<?php 
	#请求数据库
	require ('config/config.php');
	require ('config/db.php');
	#实现删除博客
	//注意：点击删除之后form表单会提交到action中的地址，所以就获取不到地址栏中的id了
	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		var_dump($delete_id);
		#SQL语句
		$query = "DELETE FROM posts WHERE id='$delete_id'";
		if(mysqli_query($conn,$query)){
			header('location:index.php');
		}else{
			echo 'error'.mysqli_error($conn);
		}
	}


	#查询单条信息
	#设置utf-8编码
	mysqli_query($conn,"set names utf8");
	#3.
	// $id = $_GET['id'];(一定是在另外一个页面传递过来的时候才能获取，不指明数据库没法获取数据)
	$id = mysqli_real_escape_string($conn,$_GET['id']);//会直接从数据库去的数据
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
		<h1>博客详情</h1>
			<div class="well">
				<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">返回主页</a>
				<h3><?php echo $posts['title']; ?></h3>
				<p>
					<strong>ID:</strong>
					<?php echo $posts['id']; ?>
				</p>
				<p>
					<strong>作者:</strong>
					<?php echo $posts['author']; ?>
				</p>
				<p>
					<strong>时间:</strong>
					<?php echo $posts['create_at']; ?>
				</p>
				<p>
					<?php echo $posts['body'] ;?>
				</p>
				<br>
				<!-- 删除 -->
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class='pull-right'> 
					<input type="hidden" name="delete_id" value="<?php echo $posts['id'];?>">
					<input type="submit" name="delete" value="删除" class="btn btn-danger">
				</form>
				<!-- 编辑 -->
				<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $posts['id']; ?>" class='btn btn-success'>编辑</a>
			</div>
			
		
	</div>
<?php include ('inc/footer.php'); ?>