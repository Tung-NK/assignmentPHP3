<div class="header section">
    <!-- Header Top Message Start -->
    <div class="header-top section-fluid bg-black">
        <div class="container">
            <div class="row row-cols-lg-2 align-items-center">
                <!-- Header Top Message Start -->
                <div class="col text-center text-lg-start">
                    <div class="header-top-massege">
                        <p>Default Welcome Message </p>
                    </div>
                </div>
                <!-- Header Top Message End -->
                <!-- Header Top Language Currency -->
                <div class="col d-none d-lg-block">
                    <div class="header-top-set-lan-curr d-flex justify-content-end">
                        <!-- Single Wedge Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"> Language : (ENG) <i
                                    class="ion-ios-arrow-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                                <li><a class="dropdown-item" href="#">Français</a></li>
                                <li><a class="dropdown-item" href="#">Filipino</a></li>
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                        <!-- Single Wedge Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle pr-0 border-0" data-bs-toggle="dropdown">Currency : (USD) <i
                                    class="ion-ios-arrow-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                                <li><a class="dropdown-item" href="#">POUND £</a></li>
                                <li><a class="dropdown-item" href="#">FRANC ₣</a></li>
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                    </div>
                </div>
                <!-- Header Top Language Currency -->
            </div>
        </div>
    </div>
    <!-- Header Top  End -->
    <!-- Header Bottom  Start -->
    <div class="header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets_user/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                    class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="#">
                                    <input class="form-control" placeholder="Enter your search key" type="text">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Wedge Start -->
                        <div class="header-bottom-set dropdown">
                            @if (Auth::check())
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"><span
                                            class="ms-3 fs-6">{{ 'Hello ' . Auth::user()->name }}</span></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Sign in</a></li>
                            @endif
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart"
                            class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu"
                            class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action End -->
            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->
    <!-- Header Bottom  Start -->
    <div class="header-bottom d-lg-none sticky-nav bg-white">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets_user/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                    class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="#">
                                    <input class="form-control" placeholder="Enter your search key" type="text">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Wedge Start -->
                        <div class="header-bottom-set dropdown">
                            @if (Auth::check())
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                @else
                                    <li><a class="dropdown-item" href="{{route('login')}}">Sign in</a></li>
                            @endif
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart"
                            class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu"
                            class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action End -->
            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->
    <!-- Main Menu Start -->
    <div class="bg-gray d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="main-menu manu-color-white">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li class="dropdown position-static"><a href="#">Shop <i
                                        class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Shop Page</a></li>
                                            <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                            <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">product Details Page</a></li>
                                            <li><a href="single-product.html">Product Single</a></li>
                                            <li><a href="single-product-variable.html">Product Variable</a></li>
                                            <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                            <li><a href="single-product-group.html">Product Group</a></li>
                                            <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                            <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Single Product Page</a></li>
                                            <li><a href="single-product-slider.html">Product Slider</a></li>
                                            <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                            </li>
                                            <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                            </li>
                                            <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Other Pages</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="my-account.html">Account Page</a></li>
                                            <li><a href="login.html">Login & Register Page</a></li>
                                            <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li>

                                        <ul class="menu-banner w-100">
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img
                                                        class="img-responsive w-100"
                                                        src="assets_user/images/banner/3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img
                                                        class="img-responsive w-100"
                                                        src="assets_user/images/banner/4.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown "><a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog
                                            Grid
                                            <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog
                                            List
                                            <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a
                                            href="blog-single-left-sidebar.html">Single
                                            Blog <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu End -->
</div>
