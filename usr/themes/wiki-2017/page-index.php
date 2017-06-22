<?php
/**
* index
*
* @package custom
*/

$this->need('header.php'); ?>


<div class="page-main"> 
    <div class="container"> 
     <div class="main-content"> 
      <div class="content-row"> 
       <div class="blocks row"> 

<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>


        <div class="col-sm-6"> 
         <div class="panel panel-block"> 
          <h2 class="panel-title h3"><a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a></h2> 
          <ul class="list-styled list-icon article_list"> 
           
<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=10&type=category', 'mid=' . $categories->mid)->to($posts); ?>

<?php while ($posts->next()): ?>

<li><a target="_blank" href="<?php $posts->permalink(); ?>"><i class="zmdi zmdi-file-text"></i><?php $posts->title(); ?></a></li>


<?php endwhile; ?>

          </ul> 
         </div> 
        </div> 
      
<?php endwhile; ?>
        

        
        
       </div> 
      </div> 
     </div> 
    </div> 
   </div>

<?php $this->need('footer.php'); ?>
