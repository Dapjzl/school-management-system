@extends('dashboard.layouts.admin-layout')
@section('title', 'Exam Schedule')

@section('content')


<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Exam</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Schedule</li>
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
                                            <th>SN</th>
                                            <th>Exam Title</th>
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Room No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Emmett Johnson</td>
                                            <td>Annual</td>
                                            <td>4 Sept 2018</td>
                                            <td>IN-3794</td>
                                            <td>credit card</td>
                                            <td><span class="tag tag-orange">pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Fees-add">
                    <div class="row clearfix">
                        <form action="{{ route('addSchedule') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                            @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Exam Schedule</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-sm-12">
                                            <label>Exam Type</label>
                                            <select class="form-control show-tick" name="exam_type">
                                                <option value="">-- Select --</option>
                                                <option value="10">Male</option>
                                                <option value="20">Female</option>
                                            </select>
                                            @error('exam_type') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Class</label>
                                        <select class="form-control show-tick" name="class">
                                            <option value="">-- Select --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                        @error('class') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Subject</label>
                                        <select class="form-control show-tick" name="subject">
                                            <option value="">-- Select --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                        @error('subject') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Exam Date</label>
                                            <input data-provide="datepicker" data-date-autoclose="true" name="exam_date" class="form-control" placeholder="Exam Date">
                                        </div>
                                        @error('exam_date') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input type="text" class="form-control" name="start_time" placeholder="Start Time">
                                        </div>
                                        @error('start_time') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input type="text" class="form-control" name="end_time" placeholder=" End Time">
                                        </div>
                                        @error('end_time') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Room No</label>
                                            <input type="text" class="form-control" name="room_no" placeholder="Room Number">
                                        </div>
                                        @error('room_no') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Note</label>
                                            <textarea rows="4" class="form-control no-resize" name="note" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        @error('note') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


@endsection
