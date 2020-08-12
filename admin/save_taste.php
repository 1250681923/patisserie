<?php
include("../inc/conn.php");
include("../inc/func.php");
$taste=$_POST["taste"];
$act=$_GET["act"];
//添加操作
if($act=='add')
{
 $sql="insert into taste(taste) values('$taste')";
 $query=mysql_query($sql);
 echo "<script>alert('添加成功！'); window.location.href='manage_taste.php';</script>";
}
//修改操作
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update taste set taste='$taste' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('修改成功！'); window.location.href='manage_taste.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from taste where c_id='$id'";
mysql_query($sql);
mysql_query("delete from product where c_id='$id'");
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>