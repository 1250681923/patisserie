<?php
session_start();
if(empty($_SESSION["userid"]))
{
echo "<script>alert('���ȵ�¼��');window.top.location.href='login.php'</script>";
}
?> 
