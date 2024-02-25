<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function submit(Request $request){

        // dd($request->all());        
        // $request-> validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'subject'=> 'required',
        //     'message'=> 'required',
        // ]);

        $data = [
            'name'-> $request -> name,
            'email'->$request -> email,
            'subject'->$request -> subject,
            'message'->$request -> message           
        ];
        dd($data);
        Contact::create($request->all());
        Contact::insert($data);
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        // return redirect()->back();
    }
}
