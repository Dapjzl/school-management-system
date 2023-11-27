@extends('dashboard.layouts.admin-layout')
@section('title', 'Complaints')

@section('content')

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Complain</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complain</li>
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
                                        <th></th>
                                        <th>Complain User Type</th>
                                        <th>Complain Type</th>
                                        <th>Complain Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($complains as $key->$complain)
                                  <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$complain->cuser_type}}</td>
                                    <td>{{$complai->complain_type}}</td>
                                    <td>{{$complain->complain_date}}</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <form method="POST" action="{{ route('addComplain') }}"  enctype="multipart/form-data" id="apply_online">
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
                                    <div class="col-md-4 col-sm-12">
                                            <label>Complain User Type</label>
                                            <select class="form-control show-tick" name="cuser_type">
                                                <option value="">-- Select --</option>
                                                <option value="10">Male</option>
                                                <option value="20">Female</option>
                                            </select>
                                            @error('cuser_type') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Complain Type</label>
                                        <select class="form-control show-tick" name="complain_type">
                                            <option value="">-- Select --</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                        </select>
                                        @error('complain_type') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Complain Date</label>
                                            <input data-provide="datepicker" name="complain_date" data-date-autoclose="true" class="form-control" placeholder="Complain Date">
                                        </div>
                                        @error('complain_date') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label>Complain</label>
                                            <textarea rows="4" name="complain" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        @error('complain') <p class=" text-danger">{{ $message }}</p> @enderror
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
