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
            
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="images/menu-top-1.jpg" alt="">
                </a>
            </div><h4 class="home-module-title">
                个人中心
            </h4>
            <div class="colorful-product-list">
                <div class="list-box1" style="width:1100px;margin-top:30px;margin-left:50px;">
                     <?php
		$hy_id=$_SESSION["hy_id"];
		$q=mysql_query("select * from hy where hy_id='$hy_id'");
		$rst=mysql_fetch_assoc($q);
		?>
		  <table width="100%" style="border:1px solid #333;margin:10px;" align="center" cellpadding="3" cellspacing="1" bgcolor="#E9E5D9">
            <form action="save_hy.php?act=edit" method="post" name="form10" id="form10">
              <input type="hidden" name="id" value="<?php echo $hy_id?>" />
              <tr bgcolor="#FFFFFF">
                <td width="94"  height="30" align="right" bgcolor="#FFFFFF" class="text12"></td>
                <td width="487" align="left" bgcolor="#FFFFFF" class="text12"></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td width="94"  height="30" align="right" bgcolor="#FFFFFF" class="text12">账号：</td>
                <td width="487" align="left" bgcolor="#FFFFFF" class="text12"><?php echo $_SESSION["userid"]?></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="32" align="right" bgcolor="#FFFFFF" class="text12">密码：</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="password" type="text" id="password"  maxlength="35" value="<?php echo $rst["password"]?>" /></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="36" align="right" bgcolor="#FFFFFF" class="text12">姓名：</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="name" type="text" id="name" maxlength="35" value="<?php echo $rst["name"]?>" /></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="25" align="right" bgcolor="#FFFFFF" class="text12">性别：</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="sex" type="radio" value="男" <?php if($rst["sex"]=="男") echo "checked"?> />
                  男
                  <input type="radio" name="sex" value="女" <?php if($rst["sex"]=="女") echo "checked"?> />
                  女</td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="35" align="right" bgcolor="#FFFFFF" class="text12">电子邮件：</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="email" type="text" id="email" maxlength="35" value="<?php echo $rst["email"]?>" /></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="29" align="right" bgcolor="#FFFFFF" class="text12">电话：</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="tel" type="text" id="tel" maxlength="35" value="<?php echo $rst["tel"]?>" /></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="30" align="right" bgcolor="#FFFFFF" class="text12">常用地址：</td>
                <td height="30" align="left" bgcolor="#FFFFFF"><span class="text12">
                  <input name="addr" type="text" id="addr" maxlength="35" value="<?php echo $rst["post_address"]?>" />
                </span></td>
              </tr>

              <tr bgcolor="#FFFFFF">
                <td height="30" align="right" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="30" align="left" bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="提交" /></td>
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