<?php $__env->startSection('customcss'); ?>
<?php if(!empty(session("theme"))): ?>
        <link href="<?php echo asset('public/css/'.session("theme").'.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
    <?php else: ?>
        
    <?php endif; ?>
    <link href="<?php echo asset('public/css/app.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/style.css'); ?>">
<!-- <link href="<?php echo asset('public/css/responsive.css'); ?> " media="all" rel="stylesheet" type="text/css"/> -->
 <!-- <link href="<?php echo asset('public/css/rtl.css'); ?> " media="all" rel="stylesheet" type="text/css"/> -->
 <link href="<?php echo asset('public/css/font-awesome.css'); ?> " media="all" rel="stylesheet" type="text/css"/>
 <!-- <link href="<?php echo asset('public/css/owl.carousel.css'); ?> " media="all" rel="stylesheet" type="text/css"/> -->
 <!-- <link href="<?php echo asset('public/css/bootstrap-select.css'); ?> " media="all" rel="stylesheet" type="text/css"/> -->
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- login-register -->
<section class="login-register">
	<div class="wrapper">
		<div class="row sign-in-form">
			<div class="col-md-6 sign-in-left">
				<div class="sign-in-inner">
					<h3 class="text-center">Sign In</h3>
					  <?php if(Session::has('loginError')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only"><?php echo app('translator')->getFromJson('website.Error'); ?>:</span>
                    <?php echo session('loginError'); ?>

                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                   <?php endif; ?>
					<form class="sign-in form-validate" name="signup" enctype="multipart/form-data"  action="<?php echo e(URL::to('/process-login')); ?>" method="post">
						<div class="form-group">
							<label>Email Address:</label>
							<input type="email" name="email" id="emaill" class="" placeholder="Enter you mail id" value="<?php echo e(old('emaill')); ?>">
							<small class="text-danger"><?php echo e($errors->first('email')); ?></small>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" id="passwordl" class="" placeholder="Enter you password">
							<small class="text-danger"><?php echo e($errors->first('password')); ?></small>
						</div>
						<button class="sign-btn lgbtn" type="submit" name="signin">Sign In</button>
					</form>
						<a href="#" class="forgot-psd">Forgot your password?</a>
						<div class="signin-divide"><span>Or</span></div>
						<?php if($result['commonContent']['setting'][61]->value==1): ?>
				<!--Google +-->
						<a href="login/google" class="google-btn lgbtn"><i class="fa fa-google-plus"></i>
	                    Sign in With Google
	                    </a>
	                     <?php endif; ?>
						<div class="signin-divide"><span>Or</span></div>
						<!--Facebook-->
                <?php if($result['commonContent']['setting'][2]->value==1): ?>
                <a href="login/facebook"  class="facebook-btn lgbtn"><i class="fa fa-facebook"></i>
						
		                Sign in With Facebook
		                </a>
		                <?php endif; ?>
		               
					
				</div>
			</div>
			<div class="col-md-6 sign-in-right">
				<div class="sign-in-inner">
					<h3 class="text-center">New to Jeans</h3>		
				
					<?php if(Session::has('error')): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only"><?php echo app('translator')->getFromJson('website.Error'); ?>:</span>
						  <?php echo session('error'); ?>

                          
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
					</div>
				<?php endif; ?>

				<?php if(Session::has('success')): ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only"><?php echo app('translator')->getFromJson('website.Success'); ?>:</span>
						  <?php echo session('success'); ?>

                          
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          		<span aria-hidden="true">&times;</span>
                          </button>
					</div>
				<?php endif; ?>
					<form   enctype="multipart/form-data" class="sign-in" action="<?php echo e(URL::to('/signupProcess')); ?>" method="post">
						<div>
							<label>Email Address:</label>
							<input type="text" name="emaill" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
							<small class="text-danger"><?php echo e($errors->first('emaill')); ?></small>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" class="form-control password" name="passwordl" id="password">
							<small class="text-danger"><?php echo e($errors->first('passwordl')); ?></small>
						</div>
						<ul class="req-char">
							<li>8 characters minimum</li>
							<li>At least one letter</li>
							<li>At least one number</li>
						</ul>
						<div>
							<label>Confirm Password:</label>
							<input type="password" class="form-control password" name="re_passwordl" id="re_password">
							<span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please re-enter your password'); ?></span>
							<small class="text-danger"><?php echo e($errors->first('re_passwordl')); ?></small>
						</div>
						<button class="sign-btn register lgbtn" type="submit">Register</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

	
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>