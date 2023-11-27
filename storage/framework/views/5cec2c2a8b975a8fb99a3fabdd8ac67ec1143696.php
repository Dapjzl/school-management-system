<?php $__env->startSection('title', 'Admissions'); ?>

<?php $__env->startSection('content'); ?>
    <div class="sub_header bg_1">
        <div id="intro_txt">
            <h1>Online <strong>Apply</strong> course</h1>
            <p>Ex saepe accusata duo, vel ne summo option delenit.</p>
        </div>
    </div>
    <!--End sub_header -->

    <div class="container_gray_bg">
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div><!-- Position -->
        <div class="container margin_60">
            <div class="row">

                <div class="col-md-9">
                    <div class="box_style_1">
                        <form action="<?php echo e(route('apply')); ?>"  enctype="multipart/form-data" id="apply_online" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3>Personal Details</h3>
                                <p>Personal Information</p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" class="form-control styled required" id="name_apply"
                                                name="firstname" placeholder="First name">
                                        </div>
                                        <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" class="form-control styled required" id="lastname_apply"
                                                name="lastname" placeholder="Last name">
                                        </div>
                                        <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div><!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control styled required" id="email_apply"
                                                name="email" placeholder="youremail@domain.com">
                                        </div>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="text" class="form-control styled required" id="phone_apply"
                                                name="phone" placeholder="+0043 XXX XXXXX">
                                        </div>
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div><!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label><br>
                                            <div class="radio_inline">
                                                <input type="radio" name="gender" id="gender_apply_male"
                                                    class="required" value="Male"><label
                                                    style="margin-right:20px;"> Male</label>
                                                <input type="radio" name="gender" id="gender_apply_female"
                                                    class="required" value="Female"><label> Female</label>
                                            </div>
                                        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input type="date" class="form-control styled required" id="birth_apply"
                                                name="date_of_birth" placeholder="dd/mm/year">
                                        </div>
                                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control styled required" id="address_apply"
                                                name="password" placeholder="**************">
                                        </div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control styled required" id="address_apply"
                                                name="confirm_password" placeholder="**************">
                                        </div>
                                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address line</label>
                                            <input type="text" class="form-control styled required" id="address_apply"
                                                name="address" placeholder="Your full address">
                                        </div>
                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control styled required" id="town_apply"
                                                name="state" placeholder="State">
                                        </div>
                                        <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>LGA</label>
                                            <input type="text" class="form-control styled required" id="town_apply"
                                                name="lga" placeholder="State">
                                        </div>
                                        <?php $__errorArgs = ['lga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control styled required" id="postal_code_apply"
                                                name="postal_code_apply" placeholder="001238">
                                        </div>
                                        <?php $__errorArgs = ['postal_code_apply'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nationality</label>
                                        <div class="styled-select">
                                            <select class="form-control required" name="nationality" id="country_apply">
                                                <option value="" selected>Select your country</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Ethopia">Ethopia</option>
                                                <option value="South Africa">South Africa</option>
                                            </select>
                                        </div>
                                        <?php $__errorArgs = ['nationality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                </div><!-- End row -->
                            </div>

                            <div class="wrapper_indent">
                                <div class="form-group">
                                    <input type="checkbox" name="policy_terms" id="policy_terms" class="required"
                                        value="Yes"><label>&nbsp;I accept <a href="#0">terms and conditions</a> and general
                                        policy.</label>
                                </div>
                                <p><button type="submit" class="button">Continue</button></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">

                    <h4><strong>How to apply</strong></h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum.</p>

                    <div class="box_side">
                        <h5>By Phone</h5> <i class="icon-phone"></i>
                        <p> + 0043 848293 43<br><small>Monday to Friday 9.00am - 6.00pm</small></p>
                    </div>

                    <div class="box_side">
                        <h5>By Postal Mail</h5> <i class="icon_pencil-edit"></i>
                        <p><a href="#0"><strong>Download the application form</strong></a>,<br> and send it to this
                            address:<br><br><em>4 West 31st Street New York<br>
                                10001 United States</em></p>
                    </div>
                    <hr class="styled">
                    <div class="box_side">
                        <h4>Plan a visit</h4> <i class="icon_pencil-edit"></i>
                        <p>Per eu esse deleniti scripserit, sed ut nihil inimicus sadipscing. Eu iusto ignota officiis sit,
                            nullam ullamcorper eam ut. </p>
                        <a href="#0" class="button small">Plan a visit</a>
                    </div>

                </div>
            </div>
            <!--End row -->
        </div>
        <!--End container -->
    </div>
    <!--End container_gray_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Frequently questions</h2>
            <p>Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Et ius tota recusabo democritum?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Posse exerci volutpat has?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Te pri facete latine salutandi?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
        </div>
        <!--End row -->
        <div class="row">
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Et ius tota recusabo democritum?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Mediocritatem sea ex, nec id agam?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Te pri facete latine salutandi?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div class=" container_gray_line" id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter"
                        class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email"
                            class="form-control">
                        <button id="submit-newsletter" class="button"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End newsletter_container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/admission.blade.php ENDPATH**/ ?>