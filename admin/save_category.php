<?php
include("../inc/conn.php");
include("../inc/func.php");
$category=$_POST["category"];
$act=$_GET["act"];
//添加操作
if($act=='add')
{
 $sql="insert into category(category) values('$category')";
 $query=mysql_query($sql);
 echo "<script>alert('添加成功！'); window.location.href='manage_category.php';</script>";
}
//修改操作
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update category set category='$category' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('修改成功！'); window.location.href='manage_category.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
mysql_query("delete from product where c_id='$id'");
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>