<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 11:05:37
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\Common\header.html" */ ?>
<?php /*%%SmartyHeaderCode:553859bf8738584369-86338130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ca42af8be918664c91048e59096044d69d204e' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\Common\\header.html',
      1 => 1505963010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553859bf8738584369-86338130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf8738635142_73706663',
  'variables' => 
  array (
    'categoryList' => 0,
    'cate' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf8738635142_73706663')) {function content_59bf8738635142_73706663($_smarty_tpl) {?><!--
参考：http://www。duanliang920。com
-->
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="utf8">
    <title>吃饭睡觉打豆豆</title>
    <meta name="keywords" content="请问楼上322是马冬梅家么">
    <meta name="description" content="PHP高级开发攻城狮个人博客，是记录博主学习和成长的一个自媒体博客。">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="Window-target" content="_top">
    <link href="./Public/home/css/common.css" rel="stylesheet">
    <link href="./Public/home/css/log.css" rel="stylesheet">
    <link href="./Public/home/css/index.css" rel="stylesheet">
    <link href="./Public/css/index.css" rel="stylesheet">
    <script src="./Public/js/jquery.min.js"></script>
    <script src="./Public/js/jquery-1.7.2.js"></script>

    <script>
    function login() {
    jQuery(document).ready(function ($) {
        $('.theme-login').click(function () {
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        })
        $('.theme-poptit .close').click(function () {
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        })
    })

}

    </script>
</head>
<body>

<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3>亲,请登录哦.............</h3>
    </div>
    <div class="theme-popbod dform">

        <form action="./index.php?p=home&c=login&a=login" name="loginform" method="post">
            <ul>
                <li>
                    <input type="text" name="username" class="text"/>
                    <span><i class="iconfont">&#xe697;</i></span>
                </li>
                <li>
                    <input type="password" name="pwd" class="text"/>
                    <span><i class="iconfont">&#xe624;</i></span>
                </li>
                <li>
                    <input type="text" class="code" name="code"/>
                    <span><i class="iconfont">&#xe660;</i></span>
                    <img onclick="this.src = this.src + Math.random()" src="./index.php?p=admin&c=login&a=captcha&t="
                         style="cursor: pointer;"
                         title="眼神不好，点击换一张？"
                         alt="图片不存在则显示文字"
                    >
                </li>
                <li>
                    &nbsp;&nbsp; <input type="checkbox" name="checkREM" />&nbsp;&nbsp;&nbsp;记住密码
                </li>
                <li>
                    <input type="submit" value="立即登陆"/>
                </li>
            </ul>
        </form>
    </div>
</div>

<header>
    <div class='fl'>
        <a href="/" class="logo"><h1>个人博客</h1></a>
    </div>
    <div class='fr'>
        <?php if (empty($_SESSION['home_userinfo'])) {?>
        <a class="theme-login" href="javascript:login();">登陆</a> |
        <a href="./index.php?p=home&c=login&a=regester">注册</a>
        <?php } else { ?>
        <a href="">hi,<?php echo $_SESSION['home_userinfo']['uname'];?>
</a>
        |
        <a href="./index.php?p=home&c=login&a=loginout" >退出</a>
        <?php }?>

    </div>
</header>
<nav id="nav" class="nav-wrap">
    <ul class="clearfix">
        <li><a href="./index.php?p=home&c=index&a=index" id="<?php echo !empty($_GET['articles_id']) ? '' : 'active';?>
" name="fir">首页</a></li>
        <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
        <li><a href="./index.php?p=home&c=Articles&a=index&articles_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
" target="_blank" id="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['cate']->value['id']==$_tmp1 ? 'active' : '';?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
 </a></li>
        <?php } ?>
        <li id="navEnd"><a href="./index.php?p=home&c=Message&a=index">留言版</a></li>
    </ul>
</nav><?php }} ?>
