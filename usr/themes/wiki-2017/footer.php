<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="page-footer"> 
	<footer class="footer-bottom"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-lg-6 col-lg-push-6 col-xs-12"> 
					<ul class="nav"> 
						<li class="hidden-xs"><a href="https://www.vpsmm.com/" target="_blank">我的小站</a></li> 
						<li><a href="https://secure.php.net" target="_blank">php.net</a></li>
						<!-- <li><a href="https://www.vpsmm.com/testing.shtml" target="_blank"">VPS评测</a></li> 
						<li><a href="https://www.vpsmm.com/shell.shtml" target="_blank"">常用一键包</a></li>  -->
					</ul> 
					<ul class="social">
						<?php if($this->user->hasLogin()): ?>
							<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
			                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
			            <?php else: ?>
			                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
			            <?php endif; ?>
         				<!-- <li><a href="https://www.vpsmm.com/" target="_blank" class="btn btn-primary btn-circle btn-icon btn-outline btn-sm"><i class="zmdi zmdi-home"></i></a></li> 
         				<li><a href="https://down.vpsmm.com/" target="_blank" class="btn btn-primary btn-circle btn-icon btn-outline btn-sm"><i class="zmdi zmdi-inbox"></i></a></li> --> 
        			</ul>
				</div> 
				<div class="col-lg-6 col-lg-pull-6 col-xs-12"> 
        			<p class="footer-copyright"> Copyright <?php echo date('Y');?> &copy; 我的小站. All rights reserved. <!-- <small>admin</small> --> </p> 
       			</div> 
      		</div> 
     	</div> 
	</footer> 
</div> 

<script src="<?php $this->options->themeUrl('dist/js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('dist/js/core.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('dist/js/main.js'); ?>"></script>

<?php $this->footer(); ?>
</body>
</html>
