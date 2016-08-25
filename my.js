Bcookie=new Object();
function showoneimg() {
	document.getElementById('oneimgmenu').style.display='block';
        document.getElementById('oneimgmenuimg').style.display='none';
}

function hideoneimg() {
	document.getElementById('oneimgmenu').style.display='none';
        document.getElementById('oneimgmenuimg').style.display='block';
        hcchangercolor()
}

function getCookie(Name) {
	var cookieName = encodeURIComponent(Name) + "=",  
        returnvalue = "",
        cookieStart=document.cookie.indexOf(cookieName),
        cookieEnd=null;
    if (cookieStart>-1) {
        cookieEnd = document.cookie.indexOf(";",cookieStart);
        if (cookieEnd == -1){
            cookieEnd = document.cookie.length;
}

returnvalue=decodeURIComponent(document.cookie.substring(cookieStart+cookieName.length, cookieEnd));
}

return returnvalue;
}

window.onload=function() {
Bcookie.oneimg=getCookie("oneimg");
    Bcookie.postbg=getCookie("postbg");
    Bcookie.bgcolor=getCookie("bgcolor");
    Bcookie.bgcolorswitch=getCookie("bgcolorswitch");

    if(Bcookie.oneimg==""){
    	//console.log("没找到cookie")
    	Bcookie.postbg=45;
    	document.cookie="postbg="+Bcookie.postbg+";path=/"; 
    	Bcookie.bgcolor = document.getElementById("hccolor").value;
    	document.cookie="bgcolor="+Bcookie.bgcolor+";path=/"; 
    	Bcookie.oneimg=718;
    	document.cookie="oneimg="+Bcookie.oneimg+";path=/"; 
    	Bcookie.bgcolorswitch="false";
    	document.cookie="bgcolorswitch="+Bcookie.bgcolorswitch+";path=/";
	}

	//console.log("执行状态");
	document.getElementById("hcsetrange").value=Bcookie.postbg;
	hcchangerrange();
	//判断页面宽度 手机版使用定时方式调整透明度
	if(document.body.clientWidth<=767)
	{
		setInterval('hcchangerrange()',300)
	}
	
	document.getElementById("hccolor").value=Bcookie.bgcolor;
	if(Bcookie.bgcolorswitch=="true") {
	document.getElementById("hccolorswitch").checked=true;
	hcchangercolor();
	}
	
else {
//console.log("加载一图图片");
		Bcookie.url = "https://t4.haotown.cn/img/bj@" + Bcookie.oneimg + ".jpg";
	    document.getElementById("oneimg").style.backgroundImage = "url(" + Bcookie.url + ")";
}
	}

function ChangerImg() {
Bcookie.oneimg=Math.round(Math.random() *4358);
        document.cookie="oneimg="+Bcookie.oneimg+";path=/"; 
        Bcookie.url = "https://t4.haotown.cn/img/bj@" + Bcookie.oneimg + ".jpg";
        document.getElementById("oneimg").style.backgroundImage= "url(" + Bcookie.url + ")";
        //console.log('图片以改变 序列号为'+Bcookie.oneimg);
}

function DownImg() {
window.open("https://app.haotown.cn/img.html?img=" +Bcookie.oneimg);
}

function hcchangercolor() {
Bcookie.bgcolor = document.getElementById("hccolor").value;
    document.cookie="bgcolor="+Bcookie.bgcolor+";path=/"; 
    hcswitch()
}

function hcchangerrange() {
Bcookie.postbg= document.getElementById("hcsetrange").value;
		if (Bcookie.postbg<1){Bcookie.postbg==0
}
		//改变样式表
var oStyleSheet=document.styleSheets[0];
		var oRule=oStyleSheet.rules[0];
		oRule.style.backgroundColor='rgba(255,255,255,'+Bcookie.postbg/100+')';
		oStyleSheet.rules[1].style.backgroundColor='rgba(255,255,255,'+Bcookie.postbg/100+')';
		document.cookie="postbg="+Bcookie.postbg+";path=/";
}

function hcswitch() {
//console.log(" hcswitch执行");
		var y= document.getElementById("hccolorswitch").checked;
		//console.log("y="+y);
		if(y==true){
			//console.log("开启背景颜色模式");
			document.cookie="bgcolorswitch=true;path=/"; 
			document.getElementById("oneimg").style.backgroundColor =Bcookie.bgcolor;
			document.getElementById("oneimg").style.backgroundImage = "initial";
}

else {
//console.log("关闭背景颜色模式");
			document.cookie="bgcolorswitch=false;path=/"; 
			OneImg = "https://t4.haotown.cn/img/bj@" + Bcookie.oneimg + ".jpg";
			document.getElementById("oneimg").style.backgroundImage = "url(" + OneImg + ")";
			//console.log("加载图片ing");
}
		
}
	
	
	

