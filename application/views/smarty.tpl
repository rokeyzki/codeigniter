<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>smarty安装测试</title>
</head>
<body>
<h1>{{$title}}</h1>
<p>{{$body}}</p>
<ul>
{{foreach from=$myarray item=v}}
<li>{{$v}}</li>
{{/foreach}} 
</ul>
</body>
</html>