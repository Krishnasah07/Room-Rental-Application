<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
<form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf
    <div id="particles-js"></div>

<div class="login-container">
    <div class="login-header">
        <h1>Login</h1>
    </div>
    <div class="login-form">
        <div class="form-group">
            <input type="email" id="email" class="wrap" name="email" required placeholder="E-MAIL">
        </div>
        <div class="form-group" >
            <input type="password" id="password" class="wrap" name="password" required placeholder="PASSWORD">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Login</button>
        </div>
    </div>
        <!-- New "Don't have an account / Register" link -->
        <p Align="Center">Don't have an account?</p><a href="register.html" class="register-link"> Register</a>
    </div>
</div>

</form>
<script src="{{asset('js/script.js')}}"></script>  
</body>
</html>