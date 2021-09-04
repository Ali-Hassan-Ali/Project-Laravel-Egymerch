<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerControoler extends Controller
{
    public function index()
    {
        return view('home.sellers.register');
    }//enf of seller

    public function store(Request $request)
    {
        return 'welcome';
    }//end of store
    
}//end of controller
