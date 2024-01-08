<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\category;
use App\Product;

class ProductConteroller extends Controller
{
    public function index(){ 
        $data['rooms'] = Product::paginate(5);
        return view('backend.dashboard.landlord.Room.roomdetails',$data);
    }

    public function addroomview()
    {
        $data['categories'] = Category::where('status',1)->get();
        return view('backend.dashboard.landlord.Room.addroomsdetails',$data);
    } 

    public function create(Request  $request){
        $data = [
         'category_id' =>$request->category_id,
         'location' =>$request->location,
         'price' =>$request->price,
         'room' =>$request->room,
         'hall' =>$request->hall,
         'kitchen' =>$request->kitchen,
         'bathroom' =>$request->bathroom,
         'phone' =>$request->phone,
         'status' =>$request->status,
     ];
     Product::insert($data);
     return redirect()->route('room.details.view');
 }
}
