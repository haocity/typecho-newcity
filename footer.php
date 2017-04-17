<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div class="nextpage"></div>

<?php if (!is_pjax()) { ?>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('源自<a href="http://www.typecho.org">Typecho</a>Theme<a href="http://www.haotown.cn">HAOTOWN</a><a href="http://www.miitbeian.gov.cn/"> 鲁ICP备15029864号</a>'); ?>.
		<div class="foot-ico ">
            <?php if ($this->options->socialweibo): ?>
                <a class="iconfont icon-weibo" target="_blank" href="<?php $this->options->socialweibo(); ?>"></a>
            <?php endif; ?>
            <?php if ($this->options->socialqq): ?>
                <a class="iconfont icon-qq" target="_blank" href="<?php $this->options->socialqq(); ?>"></a>
            <?php endif; ?>
            <?php if ($this->options->socialgithub): ?>
                <a class="iconfont icon-github" target="_blank" href="<?php $this->options->socialgithub(); ?>"></a>
            <?php endif; ?>
            <?php if ($this->options->socialsteam): ?>
                <a class="iconfont icon-steam" target="_blank" href="<?php $this->options->socialsteam(); ?>"></a>
            <?php endif; ?>
         	
         	
         </div>
<div class='message'></div>
</footer>
<script  src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php $this->options->themeUrl('js/my.js'); ?>" type="text/javascript" charset="utf-8"></script>
<?php if ($this->options->srollSet == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/sroll.js'); ?>" type="text/javascript" charset="utf-8"></script>
<?php endif; ?>
<?php if ($this->options->oneimgSet == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/oneimg.js'); ?>" type="text/javascript" charset="utf-8"></script>
<?php endif; ?>
<?php if ($this->options->codeHighline == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/code.js'); ?>" type="text/javascript"  charset="utf-8"></script>
<?php endif; ?>

<script>
 $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])',   
 '#container',
 {                     
 timeout:30000,scrollTo:0}); 
$(document).on('pjax:send', function() {
$('.cssload-fond').show();
$('.nextpage').remove();
 });
 $(document).on('pjax:complete', function() {
$('.cssload-fond').hide();
if(typeof(Rainbow)!=="undefined") {Rainbow.color()};
 });
</script>
<?php $this->footer(); ?>
</body>
</html>
<?php } ?>