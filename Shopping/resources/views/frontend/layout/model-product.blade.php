@extends('frontend.layout.layout')
@section('content')
<!--new product area start-->
 <div class="new_product_area">
    <div class="block_title">
        <h3>New Products</h3>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product1.jpg') }}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$50.00</span>
                        <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product7.jpg') }}" alt=""></a>
                       <div class="hot_img">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-hot.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$60.00</span>
                        <h3 class="product_title"><a href="single-product.html">Maecenas sit amet</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product8.jpg') }}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png')}}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$50.00</span>
                        <h3 class="product_title"><a href="single-product.html">Sed non turpis</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product9.jpg') }}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$70.00</span>
                        <h3 class="product_title"><a href="single-product.html">Donec ac congue</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product3.jpg') }}" alt=""></a>
                       <div class="hot_img">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-hot.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$60.00</span>
                        <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                       <a href="single-product.html"><img src="{{ URL::asset('frontend\assets\img\product\product2.jpg') }}" alt=""></a>
                       <div class="img_icone">
                           <img src="{{ URL::asset('frontend\assets\img\cart\span-new.png') }}" alt="">
                       </div>
                       <div class="product_action">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                       </div>
                    </div>
                    <div class="product_content">
                        <span class="product_price">$50.00</span>
                        <h3 class="product_title"><a href="single-product.html">Phasellus a arcu</a></h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--featured product end-->
@endsection
