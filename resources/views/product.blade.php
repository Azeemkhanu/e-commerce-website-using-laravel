@extends('master')
@section('content')

<h1>Product Page</h1>


<div class="conatiner custome-design">
    <div class="row">

        <div class="parent">
        @foreach($productsData as $item)
            <div class="child">
                <a href="detail/{{$item['id']}}">
                <img class="img-box" src="{{$item['gallery']}}" alt="">
                <p>{{$item['name']}}</p>
                </a>
            </div>
            @endforeach
        </div>
       
            


    </div>
</div>

@endsection

