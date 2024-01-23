@extends('frontend.layout.layout')
@section('content')

<style>
    .product_thumb > a > img {
        height: 370px !important;
        width: 310px !important;
        /* height: 372.53px !important;
        width: 308.9px !important; */
        /* object-fit: cover; */
    }
</style>
<!--new product area start-->
 <div class="new_product_area">
    <div class="block_title">
        <h3>New Products</h3>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            @foreach ($new_products as $p)
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                        <a href="single-product.html"><img src="{{asset('dashboard/uploads/'.$p->img_url)}}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">{{ $p->price}}</span>
                        <h3 class="product_title"><a href="single-product.html">{{ $p->name}}</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--new product area start-->

<!--featured product start-->
<div class="featured_product">
    <div class="block_title">
        <h3>Featured Products</h3>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            @foreach ($f_products as $p)
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                        <a href="single-product.html"><img src="{{asset('dashboard/uploads/'.$p->img_url)}}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">{{ $p->price}}</span>
                        <h3 class="product_title"><a href="single-product.html">{{ $p->name}}</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--featured product end-->
@endsection
