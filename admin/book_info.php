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
  $sql=mysql_query("select * from book where book_id='$id'");
  $rs=mysql_fetch_assoc($sql);
  ?>
<form action="save_lyb.php?act=edit" method="post">
   <input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150"><b>会员：</b></th>
        <td><span class="tablerow1">
          <?php echo $rs["userid"]?>
        </span></td>
      </tr>
     
      <tr>
        <th><span class="tablerow1">日期：</span></th>
        <td><span class="tablerow1">
          <?php echo $rs["book_date"]?>
        </span></td>
      </tr>
      <tr>
        <th><b>内容：</b></th>
        <td><span class="tablerow1">
          <?php echo $rs["content"]?>
        </span></td>
      </tr>
      <tr>
        <th><span class="tablerow1">回复：</span></th>
        <td><span class="tablerow1">
          <textarea name="remark" cols="60" rows="6" id="remark"></textarea>
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