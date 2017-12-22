<?php /* Smarty version Smarty-3.1-DEV, created on 2017-09-20 17:42:11
         compiled from "D:\PhpStormWork\test\blog\Application\View\Admin\Category\index.html" */ ?>
<?php /*%%SmartyHeaderCode:308959c237f33e3387-05769773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b29fec15ce1e447225c8502ac9ed5a2d93ed15e' => 
    array (
      0 => 'D:\\PhpStormWork\\test\\blog\\Application\\View\\Admin\\Category\\index.html',
      1 => 1505376574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308959c237f33e3387-05769773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cateList' => 0,
    'cate' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59c237f353e362_04127899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c237f353e362_04127899')) {function content_59c237f353e362_04127899($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PhpStormWork\\test\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Public/css/index.css">
    <script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body> 
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 分类列表
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
    <form action="#" method="post">
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
                        <th class="tc">ID</th>
                        <th>分类名称</th>
                        <th>排序</th>
                        <th>是否显示</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                    <tr>
                        <td class="tc"><?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
</td>
                        <td><a href=""><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['sort'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cate']->value['display']) {?>
                            <font color="green">是</font>
                            <?php } else { ?>
                            <font color="red">否</font>
                            <?php }?>
                        </td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cate']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td>
                            <a href="./index.php?p=admin&c=Category&a=update&id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
">修改</a>
                            <a href="javascript:if (confirm('确定删除【<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
】分类吗？')) { location.href= './index.php?p=admin&c=category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
' }">删除</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
    <div class="sfxfoot"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</div>
</body>
</html><?php }} ?>
