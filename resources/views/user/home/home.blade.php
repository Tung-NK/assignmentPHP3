@extends('user.layout.default')

@section('home')
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets_user/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$91.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets_user/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$453.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets_user/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$87.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-start">Sub-Total :</td>
                                <td class="text-end">$523.30</td>
                            </tr>
                            <tr>
                                <td class="text-start">Eco Tax (-2.00) :</td>
                                <td class="text-end">$4.52</td>
                            </tr>
                            <tr>
                                <td class="text-start">VAT (20%) :</td>
                                <td class="text-end">$104.66</td>
                            </tr>
                            <tr>
                                <td class="text-start">Total :</td>
                                <td class="text-end theme-color">$632.48</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="inner customScroll">

            <div class="offcanvas-menu mb-20px">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="coming-soon.html">Coming Soon Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->

            <!-- Language Currency start -->
            <div class="offcanvas-userpanel mt-8">
                <ul>
                    <!-- Language Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">English <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">English</a></li>
                            <li><a href="#"> Italiano</a></li>
                            <li><a href="#"> Français</a></li>
                            <li><a href="#"> Filipino</a></li>
                        </ul>
                    </li>
                    <!-- Language End -->
                    <!-- Currency Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">USD $ <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">USD $</a></li>
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">POUND £</a></li>
                            <li><a href="#">FRANC ₣</a></li>
                        </ul>
                    </li>
                    <!-- Currency End -->
                </ul>
            </div>
            <!-- Language Currency End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    <div class="offcanvas-overlay"></div>

    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide d-flex">
                    <div class="hero-bg-image">
                        <img src="assets_user/images/slider-image/slider-2-1.jpg" alt="">
                    </div>
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8 offset-2 align-self-center m-auto">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1 text-center">
                                    <span class="category">New Products</span>
                                    <h2 class="title-1">Flexible Sofa Set</h2>
                                    <p class="w-100">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo
                                        tempor incididunt ut labore et dolore magna</p>
                                    <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide d-flex text-center">
                    <div class="hero-bg-image">
                        <img src="assets_user/images/slider-image/slider-2-2.jpg" alt="">
                    </div>
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8 offset-2 align-self-center m-auto">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category">New Products</span>
                                    <h2 class="title-1">Flexible Sofa Set</h2>
                                    <p class="w-100">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo
                                        tempor incididunt ut labore et dolore magna</p>
                                    <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->

    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="banner-2">
                        <img src="assets_user/images/banner/5.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    New Office Chair <br /> Collection
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <div class="banner-2">
                        <img src="assets_user/images/banner/6.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Living Room <br /> Collection </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="banner-2">
                        <img src="assets_user/images/banner/7.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Children Room <br /> Collection
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title mb-0">
                        <h2 class="title">Our Products</h2>
                        <p class="sub-title mb-30px">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo
                            tempor incididunt ut labore</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                    <ul class="product-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-product-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-best-sellers">Best
                                Sellers </a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">Sale
                                Items</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">On
                                Sales</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/4.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/6.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/8.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/10.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/12.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/14.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/16.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="tab-product-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/4.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/6.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/8.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/10.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/12.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/14.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/16.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-product-sale-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/4.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/6.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/8.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/10.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/12.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/14.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/16.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-product-on-sales">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair
                                                </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/4.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/6.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/8.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/10.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/12.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/14.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase
                                                    bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets_user/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets_user/images/product-image/16.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom
                                                    Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->

    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container-fluid">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-6 col-md-6 col-12 mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner-3">
                        <img src="assets_user/images/banner/1.jpg" alt="" />
                        <div class="info justify-content-end">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Sale Furniture <br /> For Summer
                                </h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner-3">
                        <img src="assets_user/images/banner/2.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Office Chair <br /> For Best Offer</h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- New Product Start -->
    <div class="section pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">New Products</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor
                            incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up"
                data-aos-delay="200">
                <div class="new-product-wrapper swiper-wrapper">
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets_user/images/product-image/1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets_user/images/product-image/2.jpg"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets_user/images/product-image/3.jpg" alt="Product" />
                                    <img class="hover-image" src="assets_user/images/product-image/4.jpg"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets_user/images/product-image/5.jpg" alt="Product" />
                                    <img class="hover-image" src="assets_user/images/product-image/6.jpg"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets_user/images/product-image/7.jpg" alt="Product" />
                                    <img class="hover-image" src="assets_user/images/product-image/8.jpg"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets_user/images/product-image/9.jpg" alt="Product" />
                                    <img class="hover-image" src="assets_user/images/product-image/10.jpg"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Product End -->


    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Latest News</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor
                            incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets_user/images/blog-image/1.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">Interior design is the art.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod
                                tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read
                                More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets_user/images/blog-image/2.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">Decorate your home with furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod
                                tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read
                                More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets_user/images/blog-image/3.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">Spatialize with that the furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod
                                tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read
                                More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets_user/images/blog-image/4.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">Unique products will impress.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod
                                tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read
                                More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->

    <!-- Footer Area Start -->

    <!-- Footer Area End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top mb-20px">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/2.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/3.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/4.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/5.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/2.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/3.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/4.jpg"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets_user/images/product-image/5.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews
                                            (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm
                                    tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud
                                    exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button class="add-cart btn btn-primary btn-hover-primary ml-4"> Add To
                                            Cart</button>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
@endsection
