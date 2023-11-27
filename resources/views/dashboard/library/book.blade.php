@extends('dashboard.layouts.admin-layout')
@section('title', 'Library')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="header-action">
                <h1 class="page-title">College Library</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    <li class="breadcrumb-item active" aria-current="page">Book</li>

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
                                        <th></th>
                                        <th>Book Title</th>
                                        <th>Book ID</th>
                                        <th>ISBN NO</th>
                                        <th>Edition</th>
                                        <th>Author</th>
                                        <th>Language</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $key => $book)
                                        
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><img src="{{$book->cover}}" alt="" style="height: 30px; width: 30px; border-radius: 50%;"></td>
                                        <td>{{$book->title}}</td>
                                        <td>{{$book->bookid}}</td>
                                        <td>{{$book->isbn}}</td>
                                        <td>{{$book->edition}}</td>
                                        <td>{{$book->author}}</td>
                                        <td>{{$book->language}}</td>
                                        <td>{{$book->price}}$</td>

                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Fees-add">
                <div class="row clearfix">
                    <form action="{{ route('addBook') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                        @csrf
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
                                        <div class="form-group">
                                            <label>Book Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Book Title">
                                            @error('title') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Book ID</label>
                                            <input type="text"  class="form-control" name="bookid" placeholder="Book ID">
                                            @error('bookid') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>ISBN NO</label>
                                            <input type="text"  class="form-control" name="isbn" placeholder="ISBN NO">
                                            @error('isbn') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Edition</label>
                                            <input type="text"  class="form-control" name="edition" placeholder="Edition">
                                            @error('edition') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input type="text"  class="form-control" name="author" placeholder="Author">
                                            @error('author') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <input type="text"  class="form-control" name="language" placeholder="Language">
                                            @error('language') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text"  class="form-control" name="price" placeholder="Price">
                                            @error('price') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text"  class="form-control" name="quantity" placeholder="Quantity">
                                            @error('quantity') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Almira NO</label>
                                            <input type="text"  class="form-control" name="almira" placeholder="Almira NO">
                                            @error('almira') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2 mb-3">
                                            <input type="file" class="dropify" name="cover">
                                            <small id="fileHelp" class="form-text text-muted">Book Cover.</small>
                                            @error('cover') <p class=" text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12">
                                        <div class="form-group mt-3">
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
                    </form>
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Account Information</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Account Information</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" placeholder="Twitter">
                                </div>
                                <div class="form-group">
                                    <label>LinkedIN</label>
                                    <input type="text" class="form-control" placeholder="LinkedIN ">
                                </div>
                                <div class="form-group">
                                    <label>Behance</label>
                                    <input type="text" class="form-control" placeholder="Behance">
                                </div>
                                <div class="form-group">
                                    <label>dribbble</label>
                                    <input type="text" class="form-control" placeholder="dribbble">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
