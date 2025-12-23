<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'Member Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6 col-sm-6">
            <div class="login-sec">
                <div class="logoSec">
                    <img src="<?php echo e(asset('images/LienManagerLogo.png')); ?>" />
                </div>
                <form method="post" action="<?php echo e(route('member.login.action')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="input-container form-group">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field form-control" type="email" placeholder="Email Address" name="email"
                            value="<?php echo e(old('email')); ?>" required autofocus autocomplete="off">
                    </div>

                    <div class="input-container form-group">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field form-control" type="password" placeholder="Password" name="password"
                            value="<?php echo e(old('email')); ?>" required autofocus autocomplete="off">
                    </div>


                    <div class="form-group-flex">
                    <div class="form-group">
                        <input type="checkbox" id="remember-me" name="remember" value="true">
                        <span class="remember-me" for="remember-me">Keep me logged in.</span>
                    </div>
                    <div class="form-group forgotPassword">
                        <a href="<?php echo e(route('get.forgetPassword')); ?>">Forgot Password</a>
                    </div>
                    </div>

                    <div class="form-group">
                        <input id="sign_in" type="submit" value="Login" class="btn sub-btn">
                        <a href="<?php echo e(route('member.basicSignup')); ?>" class="btn sub-btn">Sign Up</a>
                    </div>



                    <div class="form-group passwordReset">
                        <a href="<?php echo e(route('get.forgetPassword')); ?>">Request a Password Reset</a>
                    </div>

                    <?php if(Session::has('error')): ?>
                        <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('.nonfocus').hide();
            $('.comapny').focus(function() {
                $('.nonfocus').slideToggle(function() {
                    return flase;
                });
            })
            $('.name').focus(function() {
                $('.nonfocus').slideToggle(function() {
                    return flase;
                });
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('basicUser.layout.login_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/user/login.blade.php ENDPATH**/ ?>