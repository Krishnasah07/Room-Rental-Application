<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Systemsetting;
use App\Category;


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

    public function index(){
        $data['systems'] = Systemsetting::find(1);
        $data['categories'] = Category::with('products')->paginate(6); // Change 10 to the number of items you want per page
        Session::put('setting', $data['systems']);
        return view('frontend.index', $data);
    }

}
