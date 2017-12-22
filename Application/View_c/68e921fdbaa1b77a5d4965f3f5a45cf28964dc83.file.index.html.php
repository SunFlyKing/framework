<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 16:00:21
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2734659c21d312c6538-80257979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e921fdbaa1b77a5d4965f3f5a45cf28964dc83' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\index\\index.html',
      1 => 1505975251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2734659c21d312c6538-80257979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c21d3161f351_01185880',
  'variables' => 
  array (
    'imgData' => 0,
    'img' => 0,
    'articledata' => 0,
    'key' => 0,
    'article' => 0,
    'str' => 0,
    'tuijianData' => 0,
    'tuijian' => 0,
    'commentData' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c21d3161f351_01185880')) {function content_59c21d3161f351_01185880($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PhpStormWork\\test\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="main">
	<div id="banner" class="banner-wrap clearfix">

    	<div class="banner-left fl">
     		<div id="bannerContent" class="content">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                	<li>
                		<a href="javascript:;">
                			<img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['img']->value['img'];?>
" width="480" height="300" alt="">
                		</a>
                	</li>
					<?php } ?>
				</ul>
			</div>
			<div class="switch-btn-box">
				<div class="hover-bg"></div>
				<ul id="switchBtn">
					<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
            		<li>
            			<a href="javascript:;">
            				<img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['img']->value['img'];?>
" width="100" height="50">
            			</a>
            		</li>
					<?php } ?>

				</ul>
			</div>
     	</div>

     	<div class="banner-right fr">
      		<p class="banner-right-text">
				老陈喜欢大保剑，<br /><br />所以他玩德玛西亚.
      			<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--老陈！
      		</p>
   		</div>
	</div>

	<div class="show-module-wrap clearfix"></div>

 	<div class="main-content clearfix">

     	<div class="main-content-box fl">
           	<h2 class="title-h2">
           		文章推荐
           	</h2>

			<div class="article-list">
				<ul class="list">
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articledata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['article']->key;
?>
					<li class="li-text clearfix <?php echo $_smarty_tpl->tpl_vars['key']->value==0 ? '' : 'new';?>
">
						<div class="news-img-box fl">
							<a href="#/learn232.html" target="_blank">
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
								<a href="./index.php?p=home&c=Articles&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" target="_blank">
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

     	<div class="main-content-side fr">

     		<div id="searchBox">
	     		<h2 class="title-h2">
	           		站内搜索
	           	</h2>
	           	<div class="search-wrap">
		   			<form name="formsearch" action="/plus/search.php" method="post">
				        <input name="q" type="text" id="searchValue" class="search-value" placeholder="请输入你需要的内容">
				        <input class="search-btn" type="submit" value="">
				    </form>

	           	</div>
           	</div>

        	<div class="side-nav">
          		<ul class="clearfix">
          			<li class="nav-1">
          				<a href="/about/">关于我</a>
          			</li>
          			<li class="nav-2">
          				<a href="/video/">视频教程</a>
          			</li>
          			<li class="nav-3">
          				<a href="/learn/">SEO优化</a>
          			</li>
          			<li class="nav-4">
          				<a href="/Guestbook/">留言版</a>
          			</li>
          		</ul>
          	</div>
	       	<div class="concern-blog">
	       		<h2 class="title-h2">
		       		关注博客
		       	</h2>
				<ul class="list">
					<li class="clearfix">
						<p class="title fl">
							邮箱订阅：
						</p>
						<a class="bg-ico ico-1 fl" href="http://list.qq.com/cgi-bin/qf_invite?id=111" title="关注传值博客" target="_blank" rel="nofollow">
						</a>
					</li>
					<li class="clearfix">
						<p class="title fl">
							联系你大爷:
						</p>
						<a class="bg-ico ico-2 fl" href="##" title="联系传值" target="_blank" rel="nofollow">
						</a>
					</li>
					<li class="clearfix">
						<p class="title fl">
							加入群聊：
						</p>
						<a class="bg-ico ico-3 fl" href="http://shang.qq.com/wpa/qunwpa?idkey=xxx" title="PHP高级开发" target="_blank" rel="nofollow">
						</a>
					</li>
					<li class="clearfix">
						<p class="title fl">
							关注微博：
						</p>
						<a class="ico-4 fl" href="http://weibo.com/u/xxxx" title="关注传值博客官方新浪微博" target="_blank" rel="nofollow">
						</a>
					</li>
				</ul>
	        </div>

	        <div class="hot-recommend-wrap">
				<h2 class="title-h2">热门推荐</h2>
	            <div id="hotRecommend" class="hot-recommend">
	                <div class="hot-recommend-content">
		                <div class="list">
		                    <ul>
								<?php  $_smarty_tpl->tpl_vars['tuijian'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tuijian']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tuijianData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tuijian']->key => $_smarty_tpl->tpl_vars['tuijian']->value) {
$_smarty_tpl->tpl_vars['tuijian']->_loop = true;
?>
								<li>
									<a href="./list.html" title="1111">
										<?php echo $_smarty_tpl->tpl_vars['tuijian']->value['title'];?>

									</a>
								</li>
								<?php } ?>

		                    </ul>
		                </div>
		            </div>
	            </div>
	        </div>


	        <div class="along-the-way">
	        	<h2 class="title-h2">最新评论</h2>
	           	<ul class="list">
					<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
	           		<li>
	           			<p class="date-time">
	           				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['created_time'],'Y-m-d');?>

	           			</p>
	           			<p class="content-text">
	           				<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

	           			</p>
	           		</li>
					<?php } ?>

	           	</ul>
	        </div>

	        <div class="link-wrap">
	        	<h2 class="title-h2">
	           		友情链接
	           	</h2>
                <ul class="list clearfix">
                    <li>
                    	<a href="hxxxx" target="_blank" title="网站模板">
                    		网站模板
                    	</a>
                    </li>
                    <li>
                    	<a href="http://www.itcast.cn" target="_blank" title="传值博客">
                    		传值博客
                    	</a>
                    </li>
                 	<li>
                 		<a href="http://bbs.0dianidc.com/" target="_blank" title="站长论坛">
                 			站长论坛
                 		</a>
                 	</li>
                 	<li>
                 		<a href="http://www.xxx.com/" target="_blank" title="xx">
                 			你爸爸博客
                 		</a>
                 	</li>
                 	<li>
                 		<a href="http://www.xx.com/" target="_blank" title="你爸爸博客">
                 			嘿嘿
                 		</a>
                 	</li>
                </ul>
	        </div>

        </div>
   	</div>
	<footer class="footer-wrap">
	<p>
		<span>Design by：天下第一德玛老陈</span>
		<span>备案号：<strong>沪ICP备NB8ZNB号-2</strong></span>
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
