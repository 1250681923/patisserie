<?php
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">�û��б�</div>
    <table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="manage_admin.php">
    <tr>
      <td width="77" height="33" align="center">����:</td>
      <td width="243" align="center"><input type="text" name="key" /></td>
      <td width="90" align="center"><input type="submit" name="Submit" value="��ѯ"></td>
    </tr>
  </form>
</table>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td align="center">�˺�</td>
        <td width="193" align="center">����</td>
        <td width="235" align="center">����</td>
        <td width="266" align="center">�绰</td>
        <td width="206" align="center">����</td>
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
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
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
        <td align="center"><a href="save_admin.php?act=del&id=<?php echo $rs["admin_id"]?>" class="text12">ɾ��</a> <a href="edit_admin.php?id=<?php echo $rs["admin_id"]?>">�޸�</a></td>
      </tr>
     <?php
  }
}
?>
		 <tr>
         <td colspan="5"><div align="center" class="text1">
����<?php echo $num?>����¼����<?php echo ceil($num/$pagesize)?>ҳ��ʾ����ǰ�ǵ�<?php echo $page+1?>ҳ
<a href="?page=0" class="text1">��ҳ</a>
<?php
if ($page==0) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$prepage' class='text1'>��һҳ</a>";
?>
<?php
if($page==$pagecount) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$nextpage' class='text1'>��һҳ</a>"; 
?>

<?php
if($page==$pagecount) echo "<span class='text1'>βҳ</span>";
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";
?>

</div></td>
       </tr>
      </table>

    <table width="51%" border="0" align="center">
      <tr>
        <td height="32" align="center"><input type="submit" name="Submit2" value="��     ӡ" onclick="javascript:window.print()" /></td>
      </tr>
    </table>
</div>

</body>
</html>