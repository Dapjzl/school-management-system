<?php $__env->startSection('title', 'Dashboard::Lecturer'); ?>

<?php $__env->startSection('content'); ?>

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Lecturers</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lecturers</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                <?php if(Auth::user()->utype =="ADM"): ?>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pro-add">Add New</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane active" id="pro-all">
                    <div class="table-responsive">
                        <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 border-style mb-0">
                            <tbody>
                                <tr>
                                    <td class="w60">
                                        <div class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">
                                            <span>GS</span>
                                        </div>
                                    </td>
                                    <td><div class="font-15">Gladys J Smith</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Computer</span></td>
                                    <td>BCA, MCA</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar1.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Alan Johnson</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Mechanical</span></td>
                                    <td>MCA</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-warning">Part-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar2.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">James A Johnson</div></td>
                                    <td><span>(417) 646-1636</span></td>
                                    <td><span class="text-muted">Mechanical</span></td>
                                    <td>BCA</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar3.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Ken Smith</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Mechanical</span></td>
                                    <td>B.E.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar4.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Alice A Smith</div></td>
                                    <td><span>(417) 646-5023</span></td>
                                    <td><span class="text-muted">Computer</span></td>
                                    <td>M.E.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar5.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Gladys J Smith</div></td>
                                    <td><span>(417) 646-9207</span></td>
                                    <td><span class="text-muted">Mechanical</span></td>
                                    <td>B.B.A., P.H.D.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar6.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Gerald K Smith</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Mathematics</span></td>
                                    <td>M.COM, M.Ed.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar7.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Gladys J Smith</div></td>
                                    <td><span>(417) 646-9207</span></td>
                                    <td><span class="text-muted">Mechanical</span></td>
                                    <td>M.E.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-warning">Part-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar8.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Danny M Johnson</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Mathematics</span></td>
                                    <td>M.E.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar9.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Patricia Smith</div></td>
                                    <td><span>(417) 646-8377</span></td>
                                    <td><span class="text-muted">Science</span></td>
                                    <td>B.Sc., M.Sc.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-warning">Part-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">
                                        <img class="avatar" src="../assets/images/xs/avatar10.jpg" alt="">
                                    </td>
                                    <td><div class="font-15">Gladys J Smith</div></td>
                                    <td><span>(417) 646-9207</span></td>
                                    <td><span class="text-muted">Science</span></td>
                                    <td>B.Sc., M.Sc.</td>
                                    <td><strong>04 Jan, 2019</strong></td>
                                    <td><span class="tag tag-success">Full-time</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="pro-add">
                    <form action="<?php echo e(route('apply')); ?>"  enctype="multipart/form-data" id="apply_online" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="firstname">
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="lastname">
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
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true" name="date_of_birth" class="form-control" placeholder="Date of Birth">
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
                                            <div class="col-md-3 col-sm-12">
                                                <label>Gender</label>
                                                <select class="form-control show-tick">
                                                    <option value="">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" class="form-control" name="department">
                                                </div>
                                                <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>National ID</label>
                                                    <input type="text" class="form-control" name="NIN">
                                                </div>
                                                <?php $__errorArgs = ['NIN'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone">
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
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Responsibility</label>
                                                    <input type="text" class="form-control" name="responsibility">
                                                </div>
                                                <?php $__errorArgs = ['responsibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                    <label>Blood Group</label>
                                                    <select class="form-control show-tick">
                                                        <option value="">-- Select --</option>
                                                        <option value="10">Male</option>
                                                        <option value="20">Female</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Religion</label>
                                                    <input type="text" class="form-control" name="religion">
                                                </div>
                                                <?php $__errorArgs = ['religion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Address </label>
                                                    <input type="text" class="form-control" name="address">
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
                                        </div>
                                            <div class="card-header">
                                            <h3 class="card-title">Academic Information</h3>
                                            </div>
                                                  <div class="row clearfix">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" name="email">
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
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Passsword</label>
                                                            <input type="text" class="form-control" name="password">
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
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Salary Pay Grade</label>
                                                            <input type="text" class="form-control" name="salary_pay_grade">
                                                        </div>
                                                        <?php $__errorArgs = ['salary_pay_grade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Salary type</label>
                                                            <input type="text" class="form-control" name="salary_type">
                                                        </div>
                                                        <?php $__errorArgs = ['salary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <input type="text" class="form-control" name="role">
                                                        </div>
                                                        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <B>Resume</B>
                                                        <div class="form-group mt-2 mb-3">
                                                            <input type="file" class="dropify" name="resume">
                                                            <small id="fileHelp" class="form-text text-muted"></small>
                                                        </div>
                                                        <?php $__errorArgs = ['resume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                  </div>


                                                
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/lecturer/index.blade.php ENDPATH**/ ?>