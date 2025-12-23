<?php $__env->startSection('title', 'Job Info Sheet'); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .dropdown-menu {
            width: 215px;
        }

        .blue-btn-ext {
            background: #1084ff;
            color: #fff;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0 !important;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="center-part">
                    <h3>JOB INFORMATION</h3>
                </div>
                <form method="post" action="<?php echo e(route('save.new.job')); ?>" class="form-horizontal">
                    <input type="hidden" value="<?php echo e($project->id); ?>" name="project_id">
                    <?php echo e(csrf_field()); ?>

                    <div class="black-box">
                        <!-- Company Information -->
                        <div class="block-one">
                            <div class="black-box-main">
                                <h3>Company Information</h3>
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-lg-6 formTable">
                                            <div class="row">
                                                <div class="col-md-3"><label>Company</label></div>
                                                <div class="col-md-9 field">
                                                    <input disabled type="text" name="company_name" id="company_name"
                                                        value="<?php echo e($user->details ? $user->details->getCompany->company : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label>Address</label></div>
                                                <div class="col-md-9 field">
                                                    <input disabled type="text" name="company_address" id="company_address"
                                                        value="<?php echo e($user->details ? $user->details->address : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"><label>City</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input disabled type="text" name="company_city" id="company_city"
                                                        value="<?php echo e($user->details ? $user->details->city : ''); ?>">
                                                </div>
                                                <div class="col-md-2"><label>State</label></div>
                                                <div class="col-md-2 smallField">
                                                    <select disabled name="company_state" id="company_state">
                                                        <option value="">Select a State</option>
                                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option disabled value="<?php echo e($state->id); ?>"
                                                                <?php echo e($user->details && $user->details->state_id == $state->id ? 'selected' : ''); ?>>
                                                                <?php echo e($state->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2"><label>Zip</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="company_zip" disabled id="coompany_zip"
                                                        value="<?php echo e($user->details ? $user->details->zip : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4"><label>Office Number</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="company_office_phone" disabled id="company_fax"
                                                        value="<?php echo e($user->details ? $user->details->office_phone : ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 formTable rightTable">
                                            <div class="row">
                                                <div class="col-md-2"><label>First</label></div>
                                                <div class="col-md-4 smallField">
                                                    <input type="text" name="company_fname" disabled
                                                        value="<?php echo e($user->details ? $user->details->first_name : ''); ?>"
                                                        class="autoCompleteSubUser" autocomplete="off">
                                                </div>
                                                <div class="col-md-2"><label>Last</label></div>
                                                <div class="col-md-4 smallField">
                                                    <input type="text" name="company_lname" disabled id="company_lname"
                                                        value="<?php echo e($user->details ? $user->details->last_name : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4"><label>Email</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="company_email" disabled id="company_email"
                                                        value="<?php echo e($user->details ? $user->email : ''); ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" name="customer_company_id" id="customer_company_id"
                                                value="<?php echo e($project->user_id); ?>">
                                            <div class="row">
                                                <div class="col-md-3"><label>Phone</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="company_phone" disabled id="company_phone"
                                                        value="<?php echo e($user->details ? $user->details->phone : ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job Description -->
                        <div class="block-two">
                            <div class="black-box-main">
                                <h3>
                                    JOB DESCRIPTION
                                </h3>

                                <div class="row">
                                    <div class="formTable col-lg-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                JOB NAME
                                            </div>
                                            <div class="col-md-9 field">
                                                <input type="text" name="job_name" disabled
                                                    value="<?php echo e($project ? $project->project_name : ''); ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                JOB ADDRESS
                                            </div>
                                            <div class="col-md-9 field">
                                                <input type="text" name="job_address" disabled
                                                    value="<?php echo e($project->address); ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                JOB CITY
                                            </div>
                                            <div class="col-md-9 field">
                                                <input type="text" name="job_city" disabled value="<?php echo e($project->city); ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                STATE
                                            </div>
                                            <div class="col-md-4 smallField">
                                                <select name="job_state" class="col-md-12" disabled>
                                                    <option value="">Select a State</option>
                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option disabled value="<?php echo e($state->id); ?>"
                                                            <?php echo e($project->state_id == $state->id ? 'selected' : ''); ?>>
                                                            <?php echo e($state->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                ZIP
                                            </div>
                                            <div class="col-md-4 smallField">
                                                <input type="text" name="job_zip" disabled value="<?php echo e($project->zip); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Customer Information -->
                        <div class="block-two">
                            <div class="black-box-main">
                                <h3>Your Customer <span class="gc_show" id="show_general_contractor"
                                        style="display:<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->is_gc == '0' ? 'inline' : 'none'); ?>">
                                        / General Contractor </span> </h3>
                                <input type="hidden" name="customer_id"
                                    value="<?php echo e($project->customer_contract ? $project->customer_contract->id : ''); ?>">
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-lg-6 formTable">
                                            <div class="row">
                                                <div class="col-md-3"><label>Company</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="customer_company" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->company : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label>Address</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="customer_address" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->address : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"><label>City</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="customer_city" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->city : ''); ?>">
                                                </div>
                                                <div class="col-md-2"><label>State</label></div>
                                                <div class="col-md-2 smallField">
                                                    <select name="job_state" class="col-md-12" disabled>
                                                        <option value="">Select a State</option>
                                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($state->id); ?>"
                                                                <?php echo e($project->customer_contract ? ($project->customer_contract->company->state_id == $state->id ? 'selected' : 'disabled') : 'disabled'); ?>>
                                                                <?php echo e($state->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2"><label>Zip</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="customer_zip" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->zip : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label>Telephone</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="customer_phone" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->phone : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label>Fax</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="customer_fax" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->fax : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label>Web</label></div>
                                                <div class="col-md-9 field">
                                                    <input type="text" name="customer_zip" readonly
                                                        value="<?php echo e($project->customer_contract ? $project->customer_contract->company->website : ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 formTable rightTable">
                                            
                                            <div class="row">
                                                <div class="col-md-2"><label>First</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="customerFirstName[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->first_name : 'N/A'); ?>">
                                                </div>
                                                <div class="col-md-2"><label>Last</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="customerLastName[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->last_name : 'N/A'); ?>">
                                                </div>
                                                <div class="col-md-2 "><label>Title</label></div>
                                                <div class="col-md-2 smallField">
                                                    <input type="text" name="customerLastName[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? ($project->customer_contract->contacts->title == 'Other' ? $project->customer_contract->contacts->title_other : $project->customer_contract->contacts->title) : 'N/A'); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4"><label>Direct Phone</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="customerDirectPhone[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->phone : 'N/A'); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4"><label>Cell Phone</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="customerCellPhone[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->cell : 'N/A'); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4"><label>Email</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="customerEmail[]" readonly
                                                        value="<?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->email : 'N/A'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 formTable">
                                            <div class="row">
                                                <div class="col-md-4"><label>Contract Amount </label></div>
                                                <div class="col-md-8 field">
                                                    <div class="row">
                                                        <div class="col-md-2"><span class="pull-right">$</span></div>
                                                        <div class="col-md-10">
                                                            <input type="text" name="contract_amount" disabled
                                                                value="<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? $jobInfoSheet->contract_amount : ''); ?>"
                                                                <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?>>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 formTable rightTable">
                                            <div class="row">
                                                <div class="col-md-4"><label>First day of work</label></div>
                                                <div class="col-md-8 field">
                                                    <input type="text" name="first_day_of_work" class="date" disabled
                                                        value="<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? $jobInfoSheet->first_day_of_work : ''); ?>"
                                                        <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            if your customer is the General Contractor?
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <input type="radio" name="is_gc" class="is_gc" value="0" id="is_gc" disabled
                                                <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->is_gc == '0' ? 'checked' : ''); ?>

                                                <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?>>
                                            Yes
                                            <input type="radio" disabled name="is_gc" class="is_gc" id="not_gc" value="1"
                                                <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->is_gc == '1' ? 'checked' : (!isset($jobInfoSheet) ? 'checked' : '')); ?>

                                                <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?>>
                                            No
                                        </div>
                                        <div class="col-md-5">
                                            * If not, please fill General contractor information
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- General Conductor -->
                        <?php ($gc = 1); ?>

                        <?php if(count($projectContacts) > 0): ?>
                            <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($contact['type'] == 'General Contractor'): ?>
                                    <?php ($gc++); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php if($gc == 1): ?>
                            <div class="block-two gc_hide generalContractor"
                                style="display: <?php echo e($project->originalCustomer->name == 'Original Contractor' ? 'none' : 'block'); ?>">
                                <div class="black-box-main">
                                    <h3>General Contractor </h3>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-lg-6 formTable">
                                                <div class="row">
                                                    <div class="col-md-3"><label>Company</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="gc_company" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Address</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="gc_address" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><label>City</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="gc_city" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2"><label>State</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <select name="gc_state" class="col-md-12">
                                                            <option value="" disabled>Select a State</option>
                                                            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($state->id); ?>" disabled>
                                                                    <?php echo e($state->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2"><label>Zip</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="gc_zip" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Telephone</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="gc_phone" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Fax</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="gc_fax" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Web</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="gc_web" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 formTable rightTable">
                                                <div class="row"
                                                    style="display: <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'none' : 'block'); ?>;">
                                                    
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><label>First</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="gc_first_name" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2"><label>Last</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="gc_last_name" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2 "><label>Title</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="gc_title" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Direct Phone</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="gc_direct_phone" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Cell Phone</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="gc_cell" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Email</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="gc_email" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php ($owner = 1); ?>
                        <?php if(count($projectContacts) > 0): ?>
                            <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($contact['type'] == 'Owner'): ?>
                                    <?php ($owner++); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php if($owner == 1): ?>
                            <!-- Owner -->
                            <div class="block-two">
                                <div class="black-box-main">
                                    <h3>Owner</h3>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-lg-6 formTable">
                                                <div class="row">
                                                    <div class="col-md-3"><label>Company</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="owner_company" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Address</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="owner_address" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><label>City</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="owner_city" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2"><label>State</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <select name="owner_state" class="col-md-12" disabled>
                                                            <option value="">Select a State</option>
                                                            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($state->id); ?>" disabled>
                                                                    <?php echo e($state->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2"><label>Zip</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="owner_zip" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Telephone</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="owner_phone" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Fax</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="owner_fax" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Web</label></div>
                                                    <div class="col-md-9 field">
                                                        <input type="text" name="owner_web" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 formTable rightTable">
                                                <div class="row"
                                                    style="display: <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'none' : 'block'); ?>;">
                                                    
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><label>First</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="owner_first_name" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2"><label>Last</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="owner_last_name" value="" readonly>
                                                    </div>
                                                    <div class="col-md-2 "><label>Title</label></div>
                                                    <div class="col-md-2 smallField">
                                                        <input type="text" name="owner_title" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Direct Phone</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="owner_direct_phone" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Cell Phone</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="owner_cell" value="" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4"><label>Email</label></div>
                                                    <div class="col-md-8 field">
                                                        <input type="text" name="owner_email" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- Industry Contact -->
                        <div>
                            <?php if(count($projectContacts) > 0): ?>
                                <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div
                                        class="block-two <?php echo e($contact['type'] == 'General Contractor' ? 'generalContractor' : ''); ?>">
                                        <div class="black-box-main">
                                            <h3><?php echo e($contact['type']); ?> </h3>
                                            <input type="hidden" name="industry_type[<?php echo e($key); ?>]"
                                                value="<?php echo e($contact['type']); ?>">
                                            <input type="hidden" name="company_id[<?php echo e($key); ?>]"
                                                value="<?php echo e($contact['company_id']); ?>">
                                            <div class="table-responsive">
                                                <div class="row">
                                                    <div class="col-lg-6 formTable">
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Company</label></div>
                                                            <div class="col-md-9 field">
                                                                <input type="text"
                                                                    name="industry_contact[<?php echo e($key); ?>]" readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->company : ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Address</label></div>
                                                            <div class="col-md-9 field">
                                                                <input type="text"
                                                                    name="industry_contact[<?php echo e($key); ?>]" readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->address : ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2"><label>City</label></div>
                                                            <div class="col-md-2 smallField">
                                                                <input type="text"
                                                                    name="industry_city[<?php echo e($key); ?>]" readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->city : ''); ?>">
                                                            </div>
                                                            <div class="col-md-2"><label>State</label></div>
                                                            <div class="col-md-2 smallField">
                                                                <select name="industry_state[<?php echo e($key); ?>]"
                                                                    class="col-md-12" disabled>
                                                                    <option value="">Select a State</option>
                                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($state->id); ?>"
                                                                            <?php echo e($contact['company'] ? ($contact['company']->state_id == $state->id ? 'selected' : 'disabled') : 'disabled'); ?>>
                                                                            <?php echo e($state->name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2"><label>Zip</label></div>
                                                            <div class="col-md-2 smallField">
                                                                <input type="text" name="industry_zip[<?php echo e($key); ?>]"
                                                                    readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->zip : ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Telephone</label></div>
                                                            <div class="col-md-9 field">
                                                                <input type="text"
                                                                    name="industry_phone[<?php echo e($key); ?>]" readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->phone : ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Fax</label></div>
                                                            <div class="col-md-9 field">
                                                                <input type="text" name="industry_fax[<?php echo e($key); ?>]"
                                                                    readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->fax : ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Web</label></div>
                                                            <div class="col-md-9 field">
                                                                <input type="text"
                                                                    name="industry_website[<?php echo e($key); ?>]" readonly
                                                                    value="<?php echo e($contact['company'] ? $contact['company']->website : ''); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 formTable rightTable">
                                                        <div class="row"
                                                            style="display: <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'none' : 'block'); ?>;">
                                                            
                                                        </div>
                                                        <?php if(count($contact['customers']) > 0): ?>
                                                            <?php $__currentLoopData = $contact['customers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerKey => $contactInformation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($customerKey == 0): ?>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-2"><label>First</label></div>
                                                                        <div class="col-md-2 smallField">
                                                                            <input type="text" readonly
                                                                                name="industryFirstName[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?>">
                                                                        </div>
                                                                        <div class="col-md-2"><label>Last</label></div>
                                                                        <div class="col-md-2 smallField">
                                                                            <input type="text" readonly
                                                                                name="industryLastName[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?>">
                                                                        </div>
                                                                        <div class="col-md-2 "><label>Title</label>
                                                                        </div>
                                                                        <div class="col-md-2 smallField">
                                                                            <input type="text" readonly
                                                                                name="industryTitle[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->title != '' ? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4"><label>Direct
                                                                                Phone</label></div>
                                                                        <div class="col-md-8 field">
                                                                            <input type="text" readonly
                                                                                name="industryDirectPhone[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->phone); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4"><label>Cell Phone</label>
                                                                        </div>
                                                                        <div class="col-md-8 field">
                                                                            <input type="text" readonly
                                                                                name="industryCellPhone[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->cell); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4"><label>Email</label></div>
                                                                        <div class="col-md-8 field">
                                                                            <input type="text" readonly
                                                                                name="industryEmail[<?php echo e($key); ?>][]"
                                                                                value="<?php echo e($contactInformation->email); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <?php if(count($contact['customers']) > 1): ?>
                                                                        <p>
                                                                            <a href="javascript:void(0)" class="show_more"
                                                                                id="customerMore<?php echo e($key); ?>"
                                                                                data-id="<?php echo e($key); ?>">Show
                                                                                More</a>
                                                                            <a href="javascript:void(0)" class="show_less"
                                                                                id="customerLess<?php echo e($key); ?>"
                                                                                data-id="<?php echo e($key); ?>">Show
                                                                                Less</a>
                                                                        </p>
                                                                    <?php endif; ?>
                                                                <?php else: ?>
                                                                    <div class="customer<?php echo e($key); ?>"
                                                                        style="display: none;">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-2"><label>First</label>
                                                                            </div>
                                                                            <div class="col-md-2 smallField">
                                                                                <input type="text"
                                                                                    name="industryFirstName[<?php echo e($key); ?>][]"
                                                                                    readonly
                                                                                    value="<?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?>">
                                                                            </div>
                                                                            <div class="col-md-2"><label>Last</label>
                                                                            </div>
                                                                            <div class="col-md-2 smallField">
                                                                                <input type="text" readonly
                                                                                    name="industryLastName[<?php echo e($key); ?>][]"
                                                                                    readonly
                                                                                    value="<?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?>">
                                                                            </div>
                                                                            <div class="col-md-2 "><label>Title</label>
                                                                            </div>
                                                                            <div class="col-md-2 smallField">
                                                                                <input type="text" readonly
                                                                                    name="industryTitle[<?php echo e($key); ?>][]"
                                                                                    value="<?php echo e($contactInformation->title != '' ? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4"><label>Direct
                                                                                    Phone</label></div>
                                                                            <div class="col-md-8 field">
                                                                                <input type="text" readonly
                                                                                    name="industryDirectPhone[<?php echo e($key); ?>][]"
                                                                                    value="<?php echo e($contactInformation->phone); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4"><label>Cell
                                                                                    Phone</label></div>
                                                                            <div class="col-md-8 field">
                                                                                <input type="text" readonly
                                                                                    name="industryCellPhone[<?php echo e($key); ?>][]"
                                                                                    value="<?php echo e($contactInformation->cell); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4"><label>Email</label>
                                                                            </div>
                                                                            <div class="col-md-8 field">
                                                                                <input type="text" readonly
                                                                                    name="industryEmail[<?php echo e($key); ?>][]"
                                                                                    value="<?php echo e($contactInformation->email); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <!-- Terms and contact -->
                        <div class="block-two">
                            <div class="table-responsive">
                                <div class="black-box-main">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Agree Terms and Conditions </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 footerTxt">
                                            Please remember to fax to NLB all documentation related to this
                                            project. This includes contracts, invoices, notices, purchase orders,
                                            etc.<strong>FAX: 847-432-8950</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 footerTxt">
                                            <p><strong>Liability Limitations:</strong> National Lien and Bond Claim Systems,
                                                a division of
                                                Network*50, Inc (NLB) does not guarantee or in any way represent or warrant
                                                the
                                                information transmitted or received by customer or third parties. Customer
                                                acknowledges
                                                and agrees that the service provided by NLB consists solely of providing
                                                access to a filing
                                                network which may in appropriate cases involve attorneys. NLB is not in any
                                                way
                                                responsible or liable for errors, omissions, inadequacy or interruptions. In
                                                the event any
                                                errors is attributable to NLB or to the equipment, customer should be
                                                entitled only to a
                                                refund of the cost for preparation of any notices. The refund shall be
                                                exclusively in lieu of
                                                any other damages or remedies against NLB.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 footerTxt">
                                            <div class="row">
                                                <?php if(isset($jobInfoSheet) && count($jobInfoSheet->jobFiles) > 0): ?>
                                                    <?php $__currentLoopData = $jobInfoSheet->jobFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="col-md-6" id="id<?php echo e($file->id); ?>">
                                                            <div class="fileRow">
                                                                <div class="col-xs-8">
                                                                    <div class="fileName">
                                                                        <a href="<?php echo e(env('ASSET_URL')); ?>/upload/<?php echo e($file->file); ?>" target="_blank">
                                                                            <i class="fa fa-file mr-2"></i> <?php echo e($file->file); ?></a>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4 fileBtn"
                                                                    style="display: <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'none' : 'block'); ?>;">
                                                                    
                                                                    <button type="button" class="btn btn-danger removeBtn"
                                                                        data-id="<?php echo e($file->id); ?>"><i
                                                                            class="fa fa-times"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="newfiles[]"
                                                            value="<?php echo e($file->file); ?>">

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="uploadedFiles"></div>
                                        </div>
                                    </div>
                                    <div class="row footerTxt">
                                        <div style="text-align:center; "><img
                                                src="<?php echo e(env('ASSET_URL')); ?>/images/nlb_black.png" alt="NLB"
                                                align="middle"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 field">
                                            <label><input type="checkbox" disabled name="Agree" id="agree"
                                                    <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? 'checked' : ''); ?>

                                                    <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?>>
                                                &nbsp;By submitting this
                                                form, you agree to the Liability Limitation terms stated herein.</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <strong>Customer Signature:</strong>
                                            </div>
                                            <div class="col-md-6 field">
                                                <input name="Signature" disabled type="text"
                                                    value="<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? $jobInfoSheet->signature : ''); ?>"
                                                    <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?> />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2">
                                                <strong>Date:</strong>
                                            </div>
                                            <div class="col-md-4 field">
                                                <input name="SignatureDate" type="text" disabled class="date"
                                                    value="<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && !is_null($jobInfoSheet->signature_date) ? date('m/d/Y', strtotime($jobInfoSheet->signature_date)) : ''); ?>"
                                                    style="width:100px"
                                                    <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->status == '2' ? 'disabled' : ''); ?> />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Show error -->
                        <div class="form-group error-field" style="display: none; color: red;">
                            <label for="error" class="col-sm-4 control-label">Error</label>

                            <div class="col-sm-8">
                                <span id="error"></span>
                            </div>
                        </div>
                        <!--Buttons-->
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('basicUser.modals.contact_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="jobDescriptionModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <form class="form-horizontal" id="jobDescriptionForm" method="post" action="#">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Job Description Modal</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="project_id" name="project_id" value="<?php echo e($project->id); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Job Name : </label>
                            <div class="col-md-8">
                                <input class="form-control error" type="text" name="job_name" id="job_name"
                                    placeholder="Enter Job Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Job Address : </label>
                            <div class="col-md-8">
                                <textarea name="job_address" class="form-control error" placeholder="Enter Job Address"
                                    id="job_address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Job City : </label>
                            <div class="col-md-8">
                                <input class="form-control error" type="text" name="job_city" id="job_city"
                                    placeholder="Enter Job City" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Job Zip : </label>
                            <div class="col-md-8">
                                <input class="form-control error" type="text" name="job_zip" id="job_zip"
                                    placeholder="Enter Job Zip Code" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div id="job-success-message">

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn blue-btn-ext mr-auto jobDescriptionSubmit" type="button">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        var token = '<?php echo e(csrf_token()); ?>';
        var addFileUrl = "<?php echo e(route('add.job.info.file')); ?>";
        var baseUrl = "<?php echo e(env('ASSET_URL')); ?>";
        var customerContactRoute = "<?php echo e(route('customer.submit.contact')); ?>";
        var removeFile = "<?php echo e(route('remove.job.info.file')); ?>"
        var project_id = "<?php echo e($project->id); ?>";
        var user_id = "<?php echo e(Auth::user()->id); ?>";
        var autoComplete = "<?php echo e(route('autocomplete.contact.company')); ?>";
        var autoCompleteCompany = "<?php echo e(route('autocomplete.company')); ?>";
        var autoCompleteContact = "<?php echo e(route('autocomplete.contact.firstname')); ?>";
        var editJobDescriptionRoute = "<?php echo e(route('edit.job.description')); ?>";
        var getContactData = "<?php echo e(route('get.contact.data')); ?>";
        var newContacts = "<?php echo e(route('create.new.contacts')); ?>";
        var autoCompleteSubUserUrl = "<?php echo e(route('get.all.subuser.details')); ?>";
        var autoCompleteCompanyOnRoleChange = "<?php echo e(route('autocomplete.contact.company.rolechange')); ?>";
        var fetchCompanies = "<?php echo e(route('fetch.companies')); ?>";
    </script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/modals/contacts/job_info.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/lienProviders/document/job_info_sheet.blade.php ENDPATH**/ ?>