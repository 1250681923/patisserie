<?php
session_start();
require("../inc.php");
if($_SESSION[admin]=="")
{	
	echo ("<script>location.href='login.php';</script>");
	exit;
}
if($ac=="repsw")
{	
	$psw=md5($psw);
	$newpsw=md5($psw2);
	$uid=$_SESSION[uid];
	$query =  mysql_query("SELECT * FROM `adminset` WHERE `id`=1");
	$row = mysql_fetch_array($query);
	if($row[password]!=$psw)
	{
		echo "<script>alert('ԭʼ�������,�������!');window.location='repassword.php';</script>";
		}
		else
	{
		$sql = "UPDATE `adminset` SET password='$newpsw',name='$name' WHERE id=1"; 
		mysql_query($sql); 
		$_SESSION[admin]="";
		echo "<script>alert('�޸ĳɹ�,�������!');top.window.location='login.php';</script>";
	}
	
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">
<div class="bigTitle2">�޸������ʺ�</div>
<form action="repassword.php?ac=repsw" method="post" onSubmit="return check_uploadObject(this);">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">ԭ����</th>
        <td><input type="password" name="psw"/></td>
      </tr>
      <tr>
        <th width="150">�ʺ�</th>
        <td><input type="name" name="name"/></td>
      </tr>
      <tr>
        <th>������</th>
        <td><input type="password" name="psw1"/></td>
      </tr>
      <tr>
        <th>�ظ�������</th>
        <td><input type="password" name="psw2"/></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>
  </div>
<script type="text/javascript">
function check_uploadObject(form){
	if(form.psw.value==''){
		alert('������ԭ����');
		return false;
	}
	if(form.name.value==''){
		alert('�������ʺ�');
		return false;
	}
	if(form.psw1.value==''){
		alert('������������.');
		return false;
	}
	if(form.psw2.value==''){
		alert('�������ظ�������.');
		return false;
	}
	if(form.psw2.value!=form.psw1.value){
		alert('�������벻һ��.');
		return false;
	}
	return true;
}
</script>
</body>
</html>