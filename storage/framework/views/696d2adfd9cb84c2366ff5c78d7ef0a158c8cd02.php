<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>


    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="page-head">
                                <h2>Contact US</h2>
                            </div>
                            <div class="sub-heading">
                                <h3>We will be happy to answer any questions so feel free to contact us.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="gray-form">
                            <form action="<?php echo e(route('member.contact.us.post')); ?>" method="post" class="form-horizontal">

                                <div class="form-group">
                                    <!-- <label class="control-label col-md-4">UserName : </label> -->
                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control"
                                            value="<?php echo e(Auth::user()->name); ?>" placeholder="Enter your name" disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="control-label col-md-4">Email : </label> -->
                                    <div class="col-md-12">
                                        <input type="text" name="email" class="form-control"
                                            value="<?php echo e(Auth::user()->email); ?>" placeholder="Enter email" disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="">
                                            <select class="form-control" name="department">
                                                <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($role1->project_roles); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label class="control-label col-md-4">Message : </label> -->
                                    <div class="col-md-12">
                                        <textarea name="message" class="form-control" placeholder="Enter message"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
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
                                    <div class="form-group col-md-12">
                                        <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <button type="submit" class="orange-btn">
                                            Send Message
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-grid">
        <div class="card-row">
            <div class="card">
                <a href="#">
                    <img src="<?php echo e(asset('images/location-icon.png')); ?>" alt="">
                    <span class="font-normal">440 Central Avenue Highland Park, IL 60035</span>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <img src="<?php echo e(asset('images/chat-icon.png')); ?>" alt="">
                    <span class="font-normal">(800) 432-7799</span>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <img src="<?php echo e(asset('images/fax-icon.png')); ?>" alt="">
                    <span class="font-normal">(847) 432-8950</span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/user/contact_us.blade.php ENDPATH**/ ?>