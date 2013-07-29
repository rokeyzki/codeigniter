function formCheck(form)
{
	var txt = $.trim(form.text.value);
	if(!txt || txt == '' || txt.length < 4)
	{
		alert('请输入添加值'); 
		return false;
	}

}