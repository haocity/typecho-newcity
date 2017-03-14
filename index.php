<?php
/**
 *HAOTOWN NEWCITY1.5
 * 
 * @package Haotown Newcity Theme 
 * @author 疯狂减肥带
 * @version 1.5
 * @link http://www.haotown.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="post-wrap" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
<script>
 var ajaxloading=true;
  $(window).scroll(function() {
    if (ajaxloading) {
      var pagedz = window.location.pathname;
      if (pagedz == "/" || pagedz.indexOf('/page/') == 0||pagedz.indexOf('/category/')==0) {
        var url = $('.next:last>a').attr('href');
        if (url&&url!=document.location.href) {
          var scrollTop = $(this).scrollTop();
          var scrollHeight = $(document).height();
          var windowHeight = $(this).height();
          if (scrollTop + windowHeight == scrollHeight) {
            ajaxloading=false;
            $('.cssload-fond').show();
            $.ajax({
              url: url,
              dataType: 'html',
              timeout: 5000,
              beforeSend: function(xhr) {
                xhr.setRequestHeader('X-PJAX', 'true')
              },
              success: function(data) {
                console.log('ok');
                ajaxloading=true;
                $('.nextpage:last').html(data);
                var state = {
                  title: document.title,
                  url: url,
                };
                window.history.pushState(null, document.title, url);
                $('.page-navigator:first').remove();
                $('.cssload-fond').hide();
              },
              error: function(data) {
                console.log("eero" + data);
                sendmessage('ajax失败');
                $('.cssload-fond').hide();
              }
            })
          }
        }
      };
     };
});
</script>
<?php $this->need('footer.php'); ?>
