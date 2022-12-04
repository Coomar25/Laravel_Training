@extends('master.master')

@section('editproduct')

<h2 class="font-bold text-center">Edit Product</h2>

<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf 
<div class="mb-3">

    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
    <input type="name" name="name" class="form-control" id="exampleFormControlInput1" value="{{$product->name}}" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Rate</label>
    <input type="number" name="rate" class="form-control" id="exampleFormControlInput1" value="{{$product->stock}}" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" id="exampleFormControlInput1" value="{{$product->stock}}" placeholder="name@example.com">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" value="{{$product->description}}" rows="3" ></textarea>
  </div>
  <input class="mb-5" type="submit" value="update">
</form>

@endsection