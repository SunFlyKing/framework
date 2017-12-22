<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 18:29:52
         compiled from "D:\PhpStormWork\test\blog\Application\View\Admin\Users\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3214859c242c9a81847-09144933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260d3f9dff6c0f02c2dffc49b7b070d909982ef6' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Admin\\Users\\index.html',
      1 => 1505903389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3214859c242c9a81847-09144933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c242c9afaad8_50393505',
  'variables' => 
  array (
    'usersData' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c242c9afaad8_50393505')) {function content_59c242c9afaad8_50393505($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PhpStormWork\\test\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/css/index.css">
    <!--<link rel="stylesheet" href="./Public/css/login.css">-->
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
    <!--<script type="text/javascript" src="./Public/admin/js/jquery.js"></script>-->
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>

    <script type="text/javascript" language="javascript">
        function selectBox(selectType){
            var checkboxis = document.getElementsByName("del_id[]");
            if(selectType == "reverse"){
                for (var i=0; i<checkboxis.length; i++){
                    //alert(checkboxis[i].checked);
                    checkboxis[i].checked = !checkboxis[i].checked;
                }
            }
            else if(selectType == "all")
            {
                for (var i=0; i<checkboxis.length; i++){
                    //alert(checkboxis[i].checked);
                    checkboxis[i].checked = true;
                }
            }
        }
    </script>
</head>
<body> 
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <div class="left">
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 前台用户列表

        </div>


    </div>
    <!--面包屑导航 结束-->
    
	<!--结果页快捷搜索框 开始  独立开发
	<div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="78">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>-->
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="./index.php?p=admin&c=users&a=deleteall" method="post"  onsubmit="return checkF(this)">
        <div class="result_wrap">
            <!--快捷导航 开始 独立开发
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>-->
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <!--
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <th class="tc">排序</th>
                        -->
                        <!--<th><input type="submit" value="批量删除" name="submit"></th>-->
                        <th width="100px" style="text-align: center">
                                <input type="radio" value="全选" name="choose" onClick="selectBox('all')"/>全选
                                <input type="radio" value="反选" name="choose" onClick="selectBox('reverse')"/>反选
                                <input type="submit" name="btnSave" value="删除"/>
                        </th>
                        <th class="tc">ID</th>
                        <th>用户名称</th>
                        <th>缩略图</th>

                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                    <tr>
                        <!--
                        <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                        <td class="tc">
                            <input type="text" name="ord[]" value="0">
                        </td>
                        -->
                        <td style="text-align: center">
                            <input type="checkbox" name="del_id[]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />

                        </td>
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</td>
                        <td>
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['uname'];?>
</a>
                        </td>
                        <td >
                            <img src="./Public/upload/<?php echo $_smarty_tpl->tpl_vars['article']->value['uimg'];?>
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

                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_time'],'Y-m-d H:i');?>
</td>
                        <td>
                            <a href="./index.php?p=admin&c=admins&a=update&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">修改</a>
                            <a href="javascript:if (confirm('确定删除【<?php echo $_smarty_tpl->tpl_vars['article']->value['uname'];?>
】吗?')){ location.href='./index.php?p=admin&c=users&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
' }">删除</a>
                        </td>
                        <?php } ?>
                    </tr>

                </table>

                </div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
