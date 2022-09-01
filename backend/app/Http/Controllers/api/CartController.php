<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_auth
     * @return \Illuminate\Http\Response
     */
    public function getCart(){
        $id_auth = Auth()->user()->id;
        
         $cart=DB::table('carts')->where('customer_id',$id_auth)->get();
        dd($cart);
        //  $product = 
         

    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug product
     * @return \Illuminate\Http\Response
     */

    // public function addCart($slug){
        
    //    $auth= auth()->user()->id;
       
    //     $product = Product::where('slug',$slug)->first();
    //     $cart = new Cart();
    //     $cart->product_id   = $product->id;
    //     $cart->customer_id  = $auth;
    //     $cart->quantity     = 1;
    //     $cart->price        = $product->unit_price;
    //     $cart->save();
    //     return response()->json($cart);
    // }

    public function showCart(){

    }
}
