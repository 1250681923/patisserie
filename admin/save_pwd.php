<?php
session_start();
include("../inc/conn.php");
include("../inc/func.php");
$web_admin=$_POST["web_admin"];
$pwd=$_POST["pwd"];
$act=$_GET["act"];
//�༭����
if($act=="edit")
{
$admin_id=$_POST['id'];
$sql="update web_admin set web_admin='$web_admin',password='$pwd' where admin_id='$admin_id'";
mysql_query($sql);
echo "<script>alert('�޸ĳɹ���'); window.location.href='edit_pwd.php';</script>";
}


?>