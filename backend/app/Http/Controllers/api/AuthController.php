<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\Customer;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
class AuthController extends Controller 
{   
    // public function __construct() {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "test";
    }

    /**
     * create accout customer.
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

    public function postRegister(Request $request){   
       
       Customer::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]);
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = auth()->attempt($credentials)) {

            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        
        // if(Auth::guard('customer')->attempt($credentials)){
            return $this->createNewToken($token);
        
      
    }

    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,  
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'customer' => auth()->user()
        ]);
        
    }
    public function userProfile() {
        //  dd(auth()->user()->id);
        return response()->json(auth()->user());
    }


    public function logout() {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);

    }
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
    public function addCart($slug){
        
        
       if(Auth::check()){
        $auth = auth()->id();
       }
         $product = Product::where('slug',$slug)->first();
         $cart = new Cart();
         $cart->product_id   = $product->id;
         $cart->customer_id  = $auth;
         $cart->quantity     = 1;
         $cart->price        = $product->unit_price;
         $cart->save();
         return response()->json($cart);
     }
}
