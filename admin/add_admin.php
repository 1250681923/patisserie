<?php
session_start();
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>
<SCRIPT language=javascript>
function CheckPost()
{
	if (form10.zh.value.length==0)
	{
		alert("����д�û��˺�");
		form10.zh.focus();
		return false;
	}	
	if (form10.mima.value.length==0)
	{
		alert("����д����");
		form10.mima.focus();
		return false;
	}	
	if (form10.name.value.length==0)
	{
		alert("����д����");
		form10.name.focus();
		return false;
	}
    if (form10.tel.value.length==0)
	{
		alert("����д�绰");
		form10.tel.focus();
		return false;
	}
     form10.submit();
}

</SCRIPT>
<body style="background:#fff">
<div class="adminBody">
<div class="bigTitle2">����û�</div>
<form action="save_admin.php?act=add" method="post" name="form10">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">�˺�</th>
        <td><span class="table">
          <input name="zh" type="text" id="zh" />
          <span class="STYLE1">*</span></span></td>
      </tr>
     
      <tr>
        <th><span class="table">���룺</span></th>
        <td><span class="table">
          <input name="mima" type="password" id="mima" />
        <span class="STYLE1">*</span></span></td>
      </tr>
      <tr>
        <th><span class="table">������</span></th>
        <td><span class="table">
          <input name="name" type="text" id="name" />
        <span class="STYLE1">*</span></span></td>
      </tr>
      <tr>
        <th>�绰:</th>
        <td><span class="table">
          <input name="tel" type="text" id="tel" />
          <span class="STYLE1">*</span></span></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><span class="bs">
          <input type="button" name="Submit" value="�ύ" onclick="CheckPost();"; />
        </span></td>
      </tr>
    </table>
  </form>




  </div>

</body>
</html>