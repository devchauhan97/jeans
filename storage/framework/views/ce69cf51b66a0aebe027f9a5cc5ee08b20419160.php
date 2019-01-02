              
<?php $qunatity=0; ?>                
                <?php $__currentLoopData = $result['commonContent']['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                    <?php $qunatity += $cart_data->customers_basket_quantity; ?>                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <a class="cart-icon" onclick="getmodal();"  href="#"><img src="<?php echo e(asset('').'public/images/cart_icon.png'); ?>" alt="photo icon">
                    <span class="cart-number"><?php echo e($qunatity); ?></span></a>

           <div class="cart-modall">
           <!-- cart modal -->
    
         <?php if(count($result['commonContent']['cart'])>0): ?>
         <?php
                            $total_amount=0;
                            $qunatity=0;
                        ?>
                        <?php $__currentLoopData = $result['commonContent']['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <?php 
                        $total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
                        $qunatity     += $cart_data->customers_basket_quantity; ?>
        <div class="cart-box">
            <div class="cart-img">              
                <img src="<?php echo e(asset('').$cart_data->image); ?>" width="auto" height="70" alt="<?php echo e($cart_data->products_name); ?>">
                <a href="javascript:void(0)" onClick="delete_cart_product(<?php echo e($cart_data->customers_basket_id); ?>)" class="close-icon">
                <img src="<?php echo e(asset('').'public/images/close_icon.png'); ?>" alt="cart icon"></a>
                
            </div>
            <div class="cart-content">
                <span class="detail"><?php echo e($cart_data->products_name); ?></span>
                <span class="qty"><?php echo app('translator')->getFromJson('website.Qty'); ?> : <?php echo e($cart_data->customers_basket_quantity); ?></span>
                <span class="price" href="#"><?php echo e($web_setting[19]->value); ?><?php echo e($cart_data->final_price*$cart_data->customers_basket_quantity); ?></span>
            </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        

        <div class="total">
            <span class="item"><?php echo app('translator')->getFromJson('website.items'); ?></span>
            <span class="total-qty"><?php echo e($qunatity); ?></span>
            <span class="sub-total"><?php echo app('translator')->getFromJson('website.SubTotal'); ?></span>
            <span class="sub-total-price"><?php echo e($web_setting[19]->value); ?><?php echo e($total_amount); ?></span>
        </div>

        <div class="checkout">
            <a href="<?php echo e(URL::to('/viewcart')); ?>" class="view-cart"><?php echo app('translator')->getFromJson('website.View Cart'); ?></a>
            <a href="<?php echo e(URL::to('/checkout')); ?>" class="checkout-btn"><?php echo app('translator')->getFromJson('website.Checkout'); ?></a>
        </div>
        <?php else: ?>
        <div class="cart-box text-left">
        <?php echo app('translator')->getFromJson('website.You have no items in your shopping cart'); ?>
    </div>
    <?php endif; ?>
    
    </div>
                    
   