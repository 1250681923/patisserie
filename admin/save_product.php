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

//��Ӳ��� 
if($act=="add")
{
$sql="insert into product(name,price,content,pic,c_id,t_id) values('$name','$price','$content','$pic','$category','$taste')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_product.php';</script>";
}
//����༭����
if($act=="edit")
{
$id=$_POST["id"];
$sql="update product set name='$name',c_id='$category',t_id='$taste',pic='$pic',price='$price',content='$content' where product_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='manage_product.php';</script>";
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

//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from product where product_id='$id'";
mysql_query($sql);
mysql_query("delete from shop_order where product_id='$id'");
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>