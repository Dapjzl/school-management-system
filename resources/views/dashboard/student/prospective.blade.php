@extends('dashboard.layouts.admin-layout')
@section('title', 'Prospective Students')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Prospective Students</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"> Students</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                @if (Auth::user()->utype =="ADM")
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Fees-add">Add New</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane" id="Fees-all">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Student Name</th>
                                        <th>Phone</th>
                                        <th>Registration No.:</th>
                                        <th>Course</th>
                                        <th>Level</th>
                                        <th>Student Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pros as $key => $pro )
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><img src="{{$pro->student_img}}" alt="" style="height: 30px; width: 30px; border-radius: 50%;"></td>
                                        <td>{{$pro->firstname.' '.$pro->lastname}}</td>
                                        <td>{{$pro->phone}}</td>
                                        <td>{{$pro->regno}}</td>
                                        <td>{{$pro->first_choice}}</td>
                                        <td>{{$pro->class}}</td>
                                        <td>{{$pro->studtype}}</td>
                                        <td><span class="tag tag-green">{{$pro->status}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane active" id="Fees-add">
            <form method="POST" action="{{ route('addProspect') }}"  enctype="multipart/form-data" id="apply_online">
                    @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Academic Programme</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Select a Course </label>
                                            <select class="form-control show-tick" name="course">
                                                <option value="">-- Select --</option>
                                                <option>Mathematics</option>
                                                <option>English</option>
                                            </select>
                                            @error('course') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                        @error('firstname') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lastname">
                                        </div>
                                        @error('lastname') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input data-provide="datepicker" data-date-autoclose="true" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                                        </div>
                                        @error('date_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label>Gender</label>
                                        <select class="form-control show-tick" name="gender">
                                            <option value="">-- Select --</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        @error('gender') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>National ID</label>
                                            <input type="text" class="form-control" name="NIN">
                                        </div>
                                        @error('NIN') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone">
                                        </div>
                                        @error('phone') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Your Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        @error('email') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Admission Date</label>
                                            <input data-provide="datepicker" data-date-autoclose="true" name="admitDate" class="form-control" placeholder="Admission Date">                                        </div>
                                        @error('admitDate') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Admission NO.</label>
                                            <input type="text" class="form-control" name="admitNo">
                                        </div>
                                        @error('admitNo') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion </label>
                                            <input type="text" class="form-control" name="religion">
                                        </div>
                                        @error('religion') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input type="text" class="form-control" name="nationality">
                                        </div>
                                        @error('nationality') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="state">
                                        </div>
                                        @error('state') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>LGA </label>
                                            <input type="text" class="form-control" name="lga">
                                        </div>
                                        @error('lga') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Postal Code </label>
                                            <input type="text" class="form-control" name="postal">
                                        </div>
                                        @error('postal') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Address </label>
                                            <input type="text" class="form-control" name="address">
                                        </div>
                                        @error('address') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2 mb-3">
                                            <label>Student Passport</label>
                                            <input type="file" class="dropify" name="passport">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div>
                                        @error('passport') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-header">
                                        <h3 class="card-title">Parent Information</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Parent First Name</label>
                                                <input type="text" class="form-control" name="pfirstname">
                                            </div>
                                            @error('pfirstname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Parent Last Name</label>
                                                <input type="text" class="form-control" name="plastname">
                                            </div>
                                            @error('plastname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input data-provide="datepicker" data-date-autoclose="true" name="pdate_of_birth"class="form-control" placeholder="Date of Birth">
                                            </div>
                                            @error('pdate_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label>Gender</label>
                                            <select class="form-control show-tick" name="pgender">
                                                <option>-- Select --</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="pphone">
                                            </div>
                                            @error('pphone') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" name="pprofession" class="form-control" placeholder="Profession">
                                            </div>
                                            @error('pprofession') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="paddress" class="form-control" placeholder="Address">
                                            </div>
                                            @error('paddress') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Guardian Information</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Guardian First Name</label>
                                                <input type="text" class="form-control" name="guardfname">
                                            </div>
                                            @error('guardfname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Guardian Last Name</label>
                                                <input type="text" class="form-control" name="guardlname">
                                            </div>
                                            @error('guardlname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input data-provide="datepicker" data-date-autoclose="true" name="gdate_of_birth" class="form-control" placeholder="Date of Birth">
                                            </div>
                                            @error('gdate_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label>Gender</label>
                                            <select class="form-control show-tick" name="ggender">
                                                <option value="">-- Select --</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="gphone">
                                            </div>
                                            @error('gphone') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" name="gprofession" class="form-control" placeholder="Profession">
                                            </div>
                                            @error('gprofession') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="gaddress"class="form-control" placeholder="Address">
                                            </div>
                                            @error('gadress') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="card-header">
                                    <h3 class="card-title">Academic Information</h3>
                                    </div>
                                          <div class="row clearfix">
                                            <div class="col-md-3 col-sm-12">
                                                <label>Student Type</label>
                                                <select class="form-control show-tick" name="stype">
                                                    <option value="">-- Select --</option>
                                                    <option>Undergraduate</option>
                                                    <option>Masters</option>
                                                    <option>Doctor</option>
                                                </select>
                                                @error('stype') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Class</label>
                                                <select class="form-control show-tick" name="sclass">
                                                    <option value="">-- Select --</option>
                                                    <option> 100 Level</option>
                                                    <option> 200 Level</option>
                                                    <option> 300 Level</option>
                                                    <option> 400 Level</option>
                                                    <option> 500 Level</option>
                                                </select>
                                                @error('sclass') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Section</label>
                                                <select class="form-control show-tick" name="ssection">
                                                    <option value="">-- Select --</option>
                                                    <option>1st Semester</option>
                                                    <option>2nd Semester</option>
                                                </select>
                                                @error('ssection') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Group</label>
                                                <select class="form-control show-tick" name="sgroup">
                                                    <option value="">-- Select --</option>
                                                    <option>Group A</option>
                                                    <option>Group B</option>
                                                    <option>Group C</option>
                                                </select>
                                                @error('sgroup') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Roll No</label>
                                                <select class="form-control show-tick" name="rollno">
                                                    <option value="">-- Select --</option>
                                                    <option>Role 001</option>
                                                    <option>Role 002</option>
                                                </select>
                                                @error('rollno') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Registration No</label>
                                                {{-- <select class="form-control show-tick" name="regno">
                                                    <option value="">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select> --}}
                                                <input type="text" name="regno"class="form-control" placeholder="Registration Number">
                                                @error('regno') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <label>Discount</label>
                                                <input type="text" name="discount"class="form-control" placeholder="Discount">
                                                {{-- <select class="form-control show-tick" name="discount">
                                                    <option value="">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select> --}}
                                                @error('discount') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Second Language</label>
                                                    <input type="text" name="slanguage" class="form-control" placeholder="Second Language">
                                                </div>
                                                @error('slanguage') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label> Waec/Neco/GCE </label>
                                                    <input type="file" class="dropify" name="waec">
                                                </div>
                                                @error('waec') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label> BSC </label>
                                                    <input type="file" class="dropify" name="bsc">
                                                </div>
                                                @error('bsc') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                          </div>
                                            <div class="card-header">
                                                <h3 class="card-title">Previous School Information</h3>
                                                </div>
                                                      <div class="row clearfix">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Previous School </label>
                                                                <input type="text" class="form-control" name="prevschool" placeholder="Previous School">
                                                            </div>
                                                            @error('prevschool') <p class=" text-danger">{{ $message }}</p> @enderror
                                                        </div>

                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Previous Class </label>
                                                                    <input type="text" class="form-control" name="prevclass" placeholder="Previous Class">
                                                                </div>
                                                                @error('prevclass') <p class=" text-danger">{{ $message }}</p> @enderror
                                                            </div>

                                                            <div class="col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Transfer Certificate </label>
                                                                    <input type="file" class="dropify" name="transfercert">
                                                                </div>
                                                                @error('transfercert') <p class=" text-danger">{{ $message }}</p> @enderror
                                                            </div>
                                    {{-- <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Messages</label>
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div> --}}
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

@endsection
