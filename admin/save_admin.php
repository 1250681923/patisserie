<?php
include("../inc/conn.php");//包含数据库连接页面
$zh=$_POST["zh"];//
$mima=$_POST["mima"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$act=$_GET["act"];//得到传递来的act数据
//添加操作
if($act=="add")//假如act的值是add,那么是插入数据库操作
{
  $sql="insert into sub_admin(zh,mima,name,tel) values('$zh','$mima','$name','$tel')";//插入表的SQL语句
   mysql_query($sql);//执行该sql语句的查询
   echo "<script>alert('添加成功！'); window.location.href='add_admin.php';</script>";//执行完毕后进行弹出框提示
}
//编辑操作
if($act=="edit")//假如act是edit，那么是编辑操作
{
$id=$_POST["id"];//得到传递来的ID值
$sql="update sub_admin set zh='$zh',mima='$mima',name='$name',tel='$tel' where admin_id='$id'";//根据ID在表中进行修改的SQL语句
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='manage_admin.php';</script>";//弹出提示窗口提示
}
//删除操作
if($act=="del")//假如act是del,那么执行删除操作
{
$id=$_GET["id"];//得到传递来的ID值
$url=$_SERVER["HTTP_REFERER"];//得到上一页的地址
$sql="delete from sub_admin where admin_id='$id'";//删除的SQL语句
mysql_query($sql);//执行查询
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";//弹出提示窗口并转向
}
?>