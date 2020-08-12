<?php
session_start();
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<body style="background:#fff">
<div class="adminBody">
<div class="bigTitle2">订单详情</div>
<?php
$id=$_GET["id"];
$query=mysql_query("select * from shop_order where order_id='$id'");
$rs=mysql_fetch_assoc($query);
?>
<form action="save_order.php?act=cl" method="post" name="form10">
	<input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
     
      <tr>
        <th width="150">收货人：</th>
        <td><?php echo $rs["name"]?></td>
      </tr>
      <tr>
        <th>邮寄地址：</th>
        <td><?php echo $rs["address"]?></td>
      </tr>
      <tr>
        <th>联系电话：</th>
        <td><?php echo $rs["telephone"]?></td>
      </tr>
      <tr>
        <th>备注：</th>
        <td><?php echo $rs["content"]?></td>
      </tr>
      <tr>
        <th bgcolor="#EEF4EA">订单详情：</th>
        <td bgcolor="#EEF4EA">&nbsp;</td>
      </tr>
      <tr>
        <th>商品；</th>
        <td><?php echo $rs["pro_name"]?></td>
      </tr>
      <tr>
        <th>数量：</th>
        <td><?php echo $rs["order_num"]?></td>
      </tr>
      <tr>
        <th>价格：</th>
        <td><?php echo $rs["order_price"]?></td>
      </tr>
      <tr>
        <th>处理：</th>
        <td><input type="radio" name="order_state" value="发货">
发货</td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="提交" class="submit"/></td>
      </tr>
    </table>
  </form>
<script language=javascript>  
var subcat2 = new Array();
<?php
$i=0;
$sql="select * from depart order by depart_id desc";//查询所有小类
$result=mysql_query($sql);
while($rst=mysql_fetch_array($result))
{
 echo "subcat2[".$i++."] = new Array('".$rst["depart_id"]."','".$rst["com_id"]."','".$rst["depart"]."');\n";
}
?>

function changeselect1(locationid)
{

document.form10.depart.length=0;
document.form10.depart.options[0] = new Option('请选择','');
 //alert(subcat2[1].toString());
 //alert(locationid.length.toString());
for (i=0; i<subcat2.length; i++)
{
 if (subcat2[i][1] == locationid)
{
 document.form10.depart.options[document.form10.depart.length] = new Option(subcat2[i][2], subcat2[i][0]);}
}

}
</script>




  </div>

</body>
</html>