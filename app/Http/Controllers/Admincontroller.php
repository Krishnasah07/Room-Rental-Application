<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Product;
use App\User;

class Admincontroller extends Controller
{
    public function renter(){
        $data['Renters'] = User::where('role','Renter')->get();
        // dd($data);
        return view('backend.dashboard.admin.Details.Renter_Details',$data);
    }

    public function landlord(){
        $Data['Landlords'] = User::where('role','Landlord')->get();
        // dd($Data);
        return view('backend.dashboard.admin.Details.Landlord_Details',$Data);        
    }

    public function Change_password(){
        return view('backend.dashboard.admin.settings.Change-Password');
    }

    public function Change_Admin_password(Request $request){

        $request->validate([
            'oldPwd'=> ' required | min:6 | max:10',
            'newPwd'=> ' required | min:6 | max:10',
            'confirmPwd'=> ' required | min:6 | max:10'
        ]);

        

        
        $UserID = session()->get('id'); //Getting userid from session

        $user = User::where('id',$UserID)->first(); //finding user

        if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){

                }
            }
        }

        $request->session()->flash('error','User Not Found');
        return redirect()->back();
    }

}
