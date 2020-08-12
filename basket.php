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
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
					<td height="382" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="word07">
            <tr>
              <td height="150" valign="top"><!--购物车代码-->
                  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" class="word07">
                    <tr>
                      <td align="center" bgcolor="#EEEEEE" class="text12">商品名称</td>
                      <td align="center" bgcolor="#EEEEEE" class="text12">单价</td>
                      <td align="center" bgcolor="#EEEEEE" class="text12">数量</td>
                      <td align="center" bgcolor="#EEEEEE" class="text12">小计</td>
                      <td align="center" bgcolor="#EEEEEE" class="text12">操作</td>
                    </tr>
                    <?php
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++){
		  if($idarry[$i]!=0){
			//从数据库检索
			$sql=mysql_query("select * from product where product_id='".$idarry[$i]."'");
			$rs=mysql_fetch_assoc($sql);
			?>
                    <form action="cart.php?act=update" method="post">
                      <input type="hidden" name="pos" value="<?php echo $i?>" />
                      <tr>
                        <td width="27%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?php echo left($rs["name"],16)?></td>
                        <td width="13%" align="center" bgcolor="#F6F6F6" class="text12"><?php echo $rs["price"]?></td>
                        <td width="12%" align="center" bgcolor="#F6F6F6" class="text12"><label>
                          <input name="num" type="text" size="10" value="<?php echo $countarry[$i]?>" />
                        </label></td>
                        <td width="11%" align="center" bgcolor="#F6F6F6" class="text12">￥
                          <?php echo $rs["price"]*$countarry[$i]?></td>
                        <td width="27%" align="center" bgcolor="#F6F6F6" class="text12"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="49%" height="20" align="center" valign="top"><input name="Input" type="image" src="images/anniu01.gif" />
                              </td>
                              <td width="51%" align="center" valign="top"><a href="cart.php?act=del&pos=<?php echo $i?>"><img src="images/anniu02.gif" border="0" /></a></td>
                            </tr>
                        </table></td>
                      </tr>
                    </form>
                    <?php
			$total=$total+($rs["price"]*$countarry[$i]);
			mysql_free_result($sql);
				}
			}
						?>
                  </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="20" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="37%" height="42" bgcolor="#EEEEEE">&nbsp;</td>
                      <td width="19%" align="center" bgcolor="#EEEEEE"><a href="index.php"><img src="images/basket_1.gif" width="106" height="27" border="0" /></a></td>
                      <td width="18%" align="center" bgcolor="#EEEEEE"><a href="cart.php?act=remove"><img src="images/basket_2.gif" width="106" height="27" border="0" /></a></td>
                      <td width="26%" align="left" bgcolor="#EEEEEE"><a href="jiezhang.php"><img src="images/basket_3.gif" width="85" height="27" border="0" /></a></td>
                    </tr>
                  </table>
                <!--购物车结束-->
              </td>
            </tr>
          </table></td>
					</table>
					
                </div>
        </div>
       
    </div>
    <!-- 底部footer  start -->
     <?php include("copy.php");?>
    <!-- 底部footer  end -->
</body>

</html>