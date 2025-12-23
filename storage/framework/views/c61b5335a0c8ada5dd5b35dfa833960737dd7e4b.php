<?php $__env->startSection('title', 'Lien Provider Dashboard'); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .sortDiv {
            display: inline-block;
        }

        a.sort {
            display: block;
            height: 2px;
        }

        .datepicker,
        .table-condensed {
            width: 220px;
            padding: 0px;
        }

        .box {
            box-shadow: 0 0 5px #cedff3 !important;
            border: 1px solid #cedff3  !important;
            background-color: white  !important;
        }

        .btn-warning, .btn-info {
            margin: 20px;
        }

        .white-table {
            margin-bottom: 20px  !important;
        }

        .fa-sort {
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-sm-offset-1">
                <div class="table-block">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h2>Manage Projects <img data-toggle="tooltip" data-placement="right" title="Manage Projects!"
                                    src="<?php echo e(env('ASSET_URL')); ?>/images/ask.png" alt="img"></h2>
                        </div>
                        <div class="col-md-6 col-sm-6 table-middle">
                            <?php if($caseProject == 'active'): ?>
                                <div class="activecasesTab">Active Cases<a href="javascript:void(0)"
                                        class="allCases"><span>View All including closed cases</span></a>
                                </div>
                            <?php else: ?>
                                <div class="allcasesTab">All Cases<a href="javascript:void(0)"
                                        class="activeCases"><span>View Only active cases</span></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 col-sm-3 align-right">
                            <!-- <span class="filter">
                           <a href="#">
                           <img src="<?php echo e(env('ASSET_URL')); ?>/images/filter.png" alt="img"> Filter
                           </a>
                           </span> -->
                            <span class="search dropdown-toggle" id="dropdownMenuButton1" role="alert"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href="#">
                                    <img src="<?php echo e(env('ASSET_URL')); ?>/images/search.png" alt="img">
                                </a>
                            </span>
                            <div class="dropdown-menu dropdown-search" aria-labelledby="dropdownMenuButton">

                                <input type="text" id="projectSearch" placeholder="Search.."
                                    value="<?php echo e(isset($_GET['projectDetails']) && $_GET['projectDetails'] != '' ? $_GET['projectDetails'] : ''); ?>"
                                    class="form-control">
                                <button type="submit" data-type="project" class="btn s-button search1"><i
                                        class="fa fa-search" aria-hidden="true"></i></button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="table-responsive white-table">
                                <?php if($caseProject == 'active'): ?>
                                    <table class="table activecase">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Project Name
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="project_name"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Client Company Name
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="customer_name"
                                                       data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Customer Name
                                                    <i class="fa fa-sort" aria-hidden="true"
                                                        data-col="customer_contact_name"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_contact_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                    
                                                </th>



                                                <th>
                                                    Entry Date
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="created_at"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'created_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Next Action Date
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="updated_at"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'updated_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    State
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="state_id"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'state_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Type
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="project_type_id"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_type_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Status
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="status"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'status' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"></i>
                                                </th>
                                                <th>
                                                    Lien Providers
                                                </th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($projects) > 0): ?>
                                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(!isset($project->company)): ?>
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
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td><a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id])); ?>"><?php echo e($project->project_name); ?></a></td>
                                                        <td><?php echo e(!is_null($project->user) ? $project->user->name : 'N/A'); ?>

                                                        <td><?php echo e(isset($company) ? $company : (isset($project->company) ? $project->company : 'N/A')); ?>

                                                        </td>

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







                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="11">
                                                        No projects found
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="11">
                                                    <?php echo e($projects->appends($_GET)->links()); ?>

                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                <?php else: ?>
                                    <table class="table all">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="project_name"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Project Name</i>
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="customer_name"
                                                       data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Client Company Name</i>
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true"
                                                        data-col="customer_contact_name"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'customer_contact_name' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Customer Name</i>
                                                </th>



                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="created_at"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'created_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Entry Date</i>
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="updated_at"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'updated_at' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Next Action Date</i>
                                                </th>
                                                <th>
                                                    Next Preliminary Deadline Date
                                                </th>
                                                <th>
                                                     Next Task Date
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="state_id"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'state_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> State</i>
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="project_type_id"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'project_type_id' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Type</i>
                                                </th>
                                                <th>
                                                    <i class="fa fa-sort" aria-hidden="true" data-col="status"
                                                        data-type="<?php echo e(isset($_GET['sortWith']) && $_GET['sortWith'] == 'status' && isset($_GET['sortBy']) && $_GET['sortBy'] == 'ASC' ? 'DESC' : 'ASC'); ?>"> Status</i>
                                                </th>
                                                <th>
                                                    Lien Providers
                                                </th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($projects) > 0): ?>
                                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                        <td><a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id])); ?>"><?php echo e($project->project_name); ?></a></td>
                                                        <td><a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id, 'tab'=>'contact'])); ?>"><?php echo e(!is_null($project->user) ? $project->user->details->company : 'N/A'); ?></a>
                                                        <td><a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id])); ?>"><?php echo e(isset($company) ? $company : 'N/A'); ?></a></td>

                                                        </td>

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
                                                                    <a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id, 'tab'=>'home'])); ?>"><?php echo e($project->next_action_date); ?></a>
                                                                </i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <i>
                                                                    <a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id, 'tab'=>'home'])); ?>"><?php echo e($project->preliminaryDates); ?></a>
                                                                </i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <i>
                                                                    <a href="<?php echo e(route('lien.view.project', ['project_id' => $project->id, 'tab'=>'tasks'])); ?>"><?php echo e($project->next_task_date); ?></a>
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








                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="11">No more projects found</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="11">
                                                    <?php echo e($projects->appends($_GET)->links()); ?>

                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box" style="margin-bottom: 20px;padding: 10px">
                                <div class="box-header">
                                    <span style="padding: 10px">Number of Contracts: <strong><?php echo e($number_of_contracts); ?></strong></span>
                                    <span style="padding: 10px">Total Contracts Amount: <strong><?php echo e($total_contracts_amount); ?></strong></span>
                                    <span style="padding: 10px">Average Contracts Amount: <strong><?php echo e($contracts_avg); ?></strong></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h2 style="padding: 20px">Filter projects form list</h2>
                                </div>
                                <!-- /.box-header -->
                                <form type="get" action="#" class="form-horizontal filterForm">
                                    <div class="box-body no-padding">
                                        <div class="col-md-12">
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Date From :
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="date" name="assigned_date_from"
                                                                   value="<?php echo e(isset($_GET['search']) && isset($_GET['assigned_date_from']) ? $_GET['assigned_date_from'] : ''); ?>"
                                                                   class="date form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Date To :
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="date" name="assigned_date_to"
                                                                   value="<?php echo e(isset($_GET['search']) && isset($_GET['assigned_date_to']) ? $_GET['assigned_date_to'] : ''); ?>"
                                                                   class="date form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Project Name
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="project_name" id="project_name"
                                                                    class="form-control chosenfield">
                                                                <option value="" disabled selected>Search with Project Name
                                                                </option>
                                                                <?php $__currentLoopData = $projectsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(isset($_GET['search']) && isset($_GET['project_name']) && $_GET['project_name'] == $list): ?>
                                                                        <option value="<?php echo e($list); ?>" selected>
                                                                            <?php echo e($list); ?></option>
                                                                    <?php else: ?>
                                                                        <option value="<?php echo e($list); ?>">
                                                                            <?php echo e($list); ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            State
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="state" id="state"
                                                                    class="form-control chosenfield">
                                                                <option value="" disabled selected>Search state
                                                                </option>
                                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(isset($_GET['search']) && isset($_GET['state']) && $_GET['state'] == $state->id): ?>
                                                                        <option value="<?php echo e($state->id); ?>" selected><?php echo e($state->name); ?></option>
                                                                    <?php else: ?>
                                                                        <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <!-- <input type="text" name="company_name" id="company_name" data-search="company_name" value="<?php echo e(isset($_GET['search']) && isset($_GET['company_name']) ? $_GET['company_name'] : ''); ?>" class="form-control autocomplete"> -->
                                                        </div>
                                                    </div>
                                                </div>




























                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Company name
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="company_name" id="company_name"
                                                                    class="form-control chosenfield">
                                                                <option value="" disabled selected>Search with Company Name
                                                                </option>
                                                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(isset($_GET['search']) && isset($_GET['company_name']) && $_GET['company_name'] == $list['value']): ?>
                                                                        <option value="<?php echo e($list['value']); ?>" selected>
                                                                            <?php echo e($list['data']); ?></option>
                                                                    <?php else: ?>
                                                                        <option value="<?php echo e($list['value']); ?>">
                                                                            <?php echo e($list['data']); ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <!-- <input type="text" name="company_name" id="company_name" data-search="company_name" value="<?php echo e(isset($_GET['search']) && isset($_GET['company_name']) ? $_GET['company_name'] : ''); ?>" class="form-control autocomplete"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">
                                                            Status
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="status" class="form-control chosenfield">
                                                                <option value="" disabled selected>----Select----</option>
                                                                <option value="0"
                                                                        <?php echo e(isset($_GET['status']) && $_GET['status'] == '0' ? 'selected' : ''); ?>>
                                                                    InActive</option>
                                                                <option value="1"
                                                                        <?php echo e(isset($_GET['status']) && $_GET['status'] == '1' ? 'selected' : ''); ?>>
                                                                    Active</option>

                                                            </select>
                                                            <input type="hidden" name="search" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <button type="button" class="btn btn-warning reset">Reset Filter</button>
                                    <button type="button" class="btn btn-info pull-right apply_filter">Apply Filter</button>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('.allCases').on('click', function() {
            var location = appendToQueryString('case', 'all');
            window.location.href = location;
        });
        $('.activeCases').on('click', function() {
            var location = appendToQueryString('case', 'active');
            window.location.href = location;
        });
        $(document).ready(function() {

            $('.date').datepicker({
                autoclose: true,
                format: 'mm/dd/yyyy'
            });

            $('.chosenfield').chosen({
                no_results_text: "Oops, nothing found!"
            });

            $('.apply_filter').on('click', function() {
                var datastring = $('.filterForm').serialize();
                var url = '<?php echo e(route('lien.dashboard')); ?>?' + datastring;
                window.location.href = url;
            });

            $('.reset').on('click', function() {
                var url = '<?php echo e(route('lien.dashboard')); ?>';
                window.location.href = url;
            });

            appendToQueryString = function(param, val) {
                var queryString = window.location.search.replace("?", "");
                var parameterListRaw = queryString == "" ? [] : queryString.split("&");
                var parameterList = {};
                for (var i = 0; i < parameterListRaw.length; i++) {
                    var parameter = parameterListRaw[i].split("=");
                    if (parameter[0] != 'page') {
                        parameterList[parameter[0]] = parameter[1];
                    }
                }
                parameterList[param] = val;
                var newQueryString = "?";
                for (var item in parameterList) {
                    if (parameterList.hasOwnProperty(item)) {
                        newQueryString += item + "=" + parameterList[item] + "&";
                    }
                }
                newQueryString = newQueryString.replace(/&$/, "");
                return location.origin + location.pathname + newQueryString;
            }

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
            $('.search1').on('click', function() {
                var type = $(this).data('type');
                if (type == 'project') {
                    var project = $('#projectSearch').val();
                    var location = appendToQueryString('projectDetails', project);
                    window.location.href = location;
                }

            });
            $('.fa-sort').on('click', function() {
                var col = $(this).data('col');
                var type = $(this).data('type');
                var location = window.location.href;
                var location = replaceUrlParam(location, 'sortBy', type);
                var location = replaceUrlParam(location, 'sortWith', col);
                window.location.href = location;
            });

            $('.deleteProject').on('click', function() {
                var project_id = $(this).data('id');
                var user_id = '<?php echo e(Auth::user()->id); ?>';
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
                        url: "<?php echo e(route('project.delete')); ?>",
                        data: {
                            project_id: project_id,
                            user_id: user_id,
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lienProviders.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/lienProviders/dashboard/dashboard.blade.php ENDPATH**/ ?>