@extends('backend.dashboard.renter.layouts.master')
@section('title',' Your Trash')
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
                            <td>1</td>
                            <td>
                              <a href="{{ route('Room.Reservation.Restore',$reserve->id) }}">
                                <button type="button" class="btn btn-primary btn-rounded btn-fw">Re-Store</button>
                              </a>
                              <br/><br/>
                              <a href="{{ route('Room.Reservation.Force.Delete',$reserve->id) }}">
                                <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                              </a>
                            </td> 
                          </tr>
                          @empty
                          <tr class="text-white">
                            <td colspan="8" align="center"> NO Record in Your Trash ...</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection

