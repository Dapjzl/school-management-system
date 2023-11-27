<?php $__env->startSection('title', 'Holiday'); ?>

<?php $__env->startSection('content'); ?>
  <!-- Start Page title and tab -->
  <div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Generate Card</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Generate Card</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Dep-add">Generate Card</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Dep-add-Boot">
                <div class="card" style="min-height: 500px;">
                    <div class="card-header">
                        <h3 class="card-title">Add Department</h3>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <form class="card-body">
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Student Name <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <!-- <input type="text" class="form-control"> -->
                                <select name="" class="form-control">
                                    <option selected disabled value="">-- select --</option>
                                    <option value="">Dapo</option>
                                    <option value="">John</option>
                                    <option value="">Ayomide</option>
                                    <option value="">Seun</option>
                                    <option value="">Simile</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row" style="padding: 10px; display: flex; justify-content: center; align-items: center; background: rgba(0,0,0,0.1);">
                          <div class="row">
                            <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fetch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <div class="col-md-4">
                                <div class="card" style="width: 17rem;">
                                    <div class="card-body23">
                                        <div class="cardHead" style="display: inline-flex; justify-content: flex-start; width: 269.86px; margin: -3px 0 0 -4px; border-radius: 10px 10px 0 0; background: #8E0E00; background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00); background: linear-gradient(to right, #1F1C18, #8E0E00);">
                                            <div class="schlogo" style="width: 80px; display: flex; justify-content: center; align-items: center; padding: 5px 0;">
                                                <img src="<?php echo e('../../../../public/backend/assets/images/user.png'); ?>" style="max-width: 70px; border-radius: 10px;" alt="" srcset="">
                                            </div>
                                            <div class="schinfo" style="padding: 7px 0 0 17px; line-height: 11px; display: flex; flex-direction: column; align-items: center;">
                                                <h5 style="color: #17a2b8; font-size: 15px;">Corona School</h5>
                                                <small style="font-size: 9px; margin-top: -9px; color: white;">25, Association Avenue, Ilupeju, Lagos</small>
                                                <small style="font-size: 8px; color: white;"><span style="color: #17a2b8;">Tel:</span>  0806 935 6362 - 0903 111 0888</small>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0rem;">
                                        <div class="cardInner">
                                            <h3 style="font-weight: bold; padding: 3px 20px; border-radius: 10px; font-size: 7px; color: #000; text-align: center; margin-top: -14px;">Student matric: <span style="color: #17a2b8;"><?php echo e($fetch->regno); ?></span></h3>
                                            <div class="cardHead" style="display: inline-flex; justify-content: flex-start; width: 100%;">
                                                <div class="schlogo" style="width: 70px;">
                                                    <img src="<?php echo e($fetch->student_img); ?>" style="min-width: 80px; min-height: 81px; position: relative; top: -8px; border-radius: 10px;" alt="" srcset="">
                                                </div>
                                                <div class="schinfo" style="padding: 7px 0 0 17px; line-height: 4px; display: flex; flex-direction: column;">
                                                    <div class="det">
                                                        <p style="font-size: 10px; display: inline-block;"><b>Name: </b></p>
                                                        <p style="font-size: 8px; display: inline-block;"><?php echo e($fetch->firstname); ?></p>
                                                    </div>
                                                    <div class="det">
                                                        <p style="font-size: 10px; display: inline-block;"><b>Department: </b></p>
                                                        <p style="font-size: 8px; display: inline-block;"><?php echo e($fetch->firstname); ?></p>
                                                    </div>
                                                    <div class="det">
                                                        <p style="font-size: 10px; display: inline-block;"><b>Type: </b></p>
                                                        <p style="font-size: 8px; display: inline-block;"><?php echo e($fetch->studtype); ?></p>
                                                    </div>
                                                    <div class="det">
                                                        <p style="font-size: 10px; display: inline-block;"><b>Gender: </b></p>
                                                        <p style="font-size: 8px; display: inline-block;"><?php echo e($fetch->gender); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cardFoot">
                                            <small>Dean CCED</small>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/dashboard/identitycard/index.blade.php ENDPATH**/ ?>