<?php
error_reporting(0);
//error_reporting(E_ALL ^ E_NOTICE);//����������

ini_set("display_errors", 0);
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL ^ E_WARNING);
$conn=mysql_connect ("localhost", "root", "");//127.0.0.1��MySql IP,root���ʺ�,�������������д��""��
mysql_select_db("php_5932");
mysql_query("set names gb2312");
function txtClean($valueString){
            $txt=array("\n","\r");
            $html=array(" "," ");
            return str_replace($txt,$html,$valueString);
        }
?> 
