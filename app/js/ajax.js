var xmlhttp;
function AJAX(url){
	xmlhttp=null;
	if (window.XMLHttpRequest){// code for all new browsers
	  	xmlhttp=new XMLHttpRequest();
	}else if (window.ActiveXObject){// code for IE5 and IE6
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");	}
	if (xmlhttp!=null){
	  	xmlhttp.onreadystatechange=state_Change;
	  	xmlhttp.open("GET",url,true);
	  	xmlhttp.send(null);
	}else{	  
		alert("浏览器支持XMLHTTP对象");	
		}}
	function state_Change(){
	if (xmlhttp.readyState==4){// 4 = "异步请求成功"
		if (xmlhttp.status==200){// 200 = OK
			var o = document.getElementById("span9");	
		var str = xmlhttp.responseText;
			o.innerHTML = str;
		}else{
			alert("服务器出错异步请求失败");
		}
	}}
