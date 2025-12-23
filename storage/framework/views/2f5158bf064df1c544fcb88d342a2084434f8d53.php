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
    <span id="stepNumDetailed" data-step="6"></span>

    <?php echo $__env->make('basicUser.partials.multi-step-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($_GET['edit'])): ?>
        <span id="editFlag"></span>
        <form action="#" method="post"
            class="form-horizontal project-form project_details create-project-form form-no-padding create-project-form--edit">
        <?php else: ?>
            <form action="#" method="post" class="form-horizontal project-form project_details create-project-form" style="min-height: 100vh">
    <?php endif; ?>
    <?php if(Session::get('express')): ?>
        <div class="buttons-on-top row button-area">

            <a href="<?php echo e(route('get.express.job.info.sheet', [$project_id])); ?>" id="" class="project-create-continue">
                Save & Continue
            </a>
        </div>
    <?php else: ?>
        <div class="buttons-on-top row button-area">
            <a href="javascript:void(0)" id="skip-button-6-out" class="skip-job-information project-create-skip skip">
                Skip
            </a>

            <a href="javascript:void(0)" id="saveContacts" class="project-create-continue">
                Save & Continue
            </a>
        </div>
    <?php endif; ?>


    <div class="create-project-form-bgcolor">
        <div class="create-project-form-header">
            <?php if(!isset($_GET['edit'])): ?>
                <h2>Add Contacts</h2>
            <?php else: ?>
                <h2>Edit Contacts</h2>
                <?php if(isset($_GET['edit']) and $mobile): ?>
                    <span class="mobile-nav--menu" onclick="openNav()" data-target="detailed"><i class="fa fa-ellipsis-v"
                            aria-hidden="true"></i></span>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <?php if(isset($_GET['edit'])): ?>
            <div class="form-padding-wrapper match-width">
        <?php endif; ?>
        <input class="tab-view" type="hidden" data-type="express">
        <?php if(isset($project->project_name)): ?>
            <input type="hidden" name="project_name"
                value="<?php echo e(isset($project->project_name) ? $project->project_name : ''); ?>">
        <?php endif; ?>
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="form_type" value="contactOnly">
        
        <input type="hidden" name="project_id" value="<?php echo e(isset($project) && $project_id > 0 ? $project_id : '0'); ?>">
        <div class="tab-content-body except-detailed">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="border-table">
                                <label for="customer-contract">Customer Information</label>
                                <select name="customer_contract" class="form-control customer-contract"
                                    id="customer-contract">
                                    <option value="">Select a customer contact</option>
                                    <?php $__currentLoopData = $customerContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option company="<?php echo e($customerContract->company->company); ?>"
                                            value="<?php echo e($customerContract->id); ?>"
                                            <?php echo e(isset($project) && $project != '' && $project->customer_contract_id == $customerContract->id ? 'selected' : ''); ?>>
                                            <?php echo e($customerContract->contacts->first_name . ' ' . $customerContract->contacts->last_name . ' ( ' . $customerContract->company->company . ' ) '); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <a class="addNew project-overview-button project-overview-button--green"
                                    data-type="Customer" type="button">Add New Customer
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <table id="customer_contact_table" class="table activecase table-style">
                                <thead>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </thead>
                                <tbody id="customer_contact_table_body">
                                    <?php $__currentLoopData = $customerContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($project) && $project != '' && $project->customer_contract_id == $customerContract->id): ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($customerContract->contacts->first_name . ' ' . $customerContract->contacts->last_name); ?>

                                                </td>

                                                <td>
                                                    <?php echo e(isset($customerContract->company->company) && $customerContract->company->company != '' ? $customerContract->company->company : 'N/A'); ?>

                                                </td>

                                                <td>
                                                    <?php echo e(isset($customerContract->contacts->phone) && $customerContract->contacts->phone != '' ? $customerContract->contacts->phone : 'N/A'); ?>

                                                </td>

                                                <td>
                                                    <?php echo e(isset($customerContract->contacts->email) && $customerContract->contacts->email != '' ? $customerContract->contacts->email : 'N/A'); ?>

                                                </td>

                                                <td>
                                                    <i data-id="<?php echo e($customerContract->contacts->id); ?>"
                                                        data-type="Customer" title="Edit"
                                                        class="fa fa-edit editContact"></i>
                                                    <i data-id="<?php echo e($customerContract->contacts->id); ?>"
                                                        data-type="Customer" title="Delete"
                                                        class="fa fa-trash deleteContact"></i>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="border-table">
                                <label for="industry_contract">Project Contacts</label>
                                <?php ($contactsF = isset($project) && $project != '' ? ($project->industryContacts ? $project->industryContacts->pluck('contactId') : '') : ''); ?>
                                <select name="industry_contract[]" class="form-control industry-contract"
                                    id="industry-contract" multiple>
                                    <?php $__currentLoopData = $industryContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industryContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option company="<?php echo e($industryContract->company->company); ?>"
                                            contact_type="<?php echo e($industryContract->contacts->contact_type); ?>"
                                            value="<?php echo e($industryContract->id); ?>"
                                            <?php echo e(isset($contactsF) && $contactsF != '' && count($contactsF) > 0 ? (in_array($industryContract->id, $contactsF->toArray()) ? 'selected' : '') : ''); ?>>
                                            <?php echo e($industryContract->contacts->first_name . ' ' . $industryContract->contacts->last_name . ' : ' . $industryContract->contacts->contact_type . ' ( ' . $industryContract->company->company . ' ) '); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <a class="addNew project-overview-button project-overview-button--green"
                                    data-type="Industry" type="button">
                                    Add New Contact
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <table id="industry_contact_table" class="table activecase table-style">
                                <thead>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </thead>

                                <tbody id="industry_contact_table_body">
                                    <?php $__currentLoopData = $industryContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industryContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(in_array($industryContract->id, $contactsF->toArray())): ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($industryContract->contacts->first_name . ' ' . $industryContract->contacts->last_name); ?>

                                                </td>

                                                <td>
                                                    <?php echo e($industryContract->contacts->contact_type); ?>

                                                </td>

                                                <td>
                                                    <?php echo e($industryContract->company->company); ?>

                                                </td>

                                                <td>
                                                    <?php echo e($industryContract->contacts->phone); ?>

                                                </td>

                                                <td>
                                                    <?php echo e($industryContract->contacts->email); ?>

                                                </td>

                                                <td>
                                                    <i data-id="<?php echo e($industryContract->contacts->id); ?>"
                                                        data-type="Industry" title="Edit"
                                                        class="fa fa-edit editContact"></i>
                                                    <i data-id="<?php echo e($industryContract->contacts->id); ?>"
                                                        data-type="Industry" title="Delete"
                                                        class="fa fa-trash deleteContact"></i>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="flex items-center save-skip">
        <?php if(!isset($_GET['edit'])): ?>
        <?php endif; ?>
        <?php if(!isset($_GET['view']) || $_GET['view'] === 'express'): ?>
            <?php if(!isset($_GET['edit'])): ?>
                <a href="javascript:void(0)" id="activate-step-2" class="project-create-continue">
                    View Job Information Sheet
                </a>
            <?php else: ?>

                <?php if(Session::get('express')): ?>
                    <div class="buttons-on-top row button-area">

                        <a href="<?php echo e(route('get.express.job.info.sheet', [$project_id])); ?>" id=""
                            class="project-create-continue">
                            Save & Continue
                        </a>
                    </div>
                <?php else: ?>
                    <a href="javascript:void(0)" id="skip-button-6-out"
                        class="skip">
                        Skip
                    </a>

                    <a href="javascript:void(0)" id="saveContacts" class="orange-btn">
                        Save & Continue
                    </a>
                <?php endif; ?>


            <?php endif; ?>
        <?php else: ?>
            <?php if(isset($_GET['edit'])): ?>
                <a href="javascript:void(0)" id="activate-step-2" class="project-create-continue">
                    Save
                </a>
            <?php else: ?>
                <a href="javascript:void(0)" id="activate-step-2" class="project-create-continue">
                    View Job Information Sheet
                </a>
            <?php endif; ?>
        <?php endif; ?>
        <div class="tab-right">
            <?php if(isset($_GET['edit'])): ?>
                <ul>
                    <?php if($project_id): ?>
                        <li>

                        </li>
                    <?php endif; ?>
                </ul>
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
    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('#progressbar').offset().top
            }, 'slow');

            $(document).on('click', '#save_quit', function(e) {
                e.preventDefault()
                window.location = "<?php echo e(route('member.dashboard')); ?>"
            })
            $(document).on('click', '.mobile-nav-tab', function() {
                let tab = $(this).attr('data-tab')
                $('.mobile-nav--menu').attr('data-target', tab)
            })
            $(document).on('click', '.sidenav', function() {
                $(".sidenav").css('width', '0px');
            })

            // skip buttons
            // 13-aug-2019

            $('.skip').on('click', function(event) {
                console.log('skip-button-6-out');
                //event.stopPropagation();
                event.preventDefault();
                swal({
                    title: 'Are you sure you want to skip this?',
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
                    window.location.href = '/member/project/project-documents/' + project_id +
                        '?edit=true';
                })
            });
            // 10-10-2021

            $(document).on('click', '#saveContacts', function(event) {
                event.preventDefault();

                window.location.href = "<?php echo e(route('get.project.documents', $project->id) . '?edit=true'); ?>";
            });
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
        var submitContactForm = "<?php echo e(route('customer.submit.contact')); ?>";
        var userId = '<?php echo e(Auth::user()->id); ?>';
        var token = '<?php echo e(csrf_token()); ?>';
        var projectSubmit = "<?php echo e(route('project.contact.submit')); ?>";
        var customerContacts = <?php echo json_encode($customerContracts, 15, 512) ?>;
        var industryContacts = <?php echo json_encode($industryContracts, 15, 512) ?>;

        <?php if(isset($_GET['edit'])): ?>
            let edit = true
        <?php else: ?>
            let edit = false
        <?php endif; ?>

        var remedyURL = "<?php echo e(route('create.remedydates', [0])); ?>"
        var view = '<?php echo e(isset($_GET['view']) ? $_GET['view'] : 'express'); ?>';
        var lienUrl = "<?php echo e(route('project.lien.view')); ?>";
        var contractUrl = "<?php echo e(route('get.job.info.sheet', [$project_id])); ?>";
        var memberProject = '<?php echo e(route('member.project')); ?>';
        var checkRole = "<?php echo e(route('project.role.check')); ?>";
        var checkQuestion = "<?php echo e(route('project.check.question')); ?>";
        var project_id = '<?php echo e(isset($project_id) ? $project_id : '0'); ?>';
        var condition = '0';
        var autoCompleteCompanyOnRoleChange = "<?php echo e(route('autocomplete.contact.company.rolechange')); ?>";
        var fetchCompanies = "<?php echo e(route('fetch.companies')); ?>";
        var deleteContacts = "<?php echo e(route('customer.delete.contact')); ?>";
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
        var getContactDetailsURL = "<?php echo e(route('autocomplete.contact.details')); ?>";
        var editJobDescriptionRoute = "<?php echo e(route('edit.job.description')); ?>";
        var getContactData = "<?php echo e(route('get.contact.data')); ?>";
        var newContacts = "<?php echo e(route('create.new.contacts')); ?>";
    </script>

    <script src="<?php echo e(env('ASSET_URL')); ?>/js/project_details.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/modals/contacts/contact.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/createProject.js"></script>
    <script>
        $(document).ready(function() {
            $('#addCustomerModel input').mousedown(function() {
                $(this).attr('autocomplete', 'chrome-off')
            });
            $('#addCustomerModel textarea').mousedown(function() {
                $(this).attr('autocomplete', 'chrome-off')
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.projects.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/projects/project_contacts.blade.php ENDPATH**/ ?>