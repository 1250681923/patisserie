<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
$id=$_GET["id"];
$product_id=$_GET["product_id"];
//
$q=mysql_query("select * from shop_order where order_id='$id'");
$rs=mysql_fetch_assoc($q);
$num=$rs["order_num"];
//
$sql="update shop_order set order_state='已确认' where order_id='$id'";
mysql_query($sql);
//
echo "<script>alert('您已经成功确认该订单！'); window.top.location.href='myorder.php';</script>";

?>
