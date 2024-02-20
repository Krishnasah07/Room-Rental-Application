<?php

namespace App\Http\Controllers;

use App\Mail\ReserveMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Reserve;
use App\User;
use Illuminate\Support\Facades\Mail;

class Reservecontroller extends Controller
{
    public function reserve(Request $request,$id){
        // dd($id);
        if($ids = $user = Auth::id()){
            $role = User::find($user);
            if($role->role == 'Renter'){
                $product = Product::find($id);
                $P_id = $product->id;
                $landlordid = $product->landlord_id;
                $orderNo = rand(10,999999999999999);

                $data =[
                    'order_no' => $orderNo,
                    'product_id'=>$P_id,
                    'landlord_id'=>$landlordid,
                    'user_id'=>Auth::id()
                ];

                // dd($data);

                  Reserve::insert($data);
                  Mail::to(\auth()->user()->email)->send(new ReserveMail($orderNo, $product));
                return redirect()->route('renter.dashboard');

            }else{
                return redirect()->back();
            }

        }else{
            return redirect('login.page');
        }
    }


    // Select query to send data on renter dashboard
    public function index(){
        $id = session()->get('id');
        $data['reserves'] = Reserve::where('user_id', '=', $id)->get();
        $data['reserves'] = Reserve::with('owner','productinfo')->where('user_id', '=', $id)->get();
        // dd($data);
        return view('backend.dashboard.renter.index',$data);
    }

    public function trash(){
        $id = session()->get('id');
        $data['reserves'] = Reserve::where('user_id', '=', $id)->get();
        $data['reserves'] = Reserve::onlyTrashed('owner','productinfo')->where('user_id', '=', $id)->get();
        // dd($data);

        // $data['reserves'] = Reserve::onlyTrashed()->get();
        // dd($data);
        return view('backend.dashboard.renter.trash.trash_details',$data);
    }

    public function reservation_delete($id){
        if(!$id){
            return redirect()->route('renter.dashboard');
        }
        try{
            $product = Reserve::find($id);
            $product->delete();
            return redirect()->route('renter.dashboard');
        }catch(\Exception $e){
          return redirect()->route('renter.dashboard');
        }
    }

    public function trash_restore($id){
        if(!$id){
            return redirect()->route('renter.dashboard');
        }
        try{
            $product = Reserve::withTrashed()->find($id);
            $product->restore();
            return redirect()->route('renter.dashboard');
        }catch(\Exception $e){
          return redirect()->route('renter.dashboard');
        }
    }

    public function trash_delete($id){
        if(!$id){
            return redirect()->route('renter.dashboard');
        }
        try{
            $product = Reserve::withTrashed()->find($id);
            $product->forceDelete();
            return redirect()->route('renter.dashboard');
        }catch(\Exception $e){
          return redirect()->route('renter.dashboard');
        }
    }


    // Landlord Reserve Details Route
    // Fetching details of reserve table to shown on Landlord Dashboard 
    public function reserve_details(){
        $id = session()->get('id');
        $data['reserve_details'] = Reserve::where('landlord_id', '=', $id)->get();
        $data['reserve_details'] = Reserve::with('renterinfo','productinfo')->where('landlord_id', '=', $id)->get();
        
        // dd($data);
        return view('backend.dashboard.landlord.index',$data);
    }

    //Changing status to Approve or Reject Renter Request to reserve room
    public function reserve_details_update(Request $request,$id){
        dd($id);
        $id = session()->get('id');
        $data['reserve_details'] = Reserve::where('landlord_id', '=', $id)->get();
        $data['reserve_details'] = Reserve::with('renterinfo','productinfo')->where('landlord_id', '=', $id)->get();
        
        // dd($data);
        return view('backend.dashboard.landlord.ViewMore',$data);
    }


}
