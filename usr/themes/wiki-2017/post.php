<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="page-main">
        <div class="container">

            <div class="doc_container">

                <div class="doc_header">
                    <h1><?php $this->title() ?></h1>
                    <div>
                        Modified on: <?php $this->date('r'); ?><br>
                    </div>
                </div>

                <div class="doc_content">
                    


<?php $this->content(); ?>




                </div>

                <div class="doc_comments">

                <?php $this->need('comments.php'); ?>
                
                </div>

            </div>

        </div>
    </div>


<?php $this->need('footer.php'); ?>
