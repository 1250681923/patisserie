<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>每日美食</title> <script src="lb.js"></script>
</head>
<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<body>
    <!--start -->
    <header>
         <?php include("top.php");?>
    </header>
    <!-- 轮播?-->
   
	
  <div class="lb-box" id="lb-1">
    <!-- 轮播内容 -->
    <div class="lb-content">
      <div class="lb-item active">
        <a href="#">
          <img src="images/t1.png" alt="picture loss">
          <span>婚礼慕斯蛋糕-打造新婚浪漫氛围</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t2.png" alt="picture loss">
          <span>水果蛋糕卷-美眉每日毛巾卷</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t3.png" alt="picture loss">
          <span>甜果飘香-闺蜜趴</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t4.png" alt="picture loss">
          <span>宝宝最爱甜甜圈</span>
        </a>
      </div>   
    </div>
    <!-- 轮播标志 -->
    <ol class="lb-sign">
      <li class="active">1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
    </ol>
    <!-- 轮播控件 -->
    <div class="lb-ctrl left">＜</div>
    <div class="lb-ctrl right">＞</div>
  </div>
	
    <!-- 商品  start -->
    <div class="content">
	
		<div class="home-module home-menu">
            <a href="#1">
                <img src="images/menu-1.jpg" alt="" title="">
            </a>
            <a href="#2">
                <img src="images/menu-2.jpg" alt="" title="">
            </a>
            <a href="#3">
                <img src="images/menu-3.jpg" alt="" title="">
            </a>
            <a href="#4">
                <img src="images/menu-4.jpg" alt="" title="">
            </a>
            <a href="#5">
                <img src="images/menu-5.png" alt="" title="">
            </a>
        </div>
       <?php
		$q=mysql_query("select * from category");
		while($rst=mysql_fetch_array($q))
		{		  
				?>
				 
        <!-- 专区列表  start-->
			<div class="home-module home-colorful" id="1">
				<h4 class="home-module-title">
					<?php echo $rst["category"]?>
					<span>/</span>
					<span>专区</span>
				</h4>
				<div class="colorful-product-list">
					<div class="list-box">
						<ul>
						<?php 
						$c_id=$rst["c_id"];
						$sql_product="select * from product where c_id='$c_id' order by product_id desc limit 4";
						
						$num=mysql_num_rows(mysql_query($sql_product));
						if ($num==0)
						{
							echo "该栏目暂时没有内容，抱歉";
						}else{
							$result=mysql_query($sql_product);
							while($row=mysql_fetch_array($result))
							{
								
							?>
								<li>
									<a href="detail.php?id=<?php echo $row['product_id'];?>">
										<img src="<?php echo $row['pic'];?>" alt="">
									</a>
								   <a href="detail.php?id=<?php echo $row['product_id'];?>">
										<h6><?php echo $row['name'];?></h6>
									</a>
								   <a href="detail.php?id=<?php echo $row['product_id'];?>">
										<p><?php //echo $row['content'];?></p>
									</a>
									<div class="cart-info">
										<span class="spec">￥<?php echo $row['price'];?></span>
										<a href="cart.php?id=<?php echo $row['product_id'];?>" class="add-cart">加入购物车
									</div>
								</li>
							<?php 
							}
							
						}?>															
						</ul>
					</div>
				</div>
			</div>
       <?php
		}
			mysql_free_result($q);
			?>
    </div>
	
     <!-- 底部footer  start -->
     <?php include("copy.php");?>
    <!-- 底部footer  end -->
	<script>
    window.onload = function () {
      // 轮播选项
      const options = {
        id: 'lb-1',              // 轮播盒ID
        speed: 600,              // 轮播速度(ms)
        delay: 3000,             // 轮播延迟(ms)
        direction: 'left',       // 图片滑动方向
        moniterKeyEvent: true,   // 是否监听键盘事件
        moniterTouchEvent: true  // 是否监听屏幕滑动事件
      }
      const lb = new Lb(options);
      lb.start();
    }
  </script>
</body>

</html>