@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    <div id="shopify-section-header" class="shopify-section">
        <div id="pseudo_sticky_block"></div>

        <header id="page_header">
            <div class="page_container">
                <div class="top_pannel">
                    <div class="container">
                        <div class="top_pannel_text">
                            {{ $SpiceNavbarData->SN_text1 ?? null }}
                        </div>
                    </div>
                </div>

                <div class="header_wrap1">
                    <div class="container header_main_wrap">
                        <div class="header_wrap2 header_left">
                            <a class="header_logo" href="{{ $SpiceNavbarData->SN_logo_url ?? null }}">
                                <img src="{{ asset($SpiceNavbarData->SN_logo ?? '') }}" alt="theme848-spices-store"
                                    style="max-width: 170px" />
                            </a>
                        </div>

                        <div class="header_wrap2 header_center">
                            <nav id="megamenu" class="megamenu">
                                <h2 id="megamenu_mobile_toggle">
                                    <i class="{{ $SpiceNavbarData->SN_icon ?? null }}"
                                        aria-hidden="true"></i>{{ $SpiceNavbartData->SN_icon_text ?? null }}
                                </h2>

                                <div id="megamenu_mobile_close">
                                    <div class="close_icon"></div>
                                </div>

                                <ul id="megamenu_level__1" class="level_1">
                                    <li class="level_1__item level_2__small">
                                        <a class="level_1__link"
                                            href="/spice-home">{{ $SpiceNavbarData->SN_icon1_text ?? null }}
                                            <i class="{{ $SpiceNavbarData->SN_icon1 ?? null }}"
                                                data-submenu="menu_1524227640085"></i>
                                        </a>
                                    </li>

                                    <li class="level_1__item level_2__links">
                                        <a class="level_1__link"
                                            href="/spice-products">{{ $SpiceNavbarData->SN_icon2_text ?? null }}
                                            <i class="{{ $SpiceNavbarData->SN_icon2 ?? null }}"
                                                data-submenu="menu_1525679653045"></i>
                                        </a>
                                    </li>

                                    <li class="level_1__item">
                                        <a class="level_1__link"
                                            href="/spice-contactus">{{ $SpiceNavbarData->SN_icon3_text ?? null }}
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        {{-- <div class="header_wrap2 header_right">
                            <div class="header_cart" id="main__cart_item">
                                <a class="cart_link" href="{{ $SpiceNavbarData->SN_cart_url ?? null }}"><i
                                        class="{{ $SpiceNavbarData->SN_cart_icon ?? null }}" aria-hidden="true"></i>
                                    {{ $SpiceNavbarData->SN_cart_text ?? null }}</a>

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
                                            {{ $SpiceNavbarData->SN_textA ?? null }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
