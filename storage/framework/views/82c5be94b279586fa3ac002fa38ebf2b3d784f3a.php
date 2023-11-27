<?php $__env->startSection('title', 'Complaints'); ?>

<?php $__env->startSection('content'); ?>

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Complain</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complain</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Fees-add">Add Fees</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Fees-all">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>Roll No.</th>
                                        <th>Student Name</th>
                                        <th>Fees Type</th>
                                        <th>Date</th>
                                        <th>Invoice No.</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>12 Jan 2018</td>
                                        <td>IN-4578</td>
                                        <td>cash</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                        <td>248$</td>
                                    </tr>
                                    <tr>
                                        <td>112</td>
                                        <td>Gladys Smith</td>
                                        <td>Tuition</td>
                                        <td>12 Feb 2018</td>
                                        <td>IN-3695</td>
                                        <td>cheque</td>
                                        <td><span class="tag tag-orange">pending</span></td>
                                        <td>124$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form method="POST" action="<?php echo e(route('addComplain')); ?>"  enctype="multipart/form-data" id="apply_online">
                    <?php echo csrf_field(); ?>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Basic Information</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                            <label>Complain User Type</label>
                                            <select class="form-control show-tick" name="cuser_type">
                                                <option value="">-- Select --</option>
                                                <option value="10">Male</option>
                                                <option value="20">Female</option>
                                            </select>
                                            <?php $__errorArgs = ['cuser_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Complain Type</label>
                                        <select class="form-control show-tick" name="complain_type">
                                            <option value="">-- Select --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                        <?php $__errorArgs = ['complain_type'];
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
                                            <label>Complain Date</label>
                                            <input data-provide="datepicker" name="complain_date" data-date-autoclose="true" class="form-control" placeholder="Complain Date">
                                        </div>
                                        <?php $__errorArgs = ['complain_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Complain</label>
                                            <textarea rows="4" name="complain" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        <?php $__errorArgs = ['complain'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class=" text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
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

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/complain/index.blade.php ENDPATH**/ ?>