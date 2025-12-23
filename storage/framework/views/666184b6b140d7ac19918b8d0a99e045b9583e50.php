<?php $__env->startSection('body'); ?>
    <?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $mobile =
        preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) ||
        preg_match(
            '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
            substr($useragent, 0, 4),
        );
    ?>
    <?php if(isset($_GET['edit'])): ?>
        <span id="stepNum" data-step="1"></span>

        <?php echo $__env->make('basicUser.partials.multi-step-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php else: ?>
        <div id="progressbar"> </div>
    <?php endif; ?>
    <?php if(isset($_GET['edit'])): ?>
        <span id="editFlag"></span>
        <form action="#" id="projectDetailsForm" method="post"
            class="form-horizontal project-form project_details create-project-form form-no-padding create-project-form--edit create-project-form--large"
            style="width:100%; margin:auto;">
        <?php else: ?>
            <form action="#" id="projectDetailsForm" method="post"
                class="form-horizontal project-form project_details create-project-form form-no-padding create-project-form--edit create-project-form--large"
                style="width:100%; margin:auto;">
    <?php endif; ?>

    <?php if(isset($_GET['edit'])): ?>
        <div class="row buttons-on-top button-area">
            <a href="javascript:void(0)" id="skipJobDetails" class="project-create-skip">
                Skip
            </a>
            <a href="javascript:void(0)" id="saveDetails" class="project-create-continue skip-deadlines">
                Save & Continue
            </a>
        </div>
    <?php endif; ?>

    <?php if(!isset($_GET['edit'])): ?>

    <div class="gray-form">
        <div class="sub-heading">
            <h3>Add Your Project Details</h3>

    <?php else: ?>
    <div class="create-project-form-bgcolor">
        <div class="create-project-form-header">
           <h2>Edit Project Details</h2>
    <?php endif; ?>
 
            <?php if(isset($_GET['edit']) and $mobile): ?>
                <span class="mobile-nav--menu" onclick="openNav()" data-target="detailed"><i class="fa fa-ellipsis-v"
                        aria-hidden="true"></i></span>
            <?php endif; ?>
        </div>
        <?php if(isset($_GET['edit'])): ?>
            <div class="form-padding-wrapper">
                <div class="status-wrapper">
                    <?php if($project->status == 1): ?>
                        <h4>Project Status: Active</h4>
                    <?php else: ?>
                        <h4>Project Status: Inactive</h4>
                    <?php endif; ?>
                    <button class="toggle-status" data-switch="<?php echo e($project->status == 1 ? 0 : 1); ?>">
                        <?php echo e($project->status == 1 ? 'Make Inactive' : 'Make Active'); ?></button>
                </div>
        <?php endif; ?>
        <input class="tab-view" type="hidden" data-type="express">

        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="form_type" value="<?php echo e(isset($project) && $project != '' ? 'edit' : 'add'); ?>">
        
        <input type="hidden" name="project_id" value="<?php echo e(isset($project) && $project_id > 0 ? $project_id : '0'); ?>">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <?php if(isset($project->project_name)): ?>
                                <div class="row">
                                    <div class="ui-widget col-md-12">
                                        <label for="project_name">Project Name: </label>
                                        <input type="text" class="form-control" name="project_name"
                                            value="<?php echo e($project->project_name); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>



                            <div class="row">
                                <?php if(!isset($project->project_name)): ?>
                                    
                                    <div class="ui-widget col-md-12" style="display:none">
                                        <div>
                                            <label for="project_search">Search Project: </label>

                                            <div class="input-group" style="display:flex">
                                                <input id="project_search" type="text" name="search" style="flex: 1"
                                                    class="form-control" placeholder="Search">
                                                <span><button id="project_search_button" class="btn btn-primary"><i
                                                            class="fa fa-search"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="">
                                            <label for="p_name">Project Name</label>
                                            <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                                                <input type="text" class="form-control input-field" name="project_name"
                                                    id="p_name" value="<?php echo e($preferences->project_name); ?>" data-clear="false"
                                                    required placeholder="Project Name">
                                            <?php else: ?>
                                                <input type="text" class="form-control input-field" name="project_name"
                                                    id="p_name"
                                                    value="<?php echo e(!Session::has('projectName') ? (isset($project) && $project != '' ? $project->project_name : '') : Session::get('projectName')); ?>"
                                                    required placeholder="Project Name">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="border-table">
                                        <label for="state">Project Location By State</label>
                                        <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                                            <select name="state" class="form-control checkTier input-field" id="state"
                                                required>
                                                <option value="">Select project location by state</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($preferences->state_id === $state->id): ?>
                                                        <option value="<?php echo e($state->id); ?>" data="<?php echo e($state->name); ?>"
                                                            selected><?php echo e($state->name); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($state->id); ?>" data="<?php echo e($state->name); ?>"
                                                            <?php echo e(Session::has('state') && Session::get('state') == $state->id ? 'selected' : (isset($project) && $project != '' && $project->state_id == $state->id ? 'selected' : '')); ?>>
                                                            <?php echo e($state->name); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php else: ?>
                                            <select name="state" class="form-control checkTier input-field" id="state"
                                                required>
                                                <option value="">Select project location by state</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($state->id); ?>" data="<?php echo e($state->name); ?>"
                                                        <?php echo e(Session::has('state') && Session::get('state') == $state->id ? 'selected' : (isset($project) && $project != '' && $project->state_id == $state->id ? 'selected' : '')); ?>>
                                                        <?php echo e($state->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="">
                                        <label for="project_type">Project Type</label>
                                        <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                                            <select name="type" class="form-control checkTier input-field" id="project_type"
                                                required>
                                                <option value="">Select your project type</option>
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($preferences->project_type_id === $type->id): ?>
                                                        <option value="<?php echo e($type->id); ?>" selected>
                                                            <?php echo e($type->project_type); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($type->id); ?>"
                                                            <?php echo e(Session::has('projectType') && Session::get('projectType') == $type->id ? 'selected' : (isset($project) && $project != '' && $project->project_type_id == $type->id ? 'selected' : '')); ?>>
                                                            <?php echo e($type->project_type); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php else: ?>
                                            <select name="type" class="form-control checkTier input-field" id="project_type"
                                                required>
                                                <option value="">Select your project type</option>
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($type->id); ?>"
                                                        <?php echo e(Session::has('projectType') && Session::get('projectType') == $type->id ? 'selected' : (isset($project) && $project != '' && $project->project_type_id == $type->id ? 'selected' : '')); ?>>
                                                        <?php echo e($type->project_type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="border-table">
                                        <label for="role">Your Role</label>
                                        <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                                            <select name="role" class="form-control checkTier input-field" id="role"
                                                required>
                                                <option value="">Select your role</option>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($preferences->role_id === $role->id): ?>
                                                        <option value="<?php echo e($role->id); ?>" selected>
                                                            <?php echo e($role->project_roles); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($role->id); ?>"
                                                            <?php echo e(Session::has('role') && Session::get('role') == $role->id ? 'selected' : (isset($project) && $project != '' && $project->role_id == $role->id ? 'selected' : '')); ?>>
                                                            <?php echo e($role->project_roles); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php else: ?>
                                            <select name="role" class="form-control checkTier input-field" id="role"
                                                required>
                                                <option value="">Select your role</option>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($role->id); ?>"
                                                        <?php echo e(Session::has('role') && Session::get('role') == $role->id ? 'selected' : (isset($project) && $project != '' && $project->role_id == $role->id ? 'selected' : '')); ?>>
                                                        <?php echo e($role->project_roles); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="">
                                        <label for="customer">Your Customer</label>
                                        <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                                            <select name="customer" class="form-control input-field" id="customer">
                                                <?php if(Session::has('customer') && Session::get('customer') != ''): ?>
                                                    <option value="<?php echo e(Session::get('customer')); ?>">
                                                        <?php echo e(Session::get('customer_name')); ?></option>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $customerCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($preferences->customer_id === $cust->id): ?>
                                                            <option value="<?php echo e($cust->id); ?>" selected>
                                                                <?php echo e($cust->name); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($cust->id); ?>"><?php echo e($cust->name); ?>

                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        <?php else: ?>
                                            <select name="customer" class="form-control input-field" id="customer">
                                                <?php if(Session::has('customer') && Session::get('customer') != ''): ?>
                                                    <option value="<?php echo e(Session::get('customer')); ?>">
                                                        <?php echo e(Session::get('customer_name')); ?></option>
                                                <?php else: ?>
                                                    <?php if(isset($project) && $project != ''): ?>
                                                        <option value="<?php echo e($project->customer_id); ?>">
                                                            <?php echo e($project->originalCustomer->name); ?></option>
                                                    <?php else: ?>
                                                        <option value="" disabled selected>Select your customer</option>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row question" style="display: none;">
                                <div class="col-md-12 col-sm-12">
                                    <div class="border-table">
                                        <div id="question"></div>
                                    </div>
                                </div>
                            </div>
                            <?php if(!isset($_GET['edit'])): ?>
                                
                                
                                
                                
                                

                                
                                
                                
                            <?php endif; ?>
                        </div>
                        <?php
                            $useragent = $_SERVER['HTTP_USER_AGENT'];
                            $mobile =
                                preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) ||
                                preg_match(
                                    '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
                                    substr($useragent, 0, 4),
                                );
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- form-padding-wrapper -->
    </div>

    <div class="flex items-center save-skip">
        <?php if(!isset($_GET['view']) || $_GET['view'] === 'express'): ?>
            <?php if(!isset($_GET['edit'])): ?>
                <a href="javascript:void(0)" id="addProject" class="orange-btn">
                    Add Project
                </a>
            <?php else: ?>
                <a href="javascript:void(0)" id="skipJobDetails" class="skip">
                    Skip
                </a>
                <a href="javascript:void(0)" id="saveDetails" class="orange-btn skip-deadlines">
                    Save & Continue
                </a>
            <?php endif; ?>
        <?php else: ?>
            <?php if(isset($_GET['edit'])): ?>
                <a href="javascript:void(0)" id="activate-step-2" class="orange-btn">
                    Save
                </a>
            <?php else: ?>
                <a href="javascript:void(0)" id="activate-step-2" class="orange-btn">
                    Save
                </a>
            <?php endif; ?>
        <?php endif; ?>
        <div class="tab-right">
            <?php if(!isset($_GET['edit'])): ?>
                <ul>
                    <?php if($project_id): ?>
                        <li>
                            <?php if(!isset($_GET['view'])): ?>
                                <a
                                    href="<?php echo e($project_id ? route('project.lien.view') . '?project_id=' . $project_id : 'javascript:void(0)'); ?>">Skip</a>
                            <?php elseif(isset($_GET['view']) && $_GET['view'] != 'detailed'): ?>
                                <a
                                    href="<?php echo e($project_id ? route('project.lien.view') . '?project_id=' . $project_id . '&view=' . $_GET['view'] : 'javascript:void(0)'); ?>">Skip</a>
                            <?php else: ?>
                                <a
                                    href="<?php echo e($project_id ? route('project.contract.view') . '?project_id=' . $project_id . '&view=' . $_GET['view'] : 'javascript:void(0)'); ?>">Skip</a>
                            <?php endif; ?>
                            
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
            <?php if(isset($preferences) && !empty($preferences) && !isset($_GET['edit'])): ?>
                <a href="javascript:void(0)" id="clear_form" class="project-save-quit">
                    Clear Form
                </a>
            <?php endif; ?>
        </div>
    </div>
    </form>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('basicUser.modals.contact_modal',['companies' => $companies,'first_names' => $first_names], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <?php
    if (isset($_GET['edit'])) {
        $jobDatesRoute = route('create.remedydates', $project->id) . '?edit=true';
    } else {
        $jobDatesRoute = '';
    }
    ?>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.mobile-nav-tab', function() {
                let tab = $(this).attr('data-tab')
                $('.mobile-nav--menu').attr('data-target', tab)
            })
            $(document).on('click', '.sidenav', function() {
                $(".sidenav").css('width', '0px');
            })

            $(document).on('click', '#saveDetails', function() {
                let data = $('#projectDetailsForm').serialize();
                console.log(data);
                var saveProjectDetail = "<?php echo e(route('project.details.submit')); ?>";
                let jobDatesURL = "<?php echo $jobDatesRoute; ?>"

                $.ajax({
                    type: 'POST',
                    url: saveProjectDetail,
                    data: data,
                    success: function(data) {
                        window.location.href = jobDatesURL;
                    }
                })
            })

            $(document).on('click', '#addProject', function(event) {
                event.preventDefault();
                let data = $('#projectDetailsForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('project.details.submit')); ?>",
                    data: data,
                    success: function(data) {
                        window.location.href = "/member/create/project/remedydates/" + data.project_id + "?edit=true";
                    }
                });
            });

            $(document).on('click', '#skipJobDetails', function() {
                let jobDatesURL = "<?php echo $jobDatesRoute; ?>"
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
                    window.location.href = jobDatesURL;
                })
            })
        })

        function openNav(e) {
            let menu = $('.mobile-nav--menu').attr('data-target')
            if (menu == 'express') {
                $('#mobileNav').css('width', '100%');
            } else {
                $('#mobileNavDetailed').css('width', '100%')
            }
        }

        function closeNav() {
            $(".sidenav").css('width', '0px');
        }
    </script>

    <script>
        var saveSession = "<?php echo e(route('project.save.session')); ?>";
        var searchProjectConstructionMonitor = "<?php echo e(route('member.search.construction.monitor')); ?>";
        var createProjectConstructionMonitor = "<?php echo e(route('member.create.construction.monitor')); ?>";
        var submitContactForm = "<?php echo e(route('customer.submit.contact')); ?>";
        var userId = '<?php echo e(Auth::user()->id); ?>';
        var token = '<?php echo e(csrf_token()); ?>';
        var projectSubmit = "<?php echo e(route('project.details.submit')); ?>";
        <?php if(isset($_GET['edit'])): ?>
            let edit = true
        <?php else: ?>
            let edit = false
        <?php endif; ?>
        var remedyURL = "<?php echo e(route('create.remedydates', [0])); ?>"
        var view = '<?php echo e(isset($_GET['view']) ? $_GET['view'] : 'express'); ?>';
        var lienUrl = "<?php echo e(route('project.lien.view')); ?>";
        var contractUrl = '<?php echo e(route('project.contract.view')); ?>';
        var memberProject = '<?php echo e(route('member.project')); ?>';
        var checkRole = "<?php echo e(route('project.role.check')); ?>";
        var checkQuestion = "<?php echo e(route('project.check.question')); ?>";
        var project_id = '<?php echo e(isset($project_id) ? $project_id : '0'); ?>';
        var condition = '0';
        var autoCompleteCompanyOnRoleChange = "<?php echo e(route('autocomplete.contact.company.rolechange')); ?>";
        var fetchCompanies = "<?php echo e(route('fetch.companies')); ?>";
        <?php if((Session::has('state') && Session::get('state') > 0 && Session::has('role') && Session::get('role') > 0 && Session::has('customer') && Session::get('customer') > 0 && Session::has('projectType') && Session::get('projectType') > 0) || (isset($project) && $project_id > 0)): ?>
            condition = '1';
        <?php endif; ?>
        var answer1 = "<?php echo isset($project->answer1) ? $project->answer : ''; ?>";
        var answer2 = "<?php echo isset($project->answer2) ? $project->answer2 : ''; ?>";
        var checkName = "<?php echo e(route('project.name.check')); ?>";
        var url = '<?php echo e(env('ASSET_URL')); ?>';
        var page = 'project_details';
        var autoComplete = "<?php echo e(route('autocomplete.contact.company')); ?>";
        var autoCompleteCompany = "<?php echo e(route('autocomplete.company')); ?>";
        var addFileUrl = "<?php echo e(route('add.job.info.file')); ?>";
        var baseUrl = "<?php echo e(env('ASSET_URL')); ?>";
        var customerContactRoute = "<?php echo e(route('customer.submit.contact')); ?>";
        var user_id = "<?php echo e(Auth::user()->id); ?>";
        var autoCompleteContact = "<?php echo e(route('autocomplete.contact.firstname')); ?>";
        var editJobDescriptionRoute = "<?php echo e(route('edit.job.description')); ?>";
        var getContactData = "<?php echo e(route('get.contact.data')); ?>";
        var newContacts = "<?php echo e(route('create.new.contacts')); ?>";
        let projectData = ''
        if ($('#editFlag').length > 0) {
            projectData = "<?php echo e(isset($project->status) ? $project->status : 0); ?>"
        }
        let statusChange = "<?php echo e(route('project.status.update')); ?>"
        $(document).ready(function() {
            $('.toggle-status').on('click', function(e) {
                e.preventDefault()
                let toggleStatus = $('.toggle-status').attr('data-switch')
                $.ajax({
                    type: "POST",
                    url: statusChange,
                    data: {
                        id: project_id,
                        status: projectData,
                        _token: token
                    },
                    success: function(data) {
                        window.location.reload()
                    }
                });
            })

            var availableTags = [];
            var projects = [];

            $(document).on('click', '#project_search_button', function(e) {
                e.preventDefault();
                var url = "https://api.constructionmonitor.com/v2/permits/?term=";
                var term = $('#project_search').val();
                console.log(url + term);
                $('#project_search_button').prop('disabled', true);
                $.ajax({
                    url: searchProjectConstructionMonitor,
                    method: "GET",
                    mode: "cors",
                    data: {
                        search_term: term,
                        _token: token
                    },
                    success: function(data) {
                        $('#project_search_button').prop('disabled', false);
                        projects = data.data;
                        availableTags = [];
                        $.each(projects, function(key, value) {
                            availableTags.push({
                                label: value._source.siteaddress,
                                idx: key
                            });
                            console.log(key);
                        });

                        console.log(availableTags);
                        $("#project_search").autocomplete({
                            source: availableTags
                        });
                        $('#project_search').focus();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#project_search_button').prop('disabled', false);
                    }
                });
            })

            $("#project_search").autocomplete({
                minLength: 0,
                select: function(event, ui) {
                    $("#project_search").autocomplete("close");

                    $.ajax({
                        type: "POST",
                        url: createProjectConstructionMonitor,
                        data: {
                            data: projects[ui.item.idx],
                            status: projectData,
                            _token: token
                        },
                        success: function(data) {
                            // window.location.reload()
                            if (data.status) {
                                // alert(data.data)
                                window.location = "/member/create/project?project_id=" +
                                    data.data + "&edit=true";
                            }
                        }
                    });
                }
                /* other options */
            }).on("focus", function() {
                $(this).autocomplete("search", "");
            });
        })
    </script>

    <script src="<?php echo e(env('ASSET_URL')); ?>/js/project_details.js?r=<?= time() ?>"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/modals/contacts/contact.js"></script>
    <?php if(isset($preferences) && !empty($preferences)): ?>
        <script>
            let ans1 = "<?php echo e($preferences->answer1); ?>"
            let ans2 = "<?php echo e($preferences->answer2); ?>"

            $(document).on('ready', function() {
                $('html, body').animate({
                    scrollTop: $('#progressbar').offset().top
                }, 'slow');
                $(document).on('click', '#clear_form', function() {
                    $('#p_name').val('')
                    $('#state').val('')
                    $('#project_type').val('')
                    $('#role').val('')
                    $('#customer').val('')
                    $('#question').html('');

                })
                $('#question').html('');
                var role = $('#role').val();
                if (role == '') {
                    return false;
                }
                var customer = $('#customer').val();
                if (customer == '') {
                    return false;
                }
                var state = $('#state').val();
                if (state == '') {
                    return false;
                }
                var project_type = $('#project_type').val();
                if (project_type == '') {
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: checkQuestion,
                    data: {
                        role: role,
                        customer: customer,
                        state: state,
                        project_type: project_type,
                        _token: token
                    },
                    success: function(data) {
                        if (data.status) {
                            var html = '';
                            $.each(data.data, function(indexMain, question) {
                                html += '<div class="row">' +
                                    '<label class="push-30">' + question.question + '</label>' +
                                    '<div class="col-md-12">';
                                $.each(question.answer, function(index, value) {
                                    if (index == 0 || value === ans1 || value === ans2) {
                                        html +=
                                            '<label class="radio-label"><input type="radio" class="error" name="answer[' +
                                            question.id + ']" value="' + value +
                                            '" checked>' + value + '</label>';
                                    } else {
                                        html +=
                                            '<label class="radio-label"><input type="radio" class="error" name="answer[' +
                                            question.id + ']" value="' + value + '">' +
                                            value + '</label>';
                                    }
                                });
                                html += '</div></div>'
                            });
                            $('#question').html(html);
                            $('.question').show();
                        } else {
                            $('#question').html('');
                            $('.question').hide();
                        }
                    }
                });
            })
            <?php endif; ?>
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.projects.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/projects/express_project_details.blade.php ENDPATH**/ ?>