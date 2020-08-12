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

//添加操作 
if($act=="add")
{
$sql="insert into byw(title,jsdw,wtdw,dz,lxr,lxfs,mj,lx,fy,bh,pic,bz,rq) values('$title','$jsdw','$wtdw','$dz','$lxr','$lxfs','$mj','$lx','$fy','$bh','$pic','$bz','$rq')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_byw.php';</script>";
 }
//大类编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$sql="update byw set title='$title',jsdw='$jsdw',wtdw='$wtdw',dz='$dz',lxr='$lxr',lxfs='$lxfs',mj='$mj',fy='$fy',bh='$bh',rq='$rq',pic='$pic',bz='$bz' where yw_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='manage_byw.php';</script>";
}

//

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from byw where yw_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>