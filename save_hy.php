<?php
include("inc/conn.php");
include("inc/func.php");
$userid=$_POST["userid"];
$password=$_POST["password"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$act=$_GET["act"];
//添加操作


if($act=='add')
{
	if(empty($userid)){
		  echo "<script>alert('会员账号不能为空哦！'); window.location.href='reg.php';</script>";
	}
	if(empty($name)){
		  echo "<script>alert('会员姓名不能为空哦！'); window.location.href='reg.php';</script>";
	}
	if(empty($password)){
		  echo "<script>alert('会员密码不能为空哦！'); window.location.href='reg.php';</script>";
	}
	if(empty($tel)){
		  echo "<script>alert('电话不能为空哦！'); window.location.href='reg.php';</script>";
	}
  $num=exist_member($userid);
  if(!$num)
  {
    $sql="insert into hy(userid,password,name,sex,tel,email) values('$userid','$password','$name','$sex','$tel','$email')";
    $query=mysql_query($sql);
    echo "<script>alert('注册成功,请登录！'); window.location.href='index.php';</script>";
  }
  else
  {
    echo "<script>alert('该会员账号已经存在,请重新注册！'); window.location.href='index.php';</script>";
  }
  //
}
//修改操作
if($act=='edit')
{
	$id=$_POST["id"];
	$addr=$_POST["addr"];
	 $sql="update hy set name='$name',sex='$sex',tel='$tel',post_address='$addr',email='$email' where hy_id='$id'";
	 $query=mysql_query($sql);
	 echo "<script>alert('修改成功！'); window.location.href='index.php';</script>";
}


?>