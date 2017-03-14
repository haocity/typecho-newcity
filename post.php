<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-wrap" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>
  
    <?php $this->need('comments.php'); ?>
 <ul class="post-near">
        <li class="near near-one">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="near near-two">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
 
</div><!-- end #main-->
<script>
var nearlink = pagenumber();
function keyUp(e) {
  var currKey = 0,
  e = e || event;
  currKey = e.keyCode || e.which || e.charCode;
  if (nearlink) {
    if (currKey == 37) {
      if(nearlink.l){
       nearlink.l.click();
       sendmessage('向前一页进发');
      }
      else{
       sendmessage('已经是最前页了');
      }
    }
    if (currKey == 39 ) {
      if(nearlink.n){
       nearlink.n.click();
       sendmessage('向后一页进发');
      }
      else{
       sendmessage('后面没有了');
          }
      
    }
  }
}
if (nearlink) {
  document.onkeyup = keyUp;
}
</script>

<?php $this->need('footer.php'); ?>
