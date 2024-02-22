<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    // public function product(){
    //     $data = Product::get();
    //     $product['products']  = $data->count();

    //     $renter['renters'] = User::where('role','Renter')->count();

    //     $landlord['landlords'] = User::where('role','Landlord')->count();

    //     return view('backend.dashboard.admin.index',$product);

    //     // $renter = User::whereHas('role')->count();

    //     dd($renter,$product,$landlord);
    //     // $landlord = User::whereHas('roles')->count();


    // }

    
}
