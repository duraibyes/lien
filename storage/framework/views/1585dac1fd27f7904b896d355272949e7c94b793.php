<?php $__env->startSection('title','Project Details'); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(env('ASSET_URL')); ?>/css/create_project.css">
    <style>
        .select button {
            width: 100%;
            text-align: left;
        }

        .select .caret {
            position: absolute;
            right: 10px;
            margin-top: 10px;
        }

        .select:last-child > .btn {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .selected {
            padding-right: 10px;
        }

        .option {
            width: 100%;
        }

        .input-error {
            border: 2px solid red;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="center-part">
                    <h1>Project Details</h1>
                    <div class="tab-area">
                        <div class="tab-content">
                            <div class="border-table">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="main-tab-sec">
                                            <div class="">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <ul class="nav nav-tabs" id="myTab">
                                                        <li ><a  data-toggle="tab" href="#express">Express</a>
                                                        </li>
                                                        <li  class="active"><a class="active" id="detailed-tab" data-toggle="tab" href="#detailed">Detailed</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-content tab-final">
                                                <div id="express" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="main-tab-sec">
                                                                <div class="main-tab-menu">
                                                                    <ul class="nav nav-tabs">
                                                                        <!-- <li class="active">
                                                                            <a data-toggle="tab" href="#project_details_express">Project</a>
                                                                        </li> -->
                                                                        <li class="active">
                                                                            <a data-toggle="tab" href="#lienLawChart">Dashboard</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-toggle="tab"
                                                                               href="#documentsLienLaw">Documents</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content tab-final">
                                                                    
                                                                    <div id="lienLawChart"
                                                                         class="tab-pane fade in active">
                                                                        <div class="box">
                                                                            <div class="head-top">
                                                                                <?php echo e($project->state->name); ?>

                                                                                <div class="pull-right">
                                                                                    <button class="btn btn-success expandall-icon">
                                                                                        <i class="fa fa-plus fa-2x"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-warning collapseall-icon">
                                                                                        <i class="fa fa-minus fa-2x"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="head-top2"><?php echo e($project->project_type->project_type); ?></div>
                                                                            <div class="panel-group" id="accordion">
                                                                                <?php if(count($remedyNames) > 0): ?>
                                                                                    <?php $__currentLoopData = $remedyNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remedyKey => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <div class="panel panel-default">
                                                                                            <div class="panel-heading">
                                                                                                <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse"
                                                                                                       data-parent="#accordion"
                                                                                                       href="#<?php echo e($remedyKey); ?>"><?php echo e($name); ?></a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <?php if(count($liens) > 0): ?>
                                                                                                <?php $__currentLoopData = $liens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <?php if( $name == $lien['remedy'] ): ?>
                                                                                                        <div id="<?php echo e($key); ?>"
                                                                                                             class="panel-collapse collapse">
                                                                                                            <div class="panel-body">
                                                                                                                <div class="panel-main">
                                                                                                                    <p style="font-size: medium;">
                                                                                                                        <strong>Description:</strong> <?php echo e($lien->description); ?>

                                                                                                                    </p>
                                                                                                                    <p style="font-size: medium;">
                                                                                                                        <strong>Tiers:</strong> <?php echo e($lien->tier_limit); ?>

                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    <?php endif; ?>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">
                                                                                        <h4 class="panel-title">
                                                                                            <a data-toggle="collapse"
                                                                                               data-parent="#accordion"
                                                                                               href="#jobDescription">Job
                                                                                                Description (
                                                                                                <small><strong><?php echo e($project->project_name); ?></strong></small>
                                                                                                )</a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="jobDescription"
                                                                                         class="panel-collapse collapse">
                                                                                        <div class="panel-body">
                                                                                            <div class="panel-main">
                                                                                                <div class="col-md-12">
                                                                                                    <div align="left">
                                                                                                        <p>Job Name :
                                                                                                            <strong><?php echo e($project->project_name); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job Address :
                                                                                                            <strong><?php echo e($project->address != '' ? $project->address : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job City :
                                                                                                            <strong><?php echo e($project->city != '' ? $project->city : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job State :
                                                                                                            <strong><?php echo e($project->state->name); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job Zip :
                                                                                                            <strong><?php echo e($project->zip != '' ? $project->zip : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php if(!is_null($project->customer_contract)): ?>
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                            <h4 class="panel-title">
                                                                                                <a data-toggle="collapse"
                                                                                                   data-parent="#accordion"
                                                                                                   href="#customer">Customer
                                                                                                    -
                                                                                                    <small><strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->company) ?$project->customer_contract->company->company : 'N/A'); ?></strong></small>
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="customer"
                                                                                             class="panel-collapse collapse">
                                                                                            <div class="panel-body">
                                                                                                <div class="panel-main">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="col-md-5">
                                                                                                            <div align="left">
                                                                                                                <p>
                                                                                                                    Company
                                                                                                                    Name:
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->company) ?$project->customer_contract->company->company : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>
                                                                                                                    Address
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->address) ?$project->customer_contract->company->company : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>City
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->city) ?$project->customer_contract->company->city : 'N/A'); ?></strong>,
                                                                                                                    State
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->state) ?$project->customer_contract->company->state->name : 'N/A'); ?></strong>,
                                                                                                                    Zip
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->zip) ?$project->customer_contract->company->zip : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>
                                                                                                                    Telephone
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->phone) ?$project->customer_contract->company->phone : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>Fax :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->fax) ?$project->customer_contract->company->fax : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>Web :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->website) ?$project->customer_contract->company->website : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-2">
                                                                                                            &nbsp;
                                                                                                        </div>
                                                                                                        <div class="col-md-5">
                                                                                                            <div align="right">
                                                                                                                <?php if(isset($project->customer_contract->contactInformation)): ?>
                                                                                                                    <?php if(count($project->customer_contract->contactInformation) > 0): ?>
                                                                                                                        <?php $__currentLoopData = $project->customer_contract->contactInformation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerKey => $contactInformation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                            <?php if($customerKey == 0): ?>
                                                                                                                                <p>
                                                                                                                                    First
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?></strong>,
                                                                                                                                    Last
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?></strong>,
                                                                                                                                    Title
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->title != ''? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Direct
                                                                                                                                    Phone
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->direct_phone); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Cell
                                                                                                                                    Phone
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->cell); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Email
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->email); ?></strong>
                                                                                                                                </p>
                                                                                                                                <?php if(count($project->customer_contract->contactInformation) > 1): ?>
                                                                                                                                    <p>
                                                                                                                                        <a href="javascript:void(0)"
                                                                                                                                           class="show_more"
                                                                                                                                           id="customerMore<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                           data-id="<?php echo e($project->customer_contract->id); ?>">Show
                                                                                                                                            More</a>
                                                                                                                                        <a href="javascript:void(0)"
                                                                                                                                           class="show_less"
                                                                                                                                           id="customerLess<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                           data-id="<?php echo e($project->customer_contract->id); ?>">Show
                                                                                                                                            Less</a>
                                                                                                                                    </p>
                                                                                                                                <?php endif; ?>
                                                                                                                            <?php else: ?>
                                                                                                                                <div class="customer<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                     style="display: none;">
                                                                                                                                    <p>
                                                                                                                                        First
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?></strong>,
                                                                                                                                        Last
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?></strong>,
                                                                                                                                        Title
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->title != ''? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Direct
                                                                                                                                        Phone
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->direct_phone); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Cell
                                                                                                                                        Phone
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->cell); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Email
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->email); ?></strong>
                                                                                                                                    </p>
                                                                                                                                </div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                    <?php endif; ?>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                
                                                                                <?php if(count($projectContacts) > 0): ?>
                                                                                    <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php
                                                                                            $customerDetails = \App\Models\CompanyContact::find($contact['customer_id']);
                                                                                            $mapDetails = $customerDetails->mapContactCompany;
                                                                                        ?>
                                                                                        <div class="panel panel-default">
                                                                                            <div class="panel-heading">
                                                                                                <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#industry<?php echo e($key); ?>"><?php echo e($contact['type']); ?> - <small><strong><?php echo e($contact['company']->company); ?></strong></small></a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="industry<?php echo e($key); ?>" class="panel-collapse collapse">
                                                                                                <div class="panel-body">
                                                                                                    <div class="panel-main">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="col-md-5">
                                                                                                                <div align="left">
                                                                                                                    <p>Company Name: <strong><?php echo e($contact['company']->company); ?></strong></p>
                                                                                                                    <p>Address : <strong><?php echo e($contact['company']->address != '' ? $contact['company']->address : 'N/A'); ?></strong></p>
                                                                                                                    <p>City : <strong><?php echo e($contact['company']->city != '' ? $contact['company']->city : 'N/A'); ?></strong>, State : <strong><?php echo e($contact['company']->state->name); ?></strong>, Zip : <strong><?php echo e($contact['company']->zip != '' ? $contact['company']->zip : 'N/A'); ?></strong></p>
                                                                                                                    <p>Telephone : <strong><?php echo e($contact['company']->phone != '' ? $contact['company']->phone : 'N/A'); ?></strong></p>
                                                                                                                    <p>Fax : <strong><?php echo e($contact['company']->fax != '' ? $contact['company']->fax : 'N/A'); ?></strong></p>
                                                                                                                    <p>Web : <strong><?php echo e($contact['company']->website != '' ? $contact['company']->website : 'N/A'); ?></strong></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-2">
                                                                                                                &nbsp;
                                                                                                            </div>
                                                                                                            <div class="col-md-5">
                                                                                                                <div align="right">
                                                                                                                    
                                                                                                                    <?php if(count($contact['customers']) > 0): ?>
                                                                                                                        <?php $__currentLoopData = $contact['customers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industryKey => $contactInformationIns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                            <?php if($industryKey == 0): ?>
                                                                                                                                <p>First : <strong><?php echo e($contactInformationIns->first_name != '' ? $contactInformationIns->first_name : 'N/A'); ?></strong>, Last : <strong><?php echo e($contactInformationIns->last_name != '' ? $contactInformationIns->last_name : 'N/A'); ?></strong>, Title : <strong><?php echo e($contactInformationIns->title != ''? ($contactInformationIns->title == 'Other' ? $contactInformationIns->title_other : $contactInformationIns->title) : 'N/A'); ?></strong></p>
                                                                                                                                <p>Direct Phone : <strong><?php echo e($contactInformationIns->phone); ?></strong></p>
                                                                                                                                <p>Cell Phone : <strong><?php echo e($contactInformationIns->cell); ?></strong></p>
                                                                                                                                <p>Email : <strong><?php echo e($contactInformationIns->email); ?></strong></p>
                                                                                                                                <?php if(count($contact['customers']) > 1): ?>
                                                                                                                                    <p>
                                                                                                                                        <a href="javascript:void(0)" class="show_more" id="customerMore<?php echo e($key); ?>" data-id="<?php echo e($key); ?>">Show More</a>
                                                                                                                                        <a href="javascript:void(0)" class="show_less" id="customerLess<?php echo e($key); ?>" data-id="<?php echo e($key); ?>">Show Less</a>
                                                                                                                                    </p>
                                                                                                                                <?php endif; ?>
                                                                                                                            <?php else: ?>
                                                                                                                                <div class="customer<?php echo e($key); ?>" style="display: none;">
                                                                                                                                    <p>First : <strong><?php echo e($contactInformationIns->first_name != '' ? $contactInformationIns->first_name : 'N/A'); ?></strong>, Last : <strong><?php echo e($contactInformationIns->last_name != '' ? $contactInformationIns->last_name : 'N/A'); ?></strong>, Title : <strong><?php echo e($contactInformationIns->title != ''? ($contactInformationIns->title == 'Other' ? $contactInformationIns->title_other : $contactInformationIns->title) : 'N/A'); ?></strong></p>
                                                                                                                                    <p>Direct Phone : <strong><?php echo e($contactInformationIns->phone); ?></strong></p>
                                                                                                                                    <p>Cell Phone : <strong><?php echo e($contactInformationIns->cell); ?></strong></p>
                                                                                                                                    <p>Email : <strong><?php echo e($contactInformationIns->email); ?></strong></p>
                                                                                                                                </div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <div class="head-top">
                                                                                    &nbsp;
                                                                                    <div class="pull-right">
                                                                                        <button class="btn btn-success expandall-icon2"><i class="fa fa-plus fa-2x"></i> </button>
                                                                                        <button class="btn btn-warning collapseall-icon2"><i class="fa fa-minus fa-2x"></i> </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="documentsLienLaw" class="tab-pane fade">
                                                                        <div class="border-table">
                                                                            <!-- <h1 class="text-center">Project Documents</h1>
                                                                            <hr class="divider"> -->
                                                                            <form action="#" method="post"
                                                                                  class="form-horizontal project-form project_documents_lien">
                                                                               
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <div class="form-group">
                                                                                            <label>Existing
                                                                                                Documents</label>
                                                                                        </div>
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th class="text-center">Document
                                                                                                Date
                                                                                            </th>
                                                                                            <th class="text-center">Document
                                                                                                Type
                                                                                            </th>
                                                                                            <th class="text-center">View
                                                                                            </th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td>N/A</td>
                                                                                            <td>Lien Law Summary</td>
                                                                                            <td>
                                                                                                <button id="lianLawSummery"
                                                                                                        type="button"
                                                                                                        class="form-control btn blue-btn btn-success lianLawSummery">
                                                                                                    View
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php if(!empty($project_documents)): ?>
                                                                                            <?php $__currentLoopData = $project_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php if($document['data']): ?>
                                                                                                    <tr>
                                                                                                        <td><?php echo e(date("F d, Y h:i:s A", strtotime(isset($document['data']) ? $document['data']->created_at : ''))); ?></td>
                                                                                                        
                                                                                                        <td><?php echo e($document['name']); ?></td>
                                                                                                        
                                                                                                        <?php if($document['name'] == 'Claim form and project data sheet'): ?>
                                                                                                            <td>
                                                                                                                <a href="<?php echo e(route('get.lien.documentClaimView',[$project_id,$flag])); ?>"
                                                                                                                   class="form-control btn blue-btn btn-success">View</a>
                                                                                                            </td>
                                                                                                        <?php elseif($document['name'] == 'Credit Application'): ?>
                                                                                                            <td>
                                                                                                                <a href="<?php echo e(route('get.lien.documentCreditView',[$project_id,$flag])); ?>"
                                                                                                                   class="form-control btn blue-btn btn-success">View</a>
                                                                                                            </td>
                                                                                                        <?php elseif($document['name'] == 'joint payment authorization'): ?>
                                                                                                            <td>
                                                                                                                <a href="<?php echo e(route('get.lien.documentJointView',[$project_id,$flag])); ?>"
                                                                                                                   class="form-control btn blue-btn btn-success">View</a>
                                                                                                            </td>
                                                                                                        <?php elseif($document['name'] == 'Waver progress'): ?>
                                                                                                            <td>
                                                                                                                <a href="<?php echo e(route('get.lien.documentWaverView',[$project_id,$flag])); ?>"
                                                                                                                   class="form-control btn blue-btn btn-success">View</a>
                                                                                                            </td>
                                                                                                        <?php elseif($document['name'] == 'job info sheet'): ?>
                                                                                                            <td>
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="col-md-6">
                                                                                                                        <a href="<?php echo e(route('get.lien.job.info.sheet',[$project_id])); ?>"
                                                                                                                           class="form-control btn blue-btn btn-success viewBtn"
                                                                                                                           target="_blank">View</a>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                        <a href="<?php echo e(route('get.lien.jobInfoExport',[$project_id])); ?>"
                                                                                                                           class="form-control btn btn-info"
                                                                                                                           target="_blank">Export
                                                                                                                            as
                                                                                                                            PDF</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        <?php endif; ?>
                                                                                                    </tr>
                                                                                                <?php endif; ?>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php endif; ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="detailed" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="main-tab-sec">
                                                                <div class="main-tab-menu">
                                                                    <ul class="nav nav-tabs">
                                                                        <!-- <li class="active">
                                                                            <a data-toggle="tab" href="#project_details_details">Project</a>
                                                                        </li> -->
                                                                        <li class="active">
                                                                            <a data-toggle="tab" href="#lienLawChartDetailed">Dashboard</a>
                                                                        </li>
                                                                        <li >
                                                                            <a data-toggle="tab" href="#contact">Contact</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-toggle="tab" href="#contracts">Contracts</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-toggle="tab" href="#project-dates">Project
                                                                                Dates</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-toggle="tab" href="#documents">Documents</a>
                                                                        </li>
                                                                        <li >
                                                                            <a data-toggle="tab" href="#home">Deadlines</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-toggle="tab" href="#tasks">Tasks</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content tab-final">

                                                                    <div id="lienLawChartDetailed"
                                                                         class="tab-pane fade in active">
                                                                        <div class="box">
                                                                            <div class="head-top">
                                                                                <?php echo e($project->state->name); ?>

                                                                                <div class="pull-right">
                                                                                    <button class="btn btn-success expandall-icon">
                                                                                        <i class="fa fa-plus fa-2x"></i>
                                                                                    </button>
                                                                                    <button class="btn btn-warning collapseall-icon">
                                                                                        <i class="fa fa-minus fa-2x"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="head-top2"><?php echo e($project->project_type->project_type); ?></div>
                                                                            <div class="panel-group" id="accordion_detailed">
                                                                                <?php if(count($remedyNames) > 0): ?>
                                                                                    <?php $__currentLoopData = $remedyNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $remedyKey => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <div class="panel panel-default">
                                                                                            <div class="panel-heading">
                                                                                                <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse"
                                                                                                       data-parent="#accordion_detailed"
                                                                                                       href="#detailed_<?php echo e($remedyKey); ?>"><?php echo e($name); ?></a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <?php if(count($liens) > 0): ?>
                                                                                                <?php $__currentLoopData = $liens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <?php if( $name == $lien['remedy'] ): ?>
                                                                                                        <div id="detailed_<?php echo e($key); ?>"
                                                                                                             class="panel-collapse collapse">
                                                                                                            <div class="panel-body">
                                                                                                                <div class="panel-main">
                                                                                                                    <p style="font-size: medium;">
                                                                                                                        <strong>Description:</strong> <?php echo e($lien->description); ?>

                                                                                                                    </p>
                                                                                                                    <p style="font-size: medium;">
                                                                                                                        <strong>Tiers:</strong> <?php echo e($lien->tier_limit); ?>

                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    <?php endif; ?>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">
                                                                                        <h4 class="panel-title">
                                                                                            <a data-toggle="collapse"
                                                                                               data-parent="#accordion_detailed"
                                                                                               href="#jobDescription_detailed">Job
                                                                                                Description (
                                                                                                <small><strong><?php echo e($project->project_name); ?></strong></small>
                                                                                                )</a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="jobDescription_detailed"
                                                                                         class="panel-collapse collapse">
                                                                                        <div class="panel-body">
                                                                                            <div class="panel-main">
                                                                                                <div class="col-md-12">
                                                                                                    <div align="left">
                                                                                                        <p>Job Name :
                                                                                                            <strong><?php echo e($project->project_name); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job Address :
                                                                                                            <strong><?php echo e($project->address != '' ? $project->address : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job City :
                                                                                                            <strong><?php echo e($project->city != '' ? $project->city : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job State :
                                                                                                            <strong><?php echo e($project->state->name); ?></strong>
                                                                                                        </p>
                                                                                                        <p>Job Zip :
                                                                                                            <strong><?php echo e($project->zip != '' ? $project->zip : 'N/A'); ?></strong>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php if(!is_null($project->customer_contract)): ?>
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                            <h4 class="panel-title">
                                                                                                <a data-toggle="collapse"
                                                                                                   data-parent="#accordion_detailed"
                                                                                                   href="#customer_detailed">Customer
                                                                                                    -
                                                                                                    <small><strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->company) ?$project->customer_contract->company->company : 'N/A'); ?></strong></small>
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="customer_detailed"
                                                                                             class="panel-collapse collapse in">
                                                                                            <div class="panel-body">
                                                                                                <div class="panel-main">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="col-md-5">
                                                                                                            <div align="left">
                                                                                                                <p>
                                                                                                                    Company
                                                                                                                    Name:
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->company) ?$project->customer_contract->company->company : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>
                                                                                                                    Address
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->address) ?$project->customer_contract->company->company : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>City
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->city) ?$project->customer_contract->company->city : 'N/A'); ?></strong>,
                                                                                                                    State
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->state) ?$project->customer_contract->company->state->name : 'N/A'); ?></strong>,
                                                                                                                    Zip
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->zip) ?$project->customer_contract->company->zip : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>
                                                                                                                    Telephone
                                                                                                                    :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->phone) ?$project->customer_contract->company->phone : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>Fax :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->fax) ?$project->customer_contract->company->fax : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                                <p>Web :
                                                                                                                    <strong><?php echo e(!is_null($project->customer_contract->company) && !is_null($project->customer_contract->company->website) ?$project->customer_contract->company->website : 'N/A'); ?></strong>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-2">
                                                                                                            &nbsp;
                                                                                                        </div>
                                                                                                        <div class="col-md-5">
                                                                                                            <div align="right">
                                                                                                                <?php if(isset($project->customer_contract->contactInformation)): ?>
                                                                                                                    <?php if(count($project->customer_contract->contactInformation) > 0): ?>
                                                                                                                        <?php $__currentLoopData = $project->customer_contract->contactInformation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerKey => $contactInformation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                            <?php if($customerKey == 0): ?>
                                                                                                                                <p>
                                                                                                                                    First
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?></strong>,
                                                                                                                                    Last
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?></strong>,
                                                                                                                                    Title
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->title != ''? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Direct
                                                                                                                                    Phone
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->direct_phone); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Cell
                                                                                                                                    Phone
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->cell); ?></strong>
                                                                                                                                </p>
                                                                                                                                <p>
                                                                                                                                    Email
                                                                                                                                    :
                                                                                                                                    <strong><?php echo e($contactInformation->email); ?></strong>
                                                                                                                                </p>
                                                                                                                                <?php if(count($project->customer_contract->contactInformation) > 1): ?>
                                                                                                                                    <p>
                                                                                                                                        <a href="javascript:void(0)"
                                                                                                                                           class="show_more"
                                                                                                                                           id="customerMore<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                           data-id="<?php echo e($project->customer_contract->id); ?>">Show
                                                                                                                                            More</a>
                                                                                                                                        <a href="javascript:void(0)"
                                                                                                                                           class="show_less"
                                                                                                                                           id="customerLess<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                           data-id="<?php echo e($project->customer_contract->id); ?>">Show
                                                                                                                                            Less</a>
                                                                                                                                    </p>
                                                                                                                                <?php endif; ?>
                                                                                                                            <?php else: ?>
                                                                                                                                <div class="customer<?php echo e($project->customer_contract->id); ?>"
                                                                                                                                     style="display: none;">
                                                                                                                                    <p>
                                                                                                                                        First
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?></strong>,
                                                                                                                                        Last
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?></strong>,
                                                                                                                                        Title
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->title != ''? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Direct
                                                                                                                                        Phone
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->direct_phone); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Cell
                                                                                                                                        Phone
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->cell); ?></strong>
                                                                                                                                    </p>
                                                                                                                                    <p>
                                                                                                                                        Email
                                                                                                                                        :
                                                                                                                                        <strong><?php echo e($contactInformation->email); ?></strong>
                                                                                                                                    </p>
                                                                                                                                </div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                    <?php endif; ?>
                                                                                                                <?php endif; ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                <?php if(count($projectContacts) > 0): ?>
                                                                                    <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php
                                                                                            $customerDetails = \App\Models\CompanyContact::find($contact['customer_id']);
                                                                                            $mapDetails = $customerDetails->mapContactCompany;
                                                                                        ?>
                                                                                        <div class="panel panel-default">
                                                                                            <div class="panel-heading">
                                                                                                <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion_detailed" href="#industry_detailed<?php echo e($key); ?>"><?php echo e($contact['type']); ?> - <small><strong><?php echo e($contact['company']->company); ?></strong></small></a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="industry_detailed<?php echo e($key); ?>" class="panel-collapse collapse">
                                                                                                <div class="panel-body">
                                                                                                    <div class="panel-main">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="col-md-5">
                                                                                                                <div align="left">
                                                                                                                    <p>Company Name: <strong><?php echo e($contact['company']->company); ?></strong></p>
                                                                                                                    <p>Address : <strong><?php echo e($contact['company']->address != '' ? $contact['company']->address : 'N/A'); ?></strong></p>
                                                                                                                    <p>City : <strong><?php echo e($contact['company']->city != '' ? $contact['company']->city : 'N/A'); ?></strong>, State : <strong><?php echo e($contact['company']->state->name); ?></strong>, Zip : <strong><?php echo e($contact['company']->zip != '' ? $contact['company']->zip : 'N/A'); ?></strong></p>
                                                                                                                    <p>Telephone : <strong><?php echo e($contact['company']->phone != '' ? $contact['company']->phone : 'N/A'); ?></strong></p>
                                                                                                                    <p>Fax : <strong><?php echo e($contact['company']->fax != '' ? $contact['company']->fax : 'N/A'); ?></strong></p>
                                                                                                                    <p>Web : <strong><?php echo e($contact['company']->website != '' ? $contact['company']->website : 'N/A'); ?></strong></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-2">
                                                                                                                &nbsp;
                                                                                                            </div>
                                                                                                            <div class="col-md-5">
                                                                                                                <div align="right">
                                                                                                                    <?php if(count($contact['customers']) > 0): ?>
                                                                                                                        <?php $__currentLoopData = $contact['customers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industryKey => $contactInformationIns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                            <?php if($industryKey == 0): ?>
                                                                                                                                <p>First : <strong><?php echo e($contactInformationIns->first_name != '' ? $contactInformationIns->first_name : 'N/A'); ?></strong>, Last : <strong><?php echo e($contactInformationIns->last_name != '' ? $contactInformationIns->last_name : 'N/A'); ?></strong>, Title : <strong><?php echo e($contactInformationIns->title != ''? ($contactInformationIns->title == 'Other' ? $contactInformationIns->title_other : $contactInformationIns->title) : 'N/A'); ?></strong></p>
                                                                                                                                <p>Direct Phone : <strong><?php echo e($contactInformationIns->phone); ?></strong></p>
                                                                                                                                <p>Cell Phone : <strong><?php echo e($contactInformationIns->cell); ?></strong></p>
                                                                                                                                <p>Email : <strong><?php echo e($contactInformationIns->email); ?></strong></p>
                                                                                                                                <?php if(count($contact['customers']) > 1): ?>
                                                                                                                                    <p>
                                                                                                                                        <a href="javascript:void(0)" class="show_more" id="customerMore<?php echo e($key); ?>" data-id="<?php echo e($key); ?>">Show More</a>
                                                                                                                                        <a href="javascript:void(0)" class="show_less" id="customerLess<?php echo e($key); ?>" data-id="<?php echo e($key); ?>">Show Less</a>
                                                                                                                                    </p>
                                                                                                                                <?php endif; ?>
                                                                                                                            <?php else: ?>
                                                                                                                                <div class="customer<?php echo e($key); ?>" style="display: none;">
                                                                                                                                    <p>First : <strong><?php echo e($contactInformationIns->first_name != '' ? $contactInformationIns->first_name : 'N/A'); ?></strong>, Last : <strong><?php echo e($contactInformationIns->last_name != '' ? $contactInformationIns->last_name : 'N/A'); ?></strong>, Title : <strong><?php echo e($contactInformationIns->title != ''? ($contactInformationIns->title == 'Other' ? $contactInformationIns->title_other : $contactInformationIns->title) : 'N/A'); ?></strong></p>
                                                                                                                                    <p>Direct Phone : <strong><?php echo e($contactInformationIns->phone); ?></strong></p>
                                                                                                                                    <p>Cell Phone : <strong><?php echo e($contactInformationIns->cell); ?></strong></p>
                                                                                                                                    <p>Email : <strong><?php echo e($contactInformationIns->email); ?></strong></p>
                                                                                                                                </div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <div class="head-top">
                                                                                    &nbsp;
                                                                                    <div class="pull-right">
                                                                                        <button class="btn btn-success expandall-icon2"><i class="fa fa-plus fa-2x"></i> </button>
                                                                                        <button class="btn btn-warning collapseall-icon2"><i class="fa fa-minus fa-2x"></i> </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div id="contact" class="tab-pane fade in">

                                                                        <div class="tab-content">
                                                                            <div id="allRemedies"
                                                                                 class="tab-pane fade in active">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-striped">
                                                                                        <tr>
                                                                                            <th>First Name</th>
                                                                                            <th>Last Name</th>
                                                                                            <th>Company</th>
                                                                                            <th>Email Address</th>
                                                                                            <th>Phone Number</th>
                                                                                            <th>Address</th>
                                                                                            <th>City</th>
                                                                                            <th>State</th>
                                                                                            <th>ZIP Code</th>
                                                                                        </tr>
                                                                                        <?php if(isset($projectOwner)): ?>
                                                                                            <tr>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->first_name); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->last_name); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->company); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwner->email); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->phone); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->address); ?></td>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->city); ?></td>
                                                                                                <?php if(isset($projectOwnerDetailsState)): ?>
                                                                                                    <td style="text-align: left"><?php echo e($projectOwnerDetailsState->name); ?></td>
                                                                                                <?php else: ?>
                                                                                                    <td style="text-align: left"></td>
                                                                                                <?php endif; ?>
                                                                                                <td style="text-align: left"><?php echo e($projectOwnerDetails->zip); ?></td>
                                                                                            </tr>
                                                                                        <?php else: ?>
                                                                                            <tr>
                                                                                                <td colspan="5"> No
                                                                                                    Contact found...
                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php endif; ?>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    
                                                                    <div id="home" class="tab-pane fade in">
                                                                        <div class="tab-area1">
                                                                            <ul class="nav nav-tabs">
                                                                                <?php if(count($remedyNames) > 0): ?>
                                                                                    <li class="active"><a
                                                                                                data-toggle="tab"
                                                                                                href="#allRemedies">All
                                                                                            Remedies</a></li>
                                                                                    <?php $__currentLoopData = $remedyNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <li class=""><a
                                                                                                    data-toggle="tab"
                                                                                                    href="#<?php echo e($key); ?>"><?php echo e($name); ?></a>
                                                                                        </li>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tab-content">
                                                                            <div id="allRemedies"
                                                                                 class="tab-pane fade in active">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-striped">
                                                                                        <tr>
                                                                                            <th>#</th>
                                                                                            <th>Legal Steps</th>
                                                                                            <th>Days Remaining</th>
                                                                                            <th>Preliminary Deadline
                                                                                            </th>
                                                                                            <th>Date Legal Step
                                                                                                Completed
                                                                                            </th>
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
                                                                                                    <td><?php echo e($daysRemain[$key]['dates']); ?></td>
                                                                                                    <td>
                                                                                                        <?php echo e($daysRemain[$key]['preliminaryDates']); ?>

                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input type="text"
                                                                                                               class="form-control date"
                                                                                                               name="date-legal[]"
                                                                                                               disabled="disabled"
                                                                                                               data-provide="datepicker"
                                                                                                               value="<?php echo e($deadlines[$key]['legal_completion_date']); ?>">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <select name="email-alert[]"
                                                                                                                disabled="disabled">
                                                                                                            <option value="1" <?php echo e($deadlines[$key]['email_alert'] == 1 ? 'selected' : ''); ?>>
                                                                                                                On
                                                                                                            </option>
                                                                                                            <option value="0" <?php echo e($deadlines[$key]['email_alert'] == 0 ? 'selected' : ''); ?>>
                                                                                                                Off
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php else: ?>
                                                                                            <tr>
                                                                                                <td colspan="5"> No
                                                                                                    Deadline found...
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
                                                                                                <th>Preliminary
                                                                                                    Deadline
                                                                                                </th>
                                                                                                <th>Date Legal Step
                                                                                                    Completed
                                                                                                </th>
                                                                                                <th>Email Alert</th>
                                                                                            </tr>
                                                                                            <?php if(count($deadlines) > 0): ?>
                                                                                                <?php $__currentLoopData = $deadlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $deadline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <?php if( $remedyKey == $deadlines[$key]['remedy_id'] ): ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo e($deadline->short_description); ?></td>
                                                                                                            <td><?php echo e($daysRemain[$key]['dates']); ?></td>
                                                                                                            <td>
                                                                                                                <?php echo e($daysRemain[$key]['preliminaryDates']); ?>

                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <input type="text"
                                                                                                                       class="form-control date"
                                                                                                                       disabled="disabled"
                                                                                                                       name="date-legal[]"
                                                                                                                       data-provide="datepicker"
                                                                                                                       value="<?php echo e($deadlines[$key]['legal_completion_date']); ?>">
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <select name="email-alert[]"
                                                                                                                        disabled="disabled">
                                                                                                                    <option value="1" <?php echo e($deadlines[$key]['email_alert'] == 1 ? 'selected' : ''); ?>>
                                                                                                                        On
                                                                                                                    </option>
                                                                                                                    <option value="0" <?php echo e($deadlines[$key]['email_alert'] == 0 ? 'selected' : ''); ?>>
                                                                                                                        Off
                                                                                                                    </option>
                                                                                                                </select>
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
                                                                    <div id="contracts" class="tab-pane fade in">
                                                                        <!--   <h1> Project contracts</h1> -->
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <div class="border-table">
                                                                                    <div class="table-responsive amount-table">
                                                                                        <table class="table">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <td>Base Contract Amount
                                                                                                    $
                                                                                                </td>
                                                                                                <th><input type="number"
                                                                                                           class="form-control"
                                                                                                           name="base_amount"
                                                                                                           id="base_amount"
                                                                                                           value="<?php echo e((isset($contract) && $contract != '' && $contract->base_amount != '')?$contract->base_amount:'0'); ?>"
                                                                                                           disabled>
                                                                                                </th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td>+ Value of Extras of
                                                                                                    Changes $
                                                                                                </td>
                                                                                                <th><input type="number"
                                                                                                           class="form-control"
                                                                                                           name="extra_amount"
                                                                                                           id="extra_amount"
                                                                                                           value="<?php echo e((isset($contract) && $contract != '' && $contract->extra_amount != '')?$contract->extra_amount:'0'); ?>"
                                                                                                           disabled>
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>= Revised Contract
                                                                                                    Subtotal $
                                                                                                </td>
                                                                                                <th><input type="text"
                                                                                                           class="form-control"
                                                                                                           id="contact_total"
                                                                                                           disabled="disabled"
                                                                                                           disabled>
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>- Payments/Credits
                                                                                                    to Date $
                                                                                                </td>
                                                                                                <th><input type="number"
                                                                                                           class="form-control"
                                                                                                           name="payment"
                                                                                                           id="payment"
                                                                                                           value="<?php echo e((isset($contract) && $contract != '' && $contract->credits != '')?$contract->credits:'0'); ?>"
                                                                                                           disabled>
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>= Total Claim Amount
                                                                                                    $
                                                                                                </td>
                                                                                                <th><input type="text"
                                                                                                           class="form-control"
                                                                                                           id="claim_amount"
                                                                                                           name="claim_amount"
                                                                                                           disabled="disabled"
                                                                                                           disabled>
                                                                                                </th>
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
                                                                                                <th><input type="number"
                                                                                                           name="waiver_amount"
                                                                                                           value="<?php echo e((isset($contract) && $contract != '' && $contract->waiver != '')?$contract->waiver:'0'); ?>"
                                                                                                           disabled
                                                                                                           class="form-control">
                                                                                                </th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <th>Receivable Status
                                                                                                </th>
                                                                                                <td>
                                                                                                    <strong>
                                                                                                        <?php echo e((isset($contract) && $contract != '' && $contract->receivable_status)? $contract->receivable_status : ''); ?>

                                                                                                    </strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th>Deadline Calculation
                                                                                                    Status
                                                                                                </th>
                                                                                                <td>
                                                                                                    <?php (isset($contract) && $contract != '' && $contract->receivable_status) ? $var = $contract->calculation_status : $var = '4' ?>
                                                                                                    <?php if($var == '0'): ?>
                                                                                                        <strong>In
                                                                                                            Process</strong>
                                                                                                    <?php elseif($var == '1'): ?>
                                                                                                        Completed
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
                                                                    <div id="project-dates" class="tab-pane fade">
                                                                        <div class="border-table">
                                                                            <!-- <h1> Project Dates</h1> -->
                                                                            <form action="#" method="post"
                                                                                  class="form-horizontal project-form project_dates">
                                                                                <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-6 control-label"><?php echo e($date->date_name); ?></label>
                                                                                        <div class="col-md-6">
                                                                                            <input type="text"
                                                                                                   class="form-control date"
                                                                                                   name="remedyDates[<?php echo e($date->id); ?>]"
                                                                                                   value="<?php echo e(isset($projectDates[$date->id])?$projectDates[$date->id]:''); ?>"
                                                                                                   data-provide="datepicker"
                                                                                                   disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php echo e(csrf_field()); ?>

                                                                                <input type="hidden" name="project_id"
                                                                                       value="<?php echo e($project_id); ?>"
                                                                                       class="project_id">
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div id="documents" class="tab-pane fade">
                                                                        <div class="border-table">
                                                                            <!-- <h1 class="text-center">Project Documents</h1>
                                                                            <hr class="divider"> -->
                                                                            <form action="#" method="post"
                                                                                  class="form-horizontal project-form project_documents">
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <table class="table">
                                                                                    <div class="form-group">
                                                                                        <label>Existing
                                                                                            Documents</label>
                                                                                    </div>
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th class="text-center">Document
                                                                                            Date
                                                                                        </th>
                                                                                        <th class="text-center">Document
                                                                                            Type
                                                                                        </th>
                                                                                        <th class="text-center">View
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>N/A</td>
                                                                                        <td>Lien Law Summary</td>
                                                                                        <td>
                                                                                            <button id="lianLawSummery"
                                                                                                    type="button"
                                                                                                    class="form-control btn blue-btn btn-success lianLawSummery">
                                                                                                View
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php if(!empty($project_documents)): ?>
                                                                                        <?php $__currentLoopData = $project_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <?php if($document['data']): ?>
                                                                                                <tr>
                                                                                                    <td><?php echo e(date("F d, Y h:i:s A", strtotime(isset($document['data']) ? $document['data']->created_at : ''))); ?></td>
                                                                                                    
                                                                                                    <td><?php echo e($document['name']); ?></td>
                                                                                                    
                                                                                                    <?php if($document['name'] == 'Claim form and project data sheet'): ?>
                                                                                                        <td>
                                                                                                            <a href="<?php echo e(route('get.documentClaimView',[$project_id,$flag])); ?>"
                                                                                                               class="form-control btn blue-btn btn-success">View</a>
                                                                                                        </td>
                                                                                                    <?php elseif($document['name'] == 'Credit Application'): ?>
                                                                                                        <td>
                                                                                                            <a href="<?php echo e(route('get.documentCreditView',[$project_id,$flag])); ?>"
                                                                                                               class="form-control btn blue-btn btn-success">View</a>
                                                                                                        </td>
                                                                                                    <?php elseif($document['name'] == 'joint payment authorization'): ?>
                                                                                                        <td>
                                                                                                            <a href="<?php echo e(route('get.documentJointView',[$project_id,$flag])); ?>"
                                                                                                               class="form-control btn blue-btn btn-success">View</a>
                                                                                                        </td>
                                                                                                    <?php elseif($document['name'] == 'Waver progress'): ?>
                                                                                                        <td>
                                                                                                            <a href="<?php echo e(route('get.documentWaverView',[$project_id,$flag])); ?>"
                                                                                                               class="form-control btn blue-btn btn-success">View</a>
                                                                                                        </td>
                                                                                                    <?php elseif($document['name'] == 'job info sheet'): ?>
                                                                                                        <td>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="col-md-6">
                                                                                                                    <a href="<?php echo e(route('get.lien.job.info.sheet',[$project_id])); ?>"
                                                                                                                       class="form-control btn blue-btn btn-success viewBtn"
                                                                                                                       target="_blank">View</a>
                                                                                                                </div>
                                                                                                                <div class="col-md-6">
                                                                                                                    <a href="<?php echo e(route('get.lien.jobInfoExport',[$project_id])); ?>"
                                                                                                                       class="form-control btn btn-info"
                                                                                                                       target="_blank">Export
                                                                                                                        as
                                                                                                                        PDF</a>
                                                                                                                </div>
                                                                                                            </div>
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
                                                                    <div id="tasks" class="tab-pane fade">
                                                                        <div class="border-table">
                                                                        <!--  <h1 class="text-center">Project Tasks</h1>
     <hr class="divider">
     <?php if(count($tasks) > 0): ?> -->
                                                                            <div class="row border-class">
                                                                                <div class="col-md-12">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th class="text-center">
                                                                                                    #
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Action
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Comments
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Deadline
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Date Completed
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Email Alert
                                                                                                </th>
                                                                                                <th class="text-center">
                                                                                                    Action
                                                                                                </th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php
                                                                                                    $date1 = new DateTime($task->due_date);
                                                                                                    $date2 = new DateTime(date('Y-m-d'));
                                                                                                    $diff = $date2->diff($date1)->format("%R%a days");
                                                                                                    $exactDiff = $date2->diff($date1)->format("%a days");
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td><?php echo e($key + 1); ?></td>
                                                                                                    <td><?php echo e($task->task_name); ?></td>
                                                                                                    <td><?php echo e($task->comment); ?></td>
                                                                                                    <td>
                                                                                                        <?php echo e(\DateTime::createFromFormat('Y-m-d', $task->due_date)->format('m/d/Y')); ?>

                                                                                                        <br/> <span
                                                                                                                style="color: red;">
                          <?php echo e($diff > 0?'You have '.$exactDiff.' remaining.':'This deadline has passed'); ?>

                          </span>
                                                                                                    </td>
                                                                                                    <td><?php echo e($task->complete_date != ''?\DateTime::createFromFormat('Y-m-d', $task->complete_date)->format('d/m/Y'):''); ?></td>
                                                                                                    <td><?php echo e($task->email_alert == 0?'Off':'On'); ?></td>
                                                                                                    <td>
                                                                                                        <button class="btn btn-xs btn-warning editButton"
                                                                                                                type="button"
                                                                                                                data-id="<?php echo e($task->id); ?>"
                                                                                                                data-action="<?php echo e($task->task_name); ?>"
                                                                                                                data-due_date="<?php echo e(\DateTime::createFromFormat('Y-m-d', $task->due_date)->format('d/m/Y')); ?>"
                                                                                                                data-complete_date="<?php echo e($task->complete_date != ''?\DateTime::createFromFormat('Y-m-d', $task->complete_date)->format('d/m/Y'):''); ?>"
                                                                                                                data-email="<?php echo e($task->email_alert); ?>"
                                                                                                                data-file="<?php echo e($task->file_link); ?>"
                                                                                                                data-comment="<?php echo e($task->comment); ?>"
                                                                                                                data-toggle="modal">
                                                                                                            <i class="fa fa-pencil"></i>
                                                                                                        </button>
                                                                                                        <button class="btn btn-xs btn-danger deleteTask"
                                                                                                                data-id="<?php echo e($task->id); ?>"
                                                                                                                type="button">
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
                                                                                    <h4>You currently have no tasks set
                                                                                        up for this
                                                                                        project.</h4>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <form action="<?php echo e(route('project.add.task')); ?>"
                                                                                          class="form-horizontal border-class"
                                                                                          method="post">
                                                                                        <h4 class="text-center">Create
                                                                                            New Task</h4>
                                                                                        <hr class="divider">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-1">Action</label>
                                                                                            <div class="col-md-3">
                                                                                                <select name="action"
                                                                                                        class="form-control">
                                                                                                    <option value="Call Customer">
                                                                                                        Call
                                                                                                        Customer
                                                                                                    </option>
                                                                                                    <option value="Follow Up Payment">
                                                                                                        Follow
                                                                                                        Up Payment
                                                                                                    </option>
                                                                                                    <option value="Prepare Waivers for Draw">
                                                                                                        Prepare Waivers
                                                                                                        for Draw
                                                                                                    </option>
                                                                                                    <option value="Prepare Credit Application">
                                                                                                        Prepare Credit
                                                                                                        Application
                                                                                                    </option>
                                                                                                    <option value="Prepare  Rider to Contract">
                                                                                                        Prepare Rider to
                                                                                                        Contract
                                                                                                    </option>
                                                                                                    <option value="Forward Claim To NLB">
                                                                                                        Forward Claim To
                                                                                                        NLB
                                                                                                    </option>
                                                                                                    <option value="Other">
                                                                                                        Other
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <label class="control-label col-md-2">Due
                                                                                                Date</label>
                                                                                            <div class="col-md-2">
                                                                                                <input type="text"
                                                                                                       class="form-control date"
                                                                                                       name="due_date"
                                                                                                       data-provide="datepicker">
                                                                                            </div>
                                                                                            <label class="control-label col-md-2">Email
                                                                                                Alert</label>
                                                                                            <div class="col-md-2">
                                                                                                <select name="email_alert"
                                                                                                        class="form-control">
                                                                                                    <option value="0">
                                                                                                        Off
                                                                                                    </option>
                                                                                                    <option value="1">
                                                                                                        On
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                               name="project_id"
                                                                                               value="<?php echo e($project_id); ?>">
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-2">Comments</label>
                                                                                            <div class="col-md-6">
                                                                            <textarea class="form-control"
                                                                                      name="comment"></textarea>
                                                                                            </div>
                                                                                            <button type="submit"
                                                                                                    class="btn btn-lg blue-btn col-md-2">
                                                                                                Add
                                                                                                Task
                                                                                            </button>
                                                                                        </div>
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
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <form id="editTaskForm" class="form-horizontal"  enctype="multipart/form-data">
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
                                            <option value="Prepare Credit Application">Prepare Credit Application
                                            </option>
                                            <option value="Prepare  Rider to Contract">Prepare Rider to Contract
                                            </option>
                                            <option value="Forward Claim To NLB">Forward Claim To NLB</option>
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
                                <div class="form-group">
                                    <label for="fax" class="col-sm-4 control-label">File</label>

                                    <div class="col-sm-8">
                                        <input type="file" class="form-control error" name="file" id="file"
                                               placeholder="File">
                                        <div id="file_field"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </form>
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
    <script>
        $(document).ready(function () {
            var queryString = window.location.search.replace("?", "");
            var parameterListRaw = queryString == "" ? [] : queryString.split("&");
            var parameterList = {};
            for (var i = 0; i < parameterListRaw.length; i++) {
                var parameter = parameterListRaw[i].split("=");
                if(parameter[0] == 'tab') {
                    $('a[href="#' + parameter[1] + '"]').trigger('click');
                }
            }

            base_amount = $('#base_amount').val();
            extra_amount = $('#extra_amount').val();
            payment = $('#payment').val();
            total = parseFloat(base_amount) + parseFloat(extra_amount);
            claim_total = parseFloat(total) - parseFloat(payment);
            $('#contact_total').val(total);
            $('#claim_amount').val(claim_total);


            $('#activate-step-5').on('click', function (e) {
                window.location.href = "<?php echo e(route('project.task.view').'?project_id='.$project_id); ?>";
            });
            $('.lianLawSummery').on('click', function () {
                url = "<?php echo e(route('get.lien.lineBoundSummery',[$project->state_id,$project->project_type_id])); ?>";
                window.open(url, '_blank');
            });
            $('#DocumentType').on('change', function () {
                var selected = $(this).val();
                if (selected != '') {
                    $('#createDocument').removeAttr('disabled');
                } else {
                    $('#createDocument').attr('disabled', 'disabled');
                }
            });
            $('#DocumentTypeLien').on('change', function () {
                var selected = $(this).val();
                if (selected != '') {
                    $('#createDocumentLien').removeAttr('disabled');
                } else {
                    $('#createDocumentLien').attr('disabled', 'disabled');
                }
            });
            $('#createDocument').on('click', function () {
                var document = $('#DocumentType').val();
                var url = '';
                if (document == 'ClaimData') {
                    url = '<?php echo e(route('get.documentClaimData',[$project_id])); ?>';
                } else if (document == 'CreditApplication') {
                    url = '<?php echo e(route('get.creditApplication',[$project_id])); ?>';
                } else if (document == 'JointPaymentAuthorization') {
                    url = '<?php echo e(route('get.jointPaymentAuthorization',[$project_id])); ?>';
                } else if (document == 'UnconditionalWaiverProgress') {
                    url = '<?php echo e(route('get.documentUnconditionalWaiverRelease',[$project_id])); ?>';
                } else if (document == 'ConditionalWaiver') {
                    url = '<?php echo e(route('get.documentConditionalWaiver',[$project_id])); ?>';
                } else if (document == 'ConditionalWaiverFinal') {
                    url = '<?php echo e(route('get.documentConditionalWaiverFinal',[$project_id])); ?>';
                } else if (document == 'UnconditionalWaiverFinal') {
                    url = '<?php echo e(route('get.documentUnconditionalWaiverFinal',[$project_id])); ?>';
                } else if (document == 'PartialWaiver') {
                    url = '<?php echo e(route('get.documentPartialWaiver',[$project_id])); ?>';
                } else if (document == 'PartialWaiverDate') {
                    url = '<?php echo e(route('get.documentPartialWaiverDate',[$project_id])); ?>';
                } else if (document == 'WaiverOfLien') {
                    url = '<?php echo e(route('get.documentStandardWaiverFinal',[$project_id])); ?>';
                } else if (document == 'JobInfo') {
                    url = '<?php echo e(route('get.job.info.sheet',[ $project_id ])); ?>';
                } else {
                    url = '<?php echo e(route('lien.dashboard')); ?>';
                }
                window.open(url, '_blank');
            });
            $('#createDocumentLien').on('click', function () {
                var document = $('#DocumentTypeLien').val();
                var url = '';
                if (document == 'ClaimData') {
                    url = '<?php echo e(route('get.documentClaimData',[$project_id])); ?>';
                } else if (document == 'CreditApplication') {
                    url = '<?php echo e(route('get.creditApplication',[$project_id])); ?>';
                } else if (document == 'JointPaymentAuthorization') {
                    url = '<?php echo e(route('get.jointPaymentAuthorization',[$project_id])); ?>';
                } else if (document == 'UnconditionalWaiverProgress') {
                    url = '<?php echo e(route('get.documentUnconditionalWaiverRelease',[$project_id])); ?>';
                } else if (document == 'ConditionalWaiver') {
                    url = '<?php echo e(route('get.documentConditionalWaiver',[$project_id])); ?>';
                } else if (document == 'ConditionalWaiverFinal') {
                    url = '<?php echo e(route('get.documentConditionalWaiverFinal',[$project_id])); ?>';
                } else if (document == 'UnconditionalWaiverFinal') {
                    url = '<?php echo e(route('get.documentUnconditionalWaiverFinal',[$project_id])); ?>';
                } else if (document == 'PartialWaiver') {
                    url = '<?php echo e(route('get.documentPartialWaiver',[$project_id])); ?>';
                } else if (document == 'PartialWaiverDate') {
                    url = '<?php echo e(route('get.documentPartialWaiverDate',[$project_id])); ?>';
                } else if (document == 'WaiverOfLien') {
                    url = '<?php echo e(route('get.documentStandardWaiverFinal',[$project_id])); ?>';
                } else if (document == 'JobInfo') {
                    url = '<?php echo e(route('get.job.info.sheet',[ $project_id ])); ?>';
                } else {
                    url = '<?php echo e(route('lien.dashboard')); ?>';
                }
                window.open(url, '_blank');
            });
            $('.editButton').on('click', function () {
                $("#file_field").empty();
                $("#file").val('');
                var id = $(this).data('id');
                $('#task_id').val(id);
                var action = $(this).data('action');
                $('#action').val(action);
                var due_date = $(this).data('due_date');
                $('#due_date').val(due_date);
                var email = $(this).data('email');
                $('#email_alert').val(email);
                var comment = $(this).data('comment');
                $('#comment').val(comment);
                var complete_date = $(this).data('complete_date');
                $('#complete_date').val(complete_date);
                var file = $(this).data('file');
                if(file) {
                    $("#file_field").append('<a href="/upload/'+ file +'"  target="_blank">' + file + '</a>');
                }
                $('#editTask').modal('show');
            });
            $('.editTaskButton').on('click', function () {
                var action = $('#action').val();
                if (action == '') {
                    $('#action').addClass('input-error');
                    return false;
                } else {
                    $('#action').removeClass('input-error');
                }
                var id = $('#task_id').val();
                var due_date = $('#due_date').val();
                if (due_date == '') {
                    $('#due_date').addClass('input-error');
                    return false;
                } else {
                    $('#due_date').removeClass('input-error');
                }
                var complete_date = $('#complete_date').val();
                var email = $('#email_alert').val();
                var comment = $('#comment').val();
                // if(comment == ''){
                //     $('#comment').addClass('input-error');
                //     return false;
                // } else {
                //     $('#comment').removeClass('input-error');
                // }


                var formData = new FormData($('#editTaskForm')[0]);
                formData.append("file", $('#file')[0].files[0]);
                formData.append("action", action);
                formData.append("task_id", id);
                formData.append("due_date", due_date);
                formData.append("complete_date", complete_date);
                formData.append("email", email);
                formData.append("comment", comment);
                formData.append("_token", "<?php echo e(csrf_token()); ?>");

                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('lien.project.update.task')); ?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function (data) {
                        if (data.status) {
                            $('#editTask').modal('hide');
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'Task Updated successfully',
                            }).then(function () {
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
            $('.deleteTask').on('click', function () {
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
                }).then(function () {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('project.delete.task')); ?>",
                        data: {
                            task_id: id,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function (data) {
                            if (data.status) {
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Task deleted successfully',
                                }).then(function () {
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
            //expand/collapse all
            $('.expandall-icon').click(function () {
                $(this).addClass('expand-inactive');
                $('.expandall-icon2').addClass('expand-inactive');
                $('.collapseall-icon').removeClass('collapse-inactive');
                $('.collapseall-icon2').removeClass('collapse-inactive');
                $('.collapse').addClass('in');
                $('.collapse').css('height','auto');
            });
            $('.collapseall-icon').click(function () {
                $(this).addClass('collapse-inactive');
                $('.collapseall-icon2').addClass('collapse-inactive');
                $('.expandall-icon').removeClass('expand-inactive');
                $('.expandall-icon2').removeClass('expand-inactive');
                $('.collapse').removeClass('in');
                $('.collapse').css('height','0px');
            }).addClass('collapse-inactive');
            $('.expandall-icon2').click(function () {
                $(this).addClass('expand-inactive');
                $('.expandall-icon').addClass('expand-inactive');
                $('.collapseall-icon2').removeClass('collapse-inactive');
                $('.collapseall-icon').removeClass('collapse-inactive');
                $('.collapse').addClass('in');
                $('.collapse').css('height','auto');
            });
            $('.collapseall-icon2').click(function () {
                $(this).addClass('collapse-inactive');
                $('.collapseall-icon').addClass('collapse-inactive');
                $('.expandall-icon2').removeClass('expand-inactive');
                $('.expandall-icon').removeClass('expand-inactive');
                $('.collapse').removeClass('in');
                $('.collapse').css('height','0px');
            }).addClass('collapse-inactive');

            $('.show_more').click(function () {
                var id = $(this).data('id');
                $(this).addClass('show-inactive');
                $('#customerLess'+id).removeClass('show-inactive');
                $('.customer'+id).show();
            });

            $('.show_less').click(function () {
                var id = $(this).data('id');
                $(this).addClass('show-inactive');
                $('#customerMore'+id).removeClass('show-inactive');
                $('.customer'+id).hide();
            }).addClass('show-inactive');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lienProviders.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/lienProviders/projects/project_view.blade.php ENDPATH**/ ?>