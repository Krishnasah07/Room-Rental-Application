<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;

class Admincontroller extends Controller
{
    public function product(){
        $data = Product::get();
        $product['products']  = $data->count();

        $renter['renters'] = User::where('role','Renter')->count();

        $landlord['landlords'] = User::where('role','Landlord')->count();

        return view('backend.dashboard.admin.index',$product);

        // $renter = User::whereHas('role')->count();

        dd($renter,$product,$landlord);
        // $landlord = User::whereHas('roles')->count();


    }

    public function renter(){
        $data = User::where('role','Renter')->get();
        return view('backend.dashboard.admin.index',compact($data));
    }

    public function landlord(){
        $datas = User::where('role','Landlord')->get();
        return view('backend.dashboard.admin.index',compact($datas));        
    }
}
