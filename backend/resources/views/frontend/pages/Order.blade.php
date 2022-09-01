@extends('frontend.layouts.master')

@section('title')
    <title>
        thanh Toán

    </title>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="/frontend/css/checkout.css">
@endsection
@section('content')
<div class="container py-xl-5 py-sm-3">
    <form action="{{route('thanhtoan')}}" method="post">
        @csrf
    <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Thanh Toán</h3>
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
           <div class="shop_inner_inf">
              <div class="privacy about">
                 <h3>Chec<span>kout</span></h3>
                 <div class="checkout-right">
                    <h4>Your shopping cart contains: <span>3 Products</span></h4>
                    <table class="timetable_sub update_cart_url" data-url="">
                       <thead>
                          <tr>
                             <th>sản phẩm</th>
                             <th>Số Lượng</th>
                             <th>Tên</th>
                             <th>Giá</th>
                          </tr>
                       </thead>
                       <tbody>
                        @php
                            $total = 0
                        @endphp
                          @foreach ($products as $product)

                              @php
                                $prd = DB::table('products')->where('id',$product->product_id)->first();  
                                $total += $product->price*$product->quantity;
                                
                              @endphp
                           <tr class="rem1">
                           
                           
                           <td class="invert-image"><a href="single.html"><img src="/frontend/images/{{$prd->images}}" alt=" " class="img-responsive"></a></td>
                          
                           <td class="invert">
                              <div class="quantity">
                                 {{$product->quantity}}
                                
                              </div>
                           </td>
                              <input type="hiden" name="id[]" value=" {{$prd->id}}"  style="display: none">
                              <input type="hiden" name="quantity[]" value=" {{$product->quantity}}" style="display: none">
                              <input type="hiden" name="total" value="{{$total}}"  style="display: none" >
                              
                              <td class="invert">{{$prd->name}}</td>
                           <td class="invert">{{number_format($product->price*$product->quantity)}} VNĐ</td>
                           </tr>  
                          @endforeach
                                

                       </tbody> 
                    </table>
                 </div>
                 <div class="col-md-4 checkout-left-basket">
                           <h4>Tổng tiền {{$total}} VNĐ</h4>
         
                  </div>
              </div>
           </div>
           <!-- //top products -->
        </div>
  
        <h3 class="typo-main-heading mb-lg-4 mb-3 pr-3 pb-1">Forms</h3>
        <h4 class="typo-sub-heading mb-3">Thông tin nhận hàng</h4>
        
            <div class="form-group">
                {{-- <div class="form-group col-md-6"> --}}
                    <label for="inputEmail4">Tên người nhận</label>
                    <input type="text"  value="{{Auth::guard('customer')->user()->name}}" class="form-control"  placeholder="tên">
                {{-- </div> --}}
              
            </div>
            <div class="form-group">
               {{-- <div class="form-group col-md-6"> --}}
                   <label for="inputEmail4">Tên người nhận</label>
                   <input type="email" name="email" value="{{Auth::guard('customer')->user()->email}}" class="form-control"  placeholder="tên">
               {{-- </div> --}}
             
           </div>
            <div class="form-group">
                <label for="inputAddress">Địa chỉ</label>
                <input type="text" name="address" value="{{{Auth::guard('customer')->user()->address}}}" class="form-control" id="inputAddress" placeholder="Địa chỉ">
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">số điện thoại</label>
                    <input type="text" name="phone" value="{{Auth::guard('customer')->user()->phone}}" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">phương thức thanh toán</label>
                    <select id="inputState" class="form-control">
                   <option selected="">thanh toán khi nhận hàng</option>
                   <option>...</option>
                </select>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Đặt Hàng</button>
        </form>
      
    <!--// Cards -->
</div>
@if (session('successs'))
    <script>
      alert("đặt hàng thành công");
    </script>
@endif
@if (session('error'))
    <script>
      alert('chưa chọn sản phẩm thanh toán');
    </script>
@endif
@endsection