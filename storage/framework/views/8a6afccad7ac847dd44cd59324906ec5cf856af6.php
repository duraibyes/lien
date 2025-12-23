<!-- Extends main layout form layout folder -->


<!-- Addind Dynamic layout -->
<?php $__env->startSection('title', 'Lien Law Slide Chart'); ?>
<!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Lien Law Slide Chart
            </h1>
        </section>

        <section class="content">
            <?php if(Session::has('success')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of all Lien Law Slide Chart</h3>
                            <button class="btn btn-md addLienLaw" type="button">Upload New Excel</button>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" id="remedy_search"
                                        value="<?php echo e(isset($_GET['search']) && $_GET['search'] != '' ? $_GET['search'] : ''); ?>"
                                        class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="button" data-type="lien" class="btn btn-default search"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>State</th>
                                    <th>Project Type</th>
                                    <th>Remedy</th>
                                    <th>Description</th>
                                    <th>Tiers</th>
                                </tr>
                                <?php if(count($lienLaws) > 0): ?>
                                    <?php $__currentLoopData = $lienLaws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lienLaw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($lienLaw->state->name); ?></td>
                                            <td><?php echo e($lienLaw->projectType->project_type); ?></td>
                                            <td><?php echo e($lienLaw->remedy); ?></td>
                                            <td><?php echo e($lienLaw->description); ?></td>
                                            <td><?php echo e($lienLaw->tier_limit); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6">Lien law slide chart not dound</td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                        <!-- /.box-body -->


                        <tfoot>
                            <div class="col-sm-12 box-footer clearfix" style="text-align:center">
                                <ul class="pagination pagination-sm no-margin">
                                    <?php echo e($lienLaws->appends(request()->query())->links()); ?>

                                </ul>
                            </div>

                            <div class="col-sm-12 box-footer clearfix" style="text-align:center">
                                <select name="paginate" id="paginate">
                                    <option value="" <?php if(isset($_GET['paginate']) && $_GET['paginate'] == ''): ?><?php echo e('selected'); ?><?php endif; ?>>---Select---</option>
                                    <option value="20" <?php if(isset($_GET['paginate']) && $_GET['paginate'] == '20'): ?><?php echo e('selected'); ?><?php endif; ?>>20</option>
                                    <option value="50" <?php if(isset($_GET['paginate']) && $_GET['paginate'] == '50'): ?><?php echo e('selected'); ?><?php endif; ?>>50</option>
                                    <option value="100" <?php if(isset($_GET['paginate']) && $_GET['paginate'] == '100'): ?><?php echo e('selected'); ?><?php endif; ?>>100</option>
                                    <option value="10000" <?php if(isset($_GET['paginate']) && $_GET['paginate'] == '10000'): ?><?php echo e('selected'); ?><?php endif; ?>>All</option>
                                </select>
                            </div>
                        </tfoot>

                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <div id="addlienModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload new Lien Law File</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal uploadForm" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="lien" class="col-sm-4 control-label">Select Lien law file</label>

                                <div class="col-sm-8">
                                    <input type="file" class="form-control error" name="lien" id="lien"
                                        placeholder="Lien Law File">
                                </div>
                            </div>
                        </div>
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group error-tier-field" style="display: none; color: red;">
                            <label for="error" class="col-sm-4 control-label">Error</label>

                            <div class="col-sm-8">
                                <span id="error-tier"></span>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-info pull-right" id="addLienButton"><i
                                    class="fa fa-spinner fa-spin loader" style="display: none;"></i>
                                Submit
                            </button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

        $('#remedy_search').keyup(function(e){
            if(e.keyCode == 13)
            {
                var string = $('#remedy_search').val();
                var location = appendToQueryString('search', string);
                window.location.href = location;
            }
        });

        $('#paginate').change(function() {
            if ($(this).val() != '') {
                var location = window.location.href;
                var location = appendToQueryString('paginate', $(this).val());
                window.location.href = location;
            } else {
                var location = window.location.href;
                location = removeURLParameter(location, 'paginate');
                window.location.href = location;
            }
        });

        function ValidateExtension() {
            var allowedFiles = [".xls", ".xlsx"];
            var fileUpload = document.getElementById("lien");
            var lblError = document.getElementById("error-tier");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$");
            if (!regex.test(fileUpload.value.toLowerCase())) {
                lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                return false;
            }
            lblError.innerHTML = "";
            return true;
        }

        $('.error').on('keyup', function() {
            $(this).parent().parent('div').removeClass('has-error');
            $(this).parent('div').children('.help-block').remove();
            $('.error-tag-field').hide();
            $('.error-tier-field').hide();
        });

        $('.error').on('change', function() {
            $(this).parent().parent('div').removeClass('has-error');
            $(this).parent('div').children('.help-block').remove();
            $('.error-tag-field').hide();
            $('.error-tier-field').hide();
        });

        $('.search').on('click', function() {
            var remedy = $('#remedy_search').val();
            var location = appendToQueryString('search', remedy);
            window.location.href = location;
        });

        $('.addLienLaw').on('click', function() {
            $('#addlienModal').modal('show')
        });

        $('#addLienButton').on('click', function() {
            if (ValidateExtension()) {
                var formData = new FormData($('.uploadForm')[0]);
                formData.append("lien", $('#lien')[0].files[0]);
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('add.lien')); ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        HoldOn.open();
                    },
                    complete: function() {
                        HoldOn.close();
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('.uploadForm')[0].reset();
                            window.location.reload();
                        } else {
                            $('#error-tier').text(data.message);
                            $('.error-tier-field').show();
                        }

                    }
                });

            } else {
                $('.error-tier-field').show();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/remedy/lein_law_slide_chart.blade.php ENDPATH**/ ?>