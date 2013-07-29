<?php /* Smarty version Smarty-3.1.14, created on 2013-07-29 14:15:37
         compiled from "application\views\classTest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:466351f671d2c4e6c4-74862376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1002384b0162fbf73707e583d016d074af99be19' => 
    array (
      0 => 'application\\views\\classTest.tpl',
      1 => 1375107326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '466351f671d2c4e6c4-74862376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f671d31cea49_38923488',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f671d31cea49_38923488')) {function content_51f671d31cea49_38923488($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>自定义库加载测试</title>
</head>
<body>
<p id='test'>jquery加载测试</p>
<input type="button" value="显示" onclick="return pShow();"><input type="button" value="隐藏" onclick="return pHide();">
<script type="text/javascript">
	function pShow () 
	{
		$('#test').show();  
	}
	
	function pHide () 
	{
		$('#test').hide();  
	}
	
</script>
<br/><br/><br/>
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