<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>21cake</title>
</head>
<?php
session_start();
include("inc/conn.php");
include("inc/func.php");

$id=$_GET["id"];
$sql=mysql_query("select * from product where product_id='$id'");
$rs=mysql_fetch_assoc($sql);
$name=$rs["name"];
$price=$rs["price"];
$m_price=$rs["m_price"];
$content=$rs["content"];
$pic=$rs["pic"];
mysql_free_result($sql);
?>
<body>
    <!-- start -->
    <header>
         <?php include("top.php");?>
    </header>
    <div class="content">
        <div class="home-module home-colorful" id="1" style="margin-top:30px;">
            <h4 class="home-module-title">
                商品详情
            </h4>
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="images/menu-top-1.jpg" alt="">
                </a>
            </div>
            <div class="colorful-product-list">
                <div class="list-box"  style="height:230px;">
                    <ul>
                        <li style="height:200px;">
                           
                        </li>
                        <li style="height:230px;">
                            <a href="#">
                                <img src="<?php echo $pic?>" alt="">
                            </a>
                        </li>
                        <li style="height:200px;">
                            <a href="#">
                                <h6><?php echo $name?></h6>
                            </a>
                            <div class="cart-info">
                                <span class="spec">现在价格:￥<?php echo $price?>元</span>
                                
                            </div>
                            <div class="cart-info">
                                <a href="cart.php?id=<?php echo $id?>" class="add-cart">加入购物车</a>
                            </div>
                        </li> 
                    </ul>
                </div>
				<div class="list-box" >
                    <ul>
                        <li>
                           
                        </li>
                        <li style="width:600px;">
							<div class="cart-info">
                                <a href="#" class="add-cart" style="left:0;">详情介绍</a>
                            </div>
							<div class="cart-info" style="line-height:24px;">
							<br><?php echo $content?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
    </div>
    <!-- 底部footer  start -->
     <?php include("copy.php");?>
    <!-- 底部footer  end -->
</body>

</html>