<?php
//���ú�������ȡ�ַ���,����ר��
function left($title,$length){  
$encoding='gb2312'; 
if(mb_strlen($title,$encoding)>$length){ 
$title=mb_substr($title,0,$length,$encoding); 
} 
return $title; 
} 
//
function get_category($id)
{
$query=mysql_query("select * from category where c_id='$id'");
$r=mysql_fetch_assoc($query);
return $r;
}
function get_taste($id)
{
$query=mysql_query("select * from taste where c_id='$id'");
$r=mysql_fetch_assoc($query);
return $r;
}
//
function get_depart($id)
{
$query=mysql_query("select * from depart where depart_id='$id'");
$r=mysql_fetch_assoc($query);
return $r;
}
//�������ã�����ID�õ��༶
function get_bj($id)
{
	$query=mysql_query("select * from bj where bj_id='$id'");
	$r=mysql_fetch_assoc($query);
	return $r;
}
//��������
function turn_diff($start_rq,$end_rq)
{
   $days=0;
   $start=strtotime($start_rq);
   $end=strtotime($end_rq);
   $days=abs(round(($end-$start)/(3600*24)));
   return $days;
}

//
function exist_cj($st_id,$kc_id)
{
  $query=mysql_query("select * from cj where kc_id='$kc_id' and st_id='$st_id'");
  $num=mysql_num_rows($query);
   mysql_free_result($query);
   return $num;
}
//��֤��Ա�ʺ��Ƿ����
function exist_member($userid)
{
  $query=mysql_query("select * from hy where userid='$userid'");
  $num=mysql_num_rows($query);
   mysql_free_result($query);
   return $num;
}
//����ID�����õ�ѧ��
function get_st($id)
{
$query=mysql_query("select * from student where st_id='$id'");
$rs=mysql_fetch_assoc($query);
return $rs;
}
//
function get_kc($id)
{
$query=mysql_query("select * from kc where kc_id='$id'");
$rs=mysql_fetch_assoc($query);
return $rs;
}
//
//�Զ����ɶ�����
function get_dingdan()
{
$dingdanhao=date("Y-m-dH-i-s");
$dingdanhao=str_replace("-","",$dingdanhao);
$dingdanhao .= rand(1000,2000);
return $dingdanhao;
}
//
function get_exam($id)
{
$query=mysql_query("select * from exam where exam_id='$id'");
$rs=mysql_fetch_assoc($query);
return $rs;
}
//
function get_ti($id)
{
$query=mysql_query("select * from ti where ti_id='$id'");
$rs=mysql_fetch_assoc($query);
return $rs;
}
//���ݱ��������ַ���ͷ����
function query($sql)
{
$query=mysql_query($sql);
return $query;
}
//�رղ�ѯ
function closequery($query)
{
  mysql_free_result($query);
}
?>
