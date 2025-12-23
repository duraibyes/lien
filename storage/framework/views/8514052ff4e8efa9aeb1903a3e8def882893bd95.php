<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Remedy Dates'); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .main-tab-menu {
            background: #dcedff;
            margin-bottom: 5px;
            border-bottom: 1px solid #818294;
        }

        .main-tab-menu .nav-tabs {
            padding-bottom: 0;
        }

        .main-tab-menu .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            border-bottom: none;
            background: #00bfff;
            color: #fff;
            font-style: normal;
        }

        .main-tab-menu ul.nav-tabs>li {
            float: left;
            font-family: arial;
            font-size: 19px;
        }

        .tab-content {
            padding: 10px;
        }

    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Project Management
                <small>Remedy Dates</small>
            </h1>
        </section>
        <section class="content">
            <?php if(Session::has('success')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Session::has('try-error-rem')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('try-error-rem')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="main-tab-sec">
                            <div class="main-tab-menu">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a data-toggle="tab" href="#public" aria-expanded="true" class="public">Public</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#private" aria-expanded="true"
                                            class="private">Private</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content tab-final">
                                <div id="public" class="tab-pane fade in active">
                                    <form method="post" action="<?php echo e(route('remedy.hide.remedy_dates')); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <button class="btn btn-danger" type="Submit" type="button">Private</button>
                                        <div class="box-header">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-7">
                                                    <h3 class="box-title">List of all Remedy Dates</h3>
                                                </div>
                                                <div class="col-md-5 col-sm-5">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-5">
                                                            <div class="box-tools">
                                                                <div class="input-group input-group-sm"
                                                                    style="width: 150px;">
                                                                    <select class="form-control" name="state_id"
                                                                        id="state_id">

                                                                        <?php if($state->count() > 0): ?>
                                                                            <option selected>All City</option>
                                                                            <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($state->id); ?>"
                                                                                    <?php echo e($filter == $state->id ? 'selected' : ''); ?>>
                                                                                    <?php echo e($state->name); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php else: ?>
                                                                            No Record Found
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <div class="input-group-btn">
                                                                        <button type="button" data-type="remedy"
                                                                            class="btn btn-default filter"><i
                                                                                class="fa fa-filter"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-5">
                                                            <div class="box-tools">
                                                                <div class="input-group input-group-sm"
                                                                    style="width: 150px;">
                                                                    <input type="text" id="remedy_search"
                                                                        value="<?php echo e($search or ''); ?>"
                                                                        class="form-control pull-right"
                                                                        placeholder="Search">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" data-type="remedy"
                                                                            class="btn btn-default search"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th><input type="checkbox" id="select_all"></th>
                                                    <th>#</th>
                                                    <th>Remedy</th>
                                                    <th>Date name</th>
                                                    <th>Date Order</th>
                                                    <th>Date Number</th>
                                                    <th>Recurring</th>
                                                    
                                                </tr>
                                                <?php if(count($remedyDates) > 0): ?>
                                                    <?php $__currentLoopData = $remedyDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $remedyDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><input type="checkbox" name="hideRemedyDates[]"
                                                                    value="<?php echo e($remedyDate->id); ?>" class="remdate"></td>
                                                            <td><?php echo e($key + 1); ?></td>
                                                            
                                                            <?php if(isset($remedyDate->getRemedy)): ?>
                                                                <td><?php echo e($remedyDate->getRemedy->state->name or 'NULL'); ?>/<?php echo e($remedyDate->getRemedy->type->project_type or 'NULL'); ?>/<?php echo e($remedyDate->getRemedy->remedy or 'NULL'); ?></td>
                                                            <?php else: ?>
                                                                <td></td>
                                                            <?php endif; ?>
                                                            <td><?php echo e($remedyDate->date_name); ?></td>
                                                            <td><?php echo e($remedyDate->date_order); ?></td>
                                                            <td><?php echo e($remedyDate->date_number); ?></td>
                                                            <td>
                                                                <?php echo e($remedyDate->recurring); ?>

                                                            </td>
                                                            
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">No Remedy Date available.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                        <div>
                                            <!--   <button class="btn btn-danger pull-right"  type="Submit" type="button">Private</button>
                                  </div> -->
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">
                                                <ul class="pagination pagination-sm no-margin pull-right">
                                                    <?php echo e($remedyDates->appends(request()->query())->links()); ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="private" class="tab-pane fade">
                                    <form method="post" action="<?php echo e(route('remedy.hide.remedy_dates_private')); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <button class="btn btn-danger" type="Submit" type="button">public</button>
                                        <div class="box-header">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-7">
                                                    <h3 class="box-title">List of all Remedy Dates</h3>
                                                </div>
                                                <div class="col-md-5 col-sm-5">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-5">
                                                            <div class="box-tools">
                                                                <div class="input-group input-group-sm"
                                                                    style="width: 150px;">
                                                                    <select class="form-control" name="state_id"
                                                                        id="state_id1">
                                                                        <?php if($state1->count() > 0): ?>

                                                                            <option selected>All City</option>

                                                                            <?php $__currentLoopData = $state1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($state1->id); ?>"
                                                                                    <?php echo e($filter_private == $state1->id ? 'selected' : ''); ?>>
                                                                                    <?php echo e($state1->name); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php else: ?>
                                                                            No Record Found
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <div class="input-group-btn">
                                                                        <button type="button" data-type="remedy"
                                                                            class="btn btn-default filter1"><i
                                                                                class="fa fa-filter"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-sm-5">
                                                            <div class="box-tools">
                                                                <div class="input-group input-group-sm"
                                                                    style="width: 150px;">
                                                                    <input type="text" id="remedy_search_private"
                                                                        value="<?php echo e($search_private or ''); ?>"
                                                                        class="form-control pull-right"
                                                                        placeholder="Search">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" data-type="remedy"
                                                                            class="btn btn-default search_private"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th><input type="checkbox" id="select_all_private"></th>
                                                        <th>#</th>
                                                        <th>Remedy</th>
                                                        <th>Date name</th>
                                                        <th>Date Order</th>
                                                        <th>Date Number</th>
                                                        <th>Recurring</th>
                                                        
                                                    </tr>
                                                    <?php if(count($remedyDatesPrivate) > 0): ?>
                                                        <?php $__currentLoopData = $remedyDatesPrivate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $remedyDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><input type="checkbox" name="hideRemedyDates[]"
                                                                        value="<?php echo e($remedyDate->id); ?>"
                                                                        class="remdate_private"></td>
                                                                <td><?php echo e($key + 1); ?></td>
                                                                
                                                                <td><?php echo e($remedyDate->getRemedy->state->name or 'NULL'); ?>/<?php echo e($remedyDate->getRemedy->type->project_type or 'NULL'); ?>/<?php echo e($remedyDate->getRemedy->remedy or 'NULL'); ?>

                                                                </td>
                                                                <td><?php echo e($remedyDate->date_name); ?></td>
                                                                <td><?php echo e($remedyDate->date_order); ?></td>
                                                                <td><?php echo e($remedyDate->date_number); ?></td>
                                                                <td>
                                                                    <?php echo e($remedyDate->recurring); ?>

                                                                </td>
                                                                
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="5">No Remedy Date available.</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </table>
                                            </div>
                                            <div>
                                                <!--   <button class="btn btn-danger pull-right"  type="Submit" type="button">Private</button>
                                  </div> -->
                                                <!-- /.box-body -->
                                                <div class="box-footer clearfix">
                                                    <ul class="pagination pagination-sm no-margin pull-right">
                                                        <?php echo e($remedyDatesPrivate->appends(request()->query())->links()); ?>

                                                    </ul>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        var tab = '<?php echo $tab; ?>';
        //console.log(flag);
        if (tab == 'private') {
            $('.private').trigger('click');
        } else {
            $('.public').trigger('click');
        }

        $('.error').on('keyup', function() {
            $(this).parent().parent('div').removeClass('has-error');
            $(this).parent('div').children('.help-block').remove();
            $('.error-tag-field').hide();
            $('.error-tier-field').hide();
        });
        $('.error').on('change', function() {
            $(this).parent().parent('div').removeClass('has-error');
            $(this).parent('div').children('.help-block').remove();
            $('.error-tag-field').hide();
            $('.error-tier-field').hide();
        });
        $('.search').on('click', function() {
            var remedy = $('#remedy_search').val();;
            var location = appendToQueryString('remedyDateSearch', remedy);
            window.location.href = location;
        });
        $('.search_private').on('click', function() {
            var remedy = $('#remedy_search_private').val();;
            var location = appendToQueryString('remedyDateSearchPrivate', remedy);
            window.location.href = location;
        });
        $('#remedy_search_private').keyup(function(e){
            if(e.keyCode == 13)
            {
                var tier = $('#remedy_search_private').val();
                var location = appendToQueryString('remedyDateSearchPrivate', tier);
                window.location.href = location;
            }
        });
        $('#remedy_search').keyup(function(e){
            if(e.keyCode == 13)
            {
                var tier = $('#remedy_search').val();
                var location = appendToQueryString('remedyDateSearch', tier);
                window.location.href = location;
            }
        });
        $('.filter').on('click', function() {
            var remedy = $('#state_id').val();;
            var location = appendToQueryString('state_id', remedy);
            window.location.href = location;
        });
        $('.filter1').on('click', function() {
            var remedy = $('#state_id1').val();;
            var location = appendToQueryString('state_id1', remedy);
            window.location.href = location;
        });
        $('.public').on('click', function() {
            var remedy = 'public';
            var location = appendToQueryString('tab', remedy);
            // $('.public').trigger('click');
            window.location.href = location;
        });
        $('.private').on('click', function() {
            var remedy1 = 'private';
            var location = appendToQueryString('tab', remedy1);
            //$('.private').trigger('click');
            window.location.href = location;
        });
        $('#select_all').change(function() {
            if ($(this).is(':checked')) {
                $('.remdate').attr('checked', true);
            } else {
                $('.remdate').attr('checked', false);
            }
            // $('.remdate').attr('checked', true);
        });
        $('#select_all_private').change(function() {
            if ($(this).is(':checked')) {
                $('.remdate_private').attr('checked', true);
            } else {
                $('.remdate_private').attr('checked', false);
            }
            // $('.remdate').attr('checked', true);
        });
        $('.delete').on('click', function() {
            var id = $(this).data('id');
            var type = $(this).data('type');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('management.delete')); ?>",
                    data: {
                        id: id,
                        type: type,
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        if (data.status) {
                            swal({
                                position: 'center',
                                type: 'success',
                                title: type + ' deleted successfully',
                            }).then(function() {
                                window.location.reload();
                            });

                        } else {
                            swal(
                                'Error',
                                data.message,
                                'error'
                            )
                        }
                    }
                });
            });
        });

        $('.addTier').on('click', function() {
            var type = $(this).data('type');
            $('.error-tier-field').hide();
            $('#addTierButton').find('form').trigger('reset');
            if (type == 'edit') {
                var role = $(this).data('role');
                $('#role_id').val(role);
                var customer_id = $(this).data('customer_id');
                $('#customer_id').val(customer_id);
                var limit = $(this).data('limit');
                $('#tierLimit').val(limit);
                var code = $(this).data('code');
                $('#tierCode').val(code);
                var id = $(this).data('id');
                $('#tierId').val(id);
                $('.tierName').text('Edit Customer');
                $('#addTierButton').attr('data-type', 'edit');
            } else {
                $('.tierName').text('Add Customer');
                $('#addTierButton').attr('data-type', 'add');
            }
            $('#addTierModal').modal('show');
        });
        $('#addTierButton').on('click', function() {
            var role_id = $('#role_id').val();
            if (role_id == '') {
                $('#role_id').parent().parent('div').addClass('has-error');
                $('#role_id').parent('div').append('<span class="help-block">Please select a role</span>');
                return false;
            }
            var customer_id = $('#customer_id').val();
            if (customer_id == '') {
                $('#customer_id').parent().parent('div').addClass('has-error');
                $('#customer_id').parent('div').append('<span class="help-block">Please select a customer</span>');
                return false;
            }
            var tierLimit = $('#tierLimit').val();
            if (tierLimit == '') {
                $('#tierLimit').parent().parent('div').addClass('has-error');
                $('#tierLimit').parent('div').append('<span class="help-block">Please enter a tier limit</span>');
                return false;
            }
            var tierCode = $('#tierCode').val();
            if (tierCode == '') {
                $('#tierCode').parent().parent('div').addClass('has-error');
                $('#tierCode').parent('div').append('<span class="help-block">Please enter a tier code</span>');
                return false;
            }
            var id = $('#tierId').val();
            var type = $(this).data('type');
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('add.project.tier')); ?>",
                data: {
                    id: id,
                    type: type,
                    role_id: role_id,
                    customer_id: customer_id,
                    tierLimit: tierLimit,
                    tierCode: tierCode,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                beforeSend: function() {
                    $('.loader').show();
                },
                complete: function() {
                    $('.loader').hide();
                },
                success: function(data) {
                    if (data.status == true) {
                        window.location.reload();
                    } else {
                        $('#error-tier').text(data.message);
                        $('.error-tier-field').show();
                    }

                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/remedy/remedy_dates.blade.php ENDPATH**/ ?>