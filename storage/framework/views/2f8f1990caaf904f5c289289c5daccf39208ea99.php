<section class="featured-product padding-50 light-grey">
        <div class="wrapper">
            <h2 class="text-center">Featured products</h2>
            <div class="row">
                            
                               
                    <?php $__currentLoopData = $result['featured']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php if($key<=3): ?>
                <div class="col-md-3 col-sm-6 col-3">
                    
                    <div class="bg-grey text-center">
                    <img src="<?php echo e(asset('').$products->products_image); ?>" alt="<?php echo e($products->products_name); ?>" width="300"> 
                    <div class="wish-middle">
                        <a href="<?php echo e(URL::to('/wishlist')); ?>"><span class="wishlist-icon" id="wishlist-count">
                            <img src="<?php echo e(asset('').'public/images/wishlist_icon.png'); ?>" alt="wishlist"></span></a>
                        <a href="<?php echo e(URL::to('/product-detail/'.$products->products_slug)); ?>"><span class="wishlist-icon"><img src=" <?php echo e(asset('').'public/images/eye_icon.png'); ?>" alt="wishlist"></span></a>
                    </div>              
                    <div class="add-cart">
                         <?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                        <span class="cart" products_id="<?php echo e($products->products_id); ?>">Add to Cart</span>
                        <?php else: ?>
                            <span>Added</span>
                        <?php endif; ?>

                    </div>
                    </div>
                    <a href="<?php echo e(URL::to('/product-detail/'.$products->products_slug)); ?>" class="featured-content text-center">
                        <span class="product-title"><?php echo e($products->products_name); ?></span>
                        <div class="pricing">
                           <?php if(!empty($products->discount_price)): ?>
                            <span class="text-strike">
                            <strike><?php echo e($web_setting[19]->value); ?><?php echo e($products->discount_price+0); ?></strike>
                            </span>
                             <?php else: ?> 
                            <span class="pink"> <?php echo e($web_setting[19]->value); ?> <?php echo e($products->products_price+0); ?></span>
                             <?php endif; ?>
                        </div>
                    </a>
                </div>
                  <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        
    </section>
    