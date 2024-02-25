@extends('backend.dashboard.landlord.layouts.master')
@section('title','Room Reservation Details')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Room Reservation Details</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th> S.N </th>
                            <th> Product ID</th>
                            <th> Product Price</th>
                            <th> Image </th>
                            <th> Renter Name </th>
                            <th> Renter Image </th>
                            <th> Renter Contact</th>
                            <th> Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody style="color: white;">
                          @forelse($reserve_details as $reserve)                       
                            <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{$reserve->productinfo->id }} </td>
                              <td> {{$reserve->productinfo->price }} </td>
                              <td> 
                                <a href="{{ asset('Room_Images').'/'.$reserve->productinfo->image ?? '' }}" target="_blank">
                                    <img src="{{ asset('Room_Images').'/'.$reserve->productinfo->image ?? '' }}" height="400px" width="400px">
                                </a>
                              </td> 
                              <td> {{$reserve->renterinfo->name }} </td>
                              <td> 
                                <a href="{{ asset('profile_Images').'/'.$reserve->renterinfo->image ?? '' }}" target="_blank">
                                    <img src="{{ asset('Profile_Images').'/'.$reserve->renterinfo->image ?? '' }}" height="400px" width="400px">
                                </a>
                              </td>
                              <td>  {{$reserve->renterinfo->mobile }} </td>
                              <td>
                              @if($reserve->status == "1")
                                    <div class="badge badge-outline-success"> Approved</div>
                                @elseif($reserve->status == "0") 
                                    <div class="badge badge-outline-warning">Request</div>
                                @else
                                    <div class="badge badge-outline-danger">Rejected</div>
                              @endif
                              </td>
                              <td>
                                <a href="{{ route('View.More.Room.Details',$reserve->id) }}"> 
                                    <button type="button" class="btn btn-info ">View More </button> 
                                </a>
                              </td>
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
