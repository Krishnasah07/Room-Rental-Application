@extends('backend.dashboard.landlord.layouts.master')
@section('title','Room Category Details')
@section('content')  
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Room's Category Details</h4>
                    </p>
                    <div class="table-responsive">
                      <hr style="color=white">
                        <a href="{{ route('Room.Category.View') }}" > <button type="button" class="btn btn-primary btn-rounded btn-fw">Create</button> </a>
                      <hr>
                      <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th> S.N </th>
                            <th> Category Name </th>
                            <th> Type  </th>
                            <th> Status </th>  
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                          <tr>  
                            <td> {{ $loop->iteration }} </td> 
                            <td> {{ $category->category_name }} </td>           
                            <td> {{ $category->type }} </td> 
                            <td>
                              @if($category->status == "1")
                              Active
                              @else
                              Inactive
                              @endif
                            </td> 
                            <td> 
                              <a href="{{ route('Room.Category.Delete',$category->id) }}"> <button type="button" class="btn btn-danger">Delete</button> </a> 
                              <a href="{{ route('Room.Category.Edit',$category->id) }}"> <button type="button" class="btn btn-info ">Edit</button> </a>
                            </td>
                          </tr> 
                        @empty 
                         <tr><td colspan="5" align="center"> No Record Found !! </td></tr>
                       @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
</div>           
@endsection

