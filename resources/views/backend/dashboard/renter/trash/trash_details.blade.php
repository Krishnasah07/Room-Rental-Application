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
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a>
                                    <button type="button" class="btn btn-primary btn-rounded btn-fw">Re-Store</button>
                                </a><br/><br/>
                                <a>
                                    <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                                </a>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
