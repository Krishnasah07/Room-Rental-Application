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

        $request->validate([
            'location' => 'required',
            'price' =>'required',
            'status' => 'required',
            'room' => 'required',
            'category_id' => 'required',
            'phone' => 'required',
       ]);

        $images = array();

       if($files = $request->file('image') && is_array($request->file('image'))){

           for ($i = 0; $i <= 2; $i++) {
               $imageKey = 'image' . $i;
               if ($request->file('image')[$i]) {
                   $file =  $request->file('image')[$i];
                   $newName = time().'_'. rand(10,9999999999999).'_'.$file->getClientOriginalName();
                   $newPath = public_path()."/Room_Images/";
                   $file->move($newPath, $newName);
                   $images[$imageKey] = $newName;
               }
           }
    }
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
         'image' =>$images['image0'] ?? "",
         'image2'=>$images['image1'] ?? "",
         'image3'=>$images['image2'] ?? ""
     ];

     Product::insert($data);
     return redirect()->route('Room.Details');
    //  return redirect()->back();
     }

     // Delete Room Details
    public function roomdelete($id){
        if(!$id){
            return redirect()->route('Room.Details');
        }
        try{
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('Room.Details');
        }catch(\Exception $e){
          return redirect()->route('Room.Details');
        }
    }
}
