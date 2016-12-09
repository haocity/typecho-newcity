<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments"> 

<?php if ($this->cid>44): ?>  
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
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 


<?php else: ?>
<!-- 原生评论框 start -->

    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    <div id="comments2">
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    
              <div class="comment-information">
<div class="comment-in">
    			昵称：<input type="text" name="author" id="author" class="text" placeholder="昵称 " value="<?php $this->remember('author'); ?>" required />
    		</div>
    	<div class="comment-in">
              
    			邮箱：<input type="email" name="mail" id="mail" class="text" placeholder="邮箱 " value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    			</div>
    	<div class="comment-in">
    		
    			网站：<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
</div>
</div>
            <?php endif; ?>

    		<p>
<textarea name="text" id="textarea" class="textarea" onkeydown="if(event.ctrlKey&amp;&amp;event.keyCode==13){document.getElementById('fashong').click();return false};" placeholder="在这里输入你的评论(Ctrl/Cmd+Enter也可以提交)..." style="width: 100%;
    height: 10rem;
    resize: none;
    margin: 15px 15px 0 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    line-height: 1.42857;
    color: #555;" >

<?php $this->remember('text'); ?></textarea>
            </p>

    		<p>
                <button type="submit" class="submit" id="fashong"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>

    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>


<?php endif; ?>

</div>