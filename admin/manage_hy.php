<?php
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">��Ա�б�</div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="182" align="center"><strong>�˺�</strong></td>
        <td width="139" align="center">����</td>
        <td width="243" align="center">����</td>
        <td width="89" align="center">�Ա�</td>
        <td width="158" align="center">�����ʼ�</td>
        <td width="201" align="center">�绰</td>
       
        <td width="218" align="center">����</td>
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
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
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
        <td align="center"><a href="save_hy.php?act=del&id=<?php echo $rs["hy_id"]?>" class="text12">ɾ��</a></td>
      </tr>
     <?php
  }
}
?>
		 <tr>
         <td colspan="8"><div align="center" class="text1">
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

</div>

</body>
</html>