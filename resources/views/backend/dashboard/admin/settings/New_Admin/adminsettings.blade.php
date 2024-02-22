@extends('backend.dashboard.admin.layouts.master')
@section('title','Settings')
@section('content')

<div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Settings Page</h4>
                    <div class="template-demo">
                        <a href="{{ route('New.Admin') }}">
                            <button type="button" class="btn btn-primary btn-lg btn-block" href="">
                            <i class="mdi mdi-account"></i> New Admin </button>
                        </a>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                  </div>
                </div>
              </div>
</div>

@endsection