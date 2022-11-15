@extends('admin.master.app')

@section('title')
	All Students
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

@endpush

@section('content')

    @if(session('status'))
        {{session('status')}}
    @endif

 
	<div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Join Table</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               Join Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Registation No</th>
                                              
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                          @foreach( $anjan as $minar)
                                            <tr>
                                                <td>Hello</td>
                                                <td>Hii</td>
                                                <td>{{$minar->lastName}}</td>
                                                <td>{{$minar->email}}</td>
                                                <td>{{$minar->reg_no}}</td>
                                              
                                                
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@push('js')
  

  

  <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endpush