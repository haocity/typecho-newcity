function $d(ele) {
    return document.getElementById(ele);
}
$(document).ready(function() {
    Oneimg = new Object();
    var warp = document.createElement("div");
    var ele = '<div class="changerimg" onmousemove="showoneimg()" onmouseout="hideoneimg()" onclick="showoneimg()"><img  id="oneimgmenuimg" src="https://www.haotown.cn/usr/themes/newcity/img/imgmenu.png" style="width: 70px;"><div id="oneimgmenu"><div class="hcset"><p><input type="checkbox" id="hccolorswitch" onclick="hcswitch()" >背景颜色<input type="color" id="hccolor" value="#ffffff" /> </p><p id="hctmd" class="range">透明度 <input type="range" name="points" min="0" max="100"  id="hcsetrange" onmouseup="hcchangerrange()" onmouseout="hcchangerrange()" style="width: 70px;"/> </p></div><img src="https://www.haotown.cn/usr/themes/newcity/img/imgdown.png" title="下载/评论图片" style="width: 70px;"   onclick="DownImg()"><img src="https://www.haotown.cn/usr/themes/newcity/img/imgchanger.png" title="更换图片" style="width: 70px;" onclick="ChangerImg()"></div></div>';
    warp.innerHTML = ele;
    document.body.appendChild(warp);
    Oneimg.oneimg = getCookie("oneimg");
    Oneimg.postbg = getCookie("postbg");
    Oneimg.bgcolor = getCookie("bgcolor");
    Oneimg.bgcolorswitch = getCookie("bgcolorswitch");
    Oneimg.elebg = document.body;
    if (Oneimg.oneimg == "") {
        Oneimg.postbg = 82;
        document.cookie = "postbg=" + Oneimg.postbg + ";path=/";
        Oneimg.bgcolor = $d("hccolor").value;
        document.cookie = "bgcolor=" + Oneimg.bgcolor + ";path=/";
        Oneimg.oneimg = 2266;
        document.cookie = "oneimg=" + Oneimg.oneimg + ";path=/";
        Oneimg.bgcolorswitch = "false";
        document.cookie = "bgcolorswitch=" + Oneimg.bgcolorswitch + ";path=/";
    }
    $d("hcsetrange").value = Oneimg.postbg;
    hcchangerrange();
    if (document.body.clientWidth <= 767) {
        setInterval("hcchangerrange()", 300);
    }
    $d("hccolor").value = Oneimg.bgcolor;
    if (Oneimg.bgcolorswitch == "true") {
        $d("hccolorswitch").checked = true;
        hcchangercolor();
    } else {
        Oneimg.url = "https://t4.haotown.cn/img/bj@" + Oneimg.oneimg + ".jpg";
        Oneimg.elebg.style.backgroundImage = "url(" + Oneimg.url + ")";
    }
});

function showoneimg() {
    $d("oneimgmenu").style.display = "block";
    $d("oneimgmenuimg").style.display = "none";
}

function hideoneimg() {
    $d("oneimgmenu").style.display = "none";
    $d("oneimgmenuimg").style.display = "block";
    hcchangercolor();
}

function getCookie(Name) {
    var cookieName = encodeURIComponent(Name) + "=", returnvalue = "", cookieStart = document.cookie.indexOf(cookieName), cookieEnd = null;
    if (cookieStart > -1) {
        cookieEnd = document.cookie.indexOf(";", cookieStart);
        if (cookieEnd == -1) {
            cookieEnd = document.cookie.length;
        }
        returnvalue = decodeURIComponent(document.cookie.substring(cookieStart + cookieName.length, cookieEnd));
    }
    return returnvalue;
}

function ChangerImg() {
    Oneimg.oneimg = Math.round(Math.random() * 4358);
    document.cookie = "oneimg=" + Oneimg.oneimg + ";path=/";
    Oneimg.url = "https://t4.haotown.cn/img/bj@" + Oneimg.oneimg + ".jpg";
    Oneimg.elebg.style.backgroundImage = "url(" + Oneimg.url + ")";
}

function DownImg() {
    window.open("https://oneimg.haotown.cn/img.html?img=" + Oneimg.oneimg);
}

function hcchangercolor() {
    Oneimg.bgcolor = $d("hccolor").value;
    document.cookie = "bgcolor=" + Oneimg.bgcolor + ";path=/";
    hcswitch();
}

function hcchangerrange() {
    Oneimg.postbg = $d("hcsetrange").value;
    if (Oneimg.postbg < 1) {
        Oneimg.postbg == 0;
    }
    $("body").append('<style  type="text/css">.post {background-color:rgba(255,255,255,' + Oneimg.postbg / 100 + ");}</style>");
    document.cookie = "postbg=" + Oneimg.postbg + ";path=/";
}

function hcswitch() {
    var y = $d("hccolorswitch").checked;
    if (y == true) {
        document.cookie = "bgcolorswitch=true;path=/";
        Oneimg.elebg.style.backgroundColor = Oneimg.bgcolor;
        Oneimg.elebg.style.backgroundImage = "initial";
    } else {
        document.cookie = "bgcolorswitch=false;path=/";
        OneImg = "https://t4.haotown.cn/img/bj@" + Oneimg.oneimg + ".jpg";
        Oneimg.elebg.style.backgroundImage = "url(" + OneImg + ")";
    }
}