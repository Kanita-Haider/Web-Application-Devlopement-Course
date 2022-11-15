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
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
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
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                          @foreach( $arnob as $minar)
                                            <tr>
                                                <td>{{$minar->id}}</td>
                                                <td>{{$minar->firstName}}</td>
                                                <td>{{$minar->lastName}}</td>
                                                <td>{{$minar->email}}</td>
                                                <td>
                                                    <a href="{{url('/edit/'.$minar->id)}}" class="btn btn-warning">Edit</a>
                                                    <a href="{{url('/delete/'.$minar->id)}}" class="btn btn-danger">Delete</a></td>
                                                
                                            </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@push('js')
  

    <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endpush