<?php /* Smarty version Smarty-3.1.14, created on 2013-07-27 08:04:15
         compiled from "application\views\dbtest_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2994951f379c78bfaf0-03119133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '795952810a31cbb92d8d219a459073f92b944b34' => 
    array (
      0 => 'application\\views\\dbtest_add.tpl',
      1 => 1374912222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994951f379c78bfaf0-03119133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f379c7b46356_89849068',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f379c7b46356_89849068')) {function content_51f379c7b46356_89849068($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
	<input type="input" name="txt"> &nbsp;&nbsp; <input type="submit" value="提交">
</form><?php }} ?>