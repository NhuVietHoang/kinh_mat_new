@extends('backend.layouts.masteradmin')
@section('title')
    <title>
        danh sách sản phẩm
    </title>
@endsection

@section('content')

    <div class="xs">
    <h3>Basic Tables</h3>
   <div class="bs-example4" data-example-id="contextual-table">
    <div class="panel-body1">
        <table class="table">
          <thead>
             <tr>
               <th>#</th>
               <th>name</th>
               <th>giá bán</th>
               <th>ảnh</th>
               <th>thao tác</th>
             </tr>
           </thead>
           <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->unit_price}}</td>
                    <td><img style="width:50px;height:50px" src="/backend/images/{{$product->images}}" alt=""></td>
                    <td>
                        <a href="{{url('edit-product',$product->id)}}"><button type="button" class="btn btn-sm btn-primary">sửa </button></a>
                        <a href="{{url('delete-product',$product->id)}}"><button type="button" class="btn btn-sm btn-success warning_3">xóa</button></a>
                        
                    </td>
                </tr> 
            @endforeach
             
           </tbody>
         </table>
         </div>

</div>
@endsection