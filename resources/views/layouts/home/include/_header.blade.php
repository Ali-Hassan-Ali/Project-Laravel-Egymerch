<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                                {{-- <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a  href="page-contact.html">Our location</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/flag-fr.png') }}" alt="">Français</a></li>
                                    </ul>
                                </li>
                                @auth
                                <li><i class="fi-rs-user"></i><a style="font-weight:502;font-size:17px" href="">  my accont </a></li>
                                @else
                                <li><i class="fi-rs-user"></i><a style="font-weight:502;font-size:17px" href="">Log In </a></li>
                                <li><i class="fi-rs-user"></i><a style="font-weight:502;font-size:17px" href="">Sign Up</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ url('/') }}"><img src="{{ asset('site_assets/assets/imgs/theme/logo.svg') }}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Women's</option>
                                    <option>Men's</option>
                                    <option>Cellphones</option>
                                    <option>Computer</option>
                                    <option>Electronics</option>
                                    <option> Accessories</option>
                                    <option>Home & Garden</option>
                                    <option>Luggage</option>
                                    <option>Shoes</option>
                                    <option>Mother & Kids</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.html">
                                        <img class="svgInject" alt="Evara" src="{{ asset('site_assets/assets/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Evara" src="{{ asset('site_assets/assets/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('site_assets/assets/imgs/shop/thumbnail-3.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('site_assets/assets/imgs/shop/thumbnail-2.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{ url('/') }}"><img src="{{ asset('site_assets/assets/imgs/theme/logo.svg') }}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">

                        <div class="main-categori-wrap d-none d-lg-block">

                        </div>

                        <div class="main-categori-wrap d-none d-lg-block">

                        </div>


                        <div class="main-categori-wrap d-none d-lg-block">

                        </div>


                        <div class="main-categori-wrap d-none d-lg-block">

                        </div>

                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>


                                    <li class="position-static" >
                                        <a style="color:red;"href="{{ url('/') }}"> BestSeller <i class="fi-rs-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="position-static" >
                                        <a style="color:orange; "href="{{ url('/') }}"> Trending <i class="fi-rs-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>


                                    </li>

                                    <li class="position-static"><a href="#"> Categories <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">

                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Men's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">T-shirts</a></li>
                                                    <li><a href="shop-product-right.html">Tank Tops</a></li>

                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Women's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">T-shirts</a></li>

                                                </ul>
                                            </li>

                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Home</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Mugs</a></li>
                                                    <li><a href="shop-product-right.html">Tableau</a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="position-static" ><a href="{{ url('/shop') }}"> Shops </a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <div class="col-lg-12">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html">
                                                                    <img class="default-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-1.jpg" alt="">
                                                                    <img class="hover-img" src="http://localhost:8000/site_assets/assets/imgs/shop/product-1-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop-grid-right.html">Clothing</a>
                                                            </div>
                                                            <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>

                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a style="color:red;" href="{{ url('/') }}">Sale!</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact') }}">Contact <i style="color:red; font-size:15px" class="fi-rs-heart"></i> </a>
                                    </li>
                                </ul>
                            </nav>


                        </div>
                    </div>
                 {{--    <div class="hotline d-none d-lg-block">
                        <p><i class="fa fa-whatsapp-square"></i><span>Hotline</span> 1900 - 888 </p>
                    </div> --}}
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Evara" src="{{ asset('site_assets/assets/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="{{ asset('site_assets/assets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('site_assets/assets/imgs/theme/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                                <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{ url('/') }}">Home</a>

                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-right.html">Tablets</a></li>
                                            <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login-register.html">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a  href="page-contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-youtube.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>