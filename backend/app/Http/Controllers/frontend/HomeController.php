<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function GetHome(){
     
        $products = Product::all();
        
      
        return view('frontend.pages.Home')->with([
            'products'=>$products
        ]);
    }
}
