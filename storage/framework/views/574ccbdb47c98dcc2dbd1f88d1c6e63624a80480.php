<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Job request list'); ?>
<!-- Main Content -->

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Projects
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of all projects</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <?php if(session()->has('date-error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo session('date-error'); ?>

                                </div>
                            <?php endif; ?>
                            <table class="table table-hover">
                                

                                <tr>
                                    <th>#</th>
                                    <th>
                                        Client Company Name
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="project_name"
                                               data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'user' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Project Name
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="project_name"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Customer Company Name
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="customer_contract_id"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_contract_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Customer Contact
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="customer_contract_id"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_contract_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Customer Phone number
                                    </th>
                                    <th>
                                        Entry Date
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="created_at"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'created_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Next Action Date
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="updated_at"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'updated_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        State
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="state_id"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'state_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Type
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="project_type_id"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_type_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Status
                                        <a>
                                            <i class="fa fa-sort" aria-hidden="true" data-col="status"
                                                data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'status' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                        </a>
                                    </th>
                                    <th>
                                        Lien Providers
                                    </th>
                                    <th>
                                        User Action
                                    </th>
                                </tr>
                                <?php if(count($projects) > 0): ?>
                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <?php
                                                $company = 'N/A';
                                                $phone_number = 'N/A';
                                                if (!is_null($project->customer_contract) && !is_null($project->customer_contract->getContacts)) {
                                                    if ($project->customer_contract->getContacts->type == '0') {
                                                        $phone_number = !is_null($project->customer_contract->getContacts->phone) ? $project->customer_contract->getContacts->phone : 'N/A';
                                                        $company = !is_null($project->customer_contract) && !is_null($project->customer_contract->company) ? $project->customer_contract->company->company : 'N/A';
                                                    }
                                                }
                                            ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e(!is_null($project->name) ? $project->name: ''); ?></td>
                                            <td><?php echo e($project->project_name); ?></td>
                                            <td><?php echo e(isset($company) ? $company : 'N/A'); ?></td>
                                            <td><?php echo e(!is_null($project->customer_contract) && !is_null($project->customer_contract->getContacts) ? $project->customer_contract->getContacts->first_name . ' ' . $project->customer_contract->getContacts->last_name : 'N/A'); ?>

                                            </td>
                                            <td><?php echo e(isset($phone_number) ? $phone_number : 'N/A'); ?></td>
                                            <td>
                                                <span>
                                                    <i>
                                                        <?php echo e(date('m/d/Y', strtotime($project->created_at))); ?>

                                                    </i>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <i>
                                                        <?php echo e(date('m/d/Y', strtotime($project->updated_at))); ?>

                                                    </i>
                                                </span>
                                            </td>
                                            <td><?php echo e($project->state->name); ?></td>
                                            <td><?php echo e($project->project_type->project_type); ?></td>
                                            <td>
                                                <?php if($project->status == 1): ?>
                                                    Active
                                                <?php else: ?>
                                                    Inactive
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php
                                                    $lienProvider = [];
                                                    $lienProviderArray = '';
                                                    if (!is_null($project->user) && !is_null($project->user->details) && $project->user->details != '' && $project->user->details->lien_status == '1') {
                                                        $userProvider = $project->user->lienProvider;
                                                        if (!is_null($userProvider) && $userProvider != '') {
                                                            foreach ($userProvider as $pro) {
                                                                foreach ($pro->getLien as $proL) {
                                                                    $lienProvider[] = '<tr><td>' . $proL->company . '</td><td>' . $proL->firstName . '</td><td> ' . $proL->lastName . '</td><td>' . $proL->email . '</td><tr>';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    if (count($lienProvider) > 0) {
                                                        $lienProviderArray = implode(' | ', $lienProvider);
                                                    }
                                                ?>
                                                <?php if(!is_null($project->jobInfo) && $project->jobInfo->is_viewable == '1'): ?>
                                                    <button class="btn btn-warning btn-sm viewProvider"
                                                        data-provider="<?php echo $lienProviderArray; ?>" type="button"
                                                        title="View Lien Provider">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                <?php else: ?>
                                                    <div class="text-info">NLB</div>
                                                <?php endif; ?>
                                                <?php echo e(!is_null($project->jobInfo) && $project->jobInfo->is_viewable == '1' ? $project->jobInfo->name : ''); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.project.details', [$project->id])); ?>"
                                                    class="btn btn-info btn-xs" title="Edit & View job request"><i
                                                        class="fa fa-info"></i> </a>
                                                <button class="btn btn-warning btn-xs lock" data-id="<?php echo e($project->id); ?>"
                                                    data-status="<?php echo e($project->status); ?>" type="button"><i
                                                        class="fa fa-<?php echo e($project->status == '1' ? 'unlock' : 'lock'); ?>"></i></button>
                                                <button class="btn btn-danger btn-xs delete-btn" type="button"
                                                    data-id="<?php echo e($project->id); ?>" title="Delete"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5">No job request available....</td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <?php echo e($projects->appends($_GET)->links()); ?>

                            </ul>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Filter job info form list</h3>
                        </div>
                        <!-- /.box-header -->
                        <?php echo $__env->make('project.project_list_filter_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {

            function replaceUrlParam(url, paramName, paramValue) {
                if (paramValue == null) {
                    paramValue = '';
                }
                var pattern = new RegExp('\\b(' + paramName + '=).*?(&|$)');
                if (url.search(pattern) >= 0) {
                    return url.replace(pattern, '$1' + paramValue + '$2');
                }
                url = url.replace(/\?$/, '');
                return url + (url.indexOf('?') > 0 ? '&' : '?') + paramName + '=' + paramValue;
            }

            $('.fa-sort').on('click', function() {
                var col = $(this).data('col');
                var type = $(this).data('type');
                var location = window.location.href;
                var location = replaceUrlParam(location, 'sortBy', type);
                var location = replaceUrlParam(location, 'sortWith', col);
                window.location.href = location;
            });

            $('.lock').on('click', function() {
                var id = $(this).data('id');
                var status = $(this).data('status');
                var statusName = (status == "0") ? "Activated" : "Deactivated";
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('project.status')); ?>",
                    data: {
                        id: id,
                        status: status,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        if (data.status == true) {
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'Project ' + statusName + ' successfully',
                            }).then(function() {
                                window.location.reload();
                            });
                        } else {
                            swal(
                                'Oops...',
                                data.message,
                                'error'
                            )
                        }

                    }
                });
            });
            $('.delete-btn').on('click', function() {
                var id = $(this).data('id');
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
                        url: "<?php echo e(route('admin.project.delete')); ?>",
                        data: {
                            id: id,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function(data) {
                            if (data.status) {
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Project deleted successfully',
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
        });

        $(document).delegate('.viewProvider', 'click', function() {
            var providers = $(this).data('provider');
            if (providers != '') {
                var providersArray = providers.split('|');
                var providerString = '<table class="table table-bordered">' +
                    '<thead><tr><th>Company</th><th>First Name</th><th>Last Name</th><th>Email</th></tr></thead>';
                $.each(providersArray, function(index, value) {
                    providerString += value;
                });
                providerString += '</table>';
                swal({
                    html: providerString,
                    title: 'Assigned Lien Provider',
                    text: providersArray,
                    //text: 'NLB',
                    timer: 10000
                });
            } else {
                swal({
                    title: 'Assigned Lien Provider',
                    text: 'NLB',
                    timer: 5000
                });
            }
        });

        $('.chosen').chosen({
            width: "100%"
        });

        $('.date').datepicker({
            autoclose: true,
            format: 'mm/dd/yyyy'
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/project/project_view.blade.php ENDPATH**/ ?>