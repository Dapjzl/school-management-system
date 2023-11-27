@extends('dashboard.layouts.admin-layout')
@section('title', 'Exam Suggestion')

@section('content')


<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Exam</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Suggestion</li>
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
                                        <th>Suggestion Title</th>
                                        <th>Exam Title</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Corrine Johnson</td>
                                        <td>Annual</td>
                                        <td>124$</td>
                                        <td><span class="tag tag-green">paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Gladys Smith</td>
                                        <td>Annual$</td>
                                        <td>124$</td>
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
                            <form action="{{ route('addSuggestion') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                                @csrf
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
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Suggestion Title</label>
                                                            <input type="text" class="form-control" name="suggestion_title" placeholder="Suggestion Title">
                                                        </div>
                                                        @error('suggestion_title') <p class=" text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label>Exam</label>
                                                        <select class="form-control show-tick" name="exam">
                                                            <option value="">-- Select --</option>
                                                            <option value="10">Male</option>
                                                            <option value="20">Female</option>
                                                        </select>
                                                        @error('exam') <p class=" text-danger">{{ $message }}</p> @enderror
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
                                                            <option value="10">Staff</option>
                                                            <option value="20">Lecturer</option>
                                                        </select>
                                                        @error('subject') <p class=" text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <B>Suggestion</B>
                                                        <div class="form-group mt-2 mb-3">
                                                            <input type="file" class="dropify" name="suggestion">
                                                            <small id="fileHelp" class="form-text text-muted"></small>
                                                        </div>
                                                        @error('suggestion') <p class=" text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mt-3">
                                                            <label>Note</label>
                                                            <textarea rows="4" class="form-control no-resize" name="note" placeholder="Please type what you want..."></textarea>
                                                        </div>
                                                        @error('note') <p class=" text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                </div>
                                                        {{-- <div class="form-group mt-3">
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
