@extends('admin.master.app')
@section('title')
	Create Student
@endsection

@section('content')
	 <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>

                                    @if(Session::has('success'))
                                    <div class="card-header">
                                    	<div class="alert alert-success">
                                    		{{Session::get('success')}}
                                    	</div>
                                    	
                                    </div>
                                    @endif

                                     @if(Session::has('failed'))
                                    <div class="card-header">
                                    	<div class="alert alert-danger">
                                    		{{Session::get('failed')}}
                                    	</div>
                                    	
                                    </div>
                                    @endif


                                    <div class="card-body">
                                        <form action="{{route('reg.store')}}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="name">Student Name<label>
                                                        
                                                        <select class="custom-select" name="student_id" id="inputGroupSelect04">
														    
														    @foreach($data as $row)

														    <option value="{{$row->id}} ">{{$row->firstName}} {{$row->lastName}}</option>
														   
														    @endforeach
														  </select>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Registation ID</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="EEE 001 030303" name="reg_no" />
                                            </div>

                                            
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
@endsection