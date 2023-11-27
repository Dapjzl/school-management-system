@extends('dashboard.layouts.admin-layout')
@section('title', 'Holiday')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Registered Students</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Students</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                @if (Auth::user()->utype =="ADM")
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
                                        <th></th>
                                        <th>Student Name</th>
                                        <th>Student Type</th>
                                        <th>Admission Date</th>
                                        <th>Admission Number</th>
                                        <th>Reg No:.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regs as $key=>$reg)

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{$reg->student_img}}" alt="" style="width: 40px; height: 40px; border-radius: 50%;"></td>
                                        <td> {{$reg->firstname.' '.$reg->lastname}}</td>
                                        <td>{{$reg->studtype}}</td>
                                        <td>{{$reg->admitdate}}</td>
                                        <td>{{$reg->admitno}}</td>
                                        <td>{{$reg->regno}}</td>
                                        <td>
                                            <a href="{{route('dashboard.transcript')}}" title="View Transcript">
                                                <i class="fa fa-file"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
