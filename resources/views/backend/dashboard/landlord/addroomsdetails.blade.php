@extends('backend.dashboard.landlord.layouts.master')
@section('content')

<form  action="{{ route('insert.room.details')}}" method='POST'> 
    @csrf
                

                <div class="card-body">   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Room Address" name='address' value='{{ old("address")}}'>                  
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">category Id</label>
                    <input type="number" class="form-control" id="exampleInp`utPassword1" placeholder="category Id" name='category_id' value='{{ old("category_id")}}'>
                   </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No of rooms</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="No of Rooms" name='rooms' value='{{ old("rooms")}}'>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Halls</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="No of Halls" name='halls' value='{{ old("halls")}}'>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Kitchen</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="No of Kitchen" name='kitchen' value='{{ old("kitchen")}}'>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Bathroom</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="No of Bathroom" name='bathroom' value='{{ old("bathroom")}}'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" class="form-control" id="exampleInp`utPassword1" placeholder="Price" name='price' value='{{ old("price")}}'>
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputPassword1">Contact Details</label>
                    <input type="text" class="form-control" id="exampleInp`utPassword1" placeholder="Contact Details" name='phone' value='{{ old("phone")}}'>
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Status" name='staus' value='{{ old("staus")}}'>
                  </div>              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection