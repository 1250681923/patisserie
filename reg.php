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
    <title>注册</title>
</head>

<body>
    <!-- 头部导航栏部分  start -->
    <header>
        <div class="inner">
            <div class="logo">
                <img src="images/logo.png" width="120px" height="44px" alt="21cake 蛋糕官网">
            </div>
            
            <ul class="nav">
                <li><a href="index.php">首页</a></li>
			</ul>
            <ul class="join">
             
                <li><a href="login.php">登录</a>/<a href="reg.php">注册</a></li>
                <li class="cart"><i></i></li>
            </ul>
        </div>
    </header>

    <!-- 注册页中间部分 -->
    <div class="login-background" style="height: 682px;">
        <div class="reg-content-box" style="width: 1200px; min-height: 216px;">
            <div class="form-login-box" style="right: 0px;">
                <div class="login-regi-title">
                    <h2 class="regi-user">用户注册</h2>
                </div>
                 <form action="save_hy.php?act=add" method="post" name="form10" id="form10">
                    <div class="form-content">
                        <ul class="reister-user">
                            <li>
                                <input type="text" name="userid" id="userid"  autocomplete="off" autofocus="" maxlength="11" placeholder="输入账号" tabindex="1">
                                <i></i>
                            </li>
                            <li>
                                <input type="text" name="name" id="name" autocomplete="off" maxlength="20"
                                    placeholder="请输姓名" id="rePassword" tabindex="3">
                                <i></i>
                            </li>
							
                            <li>
                                <input type="password" name="password" id="password"  autocomplete="off" maxlength="20"
                                    placeholder="密码：请输入8～20字符，需同时包含英文和数字" id="password" tabindex="2">
                                <i></i>
                            </li>
                            <li class="login-img-text" style="display: block">
                                <input type="text" placeholder="请输入电子邮件" name="email" id="email" tabindex="4">
                                <i></i>
                               
                            </li>
							
                            <li>
                                <input type="password" name="tel" id="tel" autocomplete="off" maxlength="20"
                                    placeholder="请输电话" id="rePassword" tabindex="3">
                                <i></i>
                            </li>
                            <li>
                                <input type="submit" class="login-button" value="注册" id="goRegister" onclick="checkform()">
                            </li>
                        </ul>
                    </div>
                    <div class="reading-protocol">
                        <label>
                            <input type="checkbox" name="agree" checked>
                            &nbsp;已阅读并同意
                        </label>
                        <a href="#">21客会员协议</a>和
                        <a href="#">隐私保护政策</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 底部footer  start -->
     <?php include("copy.php");?>
    <!-- 底部footer  end -->
</body>

</html>