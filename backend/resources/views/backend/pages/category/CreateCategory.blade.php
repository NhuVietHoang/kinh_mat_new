@extends('backend.layouts.masteradmin')
@section('title')
    <title>Tạo sản danh mục</title>
@endsection
@section('content')
<div class="xs">
    <h3>Tạo sản phẩm</h3>
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
  <form method="POST" action="{{url('create-category')}}"  class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
    @csrf
    <fieldset>
      <div class="form-group">
        <label class="control-label">Tên danh mục</label>
        <input type="text" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" >
      </div>
      
     
      <div class="form-group">
        <label class="control-label">Slug</label>
        <input type="text" name="slug" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" >
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </fieldset>
  </form>
</div>
            
</div>
@endsection
