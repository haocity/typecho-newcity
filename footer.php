<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('源自<a href="http://www.typecho.org">Typecho</a>Theme<a href="http://www.haotown.cn">HAOTOWN</a> 鲁ICP备15029864号'); ?>.
		<div class="foot-ico ">
         	<a class="iconfont icon-qq" target="_blank"  href="http://wpa.qq.com/msgrd?v=3&uin=1051667334&site=qq&menu=yes" title="Q :1051667334"></a> </li>
         	<a class="iconfont icon-weibo" target="_blank"  href="http://weibo.com/3268119247/"></a> </li>
         	<a class="iconfont icon-github" target="_blank"  href="https://github.com/haocity"></a> </li>
         	<!--<a class="iconfont icon-tuitet" target="_blank"  href="https://twitter.com/haocity"></a> </li>-->
         	<a class="iconfont icon-steam" target="_blank"  href="http://steamcommunity.com/id/haocity/"></a> </li>
         	<!--<a class="iconfont icon-weixin" target="_blank"  href="#"></a> </li>-->
         	
         </div>
</footer>
<?php $this->footer(); ?>
	<script type="text/javascript">
 $(document).pjax('a:not([nopjax])',   //jquery选择器，监听a元素，触发pjax。
 '#container',                         //jquery选择器，存放页面内容的元素。
 {scrollTo:false,                      //动作完成后不滚动
 timeout:30000}); 
$(document).on('pjax:send', function() {
console.log('发送ajax请求')
 });
 $(document).on('pjax:complete', function() {
pajx_loadDuodsuo()
 
 });

	</script>
</body>
</html>
