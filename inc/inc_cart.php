<?php
//初始化
function init($id,$count)
{
  $idarry=array();
  $countarry=array();//跟随ID变化的对应数量
  array_push($idarry,$id);
  array_push($countarry,$count);
  $_SESSION["cart_id"]=$idarry;
  $_SESSION["cart_count"]=$countarry;
  unset($idarry);
  unset($countarry);
 
}
//添加元素
function add_item($id,$count)
{
$idarry=$_SESSION["cart_id"];
$countarry=$_SESSION["cart_count"];
array_push($idarry,$id);
array_push($countarry,$count);
$_SESSION["cart_id"]=$idarry;
$_SESSION["cart_count"]=$countarry;
unset($idarry);
unset($countarry);
}
//更新元素的数量
function update_item($pos,$num)
{
$countarry=$_SESSION["cart_count"];
$countarry[$pos]=$num;
$_SESSION["cart_count"]=$countarry;
unset($countarry);
}
//判断元素是否在数组中
function exist_item($id)
{
   $pos=false;
   $idarry=$_SESSION["cart_id"];
   foreach($idarry as $value)
    { 
      if($value==$id)
       { 
          $pos=true;
          break; 
        } 
    } 
      return $pos; 
}
//定位元素在数组中的位置
function indexof_item($id)
{
   $t="";
   $count=$_SESSION["count"];
   $idarry=$_SESSION["cart_id"];
   for($i=0;$i<$count;$i++){
      if($idarry[$i]==$id)
	    {
	     $t=$i;
	     break;
	    } 
      }
  return $t;
}
//删除元素
function del_item($pos)
{
  $idarry=$_SESSION["cart_id"];
  $idarry[$pos]=0;
  $_SESSION["cart_id"]=$idarry;
  echo "<script>window.location.href='cart.php';</script>";
}
//清空所有数组
function remove_arry()
{
 unset($_SESSION["cart_id"]);
 unset($_SESSION["count"]);
 unset($_SESSION["cart_count"]);
}
?>