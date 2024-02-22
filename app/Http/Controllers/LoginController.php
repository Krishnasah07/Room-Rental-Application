<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Cookie;
use App\Systemsetting;
class LoginController extends Controller
{
    
    public function login(Request $request){


        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6',
        ]);
        $user = User::where('email',$request->email)->first(); //finding user

        if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);
                      $userRoles = Auth::user()->role;
                      $userid = Auth::user()->id;
                      $request = session()->put('id',Auth::user()->id);
                    switch ($userRoles) {
                        case 'Admin':

                            return redirect()->route('admin.dashboard');
                            break;

                        case 'Landlord':

                            return redirect()->route('landlord.dashboard');
                            break;

                        case 'Renter':
                            return redirect()->route('renter.dashboard');
                            break;

                        default:
                            return redirect()->back();
                    }
                }
                $request->session()->flash('error','Incorrect Password');
                return redirect()->back();
            }
        }
        $request->session()->flash('error','User Not Found');
        return redirect()->back();
    }

    public function dashboard(){
        $system_setting = Systemsetting::find(1);
        $_SESSION['setting'] = $system_setting;
        return view('backend.dashboard.admin.index', compact('system_setting'));
    }

    public function logout(){    
        Auth::logout();
        Session::flush();
        $cookie = \Cookie::forget('myCookie');
        return redirect()->route('login.page');
    }
}
