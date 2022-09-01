@extends('backend.layouts.masteradmin');
@section('title')
    <title>danh sách tag</title>
@endsection

@section('content')
<div class="xs">
    <h3>bảng tag</h3>
   <div class="bs-example4" data-example-id="contextual-table">
    <div class="panel-body1">
        <table class="table">
          <thead>
             <tr>
               <th>#</th>
               <th>name</th>
               <th>slug</th>
               <th>thao tác</th>
             </tr>
           </thead>
           <tbody>
            @foreach ($tags as $tag)
            <tr>
                <th scope="row">1</th>
                <td>{{$tag->name}}</td>
                <td>{{$tag->slug}}</td>
               
                <td>
                    <a href=""><button type="button" class="btn btn-sm btn-primary">sửa </button></a>
                    <a href=""><button type="button" class="btn btn-sm btn-success warning_3">xóa</button></a>
                    <a href=""><button type="button" class="btn btn-sm btn-primary">xem sản phẩm</button></a>
                </td>
            </tr> 
            @endforeach
               
   
             
           </tbody>
         </table>
         {{-- {{ $categories ->links()}} --}}
         </div>

</div>
@endsection