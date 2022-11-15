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
                                    <div class="card-body">
                                        <form action="{{route('kanita')}}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text"  name="firstName" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text"  name="lastName" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp"  name="email" />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Check Box</label>
                                                <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="check[]" value="checkbox 1" id="defaultCheck1">
                                              <label class="form-check-label" value="checkbox 1" name="check[]" for="defaultCheck1">
                                                Default checkbox
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="checkbox 2" id="defaultCheck2" name="check[]" >
                                              <label class="form-check-label" value="checkbox 2" for="defaultCheck2">
                                                Disabled checkbox
                                              </label>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
@endsection