<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|max:14',
            'password' => 'required|min:6',
            'role' => 'required|in:renter,landlord',
        ]);

        // Create a new user
      $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            ];

         User::insert($data);
    
        return redirect()->route('login.page')->with('success', 'Registration successful. Please log in.');
    }
}

