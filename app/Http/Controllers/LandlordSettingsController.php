<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class LandlordSettingsController extends Controller
{
    public function index(){
        $id = session()->get('id');
        // dd($id);
        $Renter = User::find($id);
        // dd($Renter);
        return view('backend.dashboard.landlord.Settings.LandlordSettings',compact('Renter'));
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
                        'image' =>$image_url ?? '' 
                        ];

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
