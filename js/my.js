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
function pagenumber() {
  var near = document.getElementsByClassName('post-near')[0];
  if (near) {
    var last = near.childNodes[1];
    var next = near.childNodes[3];
    var lasturl = last.getElementsByTagName("a")[0];
    var nexturl = next.getElementsByTagName("a")[0];
    if (!lasturl) {
      last.style.display = 'none'
    }
    if (!nexturl) {
      next.style.display = 'none'
    }
    return {
      l: lasturl,
      n: nexturl
    }
  }
}
