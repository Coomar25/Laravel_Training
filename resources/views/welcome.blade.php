@extends('master.master')

@section('content')

<div class="grid grid-cols-3 px-16">
    @foreach($products as $product)
    <div class="bg-grey-400 m-5 p-5 rounded-lg shadow-lg">
        <a class="bg-blue-800 text-white rounded-lg float-right px-2" href="{{route('product.edit',$product->id)}}">Edit</a>
        <a class="bg-blue-800 text-white rounded-lg float-right px-2" href="{{route('product.delete',$product->id)}}">Delete</a>
          
        <p class="font-bold">{{$product->name}}</p>
        <p> Rs {{$product->rate}}</p>
        <p>Available stock: {{$product->stock}}</p>
    </div>
    @endforeach
</div>

<!-- data entry from form -->
{{-- The Function of the @csrf is to fo rthe refinement of the form for the security purposes
    Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf
     of an authenticated user. Thankfully, Laravel makes it easy to protect your application from cross-site request forgery (CSRF) 
     attacks. --}}
<form action="{{route('product.store')}}" method="POST">
    @csrf 
<div class="mb-3">

    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
    <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Rate</label>
    <input type="number" name="rate" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input class="mb-5" type="submit" value="Add Product">
</form>





<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     
</head>

<body>

    {{-- <h1> Hi {{$myname}}</h1> --}}

    <div class="container">
        <div class="image">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="">
        </div>
        <div class="card-content">
            <div class="wrapper">
                <div class="title">Adidas Originals</div>
                <p>Men's running tshirt</p>
                <span class="price">$29.99</span>
                <div class="content size">
                    <div class="name size-name">Size</div>
                    <div class="size-value">
                        <span class="color">XS</span>
                        <span class="color">S</span>
                        <span class="active">M</span>
                        <span class="color">L</span>
                        <span class="color">XL</span>
                    </div>
                </div>
                <div class="content colour">
                    <div class="name colour-name">Colour</div>
                    <div class="colour-value">
                        <span class="white" data-color="lightgrey" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png"></span>
                        <span class="blue active" data-color="#456ABD" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png"></span>
                        <span class="yellow" data-color="#EAA523" data-img="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png"></span>
                    </div>
                </div>
                <div class="btns">
                    <button>Buy now</button>
                    <button>Add to cart</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".colour-value span").click(function() {
            $(".colour-value span").removeClass("active");
            $(this).addClass("active");
            $("body").css("background", $(this).attr("data-color"));
            $(".wrapper .price").css("color", $(this).attr("data-color"));
            $(".size-value span.color").css("color", $(this).attr("data-color"));
            $(".size-value span.active").css("background", $(this).attr("data-color"));
            $(".image img").attr("src", $(this).attr("data-img"));
            $(".btns button").css({
                "background": $(this).attr("data-color"),
                "border-color": $(this).attr("data-color")
            });
        });
    </script>

</body>

</html>

@endsection('content')