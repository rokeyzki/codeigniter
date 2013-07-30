/**
 * @author rokeyzki
 */
function ajax(link)
{
	var test='ajax 测试';
	//alert('test');
	$.post(link,{test:test},function(data){
		data = eval(data);
        $("#ajaxContent").html('<font color="red">'+data[3]+'</font>&nbsp;<font color="blue">'+data[0]+'</font>');
    });
}