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
<div class="bigTitle2">�༭����</div>
<?php
  $id=$_GET["id"];
  $sql=mysql_query("select * from book where book_id='$id'");
  $rs=mysql_fetch_assoc($sql);
  ?>
<form action="save_lyb.php?act=edit" method="post">
   <input type="hidden" name="id" value="<?php echo $id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150"><b>��Ա��</b></th>
        <td><span class="tablerow1">
          <?php echo $rs["userid"]?>
        </span></td>
      </tr>
     
      <tr>
        <th><span class="tablerow1">���ڣ�</span></th>
        <td><span class="tablerow1">
          <?php echo $rs["book_date"]?>
        </span></td>
      </tr>
      <tr>
        <th><b>���ݣ�</b></th>
        <td><span class="tablerow1">
          <?php echo $rs["content"]?>
        </span></td>
      </tr>
      <tr>
        <th><span class="tablerow1">�ظ���</span></th>
        <td><span class="tablerow1">
          <textarea name="remark" cols="60" rows="6" id="remark"></textarea>
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