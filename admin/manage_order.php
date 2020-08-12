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

<div class="bigTitle2">订单列表</div>
<table width="100%" border="0">
  <tr>
    <td align="center"><table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="manage_order.php">
    <tr>
      <td width="77" height="33" align="center">订单状态:</td>
      <td width="243" align="center"><input type="radio" name="state" value="已下单">
已下单
  <input type="radio" name="state" value="发货">
发货
<input type="radio" name="state" value="已确认">
已确认</td>
      <td width="90" align="center"><input type="submit" name="Submit" value="查询"></td>
    </tr>
  </form>
</table></td>
  </tr>
</table>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="198" align="center"><strong>订单号</strong></td>
        <td width="202" align="center">商品名称</td>
        <td width="147" align="center">销售数量</td>
        <td width="232" align="center">下单日期</td>
        <td width="132" align="center">姓名</td>
        <td width="147" align="center">订单状态</td>
        <td width="125" align="center">详情</td>
        <td width="133" align="center">操作</td>
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
 echo "<tr><td colspan=7>暂时没有信息</td></tr>";
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
        <td align="center"><a href="order_info.php?id=<?php echo $rs["order_id"]?>">详情</a></td>
        <td align="center"><a href="save_order.php?act=del&id=<?php echo $rs["order_id"]?>" onClick="{if(confirm('确定删除吗?')){return true;}return false;}"><font color="#000000">删除</font></a></td>
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