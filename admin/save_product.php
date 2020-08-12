<?php
include("../inc/conn.php");
include("../inc/func.php");
$name=$_POST["name"];
$price=$_POST["price"];
$content=$_POST["content"];
$pic=$_POST["pic"];
$category=$_POST["category"];
$taste=$_POST["taste"];
$act=$_GET["act"];

//添加操作 
if($act=="add")
{
$sql="insert into product(name,price,content,pic,c_id,t_id) values('$name','$price','$content','$pic','$category','$taste')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_product.php';</script>";
}
//大类编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$sql="update product set name='$name',c_id='$category',t_id='$taste',pic='$pic',price='$price',content='$content' where product_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='manage_product.php';</script>";
}

//
if($act=="tj")
{
  $id=$_GET["id"];
  $value=$_GET["value"];
  $sql="update product set is_tj='$value' where product_id='$id'";
  mysql_query($sql);
  echo "<script> window.location.href='manage_product.php';</script>";
}
//

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from product where product_id='$id'";
mysql_query($sql);
mysql_query("delete from shop_order where product_id='$id'");
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>