<?php
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from book where book_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
//编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$remark=$_POST["remark"];
$sql="update book set remark='$remark' where book_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='manage_book.php';</script>";
}
?>