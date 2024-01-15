<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('forms/style.css') }}">
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
 <form action="{{ route('register.submit') }}" method="POST">
    @csrf
    <div class="register-container">
    <div class="register-header">
        <h1>Register</h1>
    </div>
    <div class="register-form">
        <div class="form-group">
            <input type="text" id="name" class="wrap" name="name" required placeholder="NAME" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="email" id="email" class="wrap" name="email" required placeholder="E-MAIL" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input type="text" id="mobile" class="wrap" name="mobile" required placeholder="MOBILE" value="{{ old('mobile') }}">
        </div>
        <div class="form-group">
            <input type="password" id="password" class="wrap" name="password" required placeholder="PASSWORD">
        </div>
        <div>
            <p>Are You ?</p>
        <div class="radio-group">
            <label><input type="radio" name="role" value="landlord" > Landlord</label>
            <label><input type="radio" name="role" value="renter" checked> Renter</label>
        </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
        <p>Already have an account? <a href="{{ route('login.page')}}" onclick="toggleForms()">Login</a></p>
    </div>
</div>

</form>
<script src="{{asset('js/script.js')}}"></script>  
</body>
</html>