<?php $__env->startSection('title', 'Holiday'); ?>

<?php $__env->startSection('content'); ?>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Registered Students</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Students</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                <?php if(Auth::user()->utype =="ADM"): ?>
                <?php endif; ?>
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
                                        <th>SN</th>
                                        <th></th>
                                        <th>Student Name</th>
                                        <th>Student Type</th>
                                        <th>Admission Date</th>
                                        <th>Admission Number</th>
                                        <th>Reg No:.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $regs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><img src="<?php echo e($reg->student_img); ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%;"></td>
                                        <td> <?php echo e($reg->firstname.' '.$reg->lastname); ?></td>
                                        <td><?php echo e($reg->studtype); ?></td>
                                        <td><?php echo e($reg->admitdate); ?></td>
                                        <td><?php echo e($reg->admitno); ?></td>
                                        <td><?php echo e($reg->regno); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('dashboard.transcript')); ?>" title="View Transcript">
                                                <i class="fa fa-file"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/student/registered.blade.php ENDPATH**/ ?>