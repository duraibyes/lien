<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Profile'); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Profile</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Update admin profile details.</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">

                            <form action="<?php echo e(route('admin.profile.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="admin_id" value="<?php echo e(isset($admin) ? $admin->id : '0'); ?>">
                                <table class="table profile-table">
                                    <?php if(Session::has('success-update')): ?>
                                        <p class="alert alert-success"><?php echo e(Session::get('success-update')); ?></p>
                                    <?php endif; ?>
                                    <tr class="table-select">
                                        <td colspan="3">
                                            <table class="table inner-table">
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            First name: <input type="text" name="first_name" id="first_name"
                                                                class="form-control"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->first_name : ''); ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Last name: <input type="text" name="last_name" id="last_name"
                                                                class="form-control"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->last_name : ''); ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Email: <input type="text" name="email" id="user_email"
                                                                class="form-control"
                                                                value="<?php echo e(isset($admin) ? $admin->email : ''); ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Company: 
                                                            <select name="user_company" id="user_company"
                                                                class="form-control chosen">
                                                                <option value=""></option>
                                                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($key); ?>"><?php echo e($company); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Address : <input type="text" name="user_address"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->address : ''); ?>"
                                                                id="user_address" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            City : <input type="text" name="user_city"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->city : ''); ?>"
                                                                id="user_city" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            State : <select name="user_state" id="user_state"
                                                                class="form-control">
                                                                <option value="">-----Select-----</option>
                                                                <?php if(isset($states)): ?>
                                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($key); ?>"
                                                                            <?php if(isset($adminDetails) && !is_null($adminDetails) && $adminDetails->state_id == $key): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($state); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Zip : <input type="text" name="zip"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->zip : ''); ?>"
                                                                id="zip" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Phone : <input type="text" name="phone"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->phone : ''); ?>"
                                                                id="phone" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Website : <input type="text" name="website"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->website : ''); ?>"
                                                                id="website" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Office Phone : <input type="text" name="office_phone"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->office_phone : ''); ?>"
                                                                id="office_phone" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="pad15 email">
                                                            Avatar : <input type="file" name="avatar" id="avatar"
                                                                class="form-control" accept="image/*">
                                                            <input type="hidden" name="company_name" id="company_name"
                                                                value="<?php echo e(isset($adminDetails) && !is_null($adminDetails) ? $adminDetails->company : ''); ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <?php if($errors->any()): ?>
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="text-center">
                                                <input type="submit" class="btn btn-info" value="Save Changes">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        <?php if(isset($adminDetails) && !is_null($adminDetails)): ?>
            $('.chosen').val('<?php echo e($adminDetails->company_id); ?>').trigger('chosen:updated');
        <?php endif; ?>

        $('.chosen').chosen({
            width: '100%',
            no_results_text: "Oops, nothing found! <a class='add_company_from_search'>Click here to add company</a>"
        }).change(
            function() {
                if ($(this).val() != "new_data") {
                    $.ajax({
                        url: '<?php echo e(route('autocomplete.admin.company')); ?>',
                        dataType: "json",
                        data: {
                            key: $(this).val(),
                            _token: '<?php echo e(csrf_token()); ?>'
                        },
                        success: function(response) {
                            if (response.success && response.data !== null) {
                                setData(response);
                                $('#company_name').val(response.data.company);
                            } else {
                                $('#company_name').val('');
                                reset();
                            }
                        }
                    });

                } else {
                    $('#company_name').val('');
                    reset();
                }
            }
        );

        function reset() {
            $('#website').val("");
            $('#user_address').val("");
            $('#user_city').val("");
            $('#user_state').val("");
            $('#zip').val("");
            $('#office_phone').val("");
        }

        function setData(response) {
            $('#website').val(response.data.website);
            $('#user_address').val(response.data.address);
            $('#user_city').val(response.data.city);
            $('#user_state').val(response.data.state_id);
            $('#zip').val(response.data.zip);
            $('#office_phone').val(response.data.phone);
        }

        $(document).delegate('.add_company_from_search', 'click', function() {
            var company = chosen.data('chosen').get_search_text();
            $(".chosen option[value='new_data']").remove();
            $('.chosen').append("<option value='new_data'>" + company + "</option>");
            $('.chosen').val('new_data'); // if you want it to be automatically selected
            $('.chosen').trigger("chosen:updated");
            $('#company_name').val(company);
            reset();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/admin/profile/index.blade.php ENDPATH**/ ?>