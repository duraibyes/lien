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
    <link rel="shortcut icon" href="<?php echo e(env('ASSET_URL')); ?>/images/favicon.ico"/>
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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
    .navbar-default .dropdown-menu.notify-drop {
        min-width: 330px;
        background-color: #fff;
        min-height: 360px;
        max-height: 360px;
    }
    .navbar-default .dropdown-menu.notify-drop .notify-drop-title {
        border-bottom: 1px solid #e2e2e2;
        padding: 5px 15px 10px 15px;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content {
        min-height: 280px;
        max-height: 280px;
        overflow-y: scroll;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track
    {
        background-color: #F5F5F5;
    }

    .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar
    {
        width: 8px;
        background-color: #F5F5F5;
    }

    .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb
    {
        background-color: #ccc;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li {
        border-bottom: 1px solid #e2e2e2;
        padding: 10px 0px 5px 0px;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li:nth-child(2n+0) {
        background-color: #fafafa;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li:after {
        content: "";
        clear: both;
        display: block;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li:hover {
        background-color: #fcfcfc;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li:last-child {
        border-bottom: none;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li .notify-img {
        float: left;
        display: inline-block;
        width: 45px;
        height: 45px;
        margin: 0px 0px 8px 0px;
    }
    .navbar-default .dropdown-menu.notify-drop .allRead {
        margin-right: 7px;
    }
    .navbar-default .dropdown-menu.notify-drop .rIcon {
        float: right;
        color: #999;
    }
    .navbar-default .dropdown-menu.notify-drop .rIcon:hover {
        color: #333;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li a {
        font-size: 12px;
        font-weight: normal;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li {
        font-weight: bold;
        font-size: 11px;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li hr {
        margin: 5px 0;
        width: 70%;
        border-color: #e2e2e2;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content .pd-l0 {
        padding-left: 0;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li p {
        font-size: 11px;
        color: #666;
        font-weight: normal;
        margin: 3px 0;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li p.time {
        font-size: 10px;
        font-weight: 600;
        top: -6px;
        margin: 8px 0px 0px 0px;
        padding: 0px 3px;
        border: 1px solid #e2e2e2;
        position: relative;
        background-image: linear-gradient(#fff,#f2f2f2);
        display: inline-block;
        border-radius: 2px;
        color: #B97745;
    }
    .navbar-default .dropdown-menu.notify-drop .drop-content > li p.time:hover {
        background-image: linear-gradient(#fff,#fff);
    }
    .navbar-default .dropdown-menu.notify-drop .notify-drop-footer {
        border-top: 1px solid #e2e2e2;
        bottom: 0;
        position: relative;
        padding: 8px 15px;
    }
    .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a {
        color: #777;
        text-decoration: none;
    }
    .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a:hover {
        color: #333;
    }

    hr {
        margin: 10px;
    }

    .notification-dropdown {
        width: 400px !important;
    }

    input{
        visibility:hidden;
    }

    .padding-xs { padding: .25em; }
    .padding-sm { padding: .5em; }
    .padding-md { padding: 1em; }
    .padding-lg { padding: 1.5em; }
    .padding-xl { padding: 3em; }

    .padding-x-xs { padding: .25em 0; }
    .padding-x-sm { padding: .5em 0; }
    .padding-x-md { padding: 1em 0; }
    .padding-x-lg { padding: 1.5em 0; }
    .padding-x-xl { padding: 3em 0; }

    .padding-y-xs { padding: 0 .25em; }
    .padding-y-sm { padding: 0 .5em; }
    .padding-y-md { padding: 0 1em; }
    .padding-y-lg { padding: 0 1.5em; }
    .padding-y-xl { padding: 0 3em; }

    .padding-top-xs { padding-top: .25em; }
    .padding-top-sm { padding-top: .5em; }
    .padding-top-md { padding-top: 1em; }
    .padding-top-lg { padding-top: 1.5em; }
    .padding-top-xl { padding-top: 3em; }

    .padding-right-xs { padding-right: .25em; }
    .padding-right-sm { padding-right: .5em; }
    .padding-right-md { padding-right: 1em; }
    .padding-right-lg { padding-right: 1.5em; }
    .padding-right-xl { padding-right: 3em; }

    .padding-bottom-xs { padding-bottom: .25em; }
    .padding-bottom-sm { padding-bottom: .5em; }
    .padding-bottom-md { padding-bottom: 1em; }
    .padding-bottom-lg { padding-bottom: 1.5em; }
    .padding-bottom-xl { padding-bottom: 3em; }

    .padding-left-xs { padding-left: .25em; }
    .padding-left-sm { padding-left: .5em; }
    .padding-left-md { padding-left: 1em; }
    .padding-left-lg { padding-left: 1.5em; }
    .padding-left-xl { padding-left: 3em; }

    .margin-xs { margin: .25em; }
    .margin-sm { margin: .5em; }
    .margin-md { margin: 1em; }
    .margin-lg { margin: 1.5em; }
    .margin-xl { margin: 3em; }

    .margin-x-xs { margin: .25em 0; }
    .margin-x-sm { margin: .5em 0; }
    .margin-x-md { margin: 1em 0; }
    .margin-x-lg { margin: 1.5em 0; }
    .margin-x-xl { margin: 3em 0; }

    .margin-y-xs { margin: 0 .25em; }
    .margin-y-sm { margin: 0 .5em; }
    .margin-y-md { margin: 0 1em; }
    .margin-y-lg { margin: 0 1.5em; }
    .margin-y-xl { margin: 0 3em; }

    .margin-top-xs { margin-top: .25em; }
    .margin-top-sm { margin-top: .5em; }
    .margin-top-md { margin-top: 1em; }
    .margin-top-lg { margin-top: 1.5em; }
    .margin-top-xl { margin-top: 3em; }

    .margin-right-xs { margin-right: .25em; }
    .margin-right-sm { margin-right: .5em; }
    .margin-right-md { margin-right: 1em; }
    .margin-right-lg { margin-right: 1.5em; }
    .margin-right-xl { margin-right: 3em; }

    .margin-bottom-xs { margin-bottom: .25em; }
    .margin-bottom-sm { margin-bottom: .5em; }
    .margin-bottom-md { margin-bottom: 1em; }
    .margin-bottom-lg { margin-bottom: 1.5em; }
    .margin-bottom-xl { margin-bottom: 3em; }

    .margin-left-xs { margin-left: .25em; }
    .margin-left-sm { margin-left: .5em; }
    .margin-left-md { margin-left: 1em; }
    .margin-left-lg { margin-left: 1.5em; }
    .margin-left-xl { margin-left: 3em; }
    </style>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '317272046700723');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=317272046700723&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/css/app.css?version=3423804923s1">
</head>
<!--Body -->
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::check()): ?>
    <?php
    $projects = \App\Http\Controllers\NotificationController::getUserProjectDeadlines();
    ?>
<?php endif; ?>

<section class="bodypart">
    <div class="mainHolder">
        <!--<div class="leftSec">
            <div class="leftInner">
                <div class="logo">
                    <a href="<?php echo e(env('ASSET_URL')); ?>">
                        <img src="<?php echo e(url('/')); ?>/images/lien_logo_white.png" alt="img" title="NLB">
                    </a>
                </div>
                <div id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav sidebar-menu" data-widget="tree">
                        <li class="hd">View Mode</li>
                        <li class="flex items-center">
                            <?php if(request()->routeIs('member.create.project') || request()->routeIs('member.create.express.project')): ?>
                                <a href="<?php echo e(route('express-toggle')); ?>?new=true">
                            <?php else: ?>
                                <a href="<?php echo e(route('express-toggle')); ?>">
                            <?php endif; ?>
                                <span class="total-small">
                                    Express
                                </span>

                                <label for="express-toogle" id="express-toggle-label" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                    <input type="checkbox" disabled name="express-toogle" id="express-toogle" class="sr-only" <?php echo e(session()->has('express') ? '' : 'checked'); ?> >
                                    <div class="line"></div>
                                    <div class="dot"></div>
                                    </div>
                                    <div class="">

                                    </div>
                                </label>

                                <span class="total-small">
                                    Full View
                                </span>
                            </a>
                        </li>

                        <li class="hd">Main</li>
                        <li class="<?php echo e((\Request::is('member'))? 'active': ''); ?>">
                            <a href="<?php echo e(route('member.dashboard')); ?>">
                                <img src="<?php echo e(url('/')); ?>/images/dash-icon.png" alt="img" title="NLB">
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="hd">Quick Add</li>
                        <?php if(! session()->has('express')): ?>
                            <li class="<?php echo e((\Request::is('member/new-claim'))? 'active': ''); ?>">
                                <a href="<?php echo e(route('member.create.project')); ?>">
                                    <img src="<?php echo e(url('/')); ?>/images/new-icon.png" alt="img" title="NLB">
                                    <span>Start New Project</span>
                                </a>
                            </li>







                        <?php else: ?>
                            <li class="<?php echo e((\Request::is('member/new-claim'))? 'active': ''); ?>">
                                <a href="<?php echo e(route('member.create.express.project')); ?>">
                                    <img src="<?php echo e(url('/')); ?>/images/new-icon.png" alt="img" title="NLB">
                                    <span>Start New Project</span>
                                </a>
                            </li>







                        <?php endif; ?>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo e(route('member.contact.us')); ?>">
                                <img src="<?php echo e(url('/')); ?>/images/help-icon.png" alt="img" title="NLB">
                                <span>Get Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('member.logout')); ?>">
                                <img src="<?php echo e(url('/')); ?>/images/logout-icon.png" alt="img" title="NLB">
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>-->

        <div class="rightSec">
            <div class="rightTop">
                <div style="position: relative;">
                    <span class="search dropdown-toggle" id="dropdownMenuButton1" role="alert" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="#" style="color:#333; text-decoration:none;">
                            <!--<img src="<?php echo e(url('/')); ?>/images/search.png" alt="img" class="search-img">-->
                            <i class="fa fa-search" aria-hidden="true" style="color:#000;"></i> Search for...
                        </a>
                    </span>
                    <div class="dropdown-menu dropdown-search" id="dropdownMenu5" aria-labelledby="dropdownMenuButton" style="top:20px; left:15px">

                        <input type="text"
                        id="projectSearch"
                        placeholder="Search.."
                        value="<?php echo e(isset($_GET['projectDetails']) && $_GET['projectDetails'] != '' ?$_GET['projectDetails']:''); ?>"
                        class="form-control">

                        <!-- <div class="dropdown-menu-filter"> -->
                        <ul class="statefilter">
                            <h4><label class="checkbox" for="filter">State</label></h4>
                            <?php $__currentLoopData = $states_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="checkbox" for="state_<?php echo e($key); ?>">
                                    <input name="state" value = "<?php echo e($state->id); ?>"class="filter" type="checkbox" id="state_<?php echo e($key); ?>">
                                    <?php echo e($state->name); ?>

                                </label>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <ul>
                            <h4><label class="checkbox" for="filter">Customer</label></h4>
                            <?php
                            $c=0;
                            foreach ($customer_codes as $customer) {?>
                                <li><label class="checkbox" for="customer_<?php echo $c;?>"><input name="customer" value = "<?php echo $customer->id ?>"class="filter" type="checkbox" id="customer_<?php echo $c;?>"><?php echo $customer->name  ?></label>
                                </li> <?php
                                $c++;
                            }?>
                        </ul>
                        <ul>
                            <h4><label class="checkbox" for="filter">Role</label></h4>
                            <?php
                            $r=0;
                            foreach ($roles as $role) {?>
                                <li><label class="checkbox" for="role_<?php echo $r;?>"><input name="prole" value = "<?php echo $role->id ?>"class="filter" type="checkbox" id="role_<?php echo $r;?>"><?php echo $role->project_roles  ?></label>
                                </li> <?php
                                $r++;
                            }?>
                        </ul>
                        <ul>
                            <h4><label class="checkbox" for="filter">Project Type</label></h4>
                            <?php
                            $t=0;
                            foreach ($types as $type) {?>
                                <li><label class="checkbox" for="type_<?php echo $t;?>"><input name="ptype" value = "<?php echo $type->id ?>"class="filter" type="checkbox" id="filter_<?php echo $t;?>"><?php echo $type->project_type  ?></label>
                                </li> <?php
                                $t++;
                            }?>
                        </ul>

                        <button type="submit" data-type="project" class="btn s-button search1"><i
                            class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <?php if(Session::get('parents')): ?>
                    <div>
                        Return to:
                        <?php
                        $index = 0;
                        foreach (Session::get('parents') as $key => $value) {
                            $index++;
                            if($index < count(Session::get('parents'))) {
                                echo '<a href="/member?parent='.$key.'">'.$value.'</a> >> ';
                             } else {
                                echo '<a href="/member?parent='.$key.'">'.$value.'</a>';
                            }
                        } ?>
                    </div>
                <?php endif; ?>
                <div class="flex items-center">
                    <?php if(Auth::check() && Auth::user()->isMember()): ?>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px;"></i>
                            </a>
                            <ul class="dropdown-menu notification-dropdown notify-drop" style="max-height: 600px; overflow-y: scroll;overflow-x: hidden;min-width: 200px;">
                                <div class="notify-drop-title">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"><h4 style="padding-left:5%">Notifications<h4></div>
                                        <hr>
                                    </div>
                                    <!-- end notify title -->
                                    <!-- notify content -->
                                    <div class="drop-content">
                                        <?php if(count($projects) == 0): ?>
                                            <div class="" style="padding:2%; padding-left:12px;">
                                                You don't have any notifications
                                            </div>
                                        <?php else: ?>
                                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <div class="" style="padding:2%; padding-left:12px;">
                                                        You have deadline for <b> <a> <?php echo e($proj->project_name); ?> </a></b> after <b> <?php echo e($proj->days); ?> </b> days.
                                                    </div>

                                                    
                                                    <hr>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="userMenu">
                            <a class="pro-log" href="<?php echo e(route('member.update.profile')); ?>">
                                <?php ($user = \App\User::find(Auth::id())); ?>
                                <?php if($user->details != '' && $user->details->image != ''): ?>
                                    <img src="<?php echo e(env('ASSET_URL')); ?>/image_logo/<?php echo e($user->details->image); ?>"  width="25px" height="25px" class="img-circle">
                                <?php else: ?>
                                    <img src="<?php echo e(env('ASSET_URL')); ?>/images/avatar5.png" width="25px" height="25px" class="img-circle">
                                <?php endif; ?>
                            </a>
                            <div class="dropdown">
                                <span class="dropdown-toggle" role="alert" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span style="cursor: pointer;">
                                        <?php echo e(ucwords(Auth::user()->name)); ?>

                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </span>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo e(route('member.update.profile')); ?>" style="display:none;">Hello <?php echo e(ucwords(Auth::user()->name)); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('member.update.profile')); ?>">My Account</a>
                                    <a class="dropdown-item" href="<?php echo e(route('member.logout')); ?>">Log out</a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div>
                            <p>Construction Lien Manager™ Log-in to Access Your Projects & Mechanic Lien Deadlines</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div style="font-size: 16px;line-height: 20px;margin: 40px 0;">
                <?php if( \Route::current()->getName() == "member.dashboard" ): ?>
                        <?php if(Auth::check() && Auth::user()->isMember()): ?>
                            <span style="color:#1083FF; font-size:24px;">
                                Hello <?php echo e(ucwords(Auth::user()->name)); ?>

                            </span>, Welcome!
                            <br>
                            <span style="color:#959cae; font-size:13px;">
                                Here's your dashboard to go over all of your projects
                            </span>
                        <?php endif; ?>
                <?php else: ?>
                    <?php if(isset($selected_project) && isset($_GET['edit'])): ?>
                        <div class="page-head">
                            <h2>Job Information Sheet</h2>

                            
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <?php if(session()->has('try-error')): ?>
                <div class="alert alert-danger">
                    <?php echo session('try-error'); ?>

                </div>
            <?php endif; ?>

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

            <?php if(Auth::check() && Auth::user()->isMember()): ?>
                <!--<div class="create-buttons">
                    <a href="<?php echo e(route('member.create.project')); ?>" class="create-button create-button--project" title="Create A Project">
                        <i class="fa fa-plus create-button--icon" aria-hidden="true"></i>
                    </a>
                    <button class="create-button create-button--file" title="Find A Project" data-toggle="modal" data-target="#fileCreateModal">
                        <i class="fa fa-file-text-o create-button--icon create-button--icon--notransform" aria-hidden="true"></i>
                    </button>
                </div>
                <?php echo $__env->make('basicUser.modals.fileCreateModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>

    <!--<p class="all-rights">All rights reserved. lienmanager.com</p>-->
</section>

<!-- Modal Section -->
<?php echo $__env->yieldContent('modal'); ?>

<script src="<?php echo e(env('ASSET_URL')); ?>/js/admin/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/js/sweetalert.min.js"></script>
<!-- datepicker -->
<script src="<?php echo e(env('ASSET_URL')); ?>/admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/js/create_project.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/chosen_v1.8.3/chosen.jquery.min.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/js/chosen-patch.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/js/HoldOn.min.js"></script>
<script src="<?php echo e(env('ASSET_URL')); ?>/vine/common/vine/vine.js?r=<?php echo time();?>"></script>
<?php if(Auth::check() && Auth::user()->isMember()): ?>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/createJobInfo.js"></script>
<?php endif; ?>
<?php if(Auth::check() && Auth::user()->isMember()): ?>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/project_dash.js?r=<?php echo time();?>"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/vine/member/js/theme.js"></script>
<?php endif; ?>

<script>
$(document).ready(function () {
    $('.date').datepicker({
        autoclose: true,
        format: 'mm/dd/yyyy'
    });

    $('[data-toggle="tooltip"]').tooltip();
    $(document).on('click', '#openFile', function(e){
        let target = $('#selectProject').val()
        let url = "<?php echo e(url('/')); ?>" + '/member/project/job-info-sheet/' + target
        window.location = url
    })

    $('.treeview').on('click', function(e){
        $(this).find('.treeview-menu').toggle();
    })

    $('#express-toggle-label').on('click', function(e) {
        <?php if(session()->has('express')): ?>
            <?php if(request()->routeIs('member.create.project') || request()->routeIs('member.create.express.project')): ?>
                window.location = "<?php echo e(route('express-toggle')); ?>?new=true&express=true"
            <?php else: ?>
                window.location = "<?php echo e(route('express-toggle')); ?>?express=true"
            <?php endif; ?>
        <?php else: ?>
            <?php if(request()->routeIs('member.create.project') || request()->routeIs('member.create.express.project')): ?>
                window.location = "<?php echo e(route('express-toggle')); ?>?new=true"
            <?php else: ?>
                window.location = "<?php echo e(route('express-toggle')); ?>"
            <?php endif; ?>
        <?php endif; ?>
    })

});

</script>

<script type="text/javascript">

  <?php if(isset($project) && gettype($project) === 'object'): ?> {
  $('.btn-view-jobsheet').on('click', function(event) {



      var project_id  = "<?php echo e($project->id); ?>";

      //event.stopPropagation();
      event.preventDefault();
      // 16 aug
      window.location.href = '<?php echo e(env('ASSET_URL')); ?>' + '/member/project/job-info-sheet/' + project_id;

  });
  }
  <?php endif; ?>
</script>



<!--Dynamic Javascript-->
<?php echo $__env->yieldContent('script'); ?>
<!-- For Append Query String -->
<script>
$(document).ready(function () {
    $('form').attr("autocomplete", "off");
    $('input').css('visibility', 'visible');

    //$('form').disableAutoFill();
});

</script>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/layout/main.blade.php ENDPATH**/ ?>