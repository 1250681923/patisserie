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
  echo "<script>alert('请先登录再进行操作！'); window.location.href='login.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<body>
    <!-- start -->
    <header>
         <?php include("top.php");?>
    </header>
    <div class="content">
        <div class="home-module home-colorful" id="1" style="margin-top:30px;">
            <h4 class="home-module-title">
                购物车
            </h4>
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="images/menu-top-1.jpg" alt="">
                </a>
            </div>
            <div class="colorful-product-list">
                <div class="list-box1" style="width:1100px;margin-top:30px;margin-left:50px;">
                      <table width="100%" height="415" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE" class="border_img">
        <tr>
          <td height="33"><table width="100%" height="33" border="0" cellpadding="0" cellspacing="0" class="two_radius">
            <tr>
              <td height="38" bgcolor="#876565">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="small_title">会员支付</span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="382" align="center"><table width="51%" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
            <?php
	 $total=$_POST["total"];
	 $name=$_POST["name"];
	 $address=$_POST["address"];
	 $telephone=$_POST["telephone"];
	 $post_way=$_POST["post_way"];
	 $content=$_POST["content"];
	 ?>
            <form action="save_order1.php?act=add" method="post">
              <input type="hidden" name="total" value="<?php echo $total?>" />
              <input type="hidden" name="name" value="<?php echo $name?>" />
              <input type="hidden" name="address" value="<?php echo $address?>" />
              <input type="hidden" name="telephone" value="<?php echo $telephone?>" />
              <input type="hidden" name="email" value="<?php echo $email?>" />
              <input type="hidden" name="billing_address" value="<?php echo $billing_address?>" />
              <input type="hidden" name="post_way" value="<?php echo $post_way?>" />
              <input type="hidden" name="content" value="<?php echo $content?>" />
              <tr>
                <td height="75" align="center" valign="middle"><table width="80%" height="191" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="50%" height="191" align="right"><img src="images/wxewm.jpg" width="180" height="180" /></td>
                      <td width="50%" align="center"><img src="images/zfewm.jpg" width="180" height="180" /></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="30" align="center" bgcolor="#FCF1DF" class="text12">金额一共是
                  <psan style="color:#FF0000;">
                    <?php echo $_POST["total"]?>
                    </span> 元</td>
              </tr>
              <tr>
                <td height="32" align="center"><input name="Submit2" type="submit" class="bt" value="提交" /></td>
              </tr>
            </form>
          </table>
					
                </div>
        </div>
       
    </div>
    <!-- 底部footer  start -->
     <?php include("copy.php");?>
    <!-- 底部footer  end -->
</body>

</html>