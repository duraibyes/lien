<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Dashboard'); ?>

<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="<?php echo e(route('admin.project.view')); ?>"><span class="info-box-icon bg-aqua"><i
                                    class="fa fa-flag-o"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text">Projects</span>
                            <span class="info-box-number"><?php echo e($projects); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="<?php echo e(route('user.member')); ?>"><span class="info-box-icon bg-yellow"><i
                                    class="ion ion-ios-people"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text">Members</span>
                            <span class="info-box-number"><?php echo e($members); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="<?php echo e(route('user.sub')); ?>"><span class="info-box-icon bg-yellow"><i
                                    class="ion ion-ios-people-outline"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text">Sub Members</span>
                            <span class="info-box-number"><?php echo e($subMembers); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="<?php echo e(route('admin.job.info')); ?>"><span class="info-box-icon bg-aqua"><i
                                    class="fa fa-info-circle"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text">Job Information Sheets</span>
                            <span class="info-box-number"><?php echo e($jobInfos); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="<?php echo e(route('lien.list')); ?>"><span class="info-box-icon bg-yellow"><i
                                    class="fa fa-link"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text">Lien Providers</span>
                            <span class="info-box-number"><?php echo e($lienProviders); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Morris.js charts -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/admin/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/admin/bower_components/morris.js/morris.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/admin/dist/js/pages/dashboard.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/dashboard/dashboard.blade.php ENDPATH**/ ?>