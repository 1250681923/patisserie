<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ÿ����ʳ</title> <script src="lb.js"></script>
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
    <!-- �ֲ�?-->
   
	
  <div class="lb-box" id="lb-1">
    <!-- �ֲ����� -->
    <div class="lb-content">
      <div class="lb-item active">
        <a href="#">
          <img src="images/t1.png" alt="picture loss">
          <span>����Ľ˹����-�����»�������Χ</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t2.png" alt="picture loss">
          <span>ˮ�������-��üÿ��ë���</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t3.png" alt="picture loss">
          <span>���Ʈ��-����ſ</span>
        </a>
      </div>
      <div class="lb-item">
        <a href="#">
          <img src="images/t4.png" alt="picture loss">
          <span>���������Ȧ</span>
        </a>
      </div>   
    </div>
    <!-- �ֲ���־ -->
    <ol class="lb-sign">
      <li class="active">1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
    </ol>
    <!-- �ֲ��ؼ� -->
    <div class="lb-ctrl left">��</div>
    <div class="lb-ctrl right">��</div>
  </div>
	
    <!-- ��Ʒ  start -->
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
				 
        <!-- ר���б�  start-->
			<div class="home-module home-colorful" id="1">
				<h4 class="home-module-title">
					<?php echo $rst["category"]?>
					<span>/</span>
					<span>ר��</span>
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
							echo "����Ŀ��ʱû�����ݣ���Ǹ";
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
										<span class="spec">��<?php echo $row['price'];?></span>
										<a href="cart.php?id=<?php echo $row['product_id'];?>" class="add-cart">���빺�ﳵ
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
	
     <!-- �ײ�footer  start -->
     <?php include("copy.php");?>
    <!-- �ײ�footer  end -->
	<script>
    window.onload = function () {
      // �ֲ�ѡ��
      const options = {
        id: 'lb-1',              // �ֲ���ID
        speed: 600,              // �ֲ��ٶ�(ms)
        delay: 3000,             // �ֲ��ӳ�(ms)
        direction: 'left',       // ͼƬ��������
        moniterKeyEvent: true,   // �Ƿ���������¼�
        moniterTouchEvent: true  // �Ƿ������Ļ�����¼�
      }
      const lb = new Lb(options);
      lb.start();
    }
  </script>
</body>

</html>