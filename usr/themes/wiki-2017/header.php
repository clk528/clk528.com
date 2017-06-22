<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
  <!-- Styles --> 
  <link href="<?php $this->options->themeUrl('dist/css/core.css'); ?>" rel="stylesheet" /> 
  <link href="<?php $this->options->themeUrl('dist/css/main.css'); ?>" rel="stylesheet" /> 
  <link href="<?php $this->options->themeUrl('dist/css/global.css'); ?>" rel="stylesheet" />  
  <!--[if lt IE 9]>
  <script src="<?php $this->options->themeUrl('dist/js/selectivizr-min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('dist/js/html5shiv.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('dist/js/respond.min.js'); ?>"></script>
  <![endif]--> 

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

  <div class="page-wrapper">

   <div class="page-banner page-banner-subpage banner-resources p-b-0"> 
    <div class="container"> 
     <div class="banner-slogan banner-slogan-hero"> 
      <h1 class="docs-title slogan-title text-center"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1> 
      <div class="banner-search"> 
       <form method="post" action="<?php $this->options->siteUrl(); ?>"> 
        <div class="input-icon"> 
         <input type="text" name="s" value="" class="form-control input-lg" placeholder="教程搜索" autocomplete="off" /> 
         <button type="submit" class="btn btn-link btn-icon btn-lg"><i class="zmdi zmdi-search"></i></button> 
        </div> 
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- /.page-banner -->




    
    
