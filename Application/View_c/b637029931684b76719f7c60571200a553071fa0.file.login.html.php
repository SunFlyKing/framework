<?php /* Smarty version Smarty-3.1-DEV, created on 2017-10-28 08:47:31
         compiled from "D:\PhpStormWork\test\blog\Application\View\Admin\login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1268359f3d3a30ebf41-04126426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b637029931684b76719f7c60571200a553071fa0' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Admin\\login\\login.html',
      1 => 1505898704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268359f3d3a30ebf41-04126426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59f3d3a3460b31_05870273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f3d3a3460b31_05870273')) {function content_59f3d3a3460b31_05870273($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>带全屏背景图片轮播切换的注册登录页面 - JS代码网</title>
<meta name="keywords" content="jQuery背景全屏轮播,JS背景全屏轮播切换,注册登录页面,注册登录模板页面,注册登录HTML页面,注册登录HTML" />
<meta name="description" content="JS代码网提供带全屏背景图片轮播切换的注册登录页面下载" />
<meta charset="utf-8">
  <link rel="stylesheet" href="./Public/css/home.css">
  <link rel="stylesheet" href="./Public/css/login.css">
  <script src="./Public/js/jquery.min.js"></script>
  <script src="./Public/js/jquery-1.7.2.js"></script>
  <script>
      jQuery(document).ready(function($) {
          $('.theme-login').click(function(){
              $('.theme-popover-mask').fadeIn(100);
              $('.theme-popover').slideDown(200);
          })
          $('.theme-poptit .close').click(function(){
              $('.theme-popover-mask').fadeOut(100);
              $('.theme-popover').slideUp(200);
          })

      })
  </script>
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

  </div>
</div>
<div class="theme-buy" id="co">
  <span>点我登录哦</span>
  <a class="btn btn-primary btn-large theme-login " id="po" href="javascript:;">
    <i class="iconfont" id="plane">&#xe61d;</i>

  </a>
  <img src="./Public/img/fish.png" class="fish" />
</div>
<div class="theme-popover">
  <div class="theme-poptit" style="margin: 0 auto">
    <a href="javascript:;" title="关闭" class="close" style="text-decoration: none">×</a>
    <h3 style="color: #4d90fe;">想看我里面有什么?&nbsp;&nbsp;&nbsp;来,&nbsp;&nbsp;登录吧!</h3>
  </div>
  <div class="theme-popbod dform">

    <form action="./index.php?p=admin&c=login&a=login" method="post">
      <ul>
        <li>
          <input type="text" name="uname" class="text"/>
          <span><i class="iconfont icon" >&#xe600;</i></span>
        </li>
        <li>
          <input type="password " name="pwd" class="text"/>
          <span><i class="iconfont icon" >&#xe603;</i></span>
        </li>
        <li>
          <input type="text" class="code"  name="code"/>
          <span><i class="iconfont icon" >&#xe669;</i></span>
          <img onclick="this.src = this.src + Math.random()" src="./index.php?p=admin&c=login&a=captcha&t="
               style="cursor: pointer;"
               title="眼神不好，点击换一张？"
               alt="图片不存在则显示文字"
          >
        </li>
        <li>
          <input type="submit" value="立即登陆"/>
        </li>
      </ul>
    </form>
    <p><a href="./index.php?p=admin&c=login&a=regester" >用户注册</a></p>
  </div>
</div>
<p>
  &copy; 2016 Powered by 全栈&nbsp;&nbsp;
  <a href="http://www.itcast.cn/" target="_blank">PHP高级开发攻城狮</a>
</p>
</body>
</html>
<?php }} ?>
