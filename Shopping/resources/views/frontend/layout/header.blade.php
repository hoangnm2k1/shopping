<div class="header_area">
    <div class="header_top">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="switcher">
                    <ul>
                        <li class="languages"><a href="#"><img src="frontend\assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown_languages">
                                <li><a href="#"><img src="{{ URL::asset('frontend\assets\img\logo\fontlogo.jpg') }}" alt=""> English</a></li>
                                <li><a href="#"><img src="{{ URL::asset('frontend\assets\img\logo\fontlogo2.jpg') }}" alt=""> French </a></li>
                            </ul>
                        </li>

                        <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown_currency">
                                <li><a href="#"> Dollar (USD)</a></li>
                                <li><a href="#"> Euro (EUR)  </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header_links">
                    <ul>
                        <li><a href="contact.html" title="Contact">Contact</a></li>
                        <li><a href="wishlist.html" title="wishlist">My wishlist</a></li>
                        <li><a href="my-account.html" title="My account">My account</a></li>
                        <li><a href="cart.html" title="My cart">My cart</a></li>
                        <li><a href="login.html" title="Login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_middel">
        <div class="row align-items-center">
        <!--logo start-->
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="index.html"><img src="{{ URL::asset('frontend\assets\img\logo\logo.jpg.png') }}" alt=""></a>
                </div>
            </div>
            <!--logo end-->
            <div class="col-lg-9 col-md-9">
                <div class="header_right_info">
                    <div class="search_bar">
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="shopping_cart">
                        <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i class="fa fa-angle-down"></i></a>

                        <!--mini cart-->
                        <div class="mini_cart">
                            <div class="cart_item">
                            <div class="cart_img">
                                <a href="#"><img src="{{ URL::asset('frontend\assets\img\cart\cart.jpg') }}" alt=""></a>
                            </div>
                                <div class="cart_info">
                                    <a href="#">lorem ipsum dolor</a>
                                    <span class="cart_price">$115.00</span>
                                    <span class="quantity">Qty: 1</span>
                                </div>
                                <div class="cart_remove">
                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                </div>
                            </div>
                            <div class="cart_item">
                            <div class="cart_img">
                                <a href="#"><img src="{{ URL::asset('frontend\assets\img\cart\cart2.jpg') }}" alt=""></a>
                            </div>
                                <div class="cart_info">
                                    <a href="#">Quisque ornare dui</a>
                                    <span class="cart_price">$105.00</span>
                                    <span class="quantity">Qty: 1</span>
                                </div>
                                <div class="cart_remove">
                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                </div>
                            </div>
                            <div class="shipping_price">
                                <span> Shipping </span>
                                <span>  $7.00  </span>
                            </div>
                            <div class="total_price">
                                <span> total </span>
                                <span class="prices">  $227.00  </span>
                            </div>
                            <div class="cart_button">
                                <a href="checkout.html"> Check out</a>
                            </div>
                        </div>
                        <!--mini cart end-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="row">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.html">Home</a>
                                        <div class="mega_menu jewelry">
                                            <div class="mega_items jewelry">
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">shop</a>
                                        <div class="mega_menu jewelry">
                                            <div class="mega_items jewelry">
                                                <ul>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                    <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                    <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                    <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                    <li><a href="single-product.html">Product Details</a></li>
                                                    <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                    <li><a href="single-product-video.html">Product Details video</a></li>
                                                    <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">women</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">
                                                    <h3><a href="#">Accessories</a></h3>
                                                    <ul>
                                                        <li><a href="#">Cocktai</a></li>
                                                        <li><a href="#">day</a></li>
                                                        <li><a href="#">Evening</a></li>
                                                        <li><a href="#">Sundresses</a></li>
                                                        <li><a href="#">Belts</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <h3><a href="#">HandBags</a></h3>
                                                    <ul>
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Hats and Gloves</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Bras</a></li>
                                                        <li><a href="#">Scarves</a></li>
                                                        <li><a href="#">Small Leathers</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <h3><a href="#">Tops</a></h3>
                                                    <ul>
                                                        <li><a href="#">Evening</a></li>
                                                        <li><a href="#">Long Sleeved</a></li>
                                                        <li><a href="#">Shrot Sleeved</a></li>
                                                        <li><a href="#">Tanks and Camis</a></li>
                                                        <li><a href="#">Sleeveless</a></li>
                                                        <li><a href="#">Sleeveless</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mega_bottom fix">
                                                <div class="mega_thumb">
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner1.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="mega_thumb">
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner2.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">men</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">
                                                    <h3><a href="#">Rings</a></h3>
                                                    <ul>
                                                        <li><a href="#">Platinum Rings</a></li>
                                                        <li><a href="#">Gold Ring</a></li>
                                                        <li><a href="#">Silver Ring</a></li>
                                                        <li><a href="#">Tungsten Ring</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <h3><a href="#">Bands</a></h3>
                                                    <ul>
                                                        <li><a href="#">Platinum Bands</a></li>
                                                        <li><a href="#">Gold Bands</a></li>
                                                        <li><a href="#">Silver Bands</a></li>
                                                        <li><a href="#">Silver Bands</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner3.jpg') }}" alt=""></a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">
                                                    <h3><a href="#">Column1</a></h3>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="portfolio-details.html">single portfolio </a></li>
                                                        <li><a href="about.html">About Us </a></li>
                                                        <li><a href="about-2.html">About Us 2</a></li>
                                                        <li><a href="services.html">Service </a></li>
                                                        <li><a href="my-account.html">my account </a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <h3><a href="#">Column2</a></h3>
                                                    <ul>
                                                        <li><a href="blog.html">Blog </a></li>
                                                        <li><a href="blog-details.html">Blog  Details </a></li>
                                                        <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                        <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                        <li><a href="faq.html">Frequently Questions</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega_items">
                                                    <h3><a href="#">Column3</a></h3>
                                                    <ul>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">Checkout  </a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li><a href="blog.html">blog</a>
                                        <div class="mega_menu jewelry">
                                            <div class="mega_items jewelry">
                                                <ul>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">contact us</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu d-lg-none">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <div>
                                            <div>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop.html">shop</a>
                                        <div>
                                            <div>
                                                <ul>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                    <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                    <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                    <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                    <li><a href="single-product.html">Product Details</a></li>
                                                    <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                    <li><a href="single-product-video.html">Product Details video</a></li>
                                                    <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">women</a>
                                        <div>
                                            <div>
                                                <div>
                                                    <h3><a href="#">Accessories</a></h3>
                                                    <ul>
                                                        <li><a href="#">Cocktai</a></li>
                                                        <li><a href="#">day</a></li>
                                                        <li><a href="#">Evening</a></li>
                                                        <li><a href="#">Sundresses</a></li>
                                                        <li><a href="#">Belts</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3><a href="#">HandBags</a></h3>
                                                    <ul>
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Hats and Gloves</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Bras</a></li>
                                                        <li><a href="#">Scarves</a></li>
                                                        <li><a href="#">Small Leathers</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3><a href="#">Tops</a></h3>
                                                    <ul>
                                                        <li><a href="#">Evening</a></li>
                                                        <li><a href="#">Long Sleeved</a></li>
                                                        <li><a href="#">Shrot Sleeved</a></li>
                                                        <li><a href="#">Tanks and Camis</a></li>
                                                        <li><a href="#">Sleeveless</a></li>
                                                        <li><a href="#">Sleeveless</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner1.jpg') }}" alt=""></a>
                                                </div>
                                                <div>
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner2.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">men</a>
                                        <div>
                                            <div>
                                                <div>
                                                    <h3><a href="#">Rings</a></h3>
                                                    <ul>
                                                        <li><a href="#">Platinum Rings</a></li>
                                                        <li><a href="#">Gold Ring</a></li>
                                                        <li><a href="#">Silver Ring</a></li>
                                                        <li><a href="#">Tungsten Ring</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3><a href="#">Bands</a></h3>
                                                    <ul>
                                                        <li><a href="#">Platinum Bands</a></li>
                                                        <li><a href="#">Gold Bands</a></li>
                                                        <li><a href="#">Silver Bands</a></li>
                                                        <li><a href="#">Silver Bands</a></li>
                                                        <li><a href="#">Sweets</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#"><img src="{{ URL::asset('frontend\assets\img\banner\banner3.jpg') }}" alt=""></a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <div>
                                            <div>
                                                <div>
                                                    <h3><a href="#">Column1</a></h3>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="portfolio-details.html">single portfolio </a></li>
                                                        <li><a href="about.html">About Us </a></li>
                                                        <li><a href="about-2.html">About Us 2</a></li>
                                                        <li><a href="services.html">Service </a></li>
                                                        <li><a href="my-account.html">my account </a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3><a href="#">Column2</a></h3>
                                                    <ul>
                                                        <li><a href="blog.html">Blog </a></li>
                                                        <li><a href="blog-details.html">Blog  Details </a></li>
                                                        <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                        <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                        <li><a href="faq.html">Frequently Questions</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3><a href="#">Column3</a></h3>
                                                    <ul>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">Checkout  </a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li><a href="blog.html">blog</a>
                                        <div>
                                            <div>
                                                <ul>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">contact us</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
