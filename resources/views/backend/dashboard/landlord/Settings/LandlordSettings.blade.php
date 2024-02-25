@extends('backend.dashboard.landlord.layouts.master')
@section('title','Profile Settings')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Your Profile</h4>
                    <h5 style="color:white;"><span style="color: red;">Note :</span> Provide your old password to change anything in your profile</h5>
                    <form action="{{ route('Landlord.Profile.Updation') }}"  class="form-sample" method="POST" enctype='multipart/form-data'>
                      @csrf                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Your Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value='{{ $Renter->name ? $Renter->name : old("name")}}' />
                              <span class="text-danger">
                                  @error('name')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Contact No</label>
                            <div class="col-sm-9">
                              <input type="text" name="mobile" class="form-control" placeholder="Enter Contact Number" value='{{ $Renter->mobile ? $Renter->mobile : old("mobile")}}'/>
                              <span class="text-danger">
                                  @error('mobile')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" placeholder="Enter your new email address" value='{{ $Renter->email ? $Renter->email : old("email")}}'/>
                              <span class="text-danger">
                                  @error('email')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Your Password</label>
                            <div class="col-sm-9">
                              <input type="text" name="oldpwd" class="form-control" placeholder="Enter your Password" required/>
                              <span class="text-danger">
                                  @error('oldpwd')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">New Profile Picture</label>
                            <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" />
                              <span class="text-danger">
                                  @error('image')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Old Profile Image</label>
                               <div class="col-sm-9">
                               
                                @if($Renter->image)
                                    <img src="{{ asset('Profile_Images/'.$Renter->image) }}" alt="User Profile Image" width="200px">
                                @else
                                    <p>You don't have any profile image yet.</p>
                                @endif
                            </div>
                          </div>
                        </div>   
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>                     
                      </div> 
                                         
                    </form>
                  </div>
                  </div>
              </div>

              
@endsection