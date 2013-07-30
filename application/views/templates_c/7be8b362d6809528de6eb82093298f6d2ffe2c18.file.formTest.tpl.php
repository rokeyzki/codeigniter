<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 21:40:10
         compiled from "application\views\formTest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158951f6259ae8c466-05152124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be8b362d6809528de6eb82093298f6d2ffe2c18' => 
    array (
      0 => 'application\\views\\formTest.tpl',
      1 => 1375191220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158951f6259ae8c466-05152124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f6259ba552e0_22958262',
  'variables' => 
  array (
    'title' => 0,
    'link' => 0,
    'link3' => 0,
    'link2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f6259ba552e0_22958262')) {function content_51f6259ba552e0_22958262($_smarty_tpl) {?><h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
<form name="formTest" action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
	内容：<input type="text" name="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="添加" onclick="return formCheck(formTest);">
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
"></script><?php }} ?>