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
    <title>��¼</title>
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

    <!-- ��¼ҳ�м䲿��  start -->
    <div class="login-background" style="height: 682px;">
        <div class="reg-content-box" style="width: 1200px; min-height: 216px;">
            <div class="form-login-box" style="right: 0px;">
                <div class="login-regi-title">
                    <h2 class="regi-user">��¼</h2>
                </div>
                 <form action="check.php" method="post" name="form10" id="form10">
                    <div class="form-content">
                        <ul class="reister-user">
                            <li>
							
                                <input type="text" name="userid" autocomplete="off" autofocus="" maxlength="11"
                                    placeholder="�����������˺�" id="telephone" tabindex="1">
                                <i></i>
                            </li>
                            <li>
                                <input type="password" name="password" autocomplete="off" maxlength="20"
                                    placeholder="��������" id="password" tabindex="2">
                                <i></i>
                            </li>
                            <div class="jvli"></div>
                            <li>
                                <input type="submit" class="login-button" value="��¼" id="goRegister">
                            </li>
                        </ul>
                    </div>
                    <div class="reading-protocol">
                        <label>
                            <input type="checkbox" name="agree" checked>
                            &nbsp;��ס�˺�
                        </label>
                        <p><a href="#">��������</a></p>
                        <p><a href="reg.php">ȥע��</a></p>
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