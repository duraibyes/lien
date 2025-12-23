<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Member Plans'); ?>
<?php $__env->startSection('style'); ?>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0 !important;
        }

    </style>
<?php $__env->stopSection(); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="content-wrapper">
        <section class="content-header">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Members Plans
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Member Plans</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>State Count</th>
                                    <th>Monthly ($)</th>
                                    <th>Annually (9% discount)</th>
                                </tr>
                                <tbody>
                                    <?php if(count($packages) > 0): ?>
                                        <form action="<?php echo e(route('update.member.plan')); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>

                                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($package->state_lower_range . ' - ' . $package->state_upper_range); ?>

                                                    </td>
                                                    <td><input type="number" min="0" step="0.01"
                                                            value="<?php echo e($package->price); ?>"
                                                            name="price[<?php echo e($package->id); ?>][monthly]"></td>
                                                    <td><input readonly type="number" min="0" step="0.01"
                                                            value="<?php echo e($package->price * 12 - ($package->price * 12 * 9) / 100); ?>"
                                                            name="price[<?php echo e($package->id); ?>][yearly]"></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td colspan="4">
                                                    <input type="submit" class="btn btn-info">
                                                </td>
                                            </tr>
                                        </form>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4">No packages available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/admin/plan/members.blade.php ENDPATH**/ ?>