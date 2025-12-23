<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Dynamic Title -->
    <title>
        NLB || <?php echo $__env->yieldContent('title'); ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
        href="<?php echo e(env('ASSET_URL')); ?>/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/css/newLogin.css">
    <link rel="shortcut icon" href="<?php echo e(env('ASSET_URL')); ?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/css/sweetalert.min.css">
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/chosen_v1.8.3/chosen.min.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link href="<?php echo e(env('ASSET_URL')); ?>/css/HoldOn.min.css" rel="stylesheet">
    <link href="<?php echo e(env('ASSET_URL')); ?>/admin_assets/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Dynamic Css -->
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/css/style.css">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<!--Body -->

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="<?php echo e(env('ASSET_URL')); ?>">
                                        <img src="<?php echo e(env('ASSET_URL')); ?>/images/nlb.png" alt="img" title="NLB">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 header-top-right">
                                <span class="free-consultation">
                                    
                                </span>
                                <span class="phone">
                                    800.432.7799
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <?php if(Auth::check() && Auth::user()->checkLienProvider()): ?>
                        <div class="col-md-9 col-sm-9">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        
                                        <li class="<?php echo e(\Request::is('lien') ? 'active' : ''); ?>"><a href="<?php echo e(route('lien.dashboard')); ?>">Dashboard</a></li>
                                        <li class="<?php echo e(\Request::is('lien/update/profile') ? 'active' : ''); ?>"><a href="<?php echo e(route('lien.update.profile')); ?>">Profile</a></li>

                                        
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            Hello,
                            <a class="pro-log dropdown" href="<?php echo e(route('member.update.profile')); ?>">
                                <?php ($user = \App\User::find(Auth::user()->id)); ?>
                                <?php if($user->details != '' && $user->details->image != ''): ?>
                                    <img src="<?php echo e(env('ASSET_URL')); ?>/image_logo/<?php echo e($user->details->image); ?>" width="20px" height="20px" class="img-circle special-img">
                                <?php else: ?>
                                    <img src="<?php echo e(env('ASSET_URL')); ?>/images/avatar5.png" width="20px" height="20px" class="img-circle special-img">
                                <?php endif; ?>
                            </a>
                            <?php echo e(ucwords(Auth::user()->name)); ?>

                            <span class="dropdown-toggle" role="alert" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </span>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo e(route('lien.update.profile')); ?>">Hello
                                    <?php echo e(ucwords(Auth::user()->name)); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('lien.update.profile')); ?>">My Account</a>
                                <a class="dropdown-item" href="<?php echo e(route('lien.logout')); ?>">Log out</a>

                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12 col-sm-12">
                            <p>Construction Lien Manager™ Log-in to Access Your Projects & Mechanic Lien Deadlines</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <section class="bodypart">
        <?php if(session()->has('try-error')): ?>
            <div class="alert alert-danger">
                <?php echo session('try-error'); ?>

            </div>
        <?php endif; ?>
        <!--   <?php if(Session::has('success')): ?>
        <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
    <?php endif; ?> -->
        <?php if(session()->has('date-error')): ?>
            <div class="alert alert-danger">
                <?php echo session('date-error'); ?>

            </div>
        <?php endif; ?>
        <div class="col-centered">
            <?php if(Session::has('success')): ?>
                <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
            <?php endif; ?>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </section>
    <!-- Modal Section -->
    <?php echo $__env->yieldContent('modal'); ?>
    <!-- jQuery 3 -->
    
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/admin/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/sweetalert.min.js"></script>
    <!-- datepicker -->
    <script
        src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
    </script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/create_project.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/chosen_v1.8.3/chosen.jquery.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/chosen-patch.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/HoldOn.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.date').datepicker({
                autoclose: true,
                format: 'mm/dd/yyyy'
            });

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!--Dynamic Javascript-->
    <?php echo $__env->yieldContent('script'); ?>
    <!-- For Append Query String -->
</body>

</html>
<?php /**PATH /home2/lienmanager/public_html/resources/views/lienProviders/layout/main.blade.php ENDPATH**/ ?>