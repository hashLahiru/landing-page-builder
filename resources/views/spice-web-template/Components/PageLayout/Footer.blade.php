@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    <div class="page_wrapper">
        {{-- <div id="page_preloader__bg">
            <img id="page_preloader__img"
                src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/shopify_logo0294.gif?v=124153987796372640561587542594') }}"
                alt="" />
        </div>

        <script>
            preloaderBg = document.getElementById("page_preloader__bg");
            preloaderImg = document.getElementById("page_preloader__img");

            window.addEventListener("load", function() {
                preloaderBg.classList.add("off");
                preloaderImg.classList.add("off");
            });
        </script> --}}
        
<div id="shopify-section-footer" class="shopify-section">
    <footer class="inverted" style="background: #5fac00">
        <div class="footer_row__1">
            <div class="container">
                <div class="row footer_main">
                    <div class="col-sm-3 footer_block footer_block__2_1">
                        <div class="footer_item footer_item__about">
                            <h3></h3>

                            <img src="{{ asset('SpiceWebTemplate/cdn/shop/files/spiceX_225x125_crop_center8a9c.png') }}"
                                alt="theme848-spices-store" />

                            <div class="about_text">
                                <p>&copy;Powered by Shopify</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block">
                        <div class="footer_item footer_item__links">
                            <h3>Categories</h3>

                            <ul>
                                <li>
                                    <a href="collections/candied-fruits.html">CANDIED FRUITS</a>
                                </li>

                                <li>
                                    <a href="collections/spices-herbs.html">Spices & Herbs</a>
                                </li>

                                <li>
                                    <a href="collections/natural-flavorings-extracts.html">Natural Flavorings &
                                        Extracts</a>
                                </li>

                                <li>
                                    <a href="collections/spice-blends.html">Spice Blends</a>
                                </li>

                                <li>
                                    <a href="collections/salt-free.html">Salt-Free</a>
                                </li>

                                <li>
                                    <a href="collections/seasonings.html">Seasonings</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block footer_block__2_1">
                        <div class="footer_item footer_item__links">
                            <h3>Information</h3>

                            <ul>
                                <li>
                                    <a href="pages/about-us.html">About Us</a>
                                </li>

                                <li>
                                    <a href="pages/contact-us.html">Contact Us</a>
                                </li>

                                <li>
                                    <a href="collections/all.html">Catalog</a>
                                </li>

                                <li>
                                    <a href="collections.html">Collections</a>
                                </li>

                                <li>
                                    <a href="policies/privacy-policy.html">Privacy Policy</a>
                                </li>

                                <li>
                                    <a href="blogs/news.html">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block">
                        <div class="footer_item footer_item__links">
                            <h3>My Account</h3>

                            <ul>
                                <li>
                                    <a href="account/login4236.html">My Account</a>
                                </li>

                                <li>
                                    <a href="account/login.html">Log in</a>
                                </li>

                                <li>
                                    <a href="account/login4918.html">My Addresses</a>
                                </li>

                                <li>
                                    <a href="account/login4236.html">My Orders</a>
                                </li>

                                <li>
                                    <a href="pages/password-page.html">Password page</a>
                                </li>

                                <li>
                                    <a href="pages/contact-us.html">Contact Us</a>
                                </li>

                                <li>
                                    <a href="blogs/news.html">Latest News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_row__2">
            <div class="container">
                <div class="footer_wrap_1">
                    <div class="footer_wrap_2 footer_center">
                        ©theme848-spices-store.
                        <a target="_blank" rel="nofollow"
                            href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                            by Shopify</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        #shopify-section-footer footer {
            padding-top: 26px;
        }
    </style>
</div>
</div>

<a id="back_top" href="#">
<i class="fa fa-angle-up" aria-hidden="true"></i>
</a>