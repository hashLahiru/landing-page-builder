@extends('spice-web-template.layouts.app')          {{-- Nithya Jayasooriya 2024/12/4 --}}

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




<div id="shopify-section-1563276353830"
class="shopify-section section section_homepage section_featured-products">
<div class="container">
    <h2 class="section_heading">{{ $PopularProductData->pop_title ?? null }}</h2>

    <div class="row product_listing__main product_listing__main_featured">
        <div class="col-xs-4 item_3_1 item_2_1">
            <div class="product_item">
                <div class="product_info">
                    <p class="product_name">
                        <a href="{{ $PopularProductData->pop_pro1_url ?? null }}">{{ $PopularProductData->pop_pro1_name ?? null }}</a>
                    </p>

                    <p class="product_desc product_desc__short">
                        {{ $PopularProductData->pop_paraA1 ?? null }}
                    </p>
                    <p class="product_desc product_desc__long">
                        {{ $PopularProductData->pop_paraB1 ?? null }}
                    </p>

                    <div class="product_prop">
                        <p class="product_price">
                            <span class="money">{{ $PopularProductData->pop_price1 ?? null }}</span>
                        </p>

                        <p class="product_color"></p>
                    </div>
                </div>

                <div class="product_img">
                    <a class="img_change"
                        href="{{ $PopularProductData->pop_imgA1_url ?? null }}">
                        <img class="img__1"
                            src="{{ asset($PopularProductData->pop_imgA1 ?? '') }}"
                            alt="Schani Moong Split Chilka" />

                        <img class="img__2"
                            src="{{ asset($PopularProductData->pop_imgB1 ?? '') }}"
                            alt="Schani Moong Split Chilka" />

                        <span class="product_badge new">{{ $PopularProductData->pop_text1 ?? null }}</span>
                    </a>
                </div>

                <div class="product_links">
                    <form method="post" action="{{ $PopularProductData->pop_action1 ?? null }}"
                        class="add_to_cart_form">
                        <input type="hidden" name="id" value="32090888503393" />
                        <button class="btn-cart" type="submit">
                            <i class="{{ $PopularProductData->pop_btn1_icon ?? null }}"></i>{{ $PopularProductData->pop_btn1_name ?? null }}
                        </button>
                    </form>

                    <a class="wishlist_btn wishlist_add_login" href="{{ $PopularProductData->pop_iconA1_url ?? null }}"
                        title="Add to the wishlist"><i class="{{ $PopularProductData->pop_iconA1 ?? null }}"
                            aria-hidden="true"></i></a>

                    <a class="quick_view_btn" href="{{ $PopularProductData->pop_iconB1_url ?? null }}"
                        title="Quick view"><i class="{{ $PopularProductData->pop_iconB1 ?? null }}" aria-hidden="true"></i></a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-xs-4">
            <div class="product_item">
                <div class="product_info">
                    <p class="product_name">
                        <a href="{{ $PopularProductData->pop_pro2_url ?? null }}">{{ $PopularProductData->pop_pro2_name ?? null }}</a>
                    </p>

                    <p class="product_desc product_desc__short">
                        {{ $PopularProductData->pop_paraA2 ?? null }}
                    </p>
                    <p class="product_desc product_desc__long">
                        {{ $PopularProductData->pop_paraB2 ?? null }}
                    </p>

                    <div class="product_prop">
                        <p class="product_price">
                            <span class="money">{{ $PopularProductData->pop_price2 ?? null }}</span>
                        </p>

                        <p class="product_color"></p>
                    </div>
                </div>

                <div class="product_img">
                    <a class="img_change"
                        href="{{ $PopularProductData->pop_imgA2_url ?? null }}">
                        <img class="img__1"
                            src="{{ asset($PopularProductData->pop_imgA2 ?? '') }}"
                            alt="McCormick Oregano Leaves" />

                        <img class="img__2"
                            src="{{ asset($PopularProductData->pop_imgB2 ?? '') }}"
                            alt="McCormick Oregano Leaves" />

                        <span class="product_badge new">{{ $PopularProductData->pop_text2 ?? null }}</span>
                    </a>
                </div>

                <div class="product_links">
                    <form method="post" action="{{ $PopularProductData->pop_action2 ?? null }}"
                        class="add_to_cart_form">
                        <input type="hidden" name="id" value="32090888142945" />
                        <button class="btn-cart" type="submit">
                            <i class="{{ $PopularProductData->pop_btn2_icon ?? null }}"></i>{{ $PopularProductData->pop_btn2_name ?? null }}
                        </button>
                    </form>

                    <a class="wishlist_btn wishlist_add_login" href="{{ $PopularProductData->pop_iconA2_url ?? null }}"
                        title="Add to the wishlist"><i class="{{ $PopularProductData->pop_iconA2 ?? null }}"
                            aria-hidden="true"></i></a>

                    <a class="quick_view_btn" href="{{ $PopularProductData->pop_iconB2_url ?? null }}"
                        title="Quick view"><i class="{{ $PopularProductData->pop_iconB2 ?? null }}" aria-hidden="true"></i></a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-xs-4 item_2_1">
            <div class="product_item">
                <div class="product_info">
                    <p class="product_name">
                        <a href="{{ $PopularProductData->pop_pro3_url ?? null }}">{{ $PopularProductData->pop_pro3_name ?? null }}</a>
                    </p>

                    <p class="product_desc product_desc__short">
                        {{ $PopularProductData->pop_paraA3 ?? null }}
                    </p>
                    <p class="product_desc product_desc__long">
                        {{ $PopularProductData->pop_paraB3 ?? null }}
                    </p>

                    <div class="product_prop">
                        <p class="product_price">
                            <span class="money money_sale">    {{ $PopularProductData->pop_priceA3 ?? null }}</span>

                            <span class="money">    {{ $PopularProductData->pop_priceB3 ?? null }}</span>
                        </p>

                        <p class="product_color"></p>
                    </div>
                </div>

                <div class="product_img">
                    <a class="img_change"
                        href=" {{ $PopularProductData->pop_imgA3_url ?? null }}">
                        <img class="img__1"
                            src="{{ asset($PopularProductData->pop_imgA3 ?? '') }}"
                            alt="Frontier Cinnamon Sticks" />

                        <img class="img__2"
                            src="{{ asset($PopularProductData->pop_imgB3 ?? '') }}"
                            alt="Frontier Cinnamon Sticks" />

                        <span class="product_badge new">{{ $PopularProductData->pop_text3 ?? null }}</span>

                        <span class="product_badge sale">{{ $PopularProductData->pop_dis_text ?? null }}</span>
                    </a>
                </div>

                <div class="product_links">
                    <form method="post" action="{{ $PopularProductData->pop_action3 ?? null }}"
                        class="add_to_cart_form">
                        <input type="hidden" name="id" value="32090888011873" />
                        <button class="btn-cart" type="submit">
                            <i class="{{ $PopularProductData->pop_btn3_icon ?? null }}"></i>{{ $PopularProductData->pop_btn3_name ?? null }}
                        </button>
                    </form>

                    <a class="wishlist_btn wishlist_add_login" href="{{ $PopularProductData->pop_iconA3_url ?? null }}"
                        title="Add to the wishlist"><i class="{{ $PopularProductData->pop_iconA3 ?? null }}"
                            aria-hidden="true"></i></a>

                    <a class="quick_view_btn" href="{{ $PopularProductData->pop_iconB3_url ?? null }}"
                        title="Quick view"><i class="{{ $PopularProductData->pop_iconB3 ?? null }}" aria-hidden="true"></i></a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>