<?php
session_start(); 

if(!isset($_SESSION['adminname'])||empty($_SESSION['adminname']))
{	
	echo ("<script>location.href='login.php';</script>");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>系统后台</title>
</head>
<frameset rows='80 ,*' cols='*' frameborder='no' border='0' framespacing='0'>
  <frame src='head.php' name='topFrame' frameborder='no' scrolling='No' noresize='noresize' id='topFrame' />
  <frameset name='myFrame' cols='200,*' frameborder='no' border='0' framespacing='0'>
    <frame src='left.php' name='leftFrame' frameborder='no' scrolling='No' noresize='noresize' id='leftFrame' />
    <frame src='body.php' name='manFrame' frameborder='no' id='manFrame' />
</frameset>
</frameset>
<noframes></noframes>
<body>
</body>
</html>