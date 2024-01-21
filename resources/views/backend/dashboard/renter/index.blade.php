@extends('backend.dashboard.renter.layouts.master')
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
                          <tr>
                            <td>{{ $reserve->owner->name ?? '' }}</td>
                            <td></td>
                            <td>{{ $reserve->order_no }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="button" class="btn btn-outline-danger btn-fw">Cancel</button></td>
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
