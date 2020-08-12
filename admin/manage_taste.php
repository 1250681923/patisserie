<?php
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">口味列表</div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="102" align="center">ID</td>
        <td align="left">口味</td>
        <td width="315" align="center">操作</td>
      </tr>
 <?php
 $sql="select * from taste order by c_id desc";
 $query=mysql_query($sql);
 while($rs=mysql_fetch_array($query))
 {
?>
       
      <tr>
        <td align="center"><?php echo $rs["c_id"];?></td>
<td align="left"><?php echo $rs["taste"]?></td>
        <td align="center"><a href="save_taste.php?act=del&id=<?php echo $rs["c_id"]?>" onClick="{if(confirm('确定删除吗?')){return true;}return false;}"><font color="#000000">删除</font></a> <a href="edit_taste.php?act=edit&id=<?php echo $rs["c_id"]?>">修改</a></td>
      </tr>
      <?php
		 }
?>
		
      </table>

</div>

</body>
</html>