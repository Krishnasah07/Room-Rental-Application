<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);
        $user = User::where('email',$request->email)->first(); //finding user
        if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);
                    return redirect()->route('admin.dashboard');
                }
                $request->session()->flash('error','Incorrect Password'); 
                return redirect()->back(); 
            }         
        }
        $request->session()->flash('error','User Not Found'); 
        return redirect()->back(); 
    }
}
