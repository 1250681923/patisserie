<?php
session_start();
if(empty($_SESSION["adminname"]))
{
echo "<script>alert('���ȵ�¼��');window.top.location.href='admin_login.php'</script>";
}
?> 
