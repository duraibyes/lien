<!-- Extends main layout form layout folder -->


<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Remedy Question'); ?>

<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Project Management
                <small>Remedy Question</small>
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
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of all Remedy Question</h3>
                            

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" id="remedy_search"
                                        value="<?php echo e(isset($_GET['remedyQuestion']) && $_GET['remedyQuestion'] != '' ? $_GET['remedyQuestion'] : ''); ?>"
                                        class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="button" data-type="remedy" class="btn btn-default search"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>State</th>
                                    <th>Project Type</th>
                                    <th>Tier Code</th>
                                    <th>Question Order</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    
                                </tr>
                                <?php if(count($remedyQuestions) > 0): ?>
                                    <?php $__currentLoopData = $remedyQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $remedyQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($remedyQuestion->state->name); ?></td>
                                            <td><?php echo e($remedyQuestion->type->project_type); ?></td>
                                            <td><?php echo e($remedyQuestion->tier->tier_code); ?></td>
                                            <td><?php echo e($remedyQuestion->question_order); ?></td>
                                            <td><?php echo e($remedyQuestion->question); ?></td>
                                            <td>
                                                <?php echo e($remedyQuestion->answer); ?>

                                            </td>
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5">No Tier available.</td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <?php echo e($remedyQuestions->appends(Request::except('page'))->links()); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
    <script>
        $('#remedy_search').keyup(function(e){
            if(e.keyCode == 13)
            {
                var tier = $('#remedy_search').val();
                var location = appendToQueryString('remedyQuestion', tier);
                window.location.href = location;
            }
        });
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
            var location = appendToQueryString('remedyQuestion', remedy);
            window.location.href = location;
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

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/remedy/remedy_question.blade.php ENDPATH**/ ?>