<?php
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from book where book_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
//�༭����
if($act=="edit")
{
$id=$_POST["id"];
$remark=$_POST["remark"];
$sql="update book set remark='$remark' where book_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='manage_book.php';</script>";
}
?>