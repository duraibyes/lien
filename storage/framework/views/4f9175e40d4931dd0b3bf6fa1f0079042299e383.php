<?php $__env->startSection('title', 'Line Bound Summery'); ?>

<?php $__env->startSection('script'); ?>
    <style>
        <!--
        body {
            margin: 0px auto;
        }

        #layout {
            margin: 0px auto;
            width: 800px;
            border: 1px solid #000;
            padding-top: 10px;
        }

        #header,
        .prinvateWorks,
        .mainContent {
            width: 798px;
            border-bottom: 2px solid #000;
            padding: 0px 10px;
        }

        #logo {
            width: 230px;
            height: 104px;
            text-align: left;
            float: left;
        }

        .prinvateWorks,
        .mainContent {
            padding: 10px;
        }

        #footer {
            width: 760px;
            margin: 10px;
            background-color: #f5f5f5;
            font: 12px Arial, Helvetica, sans-serif;
            font-size: 12px;
            line-height: 150%;
            color: #000;
            padding: 10px;
            text-align: justify;
        }

        .clear {
            clear: both;
        }

        .headerRight {
            font-family: Arial, Helvetica, sans-serif;
            float: left;
            height: 104px;
            width: 550px;
        }

        .span1,
        .span2 {
            font-family: "Arial";
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            color: #000;
            text-align: right;
            display: block;
            float: right;
            padding-right: 50px;
            width: 80%;
        }

        .span2 {
            line-height: 40px;
            text-align: center;
            width: 100%;
            padding: 0px;
            padding-top: 10px;
        }

        .headerBottom {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #333;
            text-align: right;
            clear: both;
            font-weight: bold;
            width: 100%;
        }

        .STYLE1 {
            color: #000000;
            font-size: 20px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
        }

        .STYLE2 {
            font-size: 12px
        }

        .infoLeft,
        .infoCenter {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 150%;
            font-weight: bold;
            color: #000;
            display: block;
            float: left;
            text-transform: uppercase;
        }

        .infoCenter {
            text-transform: none;
            font-weight: normal;
            padding-left: 10px;
        }

        .info {
            width: 100%;
        }

        .infoCenter ul {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }

        .infoCenter {
            text-align: justify;
        }

        .tableDiv {
            clear: both;
            width: 100%;
            margin-top: 10px;
        }

        .infoRight {
            float: right;
            text-align: right;
            font: 11px Arial, Helvetica, sans-serif;
            width: 100%;
        }

        .span3 {
            font-family: "Arial";
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            display: block;
            width: 50%;
            float: left;
        }

        .tableDiv th {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            text-align: left;
            #border-bottom: 2px solid #000;
            width: 20%;
            border: 5px solid white;
        }

        .tableDiv td {
            font: 12px Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            padding: 10px 0px;
            vertical-align: top;
            border: 5px solid white;
        }

        #divNotes {
            font-size: 12px;
            padding: 4px 10px 4px 10px;
        }

        -->
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div id="layout">
                    <div id="header">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="logo"><img src="<?php echo e(env('ASSET_URL')); ?>/images/summarylogo.jpg" alt="logo" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="headerRight">
                                    <span class="span1">
                                        <?php echo e($state->short_code); ?>

                                    </span>
                                    <span class="span2"><?php echo e($state->name); ?></span>
                                </div>
                                <div class="headerBottom">06/03 Pub Date</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="prinvateWorks"><span class="STYLE1"><?php echo e($projectType->project_type); ?> Works</span>
                            <div class="info">
                                <div class="infoLeft">Rights Available:</div>
                                <div class="infoCenter">
                                    <ul>
                                        <li><?php echo e($value->rights_available); ?></li>
                                    </ul>
                                </div>
                                <div class="infoRight">$35-30-123,et seq</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="mainContent"><span class="span3">First Step</span> <span class="span3">Filing</span>
                            <div class="clear"></div>
                            <div class="tableDiv">
                                <table width="100%" cellspacing="10">
                                    <tr>
                                        <th scope="col">Claimant</th>
                                        <th scope="col">Prelim Notices</th>
                                        <th scope="col">Other Notices</th>
                                        <th scope="col">Lien</th>
                                        <th scope="col">Suit</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo e($value->claimant); ?></td>
                                        <td><?php echo e(nl2br(htmlentities($value->prelim_notice))); ?></td>
                                        <td><?php echo e(nl2br(htmlentities($value->other_notice))); ?></td>
                                        <td><?php echo e(nl2br(htmlentities($value->lien))); ?></td>
                                        <td><?php echo e(nl2br(htmlentities($value->suit))); ?></td>
                                    </tr>
                                </table>
                                <?php if($value->notes != 'NULL'): ?>
                                    <div id="divNotes">
                                        <?php echo e($value->notes); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div id="footer"><strong>Foot*Print Communications, Ltd. 2002 All Rights Reserved.</strong><br />
                        This information is not intended to serve as legal, accounting or other professional service. This
                        information
                        is used with the understanding that NLBAccess.COM is not engaged in rendering legal or other
                        professional
                        advice. If legal advice or other professional assistance is required, the services of a competent
                        professional
                        should be sought. Legislative changes will be updated from time to time upon reporting. Please call
                        our office
                        to determine if changes have been made since the publication date, which appears on this update.
                    </div>
                    <div class="clear"></div>
                    <div id="footer" align="center">
                        ALL RESULTS, DATES, INFORMATION AND TEXT PUBLISHED BY THIS ONLINE WEB PROGRAM DO NOT CONSTITUTE
                        LEGAL ADVICE
                        .THE PUBLISHED DATES AND CONCLUSIONS SHOULD NOT BE RELIED UPON AS A SUBSTITUTE FOR LEGAL ADVICE FROM
                        A QUALIFIED
                        ATTORNEY REGARDING ANY ACTUAL ISSUE OR DISPUTE.IF LEGAL ADVICE OR OTHER PROFESSIONAL SERVICES ARE
                        REQUIRED THE
                        SERVICES OF A COMPETENT PROFESSIONAL SHOULD BE SOUGHT NOTHINGON THIS WEB SITE SHOULD BE CONSTRUED AS
                        LEGAL
                        ADVICE OR PERCEIVED AS CREATING AN ATTORNEY-CLIENT RELATIONSHIP.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('basicUser.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/basicUser/document/line_bound_summery.blade.php ENDPATH**/ ?>