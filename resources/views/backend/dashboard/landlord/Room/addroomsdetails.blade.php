@extends('backend.dashboard.landlord.layouts.master')
@section('title','Add Room Details')
@section('content')
<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Room Details</h4>
                    <form action="{{ route('Add.Room.Details') }}"  class="form-sample" method="POST" enctype='multipart/form-data'>
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Room</label>
                            <div class="col-sm-9">
                              <input type="number" name="room" class="form-control" placeholder="No of Rooms" />
                              <span class="text-danger">
                                  @error('room')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label"> Hall </label>
                            <div class="col-sm-9">
                              <input type="number" name="hall" class="form-control" placeholder="No of Halls"/>
                              <span class="text-danger">
                                  @error('hall')
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Kitchen</label>
                            <div class="col-sm-9">
                              <input type="number" name="kitchen" class="form-control" placeholder="No of Kitchen" />
                              <span class="text-danger">
                                  @error('kitchen')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label"> Bathroom </label>
                            <div class="col-sm-9">
                              <input type="number" name="bathroom" class="form-control" placeholder="No of Bathroom"/>
                              <span class="text-danger">
                                  @error('bathroom')
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="category_id">
                                @forelse($categories as $category)
                                <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                                @empty
                                <option value=''> NO Category Found !!!</option>
                                @endforelse
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label style="color:white;" class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked> Active </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label style="color:white;" class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0"> Inctive </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="location" class="form-control" placeholder="Address" />
                              <span class="text-danger">
                                  @error('location')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                              <input type="text" name="price" class="form-control" placeholder="Enter Price"/>
                              <span class="text-danger">
                                  @error('price')
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Image 1</label>
                            <div class="col-sm-9">
                              <input type="file" name="image[]" class="form-control" />
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Contact Number</label>
                            <div class="col-sm-9">
                              <input type="text" name="phone" class="form-control" placeholder="Enter Contact Number"/>
                              <span class="text-danger">
                                  @error('price')
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
                            <label style="color:white;" class="col-sm-3 col-form-label">Image 2</label>
                            <div class="col-sm-9">
                              <input type="file" name="image[]" class="form-control" />
                              <span class="text-danger">
                                  @error('image2')
                                  {{ $message }}
                                  @enderror
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label style="color:white;" class="col-sm-3 col-form-label">Image 3</label>
                            <div class="col-sm-9">
                              <input type="file" name="image[]" class="form-control" />
                              <span class="text-danger">
                                  @error('image3')
                                  {{ $message }}
                                  @enderror
                              </span>
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