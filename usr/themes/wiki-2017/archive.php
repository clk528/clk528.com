<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>




   <div class="page-main"> 
    <div class="container"> 
     <div class="main-content"> 
      <div class="content-row"> 
       <h1 class="h2 m-t-0"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1> 


        <?php if ($this->have()): ?>

       
        <div class="row row-table-md"> 

        <?php while($this->next()): ?>

         <div class="col-md-12 grid-item"> 
          <a class="panel panel-block docs-panel-block" href="<?php $this->permalink() ?>"> 
           <div class="panel-body"> 
            <h3 class="panel-title h2"><?php $this->title() ?></h3> 
            <p><?php $this->excerpt(200, '。'); ?></p> 
            <span class="link">Read More</span> 
           </div> </a> 
         </div>

         <?php endwhile; ?>

        </div> 

    <?php else: ?><!--如果不包括文章-->
<p class="m-t-10 m-b-20">没有相关内容</p>
        <?php endif; ?>


    



       <div> 
        <nav class="post-navigation navigation pagination" role="navigation"> 
         <div class="nav-links"> 
          <?php $this->pageLink('<x  class="page-numbers btn btn-sm btn-default btn-outline btn-circle pull-left"><i class="zmdi zmdi-long-arrow-left"></i></x>'); ?>
           
          <?php $this->pageLink('<x  class="page-numbers btn btn-sm btn-default btn-outline btn-circle pull-right"><i class="zmdi zmdi-long-arrow-right"></i></x>','next'); ?> 
         </div> 
        </nav> 
       </div> 


      </div> 
     </div> 
    </div> 
   </div> 
   <!-- /.page-section --> 





	<?php $this->need('footer.php'); ?>
