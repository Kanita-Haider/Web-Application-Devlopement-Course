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
                                        <form action="{{route('mahabub')}}" method="post" enctype="multipart/form-data">
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
											    <label for="exampleFormControlSelect1">City</label>
											    <select class="form-control" id="exampleFormControlSelect1" name="city">
											    
											      <option value="Chittagong">Chittagong</option>
											      <option value="Dhaka">Dhaka</option>
											      <option value="Rongpur">Rongpur</option>
											      <option value="Sylhet">Sylhet</option>
											      <option value="Khulna">Khulna</option>
											      <option value="Barishal">Barishal</option>
											      <option value="Mymensingh">Mymensingh</option>
											      <option value="Noakhali">Noakhali</option>
											      <option value="BrahmonBaria">BrahmonBaria</option>

											    </select>
											  </div>

											<div class="form-group">
												<label for="gender">Gender</label>
												<div class="form-check">
													  <input class="form-check-input" type="radio" id="gender" value="Male" name="gender" checked>
													  <label class="form-check-label" for="exampleRadios1">
													    Male
													  </label>
													</div>
													<div class="form-check">
													  <input class="form-check-input" type="radio"  id="exampleRadios2" value="Female" name="gender">
													  <label class="form-check-label" for="exampleRadios2">
													    Female
													  </label>
													</div>					

											</div>

											<div class="form-group">
												<label for="Hobby">Hobby</label>
												<div class="form-check">
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Handcraft" id="Handcraft">
												  <label class="form-check-label"  for="Handcraft">
												    Handcraft 
												  </label>
												</div>

												<div class="form-check"> 
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Sleeping" id="Sleeping">
												  <label class="form-check-label" for="Sleeping">
												    Sleeping
												  </label>
												</div>

												<div class="form-check">
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Traveling" id="Traveling">
												  <label class="form-check-label" for="Traveling">
												    Traveling
												  </label>
												</div>

												<div class="form-check">
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Reading" id="Reading">
												  <label class="form-check-label" for="Reading">
												    Reading
												  </label>
												</div>

												<div class="form-check">
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Writting" id="Writting">
												  <label class="form-check-label" for="Writting">
												    Writting
												  </label>
												</div>

												<div class="form-check">
												  <input class="form-check-input" name="hobby[]" type="checkbox" value="Cycling" id="Cycling">
												  <label class="form-check-label" for="Cycling">
												    Cycling
												  </label>
												</div>



											</div>

											<div class="form-group">
												
												<label for="exampleFormControlFile1">Profile Picture</label>
    											<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
											</div>
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
@endsection