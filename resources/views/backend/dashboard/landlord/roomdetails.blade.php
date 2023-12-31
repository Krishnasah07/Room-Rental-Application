@extends('backend.dashboard.landlord.layouts.master')
@section('content')  
  <hr>    
    <a href="{{ route('create.room.details') }}" > <button type="button" class="btn btn-primary btn-rounded btn-fw">Create</button> </a>
    <a href=""> <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button> </a> 
    <a href=""> <button type="button" class="btn btn-info btn-rounded btn-fw">Update</button> </a>
    <a href=""> <button type="button" class="btn btn-light btn-rounded btn-fw">Edit</button> </a>

  <hr>  
  <table class="table table-striped-columns table-bordered">
    <thead>
        <tr>
          <th> S.N </th>
          <th> Category Name </th>
          <th> Type  </th>
          <th> Status </th>     
        </tr>     
    </thead>
      <tr>    
        @forelse($categories as $category)
          <td> {{ $loop->iteration }} </td> 
          <td> {{ $category->category_name }} </td>           
          <td> {{ $category->type }} </td> 
          <td> {{ $category->status  }} </td> 
        @empty 
          <tr><td> No Record Found !! </td></tr>
        @endforelse
      </tr> 
    <tbody> 
  </table>
      
@endsection