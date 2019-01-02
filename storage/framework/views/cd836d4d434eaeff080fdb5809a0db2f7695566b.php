<section class="hero_slider">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <?php $__currentLoopData = $result['slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slides_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>" class="<?php if($key==0): ?> active <?php endif; ?>"></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">	    	
	     
	     <?php $__currentLoopData = $result['slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slides_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	      <div class="item  <?php if($key==0): ?> active <?php endif; ?>">
	      	<?php if($slides_data->type == 'category'): ?>
				<a href="<?php echo e(URL::to('/shop?category='.$slides_data->url)); ?>">
			<?php elseif($slides_data->type == 'product'): ?>
				<a href="<?php echo e(URL::to('/product-detail/'.$slides_data->url)); ?>">
			<?php elseif($slides_data->type == 'mostliked'): ?>
				<a href="<?php echo e(URL::to('shop?type=mostliked')); ?>">
			<?php elseif($slides_data->type == 'topseller'): ?>
				<a href="<?php echo e(URL::to('shop?type=topseller')); ?>">
			<?php elseif($slides_data->type == 'deals'): ?>
				<a href="<?php echo e(URL::to('shop?type=deals')); ?>">
			<?php endif; ?>
	        <img src="<?php echo e(asset('').$slides_data->image); ?>" alt="Chicago">
	    </a>
	       <!--  <div class="slider-content">
	        	
	        	<a class="shop-now-button" href="<?php echo e(URL::to('/shop')); ?>">Shop Now</a>
	        </div> -->
	      </div>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"><img src="<?php echo e(asset('').'public/images/left_slide_icon.png'); ?>"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"><img src="<?php echo e(asset('').'public/images/right_slide_icon.png'); ?>"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</section>