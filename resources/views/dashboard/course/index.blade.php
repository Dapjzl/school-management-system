@extends('dashboard.layouts.admin-layout')
@section('title', 'Course')

@section('content')

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title"> Courses</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
            <div class="tab-pane active" id="Fees-all">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Course</th>
                                        <th>Code</th>
                                        <th>Unit</th>
                                        <th>Lecturer</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $key => $course )
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$course->course}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->unit}}</td>
                                        <td>{{$course->lecturer}}</td>
                                        <td>{{$course->description}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form action="{{ route('addCourse') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Course Information</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                <input name="course" type="text" class="form-control" placeholder="Course Name">
                                            </div>
                                            @error('course') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Course Code</label>
                                                <input name="course_code" type="text" class="form-control" placeholder="Course Code">
                                            </div>
                                            @error('course_code') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Course Unit</label>
                                                <input name="unit" type="text" class="form-control" placeholder="Course Unit">
                                            </div>
                                            @error('unit') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Assign Lecturer</label>
                                                <select class="form-control show-tick" name="lecturer">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($lecturers as $lecturers)
                                                    <option>{{$lecturers->firstname.' '.$lecturers->lastname}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            @error('unit') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mt-3">
                                                <label>Messages</label>
                                                <textarea name="description" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
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
@endsection
