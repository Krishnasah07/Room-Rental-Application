@extends('backend.dashboard.landlord.layouts.master')
@section('title','Room Details')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Room Details</h4>
                    <div class="table-responsive">
                      <hr style="color=white">
                        <a href="{{ route('Room.Details.View') }}" > <button type="button" class="btn btn-primary btn-rounded btn-fw">Create</button> </a>
                      <hr>
                      <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th> S.N </th>
                            <th> Category ID </th>
                            <th> Description </th>
                            <th> Image 1 </th>
                            <th> Image 2 </th>
                            <th> Image 3 </th>
                            <th> Price </th>
                            <th> Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($rooms as $room)
                          <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $room-> category_id}} </td>
                              <td> {{ $room->room}} </td>
                              <td> <img src="{{ asset('Room_Images').'/'.$room->image }} " height="200px" width="200px"></td>
                              <td> <img src="{{ asset('Room_Images').'/'.$room->image2 }} " height="200px" width="200px"> </td>
                              <td> <img src="{{ asset('Room_Images').'/'.$room->image3 }} " height="200px" width="200px"> </td>
                              <td> {{ $room->price}} </td>
                              <td>
                              @if($room->status == "1")
                              Active
                              @else
                              Inactive
                              @endif
                              </td>
                              <td>
                                <a href="{{ route('Room.Details.Delete',$room->id) }}"> <button type="button" class="btn btn-danger">Delete</button> </a>
                                <a href=""> <button type="button" class="btn btn-info ">Edit</button> </a>
                              </td>
                            </tr>
                            @empty
                         <tr><td colspan="9" align="center"> No Record Found !! </td></tr>
                       @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

@endsection
