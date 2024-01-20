<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Systemsetting;
use Illuminate\Http\Request;


class CategoryConteroller extends Controller
{
    public function addcat()
    {
        return view('backend.dashboard.landlord.category.AddRoomCategory');
    }    

    public function index()
    {
        $data['categories'] = Category::paginate(5);
        return view('backend.dashboard.landlord.category.RoomCategory',$data);
    } 
    
    // Add Category
    public function catinsert(Request $request){
        $request->validate([
            'category_name' =>'required |unique:categories',
            'type'=>'required ',
            'status'=>'required'
        ]);

        $data =[ 
            'category_name' => $request->category_name,
            'type' => $request->type,
            'status' => $request->status
        ];

        Category::insert($data);
        return redirect()->route('Room.Category');
    }

    // Delete Category
    public function catdelete($id){
        if(!$id){
            return redirect()->route('Room.Category');
        }

        try{
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('Room.Category'); 
        }catch(\Exception $e){
          return redirect()->route('Room.Category'); 
        }
    }

    // Edit Category
   
    public function catedit($id){
        if(!$id){
            return redirect()->route('Room.Category'); 
          }
          $data['category'] = Category:: find($id);
          if($data['category']){
            return view('backend.dashboard.landlord.category.editcategory',$data);
          }
          return redirect()->route('Room.Category'); 
    }

    // Update Category
    public function catupdate(Request $request,$id){
        if(!$id){
            return redirect()->route('Room.Category');
          }
          $data['category'] = Category:: find($id);

          if($data['category']){

            $request->validate([
                'category_name' =>'required',
                'type'=>'required ',
                'status'=>'required'
            ]);

            $updatecategory_data =[
                'category_name' => $request->get('category_name'),
                'type' => $request->type,
                'status' => $request->status ?? 1,
            ];
            $data['category']->update($updatecategory_data);
            return redirect()->route('Room.Category'); 
          }
          return redirect()->route('Room.Category'); 

    }
    public function search(Request $request){

        $searchTerm = $request->search;
        $query = Product::query();
        $data['systems'] = Systemsetting::find(1);
        $_SESSION['setting'] = $data['systems'];
        if($searchTerm){
            $query-> where('location','LIKE','%'.$searchTerm.'%')
                    ->orWhere('price','LIKE','%'.$searchTerm.'%')
                    ->orWhere('kitchen','LIKE','%'.$searchTerm.'%')
                    ->orWhere('hall','LIKE','%'.$searchTerm.'%')
                    ->orWhere('Description','LIKE','%'.$searchTerm.'%');
                    $data['products'] = $query->get();
                     
                    return view('frontend.result',$data);

        }else{
            return redirect() -> back();

        }

    }

    
}


