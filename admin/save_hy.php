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
//��Ӳ���
if($act=='add')
{
  $num=exist_member($username);//�����жϻ�Ա�Ƿ��Ѿ�ע�ắ��
     if($num==0)
     {
		 $sql="insert into hy(userid,password,name,sex,tel,email) values('$username','$password','$name','$sex','$tel','$email')";//�����Ա���SQL���
		 $query=mysql_query($sql);//ִ��SQL���
		 echo "<script>alert('��ӳɹ���'); window.location.href='add_hy.php';</script>";//ִ�гɹ�������ʾ
    }
    else
    {
		 echo "<script>alert('���˺��Ѿ�����,���������룡'); window.location.href='add_hy.php';</script>"; //�����Ա�Ѿ����ڣ�������ʾ
    }
}
//��������
if($act=="cz")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update hy set password='8888' where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('�����Ѿ����ó�Ϊ8888��'); window.location.href='".$url."';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from hy where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
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