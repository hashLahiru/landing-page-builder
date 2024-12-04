@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    {{-- <div class="page_wrapper">
        <div id="page_preloader__bg">
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


<div id="shopify-section-header" class="shopify-section">
    <div id="pseudo_sticky_block"></div>

    <header id="page_header">
        <div class="page_container">
            <div class="top_pannel">
                <div class="container">
                    <div class="top_pannel_text">
                        Order online or call us (1800) 000 8808
                    </div>

                    <div class="top_pannel_menu">
                        <div class="header_search">
                            <span class="search_toggle"><i class="fa fa-search" aria-hidden="true"></i><i
                                    class="fa fa-times"></i></span>
                            <form action="https://theme848-spices-store.myshopify.com/search" method="get"
                                role="search" class="search_form">
                                <input type="search" name="q" placeholder="Search" aria-label="Search" />

                                <button type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>

                            <script>
                                theme.searchAjaxOn = true;
                            </script>

                            <div id="search_result_container"></div>
                        </div>

                        <div class="header_account">
                            <a href="account/login4236.html" title="My account"><i class="fa fa-user-o"
                                    aria-hidden="true"></i></a>
                        </div>

                        <div class="header_wishlist">
                            <a href="pages/wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>

                        <div class="currency_selector">
                            <div class="currency_selector__wrap" title="Currency">
                                <div id="currency_active">USD</div>

                                <ul id="currency_selector">
                                    <li data-value="USD" id="currency_selected" class="currency_selector__item">
                                        USD
                                    </li>

                                    <li data-value="EUR" class="currency_selector__item">
                                        EUR
                                    </li>

                                    <li data-value="GBP" class="currency_selector__item">
                                        GBP
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <script>
                            theme.shopCurrency = "USD";
                            theme.moneyFormat = "${{ '{' }}amount{{ '}' }}";
                            theme.moneyFormatCurrency = "${{ '{' }}amount{{ '}' }} USD";
                        </script>

                        <script src="{{ asset('SpiceWebTemplate/cdn.shopify.com/s/javascripts/currencies.js') }}" defer></script>
                        <script src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/currency-toolsaa48.js') }}" defer></script>
                    </div>
                </div>
            </div>

            <div class="header_wrap1">
                <div class="container header_main_wrap">
                    <div class="header_wrap2 header_left">
                        <a class="header_logo" href="index.html">
                            <img src="{{ asset('SpiceWebTemplate/cdn/shop/files/logo_5faca918-a849-4860-a888-0f9eef45496d_170x70_crop_center%402xbd99.png') }}"
                                alt="theme848-spices-store" style="max-width: 170px" />
                        </a>
                    </div>

                    <div class="header_wrap2 header_center">
                        <nav id="megamenu" class="megamenu">
                            <h2 id="megamenu_mobile_toggle">
                                <i class="fa fa-bars" aria-hidden="true"></i>Menu
                            </h2>

                            <div id="megamenu_mobile_close">
                                <div class="close_icon"></div>
                            </div>

                            <ul id="megamenu_level__1" class="level_1">
                                <li class="level_1__item level_2__small">
                                    <a class="level_1__link"
                                        href="https://theme764-lingerie-store.myshopify.com/">Home
                                        <i class="level_1__trigger megamenu_trigger"
                                            data-submenu="menu_1524227640085"></i>
                                    </a>
                                </li>

                                <li class="level_1__item level_2__links">
                                    <a class="level_1__link" href="collections.html">Collection
                                        <i class="level_1__trigger megamenu_trigger"
                                            data-submenu="menu_1525679653045"></i>
                                    </a>
                                </li>

                                <li class="level_1__item">
                                    <a class="level_1__link" href="pages/contact-us.html">Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header_wrap2 header_right">
                        <div class="header_cart" id="main__cart_item">
                            <a class="cart_link" href="cart.html"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i> 0
                                item(s)</a>

                            <script>
                                theme.cartAjaxOn = true;
                                theme.cartAjaxTextEmpty =
                                    "It appears that your cart is currently empty";
                                theme.cartAjaxTextTotalPrice = "Total price";
                                theme.cartAjaxTextGoCart = "Go to cart";
                                theme.cartAjaxTextClearCart = "Clear cart";
                            </script>
                            <div class="cart_content_wrap">
                                <div class="cart_content_preloader off">
                                    <div class="global_loader"></div>
                                </div>
                                <div id="cart_content_box">
                                    <p class="alert alert-warning">
                                        It appears that your cart is currently empty
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <style>
        #page_header .level_1__link:hover {
            color: #5fac00 !important;
        }

        #page_header .header_cart:hover .cart_link {
            color: #5fac00 !important;
        }

        #page_header .level_1__link.active {
            color: #5fac00 !important;
        }
    </style>
</div>