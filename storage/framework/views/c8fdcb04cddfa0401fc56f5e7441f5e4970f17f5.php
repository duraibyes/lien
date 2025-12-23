<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e($project ? $project->project_name : ''); ?></title>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="center-part">
                    <h2>
                        <div style="text-align: center;">
                            <img src="<?php echo e(env('ASSET_URL')); ?>/images/nlb_black.png" alt="Logo" width="200px">
                        </div>
                    </h2>
                    <h3 style="text-align: center; padding-bottom: 20px;">JOB INFORMATION</h3>
                </div>

                <table style="width:700px;">
                    <tr>
                        <th style="text-align:center;" colspan="2">Company Information</th>
                    </tr>
                    <tr>
                        <td style="width:350px;">
                            <table>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Company:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($user->details ? $user->details->company : ''); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Address:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($user->details ? $user->details->address : ''); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">City:</td>
                                    <td style="padding-right:10px; font-size:12px">
                                        <?php echo e($user->details ? $user->details->city : ''); ?></td>
                                    <td style="font-size:12px;font-weight:bold;">State:</td>
                                    <td style="padding-right: 20px;font-size:12px">
                                        <?php echo e($user->details ? $user->details->state->name : ''); ?></td>
                                    <td style="font-size:12px;font-weight:bold;">Zip:</td>
                                    <td style="font-size:12px;"><?php echo e($user->details ? $user->details->zip : ''); ?></td>

                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Office Number:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($user->details ? $user->details->office_phone : ''); ?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:350px;">
                            <table valign="top">
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">First:</td>
                                    <td style="font-size:12px;"><?php echo e($user->details ? $user->details->first_name : ''); ?>

                                    </td>
                                    <td style="font-size:12px;font-weight:bold; padding-left:25px;">Last:</td>
                                    <td style="font-size:12px;"><?php echo e($user->details ? $user->details->last_name : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="" style="font-size:12px;font-weight:bold;">Email:</td>
                                    <td colspan="3" style="font-size:12px;"><?php echo e($user->details ? $user->email : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="" style="font-size:12px;font-weight:bold;">Phone:</td>
                                    <td colspan="3" style="font-size:12px;">
                                        <?php echo e($user->details ? $user->details->phone : ''); ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table style="width:700px; padding-top: 35px;">
                    <tr>
                        <th style="text-align:center;">JOB DESCRIPTION</th>
                    </tr>
                    <tr>
                        <td style="width:350px;">
                            <table valign="top">
                                <tr>
                                    <td colspan="" style="font-size:12px;font-weight:bold;">JOB NAME:</td>
                                    <td colspan="3" style="font-size:12px;">
                                        <?php echo e($project ? $project->project_name : ''); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="" style="font-size:12px;font-weight:bold;">JOB ADDRESS:</td>
                                    <td colspan="3" style="font-size:12px;"><?php echo e($project->address); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="" style="font-size:12px;font-weight:bold;">JOB CITY:</td>
                                    <td colspan="3" style="font-size:12px;"><?php echo e($project->city); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">STATE:</td>
                                    <td style="font-size:12px;"><?php if(!empty($project->state->name)): ?><?php echo e($project->state->name); ?> <?php endif; ?></td>
                                    <td style="font-size:12px;font-weight:bold; padding-left:25px;">ZIP:</td>
                                    <td style="font-size:12px;"><?php echo e($project->zip); ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table style="width:700px; padding-top: 35px;">
                    <tr>
                        <th colspan="2" style="text-align:center;">
                            Your Customer <span class="gc_show"
                                style="display: <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? ($jobInfoSheet->is_gc == '0' ? 'inline' : 'none') : ($project->originalCustomer->name == 'Original Contractor' ? 'inline' : 'none')); ?>;">/
                                General Contractor</span>
                        </th>
                    </tr>
                    <tr>
                        <td style="width:350px;">
                            <table valign="top">
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Company:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->company : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Address:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->address : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">City:</td>
                                    <td style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->city : ''); ?>

                                    </td>
                                    <td style="font-size:12px;font-weight:bold;">State:</td>
                                    <td style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->state->name : ''); ?>

                                    </td>
                                    <td style="font-size:12px;font-weight:bold; padding-left:25px;">Zip:</td>
                                    <td style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->zip : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Telephone:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->phone : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Fax:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->fax : ''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size:12px;font-weight:bold;">Web:</td>
                                    <td colspan="4" style="font-size:12px;">
                                        <?php echo e($project->customer_contract ? $project->customer_contract->company->website : ''); ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:350px;">
                            <table valign="top">
                                <tr>
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td style="font-size:12px;font-weight:bold;">First: </td>
                                                <td><?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->first_name : 'N/A'); ?>

                                                </td>
                                                <td style="font-size:12px;font-weight:bold;">Last: </td>
                                                <td><?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->first_name : 'N/A'); ?>

                                                </td>
                                                <td style="font-size:12px;font-weight:bold;">Title: </td>
                                                <td><?php echo e($project->customer_contract != '' ? ($project->customer_contract->contacts->title == 'Other' ? $project->customer_contract->contacts->title_other : $project->customer_contract->contacts->title) : 'N/A'); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="font-size:12px;font-weight:bold;">
                                                    Direct Phone
                                                </td>
                                                <td colspan="3">
                                                    <?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->phone : 'N/A'); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="font-size:12px;font-weight:bold;">
                                                    Cell Phone
                                                </td>
                                                <td colspan="3">
                                                    <?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->cell : 'N/A'); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="font-size:12px;font-weight:bold;">
                                                    Email
                                                </td>
                                                <td colspan="3">
                                                    <?php echo e($project->customer_contract != '' ? $project->customer_contract->contacts->email : 'N/A'); ?>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:350px;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">Contract Amount:</td>
                                    <td style="font-size:12px;">
                                        $<?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && !is_null($jobInfoSheet->contract_amount) ? $jobInfoSheet->contract_amount : '0'); ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:350px;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;font-weight:bold;">First day of work:</td>
                                    <td style="font-size:12px;">
                                        <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' ? $jobInfoSheet->first_day_of_work : ''); ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-size:12px;font-weight:bold;width:350px;">
                            If your customer is the General Contractor?
                            <?php if(isset($jobInfoSheet) && $jobInfoSheet != '' && $jobInfoSheet->is_gc == '1'): ?>
                                No
                            <?php else: ?>
                                Yes
                            <?php endif; ?>
                            
                        </td>
                    </tr>
                </table>
                <?php if(count($projectContacts) > 0): ?>
                    <?php $__currentLoopData = $projectContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <table style="width:700px; padding-top: 35px;">
                            <?php if($jobInfoSheet->is_gc == '0' && $contact['type'] == 'General Contractor'): ?>
                            <?php else: ?>
                                <tr>
                                    <th colspan="2" style="text-align:center;"><?php echo e($contact['type']); ?></th>
                                </tr>
                                <tr>
                                    <td>
                                        <table valign="top">
                                            <tr>
                                                <td colspan="2" style="font-size:12px;font-weight:bold;">Company:</td>
                                                <td colspan="4" style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->company : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="font-size:12px;font-weight:bold;">Address:</td>
                                                <td colspan="4" style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->address : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:12px;font-weight:bold;">City:</td>
                                                <td style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->city : ''); ?>

                                                </td>
                                                <td style="font-size:12px;font-weight:bold;">State:</td>
                                                <td style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->state->name : ''); ?>

                                                </td>
                                                <td style="font-size:12px;font-weight:bold; padding-left:25px;">Zip:
                                                </td>
                                                <td style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->zip : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="font-size:12px;font-weight:bold;">Telephone:</td>
                                                <td colspan="4" style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->phone : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="font-size:12px;font-weight:bold;">Fax:</td>
                                                <td colspan="4" style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->fax : ''); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="font-size:12px;font-weight:bold;">Web:</td>
                                                <td colspan="4" style="font-size:12px;">
                                                    <?php echo e($contact['company'] ? $contact['company']->website : ''); ?>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <?php if(count($contact['customers']) > 0): ?>
                                                <?php $__currentLoopData = $contact['customers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerKey => $contactInformation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table>
                                                                <tr>
                                                                    <td style="font-size:12px;font-weight:bold;">First:
                                                                    </td>
                                                                    <td><?php echo e($contactInformation->first_name != '' ? $contactInformation->first_name : 'N/A'); ?>

                                                                    </td>
                                                                    <td style="font-size:12px;font-weight:bold;">Last:
                                                                    </td>
                                                                    <td><?php echo e($contactInformation->last_name != '' ? $contactInformation->last_name : 'N/A'); ?>

                                                                    </td>
                                                                    <td style="font-size:12px;font-weight:bold;">Title:
                                                                    </td>
                                                                    <td><?php echo e($contactInformation->title != '' ? ($contactInformation->title == 'Other' ? $contactInformation->title_other : $contactInformation->title) : 'N/A'); ?>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"
                                                                        style="font-size:12px;font-weight:bold;">
                                                                        Direct Phone
                                                                    </td>
                                                                    <td colspan="3">
                                                                        <?php echo e($contactInformation->phone); ?>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"
                                                                        style="font-size:12px;font-weight:bold;">
                                                                        Cell Phone
                                                                    </td>
                                                                    <td colspan="3">
                                                                        <?php echo e($contactInformation->cell); ?>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"
                                                                        style="font-size:12px;font-weight:bold;">
                                                                        Email
                                                                    </td>
                                                                    <td colspan="3">
                                                                        <?php echo e($contactInformation->email); ?>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </table>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <table >
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>

                <table align="left" valign="top">
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <strong>Agree Terms and Conditions</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 20px;">
                            Please remember to fax to NLB all documentation related to this
                            project. This includes contracts, invoices, notices, purchase orders,
                            etc.<strong>FAX: 847-432-8950</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Liability Limitations:</strong> National Lien and Bond Claim Systems, a division of
                            Network*50, Inc (NLB) does not guarantee or in any way represent or warrant the
                            information transmitted or received by customer or third parties. Customer acknowledges
                            and agrees that the service provided by NLB consists solely of providing access to a filing
                            network which may in appropriate cases involve attorneys. NLB is not in any way
                            responsible or liable for errors, omissions, inadequacy or interruptions. In the event any
                            errors is attributable to NLB or to the equipment, customer should be entitled only to a
                            refund of the cost for preparation of any notices. The refund shall be exclusively in lieu
                            of
                            any other damages or remedies against NLB.
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 700px; text-align: center;">
                            <img src="<?php echo e(env('ASSET_URL')); ?>/images/nlb_black.png" alt="NLB" align="middle">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><input type="checkbox" checked name="Agree" id="agree">
                                &nbsp;By submitting this
                                form, you agree to the Liability Limitation terms stated herein.</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="padding-top: 20px;">
                                <tr>
                                    <td style="width:550px;">
                                        <strong>Customer Signature:</strong>
                                        <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && !is_null($jobInfoSheet->signature) ? $jobInfoSheet->signature : ''); ?>

                                    </td>
                                    <td>
                                        <strong>Date:</strong>
                                        <?php echo e(isset($jobInfoSheet) && $jobInfoSheet != '' && !is_null($jobInfoSheet->signature_date) ? date('Y-m-d', strtotime($jobInfoSheet->signature_date)) : 'N/A'); ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>

</html>
<?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/document/job_info_sheet_export.blade.php ENDPATH**/ ?>