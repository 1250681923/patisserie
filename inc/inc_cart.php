<?php
//��ʼ��
function init($id,$count)
{
  $idarry=array();
  $countarry=array();//����ID�仯�Ķ�Ӧ����
  array_push($idarry,$id);
  array_push($countarry,$count);
  $_SESSION["cart_id"]=$idarry;
  $_SESSION["cart_count"]=$countarry;
  unset($idarry);
  unset($countarry);
 
}
//���Ԫ��
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
//����Ԫ�ص�����
function update_item($pos,$num)
{
$countarry=$_SESSION["cart_count"];
$countarry[$pos]=$num;
$_SESSION["cart_count"]=$countarry;
unset($countarry);
}
//�ж�Ԫ���Ƿ���������
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
//��λԪ���������е�λ��
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
//ɾ��Ԫ��
function del_item($pos)
{
  $idarry=$_SESSION["cart_id"];
  $idarry[$pos]=0;
  $_SESSION["cart_id"]=$idarry;
  echo "<script>window.location.href='cart.php';</script>";
}
//�����������
function remove_arry()
{
 unset($_SESSION["cart_id"]);
 unset($_SESSION["count"]);
 unset($_SESSION["cart_count"]);
}
?>