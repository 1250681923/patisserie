<!DOCTYPE html>
<html>
<head>
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="adminLogin">
<p>管理后台</p>
<b></b>
<div>
  <form action="check.php" method="post" onSubmit="return check_uploadObject(this);">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th width="150">用户名</th>
        <td><input name="username"  type="text"  maxlength="20" required placeholder="请输入账号"></td>
      </tr>
      <tr>
        <th>用户密码</th>
        <td><input name="password"  type="password" maxlength="20" required placeholder="请输入密码"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="提交" class="submit"/></td>
      </tr>
    </table>
  </form>
</div>
</div>
<script type="text/javascript">
function check_uploadObject(form){
	if(form.username.value==''){
		alert('请输入用户名');
		return false;
	}
	if(form.password.value==''){
		alert('请输入密码.');
		return false;
	}
	return true;
}

</script>
</body>
</html>