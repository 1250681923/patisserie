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

<div class="bigTitle2">用户列表</div>
    <table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="manage_admin.php">
    <tr>
      <td width="77" height="33" align="center">姓名:</td>
      <td width="243" align="center"><input type="text" name="key" /></td>
      <td width="90" align="center"><input type="submit" name="Submit" value="查询"></td>
    </tr>
  </form>
</table>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td align="center">账号</td>
        <td width="193" align="center">密码</td>
        <td width="235" align="center">姓名</td>
        <td width="266" align="center">电话</td>
        <td width="206" align="center">操作</td>
      </tr>
          <?php
$key=$_GET["key"];
$sql="select * from sub_admin where 1=1";
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}

$num=mysql_num_rows(mysql_query($sql));
$pagesize=8;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec=$sql." order by admin_id desc limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if($num==0)
{
 echo "<tr><td colspan=7>暂时没有信息</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
       
      <tr>
        <td align="center"><?php echo $rs["zh"]?></td>
        <td align="center"><?php echo $rs["mima"]?></td>
        <td align="center"><?php echo $rs["name"]?></td>
        <td align="center"><?php echo $rs["tel"]?></td>
        <td align="center"><a href="save_admin.php?act=del&id=<?php echo $rs["admin_id"]?>" class="text12">删除</a> <a href="edit_admin.php?id=<?php echo $rs["admin_id"]?>">修改</a></td>
      </tr>
     <?php
  }
}
?>
		 <tr>
         <td colspan="5"><div align="center" class="text1">
共有<?php echo $num?>条记录　分<?php echo ceil($num/$pagesize)?>页显示　当前是第<?php echo $page+1?>页
<a href="?page=0" class="text1">首页</a>
<?php
if ($page==0) echo "<span class='text1'>上一页</span>";
else echo "<a href='?page=$prepage' class='text1'>上一页</a>";
?>
<?php
if($page==$pagecount) echo "<span class='text1'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text1'>下一页</a>"; 
?>

<?php
if($page==$pagecount) echo "<span class='text1'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text1'>尾页</a>";
?>

</div></td>
       </tr>
      </table>

    <table width="51%" border="0" align="center">
      <tr>
        <td height="32" align="center"><input type="submit" name="Submit2" value="打     印" onclick="javascript:window.print()" /></td>
      </tr>
    </table>
</div>

</body>
</html>