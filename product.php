<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>����</title>
</head>
<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<body>

    <!-- ͷ������������  start -->
    <header>
         <?php include("top.php");?>
    </header>

    <div class="class-content-box" style="min-height: 216px;">
        <div class="pro-list-content">
            <div class="pro-list-filter">
                <dl class="cat-list">
                    <dt>���ࣺ</dt>
                    <dd class="active"><a href="product.php?c_id=0" >ȫ������</a></dd>
					<?php
					$q=mysql_query("select * from category");
					while($rst=mysql_fetch_array($q))
					{		  
					?>
						<dd class="active"><a href="product.php?c_id=<?php echo $rst["c_id"]?>" >
						   <?php echo $rst["category"]?>
						 </a></dd>
					  
					<?php
					}
					mysql_free_result($q);
					?>
                </dl>
                <dl class="tag-list">
                    <dt>��ζ��</dt>
                    <dd class="active"><a href="product.php?t_id=0" >ȫ����ζ</a></dd>
					<?php
					$q=mysql_query("select * from taste");
					while($rst=mysql_fetch_array($q))
					{		  
					?>
					 <dd class="active"><a href="product.php?t_id=<?php echo $rst["c_id"]?>" >
						   <?php echo $rst["taste"]?>
						 </a></dd>
					  
					<?php
					}
					mysql_free_result($q);
					?>
                </dl>
            </div>
            <div class="pro-list-box">
                <ul class="pro-list-pr">
                    <?php 
						$w ="1=1";
						if(isset($_GET['c_id'])&&!empty($_GET['c_id'])){
							$w.=" and  c_id ='".$_GET['c_id']."'";
						}
						if(isset($_GET['t_id'])&&!empty($_GET['t_id'])){
							$w.=" and  t_id ='".$_GET['t_id']."'";
						}
						$sql="select * from product where ".$w." order by product_id desc ";
						
						$num=mysql_num_rows(mysql_query($sql));
						if ($num==0)
						{
							echo "����Ŀ��ʱû�����ݣ���Ǹ";
						}else{
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
								?>
								<li>
								<div class="pro-list-su">
									<a href="detail.php?id=<?php echo $row['product_id'];?>" class="goods-list">
										<img src="<?php echo $row['pic'];?>" alt="" class="lazy" style="display: inline;">
										<h3><?php echo $row['name'];?></h3>
										<span>��<?php echo $row['price'];?></span>
									</a>
									
									<a href="cart.php?id=<?php echo $row['product_id'];?>" class="pro-list-addcart">
										<i></i>
										���빺�ﳵ
									</a>
									<div class="label">
										<img src="images/label-1.png" alt="">
									</div>
								</div></li>
								<?php 
							}
							
						}?>	
                </ul>
            </div>
        </div>
    </div>

    <!-- �ײ�footer  start -->
    <?php include("copy.php");?>
    <!-- �ײ�footer  end -->

</body>

</html>