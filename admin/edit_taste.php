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
<div class="bigTitle2">�༭��ζ</div>
<?php
$id=$_GET["id"];
$sql="select * from taste where c_id='$id'";
$query=mysql_query($sql);
$rs=mysql_fetch_assoc($query);
?>
<form action="save_taste.php?act=edit" method="post">
<input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">��ζ</th>
        <td><span style="COLOR: #880000">
          <input name="taste" type="text" id="taste" value="<?php echo $rs["taste"]?>" required placeholder="�������ζ">
        </span></td>
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