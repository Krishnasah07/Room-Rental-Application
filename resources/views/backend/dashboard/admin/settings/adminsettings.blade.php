@extends('backend.dashboard.admin.layouts.master')
@section('content')


  
<div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">

                  <!-- Contents Start -->
                  <hr/>
                    <a href="{{ route('new.admin') }}">                  
                     <button type="button" class="btn btn-outline-secondary btn-fw"> New Admin </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-light btn-fw"> New Admin </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-light btn-fw"> New Admin </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-light btn-fw"> New Admin </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-light btn-fw"> New Admin </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-danger btn-fw"> Change Password </button>
                    </a>
                    <a href="">                  
                     <button type="button" class="btn btn-outline-danger btn-fw"> Change Email </button>
                    </a>
                  <hr/>
                  <!-- Content Ends -->
                  </div>
                </div>
            </div>
        </div>
</iframe>



@endsection