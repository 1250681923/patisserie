<?php
include("../inc/conn.php");
include("../inc/func.php");
$taste=$_POST["taste"];
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into taste(taste) values('$taste')";
 $query=mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='manage_taste.php';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update taste set taste='$taste' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='manage_taste.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from taste where c_id='$id'";
mysql_query($sql);
mysql_query("delete from product where c_id='$id'");
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}

?>