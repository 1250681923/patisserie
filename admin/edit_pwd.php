<?php
session_start();
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
<?php
$admin_id=$_SESSION['user_id'];
$sql="select * from web_admin where admin_id='$admin_id'";
$rs=mysql_fetch_assoc(mysql_query($sql));
?>
<div class="bigTitle2">�޸�����</div>
<form action="save_pwd.php?act=edit" method="post">
<input type="hidden" name="id" value="<?php echo $admin_id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">�ʺ�</th>
        <td><input name="web_admin" type="text" class="input1" id="web_admin" size=20 maxlength=20 value="<?php echo $rs['web_admin']?>" required placeholder="������"></td>
      </tr>
      <tr>
        <th>����</th>
        <td><input name="pwd" type="password" class="input1" required placeholder="����������"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>




  </div>

</body>
</html>