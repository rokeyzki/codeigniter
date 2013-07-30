<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 21:36:44
         compiled from "application\views\smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907151f0c0ec51d794-33769324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598be22de3e41508e9e14ac7698f515d0a2648c5' => 
    array (
      0 => 'application\\views\\smarty.tpl',
      1 => 1375191222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907151f0c0ec51d794-33769324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f0c0ec9a3871_04562967',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
    'myarray' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0c0ec9a3871_04562967')) {function content_51f0c0ec9a3871_04562967($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>smarty安装测试</title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p>
<ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
<?php } ?> 
</ul>
<p class="text-success"><i class="icon-book"></i>bootstrap test.</p>
<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">查看演示案例</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…test</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

</body>
</html><?php }} ?>