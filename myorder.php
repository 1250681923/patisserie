<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>21cake</title>
</head>
<?php
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('���ȵ�¼�ٽ��в�����'); window.location.href='login.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<body>
    <!-- start -->
    <header>
        <div class="inner">
            <div class="logo">
                <img src="images/logo.png" width="120px" height="44px" alt="21cake ����">
            </div>
            <ul class="nav">
                <li><a href="index.php">��ҳ</a></li>
				   <li><a href="edit_hy.php" class="text12">�༭����</a></li>
					<li><a href="myorder.php" class="text12">�ҵĶ���</a></li>
					<li><a href="exit.php" class="text12">�˳�</a></li>
            </ul>
            <ul class="join">
                <li><a href="login.php">��¼</a>/<a href="reg.php">ע��</a></li>
                <li class="cart"><i></i></li>
            </ul>
        </div>
    </header>
    <div class="content">
        <div class="home-module home-colorful" id="1" style="margin-top:30px;">
            
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="images/menu-top-1.jpg" alt="">
                </a>
            </div><h4 class="home-module-title">
                �ҵĶ���
            </h4>
            <div class="colorful-product-list">
            <div class="list-box1" style="width:1100px;margin-top:30px;margin-left:50px;">
                <?php
				$hy_id=$_SESSION["hy_id"];
				$sql="select * from shop_order where hy_id='$hy_id' order by order_id desc";
				$query=mysql_query($sql);
				?>
				  <table width="98%" height="74" border="1" align="center" cellpadding="0" cellspacing="0" class="border">
					<tr>
					  <td width="18%" height="34" align="center" bgcolor="#FFFFFF" class="text12">������</td>
					  <td width="15%" align="center" bgcolor="#FFFFFF" class="text12">�µ�ʱ��</td>
					  <td width="25%" align="center" bgcolor="#FFFFFF" class="text12">������Ʒ</td>
					  <td width="10%" align="center" bgcolor="#FFFFFF" class="text12">����</td>
					  <td width="13%" align="center" bgcolor="#FFFFFF" class="text12">״̬</td>
					  <td width="19%" align="center" bgcolor="#FFFFFF" class="text12">����</td>
					</tr>
					<?php
					while($rst=mysql_fetch_array($query))
					{
					?>
					<tr>
					  <td height="24" align="center" class="text12"><?php echo $rst["order_number"]?></td>
					  <td align="center" class="text12"><?php echo date("Y-m-d",strtotime($rst["ordertime"]))?></td>
					  <td align="center" class="text12"><a href="show_product.php?id=<?php echo $rst["product_id"]?>" class="text12">
						<?php echo left($rst["pro_name"],8)?>
					  </a></td>
					  <td align="center" class="text12"><?php echo $rst["order_num"]?></td>
					  <td align="center" class="text12"><?php echo $rst["order_state"]?></td>
					  <td align="center" class="text12"><?php
					  if ($rst["order_state"]=="����")//���紦�ڷ���״̬������ʾȷ�ϰ�ť
					  {
					  ?>
						  <a href="confiry.php?id=<?php echo $rst["order_id"]?>&product_id=<?php echo $rst["product_id"]?>" onclick="{if(confirm('ȷ��Ҫȷ�����Ѿ��յ���Ʒ?')){return true;}return false;}" class="red12">ȷ��</a>
						  <?php
					  }
					  ?>
						  
					  </td>
					</tr>
					<?php
					}
					?>
				  </table>
					
                </div>
        </div>
       
    </div>
    <!-- �ײ�footer  start -->
   <?php include("copy.php");?>
    <!-- �ײ�footer  end -->
</body>

</html>