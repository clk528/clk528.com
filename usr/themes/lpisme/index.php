<?php
/**
 * Lpisme是Typecho的一套主题模板
 *
 * @package Lpisme Theme
 * @author Chakhsu Lau
 * @version 3.2.0
 * @link www.linpx.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container">
    <div class="index-wrapper">
        <div class="index-posts cf">
            <?php while($this->next()): ?>
            <article class="index-post cf" itemscope itemtype="http://schema.org/BlogPosting">
                <div class="index-post-inner">
                    <div class="index-post-header cf">
                        <?php if (isset($this->fields->eye)): ?>
                        	<span class="index-post-avatar icon-eyeglass left">
                        		<span class="path1"></span>
                        		<span class="path2"></span>
                        		<span class="path3"></span>
                        		<span class="path4"></span>
                        		<span class="path5"></span>
                        		<span class="path6"></span>
                        	</span>
                        <?php elseif (isset($this->fields->code)): ?>
                        	<span class="index-post-avatar icon-coding left">
                            	<span class="path1"></span>
                            	<span class="path2"></span>
                            	<span class="path3"></span>
                            	<span class="path4"></span>
                            	<span class="path5"></span>
                            	<span class="path6"></span>
                            	<span class="path7"></span>
                            	<span class="path8"></span>
                            	<span class="path9"></span>
                            	<span class="path10"></span>
                            	<span class="path11"></span>
                            	<span class="path12"></span>
                            	<span class="path13"></span>
                            	<span class="path14"></span>
                            	<span class="path15"></span>
                            	<span class="path16"></span>
                            	<span class="path17"></span>
                            	<span class="path18"></span>
                            	<span class="path19"></span>
                            	<span class="path20"></span>
                            	<span class="path21"></span>
                            	<span class="path22"></span>
                            	<span class="path23"></span>
                            	<span class="path24"></span>
                            	<span class="path25"></span>
                            	<span class="path26"></span>
                            	<span class="path27"></span>
                            	<span class="path28"></span>
                            	<span class="path29"></span>
                            	<span class="path30"></span>
                            	<span class="path31"></span>
                            	<span class="path32"></span>
                            	<span class="path33"></span>
                            	<span class="path34"></span>
                            	<span class="path35"></span>
                            	<span class="path36"></span>
                            	<span class="path37"></span>
                            	<span class="path38"></span>
                            	<span class="path39"></span>
                            	<span class="path40"></span>
                            	<span class="path41"></span>
                            	<span class="path42"></span>
                            	<span class="path43"></span>
                            	<span class="path44"></span>
                        	</span>
                        <?php elseif (isset($this->fields->list)): ?>
                            <span class="index-post-avatar icon-list left">
                            	<span class="path1"></span>
                            	<span class="path2"></span>
                            	<span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                                <span class="path11"></span>
                                <span class="path12"></span>
                                <span class="path13"></span>
                                <span class="path14"></span>
                                <span class="path15"></span>
                                <span class="path16"></span>
                                <span class="path17"></span>
                                <span class="path18"></span>
                                <span class="path19"></span>
                                <span class="path20"></span>
                                <span class="path21"></span>
                            </span>
                        <?php elseif (isset($this->fields->quote)): ?>
                            <span class="index-post-avatar icon-ss left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </span>
                        <?php elseif (isset($this->fields->share)): ?>
                            <span class="index-post-avatar icon-share left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                                <span class="path11"></span>
                                <span class="path12"></span>
                                <span class="path13"></span>
                                <span class="path14"></span>
                                <span class="path15"></span>
                                <span class="path16"></span>
                                <span class="path17"></span>
                                <span class="path18"></span>
                                <span class="path19"></span>
                                <span class="path20"></span>
                                <span class="path21"></span>
                                <span class="path22"></span>
                                <span class="path23"></span>
                                <span class="path24"></span>
                                <span class="path25"></span>
                            </span>
                        <?php elseif (isset($this->fields->chat)): ?>
                            <span class="index-post-avatar icon-chat left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                            </span>
                        <?php elseif (isset($this->fields->locked)): ?>
                            <span class="index-post-avatar icon-locked left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </span>
                        <?php elseif (isset($this->fields->images)): ?>
                            <span class="index-post-avatar icon-images left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                                <span class="path11"></span>
                                <span class="path12"></span>
                            </span>
                        <?php elseif (isset($this->fields->ad)): ?>
                            <span class="index-post-avatar icon-ad left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                            </span>
                        <?php elseif (isset($this->fields->lamp)): ?>
                            <span class="index-post-avatar icon-lamp left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                            </span>
						<?php else : ?>
                        <?php endif; ?>
                        <div class="index-post-date" itemprop="datePublished" style="display: none;">
                            <!-- <?php $this->date('F jS , Y'); ?> -->
                            <?php $this->date('Y-m-d'); ?>
                        </div>
                        <div class="index-post-title" itemprop="name headline">
                            <a href="<?php $this->permalink() ?>" itemtype="url"><?php $this->title() ?></a>
                        </div>
                    </div>
                    <div class="index-post-content" itemprop="articleBody">
                        <?php $this->description(); ?>
                    </div>
                    <?php $thumb = showThumb($this,null,true); if(!empty($thumb)):?>
                        <!-- <div class="index-post-thumb">
                            <img class="thumb" src="<?php echo $thumb;?>">
                        </div> -->
                    <?php endif; ?>

                    <div class="index-post-meta cf">
                        <!-- <div class="index-post-button"><a href="<?php $this->permalink() ?>">Read more</a></div> -->
                        <div class="index-post-button"><a href="<?php $this->permalink() ?>">阅读更多</a></div>
                        <div class="index-post-button index-post-comments">
                            <!-- <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t('No comment'), _t('1 comment'), _t('%d comments')); ?></a> -->
                            <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t('没有评论'), _t('1 条评论'), _t('%d 条评论')); ?></a>
                        </div>
                        <div class="index-post-category">
                            <?php $this->category(','); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
        </div>
        <div class="index-pagenav cf">
            <div class="page-nav">
                <div class="page-prev left" title="<?php _e('上一页');?>"><?php $this->pageLink('<i class="icon icon-left"></i> Previous','prev');?></div>
                <div class="page-next right" title="<?php _e('下一页');?>"><?php $this->pageLink('Next <i class="icon icon-right"></i>','next');?></div>
            </div>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>