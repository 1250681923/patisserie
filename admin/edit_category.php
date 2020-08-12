<?php
session_start();
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
<div class="bigTitle2">编辑分类</div>
<?php
$id=$_GET["id"];
$sql="select * from category where c_id='$id'";
$query=mysql_query($sql);
$rs=mysql_fetch_assoc($query);
?>
<form action="save_category.php?act=edit" method="post">
<input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">分类</th>
        <td><span style="COLOR: #880000">
          <input name="category" type="text" id="category" value="<?php echo $rs["category"]?>" required placeholder="请输入分类">
        </span></td>
      </tr>
     
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="提交" class="submit"/></td>
      </tr>
    </table>
  </form>




  </div>

</body>
</html>