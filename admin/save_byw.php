<?php
include("../inc/conn.php");
include("../inc/func.php");
$title=$_POST["title"];
$jsdw=$_POST["jsdw"];
$wtdw=$_POST["wtdw"];
$dz=$_POST["dz"];
$lxr=$_POST["lxr"];
$lxfs=$_POST["lxfs"];
$mj=$_POST["mj"];
$lx=$_POST["lx"];
$fy=$_POST["fy"];
$bh=$_POST["bh"];
$pic=$_POST["pic"];
$bz=$_POST["bz"];
$rq=$_POST["rq"];
$act=$_GET["act"];

//��Ӳ��� 
if($act=="add")
{
$sql="insert into byw(title,jsdw,wtdw,dz,lxr,lxfs,mj,lx,fy,bh,pic,bz,rq) values('$title','$jsdw','$wtdw','$dz','$lxr','$lxfs','$mj','$lx','$fy','$bh','$pic','$bz','$rq')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_byw.php';</script>";
 }
//����༭����
if($act=="edit")
{
$id=$_POST["id"];
$sql="update byw set title='$title',jsdw='$jsdw',wtdw='$wtdw',dz='$dz',lxr='$lxr',lxfs='$lxfs',mj='$mj',fy='$fy',bh='$bh',rq='$rq',pic='$pic',bz='$bz' where yw_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='manage_byw.php';</script>";
}

//

//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from byw where yw_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>