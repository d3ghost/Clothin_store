@extends('layouts.main')

@section('menu')

    <!--<li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">view Cart<i class="fa fa-shopping-cart"></i></a></li>-->

@endsection

@section('content')
    <div class="row catg">
        @includeIf('user.side-menu')
        <div class="col-md-8">
            @includeIf('user.carousel')
            <div class="row products">
                <h4>New Items</h4>
                @foreach($product as $products)
                    <div class="col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{{$products->product_img}}" alt="">
                                <p>
                                    <caption>{{$products->name}}</caption><br>
                                    <caption><strong>${{$products->price}}</strong></caption>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection