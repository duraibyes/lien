<?php $__env->startSection('title','Update Profile'); ?>

<?php $__env->startSection('style'); ?>

    <style>
        .input-error {
            border: 2px solid red;

        }

        textarea {
            max-width: 100%;
            max-height: 100%;
        }

        .blue-btn-ext{
            background: #1084ff;
            color: #fff;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="center-part">
                    <div class="tab-area1">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Update Profile</a></li>
                            <li><a data-toggle="tab" href="javascript:void(0)">Financial Accounts </a></li>
                            <li><a data-toggle="tab" href="javascript:void(0)">My Transactions </a></li>
                        </ul>


                        <div id="home" class="tab-pane fade in active">
                            <div class="tab-content-body update-back">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10  col-sm-offset-1">
                                        <div class="profile-box">
                                            <?php if($errors->any()): ?>
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                            <div class="table-responsive">
                                                <form action="<?php echo e(route('lien.action.profile')); ?>" method="post" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>

                                                    <table class="table profile-table">
                                                        <?php if(Session::has('success-update')): ?>
                                                            <p class="alert alert-success"><?php echo e(Session::get('success-update')); ?></p>
                                                        <?php endif; ?>
                                                        <tr class="table-select">
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <div class="pad15 email">
                                                                                <input type="text" name="email"
                                                                                       id="userEmail"
                                                                                       class="form-control"
                                                                                       value="<?php echo e(Auth::user()->email); ?>"
                                                                                >
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15">
                                                                                <a href="#" data-toggle="modal"
                                                                                   data-target="#myModal">CHANGE
                                                                                    PASSWORD</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <div class="pad15 email" id="email">
                                                                                <ul>
                                                                                    <li>USER EMAIL</li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15">
                                                                                Password
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 company">
                                                                                <input type="text" name="companyName" readonly
                                                                                       value="<?php echo e(!is_null($user->details) && !is_null($user->details->getCompany) && isset($user->details->getCompany->company)? $user->details->getCompany->company : ''); ?>"
                                                                                       id="userCompany"
                                                                                       class="form-control">
                                                                                
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 name">
                                                                                <div class="row">
                                                                                    <input type="text"
                                                                                           name="firstName"
                                                                                           value="<?php echo e(!is_null($user->lienUser) && isset($user->lienUser->firstName)? $user->lienUser->firstName : ''); ?>"
                                                                                           id="userFirstName"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 name">
                                                                                <input type="text"
                                                                                       name="lastName"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && isset($user->lienUser->lastName)? $user->lienUser->lastName : ''); ?>"
                                                                                       id="userLastName"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 company">
                                                                                <ul>
                                                                                    <li>COMPANY NAME
                                                                                    </li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 name">
                                                                                <ul>
                                                                                    <li>FIRST NAME
                                                                                    </li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 name">
                                                                                <ul>
                                                                                    <li>LAST NAME</li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 image">
                                                                                <input type="file" name="image"
                                                                                       value="<?php echo e(!is_null($user->details) && isset($user->details->image) ? $user->details->image : ''); ?>"
                                                                                       id="image"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 current_image">
                                                                                <?php if(!is_null($user->details) && $user->details->image != ''): ?>
                                                                                    <img src="<?php echo e(env('ASSET_URL')); ?>/image_logo/<?php echo e($user->details->image); ?>" alt="Logo" class="pull-right" height="50px">
                                                                                <?php else: ?>
                                                                                    <img src="<?php echo e(env('ASSET_URL')); ?>/images/avatar5.png" alt="Logo" class="pull-right" height="50px">
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 image">
                                                                                <ul>
                                                                                    <li>
                                                                                        Upload Image
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 current_image">
                                                                                <ul>
                                                                                    <li>
                                                                                        Current Image
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 phone">
                                                                                <input type="text" name="phone"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && isset($user->lienUser->phone)? $user->lienUser->phone : ''); ?>"
                                                                                       id="phone"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 office_phone">

                                                                                <input type="text"
                                                                                       name="office_phone"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->companyPhone) ? $user->lienUser->companyPhone : ''); ?>"
                                                                                       id="office_phone"
                                                                                       class="form-control">

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 phone">
                                                                                <ul>
                                                                                    <li>Phone
                                                                                    </li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 office_phone">
                                                                                <ul>
                                                                                    <li>Office Phone
                                                                                    </li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <div class="pad15 address">
                                                                                <textarea name="address"
                                                                                          id="userAddress"
                                                                                          class="form-control"><?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->address) ? $user->lienUser->address : ''); ?></textarea>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 website">
                                                                                <input type="url" name="website"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->getCompany) && isset($user->lienUser->getCompany->website)? $user->lienUser->getCompany->website : ''); ?>"
                                                                                       id="userWebsite"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>

                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <div class="pad15 address">
                                                                                <ul>
                                                                                    <li>ADDRESS</li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 website">
                                                                                <ul>
                                                                                    <li>COMPANY WEBSITE</li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>

                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <table class="table inner-table">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 city">
                                                                                <input type="text" name="city"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->city) ? $user->lienUser->city : ''); ?>"
                                                                                       id="userCity"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 state">
                                                                                <select class="form-control"
                                                                                        name="state" id="userState">
                                                                                    <option value="">---Select---</option>
                                                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($key); ?>" <?php echo e(($state_id == $key) ? 'selected' : ''); ?>><?php echo e($state); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 zip">
                                                                                <input type="text" name="zip"
                                                                                       value="<?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->zip) ? $user->lienUser->zip : ''); ?>"
                                                                                       id="userZip"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15">
                                                                                <select class="form-control">
                                                                                    <option>United States</option>
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="pad15 city">
                                                                                <ul>
                                                                                    <li>CITY</li>
                                                                                    
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 state">
                                                                                <ul>
                                                                                    <li>STATE</li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15 zip">
                                                                                <ul>
                                                                                    <li>ZIP CODE</li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="pad15">
                                                                                <ul>
                                                                                    <li>COUNTRY</li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <div class="row">
                                                                    <div class="align-center col-md-4 col-sm-4 col-xs-4">
                                                                        
                                                                        <input type="submit" class="blue-btn save-btn"
                                                                               value="Save Changes">
                                                                    </div>
                                                                    <input type="hidden" name="company_name" id="company_name" value="<?php echo e(!is_null($user->lienUser) && !is_null($user->lienUser->getCompany) ?  $user->lienUser->getCompany->company : ''); ?>">
                                                                    

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="post" id="resetPassform" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Enter old password : </label>
                                    <div class="col-md-8">
                                        <input type="password" id="oldPassword" name="oldPassword"
                                               class="form-control input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Enter new password : </label>
                                    <div class="col-md-8">
                                        <input type="password" id="newPassword" name="newPassword"
                                               class="form-control input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Re-enter new password : </label>
                                    <div class="col-md-8">
                                        <input type="password" id="cNewPassword" name="cNewPassword"
                                               class="form-control input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4 error"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="button" class="btn blue-btn change-password">
                                            Change password
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
        /*var chosen = $('#userCompany').chosen({width: "100%",no_results_text: "Oops, nothing found! <a class='add_company_from_search'>Click here to add company</a>"})
                        .change(
                                function () {
                                    if($(this).val() != "new_data") {
                                        $.ajax({
                                            url: '<?php echo e(route("lien.company.autocomplete")); ?>',
                                            dataType: "json",
                                            data: {
                                                key: $(this).val(),
                                                _token: '<?php echo e(csrf_token()); ?>'
                                            },
                                            success: function (response) {
                                                if(response.success && response.data !==  null) {
                                                    setData(response);
                                                } else {
                                                    reset();
                                                }
                                            }
                                        });

                                    } else {
                                        reset();
                                    }
                                }
                        );

        function reset() {
            $('#company_name').val('');
            $('#userWebsite').val("");
            $('#userAddress').val("");
            $('#userCity').val("");
            $('#userState').val("");
            $('#userZip').val("");
            $('#office_phone').val("");
            $('#fax').val("");
        }

        function setData(response) {
            $('#company_id').val(response.data.company);
            $('#userWebsite').val(response.data.website);
            $('#userAddress').val(response.data.address);
            $('#userCity').val(response.data.city);
            $('#userState').val(response.data.state_id);
            $('#userZip').val(response.data.zip);
            $('#office_phone').val(response.data.phone);
            $('#fax').val(response.data.fax);
        }

        $(document).delegate('.add_company_from_search','click',function () {
            var company = chosen.data('chosen').get_search_text();
            $("#userCompany option[value='new_data']").remove();
            $('#userCompany').append("<option value='new_data'>"+company+"</option>");
            $('#userCompany').val('new_data'); // if you want it to be automatically selected
            $('#userCompany').trigger("chosen:updated");
            $('#company_name').val(company);

            $('#userWebsite').val("");
            $('#userAddress').val("");
            $('#userCity').val("");
            $('#userState').val("");
            $('#userZip').val("");
            $('#office_phone').val("");
            $('#fax').val("");
        });
*/
        $(document).ready(function () {
            $('#addUserModel').on('hidden.bs.modal', function () {
                $('#addUserForm').trigger("reset");
            });

            $('.editEmail').on('click', function () {
                $('.email').addClass('white-bg');
                $('#userEmail').removeAttr("readonly");

            });
            $('.editCompany').on('click', function () {
                $('.company').addClass('white-bg');
                $('#userCompany').removeAttr("readonly");

            });
            $('.editNames').on('click', function () {
                $('.name').addClass('white-bg');
                $('#userFirstName').removeAttr("readonly");
                $('#userLastName').removeAttr("readonly");

            });
            $('.editAddress').on('click', function () {
                $('.address').addClass('white-bg');
                $('#userAddress').removeAttr("readonly");
            });
            $('.editCity').on('click', function () {
                $('.city').addClass('white-bg');
                $('#userCity').removeAttr("readonly");
            });
            $('.editZip').on('click', function () {
                $('.zip').addClass('white-bg');
                $('#userZip').removeAttr("readonly");
            });
            $('.editWebsite').on('click', function () {
                $('.website').addClass('white-bg');
                $('#userWebsite').removeAttr("readonly");
            });
            $('.change-password').on('click', function () {
                var oldPassword = $('#oldPassword').val();
                var newPassword = $('#newPassword').val();
                var cNewPassword = $('#cNewPassword').val();
                var flag = true;
                var html = '';
                if (oldPassword == '') {
                    $('#oldPassword').addClass('input-error');
                    html += '<p style="color: red;">Please enter your old password</p>';
                    flag = false;
                }
                if (newPassword == '') {
                    $('#newPassword').addClass('input-error');
                    html += '<p style="color: red;">Please enter a new password</p>';
                    flag = false;
                }
                if (cNewPassword == '') {
                    $('#cNewPassword').addClass('input-error');
                    html += '<p style="color: red;">Please re-enter your new password</p>';
                    flag = false;
                }
                if (newPassword != cNewPassword) {
                    $('#cNewPassword').addClass('input-error');
                    html += '<p style="color: red;">password and confirm password does not match</p>';
                    flag = false;
                }
                if (flag) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('lien.change.password')); ?>",
                        data: {
                            user_id: '<?php echo e(Auth::user()->id); ?>',
                            oldPassword: oldPassword,
                            newPassword: newPassword,
                            cNewPassword: cNewPassword,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success: function (data) {
                            $('#resetPassform')[0].reset();
                            $('#myModal').modal('hide');
                            if (data.status) {
                                swal({
                                    title: "Success!",
                                    text: "Password changed successfully",
                                    type: "success"
                                }).then(function (isConfirm) {
                                    window.location.reload();
                                });
                            } else {
                                $('.error').html('<p class="input-error" style="color: red;">' + data.message + '</p>');
                            }
                        }
                    });
                } else {
                    $('.error').html(html);
                }

            });
            $('.input').on('focus', function () {
                $('#oldPassword').removeClass('input-error');
                $('#newPassword').removeClass('input-error');
                $('#cNewPassword').removeClass('input-error');
                $('.error').html('');
            });
        });

        $('.addSubUser').click(function () {
            // $('.title').html('Add');
            var type = $(this).data('type');
            if (type == 'add') {
                $('.formSubmit').attr('data-type', 'add');
                $('.title').html('Add');
                $('#subUserId').val(0);
            } else {
                //$('#contactType1').val($(this).data('contact_type'));
                $('#company1').val($(this).data('company'));
                $('#firstName1').val($(this).data('first_name'));
                $('#lastName1').val($(this).data('last_name'));
                $('#address1').val($(this).data('address'));
                $('#city1').val($(this).data('city'));
                $('#state1').val($(this).data('state'));
                $('#zip1').val($(this).data('zip'));
                $('#phone1').val($(this).data('phone'));
                $('#fax1').val($(this).data('fax'));
                $('#email1').val($(this).data('email'));
                $('#subUserId').val($(this).data('subuser_id'));
                $('#email1').val($(this).data('email'));
                $('#username1').val($(this).data('username'));
                //$('#password1').val($(this).data('password'));
                $('.formSubmit').attr('data-type', 'edit');
                $('.title').html('Edit');
            }
            $('#addUserModel').modal('show');
        });

        $('.formSubmit').on('click', function () {
            var company = $('#company1').val();
            var flag = true;
            var id = $('#companyId').val();
            var company = $('#company1').val();
            if (company == '') {
                $('#company1').addClass('input-error');
                flag = false;
            }
            var firstName = $('#firstName1').val();
            if (firstName == '') {
                $('#firstName1').addClass('input-error');
                flag = false;
            }
            var lastName = $('#lastName1').val();
            if (lastName == '') {
                $('#lastName1').addClass('input-error');
                flag = false;
            }
            var address = $('#address1').val();
            if (address == '') {
                $('#address1').addClass('input-error');
                flag = false;
            }
            var city = $('#city1').val();
            if (city == '') {
                $('#city1').addClass('input-error');
                flag = false;
            }
            var state = $('#state1').val();
            if (state == '') {
                $('#state1').addClass('input-error');
                flag = false;
            }
            var zip = $('#zip1').val();
            if (zip == '') {
                $('#zip1').addClass('input-error');
                flag = false;
            }
            if (!validateNumber(zip, 'zip1')) {
                $('#zip1').addClass('input-error');
                flag = false;
            }
            var phone = $('#phone1').val();
            if (phone == '') {
                $('#phone1').addClass('input-error');
                flag = false;
            }
            if (!validateNumber(phone, 'phone1')) {
                $('#phone1').addClass('input-error');
                flag = false;
            }
            // var fax = $('#fax1').val();
            var email = $('#email1').val();
            if (email == '') {
                $('#email1').addClass('input-error');
                flag = false;
            }
            var username = $('#username1').val();
            if (username == '') {
                $('#username1').addClass('input-error');
                flag = false;
            }
            /*var password = $('#password1').val();
             if (password == '') {
             $('#password1').addClass('input-error');
             flag = false;
             }*/
            if (!validateEmail(email)) {
                $('#email1').addClass('input-error');
                flag = false;
            }
            var type = $(this).data('type');
            var subuser_id = $('#subUserId').val();
            if (flag) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('member.subuser.create')); ?>",
                    data: {
                        company_id: id,
                        subuser_id: subuser_id,
                        type: type,
                        company: company,
                        firstName: firstName,
                        lastName: lastName,
                        address: address,
                        city: city,
                        zip: zip,
                        phone: phone,
                        //   fax: fax,
                        email: email,
                        state: state,
                        username: username,
                        //password: password,
                        user_id: '<?php echo e(Auth::user()->id); ?>',
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function (data) {
                        if (data.status) {
                            $('#error-message').html('<p class="input-success">' + data.message + '</p>');
                            location.reload();

                        } else {
                            $('#error-message').html('<p class="input-error">' + data.message + '</p>');
                            //  location.reload();
                        }
                    }
                });
            }
        });

        $('.delete').on('click', function () {
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
                buttonsStyling: false,
                allowOutsideClick: false
            }).then(function () {
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('member.subuser.delete')); ?>",
                    data: {
                        id: id,
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function (data) {
                        if (data.status) {
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'Contact deleted successfully',
                            }).then(function () {
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

        function validateEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                return true;
            }
            $('#error-message').html("<p class='input-error'>You have entered an invalid email address!</p>");
            return false;
        }

        function validateNumber(number, type) {
            if (/^-?\d*\.?\d*$/.test(number)) {
                return true;
            }
            $('#error-message').html("<p class='input-error'>You have entered an invalid " + type + " !</p>");
            return false;
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lienProviders.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/lienmanager/public_html/resources/views/lienProviders/profile/profile.blade.php ENDPATH**/ ?>