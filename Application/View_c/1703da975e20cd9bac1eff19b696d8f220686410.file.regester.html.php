<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 20:03:38
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\Login\regester.html" */ ?>
<?php /*%%SmartyHeaderCode:972359c217fca936c6-82511976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1703da975e20cd9bac1eff19b696d8f220686410' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\Login\\regester.html',
      1 => 1505909013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972359c217fca936c6-82511976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c217fcac9448_92020142',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c217fcac9448_92020142')) {function content_59c217fcac9448_92020142($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>带全屏背景图片轮播切换的注册登录页面 - JS代码网</title>
<meta name="keywords" content="jQuery背景全屏轮播,JS背景全屏轮播切换,注册登录页面,注册登录模板页面,注册登录HTML页面,注册登录HTML" />
<meta name="description" content="JS代码网提供带全屏背景图片轮播切换的注册登录页面下载" />
<meta charset="utf-8">
<link href="./Public/css/home.css?v=2" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="./Public/js/jquery-1.7.2.js"></script>
</head>
<body>
<div class="wrap">
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con"> </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con"> <a href="http://www.js-css.cn" target="_blank" class="banner-link"> <i>圈子</i></a> </div>
    </div>
    <div class="cell bns-03" style="display:none;">
      <div class="con"> <a href="http://www.js-css.cn" target="_blank" class="banner-link"> <i>企业云</i></a> </div>
    </div>
  </div>
  <div class="banner-control" id="js_ban_button_box"> <a href="javascript:;" class="left">左</a> <a href="javascript:;" class="right">右</a> </div>
  <script type="text/javascript">
                ;(function(){
                    
                    var defaultInd = 0;
                    var list = $('#js_ban_content').children();
                    var count = 0;
                    var change = function(newInd, callback){
                        if(count) return;
                        count = 2;
                        $(list[defaultInd]).fadeOut(400, function(){
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                        $(list[newInd]).fadeIn(400, function(){
                            defaultInd = newInd;
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                    }
                    
                    var next = function(callback){
                        var newInd = defaultInd + 1;
                        if(newInd >= list.length){
                            newInd = 0;
                        }
                        change(newInd, callback);
                    }
                    
                    var start = function(){
                        if(start.timer) window.clearTimeout(start.timer);
                        start.timer = window.setTimeout(function(){
                            next(function(){
                                start();
                            });
                        }, 8000);
                    }
                    
                    start();
                    
                    $('#js_ban_button_box').on('click', 'a', function(){
                        var btn = $(this);
                        if(btn.hasClass('right')){
                            //next
                            next(function(){
                                start();
                            });
                        }
                        else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                                newInd = list.length - 1;
                            }
                            change(newInd, function(){
                                start();
                            });
                        }
                        return false;
                    });
                    
                })();
            </script>
  <div class="container">
    <div class="register-box">
      <form action="./index.php?p=home&c=Login&a=regester" method="post" enctype="multipart/form-data">
      <div class="reg-slogan"> 新用户注册</div>
      <div class="reg-form" id="js-form-mobile"> <br>
        <br>

        <div class="cell">

          <input type="text" name="uname" id="js-mobile_ipt" class="text" maxlength="11" placeholder="请输入姓名" />
        </div>
        <div class="cell">

          <input type="password" name="pwd" id="js-mobile_pwd_ipt" class="text" placeholder="请输入密码"/>

          </div>
        <div class="cell">

          <input type="password" name="conpwd" id="js-mobile_pwd_ipt" class="text" placeholder="请确认密码"/>

        </div>
        <div id="im" >
        <span>&nbsp;&nbsp;头像:</span><input type="file" id="file1" onchange="previewFile(1)" name="img"style="margin-left: 20px">
        <img src="" id="img1"  width="100" style="float: left;margin-left: 15px;margin-top: 5px"/>
        <script language=javascript>
            function previewFile(num) {
                var preview = document.querySelector('#img'+num);
                var file  = document.querySelector('#file'+num).files[0];
                //HTML5定义了FileReader作为文件API的重要成员用于读取文件
                var reader = new FileReader();
                console.log(reader);
                reader.onloadend = function () {
                    preview.src = reader.result;
                }
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = "";
                }
            }
        </script>
        </div>
        <!-- !验证码 -->
        <div class="cell vcode">

          <input type="text" name="code" id="js-mobile_vcode_ipt" class="text" maxlength="6" placeholder="请输入验证码"/>
          <img onclick="this.src = this.src + Math.random()" src="./index.php?p=home&c=login&a=captcha&t="
               style="cursor: pointer;"
               title="眼神不好，点击换一张？"
               alt="图片不存在则显示文字"
          > </div>
        <div class="bottom"><input type="submit" value="立即注册" class="botton"></div>
      </div>

    </form>
    </div>
</div>
</body>
</html>
<?php }} ?>
