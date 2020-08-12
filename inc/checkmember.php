<?php
session_start();
if(empty($_SESSION["userid"]))
{
echo "<script>alert('ÇëÏÈµÇÂ¼£¡');window.top.location.href='login.php'</script>";
}
?> 
