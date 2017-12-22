<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 10:25:53
         compiled from "D:\PhpStormWork\test\blog\Application\View\Home\Articles\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2596559bf8738478d90-13609446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9834a071cb5c2146eaf83a619c604837bff4e5e0' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Home\\Articles\\detail.html',
      1 => 1505960658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2596559bf8738478d90-13609446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59bf87384f99d3_30796619',
  'variables' => 
  array (
    'articleData' => 0,
    'shang' => 0,
    'xia' => 0,
    'commentsList' => 0,
    'comment' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf87384f99d3_30796619')) {function content_59bf87384f99d3_30796619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PhpStormWork\\test\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="./Public/home/css/detail.css" rel="stylesheet">
<script>

    jQuery(document).ready(function ($) {
        $('.check_login').click(function () {

            var userinfo  = document.getElementById('user_info').value;
            if(userinfo === "1"){
                $('.theme-popover-mask').fadeIn(100);
                $('.theme-popover').slideDown(200);
			}
        })
        $('.theme-poptit .close').click(function () {
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        })
    })

</script>
<div id="main" class="add">

	<div class="show-module-wrap clearfix"></div>
	    
 	<div class="main-content clearfix">
   		
     	<div class="main-content-box fl">
          
			<div class="article-list">
				<div class="content-text-box">
					<!-- content-header -->
		 			<h1 class="title-h1">
		 				<?php echo $_smarty_tpl->tpl_vars['articleData']->value[0]['title'];?>

		 			</h1>
		 			<div class="detail-info-box">
			            <ul class="clearfix">
			               	<li>
			               		编辑时间：<span class="date-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articleData']->value[0]['created_time'],'Y-m-d H:i');?>
</span>
			               	</li>    
			               	<li id="Browse">
			               		浏览量：<span id="countnum"><?php echo $_smarty_tpl->tpl_vars['articleData']->value[0]['pv'];?>
</span>
			               	</li>
			               	<li>
			               		作者：<span class="author"><?php echo $_smarty_tpl->tpl_vars['articleData']->value[0]['author'];?>
</span>
			               	</li>
			            </ul>
				     </div>
					<!-- /content-header -->
				
					<!--内容-->
				    <div class="content">
						<?php echo $_smarty_tpl->tpl_vars['articleData']->value[0]['content'];?>

				    </div>
					<!--/内容-->
			    	
			    	<!---上一页下一页-->
				    <div class="page-wrap-box">
				    	<div class="page-text">
				    		上一篇：<a href="learn198.html"><?php echo $_smarty_tpl->tpl_vars['shang']->value['title'];?>
</a> <br>
				    		下一篇：<a href="/learn235.html"><?php echo $_smarty_tpl->tpl_vars['xia']->value['title'];?>
</a>
				    	</div>
				    </div>
			    	<!---/上一页下一页-->

			    	<!--评论--> 
					<div id="comment">
						<?php if (!empty($_smarty_tpl->tpl_vars['commentsList']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
						<div class="comment" style="margin-left: <?php echo 60*$_smarty_tpl->tpl_vars['comment']->value['level'];?>
px">
							<div class="c_fl">
								<img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['comment']->value['img'];?>
" width="55" height="55" />
							</div>
							<div class="c_fr">
								<a href="##" ><?php echo $_smarty_tpl->tpl_vars['comment']->value['uname'];?>
</a><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['created_time'],'m月d日 H:i');?>
</span>
								<a onclick="document.getElementById('comment_pid').value=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" class="check_login reply" href="#form">回复</a>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value;?>
" id="user_info">
								<p>
									<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

								</p>

							</div>
						</div>
						<?php } ?>
						<?php }?>

						<!--/评论-->


					</div>


	 			</div>
			</div>
   
    	</div>
   	</div>
	<form action="./index.php?p=home&c=Comments&a=add" method="post" id="form">
		<div class="comment">

			<input type="hidden" name="pid" value="0" id="comment_pid">
			<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['articleData']->value[0]['id'];?>
">
			<textarea name="content" id="text" cols="30" rows="10" style="width: 100%;height: 100px">

			</textarea><br/>
			<input type="submit" name="" value="提交评论" style="margin-left: 95%">
		</div>
	</form>

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


<!-- 配置文件 -->
<script type="text/javascript" src="./Public/common/UEditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./Public/common/UEditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('text',{
        minFrameWidth:400,
        toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|'
        ]]
    });

    //        function getContent() {
    //            //设置编辑器的内容
    //            //ue.setContent('hello');
    //            //获取html内容，返回: <p>hello</p>
    ////            var html = ue.getContent();
    ////            alert(html);
    //            //获取纯文本内容，返回: hello
    //            var txt = ue.getContentTxt();
    //
    //        }
</script>
</body>
</html>
<?php }} ?>
