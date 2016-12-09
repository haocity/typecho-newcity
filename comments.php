<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
  <!-- 多说评论框 start -->
<?php if($this->allow('comment')): ?>
<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
	
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
	<script type="text/javascript">
            var duoshuoQuery = {short_name:"haotown"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'https://t5.haotown.cn/duoshuo/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
            </script>
<!-- 多说公共JS代码 end -->
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
