<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Reserve;
use App\User;

// use App\Reserve;
// use App\Product;
// use App\Systemsetting;
// use App\ReserveMail;

class Reservecontroller extends Controller
{
    public function reserve(Request $request,$id){
        if($ids = $user = Auth::id()){
            $role = User::find($user);
            if($role->role == 'Renter'){
                $product = Product::find($id);
                $P_id = $product->id;
                $orderNo = rand(10,999999999999999);

                $data =[
                    'order_no' => $orderNo,
                    'product_id'=>$P_id,
                    'user_id'=>Auth::id()
                ];

                  Reserve::insert($data);

                $product = Reserve::find($ids);
                dd($ids);
                return redirect()->route('renter.dashboard');

            }else{
                return redirect()->back();
            }
           
        }else{
            return redirect('login.page');            
        }

        // die;
        // if(Auth::id()){
            // $product = Product::find($id);
            // $P_id = $product->id;
            // $orderNo = rand(10,999999999999999);

            // $data =[
            //     'order_no' => $orderNo,
            //     'product_id'=>$P_id,
            //     'user_id'=>Auth::id()
            // ];

        //     // print_r($data);
        //     // die;
            
        //     Reserve::insert($data);
        //     return redirect()->back();
            
        // }
        // else{
        //     return redirect('login.page');            
        // }
    }




    public function index(Request $request,$id){}
}
