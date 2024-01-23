<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron - Fashion eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('frontend\assets\img\favicon.png') }}">

		<!-- all css here -->
        <link rel="stylesheet" href="{{ URL::asset('frontend\assets\css\bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('frontend\assets\css\plugin.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('frontend\assets\css\bundle.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('frontend\assets\css\style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('frontend\assets\css\responsive.css') }}">
        <script src="{{ URL::asset('frontend\assets\js\vendor\modernizr-2.8.3.min.js') }}"></script>

    </head>
    <body>
            <!-- Add your site or application content here -->

            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                    <div class="pos_page_inner">
                       <!--header area -->
                               @include('frontend.layout.header')
                        <!--header end -->
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                <div class="col-lg-3 col-md-8 col-12">
                                  @include('frontend.layout.sidebar')
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <!--banner slider start-->
                                    @include('frontend.layout.slide')
                                    <!--banner slider start-->

                                   {{-- content --}}
                                    @yield('content')
                                    <!--banner area start-->
                                   @include('frontend.layout.banner')
                                    <!--banner area end-->

                                    <!--brand logo strat-->
                                  @include('frontend.layout.logo')
                                    <!--brand logo end-->
                                </div>
                            </div>
                        </div>
                        <!--pos home section end-->
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->

            <!--footer area start-->
                @include('frontend.layout.footer')
            <!--footer area end-->

            <!-- modal area start -->


          <!-- modal area end -->




		<!-- all js here -->
        <script src="{{ URL::asset('frontend\assets\js\vendor\jquery-1.12.0.min.js') }}"></script>
        <script src="{{ URL::asset('frontend\assets\js\popper.js') }}"></script>
        <script src="{{ URL::asset('frontend\assets\js\bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('frontend\assets\js\ajax-mail.js') }}"></script>
        <script src="{{ URL::asset('frontend\assets\js\plugins.js') }}"></script>
        <script src="{{ URL::asset('frontend\assets\js\main.js') }}"></script>
    </body>
</html>
