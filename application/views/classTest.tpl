<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</html>