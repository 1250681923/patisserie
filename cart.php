<?php 
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('请先登录再进行操作！'); window.location.href='login.php';</script>";
  exit;
}?>
<?php require"inc/inc_cart.php"; ?>
<?php
$id=$_GET["id"];
$act='0';
if(isset($_GET["act"])){
	$act=$_GET["act"];
}

//检验是否设置了session变量
 if(!isset($_SESSION["cart_id"]))
	    {
         init($id,1);
        }
     else
      {
	     if(!exist_item($id))//判断元素是否已经在购物车中
         {
		 add_item($id,1);
		 } 
      }


//更新元素数量
if($act=="update")
{
   $num=$_POST["num"]; 
   $pos=$_POST["pos"];
   update_item($pos,$num); 
}
//删除元素操作
if($act=="del")
 {
  $pos=$_GET["pos"];
   del_item($pos);
  }
//假如是清空数组操作
if($act=="remove")
 {
  remove_arry();
  }
  echo "<script>window.location.href='basket.php';</script>";//处理完毕，导向到显示购物车页面
?>