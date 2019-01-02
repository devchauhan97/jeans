<header class="main-header">
		<div class="wrapper">
			<div class="header-top">
				<ul class="top-list">
					 <?php if(Auth::guard('customer')->check()): ?>
					<li class="nav-item">
                                        <div class="">
                                            <span class="p-pic"><img src="<?php echo e(asset('').auth()->guard('customer')->user()->customers_picture); ?>" alt="image" width="20" height="20"></span>&nbsp;<?php echo app('translator')->getFromJson('website.Welcome'); ?>&nbsp;<?php echo e(auth()->guard('customer')->user()->customers_firstname); ?>&nbsp;<?php echo e(auth()->guard('customer')->user()->customers_lastname); ?>!
                                        </div>
                                    </li>
                                    <li><a href="<?php echo e(URL::to('/logout')); ?>">Logout</a></li>
                                      <?php else: ?>
					<li><a href="<?php echo e(URL::to('/login')); ?>">Login/Register</a></li>
					<?php endif; ?>
					<li><a href="<?php echo e(URL::to('/contact-us')); ?>">Contact Us</a></li>
				</ul>
			</div>
  			<div class="logo"><a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(asset('').'public/images/logo.png'); ?>" alt="logo"></a></div>
	  		<nav class="pushmenu pushmenu-left main-nav">
	  			<div class="nav-logo"><a href="index.html"><img src="<?php echo e(asset('').'public/images/white_logo.png'); ?>" alt="logo"></a></div>
	  			<ul class="links">
	  				<li><a href="<?php echo e(URL::to('/shop')); ?>">Shop</a></li>
	  				<li><a href="#">AW18 LOOKBOOK</a></li>
	  				<li><a href="#">Fit Guide</a></li>
	  				<li><a href="#">Actif Club</a></li>
					<li><a href="#">Gallery</a></li>
	  			</ul>
	  		</nav>
	  		<div id="nav_list">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
	  		</div>
	  		<div class="right-icon">
	  			<form class="form-inline search-form none-991" action="<?php echo e(URL::to('/shop')); ?>" method="get">
	  				<input type="hidden" id="category_id" name="category" value="all">				 
				   <input type="search" class="search-input"  name="search" placeholder="Search..." value="<?php echo e(app('request')->input('search')); ?>" aria-label="Search">
				  <button type="submit" class="search-icon"><span><img src="<?php echo e(asset('').'public/images/search_icon.png'); ?>"></span></button>
	  			</form>
	  			<ul>
	  				 
	  				<li class="photo-icon"> <a href="#"><img src="<?php echo e(asset('').'public/images/photo_icon.png'); ?>" alt="photo icon"></a>
	  					
					<!-- nologin-user-dropdown -->
					 <?php if(Auth::guard('customer')->check()): ?>
						<div class="nologin-user-dropdown">
			                <a href="<?php echo e(URL::to('/profile')); ?>">Profile</a>
			                <a href="<?php echo e(URL::to('/wishlist')); ?>">My Wishlist</a>
			                <a href="<?php echo e(URL::to('/orders')); ?>">My Orders</a>
			                 <a href="<?php echo e(URL::to('/shipping-address')); ?>">Shipping Address</a>
			                <a href="<?php echo e(URL::to('/logout')); ?>">Logout</a>
			            </div>
			            <?php else: ?>
			            <div class="nologin-user-dropdown">
			            <a href="<?php echo e(URL::to('/login')); ?>">Login/Register</a>
			            </div>
			            	<?php endif; ?>
	  				</li>
	  				                     
	  				</li>
	  				<li class="cart-header  head-cart-content">  				
	  				 <?php echo $__env->make('cartButton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  				   </li>
	  				 <li><a href="<?php echo e(URL::to('/wishlist')); ?>"><img src="<?php echo e(asset('').'public/images/wishlist_icon.png'); ?>" alt="photo icon"><span class="cart-number wishlist " id="wishlist-count"><?php echo e($result['commonContent']['totalWishList']); ?></span></a></li>
	  			</ul>
	  		</div>
           
		</div>
	</header>