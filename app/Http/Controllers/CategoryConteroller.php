<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;


class CategoryConteroller extends Controller
{
    

    public function index()
    {
        $data['categories'] = Category::paginate(5);
        return view('backend.dashboard.landlord.roomdetails', $data);    
    }  
}


