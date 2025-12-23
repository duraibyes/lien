<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Project Details'); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .border-table {
            background: #fff;
            border: 1px solid #958283;
            border-radius: 10px;
            padding: 10px;
        }

        .border-table {
            margin-bottom: 20px;
        }

        .shadow {
            box-shadow: 1px 2px #535353;
        }

        .text-center {
            text-align: center;
            background: #1084ff;
            color: #fff;
            font-size: 24px;
            margin: 0;
            padding: 7px 19px;
            margin-bottom: 15px;
        }

    </style>
<?php $__env->stopSection(); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Project Details
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="border-table">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-md-offset-0">
                                            <div class="border-table">
                                                <h1 class="text-center"> Project Details</h1>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-md-offset-3">
                                                        <div class="border-table shadow">
                                                            <a href="javascript:void(0)">
                                                                Project Name :
                                                            </a>
                                                            <strong><?php echo e($project->project_name); ?></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="border-table shadow">
                                                            <a href="javascript:void(0)">
                                                                Project Location by State :
                                                            </a>
                                                            <strong><?php echo e($project->state->name); ?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="border-table shadow">
                                                            <a href="javascript:void(0)">
                                                                Your Role :
                                                            </a>

                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($role->id == $project->role_id): ?>
                                                                    <strong><?php echo e($role->project_roles); ?></strong>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="border-table shadow">
                                                            <a href="javascript:void(0)">
                                                                Project Type :
                                                            </a>

                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($type->id == $project->project_type_id): ?>
                                                                    <strong><?php echo e($type->project_type); ?></strong>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="border-table shadow">
                                                            <a href="javascript:void(0)">
                                                                Who Hired You :
                                                            </a>

                                                            <?php if(isset($project) && $project != ''): ?>
                                                                <strong><?php echo e($project->tier->customer->name); ?></strong>
                                                            <?php else: ?>
                                                                Select a Select your customer
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-table">
                                <h1 class="text-center"> Project contracts</h1>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="border-table">
                                            <div class="table-responsive amount-table">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td>Base Contract Amount $</td>
                                                            <th><input type="number" class="form-control" name="base_amount"
                                                                    id="base_amount"
                                                                    value="<?php echo e(isset($contract) && $contract != '' && $contract->base_amount != '' ? $contract->base_amount : '0'); ?>"
                                                                    disabled></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>+ Value of Extras of Changes $</td>
                                                            <th><input type="number" class="form-control"
                                                                    name="extra_amount" id="extra_amount"
                                                                    value="<?php echo e(isset($contract) && $contract != '' && $contract->extra_amount != '' ? $contract->extra_amount : '0'); ?>"
                                                                    disabled></th>
                                                        </tr>
                                                        <tr>
                                                            <td>= Revised Contract Subtotal $</td>
                                                            <th><input type="text" class="form-control" id="contact_total"
                                                                    disabled="disabled"></th>
                                                        </tr>
                                                        <tr>
                                                            <td>- Payments/Credits to Date $</td>
                                                            <th><input type="number" class="form-control" name="payment"
                                                                    id="payment"
                                                                    value="<?php echo e(isset($contract) && $contract != '' && $contract->credits != '' ? $contract->credits : '0'); ?>"
                                                                    disabled></th>
                                                        </tr>
                                                        <tr>
                                                            <td>= Total Claim Amount $</td>
                                                            <th><input type="text" class="form-control" id="claim_amount"
                                                                    name="claim_amount" disabled="disabled"></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="border-table">
                                            <div class="table-responsive waiver-table">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td>Waiver Amount</td>
                                                            <th>
                                                                <input type="number" name="waiver_amount"
                                                                    value="<?php echo e(isset($contract) && $contract != '' && $contract->waiver != '' ? $contract->waiver : '0'); ?>"
                                                                    disabled class="form-control">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Receivable Status</th>
                                                            <td>
                                                                <strong>
                                                                    <?php echo e(isset($contract) && $contract != '' && $contract->receivable_status ? $contract->receivable_status : 'Not Available'); ?>

                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Deadline Calculation Status</th>
                                                            <td>

                                                                <?php isset($contract) && $contract != '' && $contract->receivable_status ? ($var = $contract->calculation_status) : ($var = '4'); ?>
                                                                <?php if($var == '0'): ?>
                                                                    <strong>In Process</strong>
                                                                <?php elseif($var == '1'): ?>
                                                                    Completed
                                                                <?php else: ?>
                                                                    Not Available
                                                                <?php endif; ?>


                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-md-offset-0">
                                            <div class="border-table">
                                                <h1 class="text-center"> Project Dates</h1>
                                                <div class="row">
                                                    <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-10 col-md-offset-1">
                                                            <h4><?php echo e($date->date_name); ?> :
                                                                <strong><?php echo e(isset($projectDates[$date->id]) ? date('m-d-Y', strtotime($projectDates[$date->id])) : 'Not Available'); ?></strong>
                                                            </h4>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="border-table">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-md-offset-0">
                                                <h1 class="text-center"> Project Deadline</h1>
                                                <div class="col-md-12">
                                                    <div class="panel panel-info">

                                                        <div class="panel-body">
                                                            <ul class="nav nav-tabs">
                                                                <?php if(count($remedyNames) > 0): ?>
                                                                    <li class="active"><a data-toggle="tab"
                                                                            href="#allRemedies">All
                                                                            Remedies</a></li>
                                                                    <?php $__currentLoopData = $remedyNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class=""><a data-toggle="tab"
                                                                                href="#<?php echo e($key); ?>"><?php echo e($name); ?></a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </ul>

                                                            <div class="tab-content">
                                                                <div id="allRemedies" class="tab-pane fade in active">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Legal Steps</th>
                                                                                <th>Days Remaining</th>
                                                                                <th>Preliminary Deadline</th>
                                                                                <th>Date Legal Step Completed</th>
                                                                                <th>Email Alert</th>
                                                                            </tr>
                                                                            <?php if(count($deadlines) > 0): ?>
                                                                                <?php $__currentLoopData = $deadlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $deadline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <tr>
                                                                                        <td><?php echo e($key + 1); ?></td>
                                                                                        <td><?php echo e($deadline->short_description); ?>

                                                                                            <span
                                                                                                class="tag label label-info"><?php echo e($deadlines[$key]->getRemedy->remedy); ?></span>
                                                                                        </td>
                                                                                        <td><?php echo e($daysRemain[$key]['dates']); ?>

                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo e(date('m-d-Y', strtotime($daysRemain[$key]['preliminaryDates']))); ?>

                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo e($deadlines[$key]['legal_completion_date'] != '' ? date('m-d-Y', strtotime($deadlines[$key]['legal_completion_date'])) : 'Not Available'); ?>

                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo e($deadlines[$key]['email_alert'] == 1 ? 'On' : 'Off'); ?>

                                                                                        </td>
                                                                                    </tr>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php else: ?>
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        No Deadline found...
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endif; ?>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <?php if(count($remedyNames) > 0): ?>
                                                                    <?php $__currentLoopData = $remedyNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remedyKey => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div id="<?php echo e($remedyKey); ?>"
                                                                            class="tab-pane fade">
                                                                            <table class="table table-striped">
                                                                                <tr>
                                                                                    <th>Legal Steps</th>
                                                                                    <th>Days Remaining</th>
                                                                                    <th>Preliminary Deadline</th>
                                                                                    <th>Date Legal Step Completed</th>
                                                                                    <th>Email Alert</th>
                                                                                </tr>
                                                                                <?php if(count($deadlines) > 0): ?>
                                                                                    <?php $__currentLoopData = $deadlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $deadline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($remedyKey == $deadlines[$key]['remedy_id']): ?>
                                                                                            <tr>
                                                                                                <td><?php echo e($deadline->short_description); ?>

                                                                                                </td>
                                                                                                <td><?php echo e($daysRemain[$key]['dates']); ?>

                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo e(date('m-d-Y', strtotime($daysRemain[$key]['preliminaryDates']))); ?>

                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo e($deadlines[$key]['legal_completion_date'] != '' ? date('m-d-Y', strtotime($deadlines[$key]['legal_completion_date'])) : 'Not Available'); ?>

                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo e($deadlines[$key]['email_alert'] == 1 ? 'On' : 'Off'); ?>

                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                            </table>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--     <div class="col-md-12 well text-center"> -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-md-offset-0">
                                            <div class="border-table">
                                                <h1 class="text-center">Project Documents</h1>
                                                <hr class="divider">
                                                <form action="#" method="post"
                                                    class="form-horizontal project-form project_documents">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Document Date</th>
                                                                <th>Document Type</th>
                                                                <th>View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>N/A</td>
                                                                <td>Lien Law Summary</td>
                                                                <td>
                                                                    <button id="lianLawSummery" type="button"
                                                                        class="form-control btn blue-btn btn-success">
                                                                        View
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <?php if(!empty($project_documents)): ?>
                                                                <?php $__currentLoopData = $project_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($document['data']): ?>
                                                                        <tr>
                                                                            <td><?php echo e(date('F d, Y h:i:s A', strtotime(isset($document['data']) ? $document['data']->created_at : ''))); ?>

                                                                            </td>
                                                                            
                                                                            <td><?php echo e($document['name']); ?></td>
                                                                            
                                                                            <?php if($document['name'] == 'Claim form and project data sheet'): ?>
                                                                                <td>
                                                                                    <a href="<?php echo e(route('get.documentClaimView', [$project_id, $flag])); ?>"
                                                                                        class="form-control btn blue-btn btn-success">View</a>
                                                                                </td>
                                                                            <?php elseif($document['name'] == 'Credit
                                                                                Application'): ?>
                                                                                <td>
                                                                                    <a href="<?php echo e(route('get.documentCreditView', [$project_id, $flag])); ?>"
                                                                                        class="form-control btn blue-btn btn-success">View</a>
                                                                                </td>
                                                                            <?php elseif($document['name'] == 'joint payment
                                                                                authorization'): ?>
                                                                                <td>
                                                                                    <a href="<?php echo e(route('get.documentJointView', [$project_id, $flag])); ?>"
                                                                                        class="form-control btn blue-btn btn-success">View</a>
                                                                                </td>
                                                                            <?php elseif($document['name'] == 'Waver
                                                                                progress'): ?>
                                                                                <td>
                                                                                    <a href="<?php echo e(route('get.documentWaverView', [$project_id, $flag])); ?>"
                                                                                        class="form-control btn blue-btn btn-success">View</a>
                                                                                </td>
                                                                            <?php endif; ?>
                                                                        </tr>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-md-13 col-sm-13  col-md-offset-0">
                                        <div class="border-table">
                                            <h1 class="text-center">Project Tasks</h1>
                                            <hr class="divider">
                                            <?php if(count($tasks) > 0): ?>
                                                <div class="row border-class">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Action</th>
                                                                        <th>Comments</th>
                                                                        <th>Deadline</th>
                                                                        <th>Date Completed</th>
                                                                        <th>Email Alert</th>
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
                                                                                <?php echo e(\DateTime::createFromFormat('Y-m-d', $task->due_date)->format('m-d-Y')); ?>

                                                                                <br />
                                                                                <span style="color: red;">
                                                                                    <?php echo e($diff > 0 ? $exactDiff . ' remaining.' : 'This deadline has passed'); ?>

                                                                                </span>
                                                                            </td>
                                                                            <td><?php echo e($task->complete_date != '' ? \DateTime::createFromFormat('Y-m-d', $task->complete_date)->format('m-d-Y') : ''); ?>

                                                                            </td>
                                                                            <td><?php echo e($task->email_alert == 0 ? 'Off' : 'On'); ?>

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
                                                    <h4>Currently no tasks set up for this project.</h4>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            var base_amount = 0;
            var extra_amount = 0;
            var payment = 0;
            var total = 0;
            var claim_total = 0;
            totalAmount();

            $('#base_amount,#extra_amount,#payment').on('change', function() {
                totalAmount();
            });

            function totalAmount() {
                base_amount = $('#base_amount').val();
                extra_amount = $('#extra_amount').val();
                payment = $('#payment').val();
                total = parseFloat(base_amount) + parseFloat(extra_amount);
                claim_total = parseFloat(total) - parseFloat(payment);
                $('#contact_total').val(total);
                $('#claim_amount').val(claim_total);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/project/project_details.blade.php ENDPATH**/ ?>