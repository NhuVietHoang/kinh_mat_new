@extends('frontend.layouts.master')
@section('title')
    <title>
        Giỏ Hàng
    </title>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="/frontend/css/checkout.css">
@endsection
@section('content')
<section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
       <div class="shop_inner_inf">
          <div class="privacy about">
             <h3>Chec<span>kout</span></h3>
             <div class="checkout-right">
                <h4>Your shopping cart contains: <span>3 Products</span></h4>
                <table class="timetable_sub update_cart_url" data-url="{{url('update-cart')}}">
                   <thead>
                      <tr>
                         <th></th>
                         <th>sản phẩm</th>
                         <th>Số Lượng</th>
                         <th>Tên</th>
                         <th>Giá</th>
                         <th>Remove</th>
                      </tr>
                   </thead>
                   
                   <tbody>  
                     <form action="{{route('saveOrder')}}" method="POST">
                        @csrf
                       @foreach ($carts as $cart) 
                       <tr class="rem1">
                        <?php 
                        $product = DB::table('products')->where('id',$cart->product_id)->first();   
                        ?>
                        <td class="invert"><input name="status[]" value="{{$product->id}}" type="checkbox"></td>
                        <input type="hiden" style="display:none" name="product_id[]" value="{{$product->id}}">
                        <td class="invert-image"><a href="single.html"><img src="/frontend/images/{{$product->images}}" alt=" " class="img-responsive"></a></td>
                        <td class="invert">
                           {{-- update-cart --}}
                           
                           <div class="quantity">                             
                              <input type="number" name="quantity"class="quantity" value="{{$cart->quantity}}" min="1">
                           </div>
                           <input type="hiden" name="cart_id" value="{{$cart->id}}" style="display:none">
                        </td>
                        <td class="invert">{{$product->name}}</td>
                        <td class="invert">{{number_format($cart->price*$cart->quantity)}} VNĐ</td>
                        
                        <td class="invert">
                           <div style="display: flex">
                              {{-- <a href="{{url('update-cart',$cart->id)}}"  > cập nhật</a> --}}
                              <input type="submit" class=" btn btn-primary cart_update" value="cập nhật" >
                           
                              <a href="{{url('delete-cart',$cart->id)}}" class=" btn btn-danger"> xóa</a>

                           </div>
                           
                        </td>
                     </tr>
                       @endforeach
                   </tbody>
                
                     </table>
                     </div>
                     <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                           <h4>Continue to basket</h4>
                           <ul>
                              <li><i>-</i> <span></span></li>   
                           </ul>
                        </div>
                        <div class="col-md-8 address_form">
                              <h4>Tiến hành đặt hàng</h4>
                           <input type="submit" class="checkout-right-basket" value="Thanh Toán">
               </form> 
                </div>
                <div class="clearfix"> </div>
                <div class="clearfix"></div>
             </div>
          </div>
       </div>
       <!-- //top products -->
    </div>
 </section>
@endsection