<?php
/**
 * 这是 小夜博客（www.vpsmm.com）制作的一款新模板，用来存放文档之类的东西，蓝色调很饱满。
 * 
 * @package Typecho wiki VPSMM Theme 
 * @author VPSMM.COM
 * @version 2016.11.13
 * @link https://www.vpsmm.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>





   <div class="page-main"> 
    <div class="container"> 
     <div class="main-content"> 
      <div class="content-row"> 



       
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
