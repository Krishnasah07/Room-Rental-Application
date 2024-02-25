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
        return view('backend.dashboard.admin.settings.Profile_Settings.Change-Password');
    }

    public function Change_Admin_password(Request $request){
        // dd($request->All());

        $request->validate([
            'oldPwd'=> ' required | min:6 | max:10',
            'newPwd'=> ' required | min:6 | max:10',
            'confirmPwd'=> ' required | min:6 | max:10 | same:newPwd'
        ]);

        $password = $request->newpwd;
        dd($password);
        
        $UserID = session()->get('id'); //Getting userid from session
        $user = User::where('id',$UserID)->first(); //finding user
        // dd($user);

        if($user){
            $data = [
                'password' => $password,
            ];
        
            // Update the user's password here
            $user->update($data);
        
            // You might want to check if the update was successful and handle accordingly
            if ($user->wasChanged()) {
                $request->session()->flash('success', 'Password updated successfully');
            } else {
                $request->session()->flash('error', 'Failed to update password');
            }
        
            return redirect()->back();
        }
        
        $request->session()->flash('error', 'User Not Found');
        return redirect()->back();
        
         }

    public function index(){
        $id = session()->get('id');
        // dd($id);
        $Renter = User::find($id);
        // dd($Renter);
        return view('backend.dashboard.admin.settings.Profile_Settings.Profile_Updates',compact('Renter'));
    }

    public function update_profile(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'mobile' => 'required | min: 10 | max:14',
            'email' => 'required',
            'oldpwd' =>'required',
        ]);

        $id = session()->get('id');
        $user = User::where('id',$id)->first(); //finding user
        $user->image;
        // dd($user);

        $image_url = '';
       
        if($user){ //user checking
            if($user->password){ //Password collecting from db
                if(Hash::check($request->oldpwd, $user->password)){ //password checking
                    //code for image
                    if($request->has('image') && $request->file('image')){
                        $file  = $request->file('image');
                        $name  = time().'.'. rand(10,9999999999999).'.'.$file->getClientOriginalExtension();
                        $path = public_path().'/Profile_Images'.'/';
                        $file->move($path,$name);
                        // $image_url = $name;
                        $image_url =$name;
                        // dd($image_url);
                    }                    
                    
                    $data = [
                        'name' =>$request->name,
                        'mobile' =>$request->mobile,
                        'email' =>$request->email,
                        // 'password' =>bcrypt($request->newpwd) ?? $user->password,
                        'image' =>$image_url ?? $user->image
                        ];

                        // dd($data);

                       $user->update($data);
                }
                $request->session()->flash('error','Incorrect Password');
                return redirect()->back();
            }
        }
        $request->session()->flash('error','User Not Found');
        return redirect()->back();
    }

}
