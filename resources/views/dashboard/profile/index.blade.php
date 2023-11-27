@extends('dashboard.layouts.admin-layout')
@section('title', 'Profile')

@section('content')

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Profile</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-add">My Profile</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Fees-add">
                <form method="POST" action="{{ route('addProspect') }}"  enctype="multipart/form-data" id="apply_online">
                    @csrf
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
                                            <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                        </div>
                                        @error('firstname') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" value="{{$user->lastname}}" readonly>
                                        </div>
                                        @error('lastname') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control" value="{{$user->dob}}" readonly>
                                        </div>
                                        @error('date_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label>Gender</label>
                                        <input type="text" class="form-control" value="{{$user->gender}}" readonly>
                                        @error('gender') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>National ID</label>
                                            <input type="text" class="form-control" value="{{$user->NIN}}" readonly>
                                        </div>
                                        @error('NIN') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{$user->phone}}" readonly>
                                        </div>
                                        @error('phone') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Your Email</label>
                                            <input type="text" class="form-control" value="{{$user->email}}" readonly>
                                        </div>
                                        @error('email') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Admission Date</label>
                                            <input type="text" class="form-control" value="{{$user->admitdate}}" readonly>
                                        </div>
                                        @error('admitDate') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Admission No.</label>
                                            <input type="text" class="form-control" value="{{$user->admitno}}" readonly>
                                        @error('admitDate') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <input type="text" class="form-control" value="{{$user->religion}}" readonly>
                                        @error('admitDate') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input type="text" class="form-control" value="{{$user->nationality}}" readonly>
                                        </div>
                                        @error('nationality') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" value="{{$user->state}}" readonly>
                                        </div>
                                        @error('state') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>LGA </label>
                                            <input type="text" class="form-control" value="{{$user->lga}}" readonly>
                                        </div>
                                        @error('lga') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Postal Code </label>
                                            <input type="text" class="form-control" value="{{$user->postal}}" readonly>
                                        </div>
                                        @error('postal') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Address </label>
                                            <input type="text" class="form-control" value="{{$user->address}}" readonly>
                                        </div>
                                        @error('address') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    {{-- <div class="col-sm-12">
                                        <div class="form-group mt-2 mb-3">
                                            <label>Student Passport</label>
                                            <input type="file" class="dropify">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div>
                                        @error('passport') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <div class="card-header">
                                        <h3 class="card-title">Parent Information</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Parent First Name</label>
                                                <input type="text" class="form-control" value="{{$user->pfirstname}}" readonly>
                                            </div>
                                            @error('pfirstname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Parent Last Name</label>
                                                <input type="text" class="form-control" value="{{$user->plastname}}" readonly>
                                            </div>
                                            @error('plastname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" value="{{$user->pdob}}" readonly>
                                            </div>
                                            @error('pdate_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('pphone') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('pprofession') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
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
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('guardfname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Guardian Last Name</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('guardlname') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('gdate_of_birth') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('gphone') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                            </div>
                                            @error('gprofession') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
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
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('stype') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Class</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('sclass') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Section</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('ssection') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Group</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('sgroup') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Roll No</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('rollno') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Registration No</label>
                                                {{-- <select class="form-control show-tick" name="regno">
                                                    <option value="{{$user->firstname}}">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select> --}}
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                @error('regno') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <label>Discount</label>
                                                <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                {{-- <select class="form-control show-tick" name="discount">
                                                    <option value="{{$user->firstname}}">-- Select --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select> --}}
                                                @error('discount') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Second Language</label>
                                                    <input type="text" class="form-control" value="{{$user->firstname}}" readonly>
                                                </div>
                                                @error('slanguage') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            {{-- <div class="col-md-12 col-sm-12">
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
                                            </div> --}}
                                          </div>
                                            <div class="card-header">
                                                <h3 class="card-title">Previous School Information</h3>
                                                </div>
                                                      <div class="row clearfix">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Previous School </label>
                                                                <input type="text" class="form-control" name="prevschool" readonly placeholder="Previous School">
                                                            </div>
                                                            @error('prevschool') <p class=" text-danger">{{ $message }}</p> @enderror
                                                        </div>

                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Previous Class </label>
                                                                    <input type="text" class="form-control" name="prevclass" readonly placeholder="Previous Class">
                                                                </div>
                                                                @error('prevclass') <p class=" text-danger">{{ $message }}</p> @enderror
                                                            </div>

                                                            {{-- <div class="col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Transfer Certificate </label>
                                                                    <input type="file" class="dropify" name="transfercert">
                                                                </div>
                                                                @error('transfercert') <p class=" text-danger">{{ $message }}</p> @enderror
                                                            </div> --}}
                                    {{-- <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Messages</label>
                                            <textarea rows="4" class="form-control no-resize" readonly placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-12">
                                        {{-- <a href="{{route('dashboard.updateprofile')}}" class="btn btn-primary">Update</a> --}}
                                        <button class="btn btn-primary"> Update</button>
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
