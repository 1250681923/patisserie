<?php
session_start();
require_once('inc/conn.php'); 
require_once('inc/func.php');
require('inc/inc_cart.php');
$name=$_POST["name"];
$address=$_POST["address"];
$zip=$_POST["zip"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$billing_address=$_POST["address"];
$content=$_POST["content"];
$post_way=$_POST["post_way"];
//
$userid=$_SESSION["userid"];
$sql="select * from hy where userid='$userid'";
$query=mysql_query($sql);
$rs=mysql_fetch_assoc($query);
$member_id=$rs["hy_id"];
$je=$rs["je"];
$zj=$_POST["total"];

mysql_free_result($query);
//
//
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$order_number=get_dingdan();
$act=$_GET["act"];
//会员注册
if($act=='add')
{


//拼接订单内容
$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$pricearry=$_SESSION["price_count"];
		$partarry=$_SESSION["part_count"];
		$showarry=$_SESSION["show_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++)
		{
		  if($idarry[$i]!=0)
		  {
		    $cx=mysql_query("select * from product where product_id='".$idarry[$i]."'");
			$rs=mysql_fetch_assoc($cx);
			//向shop_orderinfo表中插入数据
			$sql="insert into shop_order(name,address,telephone,email,content,ordertime,hy_id,order_number,post_way,product_id,order_num,order_price,pro_name) values('$name','$address','$telephone','$email','$content','$time','$member_id','$order_number','$post_way','".$rs["product_id"]."','".$countarry[$i]."','".$rs["price"]."','".$rs["name"]."')";
$q=mysql_query($sql);

			//
		  }
		}
		
	remove_arry();
	echo "<script>alert('订单已经提交,等待处理！'); window.location.href='index.php';</script>";
//
}
?>