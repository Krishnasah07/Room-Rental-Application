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
                          <tr>
                            <td>
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td> 98020202 </td>
                            <td> 02312 </td>
                            <td> img </td>
                            <td> $14,500 </td>
                            <td> 04 Dec 2019 </td>
                            <td>
                              <div class="badge badge-outline-warning"> Pending </div>
                            </td>
                            <td>
                              <button class="btn btn-outline-danger"> Cancel </button>
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