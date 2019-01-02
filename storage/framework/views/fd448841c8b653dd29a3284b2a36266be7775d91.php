<?php $__env->startSection('customcss'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/responsivej.css'); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- col-4-trending -->
<?php echo $__env->make('common.carouselj', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<section class="col-4-trending padding-50">
		<div class="wrapper">
			<h2 class="text-center">What's Trending</h2>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-4">
					<img src="<?php echo e(asset('').'public/images/trending1.jpg'); ?>">
					<a class="shop-now-button white" href="<?php echo e(URL::to('/shop')); ?>">Shop Now</a>
				</div>
				<div class="col-md-4 col-sm-4 col-4">
					<img src="<?php echo e(asset('').'public/images/trending2.jpg'); ?>">
					<a class="shop-now-button white" href="<?php echo e(URL::to('/shop')); ?>">Shop Now</a>
				</div>
				<div class="col-md-4 col-sm-4 col-4">
					<img src="<?php echo e(asset('').'public/images/trending3.jpg'); ?>">
					<a class="shop-now-button white" href="<?php echo e(URL::to('/shop')); ?>">Shop Now</a>
				</div>
			</div>
		</div>
	</section>
<!-- banner section -->
	<section class="banner-section">
		 <a title="Banner Image" href="#"><img class="img-fluid" src="<?php echo e(asset('').'public/images/banner-1.jpg'); ?>" alt="Banner Image"></a>
	</section>

	<!-- featured-product -->
	<?php echo $__env->make('common.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- latest-products-section -->
	<section class="latest-products-section padding-50">
		<div class="wrapper">
			<h2 class="text-center">latest products</h2>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-4">
					<a href="#"><img class="left-img" src="<?php echo e(asset('').'public/images/trendy_jean4.jpg'); ?>" alt="Trendy Jean1"></a>
				</div>
				<div class="col-md-4 col-sm-4 col-4">
					<a href="#"><img class="left-img" src="<?php echo e(asset('').'public/images/trendy_jean5.jpg'); ?>" alt="Trendy Jean1"></a>
				</div>
				<div class="col-md-4 col-sm-4 right-img col-4">
					<a href="#"><img src="<?php echo e(asset('').'public/images/trendy_jean6.jpg'); ?>" alt="Trendy Jean3"></a>
				</div>
			</div>
		</div>
	</section>

<!-- view-collection-section -->
	<section class="view-collection-section light-grey padding-50">
		<div class="wrapper">
			<div class="row width-1000">
				<div class="col-md-6 col-sm-6 col-2 first-img">
					<img src="<?php echo e(asset('').'public/images/collection1.jpg'); ?>" alt="collection 1">
				</div>
				<div class="col-md-6 col-sm-6 col-2">
					<div class="inner-content padding-left-70">
						<h3>Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit dolor eros, vel fringilla nisi viverra vel. Cras cursus interdum dolor, nec rhoncus sem posuere eget. Ut convallis odio sit amet elit porttitor, et blandit odio congue. Morbi placerat id sapien quis molestie.</p>
			        	<a class="shop-now-button grey" href="<?php echo e(URL::to('/shop')); ?>">View Collection</a>

					</div>
				</div>
			</div>

			<div class="row width-1000 padding-top-60">
				<div class="col-md-6 col-sm-6 col-2 order-2">
					<div class="inner-content padding-right-70">
						<h3>Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit dolor eros, vel fringilla nisi viverra vel. Cras cursus interdum dolor, nec rhoncus sem posuere eget. Ut convallis odio sit amet elit porttitor, et blandit odio congue. Morbi placerat id sapien quis molestie.</p>
			        	<a class="shop-now-button grey" href="<?php echo e(URL::to('/shop')); ?>">View Collection</a>

					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-2 order-1">
					<img src="<?php echo e(asset('').'public/images/collection2.jpg'); ?>" alt="collection 2">
				</div>
			</div>
		</div>
	</section>

<!-- fashion-collection-section -->
	<section class="fashion-collection-section padding-top-60">
		<div class="wrapper">
			<div class="row height-450">
				<div class="col-md-8 col-sm-8 col-left-7">
					<a href="<?php echo e(URL::to('/shop')); ?>"><img src="<?php echo e(asset('').'public/images/latest_collection1.jpg'); ?>" alt="collection 2"></a>
					<a href="<?php echo e(URL::to('/shop')); ?>"><img class="padding-top-15" src="<?php echo e(asset('').'public/images/trendy_looks.jpg'); ?>" alt="collection 2"></a>
				</div>

				<div class="col-md-4 col-sm-4 col-right-7">
					<a href="#"><img src="<?php echo e(asset('').'public/images/trendy_jean3.jpg'); ?>" alt="collection 2"></a>
				</div>
			</div>
		</div>
	</section>

<!-- fashion-section -->
	<section class="fashion-section padding-top-15 padding-bottom-50">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-left-7">
					<a href="<?php echo e(URL::to('/shop')); ?>"><img src="<?php echo e(asset('').'public/images/fashion1.jpg'); ?>" alt="collection 2"></a>
				</div>
				<div class="col-md-6 col-sm-6 col-right-7">
					<a href="<?php echo e(URL::to('/shop')); ?>"><img src="<?php echo e(asset('').'public/images/cargo.jpg'); ?>" alt="collection 2"></a>
				</div>

			</div>
		</div>
	</section>

<!-- banner section -->
	<section class="banner-section">
		 <a title="Banner Image" href="<?php echo e(URL::to('/shop')); ?>"><img class="img-fluid" src="<?php echo e(asset('').'public/images/banner-2.jpg'); ?>" alt="Banner Image"></a>
	</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>