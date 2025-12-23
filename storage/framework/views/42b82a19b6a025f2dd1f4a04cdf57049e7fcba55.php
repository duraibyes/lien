<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('basicUser.partials.multi-step-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <span class="noProg"></span>
        <div class="form-horizontal project-form project_details create-project-form create-project-form--large"
            style="margin:0 auto;">
            <div class="create-project-form-header">
                <h2>View Project Tasks</h2>
            </div>
            <div class="row job-info-accordion--top-margin">
                <?php if(session()->has('deadline-error')): ?>
                    <div class="alert alert-danger">
                        <?php echo session('deadline-error'); ?>

                    </div>
                <?php endif; ?>
                <?php if(count($tasks) > 0): ?>
                    <div class="row border-class">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-left">#</th>
                                            <th class="text-left">Action</th>
                                            <th class="text-left">Comments</th>
                                            <th class="text-left">Deadline</th>
                                            <th class="text-left">Date Completed</th>
                                            <th class="text-left">Email Alert</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $date1 = new DateTime($task->due_date);
                                                $date2 = new DateTime(date('Y-m-d'));
                                                $diff = $date2->diff($date1)->format('%R%a days');
                                                $exactDiff = $date2->diff($date1)->format('%a days');
                                            ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($task->task_name); ?></td>
                                                <td><?php echo e($task->comment); ?></td>
                                                <td>
                                                    <?php echo e(\DateTime::createFromFormat('Y-m-d', $task->due_date)->format('m/d/Y')); ?>

                                                    <br />
                                                    <span style="color: red;">
                                                        <?php echo e($diff > 0 ? 'You have ' . $exactDiff . ' remaining . ' : ' This deadline has passed'); ?>

                                                    </span>
                                                </td>
                                                <td>
                                                    <?php echo e($task->complete_date != '' ? \DateTime::createFromFormat('Y-m-d', $task->complete_date)->format('m/d/Y') : ''); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($task->email_alert == 0 ? 'Off' : 'On'); ?>

                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-warning editButton" type="button"
                                                        data-id="<?php echo e($task->id); ?>" data-action="<?php echo e($task->task_name); ?>"
                                                        data-due_date="<?php echo e(\DateTime::createFromFormat('Y-m-d', $task->due_date)->format('d/m/Y')); ?>"
                                                        data-complete_date="<?php echo e($task->complete_date != '' ? \DateTime::createFromFormat('Y-m-d', $task->complete_date)->format('d/m/Y') : ''); ?>"
                                                        data-email="<?php echo e($task->email_alert); ?>"
                                                        data-other_comment="<?php echo e($task->task_other); ?>"
                                                        data-comment="<?php echo e($task->comment); ?>" data-toggle="modal">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-xs btn-danger deleteTask"
                                                        data-id="<?php echo e($task->id); ?>" type="button">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <h4 class="text-center">You currently have no tasks set up for this project.</h4>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-12 project-tasks">
                        <form action="<?php echo e(route('project.add.task')); ?>" class="form-horizontal border-class"
                            method="post">
                            <h4 class="project-tasks-heading">Add A Task</h4>
                            <div class="contract-wrapper">
                                <label for="action">Action</label>
                                <select id="action" name="action" class="form-control">
                                    <option value="Call Customer">Call Customer</option>
                                    <option value="Follow Up Payment">Follow Up Payment</option>
                                    <option value="Prepare Waivers for Draw">Prepare Waivers for Draw</option>
                                    <option value="Prepare Credit Application">Prepare Credit Application</option>
                                    <option value="Prepare  Rider to Contract">Prepare Rider to Contract</option>
                                    <option value="Forward Claim To NLB">Forward Claim To NLB</option>
                                    <?php if(count($project_other) > 0): ?>
                                        <?php $__currentLoopData = $project_other; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $po): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($po); ?>"><?php echo e($po); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <option value="Other">Add a New Task</option>
                                </select>
                                <div class="form-group" id="other_box" style="display: none">
                                    <label class=" col-md-12">Add a New Task</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="other_comment" name="other_comment"></textarea>
                                    </div>
                                </div>
                                <div class="project-tasks-input--half-wrap">
                                    <label for="due_date">Due Date</label>
                                    <input type="text" id="due_date" class="form-control date" name="due_date"
                                        data-provide="datepicker">
                                </div>
                                <div class="project-tasks-input--half-wrap">
                                    <label for="email_alert">Email Alert</label>
                                    <select name="email_alert" id="email_alert" class="form-control">
                                        <option value="0">Off</option>
                                        <option value="1">On</option>
                                    </select>
                                </div>
                                <label for="comment">Comments</label>
                                <textarea id="comment" class="form-control" name="comment"></textarea>
                            </div>
                            <input type="hidden" name="project_id" value="<?php echo e($project_id); ?>">
                            <button type="submit" class="blue-primary-btn project-create-continue">Add Task</button>
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
                        </form>
                    </div>
                </div>


                <div class="contract--wrapper">
                    <label>Waiver Amount</label>
                    <input class="form-control update_contract" id="wavier_amount" type="number" name="waiver_amount"
                        value="<?php echo e(isset($contract) && $contract != '' && $contract->waiver != '' ? $contract->waiver : '0'); ?>">
                </div>

                <div class="contract--wrapper">
                    <label>Receivable Status</label>
                    <select name="receivableStatus" id="receivable_status" class="form-control update_contract">
                        <option value="">
                            Select a receivable status
                        </option>
                        <option value="Preliminary Nupdate_contractotice"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Preliminary Notice' ? 'selected' : ''); ?>>
                            Preliminary Notice
                        </option>
                        <option value="Lien"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Lien' ? 'selected' : ''); ?>>
                            Lien
                        </option>
                        <option value="Bond"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Bond' ? 'selected' : ''); ?>>
                            Bond
                        </option>
                        <option value="Collection"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Collection' ? 'selected' : ''); ?>>
                            Collection
                        </option>
                        <option value="Litigation"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Litigation' ? 'selected' : ''); ?>>
                            Litigation
                        </option>
                        <option value="Bankruptcy"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Bankruptcy' ? 'selected' : ''); ?>>
                            Bankruptcy
                        </option>
                        <option value="Collected"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Collected' ? 'selected' : ''); ?>>
                            Collected
                        </option>
                        <option value="Paid"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Paid' ? 'selected' : ''); ?>>
                            Paid
                        </option>
                        <option value="Written Off"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Written Off' ? 'selected' : ''); ?>>
                            Written Off
                        </option>
                        <option value="Bankruptcy"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Bankruptcy' ? 'selected' : ''); ?>>
                            Bankruptcy
                        </option>
                        <option value="Settled"
                            <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status == 'Settled' ? 'selected' : ''); ?>>
                            Settled
                        </option>
                    </select>
                </div>
                <div class="contract--wrapper">
                    <label>Deadline Calculation Status</label>
                    <select name="calculationStatus" id="calculation_status" class="form-control update_contract">
                        <option value="">Select a calculation status</option>
                        <option value="0"
                            <?php echo e(isset($contract) && $contract != '' && $contract->calculation_status == '0' ? 'selected' : ''); ?>>
                            In Process
                        </option>
                        <option value="1"
                            <?php echo e(isset($contract) && $contract != '' && $contract->calculation_status == '1' ? 'selected' : ''); ?>>
                            Complete
                        </option>
                    </select>
                </div>






                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo e(route('member.dashboard')); ?>"
                            class="blue-primary-btn project-create-continue project-create-continue--small">
                            Close
                        </a>
                        <a href="<?php echo e(route('create.deadlines', [$project_id]) . '?edit=true'); ?>"
                            class="blue-primary-btn project-create-continue project-create-continue--small">
                            View Deadlines
                        </a>
                    </div>
                </div>

                    <div class="flex items-center save-skip">
                        <a href="javascript:void(0)" id="skip-button-3" class="skip continue">
                            Skip
                        </a>
                        <a href="javascript:void(0)" id="continue" class="orange-btn continue">
                            Save & Continue
                        </a>
                    </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <!-- Modal -->
    <div id="editTask" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Task</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Action</label>
                                    <div class="col-md-8">
                                        <select class="form-control" id="action">
                                            <option value="Call Customer">Call Customer</option>
                                            <option value="Follow Up Payment">Follow Up Payment</option>
                                            <option value="Prepare Waivers for Draw">Prepare Waivers for Draw</option>
                                            <option value="Prepare Credit Application">Prepare Credit Application</option>
                                            <option value="Prepare  Rider to Contract">Prepare Rider to Contract</option>
                                            <option value="Forward Claim To NLB">Forward Claim To NLB</option>
                                            <?php if(count($project_other) > 0): ?>
                                                <?php $__currentLoopData = $project_other; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $po): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($po); ?>"><?php echo e($po); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Due-Date</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control date" id="due_date"
                                            data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Complete-Date</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control date" id="complete_date"
                                            data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Email Alert</label>
                                    <div class="col-md-8">
                                        <select id="email_alert" class="form-control">
                                            <option value="0">Off</option>
                                            <option value="1">On</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" id="task_id">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Comments</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="comment"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary editTaskButton">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if(isset($_GET['create'])): ?>
        <script src="<?php echo e(env('ASSET_URL')); ?>/js/createProject.js"></script>
    <?php endif; ?>
    <script>
        $(document).ready(function() {

            let project_id = "<?php echo e($project_id); ?>"

            $('.skip').on('click', function(event) {
                //event.stopPropagation();
                event.preventDefault();
                swal({
                    title: 'Are you sure you want to skip this?',
                    // text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'Cancel',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    // buttonsStyling: false
                }).then(function() {
                    window.location.href = '/member/project/summary/view/' + project_id +
                        '?edit=true';
                })
            });

            $('#action').on('change', function() {
                console.log( this.value );
                if(this.value == 'Other') {
                    $('#other_box').show();
                } else {
                    $('#other_box').hide();
                }
            });

            $(document).on('click', '.continue', function(event) {
                event.preventDefault();

                window.location.href = "<?php echo e(route('project.summary.view', $project_id) . '?edit=true'); ?>";
            });

            $('.editButton').on('click', function() {
                var id = $(this).data('id');
                $('#editTask #task_id').val(id);
                var action = $(this).data('action');
                $('#editTask #action').val(action);
                var due_date = $(this).data('due_date');
                $('#editTask  #due_date').val(due_date);
                var email = $(this).data('email');
                $('#editTask  #email_alert').val(email);
                var comment = $(this).data('comment');
                $('#editTask  #comment').val(comment);
                var complete_date = $(this).data('complete_date');
                $('#editTask  #complete_date').val(complete_date);
                $('#editTask').modal('show');
            });
            $('.editTaskButton').on('click', function() {
                var action = $('#editTask #action').val();
                if (action == '') {
                    $('#editTask #action').addClass('input-error');
                    return false;
                } else {
                    $('#editTask #action').removeClass('input-error');
                }
                var id = $('#editTask #task_id').val();
                var due_date = $('#editTask #due_date').val();
                if (due_date == '') {
                    $('#editTask #due_date').addClass('input-error');
                    return false;
                } else {
                    $('#editTask #due_date').removeClass('input-error');
                }
                var complete_date = $('#editTask #complete_date').val();
                var email = $('#editTask #email_alert').val();
                var comment = $('#editTask #comment').val();
                // if(comment == ''){
                //     $('#comment').addClass('input-error');
                //     return false;
                // } else {
                //     $('#comment').removeClass('input-error');
                // }
                $('#editTask').modal('toggle');
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('project.update.task')); ?>",
                    data: {
                        action: action,
                        task_id: id,
                        due_date: due_date,
                        complete_date: complete_date,
                        email: email,
                        comment: comment,
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        if (data.status) {
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'Task Updated successfully',
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
            $('.deleteTask').on('click', function() {
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
                        url: "<?php echo e(route('project.delete.task')); ?>",
                        data: {
                            task_id: id,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function(data) {
                            if (data.status) {
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Task deleted successfully',
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

            $('.update_contract').on('change', function() {
                var waiver_amount = $('#wavier_amount').val();
                var receivable_status = $('#receivable_status').val();
                var calculation_status = $('#calculation_status').val();

                // console.log(wavier_amount);
                // console.log(receivable_status);
                // console.log(calculation_status);
                // console.log(project_id);

                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('project.contract.update')); ?>",
                    data: {
                        project_id: project_id,
                        waiver_amount: waiver_amount,
                        receivable_status: receivable_status,
                        calculation_status: calculation_status,
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        if (data.status) {
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'Contract Updated successfully',
                            }).then(function() {
                                // window.location.reload();
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.projects.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/projects/tasks.blade.php ENDPATH**/ ?>