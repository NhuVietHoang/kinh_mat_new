<?php

namespace App\Http\Controllers\Shoppingcart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cartcontroller extends Controller
{
    //
    public function addCart(Request $request){
        // dd($request);
        $cart = new Cart();
        $cart->customer_id = $request->customer_id;
        $cart->product_id  = $request->product_id;
        $cart->quantity    = $request->quantity;
        $cart->price       = $request->unit_price;
        $cart->save();
        return redirect()->back()->with('notification','thêm sản phẩm thành công');
    }
    public function deleteCart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function updateCart(Request $request){
        dd($request);
        // $cart = Cart::find($id);
        // $cart->quantity = $request->quantity;
        // $cart->save();
        return redirect()->back()->with('success','cập nhật thành công');

    }

    public function getCheckout(){
        $customer = Auth::guard('customer')->user()->id;
        $cart = DB::table('carts')->where('customer_id',$customer)->get();
        return view('frontend.pages.Cart')->with([
            'carts'=>$cart
        ]);
    }
    public function saveOrder(Request $request){
        // dd($request->all()['quantity']);
        
        $products = [];
        $auth = Auth::guard('customer')->user()->id;
        if(isset($request->all()['status'])){
        
            foreach($request->all()['status'] as $id_product){
                $product = DB::table('carts')->where([
                    ['product_id','=',$id_product],
                    ['customer_id','=',$auth]
                ])->first();
                $products[]=$product;
                } 
            return view('frontend.pages.order')->with([
                 'products'=>$products
            ]);
        }
        else{
            return redirect()->back()->with('error','chưa chọn sản phẩm thanh toán');
        }
        
    }
    public function thanhtoan(Request $request){
        $order             = new Order();
        $order->total      = $request->total;
        $order->order_date = Carbon::now();
        $order->customer_address = $request-> address;
        $order->customer_phone   = $request-> phone;
        $order->customer_email   = $request->email;
        
        $order->save();

        $detail = [];
        $detail = [];
        
        foreach($request->all()['id'] as $value){
            $cart = DB::table('carts')->where([
                ['product_id','=',$value],
                ['customer_id','=',Auth::guard('customer')->user()->id]
            ]);
            $product = DB::table('products')->where('id',$value)->first();
            $detail[]=[
                'product_id'=>$product->id,
                'price'=>$product->unit_price,
            ];

            $cart->delete();
        }
        $order->products()->attach($detail);
        
      
        return redirect('home')->with('succsecc','đặt hàng thành công');
    }
}
