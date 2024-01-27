@extends('backend.dashboard.renter.layouts.master')
@section('title',' Dashboard')
@section('content')
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Room Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Room Owner Name </th>
                            <th> Contact No</th>
                            <th> Reserve No </th>
                            <th> Room Image </th>
                            <th> Room Cost </th>
                            <th> Start Date </th>
                            <th> Reserve Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($reserves as $reserve)
                          <tr class="text-white">
                            <td>{{ $reserve->owner->name}}</td>
                            <td>{{ $reserve->productinfo->phone}}</td>
                            <td>{{ $reserve->order_no }}</td>
                            <td><img src="{{ asset('Room_Images').'/'.$reserve->productinfo->image }} " height="200px" width="200px"></td>
                            <td>{{ $reserve->productinfo->price}}</td>
                            <td>{{ $reserve->created_at}}</td>
                            <td>
                            @if($reserve->status == "1")
                              <div class="badge badge-outline-success">Reservation Approved</div>
                            @elseif($reserve->status == "0") 
                              <div class="badge badge-outline-warning">Reservation Pending</div>
                            @else
                              <div class="badge badge-outline-danger">Reservation Rejected</div>
                            @endif
                            </td> 
                            <td>
                              <a href="{{ route('Room.Reservation.Delete',$reserve->id) }}">
                                <button type="button" class="btn btn-danger btn-fw">Cancel Reservation</button>
                              </a>
                            </td>
                          </tr>
                          @empty
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection