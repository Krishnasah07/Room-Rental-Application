@extends('backend.dashboard.landlord.layouts.master')
@section('title','Add Room Category')
@section('content')

<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Room's Category</h4>
                    
                    <form class="forms-sample" action="{{ route('Add.Room.Category') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label style="color:white;" for="exampleInputName1"> Category Name </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Name" name="category_name" value="{{ old('category_name') }}" required/>
                        <span class="text-danger">
                             @error('category_name')
                             {{ $message }}
                             @enderror
                        </span>
                      </div>

                      <div class="form-group">
                        <label style="color:white;" for="exampleInputName1">Category Type</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Type" name="type" value="{{ old('type') }}" required/>
                        <span class="text-danger">
                             @error('type')
                             {{ $message }}
                             @enderror
                        </span>
                      </div>

                      <div class="form-group">
                        <label style="color:white;" for="exampleSelectGender">Active Status</label>
                        <select name='status' class="form-control" id="exampleSelectGender" >
                        <option > Select Status </option>

                          <option value='1'> Active </option>
                          <option value='0'> Inactive </option>
                        </select>
                        
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Submit</button>

                      <a href="{{ route('Room.Category') }}" > <button type="button" class="btn btn-secondary btn-rounded btn-fw gap-8"> Go Back </button> </a>

                    </form>
                  </div>
                </div>
              </div>  
            </div>
          </div>


@endsection