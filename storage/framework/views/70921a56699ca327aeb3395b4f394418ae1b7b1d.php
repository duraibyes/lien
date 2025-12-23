<?php $__env->startSection('title', 'Member Basic Signup'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        @media  only screen and (max-width: 768px) {

            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
        }

    </style>
    <div class="container">
        <div class="col-md-6 col-sm-6">
            <div class="login-sec">
                <div class="logoSec">
                    <img src="<?php echo e(asset('images/LienManagerLogo.png')); ?>" />
                </div>
                <form class="form-signin" action="<?php echo e(route('post.register')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <h2 class="signup-heading">Basic Package - Sign Up</h2>

                    
                    <div class="focus">
                    <div class="input-line">
                        <div class="input-container form-group">
                            <input type="text" class="input-signup form-control" name="email" value=""
                                placeholder="Email address" required autocomplete="off">
                        </div>
                      </div>

                    </div>
                    
                    <div class="input-container form-group">
                        <input type="password" class="input-signup form-control" name="password"
                            placeholder="Enter Password" value="" required autocomplete="off">
                    </div>
                    
                    <div>Beta Access: You’re joining the Lien Manager Beta.<br>Enjoy early access now and get an exclusive launch discount later.</div>

                    <input type="hidden" name="plan_type" value="basic" required autocomplete="off">
                    <div class="form-group">
                        <input id="" type="submit" value="START MY TRIAL" class="btn sub-btn">
                    </div>
                    <?php if(Session::has('error')): ?>
                        <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"> <?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>
                </form>
            </div>
            <br>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.layout.login_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/user/signup_basic.blade.php ENDPATH**/ ?>