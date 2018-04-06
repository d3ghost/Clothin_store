@extends('layouts.main')

@section('content')
    <div class="row catg">
        @includeIf('user.side-menu')
        <div class="col-md-8">
            @if($id)

            @endif
            <img src="/img/jeans.jpg" alt="" style="width: 986px;">
            <h3>{{$id}}</h3>
            <div class="row products">
                @foreach($prod_cat->product as $products)
                    <div class="col-md-3">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="/{{$products->product_img}}" alt="">
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