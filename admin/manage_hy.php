<?php
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">会员列表</div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="182" align="center"><strong>账号</strong></td>
        <td width="139" align="center">密码</td>
        <td width="243" align="center">姓名</td>
        <td width="89" align="center">性别</td>
        <td width="158" align="center">电子邮件</td>
        <td width="201" align="center">电话</td>
       
        <td width="218" align="center">操作</td>
      </tr>
          <?php
$key=$_GET["key"];
$sql="select * from hy where 1=1";
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
$exec=$sql." order by hy_id desc limit ".($page*$pagesize).",$pagesize"; 
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
        <td align="center"><?php echo $rs["userid"]?></td>
        <td align="center"><?php echo $rs["password"]?></td>
        <td align="center"><?php echo $rs["name"]?></td>
        <td align="center"><?php echo $rs["sex"]?></td>
        <td align="center"><?php echo $rs["email"]?></td>
        <td align="center"><?php echo $rs["tel"]?></td>
        <td align="center"><a href="save_hy.php?act=del&id=<?php echo $rs["hy_id"]?>" class="text12">删除</a></td>
      </tr>
     <?php
  }
}
?>
		 <tr>
         <td colspan="8"><div align="center" class="text1">
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

</div>

</body>
</html>