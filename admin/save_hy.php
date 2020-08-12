<?php
include("../inc/conn.php");
include("../inc/func.php");
$username=$_POST["userid"];
$password=$_POST["password"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$sex=$_POST["sex"];
$email=$_POST["email"];
$act=$_GET["act"];
//添加操作
if($act=='add')
{
  $num=exist_member($username);//调用判断会员是否已经注册函数
     if($num==0)
     {
		 $sql="insert into hy(userid,password,name,sex,tel,email) values('$username','$password','$name','$sex','$tel','$email')";//插入会员表的SQL语句
		 $query=mysql_query($sql);//执行SQL语句
		 echo "<script>alert('添加成功！'); window.location.href='add_hy.php';</script>";//执行成功给出提示
    }
    else
    {
		 echo "<script>alert('该账号已经存在,请重新输入！'); window.location.href='add_hy.php';</script>"; //如果会员已经存在，弹出提示
    }
}
//重置密码
if($act=="cz")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update hy set password='8888' where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('密码已经设置成为8888！'); window.location.href='".$url."';</script>";
}
//删除密码
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from hy where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
//
if($act=="check")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update hy set sh=1 where hy_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}
?>