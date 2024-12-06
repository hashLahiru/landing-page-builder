@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    <div class="page_wrapper">
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
        </script>

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

        <div class="page_container">
            <div class="main_content">
                <!-- BEGIN content_for_index -->
                <div id="shopify-section-1563274168890" class="shopify-section index-section">
                    <div class="section section_homepage section_slideshow_full_width section_slideshow__large swiper-container"
                        id="slideshow_1563274168890" data-autoplay="false" data-speed="5000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/slide-1_2048x1214_crop_top7279.jpg') }});
                    ">
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2>Exquisite spices & seasoning</h2>

                                            <a class="btn slider_btn" href="collections/bras.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/slide-3_2048x1214_crop_top7279.jpg') }});
                    ">
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2>Exquisite spices & seasoning</h2>

                                            <a class="btn slider_btn" href="collections/collection.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/slide-2_2048x1214_crop_top7279.jpg?v=1614350745') }});
                    ">
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2>Exquisite spices & seasoning</h2>

                                            <a class="btn slider_btn" href="collections/frontpage.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/slide-4_2048x1214_crop_top7279.jpg') }});
                    ">
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2>Exquisite spices & seasoning</h2>

                                            <a class="btn slider_btn" href="collections/sexy-lingerie.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pagination_1563274168890" class="swiper_pagination"></div>

                            <div id="slider_prev_1563274168890" class="swiper_btn swiper_btn__prev"></div>
                            <div id="slider_next_1563274168890" class="swiper_btn swiper_btn__next"></div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563274698392" class="shopify-section section section_homepage section_gallery">
                    <h4>explore & choose</h4>

                    <h2>categories</h2>

                    <div class="section_gallery__4 style_4">
                        <div class="row galery_wrap">
                            <div class="col-12 col-xs-6 col-lg-3">
                                <div class="gallery_item">
                                    <div class="img_placeholder__wrap img_placeholder__small"
                                        style="background-color: #ffffff"></div>

                                    <a class="item_caption" href="collections/candied-fruits.html">
                                        <div class="caption_text">
                                            <h4>COOKING INGREDIENTS</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-xs-6 col-lg-3">
                                <div class="gallery_item">
                                    <div class="img_placeholder__wrap img_placeholder__small"
                                        style="background-color: #ffffff"></div>

                                    <a class="item_caption" href="collections/natural-flavorings-extracts.html">
                                        <div class="caption_text">
                                            <h4>BAKING INGREDIENTS</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-xs-6 col-lg-3">
                                <div class="gallery_item">
                                    <div class="img_placeholder__wrap img_placeholder__small"
                                        style="background-color: #ffffff"></div>

                                    <a class="item_caption" href="collections/spice-blends.html">
                                        <div class="caption_text">
                                            <h4>SALTS + PEPPERCORNS</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-xs-6 col-lg-3">
                                <div class="gallery_item">
                                    <div class="img_placeholder__wrap img_placeholder__small"
                                        style="background-color: #ffffff"></div>

                                    <a class="item_caption" href="products/black-pepper-whole.html">
                                        <div class="caption_text">
                                            <h4>herbs</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563275721948"
                    class="shopify-section section section_homepage section_banners_custom">
                    <div class="row">
                        <div class="col-sm-6 banner_big">
                            <div class="banner_item">
                                <div class="img_placeholder__wrap img_placeholder__small"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/banner-1_1024x565_crop_centerb695.jpg') }});
                    ">
                                </div>

                                <div class="banner_caption position_center">
                                    <div class="caption_text">
                                        <h3>Best spice blends</h3>

                                        <a class="btn banner_btn" href="products/candied-fancy-nectarines.html">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 banner_big">
                            <div class="banner_item">
                                <div class="img_placeholder__wrap img_placeholder__small"
                                    style="
                      background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/banner-2_1024x565_crop_center91ba.jpg') }});
                    ">
                                </div>

                                <div class="banner_caption position_center">
                                    <div class="caption_text">
                                        <h3>Roots and rhizomes</h3>

                                        <a class="btn banner_btn" href="products/camel-green-peas.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563276353830"
                    class="shopify-section section section_homepage section_featured-products">
                    <div class="container">
                        <h2 class="section_heading">popuar products</h2>

                        <div class="row product_listing__main product_listing__main_featured">
                            <div class="col-xs-4 item_3_1 item_2_1">
                                <div class="product_item">
                                    <div class="product_info">
                                        <p class="product_name">
                                            <a href="products/schani-moong-split-chilka.html">Schani Moong...</a>
                                        </p>

                                        <p class="product_desc product_desc__short">
                                            Enjoy shopping in our store! Need help? You can address
                                            our 24/7 online suppo...
                                        </p>
                                        <p class="product_desc product_desc__long">
                                            Enjoy shopping in our store! Need help? You can address
                                            our 24/7 online support system. There you can find all
                                            answers concerning our goods, terms and prices. So don`t
                                            waste your time on hesitation and make your purchase in
                                            our store. We bring positive emotions and elegant taste
                                            into your dishes. Remember that you can get a good
                                            benefit in our store.
                                        </p>

                                        <div class="product_prop">
                                            <p class="product_price">
                                                <span class="money">$2.10</span>
                                            </p>

                                            <p class="product_color"></p>
                                        </div>
                                    </div>

                                    <div class="product_img">
                                        <a class="img_change"
                                            href="collections/salt-free/products/schani-moong-split-chilka.html">
                                            <img class="img__1"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/tandoori-seasoning_01_370x260_crop_topc39e.png') }}"
                                                alt="Schani Moong Split Chilka" />

                                            <img class="img__2"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/tandoori-seasoning_02_370x260_crop_topc39e.png') }}"
                                                alt="Schani Moong Split Chilka" />

                                            <span class="product_badge new">new</span>
                                        </a>
                                    </div>

                                    <div class="product_links">
                                        <form method="post" action="https://theme848-spices-store.myshopify.com/cart/add"
                                            class="add_to_cart_form">
                                            <input type="hidden" name="id" value="32090888503393" />
                                            <button class="btn-cart" type="submit">
                                                <i class="fa fa-shopping-bag"></i>Add to cart
                                            </button>
                                        </form>

                                        <a class="wishlist_btn wishlist_add_login" href="pages/wishlist.html"
                                            title="Add to the wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>

                                        <a class="quick_view_btn" href="products/schani-moong-split-chilka.html"
                                            title="Quick view"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="product_item">
                                    <div class="product_info">
                                        <p class="product_name">
                                            <a href="products/mccormick-oregano-leaves.html">McCormick Or...</a>
                                        </p>

                                        <p class="product_desc product_desc__short">
                                            We care about our clients and never let them down. Our
                                            assortment can satisfy...
                                        </p>
                                        <p class="product_desc product_desc__long">
                                            We care about our clients and never let them down. Our
                                            assortment can satisfy most whimsical clients. Enjoy
                                            shopping in our store! Need help? You can address our
                                            24/7 online support system. There you can find all
                                            answers concerning our goods, terms and prices. So don`t
                                            waste your time on hesitation and make your purchase in
                                            our store.
                                        </p>

                                        <div class="product_prop">
                                            <p class="product_price">
                                                <span class="money">$5.30</span>
                                            </p>

                                            <p class="product_color"></p>
                                        </div>
                                    </div>

                                    <div class="product_img">
                                        <a class="img_change"
                                            href="collections/salt-free/products/mccormick-oregano-leaves.html">
                                            <img class="img__1"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/sichuan-pepper-sea-salt_01_370x260_crop_topce2f.png') }}"
                                                alt="McCormick Oregano Leaves" />

                                            <img class="img__2"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/sichuan-pepper-sea-salt_02_370x260_crop_topce2f.png') }}"
                                                alt="McCormick Oregano Leaves" />

                                            <span class="product_badge new">new</span>
                                        </a>
                                    </div>

                                    <div class="product_links">
                                        <form method="post" action="https://theme848-spices-store.myshopify.com/cart/add"
                                            class="add_to_cart_form">
                                            <input type="hidden" name="id" value="32090888142945" />
                                            <button class="btn-cart" type="submit">
                                                <i class="fa fa-shopping-bag"></i>Add to cart
                                            </button>
                                        </form>

                                        <a class="wishlist_btn wishlist_add_login" href="pages/wishlist.html"
                                            title="Add to the wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>

                                        <a class="quick_view_btn" href="products/mccormick-oregano-leaves.html"
                                            title="Quick view"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-xs-4 item_2_1">
                                <div class="product_item">
                                    <div class="product_info">
                                        <p class="product_name">
                                            <a href="products/frontier-cinnamon-sticks.html">Frontier Cin...</a>
                                        </p>

                                        <p class="product_desc product_desc__short">
                                            Our spices are real bestsellers and they have a great
                                            number of faithful fans...
                                        </p>
                                        <p class="product_desc product_desc__long">
                                            Our spices are real bestsellers and they have a great
                                            number of faithful fans all over the country. There is
                                            no doubt about our reputation because it`s perfect and
                                            our clients` testimonials can prove this fact. We care
                                            about our clients and never let them down. Our
                                            assortment can satisfy most whimsical clients. Enjoy
                                            shopping in our store!
                                        </p>

                                        <div class="product_prop">
                                            <p class="product_price">
                                                <span class="money money_sale">$4.20</span>

                                                <span class="money">$3.80</span>
                                            </p>

                                            <p class="product_color"></p>
                                        </div>
                                    </div>

                                    <div class="product_img">
                                        <a class="img_change"
                                            href="collections/salt-free/products/frontier-cinnamon-sticks.html">
                                            <img class="img__1"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/organic-bay-leaves_01_370x260_crop_top74e9.png') }}"
                                                alt="Frontier Cinnamon Sticks" />

                                            <img class="img__2"
                                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/organic-bay-leaves_02_370x260_crop_top74e9.png') }}"
                                                alt="Frontier Cinnamon Sticks" />

                                            <span class="product_badge new">new</span>

                                            <span class="product_badge sale">–10%</span>
                                        </a>
                                    </div>

                                    <div class="product_links">
                                        <form method="post" action="https://theme848-spices-store.myshopify.com/cart/add"
                                            class="add_to_cart_form">
                                            <input type="hidden" name="id" value="32090888011873" />
                                            <button class="btn-cart" type="submit">
                                                <i class="fa fa-shopping-bag"></i>Add to cart
                                            </button>
                                        </form>

                                        <a class="wishlist_btn wishlist_add_login" href="pages/wishlist.html"
                                            title="Add to the wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>

                                        <a class="quick_view_btn" href="products/frontier-cinnamon-sticks.html"
                                            title="Quick view"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563276479572" class="shopify-section section section_homepage section_lookbook">
                    <div class="lookbook_wrap">
                        <div class="lookbook_img">
                            <div class="img_placeholder__wrap"
                                style="
                    background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/lookbook-bg_1440x5471b1d.jpg') }});
                  ">
                            </div>
                        </div>

                        <div class="lookbook_container">
                            <div class="lookbook_item caption_left caption_bottom" style="left: 25%; top: 33%">
                                <a class="lookbook_item__bullet" href="products/chiquilin-smoked-paprika.html">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>

                                <a class="lookbook_item__caption" href="products/chiquilin-smoked-paprika.html">
                                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/malaysian-satay-seasoning_01_80x100_crop_top92ce.png') }}"
                                        alt="Chiquilin Smoked Paprika" />
                                    <span class="product_name">Chiquilin Smoked Paprika</span>
                                    <span class="money">$2.70</span>
                                </a>
                            </div>
                            <div class="lookbook_item caption_left caption_top" style="left: 36%; top: 67%">
                                <a class="lookbook_item__bullet" href="products/frontier-ginger-root-ground.html">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>

                                <a class="lookbook_item__caption" href="products/frontier-ginger-root-ground.html">
                                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/organic-dried-kaffir-lime-leaves_01_80x100_crop_top97b5.png') }}"
                                        alt="Frontier Ginger Root Ground" />
                                    <span class="product_name">Frontier Ginger Root Ground</span>
                                    <span class="money">$4.20</span>
                                </a>
                            </div>
                            <div class="lookbook_item caption_right caption_top" style="left: 49%; top: 43%">
                                <a class="lookbook_item__bullet" href="products/black-pepper-whole.html">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>

                                <a class="lookbook_item__caption" href="products/black-pepper-whole.html">
                                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01_80x100_crop_top1108.png') }}"
                                        alt="Black Pepper Whole" />
                                    <span class="product_name">Black Pepper Whole</span>
                                    <span class="money">$2.05</span>
                                </a>
                            </div>
                            <div class="lookbook_item caption_right caption_bottom" style="left: 74%; top: 65%">
                                <a class="lookbook_item__bullet" href="products/camel-green-peas.html">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>

                                <a class="lookbook_item__caption" href="products/camel-green-peas.html">
                                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/basil_california_01_80x100_crop_top3248.png') }}"
                                        alt="Camel Green Peas" />
                                    <span class="product_name">Camel Green Peas</span>
                                    <span class="money">$6.50</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563351982424"
                    class="shopify-section section section_homepage section_blog-with-carousel">
                    <div class="container">
                        <div class="row">
                            <div class="blog_block col-sm-12">
                                <div class="blog_slider swiper-container" id="blog_slider_1563351982424">
                                    <h2 class="section_heading">Latest from the blog</h2>

                                    <div class="swiper-wrapper">
                                        <div class="article_item swiper-slide">
                                            <div class="layer_2">
                                                <div class="blog_article_content">
                                                    <h3 class="article_title">
                                                        <a href="blogs/news/impact-the-heart-of-business.html">Impact - The
                                                            Heart of Business</a>
                                                    </h3>

                                                    <p class="article_content">
                                                        Thousands of people dream of having their own
                                                        business and even more so be a successful
                                                        entrepreneur. But what does it take to achieve
                                                        success in the business industry? One of the most
                                                        successful entrepreneurs featured at the Forbes
                                                        website,...
                                                    </p>

                                                    <a class="btn article_btn"
                                                        href="blogs/news/impact-the-heart-of-business.html">Read more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="article_item swiper-slide">
                                            <div class="layer_2">
                                                <div class="blog_article_content">
                                                    <h3 class="article_title">
                                                        <a href="blogs/news/believe-in-the-business-of-your-dreams.html">Believe
                                                            in the Business of Your Dreams</a>
                                                    </h3>

                                                    <p class="article_content">
                                                        What is stopping you from believing in the
                                                        business of your dreams? Insecurity? Fear? Lack of
                                                        confidence? All of the above? How can you overcome
                                                        these obstructions? Your Mantras You may be
                                                        wondering if you have the necessary skills,
                                                        time,...
                                                    </p>

                                                    <a class="btn article_btn"
                                                        href="blogs/news/believe-in-the-business-of-your-dreams.html">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="article_item swiper-slide">
                                            <div class="layer_2">
                                                <div class="blog_article_content">
                                                    <h3 class="article_title">
                                                        <a href="blogs/news/explore-new-items-right-now.html">Explore New
                                                            Items Right Now</a>
                                                    </h3>

                                                    <p class="article_content">
                                                        Many students are cash-strapped, nowadays.
                                                        Nevertheless, their purchasing power is very high.
                                                        Research reveals that 20 million students in the
                                                        US have a combined disposable income of $417
                                                        billion. Moreover, another survey of students'
                                                        parents reveals that students now make...
                                                    </p>

                                                    <a class="btn article_btn"
                                                        href="blogs/news/explore-new-items-right-now.html">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="blog_slider_prev_1563351982424" class="swiper_btn swiper_btn__prev"></div>
                                    <div id="blog_slider_next_1563351982424" class="swiper_btn swiper_btn__next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1563354737917" class="shopify-section section section_divider">
                    <div class="divider_item container" style="padding-bottom: 1px; margin-bottom: 75px"></div>

                    <div class="divider_item tablet_show container" style="padding-bottom: 1px; margin-bottom: 40px">
                    </div>
                </div>
                <!-- END content_for_index -->
            </div>

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

        <div id="floating-whatsapp">
            <a href="https://wa.me/+94761968819?text=Hi, I need assistance!" target="_blank">
                <img src="{{ asset('/img/icons/whatsapp.png') }}" alt="WhatsApp" />
            </a>
        </div>

        <a id="back_top" href="#">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
    </div>
@endsection
