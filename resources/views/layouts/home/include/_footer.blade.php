<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="{{ asset('site_assets/assets/imgs/theme/icons/icon-email.svg') }}" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>
                        <div class="col my-4 my-md-0 des">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="{{ asset('site_assets/assets/imgs/theme/logo.svg') }}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolores quae, omnis earum id! Expedita aperiam placeat quisquam corporis dicta quibusdam quia illo laborum praesentium, architecto tempora quidem iusto mollitia.
                        </p>
                       
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-youtube.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Make Money With EgyMerch</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">
                                Create designs and open a shop for free!
                                <br>
                                No storage needed, we store, print and ship for you .
                                <br>
                                It’s easy and fun and also FREE!

                             </p>
                          
                        </div>
                        <a href="{{ route('seller.index') }}" class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg">
                            @lang('home.start_selling')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2021, <strong class="text-brand">Evara</strong> - HTML Ecommerce Template </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="http://ahmedsamidev.com" target="_blank">Ahmed Sami</a>. All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>