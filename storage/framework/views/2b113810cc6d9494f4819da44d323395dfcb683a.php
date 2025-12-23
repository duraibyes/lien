<?php $__env->startSection('title', 'Password reset'); ?>

<?php $__env->startSection('content'); ?>
    <div class="grey-section">
        <h3>Construction Lien Manager™ - Reset Password</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login">
                    <form method="post" action="<?php echo e(route('post.forgetPassword')); ?>">
                        <div id="loginContainer">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required autofocus
                                    autocomplete="off" />
                            </div>
                            <?php echo e(csrf_field()); ?>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('error')): ?>
                                <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="submit" name="Submit" value="Reset password" class="submit button" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <p>Don&rsquo;t have an account yet? <a href="<?php echo e(env('ASSET_URL')); ?>"
                        style="color:#3366ff;font-weight:bold;">Get Started</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="info-txt">
                    <br /><br />
                    <p>
                        Enter Your Project Data directly through NLB's online system with your Lien Manager<br /><br />
                        Access to the Premier Notice to Owner (NTO) Pre-Lien Providers<br />
                        You Receive the Support of Leading Local Construction Attorneys Network<br />
                        Lien Portal Access Available 24/7<br />
                        We have knowledge of all state and local construction lien laws<br />
                        <br />
                        Easy Access to Lien and Bond Claim Filing Nationwide...<br />
                        Need a Log in Account?<br />
                        Simply Call 1-855-Lien-Today <span class="ph-no">1-800-432-7799</span> for Registration
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/user/forgot_password.blade.php ENDPATH**/ ?>