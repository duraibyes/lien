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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Claim Amount</th>
                                    <th>Description</th>
                                    
                                    <th>Action</th>
                                </tr>
                                <?php if(count($consultations) > 0): ?>
                                    <?php $__currentLoopData = $consultations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($consultation->first_name . ' ' . $consultation->last_name); ?></td>
                                            <td><?php echo e($consultation->email); ?></td>
                                            <td><?php echo e($consultation->phone_number); ?></td>
                                            <td><?php echo e($consultation->claim_amount); ?></td>
                                            <td><?php echo e($consultation->description); ?></td>
                                            
                                            <td>
                                                <a href="<?php echo e(route('reply.consultation', [$consultation->id])); ?>"
                                                    class="btn btn-info btn-xs" title="Send Mail">
                                                    <i class="fa fa-send"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs delete" type="button"
                                                    data-id="<?php echo e($consultation->id); ?>" title="Delete user">
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
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <?php echo e($consultations->links()); ?>

                            </ul>
                        </div>
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
                        url: "<?php echo e(route('consultation.delete')); ?>",
                        data: {
                            id: id,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function(data) {
                            if (data.status) {
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Consultations deleted successfully',
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

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/admin/consultation/list.blade.php ENDPATH**/ ?>