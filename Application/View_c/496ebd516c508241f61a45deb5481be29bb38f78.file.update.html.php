<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-21 16:12:55
         compiled from "D:\PhpStormWork\test\blog\Application\View\Admin\Articles\update.html" */ ?>
<?php /*%%SmartyHeaderCode:2943459c374870f9ca8-32164858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '496ebd516c508241f61a45deb5481be29bb38f78' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Admin\\Articles\\update.html',
      1 => 1505614198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2943459c374870f9ca8-32164858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleList' => 0,
    'categoryList' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c374872aa6d5_68334828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c374872aa6d5_68334828')) {function content_59c374872aa6d5_68334828($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp"> 
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 修改文章
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="#" method="post">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['id'];?>
" name="id">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>分类：</th>
                        <td>
                            <select name="cid">
                                <option value="">==请选择==</option>
                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['cid']==$_smarty_tpl->tpl_vars['category']->value['id'] ? 'selected' : '';?>
><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['category']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="title" value="<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['title'];?>
">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td height="110px">
                            <input type="file" id="file1" onchange="previewFile(1)" name="img" value="<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['img'];?>
"><br>
                            <img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['img'];?>
" id="img1"  width="100" alt="预览"/>
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
                        </td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td>
                            <input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['author'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="desc" vocab="<?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['desc'];?>
"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                        <td>
                            <textarea class="lg" name="content" id="text"><?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['content'];?>
</textarea >
                        </td>
                    </tr>
                    <tr>
                        <th title="推荐将在首页显示">是否推荐：</th>
                        <td>
                            <label ><input type="radio" name="is_tuijian" value="1" <?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['is_tuijian']==1 ? 'checked' : '';?>
>推荐</label>
                            <label ><input type="radio" name="is_tuijian" value="0" <?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['is_tuijian']==0 ? 'checked' : '';?>
>不推荐</label>
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <label ><input type="radio" name="display" value="0" <?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['display']==0 ? 'checked' : '';?>
>隐藏</label>
                            <label><input type="radio" name="display" value="1" <?php echo $_smarty_tpl->tpl_vars['articleList']->value[0]['display']==1 ? 'checked' : '';?>
>显示</label>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交" onclick="getContent()">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <!-- 配置文件 -->
    <script type="text/javascript" src="./Public/common/UEditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="./Public/common/UEditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('text');
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
</html><?php }} ?>
