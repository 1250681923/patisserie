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

<div class="bigTitle2">�����б�</div>
<table width="100%" border="0">
  <tr>
    <td align="center"><table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="manage_order.php">
    <tr>
      <td width="77" height="33" align="center">����״̬:</td>
      <td width="243" align="center"><input type="radio" name="state" value="���µ�">
���µ�
  <input type="radio" name="state" value="����">
����
<input type="radio" name="state" value="��ȷ��">
��ȷ��</td>
      <td width="90" align="center"><input type="submit" name="Submit" value="��ѯ"></td>
    </tr>
  </form>
</table></td>
  </tr>
</table>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="198" align="center"><strong>������</strong></td>
        <td width="202" align="center">��Ʒ����</td>
        <td width="147" align="center">��������</td>
        <td width="232" align="center">�µ�����</td>
        <td width="132" align="center">����</td>
        <td width="147" align="center">����״̬</td>
        <td width="125" align="center">����</td>
        <td width="133" align="center">����</td>
      </tr>
<?php
$state=$_GET["state"];
$sql="select * from shop_order where 1=1";
if(!empty($state))
{
  $sql=$sql." and order_state like '%".$state."%'";
}
$sql=$sql." order by order_id desc";
$q_tj=mysql_query($sql);
//
$num=mysql_num_rows(mysql_query($sql));
$pagesize=15;
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
$exec=$sql." limit ".($page*$pagesize).",$pagesize"; 
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
<td align="center"><?php echo $rs["order_number"]?></td>
        <td align="center"><?php echo $rs["pro_name"]?></td>
        <td align="center"><?php echo $rs["order_num"]?></td>
        <td align="center"><?php echo $rs["ordertime"]?></td>
        <td align="center"><?php echo $rs["name"]?></td>
        <td align="center"><?php echo $rs["order_state"]?></td>
        <td align="center"><a href="order_info.php?id=<?php echo $rs["order_id"]?>">����</a></td>
        <td align="center"><a href="save_order.php?act=del&id=<?php echo $rs["order_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a></td>
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