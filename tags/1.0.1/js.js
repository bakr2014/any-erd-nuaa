// JavaScript Document;
// ajax 操作类;

function getget(url,node) {
	if (window.busy==true) setTimeout(function(){getget(url,node);},5);
	else get(url,node);
}

window.busy=false;
function get(url,node) {
	window.busy=true;
	xhr=createXHR();
	
	xhr.open("GET",url,true);
	xhr.onreadystatechange=function(){update(xhr,node)};
	xhr.send(null);
}

function update(xhr,node) {
	if (xhr.readyState==4) {
		node.innerHTML=xhr.responseText;
		window.busy=false;
	}
}

// create XMLHttpRequest Object;
function createXHR() {
	try {
		return new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch (e)
	{
		try {
			return new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e2) {
			try {
				return XMLHttpRequest();
			}
			catch (e3) {
				alert("failed");
				return null;
			}
		}
	}
}

function addLoadEvent(funcName)
{
    var oldOnload=window.onload;
	var numberOfArgs=arguments.length;
	var arg=arguments;

	window.onload=function()
	{
		//判断是否已经有事件需要执行
		if (typeof oldOnload =='function') oldOnload();
		
		//判断参数个数
		switch (numberOfArgs)
		{
			case 1:
				funcName();
				break;
			case 2:
				alert(arg[1]);
				break;
			case 3:
				funcName(arg[1],arg[2]);
				break;
			case 4:
				funcName(arg[1],arg[2],arg[3]);
				break;
			case 5:
				funcName(arg[1],arg[2],arg[3],arg[4]);
				break;
			case 6:
				funcName(arg[1],arg[2],arg[3],arg[4],arg[5]);
				break;
	}
    }
}
