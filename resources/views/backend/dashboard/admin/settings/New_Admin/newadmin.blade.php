@extends('backend.dashboard.admin.layouts.master')
@section('title','New Admin')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">New Admin Creation</h4>
                    <form action='{{ route("settings.store") }}'  class="form-sample" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Name New Admin </label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" placeholder="Name of New Admin" value="{{ old('name') }}" required/>
                              <span class="text-danger">
                                  @error('name')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label"> Role </label>
                            <div class="col-sm-9">
                              <input type="text" name="role" class="form-control" placeholder="Admin" disabled/>
                              <span class="text-danger">
                                  @error('role')
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
                              <input type="text" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required />
                              <span class="text-danger">
                                  @error('email')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label"> Contact Number </label>
                            <div class="col-sm-9">
                              <input type="text" name="mobile" class="form-control" placeholder="Contact Number" value="{{ old('mobile') }}" required/>
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password" class="form-control" placeholder="Enter Password" />
                              <span class="text-danger">
                                  @error('password')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <textarea type="text" name="description" class="form-control" placeholder="Description" value="{{ old('description') }}"></textarea>
                              <span class="text-danger">
                                  @error('description')
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Profile Picture</label>
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
                      </div>  
                      <div class="row">  
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>                     
                      </div>                    
                    </form>
                  </div>
                  </div>
              </div>

              
@endsection