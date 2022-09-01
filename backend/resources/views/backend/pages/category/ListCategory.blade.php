@extends('backend.layouts.masteradmin')
@section('title')
    <title>
        danh sách danh mục
    </title>
@endsection

@section('content')

    <div class="xs">
    <h3>bảng danh mục</h3>
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
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                   
                    <td>
                        <a href="{{url('edit-category',$category->slug)}}"><button type="button" class="btn btn-sm btn-primary">sửa </button></a>
                        <a href="{{url('delete-product',$category->id)}}"><button type="button" class="btn btn-sm btn-success warning_3">xóa</button></a>
                        <a href="{{url('edit-category',$category->id)}}"><button type="button" class="btn btn-sm btn-primary">xem sản phẩm</button></a>
                    </td>
                </tr> 
            @endforeach
             
           </tbody>
         </table>
         {{ $categories ->links()}}
         </div>

</div>
@endsection