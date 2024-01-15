<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Reserve;
// use App\Product;
// use App\Systemsetting;
// use App\ReserveMail;

class Reservecontroller extends Controller
{
    public function reserve(Request $request,$id){
        dd($request->all());
        if(!$id){
            return redirect()->back();
        }

        $product = Product::find($id);
        $data['system'] = Systemsetting::find(1);
        $_SESSION['setting'] = $data['system'];
        $orderNo = rand(10,999999999999999);
        if($product){
            $data = [
                'order_no' => $orderNo,
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ];

            $reserve = Reserve::create($data);

            if($reserve){
                $to = auth()->user()->email;
                ReserveMail::to()->send(new ReserveMail($reserve));
            }
        }

    }
}
