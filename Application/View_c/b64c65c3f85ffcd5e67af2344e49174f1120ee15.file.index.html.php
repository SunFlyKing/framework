<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 21:34:50
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\Articles\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2061959bfa0232aa877-96988581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b64c65c3f85ffcd5e67af2344e49174f1120ee15' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\Articles\\index.html',
      1 => 1505914487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061959bfa0232aa877-96988581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bfa023766570_80711035',
  'variables' => 
  array (
    'articleList' => 0,
    'key' => 0,
    'article' => 0,
    'category_id' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfa023766570_80711035')) {function content_59bfa023766570_80711035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PhpStormWork\\test\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("../Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="./Public/css/index.css" rel="stylesheet">

<div id="main" class="add">

	<div class="show-module-wrap clearfix"></div>
	    
 	<div class="main-content clearfix">
   		
     	<div class="main-content-box fl">
          
			<div class="article-list">
				<ul class="list">
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['article']->key;
?>
					<li class="li-text clearfix <?php echo $_smarty_tpl->tpl_vars['key']->value==0 ? '' : 'new';?>
">
						<div class="news-img-box fl">
							<a href="./index.php?p=home&c=Articles&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
&category_id=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" target="_blank">
								<img class="news-list-img" src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
" width="215" height="144" alt="如何建立个人博客？">
							</a>
							<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
							<p class="hot">
								热<span class="triangle"></span>
							</p>
							<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==1) {?>
							<p class="hot">
								新<span class="triangle"></span>
							</p>
							<?php }?>
						</div>
						<div class="news-content fr">
							<h3 class="title-h3">
								<a href="./index.php?p=home&c=Articles&a=detail&category_id=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" target="_blank" >
									<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

								</a>
							</h3>
							<div class="author-info clearfix">
								<p class="author fl">
									<a href="/about/">
										<img src="./Public/home/img/author.png" width="33" height="33" alt="你大爷">
										<span><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</span>
									</a>
								</p>
								<span class="date-time fl">
									发布时间：
										<em>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_time'],'Y-m-d H:i');?>

										</em>
								</span>
								<span class="classify fl">
									分类：<a href="#/learn/"><?php echo $_smarty_tpl->tpl_vars['article']->value['cateName'];?>
</a>
								</span>
							</div>
							<p class="news-info">
								<?php echo $_smarty_tpl->tpl_vars['article']->value['desc'];?>

							</p>
						</div>
					</li>
					<?php } ?>

				</ul>
			</div>
           	
           	
            <div class="page-wrap-box">
				<div class="sfxfoot"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</div>
			</div>
    	</div>
   	</div>
      
	<footer class="footer-wrap">
	<p>
		<span>Design by：传值博客</span>
		<span>备案号：<strong>沪ICP备XXXXXXXX号-2</strong></span>
	</p>
</footer>
</div>
	
<div class="fixed-side-menu">
	<ul class="list">
		<li id="returnTop">
			<a class="ico-bg return-top" href="javascript:;">
			</a>
		</li>
		<li>
			<a class="ico-bg qq" href="http://wpa.qq.com/msgrd?v=3&amp;uin=88888888888&amp;site=qq&amp;menu=yes" target="_blank">
			</a>
		</li>
		<li id="wechatBoxWrap" class="wechat-box-wrap">
			<a class="ico-bg wechat" href="javascript:;"></a>
			<div class="wechat-img">
				<img src="./Public/home/img/weixin.png" width="150" height="135" alt="你大爷博客官方微信公众号">
			</div>
		</li>
	</ul>
</div>


      
	<script type="text/javascript" src="./Public/home/js/common.js"></script>
	<script type="text/javascript" src="./Public/home/js/index.js"></script>

</body>
</html>
<?php }} ?>
