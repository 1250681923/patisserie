<?php
include("../inc/conn.php");
include("../inc/func.php");
$category=$_POST["category"];
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into category(category) values('$category')";
 $query=mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='manage_category.php';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update category set category='$category' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='manage_category.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
mysql_query("delete from product where c_id='$id'");
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}

?>