<?php $__env->startSection('title', 'Students'); ?>

<?php $__env->startSection('content'); ?>

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Welcome, <?php echo e(Auth::user()->firstname); ?></h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
            </div>
            
        </div>
    </div>
</div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="row clearfix row-deck">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            
                            <a href="<?php echo e(route('dashboard.profile', ['user'=>Auth::user()->id])); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-address-book text-success"></i>
                                <span>Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo e(route('dashboard.course')); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-book text-info"></i>
                                <span>Courses</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            
                            <a href="<?php echo e(route('dashboard.transcript')); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-file text-primary"></i>
                                <span>Transcript</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo e(route('dashboard.assignment')); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-folder text-success"></i>
                                <span>Assignments</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo e(route('dashboard.attendance')); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-calendar text-warning"></i>
                                <span>Attendance</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo e(route('dashboard.announcement')); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-bullhorn text-danger"></i>
                                <span>Annoucement</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                    <div class="row clearfix">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Examination Report</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="font-12 mb-2"><span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span></div>
                                        <div class="selectgroup w250">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="intensity" value="low" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">1D</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="intensity" value="medium" class="selectgroup-input">
                                                <span class="selectgroup-button">1W</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="intensity" value="high" class="selectgroup-input">
                                                <span class="selectgroup-button">1M</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="intensity" value="veryhigh" class="selectgroup-input">
                                                <span class="selectgroup-button">1Y</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="apex-chart-line-column"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6 mb-2">
                                            <div class="clearfix">
                                                <div class="float-left"><strong>Scores</strong></div>
                                                <div class="float-right"><small class="text-muted">35%</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-indigo" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-uppercase font-10">Average score</span>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-2">
                                            <div class="clearfix">
                                                <div class="float-left"><strong>Average</strong></div>
                                                <div class="float-right"><small class="text-muted">61%</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-uppercase font-10">Average course performance</span>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-2">
                                            <div class="clearfix">
                                                <div class="float-left"><strong>Fees</strong></div>
                                                <div class="float-right"><small class="text-muted">87%</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-uppercase font-10">Amount paid till date</span>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-2">
                                            <div class="clearfix">
                                                <div class="float-left"><strong>Course Completion</strong></div>
                                                <div class="float-right"><small class="text-muted">42%</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-uppercase font-10">Course completion</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix row-deck">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Exam Toppers</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="height: 310px;">
                                    <table class="table card-table table-vcenter text-nowrap table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Name</th>
                                                <th>Marks</th>
                                                <th>Average</th>
                                            </tr>
                                            <tr>
                                                <td>SCE 101</td>
                                                <td>
                                                    <div>Merri Diamond</div>
                                                    <div class="text-muted">Science</div>
                                                </td>
                                                <td>199</td>
                                                <td>99.00</td>
                                            </tr>
                                            <tr>
                                                <td>MEC 103</td>
                                                <td>
                                                    <div>Sara Hopkins</div>
                                                    <div class="text-muted">Mechanical</div>
                                                </td>
                                                <td>197</td>
                                                <td>98.00</td>
                                            </tr>
                                            <tr>
                                                <td>MCA 104</td>
                                                <td>
                                                    <div>Allen Collins</div>
                                                    <div class="text-muted">M.C.A.</div>
                                                </td>
                                                <td>197</td>
                                                <td>98.00</td>
                                            </tr>
                                            <tr>
                                                <td>ART 107</td>
                                                <td>
                                                    <div>Erin Gonzales</div>
                                                    <div class="text-muted">Arts</div>
                                                </td>
                                                <td>194</td>
                                                <td>97.00</td>
                                            </tr>
                                            <tr>
                                                <td>COM 102</td>
                                                <td>
                                                    <div>Claire Peters</div>
                                                    <div class="text-muted">Computer</div>
                                                </td>
                                                <td>192</td>
                                                <td>95.00</td>
                                            </tr>
                                            <tr>
                                                <td>MAT 105</td>
                                                <td>
                                                    <div>Claire Peters</div>
                                                    <div class="text-muted">Mathematics</div>
                                                </td>
                                                <td>192</td>
                                                <td>95.00</td>
                                            </tr>
                                            <tr>
                                                <td>GNS 109</td>
                                                <td>
                                                    <div>Claire Peters</div>
                                                    <div class="text-muted">General</div>
                                                </td>
                                                <td>191</td>
                                                <td>95.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="font-14"><span>Recent exam record and performances. <a href="<?php echo e(route('dashboard.transcript')); ?>">View All</a></span></div>
                                    <div>
                                        <a href="<?php echo e(route('dashboard.transcript')); ?>" class="btn btn-primary">Transcript</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Performance</h3>
                                </div>
                                <div class="card-body">
                                    <div id="apex-radar-multiple-series"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="admin-Activity" role="tabpanel">
                    <div class="row clearfix row-deck">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Mail</h3>
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text w80">To:</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">CC BCC</span>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1 mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text w80">Subject:</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="summernote">
                                        Hi there,
                                        <br/>
                                        <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                        <br/>
                                        <p>Thank you!</p>
                                        <h6>Summer Note</h6>
                                    </div>
                                    <button class="btn btn-default mt-3">Send</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">University Stats</h3>
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-lg-4 col-4 border-right">
                                            <label class="mb-0 font-10">Department</label>
                                            <h4 class="font-20 font-weight-bold">05</h4>
                                        </div>
                                        <div class="col-lg-4 col-4 border-right">
                                            <label class="mb-0 font-10">Total Teacher</label>
                                            <h4 class="font-20 font-weight-bold">43</h4>
                                        </div>
                                        <div class="col-lg-4 col-4">
                                            <label class="mb-0 font-10">Total Student</label>
                                            <h4 class="font-20 font-weight-bold">267</h4>
                                        </div>
                                    </div>
                                    <table class="table table-striped mt-4">
                                        <tbody><tr>
                                            <td>
                                                <label class="d-block">Mechanical Engineering<span class="float-right">43%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Business Analysis - BUS <span class="float-right">27%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Computer Technology - CT <span class="float-right">81%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Management - MGT <span class="float-right">61%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 61%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Science <span class="float-right">77%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                                <div class="card-footer">
                                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="table-responsive todo_list">
                                    <table class="table table-hover text-nowrap table-striped table-vcenter mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th class="w150 text-right">Due</th>
                                                <th class="w100">Priority</th>
                                                <th class="w80 text-center"><i class="icon-user"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">Report Panel Usag</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 12-2019</td>
                                                <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                                <td>
                                                    <span class="avatar avatar-pink"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Report Panel Usag</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 18-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                <td>
                                                    <img src="backend/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">New logo design for Angular Admin</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 02-2019</td>
                                                <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                                <td>
                                                    <img src="backend/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">Report Panel Usag</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 12-2019</td>
                                                <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                                <td>
                                                    <span class="avatar avatar-pink"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Report Panel Usag</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 18-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                <td>
                                                    <img src="backend/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">New logo design for Angular Admin</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 02-2019</td>
                                                <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                                <td>
                                                    <span class="avatar avatar-blue"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 20-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                <td>
                                                    <img src="backend/assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 20-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                <td>
                                                    <img src="backend/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/school/resources/views/dashboard/student.blade.php ENDPATH**/ ?>