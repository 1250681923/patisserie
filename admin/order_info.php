<?php
session_start();
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<body style="background:#fff">
<div class="adminBody">
<div class="bigTitle2">��������</div>
<?php
$id=$_GET["id"];
$query=mysql_query("select * from shop_order where order_id='$id'");
$rs=mysql_fetch_assoc($query);
?>
<form action="save_order.php?act=cl" method="post" name="form10">
	<input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
     
      <tr>
        <th width="150">�ջ��ˣ�</th>
        <td><?php echo $rs["name"]?></td>
      </tr>
      <tr>
        <th>�ʼĵ�ַ��</th>
        <td><?php echo $rs["address"]?></td>
      </tr>
      <tr>
        <th>��ϵ�绰��</th>
        <td><?php echo $rs["telephone"]?></td>
      </tr>
      <tr>
        <th>��ע��</th>
        <td><?php echo $rs["content"]?></td>
      </tr>
      <tr>
        <th bgcolor="#EEF4EA">�������飺</th>
        <td bgcolor="#EEF4EA">&nbsp;</td>
      </tr>
      <tr>
        <th>��Ʒ��</th>
        <td><?php echo $rs["pro_name"]?></td>
      </tr>
      <tr>
        <th>������</th>
        <td><?php echo $rs["order_num"]?></td>
      </tr>
      <tr>
        <th>�۸�</th>
        <td><?php echo $rs["order_price"]?></td>
      </tr>
      <tr>
        <th>����</th>
        <td><input type="radio" name="order_state" value="����">
����</td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>
<script language=javascript>  
var subcat2 = new Array();
<?php
$i=0;
$sql="select * from depart order by depart_id desc";//��ѯ����С��
$result=mysql_query($sql);
while($rst=mysql_fetch_array($result))
{
 echo "subcat2[".$i++."] = new Array('".$rst["depart_id"]."','".$rst["com_id"]."','".$rst["depart"]."');\n";
}
?>

function changeselect1(locationid)
{

document.form10.depart.length=0;
document.form10.depart.options[0] = new Option('��ѡ��','');
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