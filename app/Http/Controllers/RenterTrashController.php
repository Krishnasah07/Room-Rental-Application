<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenterTrashController extends Controller
{
    public function index(){
        return view('backend.dashboard.renter.trash.trash_details');
    }
}
