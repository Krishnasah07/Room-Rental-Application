@extends('backend.dashboard.admin.layouts.master')
@section('title','System Settings')
@section('content')

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">System's Setting</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action='{{ route("system-setting.store") }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name='name'>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name='email'>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Phone</label>
                        <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Phone" name='phone'>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Address" name='address'>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Description or Slogan</label>
                        <textarea class="form-control" id="exampleTextarea1" placeholder='Description or Slogan' rows="4" name='slogan'></textarea>
                      </div>

                      <div class="form-group">
                      <label>File upload or Logo</label>
                      <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image  or Logo" name='logo'>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <!-- <button class="btn btn-dark">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>

@endsection
