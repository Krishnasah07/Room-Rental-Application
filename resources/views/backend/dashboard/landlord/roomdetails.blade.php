@extends('backend.dashboard.landlord.layouts.master')

@section('content')
  
<hr>    
   <button type="button" class="btn btn-primary">Create</button>
    <button type="button" class="btn btn-danger">Delete</button>
    <button type="button" class="btn btn-info">Update</button>
    <button type="button" class="btn btn-light">Edit</button>

    <hr>  
      <table class="table table-striped-columns">
      <thead>
      <tr>
        <th>ID </th>
        <th>Address</th>
        <th>Price</th>
        <th>Rooms</th>
        <th>Halls</th>
        <th>Kitchen</th>
        <th>Bathrooms</th>
        <th>Phone </th>
        <th>Status</th>
        <th>Image</th>
        <th>Image</th>
        <th>Image </th>
        
      </tr>
      @forelse($products as $product)

      <td>{{ $loop->iteration}}</td>
      <td>{{ $product->address}}</td>
      <td>{{ $product->price}}</td>
      <td>{{ $product->rooms}}</td>
      <td>{{ $product->halls}}</td>
      <td>{{ $product->kitchen}}</td>
      <td>{{ $product->bathroom}}</td>
      <td>{{ $product->phone}}</td>
      <td>{{ $product->staus}}</td>
      <td>{{ $product->image1}}</td>
      <td>{{ $product->image2}}</td>
      <td>{{ $product->image3}}</td>
     
      @empty
      <td>NO Record !!!</td>

      @endforelse
      </thead>
      <tbody>
     
      </tbody>
    </table>
    
@endsection