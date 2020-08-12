<?php
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from shop_order where order_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
//订单处理
if($act=="cl")
{
$id=$_POST["id"];
$order_state=$_POST["order_state"];
$url=$_SERVER['HTTP_REFERER'];
$exec="update shop_order set order_state='$order_state' where order_id='$id'";
$result=mysql_query($exec);
//处理库存
$q=mysql_query("select * from shop_order where order_id='$id'");
$r=mysql_fetch_assoc($q);
$order_num=$r["order_num"];
//
echo "<script>";
echo "location.href='manage_order.php';";
echo "alert('修改成功！');";
echo "</script>";
}
//订单处理
if($act=="xs")
{
$id=$_POST["id"];
$xs_cl=$_POST["xs_cl"];
$url=$_SERVER['HTTP_REFERER'];
$exec="update shop_order set xs_cl='$xs_cl' where order_id='$id'";
$result=mysql_query($exec);
echo "<script>";
echo "location.href='".$url."';";
echo "alert('处理成功！');";
echo "</script>";
}
//订单处理
if($act=="dp")
{
$id=$_POST["id"];
$dp=$_POST["dp"];
$url=$_SERVER['HTTP_REFERER'];
$exec="update shop_order set dp='$dp' where order_id='$id'";
$result=mysql_query($exec);
echo "<script>alert('成功！'); window.location.href='".$url."';</script>";
}
?>