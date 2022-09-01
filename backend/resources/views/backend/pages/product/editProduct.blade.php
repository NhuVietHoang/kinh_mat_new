@extends('backend.layouts.MasterAdmin')
@section('title')
    <title>sửa sản phẩm</title>
@endsection
@section('content')
<div class="xs">
    <h3>Sửa sản phẩm</h3>
    @error('name')
        <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
        </div>          
    @enderror
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
    @endif
    <div class="well1 white">
  <form method="POST" action="{{url('edit-product',$product['id'])}}" enctype="multipart/form-data" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
    @csrf
    <fieldset>
      
        <input type="hiden" name="id" style="display: none" value="{{$product['id']}}">
        <div class="form-group">
            <label class="control-label">Tên sản phẩm</label>
            <input type="text" value="{{$product['name']}}" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name"  >
          </div>
          
          <div class="form-group">
            <label class="control-label">Giá bán</label>
            <input type="number" value="{{$product['unit_price']}}" name="unit_price" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" >
           
          </div>
          <div class="form-group">
            <label class="control-label">Slug</label>
            <input type="text" value="{{$product['slug']}}" name="slug" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" >
          </div>
          <div class="form-group">
            <label class="control-label">code</label>
            <input type="text" value="{{$product['code']}}" name="code" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" >
          </div>
          <div class="form-group">
            <label class="control-label">tag</label>
            @foreach ($product->tags as $tag)
            <input type="text" value="{{$tag->name}}" name="tag" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" > 
            @endforeach
          </div>
          <div class="form-group">
            <label class="control-label" >description</label>
            <textarea name="description" value="{{$product['description']}}" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
            {{-- <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required=""> --}}
          </div>
          <div class="form-group">
            <label class="control-label">images</label>
           
            <input name="image" value="{{$product['image']}}" type="file" >
          </div>
          
          <div class="form-group filled">
            <label class="control-label">Danh mục</label>
            <select name="category" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" ><option value=""></option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
     
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </fieldset>
  </form>
</div>
            
</div>
@endsection