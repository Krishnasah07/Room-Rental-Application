<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class NewAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user['data'] = User::where('role','Admin')->get();
        // dd($user);
        return view('backend.dashboard.admin.settings.New_Admin.New_Admin_Details',$user);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|max:14',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $user->image = $filename;
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'role' => 'Admin',
            'image'=>$user->image ?? '',
            'description'=> $request->description
            ];

        //     dd($data);

         User::insert($data);
         return redirect()->route('settings.index');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!$id){
            return redirect()->route('settings.index');
        }

        try{
            $user = User::find($id);
            $user->delete();
            return redirect()->route('settings.index');
        }catch(\Exception $e){
            return redirect()->route('settings.index');
        }      
        
    }

    public function add_admin(){
        return view('backend.dashboard.admin.settings.New_Admin.newadmin');
    }


}
