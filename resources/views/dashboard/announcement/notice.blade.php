@extends('dashboard.layouts.admin-layout')
@section('title', 'Notice')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Announcement</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Notice</li>
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
                                        <th></th>
                                        <th>Notice Title</th>
                                        <th>Date</th>
                                        <th>Notice For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notices as $key -> $notice)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$notice->notice_title}}</td>
                                        <td>{{$notice->date}}</td>
                                        <td>{{$notice->notice_for}}</td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form action="{{ route('addNotice') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                    @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Notice</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Notice Title</label>
                                            <input type="text" class="form-control" name="notice_title" placeholder="Notice Title">
                                        </div>
                                        @error('notice_title') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input data-provide="datepicker" data-date-autoclose="true" name="date" class="form-control" placeholder="Date">
                                        </div>
                                        @error('date') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Notice For</label>
                                            <input type="text" class="form-control" name="notice_for" placeholder="Lecturer">
                                        </div>
                                        @error('notice_for') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Notice</label>
                                            <textarea rows="4" name="note" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
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
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
