<section class="multi_step_form">
    <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar" class="tabs <?php if(Session::has('express')): ?> express-progressbar <?php endif; ?>">
        <?php if(Session::get('express')): ?>
            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('create.remedydates', [$project_id]) . '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('create.remedydates', [$project_id])): ?> tablink-number-active <?php endif; ?>">1</span>
                <span class="tablink-body">Dates</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('project.summary.view', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('project.summary.view', [$project_id])): ?> tablink-number-active <?php endif; ?>">2</span>
                <span class="tablink-body">Summary</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('get.job.info.sheet', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('get.job.info.sheet', [$project_id])): ?> tablink-number-active <?php endif; ?>">3</span>
                <span class="tablink-body">Info Sheet</span>
            </li>

            <?php if(isset($project->state) && $project->state->name == 'Florida'): ?>
                <li class="tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('get.owner.notice.sheet', [$project_id]). '?edit=true'); ?>"> Notice to Owner</li>
            <?php endif; ?>
        <?php else: ?>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('member.create.project') . '?project_id='.$project_id.'&edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('member.create.project')): ?> tablink-number-active <?php endif; ?>">1</span>
                <span class="tablink-body">Details</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('create.remedydates', [$project_id]) . '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('create.remedydates', [$project_id])): ?> tablink-number-active <?php endif; ?>">2</span>
                <span class="tablink-body">Dates</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('member.create.edit.jobdescription', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('member.create.edit.jobdescription', [$project_id])): ?> tablink-number-active <?php endif; ?>">3</span>
                <span class="tablink-body">Description</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('project.contract.view') . '?project_id='. $project_id . '&edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('project.contract.view')): ?> tablink-number-active <?php endif; ?>">4</span>
                <span class="tablink-body">Contract</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('member.create.projectcontacts', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('member.create.projectcontacts', [$project_id])): ?> tablink-number-active <?php endif; ?>">5</span>
                <span class="tablink-body">Contacts</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('get.project.documents', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('get.project.documents', [$project_id])): ?> tablink-number-active <?php endif; ?>">6</span>
                <span class="tablink-body">Documents</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('create.deadlines', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('create.deadlines', [$project_id])): ?> tablink-number-active <?php endif; ?>">7</span>
                <span class="tablink-body">Deadlines</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('project.task.view', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('project.task.view', [$project_id])): ?> tablink-number-active <?php endif; ?>">8</span>
                <span class="tablink-body">Tasks</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('project.summary.view', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('project.summary.view', [$project_id])): ?> tablink-number-active <?php endif; ?>">9</span>
                <span class="tablink-body">Summary</span>
            </li>

            <li class="tablink-spacer"></li>

            <li class="flex flex-col align-center tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('get.job.info.sheet', [$project_id]). '?edit=true'); ?>">
                <span class="tablink-number <?php if(url()->current() == route('get.job.info.sheet', [$project_id])): ?> tablink-number-active <?php endif; ?>">10</span>
                <span class="tablink-body">Info Sheet</span>
            </li>
            <?php
                $showNoticeOwner = \App\Http\Controllers\NotificationController::showProjectNoticeOwner($project);
            ?>
            <?php if(isset($project->state) && $showNoticeOwner): ?>
                <li class="tablink" onclick="window.location.href=(this.id)" id="<?php echo e(route('get.owner.notice.sheet', [$project_id]). '?edit=true'); ?>"> Notice to Owner</li>
            <?php endif; ?>
        <?php endif; ?>

        </ul>
    </form>
</section>
<?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/partials/multi-step-form.blade.php ENDPATH**/ ?>