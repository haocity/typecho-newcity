Bcookie=new Object();
Bcookie.arr=new Array("#4ab0c6","#555656","#09b745","#f86141","#dede5a","#ffffff","#4d38d8","#fe67c1");
document.write("<div class='color-warp'>");
for (Bcookie.i=0;Bcookie.i<Bcookie.arr.length;Bcookie.i++) {
	document.write("<div class='color'><div class='color-main' style='background-color:"+Bcookie.arr[Bcookie.i]+"'    onclick='hcchangercolor(Bcookie.arr["+Bcookie.i+"])'></div></div>");
}

document.write("</div>");
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
    Bcookie.bgcolor=getCookie("bgcolor");
    if(Bcookie.bgcolor==""){
    	//console.log("没找到cookie")
		Bcookie.bgcolor==Bcookie.arr[0];
    	document.cookie="bgcolor="+Bcookie.bgcolor+";path=/";
	}
    
	hcchangercolor(Bcookie.bgcolor);
}
function hcchangercolor(color) {
	Bcookie.bgcolor=color;
   	document.body.style.backgroundColor=Bcookie.bgcolor;
    document.cookie="bgcolor="+Bcookie.bgcolor+";path=/"; 
 }


	
	

