<form method="get" class="search-filters">
    <div style="color:#1083FF; font-size:32px; font-weight:700;text-transform: uppercase;padding-top: 30px;text-align:center;">Project Reports</div>
    <table class="table-responsive bottomTable bottomForm filterTable">
        <tr>
            
            <td style="width: 15%">
                <strong>Project Status:</strong>
                <select class="form-control chosen" name="job_info_status">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('jobinfoStatus', $queryParams) && $queryParams['jobinfoStatus'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All Status</option>
                    <option value="0" <?php if(isset($queryParams) && array_key_exists('jobinfoStatus', $queryParams) && $queryParams['jobinfoStatus'] == '0'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >Inactive</option>
                    <option value="1" <?php if(isset($queryParams) && array_key_exists('jobinfoStatus', $queryParams) && $queryParams['jobinfoStatus'] == '1'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >Active</option>




                </select>
            </td>
            <td>
                <strong>Project Type:</strong>
                <select class="form-control chosen" name="project_type">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('projectType', $queryParams) && $queryParams['projectType'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        > All Types </option>
                    <?php if(isset($projectTypes)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $projectTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $projectType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('projectType', $queryParams) && $queryParams['projectType'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>
                        ><?php echo e($projectType); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            <td style="width: 20%">
                <strong>Project State:</strong>
                <select class="form-control chosen" name="project_state" id="project_state">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('projectState', $queryParams) && $queryParams['projectState'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        > All States </option>
                    <?php if(isset($states)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('projectState', $queryParams) && $queryParams['projectState'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>
                        > <?php echo e($state); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            <td style="width: 15%">
                <strong>Receivable Status :</strong>
                <select class="form-control chosen" name="receivable_status">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        All Status
                    </option>

                    <option value="Preliminary Notice" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Preliminary Notice'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Preliminary Notice
                    </option>
                    <option value="Lien" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Lien'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Lien
                    </option>
                    <option value="Bond" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Bond'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Bond
                    </option>
                    <option value="Collection" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Collection'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Collection
                    </option>
                    <option value="Litigation" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Litigation'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Litigation
                    </option>
                    <option value="Collected" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Collected'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Collected
                    </option>
                    <option value="Paid" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Paid'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Paid
                    </option>
                    <option value="Written Off" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Written Off'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Written Off
                    </option>
                    <option value="Bankruptcy" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Bankruptcy'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Bankruptcy
                    </option>
                    <option value="Settled" <?php if(isset($queryParams) && array_key_exists('receivableStatus', $queryParams) && $queryParams['receivableStatus'] == 'Settled'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >
                        Settled
                    </option>
                </select>
            </td>
            <td>
                <strong>Claim Amount:</strong>
                <select class="form-control chosen" name="claim_amount">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All Amounts</option>
                    <option value="0-10000" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == '0-10000'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >0-10,000</option>
                    <option value="10000-50000" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == '10000-50000'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >10,000-50,000</option>
                    <option value="50000-100000" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == '50000-100000'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >50,000-100,000</option>
                    <option value="100000-500000" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == '100000-500000'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >100,000-500,000</option>
                    <option value="500000+" <?php if(isset($queryParams) && array_key_exists('claimAmount', $queryParams) && $queryParams['claimAmount'] == '500000+'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >500,000+</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <strong>Customer:</strong>
                <select class="form-control chosen" name="customers">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('customer', $queryParams) && $queryParams['customer'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>>
                        All Customers
                    </option>
                    <?php if(isset($customers)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('customer', $queryParams) && $queryParams['customer'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>>
                        <?php echo e($customer); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            <td>
                <strong>Project Name:</strong>
                <select class="form-control autocomplete chosen" name="project_name">
                    <option value="" <?php if(isset($queryParams) && array_key_exists('projectName', $queryParams) && $queryParams['projectName'] != ''): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All Projects</option>
                    <?php if(isset($projectNames)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $projectNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $projectName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('projectName', $queryParams) && $queryParams['projectName'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>
                        ><?php echo e($projectName); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </select>
                
            </td>

            <td>
                <strong>User:</strong>
                <select class="form-control chosen" name="user">
                    <option value="all"
                        <?php if(isset($queryParams) && array_key_exists('user', $queryParams) && $queryParams['user'] == 'all'): ?>
                            <?php echo e('selected'); ?>

                        <?php endif; ?>
                    >All Users</option>
                    <?php if(isset($subUsers)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $subUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>"
                                <?php if(isset($queryParams) && array_key_exists('user', $queryParams) && $queryParams['user'] == $key): ?>
                                    <?php echo e('selected'); ?>

                                <?php endif; ?>
                            ><?php echo e($subUser); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>
                <strong>Date Type:</strong>
                <select class="form-control chosen" name="date_type">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('dateType', $queryParams) && $queryParams['dateType'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All</option>
                    <?php if(isset($dateTypes)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $dateTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dateType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('dateType', $queryParams) && $queryParams['dateType'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>
                        ><?php echo e($dateType); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            <td>
                <strong>From:</strong>
                <input type="text" class="form-control date" name="from"
                    value="<?php echo e(isset($queryParams) && array_key_exists('from', $queryParams) && $queryParams['from'] != '' ? $queryParams['from'] : ''); ?>">
            </td>
            <td>
                <strong>To:</strong>
                <input type="text" class="form-control date" name="to"
                    value="<?php echo e(isset($queryParams) && array_key_exists('to', $queryParams) && $queryParams['to'] != '' ? $queryParams['to'] : ''); ?>">
            </td>
            <td>
                <strong>Compliance Provider:</strong>
                <select class="form-control chosen" name="compliance_provider">
                    <option value="all" <?php if(isset($queryParams) && array_key_exists('complianceProvider', $queryParams) && $queryParams['complianceProvider'] == 'all'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All</option>
                    <?php if(isset($lienProviders)): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $lienProviders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lienProvider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($key); ?>" <?php if(isset($queryParams) && array_key_exists('complianceProvider', $queryParams) && $queryParams['complianceProvider'] == $key): ?>
                                <?php echo e('selected'); ?>

                        <?php endif; ?>
                        ><?php echo e($lienProvider); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
            <td style="width: 20%">
                <strong>Deadline Calculation Status:</strong>
                <select class="form-control chosen" name="calculation_status">
                    <option value="" <?php if(isset($queryParams) && array_key_exists('calculation_status', $queryParams) && $queryParams['calculation_status'] == ''): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >All</option>
                    <option value="0" <?php if(isset($queryParams) && array_key_exists('calculation_status', $queryParams) && $queryParams['calculation_status'] == '0'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >In Process</option>
                    <option value="1" <?php if(isset($queryParams) && array_key_exists('calculation_status', $queryParams) && $queryParams['calculation_status'] == '1'): ?>
                        <?php echo e('selected'); ?>

                        <?php endif; ?>
                        >Complete</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit" class="blue-btn-ext form-control" style="margin-left: auto; margin-top: 10px;">Update list</button>
</form>
<?php /**PATH C:\xampp\htdocs\lien\resources\views/basicUser/projects/project_list_filter.blade.php ENDPATH**/ ?>