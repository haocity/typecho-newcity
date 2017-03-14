<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
<div id="SOHUCS" sid="<?php echo $this->cid;?>" ></div>
<script type="text/javascript"> 
(function() {
    var appid = "cyrgvDe53";
    var conf = "prod_1db778e303b460b3817e26d6c0b3621d";
    var loadJs = function(d, a) {
        var c = document.getElementById("comments");
        var b = document.createElement("script");
        b.setAttribute("type", "text/javascript");
        b.setAttribute("charset", "UTF-8");
        b.setAttribute("src", d);
        if (typeof a === "function") {
            if (window.attachEvent) {
                b.onreadystatechange = function() {
                    var e = b.readyState;
                    if (e === "loaded" || e === "complete") {
                        b.onreadystatechange = null;
                        a()
                    }
                }
            } else {
                b.onload = a
            }
        }
        c.appendChild(b)
    };
    loadJs("https://www.haotown.cn/changyan/changyan.js",
    function() {
        window.changyan.api.config({
            appid: appid,
            conf: conf
        })
    })
})();
</script>
</div>