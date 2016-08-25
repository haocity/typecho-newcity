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
<script src="<?php $this->options->themeUrl('nav.js'); ?>" type="text/javascript" charset="utf-8"></script>
<?php $this->footer(); ?>
</body>
</html>
