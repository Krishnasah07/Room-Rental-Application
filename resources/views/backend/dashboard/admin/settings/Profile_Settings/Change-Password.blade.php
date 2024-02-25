@extends('backend.dashboard.admin.layouts.master')
@section('title','Change Password')
@section('content')



<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Change Your Password</h4>
            <!-- <p class="card-description"> Basic form elements </p> -->
            <form class="forms-sample" action="{{ route('Change.Password.Admin.Submit') }}" method='POST'>
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Old Password</label>
                    <input type="password" class="form-control" id="exampleInputName1" placeholder="Old Password" name='oldPwd' value="{{ old('oldPwd') }}" >
                    <span class="text-danger">
                        @error('oldPwd')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">New Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail3" placeholder="New Password" name='newPwd' value="{{ old('newPwd') }}" >
                    <span class="text-danger">
                        @error('newPwd')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword4">Confirmed Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Confirmed Password" name='confirmPwd' value="{{ old('confirmPwd') }}" >
                    <span class="text-danger">
                        @error('confirmPwd')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="showPasswordCheckbox" onclick="togglePasswordVisibility()"> Show Password
                        <i class="input-helper"></i>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <!-- <button class="btn btn-dark">Cancel</button> -->
            </form>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInputs = document.querySelectorAll('.form-control[type="password"]');
        var showPasswordCheckbox = document.getElementById('showPasswordCheckbox');

        passwordInputs.forEach(function (passwordInput) {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    }
</script>

@endsection
