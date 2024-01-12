<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create(Request $request){
        
        $request-> validate([
            'name'=> 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        $data = [
            'name'-> $request -> name,
            'email'->$request -> email,
            'subject'->$request -> subject,
            'message'->$request -> message           
        ];
        // dd($data);
        Contact::insert($data);
        return redirect()->back();
    }
}
