<?php
include("../inc/conn.php");//�������ݿ�����ҳ��
$zh=$_POST["zh"];//
$mima=$_POST["mima"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$act=$_GET["act"];//�õ���������act����
//��Ӳ���
if($act=="add")//����act��ֵ��add,��ô�ǲ������ݿ����
{
  $sql="insert into sub_admin(zh,mima,name,tel) values('$zh','$mima','$name','$tel')";//������SQL���
   mysql_query($sql);//ִ�и�sql���Ĳ�ѯ
   echo "<script>alert('��ӳɹ���'); window.location.href='add_admin.php';</script>";//ִ����Ϻ���е�������ʾ
}
//�༭����
if($act=="edit")//����act��edit����ô�Ǳ༭����
{
$id=$_POST["id"];//�õ���������IDֵ
$sql="update sub_admin set zh='$zh',mima='$mima',name='$name',tel='$tel' where admin_id='$id'";//����ID�ڱ��н����޸ĵ�SQL���
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='manage_admin.php';</script>";//������ʾ������ʾ
}
//ɾ������
if($act=="del")//����act��del,��ôִ��ɾ������
{
$id=$_GET["id"];//�õ���������IDֵ
$url=$_SERVER["HTTP_REFERER"];//�õ���һҳ�ĵ�ַ
$sql="delete from sub_admin where admin_id='$id'";//ɾ����SQL���
mysql_query($sql);//ִ�в�ѯ
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";//������ʾ���ڲ�ת��
}
?>