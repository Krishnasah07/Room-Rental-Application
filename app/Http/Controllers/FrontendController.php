<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class FrontendController extends Controller
{
    // public function roomdetails(){
    //     return view('frontend.showdetails');
    // }

    public function roomdetails($id){
        if(!$id){
            return redirect()->back();
        }

        $product = Product::find($id);

        if($product){
            return view('frontend.showdetails', compact('product'));
        }

        if(!$id){
            session()->flash('error', 'Product NOt found !!');
            return redirect()->back();
        }
    }

}
