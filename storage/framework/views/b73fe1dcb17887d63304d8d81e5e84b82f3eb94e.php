<!DOCTYPE html>
<html>
<?php echo $__env->make('common.metaj', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('customcss'); ?>
<body>

	<div class="clearfix "></div>
	<?php echo $__env->make('common.headerj', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
<!-- hero slider -->
	

<?php echo $__env->yieldContent('content'); ?>

<!-- customer-logos-slider -->
	<section class="customer-logos-slider padding-50">
		<div class="wrapper">
			<h4>Manufactures</h4>
			<div class="customer-logos slider">
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo1.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo2.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo3.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo4.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo5.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo6.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo1.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo2.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo3.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo4.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo5.png'); ?>"></a></div>
			    <div class="slide"><a href="#"><img src="<?php echo e(asset('').'public/images/customerlogo6.png'); ?>"></a></div>
			</div>
		</div>
	</section>

<!--Footer light-grey -->

	<footer class="light-grey padding-50">
		<div class="wrapper">
			<ul class="social-icon text-center">
				<li><a href="#"><img src="<?php echo e(asset('').'public/images/facebook_icon.png'); ?>"></a></li>
				<li><a href="#"><img src="<?php echo e(asset('').'public/images/insta_icon.png'); ?>"></a></li>
				<li><a href="#"><img src="<?php echo e(asset('').'public/images/youtube_icon.png'); ?>"></a></li>
				<li><a href="#"><img src="<?php echo e(asset('').'public/images/twitter_icon.png'); ?>"></a></li>
			</ul>

			<div class="row">
				<div class="col-md-4 col-sm-4">
					<ul>
                <li> <a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/shop')); ?>"><?php echo app('translator')->getFromJson('website.Shop'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/orders')); ?>"><?php echo app('translator')->getFromJson('website.Orders'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/viewcart')); ?>"><?php echo app('translator')->getFromJson('website.Shopping Cart'); ?></a> </li> 
                <li> <a href="<?php echo e(URL::to('/wishlist')); ?>"><?php echo app('translator')->getFromJson('website.Wishlist'); ?></a> </li>            
              </ul>
				</div>


				<div class="col-md-4 col-sm-4">
					<ul class="text-center">
						<li class="bold">Online Order Related Queries</li>
						<li class="footer-number">000-00000-000</li>
						<li class="time">9:00 AM - 5:00 PM</li>
						<li>For Business Enquiries | <a href="#">Contact Us</a></li>
					</ul>
				</div>


				<div class="col-md-4 col-sm-4">
					<ul >
                <?php if(count($result['commonContent']['pages'])): ?>
                    <?php $__currentLoopData = $result['commonContent']['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> <a href="<?php echo e(URL::to('/page?name='.$page->slug)); ?>"><?php echo e($page->name); ?></a> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>            
                <li> <a href="<?php echo e(URL::to('/contact-us')); ?>"><?php echo app('translator')->getFromJson('website.Contact Us'); ?></a> </li>
              </ul>
				</div>

			</div>

			<div class="copyright text-center">
				<span>Copyright @2018</span>
			</div>

		</div>
	</footer>

  <?php echo $__env->make('common.footerj', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('customjs'); ?>
  <script type="text/javascript" >
	
	// customer-logos slider

$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
</script>
	
</body>
</html>