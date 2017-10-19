<?php
	require('config/config.php');
	require('config/db.php');
	#设置utf-8编码
	mysqli_query($conn,"set names utf8");
	#设置sql语句
	$query = "SELECT * FROM posts ORDER BY create_at DESC";//新添加的根据时间降序排序
	#执行sql语句
	$result = mysqli_query($conn,$query);
	#获取数据
	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);//获取所有的数据
	// var_dump($posts);
	#释放数据
	mysqli_free_result($result);
	#断开链接
	mysqli_close($conn);
?>
<?php include ('inc/header.php'); ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach ($posts as $posts): ?>
			<div class="well">
				<h3><?php echo $posts['title']; ?></h3>
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
				<a class="btn btn-info" href="post.php?id=<?php echo $posts['id']; ?>">博客详情</a>
			</div>
			
		<?php endforeach; ?>
	</div>
<?php include ('inc/footer.php'); ?>

