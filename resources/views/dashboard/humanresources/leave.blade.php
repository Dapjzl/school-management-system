@extends('dashboard.layouts.admin-layout')
@section('title', 'Leave')

@section('content')

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Leave</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leave</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Apply-Leave">Apply</a></li>
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
            <div class="tab-pane active" id="Fees-all">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Applicant Name</th>
                                        <th>Applicant Type</th>
                                        <th>Leave Type</th>
                                        <th>Leave From</th>
                                        <th>Leave To</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leaves as $key -> $leave)
                                    <tr>
                                        <td></td>
                                        <td>{{$leave->applicant}}</td>
                                        <td>{{$leave->applicantType}}</td>
                                        <td>{{$leave->leaveType}}</td>
                                        <td>{{$leave->leaveFrom}}</td>
                                        <td>{{$leave->leaveTo}}</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Apply-Leave">
                <form method="POST" action="{{route('addLeaveapp')}}">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Leave Application</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Applicant Name</label>
                                                <input type="text" name="applicant" class="form-control" value="{{Auth::user()->firstname}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Applicant Type</label>
                                                <input type="text" name="applicantType" class="form-control" value="{{Auth::user()->utype}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Leave Type</label>
                                                <select class="form-control show-tick" name="leaveType">
                                                    <option value="">-- Leave --</option>
                                                    <option >Casual</option>
                                                    <option >Study</option>
                                                </select>
                                            </div>
                                            @error('leaveType') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label>Leave From</label>
                                            {{-- <input type="text" name="leaveFrom" class="form-control" readonly> --}}
                                            <input name="leaveFrom" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Leave From">
                                            @error('leaveFrom') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Leave to</label>
                                                <input name="leaveTo" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Leave To">
                                                @error('leaveTo') <p class=" text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group mt-2 mb-3">
                                                <label>Leave Attachment</label>
                                                <input type="file" name="attach" class="dropify">
                                                <small id="fileHelp" class="form-text text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mt-3">
                                                <label>Messages</label>
                                                <textarea rows="4" name="leaveReason" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                @error('leaveReason') <p class=" text-danger">{{ $message }}</p> @enderror
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
            <div class="tab-pane" id="Fees-add">
                <form method="POST" action="{{route('addLeavetype')}}">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Leave Information</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Leave Name</label>
                                                <input type="text" name="leave_name" class="form-control" placeholder="Maternity Leave">
                                                @error('leave_name') <p class=" text-danger">{{ $message }}</p> @enderror
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
@endsection
