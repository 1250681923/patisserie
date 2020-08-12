<div class="inner">
	<div class="logo">
		<img src="images/logo.png" width="120px" height="44px" alt="21cake 蛋糕">
	</div>
	<ul class="nav">
		<li><a href="index.php">首页</a></li>
		<?php
		$q=mysql_query("select * from category");
		while($rst=mysql_fetch_array($q))
		{		  
		?>
		   <li><a href="product.php?c_id=<?php echo $rst["c_id"]?>" >
			   <?php echo $rst["category"]?>
			 </a></li>
		<?php
		}
		mysql_free_result($q);
		?>
	</ul>
	<ul class="join">
	<?php
	$login_user = '游客';
	if(isset($_SESSION["hy_id"])&&!empty($_SESSION["hy_id"])){
		$hy_id=$_SESSION["hy_id"];
		$q=mysql_query("select * from hy where hy_id='$hy_id'");
		$rst=mysql_fetch_assoc($q);
		$login_user = '<a href="edit_hy.php">['.$rst["name"].']个人中心</a>&nbsp;|&nbsp;<a href="exit.php">安全退出</a>';
	}
		
	?>
		<li><?php echo $login_user;?>&nbsp;|&nbsp;<a href="login.php">登录</a>/<a href="reg.php">注册</a></li>
		<li class="cart"><i></i></li>
	</ul>
</div>