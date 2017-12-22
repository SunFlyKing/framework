<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 18:28:22
         compiled from "D:\PhpStormWork\test\blog\Application\View\Admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1270559bfbffa0b8164-21050995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301abcd96bcdd04a00fb118b4ab723323b13e6ea' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Admin\\Index\\index.html',
      1 => 1505903298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270559bfbffa0b8164-21050995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bfbffa3f16b7_11669831',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfbffa3f16b7_11669831')) {function content_59bfbffa3f16b7_11669831($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
	<script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body> 
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">博客管理后台</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：<?php echo $_SESSION['admin_userinfo']['uname'];?>
</li>
				<!-- 独立开发
				<li><a href="pass.html" target="main">修改密码</a></li>
				-->
				<li><a href="./index.php?p=admin&c=Login&a=loginOut">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>
                <ul class="sub_menu">
                    <li><a href="./index.php?p=admin&c=Articles&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
                    <li><a href="./index.php?p=admin&c=Articles&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>
                <ul class="sub_menu">
                    <li><a href="./index.php?p=admin&c=Category&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
                    <li><a href="./index.php?p=admin&c=Category&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>用户管理</h3>
                <ul class="sub_menu">
                    <li><a href="./index.php?p=admin&c=Admins&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>后台用户列表</a></li>
                    <li><a href="./index.php?p=admin&c=Users&a=index" target="main"><i class="fa fa-fw fa-list-ul"></i>前台用户列表</a></li>
                </ul>
            </li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="./index.php?p=admin&c=index&a=welcome" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2017. Powered By <a href="http://www.itcast.cn">http://www.itcast.cn</a>.
	</div>
	<!--底部 结束-->
</body>
</html><?php }} ?>
