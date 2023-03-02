@extends('master')
@section('content')

<h1>Detail Page</h1>

<div class="conatiner">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-boxes" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/product">Go Back</a>
            <h2>Name : {{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Description : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                  <button class="btn btn-success">Add to Cart</button>
                </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>

@endsection