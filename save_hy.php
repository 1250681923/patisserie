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
//��Ӳ���


if($act=='add')
{
	if(empty($userid)){
		  echo "<script>alert('��Ա�˺Ų���Ϊ��Ŷ��'); window.location.href='reg.php';</script>";
	}
	if(empty($name)){
		  echo "<script>alert('��Ա��������Ϊ��Ŷ��'); window.location.href='reg.php';</script>";
	}
	if(empty($password)){
		  echo "<script>alert('��Ա���벻��Ϊ��Ŷ��'); window.location.href='reg.php';</script>";
	}
	if(empty($tel)){
		  echo "<script>alert('�绰����Ϊ��Ŷ��'); window.location.href='reg.php';</script>";
	}
  $num=exist_member($userid);
  if(!$num)
  {
    $sql="insert into hy(userid,password,name,sex,tel,email) values('$userid','$password','$name','$sex','$tel','$email')";
    $query=mysql_query($sql);
    echo "<script>alert('ע��ɹ�,���¼��'); window.location.href='index.php';</script>";
  }
  else
  {
    echo "<script>alert('�û�Ա�˺��Ѿ�����,������ע�ᣡ'); window.location.href='index.php';</script>";
  }
  //
}
//�޸Ĳ���
if($act=='edit')
{
	$id=$_POST["id"];
	$addr=$_POST["addr"];
	 $sql="update hy set name='$name',sex='$sex',tel='$tel',post_address='$addr',email='$email' where hy_id='$id'";
	 $query=mysql_query($sql);
	 echo "<script>alert('�޸ĳɹ���'); window.location.href='index.php';</script>";
}


?>