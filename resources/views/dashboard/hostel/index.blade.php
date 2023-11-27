@extends('dashboard.layouts.admin-layout')
@section('title', 'Hostel')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">College Hostel</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hostel</li>
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
                                        <th>Hostel Name</th>
                                        <th>Hostel Type</th>
                                        <th>Address</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hostels as $key=>$hostel )
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$hostel->name}}</td>
                                        <td>{{$hostel->type}}</td>
                                        <td>{{$hostel->address}}</td>
                                        <td>{{$hostel->note}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form action="{{ route('addHostel') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                    @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Hostel Name</label>
                                            <input type="text" name="hostel_name" class="form-control" placeholder="Hostel Name">
                                        </div>
                                        @error('hostel_type') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Hostel Type</label>
                                            <input type="text" name="hostel_type" class="form-control" placeholder="Hostel Type">
                                        </div>
                                        @error('hostel_type') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Address">
                                        </div>
                                        @error('address') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Note</label>
                                            <textarea rows="4" name="note" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        @error('note') <p class=" text-danger">{{ $message }}</p> @enderror
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
