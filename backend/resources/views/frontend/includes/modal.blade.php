<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="fields-grid">
                            {{-- <div class="styled-input">
                                <input type="text" placeholder="Your Name" name="Your Name" required="">
                            </div> --}}
                            <div class="styled-input">
                                <input type="email" placeholder="Your Email" name="email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="password" name="password" required="">
                            </div>
                            <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <a href="{{url('register')}}"><h5 >Hoặc chưa có tài khoản</h5></a>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal-two" tabindex="-1" role="dialog" aria-labelledby="exampleModal-twoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModal-twoLabel">Tài Khoản</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
          </div>
        @if (Auth::guard('customer')->check())
        <div class="modal-body"> 
            xin chào {{Auth('customer')->user()->name}}
          </div>
        @endif
          
         
          
          <div class="modal-footer">
             <a href="{{url('logoutcustomer')}}"><button type="button" class="btn btn-primary">logout</button></a>
             
          </div>
       </div>
    </div>
 </div>

{{-- Cart --}}
<div class="modal fade" id="exampleModal-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModal-twoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal-twoLabel">Giỏ Hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
           </button>
            </div>
            @if (Auth::guard('customer')->check())
                @foreach ($carts as $cart)
                <div class="modal-body">
                    @php
                        $product = DB::table('products')->where('id',$cart->product_id)->first();
                    @endphp
                    <a href="" style="color: #999">{{$product->name}}</a> x 
                    <input type="number" value="{{$cart->quantity}}" style="width:45px;" >
                    <span style="float:right;color:#999">{{number_format($cart->price * $cart->quantity) }} VNĐ</span>
                </div>
                @endforeach
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" ></button> --}}
                    <a href="{{url('checkout')}}" class="btn btn-primary">Checkout</a>
                    
                </div>
            @else
            <div class="modal-body">
                chưa đăng nhập chưa có giỏ hàng
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" ></button> --}}
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Checkout</a>
                {{-- <li>
                    <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                </li> --}}
            </div>
            @endif
            
            
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                <a href="{{url('checkout')}}" class="btn btn-primary">Checkout</a>
            </div> --}}
        </div>
    </div>
</div>