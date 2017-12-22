<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-18 21:06:39
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1090259bfc4df8794a0-02911029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d5e894865acffb50e4d249ebcf91151fce894e' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\Login\\login.html',
      1 => 1505649629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090259bfc4df8794a0-02911029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bfc4df9051a7_54424118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfc4df9051a7_54424118')) {function content_59bfc4df9051a7_54424118($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>简洁大气快速登录注册模板</title>
	<link href="./Public/home/css/login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>简洁大气快速登录注册模板<sup>2015</sup></h1>

	<div class="login"> 
		<div class="header">
			<div class="switch" id="switch">
				<a class="switch_btn_focus" href="javascript:void(0);">快速登录</a>
				<div id="switch_bottom"></div>
			</div>
		</div>    
	    <div style="display: block; height: 235px;"> 
			<!--登录-->
			<div class="web_login" id="web_login">
				<div class="login-box">
					<div class="login_form">
						<form action="./index.php?p=home&c=login&a=login" name="loginform" method="post">
							<div class="uinArea" id="uinArea">
								<label class="input-tips" for="u">帐号：</label>
								<div class="inputOuter" id="uArea">
									<input type="text" name="username" class="inputstyle"/>
								</div>
							</div>
							<div class="pwdArea" id="pwdArea">
								<label class="input-tips" for="p">密码：</label> 
								<div class="inputOuter" id="pArea">
									<input type="password" name="pwd" class="inputstyle"/>
								</div>
							</div>
							<div class="uinArea" style="margin-left: 20px">
								<input type="checkbox" name="checkREM" />
								<span style="font-size: 16px;color: #AAA">&nbsp;记住密码</span>


							</div>
							<div style="padding-left:50px;margin-top:20px;">
								<input type="submit" value="登 录" style="width:150px;" class="button_blue"/>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--登录end-->
		</div>
	</div>
</body>
</html>

<?php }} ?>
