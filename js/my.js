 function sendmessage(text){
    var ele=document.createElement("div");
    ele.className='message';
    ele.innerText=text;
    ele.style.display='block';
    document.body.appendChild(ele);
    setTimeout(function () {
        ele.remove();
    },4000)
    }

function insertFace(id) {
    //插入函数
    var textname = document.getElementById('textarea');
    var textid = textname;
    //插入到name为message的第一个标签
    //兼容IE
    faceele = '<img src="https://t4.haotown.cn/face/tieba/32/' + id + '.png">';
    if (document.selection) {
        textid.focus();
        sel = document.selection.createRange();
        sel.text = faceele;
        sel.select();
    } else if (textid.selectionStart || textid.selectionStart == "0") {
        var startPos = textid.selectionStart;
        var endPos = textid.selectionEnd;
        var restoreTop = textid.scrollTop;
        textid.value = textid.value.substring(0, startPos) + faceele + textid.value.substring(endPos, textid.value.length);
        if (restoreTop > 0) {
            textid.scrollTop = restoreTop;
        }
        textid.focus();
        textid.selectionStart = startPos + faceele.length;
        textid.selectionEnd = startPos + faceele.length;
    } else {
        textid.value += faceele;
        textid.focus();
    }
}