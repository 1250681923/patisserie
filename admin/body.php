<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>欢迎登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body id="bodyBg">
<div class="welcome">
<table width='100%' class='table' border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td style=" padding:50px">您好：<?php echo $_SESSION["adminname"];?></a> 欢迎您进入网站管理页面</td>
  </tr>
</table>

</div>
</body>
</html>