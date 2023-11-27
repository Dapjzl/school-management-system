@extends('dashboard.layouts.admin-layout')
@section('title', 'Transcript')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">Students</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Student Transcript</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">Transcript</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="Fees-Receipt">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Transcript</h3>
                        <div class="card-options">
                            <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row my-8">
                            <div class="transHead" style="width: 100%;">
                                <h4 style="text-align: center; text-transform: uppercase;">Faculty of Student</h4>
                                <h5 style="text-align: center;">Exams and Records</h5>
                                <h6 style="text-align: center;">Transcript of Credit</h6>
                                <hr>
                            </div>
                            <div class="col-6" style="display: flex; flex-direction: column; line-height: 2px;">
                                <div class="stud_name" style="display: inline-block; flex-direction: column;">
                                    <h6 style="display: inline-block; font-size: 20px; height: 1px; width: 150px;"><b>Student Name: </b></h6>
                                    <p style="display: inline-block; font-size: 15px;">Student name goes here</p>
                                </div>
                                <div class="stud_name" style="display: inline-block; flex-direction: column;">
                                    <h6 style="display: inline-block; font-size: 20px; height: 5px; width: 150px;"><b>Matric No: </b></h6>
                                    <p style="display: inline-block; font-size: 15px;">Student matric goes here</p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover text-nowrap" style="margin-top: ;">
                                <thead>
                                    <tr>
                                        <th class="text-left"><b>Course Code</b></th>
                                        <th>Course Title</th>
                                        <th class="text-center" style="width: 1%;"><b>Grade</b></th>
                                        <th class="text-right" style="width: 1%;"><b>Course Unit</b></th>
                                        <th class="text-right" style="width: 1%;"><b>Marks</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="10%" style="text-transform: uppercase;" class="text-left">CSC 110</td>
                                        <td style="text-transform: capitalize;">Introduction To Computing</td>
                                        <td class="text-center" style="width: 1%; text-transform: uppercase;">a</td>
                                        <td class="text-right" style="width: 1%;">2</td>
                                        <td class="text-right" style="width: 1%;">79</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" style="text-transform: uppercase;" class="text-left">ALG 120</td>
                                        <td style="text-transform: capitalize;">Linear Algebra 1</td>
                                        <td class="text-center" style="width: 1%; text-transform: uppercase;">C</td>
                                        <td class="text-right" style="width: 1%;">2</td>
                                        <td class="text-right" style="width: 1%;">79</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" style="text-transform: uppercase;" class="text-left">MTH 242</td>
                                        <td style="text-transform: capitalize;">Further Analysis 2</td>
                                        <td class="text-center" style="width: 1%; text-transform: uppercase;">e</td>
                                        <td class="text-right" style="width: 1%;">2</td>
                                        <td class="text-right" style="width: 1%;">79</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" style="text-transform: uppercase;" class="text-left">CSC 110</td>
                                        <td style="text-transform: capitalize;">Real Analysis 2</td>
                                        <td class="text-center" style="width: 1%; text-transform: uppercase;">b</td>
                                        <td class="text-right" style="width: 1%;">2</td>
                                        <td class="text-right" style="width: 1%;">79</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" style="text-transform: uppercase;" class="text-left">mth 220</td>
                                        <td style="text-transform: capitalize;">Differential Equations & Dynamics</td>
                                        <td class="text-center" style="width: 1%; text-transform: uppercase;">z</td>
                                        <td class="text-right" style="width: 1%;">2</td>
                                        <td class="text-right" style="width: 1%;">79</td>
                                    </tr>
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
