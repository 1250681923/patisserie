<?php
session_start();
session_destroy();
echo "<script>alert('恭喜，已安全退出');window.location.href='index.php';</script>";
?>
