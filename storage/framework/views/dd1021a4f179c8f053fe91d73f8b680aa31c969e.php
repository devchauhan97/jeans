<script type="text/javascript" src="<?php echo asset('public/js/jquery-1.11.2.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('public/js/bootstrap.min.js'); ?>"></script>
	
	<script src="<?php echo asset('public/js/slick.js'); ?>"></script>
	
<?php echo $__env->make('common.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="message_content"></div>

<!--- loader content --->
<div class="loader" id="loader">
	<img src="<?php echo e(asset('').'public/images/loader.gif'); ?>">
</div>