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
                结算
            </h4>
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="images/menu-top-1.jpg" alt="">
                </a>
            </div>
            <div class="colorful-product-list">
                <div class="list-box1" style="width:1100px;margin-top:30px;margin-left:50px;" >
                     <table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
          <tr>
            <td height="461" align="center"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" class="word07">
                <tr>
                  <td height="31" align="center" bgcolor="#EEEEEE" class="text12">商品名称</td>
                  <td align="center" bgcolor="#EEEEEE" class="text12">单价</td>
                  <td align="center" bgcolor="#EEEEEE" class="text12">数量</td>
                  <td width="23%" align="center" bgcolor="#EEEEEE" class="text12">小计</td>
                </tr>
                <?php
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++)
		{
		  if($idarry[$i]!=0)
		  {
			//从数据库检索
			$sql=mysql_query("select * from product where product_id='".$idarry[$i]."'");
			$rs=mysql_fetch_assoc($sql);
			?>
                <tr>
                  <td width="31%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?php echo $rs["name"]?></td>
                  <td width="14%" align="center" bgcolor="#F6F6F6" class="text12"><?php echo $rs["price"]?>
                    元</td>
                  <td width="18%" align="center" bgcolor="#F6F6F6" class="text12"><?php echo $countarry[$i]?></td>
                  <td align="center" bgcolor="#F6F6F6" class="text12">￥<?php echo $rs["price"]*$countarry[$i]?></td>
                </tr>
                <?php
	$total=$total+($rs["price"]*$countarry[$i]);
			mysql_free_result($sql);
				}
			}
			?>
              </table>
                <br>
                <table width="90%" height="400" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
                  <tr>
                    <td height="410" valign="top"><?php
			     $sql="select * from hy where userid='".$_SESSION["userid"]."'";
			     $q=mysql_query($sql);
			     $rst=mysql_fetch_assoc($q);
			  ?>
                        <table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <form action="zf.php?act=add" method="post">
                            <tr>
                              <td height="27" align="right" class="text12">总价：</td>
                              <td align="left"><input name="total" type="text" id="total" value="<?php echo $total?>"></td>
                            </tr>
                            <tr>
                              <td height="27" align="right" class="text12">收 货 人：</td>
                              <td align="left"><input name="name" type="text" id="name" value="<?php echo $rst["name"]?>">
                              <span class="word09">* </span></td>
                            </tr>
                            <tr>
                              <td height="30" align="right" class="text12">收货地址：</td>
                              <td align="left"><input name="address" type="text" id="address" value="<?php echo $rst["post_address"]?>">
                              <span class="word09">*</span></td>
                            </tr>
                            <tr>
                              <td height="30" align="right" class="text12">联系电话：</td>
                              <td align="left"><input name="telephone" type="text" id="telephone" value="<?php echo $rst["tel"]?>">
                              <span class="word09">*</span></td>
                            </tr>
                            <tr>
                              <td height="30" align="right" class="text12">电子信箱：</td>
                              <td align="left"><input name="email" type="text" id="email" value="<?php echo $rst["email"]?>"></td>
                            </tr>
                            <tr>
                              <td height="30" align="right" class="text12">手机号码：</td>
                              <td align="left"><input name="mobile" type="text" id="mobile" value="<?php echo $rst["tel"]?>"></td>
                            </tr>
                            <tr>
                              <td height="30" align="right" class="text12">留言备注：</td>
                              <td align="left"><label>
                                <textarea name="content" cols="50" rows="6" id="content"></textarea>
                              </label></td>
                            </tr>
                            <tr>
                              <td width="15%" height="30" align="right" class="word09">&nbsp;</td>
                              <td width="85%"><label>
                                <input type="submit" name="Submit" value="提  交" />
                                <input type="reset" name="Submit2" value="重  置" />
                              </label></td>
                            </tr>
                          </form>
                        </table></td>
                  </tr>
              </table></td>
          </tr>
        </table>
					
                </div>
        </div>
       
    </div>
    <!-- 底部footer  start -->
    <?php include("copy.php");?>
    <!-- 底部footer  end -->
</body>

</html>