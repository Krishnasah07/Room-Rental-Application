@extends('backend.dashboard.admin.layouts.master')
@section('title','Admin Details')
@section('content')


<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admin Details</h4>
                    <div class="table-responsive">
                    <hr style="color=white">
                        <a href="{{ route('New.Admin') }}" > <button type="button" class="btn btn-primary btn-rounded btn-fw">New Admin</button> </a>
                      <hr>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th> Admin ID </th>
                            <th> Admin Name </th>
                            <th> Admin Email </th>
                            <th> Admin Contact No </th>
                            <th> Admin Image </th>
                            <th> Admin Description </th>
                            <th> Delete Admin </th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->mobile }}</td>
                                <td>
                                <img src="{{ asset('Profile_Manually/Krishna.jpg') }}" height="200px" width="200px" alt="Image Missing">
                                </td>
                                <td>{{ $admin->Description }}</td>
                                <td><a href="{{ route('Admin.delete',$admin->id) }}"> <button type="button" class="btn btn-danger">Delete</button> </a></td>
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