<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ע��</title>
</head>

<body>
    <!-- ͷ������������  start -->
    <header>
        <div class="inner">
            <div class="logo">
                <img src="images/logo.png" width="120px" height="44px" alt="21cake �������">
            </div>
            
            <ul class="nav">
                <li><a href="index.php">��ҳ</a></li>
			</ul>
            <ul class="join">
             
                <li><a href="login.php">��¼</a>/<a href="reg.php">ע��</a></li>
                <li class="cart"><i></i></li>
            </ul>
        </div>
    </header>

    <!-- ע��ҳ�м䲿�� -->
    <div class="login-background" style="height: 682px;">
        <div class="reg-content-box" style="width: 1200px; min-height: 216px;">
            <div class="form-login-box" style="right: 0px;">
                <div class="login-regi-title">
                    <h2 class="regi-user">�û�ע��</h2>
                </div>
                 <form action="save_hy.php?act=add" method="post" name="form10" id="form10">
                    <div class="form-content">
                        <ul class="reister-user">
                            <li>
                                <input type="text" name="userid" id="userid"  autocomplete="off" autofocus="" maxlength="11" placeholder="�����˺�" tabindex="1">
                                <i></i>
                            </li>
                            <li>
                                <input type="text" name="name" id="name" autocomplete="off" maxlength="20"
                                    placeholder="��������" id="rePassword" tabindex="3">
                                <i></i>
                            </li>
							
                            <li>
                                <input type="password" name="password" id="password"  autocomplete="off" maxlength="20"
                                    placeholder="���룺������8��20�ַ�����ͬʱ����Ӣ�ĺ�����" id="password" tabindex="2">
                                <i></i>
                            </li>
                            <li class="login-img-text" style="display: block">
                                <input type="text" placeholder="����������ʼ�" name="email" id="email" tabindex="4">
                                <i></i>
                               
                            </li>
							
                            <li>
                                <input type="password" name="tel" id="tel" autocomplete="off" maxlength="20"
                                    placeholder="����绰" id="rePassword" tabindex="3">
                                <i></i>
                            </li>
                            <li>
                                <input type="submit" class="login-button" value="ע��" id="goRegister" onclick="checkform()">
                            </li>
                        </ul>
                    </div>
                    <div class="reading-protocol">
                        <label>
                            <input type="checkbox" name="agree" checked>
                            &nbsp;���Ķ���ͬ��
                        </label>
                        <a href="#">21�ͻ�ԱЭ��</a>��
                        <a href="#">��˽��������</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- �ײ�footer  start -->
     <?php include("copy.php");?>
    <!-- �ײ�footer  end -->
</body>

</html>