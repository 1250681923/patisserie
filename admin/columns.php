<?php
session_start();
require("../inc.php");
if($_SESSION[admin]=="")
{	
	echo ("<script>location.href='login.php';</script>");
	exit;
}
if($ac=="add")
{	
		$sql = "INSERT INTO `columns` VALUES(NULL,'$name')";
		mysql_query($sql); 
		echo "<script>alert('�ɹ�,�������!');window.location='columns.php';</script>";
	
}
if($ac=="edit")
{	
		$sql = "UPDATE `columns` SET name='$name' WHERE id=$id"; 
		mysql_query($sql); 
		echo "<script>alert('�ɹ�,�������!');window.location='columns.php';</script>";
	
}
if($ac=="del")
{	
		$sql="DELETE from `columns` WHERE id =$id";
		mysql_query($sql);	
		echo ("<script>alert('ɾ���ɹ�!');window.location='columns.php';</script>");	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">
<?php
if($type=='add'){
?>
<div class="bigTitle2">�����Ŀ<a href="columns.php">���б�</a></div>
<form action="columns.php?ac=add" method="post" onSubmit="return check_uploadObject(this);">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">��Ŀ����</th>
        <td><input type="text" name="name"/></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>
<?php
}
elseif($type=='edit'){
	GetFirst("select * from `columns` where id=$id");
?>
<div class="bigTitle2">�༭��Ŀ<a href="columns.php">���б�</a></div>
<form action="columns.php?ac=edit" method="post" onSubmit="return check_uploadObject(this);">
<input type="hidden" name="id" value="<?php echo $GF[id];?>" />
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">��Ŀ����</th>
        <td><input type="text" name="name" value="<?php echo $GF[name];?>"/></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>

<?php
}else{
		$res=mysql_query("select * from `columns`");
?>
<div class="bigTitle2">��Ŀ�б�<a href="columns.php?type=add">����ӡ�</a></div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="20">ID</td>
        <td>��Ŀ����</td>
        <td>����</td>
      </tr>
      <?php
		while($row=mysql_fetch_array($res))
		{
			?>
      <tr>
        <td><?php echo $row[id];?></td>
        <td><a href="../list.php?id=<?php echo $row[id];?>"><?php echo $row[name];?></a></td>
        <td><a href="columns.php?type=edit&id=<?php echo $row[id];?>">�޸�</a> | <a href="columns.php?ac=del&id=<?php echo $row[id];?>">ɾ��</a></td>
      </tr>
      <?php }?>
      </table>
<?php
}
?>
  </div>
<script type="text/javascript">
function check_uploadObject(form){
	if(form.name.value==''){
		alert('��������Ŀ����');
		return false;
	}
	return true;
}
</script>
</body>
</html>