@extends('backend.dashboard.admin.layouts.master')
@section('title','Renter Details')
@section('content')

<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Renter Details</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <!-- <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th> -->
                            <th>S.N.</th>
                            <th> Renter Name </th>
                            <!-- <th> Reserve No </th> -->
                            <th> Renter Email </th>
                            <th> Contact No </th>
                            <th> Image </th>
                            <!-- <th> Start Date </th>
                            <th> Payment Status </th> -->
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($Renters as $renter)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $renter->name }}</td>
                                <td>{{ $renter->email }}</td>
                                <td>{{ $renter->mobile }}</td>
                                <td>
                                <img src="{{ asset('Room_Images').'/'.$renter->image ?? ''}}" alt="Image Missing" height="200px" width="200px">
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5">
                                There is no details available.. 
                            </tr></td>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection