<!DOCTYPE html>
<html>
<head>
<title>��̨����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="adminLogin">
<p>�����̨</p>
<b></b>
<div>
  <form action="check.php" method="post" onSubmit="return check_uploadObject(this);">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">�û���</th>
        <td><input name="username"  type="text"  maxlength="20" required placeholder="�������˺�"></td>
      </tr>
      <tr>
        <th>�û�����</th>
        <td><input name="password"  type="password" maxlength="20" required placeholder="����������"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>
</div>
</div>
<script type="text/javascript">
function check_uploadObject(form){
	if(form.username.value==''){
		alert('�������û���');
		return false;
	}
	if(form.password.value==''){
		alert('����������.');
		return false;
	}
	return true;
}

</script>
</body>
</html>