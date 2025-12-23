<!-- Extends main layout form layout folder -->

<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Consultation'); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo e(ucfirst($pageName)); ?>

            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of all <?php echo e(strtolower($pageName)); ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Project Name</th>

                                    <th>Action</th>
                                </tr>
                                <?php if(count($claimData) > 0): ?>
                                    <?php $__currentLoopData = $claimData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $claim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($claim->user->email); ?></td>
                                            <td><?php echo e($claim->project_name); ?></td>

                                            <td>
                                                <a href="<?php echo e(route('admin.claim.details', [$claim->id])); ?>"
                                                    class="btn btn-info btn-xs" title="Send Mail">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs delete" type="button"
                                                    data-id="<?php echo e($claim->id); ?>" title="Delete user">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5">No contact request available.</td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                        <!-- /.box-body -->

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
            $('.delete').on('click', function() {
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
                }).then(function() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('Claim.delete')); ?>",
                        data: {
                            id: id,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function(data) {
                            if (data.status) {
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Claim deleted successfully',
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/admin/claim/list.blade.php ENDPATH**/ ?>