@extends('frontend.layouts.master')
@section('title')
    <title>chi tiết sản phẩm</title>
@endsection

@section('content')
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
       <div class="inner-sec-shop pt-lg-4 pt-3">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 single-right-left ">
                <div class="grid images_3_of_2">
                   <div class="flexslider1">
                      <ul class="slides">
                         <li data-thumb="images/f2.jpg">
                            <div class="thumb-image"> <img src="/frontend/images/{{$product->images}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                         </li>
                      </ul>
                      <div class="clearfix"></div>
                   </div>
                </div>
             </div>
             <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                <h3>{{$product->name}}</h3>
                <p><span class="item_price">{{ number_format($product->unit_price)}} VNĐ</span>
                   <del></del>
                </p>
              
                
                <div class="occasional">
                   <h5>Types :</h5>
                   <div class="colr ert">
                      <label class="radio"><input type="radio" name="radio" checked=""><i></i> Soft Teddy Bear (Black)</label>
                   </div>
                   <div class="colr">
                      <label class="radio"><input type="radio" name="radio"><i></i>Soft Teddy Bear (Brown)</label>
                   </div>
                   <div class="colr">
                      <label class="radio"><input type="radio" name="radio"><i></i>Pink Teddy Bear (Pink)</label>
                   </div>
                   <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                   <div class="toys single-item singlepage">
                      <form action="{{url('add-cart')}}" method="POST">
                       @csrf
                        <div class="color-quality">
                           <div class="color-quality-right">
                              <h5>số lượng :</h5>
                              <input name="quantity" type="number" class="frm-field required sect">
                           </div>
                        </div>
                        <br>
                        
                       
                         {{-- <input type="hidden" name="name" value="{{$product->name}}"> --}}
                         <input type="hidden" name="product_id" value="{{$product->id}}">
                         <input type="hidden" name="unit_price" value="{{$product->unit_price}}">
                         @if (Auth::guard('customer')->check())
                         <input type="hidden" name="customer_id" value="{{Auth::guard('customer')->user()->id}}">
                           <button type="submit" class="toys-cart ptoys-cart add">
                                  Add to Cart
                           </button>  
                           @else
                           {{-- <button type="submit" href="javascript:void(0)" onclick="falseAuth()" class="toys-cart ptoys-cart add">
                              Add to Cart
                           </button>  --}}
                           <a href="javascript:void(0)" onclick="falseAuth()" style="background-color: black" class="toys-cart ptoys-cart add">Add to Cart</a> 
                           
                         @endif
                         
                      </form>
                   </div>
                </div>
                <ul class="footer-social text-left mt-lg-4 mt-3">
                   <li>Share On : </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fab fa-facebook-f"></span>
                      </a>
                   </li>
                   <li class="">
                      <a href="#">
                      <span class="fab fa-twitter"></span>
                      </a>
                   </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fab fa-google-plus-g"></span>
                      </a>
                   </li>
                   <li class="">
                      <a href="#">
                      <span class="fab fa-linkedin-in"></span>
                      </a>
                   </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fas fa-rss"></span>
                      </a>
                   </li>
                </ul>
             </div>
            @endforeach
             
             <div class="clearfix"> </div>
             <!--/tabs-->
             <div class="responsive_tabs">
                <div id="horizontalTab">
                   <div class="resp-tabs-container">
                      <!--//tab_one-->
                      @error('content')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </div>          
                        @enderror
                      <div class="tab2">
                         <div class="single_page">
                            <div class="bootstrap-tab-text-grids">
                               <div class="bootstrap-tab-text-grid">
                                  <div class="bootstrap-tab-text-grid-left">
                                     <img src="images/team1.jpg" alt=" " class="img-fluid">
                                  </div>
                                  {{-- @foreach ($comments as $comment)
                                  <div class="bootstrap-tab-text-grid-right">
                                    <ul>
                                       <li><a href="#">Cristiano Messi</a></li>
                                       <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                    </ul>
                                    <p>{{$comment->content}}
                                    </p>
                                 </div>
                                  @endforeach --}}
                                  
                                  <div class="clearfix"> </div>
                               </div>
                               <div class="add-review">
                                  <h4>add a review</h4>
                                  <form action="{{url('comment')}}" method="post">
                                    @csrf
                                     <div class="row">
                                     </div>
                                     <input type="number" name="id_customer">
                                     <br>
                                     <input type="hiden" name="id_product" value="{{$product->id}}" style="display: none" >
                                     <input type="text" name="content" >
                                     <input type="submit" >
                                  </form>
                               </div>
                            </div>
                         </div>
                      </div>
                     
                   </div>
                </div>
             </div>
             <!--//tabs-->
          </div>
       </div>
    </div>
 </section>
@if (session('notification'))
    <script>
      alert("thêm sản phẩm thành công");
    </script>
@endif
<script>
   function falseAuth(){
      alert('Không Đăng Nhập Mua cc')
   }   
</script> 
@endsection