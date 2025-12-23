<div id="fileCreateModal" class="modal modal--small fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Open A Job Information Sheet</h4>
      </div>
      <div class="modal-body">
          <?php
            $user = \App\User::find(Auth::user()->id);
            $projects = \App\Models\ProjectDetail::where('user_id', '=', $user->id)->orderByRaw('id DESC')->get();
            $preferences = \App\Models\UserPreferences::where('user_id', $user->id)->first();
        ?>
        <label for="selectProject" class="blue-label">Select A Project</label>
        <select id="selectProject" name="selectProject" class="form-control">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($project)): ?>
                <option value="<?php echo e($project->id); ?>"><?php echo e($project->project_name); ?></option>
                <?php else: ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="hidden" id="jobInfoHide" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden" id="jobInfoURL" value="<?php echo e(env('ASSET_URL')); ?>">
      </div>
      <div class="modal-footer">
          <?php if(isset($preferences) && !empty($preferences)): ?>
          <button type="button" class="btn btn-info" id="launchJobInfo" data-id="<?php echo e($user->id); ?>" data-url="<?php echo e(route('member.create.jobinfo.blank')); ?>">Create New Claim</button>
          <?php endif; ?>
        <button type="button" class="btn btn-primary" id="openFile">Open Job Info</button>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/modals/fileCreateModal.blade.php ENDPATH**/ ?>