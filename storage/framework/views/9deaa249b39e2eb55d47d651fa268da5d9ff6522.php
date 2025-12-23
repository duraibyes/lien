<?php $__env->startSection('body'); ?>
    <?php
    $contact_view = 'false';
    if (isset($_GET['contact'])) {
        $contact_view = 'true';
    }

    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $mobile =
        preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) ||
        preg_match(
            '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
            substr($useragent, 0, 4),
        );
    ?>
    <?php if(isset($_GET['view']) && $_GET['view'] === 'detailed'): ?>
        <span id="stepNumDetailed" data-step="4"></span>
    <?php else: ?>
        <span id="stepNum" data-step="3"></span>
    <?php endif; ?>

    <?php if(isset($_GET['edit'])): ?>

    <?php else: ?>

    <?php endif; ?>

    <?php echo $__env->make('basicUser.partials.multi-step-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="buttons-on-top row button-area">
        <?php if(!isset($_GET['edit'])): ?>

        <?php else: ?>
            <a href="javascript:void(0)" id="skip-button-4-out" class="skip-dashboard-details project-create-skip skip skip-button-4-out">
                Return to Dashboard
            </a>
            <a href="javascript:void(0)" id="addContactsStep-out" class="btn-view-jobsheet project-create-continue">
                Save & View Job Information Sheet
            </a>
        <?php endif; ?>
    </div>

        <div class="row-- summary">
            <div class="col-md-8">
                <div class="create-project-form-bgcolor">
                    <div class="create-project-form-header job_description">
                        <h2>Job Description</h2>
                    </div>
                    <div class="form-padding-wrapper text-left">
                        <div class="row row-first">
                            <div class="col col-12">
                                <h3><?php echo e($project->project_name); ?></h3>
                                <h4><?php echo e($project->address); ?><br />
                                    <?php echo e($project->city); ?>, <?php echo e($project->country); ?> <?php echo e($project->zip); ?>

                                    <?php echo e($states[$project->state_id - 1]->name); ?>

                                </h4>
                                <a href="<?php echo e(route('member.create.edit.jobdescription', [$project_id]) . '?edit=true'); ?>"
                                    class="btn btn-primary">Edit Job Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="create-project-form-bgcolor">
                    <div class="create-project-form-header job_dates">
                        <h2>Job Dates</h2>
                    </div>
                    <div class="form-padding-wrapper text-left">
                        <div class="row row-first">
                            <div class="col col-12">

                            <?php if(!empty($projectDates)): ?>
                                <?php $__currentLoopData = $projectDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-12 deadlines deadline-remedy">
                                        <div class="col-md-6 deadline-remedy">
                                            <b><?php echo e($date['name']); ?></b>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if(!empty(array_values($date['dates'])[0])): ?>
                                            <p><?php echo e(array_values($date['dates'])[0]['value']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="create-project-form-bgcolor">
                    <div class="create-project-form-header">
                        <h2>Initial Job Deadlines<span style="font-size:12px;"> (Subject to review of legal counsel)</span></h2>
                    </div>
                    <div class="form-padding-wrapper text-left">
                        <div class="row row-first">
                            <?php if(count($deadlines) > 0): ?>
                                <?php $__currentLoopData = $deadlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $deadline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(strlen($daysRemain[$key]['preliminaryDates']) > 5): ?>
                                        <?php
                                            $today = date('Y-m-d');
                                            $today = new DateTime($today);
                                            $prelimDead = $daysRemain[$key]['preliminaryDates'];
                                            $formatPrelim = new \DateTime($prelimDead);
                                            $daysUntilDeadline = date_diff($formatPrelim, $today);
                                            $daysUntilDeadline = $daysUntilDeadline->format('%a');
                                            $late = date_diff($formatPrelim, $today);
                                            $late = $late->format('%R');

                                        ?>
                                    <?php else: ?>
                                        <?php
                                            $daysUntilDeadline = 'N/A';
                                            $late = 0;
                                        ?>
                                    <?php endif; ?>
                                    <div class="col-md-12 deadlines deadline-remedy">
                                        <div class="col-md-2 deadline-remedy"><b><?php echo e($deadline->getRemedy->remedy); ?></b>
                                        </div>
                                        <div class="col-md-10">
                                            <p class="prelim-date"><?php echo e($deadline->short_description); ?></p>
                                        </div>
                                         <div class="col-md-4">
                                            <?php if(strlen($daysRemain[$key]['preliminaryDates']) > 5): ?>
                                                <p class="prelim-date">Complete by: <?php echo e($daysRemain[$key]['preliminaryDates']); ?></p>
                                            <?php else: ?>
                                                <p class="prelim-date">Complete by: N/A</p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-4">
                                            <?php if(strlen($daysRemain[$key]['preliminaryDates']) > 5): ?>
                                                <?php if($late === '+'): ?>
                                                    <p class="prelim-date prelim-date--late">Days Late: <?php echo e($daysUntilDeadline); ?></p>
                                                <?php else: ?>
                                                    <p class="prelim-date">Days Remaining: <?php echo e($daysUntilDeadline); ?></p>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <p class="prelim-date">Days Remaining: N/A</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div id="contact_info" class="create-project-form-bgcolor">
                    <div class="create-project-form-header">
                        <h2>Project Contact Information</h2>
                    </div>

                    <div class="form-padding-wrapper text-left">
                        <div class="row row-first">

                            <div class="col-md-12 col-sm-12">
                                <div class="border-table">
                                    <label for="customer-contract">Customer Information</label>
                                    <?php if(isset($customerContracts)): ?>
                                        <div class="col-md-12 col-sm-12">
                                            <table class="table activecase table-style">
                                                <thead>
                                                    <th>Name</th>
                                                    <th>Company</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $customerContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php else: ?>
                                        <?php echo e('No Customer Found'); ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="border-table">
                                    <label style="font-size: 16px;" for="industry_contract">Project Contacts</label>
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table activecase table-style">
                                            <thead>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Company</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </thead>

                                            <tbody>
                                                <?php $__currentLoopData = $industryContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industryContract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-12">
                                <a href="<?php echo e(route('member.create.projectcontacts', [$project_id]) . '?edit=true'); ?>"
                                    class="btn btn-primary">Assign Contact to Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="create-project-form-bgcolor">
                    <div class="create-project-form-header">
                        <h2>Contract Overview</h2>
                    </div>

                    <div class="form-padding-wrapper text-left">
                        <table>
                            <tr>
                                <td><b>Total Balance: </b></td>
                                <td>$<?php echo e(number_format($contract_amount, 2, '.', ',')); ?></td>
                            </tr>
                            <tr>
                                <td><b>Unpaid Balance: </b></td>
                                <td>$<?php echo e(number_format($unpaid, 2, '.', ',')); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="create-project-form-bgcolor">
                    <div class="create-project-form-header">
                        <h2>Legal Overview</h2>
                    </div>

                    <div class="form-padding-wrapper text-left">
                        <?php $__currentLoopData = $liens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h4><?php echo e($lien->remedy); ?></h4>
                            <p><?php echo e($lien->description); ?></p>
                            <p>Tiers:<br /><?php echo e($lien->tier_limit); ?></p>
                            <br />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a href="#">PDF link goes here</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-12">
        <div class="flex items-center save-skip">
            <div class="skip">
            <?php if(!isset($_GET['edit'])): ?>

            <?php else: ?>
                <a href="javascript:void(0)" id="skip-button-4-out" class="skip skip-button-4-out">
                    Return to Dashboard
                </a>
                <a href="javascript:void(0)" id="activate-step-9" class="orange-btn">
                    Save & View Job Information Sheet
                </a>
            <?php endif; ?>
            </div>
        </div>
    </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('basicUser.modals.contact_modal',['companies' => $companies,'first_names' => $first_names], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        var project_id = <?php echo e($project_id); ?>

        $(document).ready(function() {
            let contact_view = "<?php echo e($contact_view); ?>"
            if (contact_view == 'true') {
                $('html, body').animate({
                    scrollTop: $('#contact_info').offset().top
                }, 'slow');
            } else {
                $('html, body').animate({
                    scrollTop: $('.job_description').offset().top
                }, 'slow');
            }

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
            $('.skip-button-4-out').on('click', function(event) {
                //event.stopPropagation();
                event.preventDefault();
                // 16 aug
                // window.location.href = '/member/create/edit/jobdescription/' + project_id + '?edit=true';
                window.location.href = '/member';
            });

            $('.btn-view-jobsheet').on('click', function(event) {
                //event.stopPropagation();
                event.preventDefault();
                // 16 aug
                window.location.href = '/member/project/job-info-sheet/' + project_id + "?edit=true";

            });


            $('#activate-step-9, #activate-step-9-out').on('click', function(e) {
                console.log("!!!!!!!!!!!!!!!!!", "<?php echo e(route('get.job.info.sheet', $project->id)); ?>");
                    window.location.href = "<?php echo e(route('get.job.info.sheet', $project->id)); ?>";
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

        let token = '<?php echo e(csrf_token()); ?>'
        var autoCompleteCompanyOnRoleChange = "<?php echo e(route('autocomplete.contact.company.rolechange')); ?>";
        var fetchCompanies = "<?php echo e(route('fetch.companies')); ?>";
        var deleteContacts = "<?php echo e(route('customer.delete.contact')); ?>";
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

    <script>
        let token = '<?php echo e(csrf_token()); ?>'
        let baseUrl = "<?php echo e(env('ASSET_URL')); ?>"
        let project_id = "<?php echo e($project_id); ?>"
        let submitDate = "<?php echo e(route('project.dates.submit')); ?>"
        let updateDate = "<?php echo e(route('project.dates.update')); ?>"
    </script>

    
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/job_info_dates.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/modals/contacts/contact.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/js/createProject.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.projects.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/projects/viewsummary.blade.php ENDPATH**/ ?>