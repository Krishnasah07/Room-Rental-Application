<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body{
            padding : 20px;
            margin: 20px;

        }
    </style>
</head>
<body>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    <div>
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Roles</label>
            <select name ='role' required> 
                <option> </option>
                <option value='Admin' > Admin </option>
                <option  value='Renter'> Renter </option>
                <option  value='Landlord'> Landlord </option>
            </select >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="{{ old('email') }}" required/>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
</body>
</html>