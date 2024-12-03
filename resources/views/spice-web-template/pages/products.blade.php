@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    
    <div class="page_wrapper">
      <div id="page_preloader__bg">
        <img
          id="page_preloader__img"
          src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/shopify_logo0294.gif') }}"
          alt=""
        />
      </div>

      <script>
        preloaderBg = document.getElementById("page_preloader__bg");
        preloaderImg = document.getElementById("page_preloader__img");

        window.addEventListener("load", function () {
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
                    <span class="search_toggle"
                      ><i class="fa fa-search" aria-hidden="true"></i
                      ><i class="fa fa-times"></i
                    ></span>
                    <form
                      action="https://theme848-spices-store.myshopify.com/search"
                      method="get"
                      role="search"
                      class="search_form"
                    >
                      <input
                        type="search"
                        name="q"
                        placeholder="Search"
                        aria-label="Search"
                      />

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
                    <a href="account/login4236.html" title="My account"
                      ><i class="fa fa-user-o" aria-hidden="true"></i
                    ></a>
                  </div>

                  <div class="header_wishlist">
                    <a href="pages/wishlist.html"
                      ><i class="fa fa-heart-o" aria-hidden="true"></i
                    ></a>
                  </div>

                  <div class="currency_selector">
                    <div class="currency_selector__wrap" title="Currency">
                      <div id="currency_active">USD</div>

                      <ul id="currency_selector">
                        <li
                          data-value="USD"
                          id="currency_selected"
                          class="currency_selector__item"
                        >
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

                  <script
                    src="{{ asset('SpiceWebTemplate/cdn.shopify.com/s/javascripts/currencies.js') }}"
                    defer
                  ></script>
                  <script
                    src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/currency-toolsaa48.js') }}"
                    defer
                  ></script>
                </div>
              </div>
            </div>

            <div class="header_wrap1">
              <div class="container header_main_wrap">
                <div class="header_wrap2 header_left">
                  <a class="header_logo" href="index.html">
                    <img
                      src="{{ asset('SpiceWebTemplate/cdn/shop/files/logo_5faca918-a849-4860-a888-0f9eef45496d_170x70_crop_center%402xbd99.png') }}"
                      alt="theme848-spices-store"
                      style="max-width: 170px"
                    />
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
                        <a
                          class="level_1__link"
                          href="https://theme764-lingerie-store.myshopify.com/"
                          >Home
                          <i
                            class="level_1__trigger megamenu_trigger"
                            data-submenu="menu_1524227640085"
                          ></i>
                        </a>

                        <ul class="level_2" id="menu_1524227640085">
                          <li>
                            <div>
                              <ul class="level_3">
                                <li class="level_3__item">
                                  <a class="level_3__link" href="index.html"
                                    >Home</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="collections/all.html"
                                    >Catalog</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="collections.html"
                                    >All Collections</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="blogs/news.html"
                                    >Blog</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="pages/about-us.html"
                                    >About Us</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="pages/contact-us.html"
                                    >Contact Us</a
                                  >
                                </li>

                                <li class="level_3__item with_ul">
                                  <a class="level_3__link" href="#"
                                    >Pages<i
                                      class="level_3__trigger megamenu_trigger"
                                      data-submenu="submenu_1524227640085-7"
                                    ></i
                                  ></a>

                                  <ul
                                    class="level_3_2 droped_linklist"
                                    id="submenu_1524227640085-7"
                                  >
                                    <li class="level_3_2_item">
                                      <a
                                        class="level_3_2_link"
                                        href="pages/delivery-info.html"
                                        >Delivery Info</a
                                      >
                                    </li>

                                    <li class="level_3_2_item">
                                      <a
                                        class="level_3_2_link"
                                        href="pages/password-page.html"
                                        >Password page</a
                                      >
                                    </li>

                                    <li class="level_3_2_item">
                                      <a
                                        class="level_3_2_link"
                                        href="pages/sections-all.html"
                                        >Sections All</a
                                      >
                                    </li>

                                    <li class="level_3_2_item">
                                      <a
                                        class="level_3_2_link"
                                        href="pages/wishlist.html"
                                        >Wishlist</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>

                      <li class="level_1__item level_2__links">
                        <a class="level_1__link active" href="collections.html"
                          >Collection
                          <i
                            class="level_1__trigger megamenu_trigger"
                            data-submenu="menu_1525679653045"
                          ></i>
                        </a>

                        <ul class="level_2" id="menu_1525679653045">
                          <li class="container">
                            <div class="megamenu_col__item align_center">
                              <a href="collections/candied-fruits.html"
                                ><img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/files/restaurant-breakfast_255x180_crop_center5d44.jpg') }}"
                                  alt="Candied fruits"
                                />

                                <h4>Candied fruits</h4>
                              </a>
                            </div>

                            <div class="megamenu_col__item align_center">
                              <a href="collections/salt-free.html"
                                ><img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/files/slide-1_255x180_crop_center7279.jpg') }}"
                                  alt="Salt-Free"
                                />

                                <h4>Salt-Free</h4>
                              </a>
                            </div>

                            <div class="megamenu_col__item align_center">
                              <a
                                href="collections/natural-flavorings-extracts.html"
                                ><img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/files/dinner-salad_255x180_crop_center5d44.jpg') }}"
                                  alt="Natural"
                                />

                                <h4>Natural</h4>
                              </a>
                            </div>

                            <div class="megamenu_col__item align_center">
                              <a href="collections/spices-herbs.html"
                                ><img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/files/slide-3_255x180_crop_center7279.jpg') }}"
                                  alt="Spices"
                                />

                                <h4>Spices</h4>
                              </a>
                            </div>
                          </li>
                        </ul>
                      </li>

                      <li class="level_1__item level_2__links">
                        <a class="level_1__link" href="collections/all.html"
                          >Catalog
                          <i
                            class="level_1__trigger megamenu_trigger"
                            data-submenu="menu_1524467474031"
                          ></i>
                        </a>

                        <ul class="level_2" id="menu_1524467474031">
                          <li class="container">
                            <div class="megamenu_col__item">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/files/shallow-focus-photography-of-two-orange-carrots-1343954_255x180_crop_center0fbd.jpg') }}"
                                alt="Catalog #1"
                              />

                              <h3>
                                Catalog #1
                                <i
                                  class="level_2__trigger megamenu_trigger"
                                  data-submenu="menu_1524467474031-1"
                                ></i>
                              </h3>

                              <ul class="level_3" id="menu_1524467474031-1">
                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/black-pepper-whole.html"
                                    >Black Pepper Whole</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/celery-seed-ground.html"
                                    >Celery Seed Ground</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/mccormick-oregano-leaves.html"
                                    >McCormick Oregano Leaves</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/spice-appeal-curry-powder.html"
                                    >Spice Appeal Curry Powder</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/the-spice-hunter-cloves.html"
                                    >The Spice Hunter Cloves</a
                                  >
                                </li>
                              </ul>
                            </div>

                            <div class="megamenu_col__item">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/files/andrea-leon-vNrpgkrRtlk-unsplash_255x180_crop_center0fbd.jpg') }}"
                                alt="Catalog #2"
                              />

                              <h3>
                                Catalog #2
                                <i
                                  class="level_2__trigger megamenu_trigger"
                                  data-submenu="menu_1524467474031-2"
                                ></i>
                              </h3>

                              <ul class="level_3" id="menu_1524467474031-2">
                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/caraway-seed-whole.html"
                                    >Caraway Seed Whole</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/cardamom-seeds.html"
                                    >Cardamom Seeds</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/chiquilin-smoked-paprika.html"
                                    >Chiquilin Smoked Paprika</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/pumpkin-pie-spice-blend.html"
                                    >Pumpkin Pie Spice Blend</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/tones-ground-cinnamon.html"
                                    >Tone's Ground Cinnamon</a
                                  >
                                </li>
                              </ul>
                            </div>

                            <div class="megamenu_col__item">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/files/aroma-aromatic-assortment-bottles-531446_255x180_crop_center0fbd.jpg') }}"
                                alt="Catalog #3"
                              />

                              <h3>
                                Catalog #3
                                <i
                                  class="level_2__trigger megamenu_trigger"
                                  data-submenu="menu_1524467474031-3"
                                ></i>
                              </h3>

                              <ul class="level_3" id="menu_1524467474031-3">
                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/black-pepper-whole.html"
                                    >Black Pepper Whole</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/camel-green-peas.html"
                                    >Camel Green Peas</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/candied-fancy-nectarines.html"
                                    >Candied Fancy Nectarines</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/cardamom-seeds.html"
                                    >Cardamom Seeds</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/frontier-cinnamon-sticks.html"
                                    >Frontier Cinnamon Sticks</a
                                  >
                                </li>
                              </ul>
                            </div>

                            <div class="megamenu_col__item">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/files/sigmund-B2BR05q9acc-unsplash_255x180_crop_center0fbd.jpg') }}"
                                alt="Catalog #4"
                              />

                              <h3>
                                Catalog #4
                                <i
                                  class="level_2__trigger megamenu_trigger"
                                  data-submenu="menu_1524467474031-4"
                                ></i>
                              </h3>

                              <ul class="level_3" id="menu_1524467474031-4">
                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/frontier-cinnamon-sticks.html"
                                    >Frontier Cinnamon Sticks</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/black-pepper-whole.html"
                                    >Black Pepper Whole</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/pumpkin-pie-spice-blend.html"
                                    >Pumpkin Pie Spice Blend</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/tones-ground-cinnamon.html"
                                    >Tone's Ground Cinnamon</a
                                  >
                                </li>

                                <li class="level_3__item">
                                  <a
                                    class="level_3__link"
                                    href="products/celery-seed-ground.html"
                                    >Celery Seed Ground</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>

                      <li class="level_1__item level_2__blog">
                        <a class="level_1__link" href="blogs/news.html"
                          >Blog
                          <i
                            class="level_1__trigger megamenu_trigger"
                            data-submenu="menu_1479747008568"
                          ></i>
                        </a>

                        <ul class="level_2" id="menu_1479747008568">
                          <li class="container">
                            <div class="megamenu_col__item">
                              <div class="blog_img">
                                <img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/articles/assorted-color-beans-in-sack-1393382_350x308_crop_center3be2.jpg') }}"
                                  alt="Impact - The Heart of Business"
                                />
                              </div>

                              <div class="blog_info">
                                <p class="blog_date">
                                  <span class="article_day">22</span>
                                  April
                                </p>

                                <h3 class="blog_title">
                                  <a
                                    href="blogs/news/impact-the-heart-of-business.html"
                                    >Impact - The Heart of Business</a
                                  >
                                </h3>
                              </div>
                            </div>

                            <div class="megamenu_col__item">
                              <div class="blog_img">
                                <img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/articles/andrea-leon-vNrpgkrRtlk-unsplash_350x308_crop_centerca93.jpg') }}"
                                  alt="Believe in the Business of Your Dreams"
                                />
                              </div>

                              <div class="blog_info">
                                <p class="blog_date">
                                  <span class="article_day">22</span>
                                  April
                                </p>

                                <h3 class="blog_title">
                                  <a
                                    href="blogs/news/believe-in-the-business-of-your-dreams.html"
                                    >Believe in the Business of Your Dreams</a
                                  >
                                </h3>
                              </div>
                            </div>

                            <div class="megamenu_col__item">
                              <div class="blog_img">
                                <img
                                  src="{{ asset('SpiceWebTemplate/cdn/shop/articles/shallow-focus-photography-of-two-orange-carrots-1343954_350x308_crop_center0b5f.jpg') }}"
                                  alt="Explore New Items Right Now"
                                />
                              </div>

                              <div class="blog_info">
                                <p class="blog_date">
                                  <span class="article_day">22</span>
                                  April
                                </p>

                                <h3 class="blog_title">
                                  <a
                                    href="blogs/news/explore-new-items-right-now.html"
                                    >Explore New Items Right Now</a
                                  >
                                </h3>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>

                      <li class="level_1__item level_2__products">
                        <a
                          class="level_1__link"
                          href="collections/salt-free.html"
                          >Sale
                        </a>
                      </li>

                      <li class="level_1__item">
                        <a class="level_1__link" href="pages/contact-us.html"
                          >Contact Us
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>

                <div class="header_wrap2 header_right">
                  <div class="header_cart" id="main__cart_item">
                    <a class="cart_link" href="cart.html"
                      ><i class="fa fa-shopping-cart" aria-hidden="true"></i> 0
                      item(s)</a
                    >

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
        <div class="breadcrumbs">
          <div class="container">
            <ul>
              <li><a href="index.html">Home</a></li>

              <li><span>Collections</span></li>
            </ul>
          </div>
        </div>

        <div class="main_content">
          <div
            id="shopify-section-template-collections-listing"
            class="shopify-section section_template section_template__collections-listing"
          >
            <div class="container">
              <h1 class="page_heading">Collections</h1>

              <div class="row collection_listing__main">
                <div class="col-xs-3 item_4_1 item_2_1">
                  <div
                    class="collection_item flexible_block flexible_block__normal flexible_block__hover flexible_block__"
                  >
                    <a href="collections/candied-fruits.html">
                      <div class="layer_1 collection_img">
                        <div
                          class="img_placeholder__wrap img_placeholder__medium"
                          style="
                            background-image: url({{ asset('SpiceWebTemplate/cdn/shop/collections/1_270x255_crop_centeredf8.jpg?v=1587729635') }});
                          "
                        ></div>
                      </div>

                      <div class="layer_2">
                        <div>
                          <span class="collection_title">CANDIED FRUITS</span>

                          <span class="collection_products">9 products</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div
                    class="collection_item flexible_block flexible_block__normal flexible_block__hover flexible_block__"
                  >
                    <a href="collections/natural-flavorings-extracts.html">
                      <div class="layer_1 collection_img">
                        <div
                          class="img_placeholder__wrap img_placeholder__medium"
                          style="
                            background-image: url({{ asset('SpiceWebTemplate/cdn/shop/collections/2_270x255_crop_center0151.jpg') }});
                          "
                        ></div>
                      </div>

                      <div class="layer_2">
                        <div>
                          <span class="collection_title"
                            >Natural Flavorings & Extracts</span
                          >

                          <span class="collection_products">12 products</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-xs-3 item_2_1">
                  <div
                    class="collection_item flexible_block flexible_block__normal flexible_block__hover flexible_block__"
                  >
                    <a href="collections/salt-free.html">
                      <div class="layer_1 collection_img">
                        <div
                          class="img_placeholder__wrap img_placeholder__medium"
                          style="
                            background-image: url({{ asset('SpiceWebTemplate/cdn/shop/collections/3_270x255_crop_centerbb15.jpg') }});
                          "
                        ></div>
                      </div>

                      <div class="layer_2">
                        <div>
                          <span class="collection_title">Salt-Free</span>

                          <span class="collection_products">8 products</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div
                    class="collection_item flexible_block flexible_block__normal flexible_block__hover flexible_block__"
                  >
                    <a href="collections/seasonings.html">
                      <div class="layer_1 collection_img">
                        <div
                          class="img_placeholder__wrap img_placeholder__medium"
                          style="
                            background-image: url({{ asset('SpiceWebTemplate/cdn/shop/collections/4_270x255_crop_center1571.jpg') }});
                          "
                        ></div>
                      </div>

                      <div class="layer_2">
                        <div>
                          <span class="collection_title">Seasonings</span>

                          <span class="collection_products">10 products</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

                    <div class="container">
          <div class="row">
            <div class="main_content sidebar_on col-sm-9 col-sm-push-3">
              <div
                id="shopify-section-template-collection"
                class="shopify-section section_template section_template__collection"
              >
                <h1 class="page_heading">Products</h1>

                <div class="product_options">
                  <div class="product_options__sort">
                    <label for="sort_by_select">Sort by:</label>

                    <select id="sort_by_select">
                      <option value="manual">Featured</option>
                      <option value="best-selling">Best Selling</option>
                      <option value="title-ascending">Name: A – Z</option>
                      <option value="title-descending">Name: Z – A</option>
                      <option value="price-ascending">
                        Price: low to high
                      </option>
                      <option value="price-descending">
                        Price: high to low
                      </option>
                      <option value="created-ascending">
                        Oldest to newest
                      </option>
                      <option value="created-descending">
                        Newest to oldest
                      </option>
                    </select>
                  </div>

                  <ul class="product_view">
                    <li id="view_grid" data-view="grid" class="active">
                      <i class="fa fa-th" aria-hidden="true"></i>
                    </li>
                    <li id="view_list" data-view="list">
                      <i class="fa fa-th-list" aria-hidden="true"></i>
                    </li>
                  </ul>

                  <div class="product_options__number">
                    <label for="products_number_select">Show:</label>
                    <select id="products_number_select">
                      <option value="6">6</option>
                      <option value="9">9</option>
                      <option value="12">12</option>
                    </select>
                  </div>

                  <div class="product_count">18 items</div>
                  <div class="clearfix"></div>
                </div>

                <script>
                  theme.paginationTypeLoad = true;

                  theme.paginationCurrent = 1;
                  theme.paginatePages = 2;
                  theme.productNumber = 9;

                  theme.collectionName = "collection-all";
                </script>

                <div
                  class="row product_listing__main layout__medium_sb"
                  id="product_listing__sorted"
                >
                  <div
                    class="col-lg-4 col-xs-6 item_6_1 item_4_1 item_3_1 item_2_1"
                  >
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/black-pepper-whole.html"
                            >Black Pepper...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          Welcome to the world of the unbelievable smell and
                          perfect taste. From ancien...
                        </p>
                        <p class="product_desc product_desc__long">
                          Welcome to the world of the unbelievable smell and
                          perfect taste. From ancient times spices were very
                          rare and expensive. Only very rich people could afford
                          buying spices. Nowadays spices have become a casual
                          part of all the types of cuisine. We can`t imagine our
                          life without pepper or cinnamon. We are proud to
                          present our unique products.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money money_sale">$2.20</span>

                            <span class="money">$2.05</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/black-pepper-whole.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01_270x190_crop_center1108.png') }}"
                            alt="Black Pepper Whole"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02_270x190_crop_center1108.png') }}"
                            alt="Black Pepper Whole"
                          />

                          <span class="product_badge new">new</span>

                          <span class="product_badge sale">–7%</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886570081"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/black-pepper-whole.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/camel-green-peas.html"
                            >Camel Green ...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          From ancient times spices were very rare and
                          expensive. Only very rich people...
                        </p>
                        <p class="product_desc product_desc__long">
                          From ancient times spices were very rare and
                          expensive. Only very rich people could afford buying
                          spices. Nowadays spices have become a casual part of
                          all the types of cuisine. We can`t imagine our life
                          without pepper or cinnamon. We are proud to present
                          our unique products. You`ll be amazed because we have
                          a largest choice of tremendous spices. Enjoy shopping
                          in our store!
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$6.50</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/camel-green-peas.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/basil_california_01_270x190_crop_center3248.png') }}"
                            alt="Camel Green Peas"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/basil_california_02_270x190_crop_center3248.png') }}"
                            alt="Camel Green Peas"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886635617"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/camel-green-peas.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6 item_2_1">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/candied-fancy-nectarines.html"
                            >Candied Fanc...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          Only very rich people could afford buying spices.
                          Nowadays spices have become...
                        </p>
                        <p class="product_desc product_desc__long">
                          Only very rich people could afford buying spices.
                          Nowadays spices have become a casual part of all the
                          types of cuisine. We can`t imagine our life without
                          pepper or cinnamon. We are proud to present our unique
                          products. You`ll be amazed because we have a largest
                          choice of tremendous spices. We provide only premium
                          quality goods at a fair price.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$2.40</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/candied-fancy-nectarines.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/celery-salt_01_270x190_crop_center0d26.png') }}"
                            alt="Candied Fancy Nectarines"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/celery-salt_02_270x190_crop_center0d26.png') }}"
                            alt="Candied Fancy Nectarines"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886733921"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/candied-fancy-nectarines.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6 item_3_1">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/candied-red-cherries.html"
                            >Candied Red ...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          Nowadays spices have become a casual part of all the
                          types of cuisine. We can...
                        </p>
                        <p class="product_desc product_desc__long">
                          Nowadays spices have become a casual part of all the
                          types of cuisine. We can`t imagine our life without
                          pepper or cinnamon. We are proud to present our unique
                          products. You`ll be amazed because we have a largest
                          choice of tremendous spices. We provide only premium
                          quality goods at a fair price. Our vendors and
                          manufacturers guarantee the quality of our spices.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money money_sale">$5.50</span>

                            <span class="money">$5.00</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/candied-red-cherries.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/cocoa-powder_natural_01_270x190_crop_center5523.png') }}"
                            alt="Candied Red Cherries"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/cocoa-powder_natural_02_270x190_crop_center5523.png') }}"
                            alt="Candied Red Cherries"
                          />

                          <span class="product_badge new">new</span>

                          <span class="product_badge sale">–9%</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886864993"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/candied-red-cherries.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6 item_4_1 item_2_1">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/caraway-seed-whole.html"
                            >Caraway Seed...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          We can`t imagine our life without pepper or cinnamon.
                          We are proud to present...
                        </p>
                        <p class="product_desc product_desc__long">
                          We can`t imagine our life without pepper or cinnamon.
                          We are proud to present our unique products. You`ll be
                          amazed because we have a largest choice of tremendous
                          spices. We provide only premium quality goods at a
                          fair price. Our vendors and manufacturers guarantee
                          the quality of our spices. Our spices are real
                          bestsellers and they have a great number of faithful
                          fans all over the country.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$3.80</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/caraway-seed-whole.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-fruit-mango_01_270x190_crop_center97e4.png') }}"
                            alt="Caraway Seed Whole"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-fruit-mango_02_270x190_crop_center97e4.png') }}"
                            alt="Caraway Seed Whole"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886930529"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/caraway-seed-whole.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/cardamom-seeds.html"
                            >Cardamom Seeds</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          We are proud to present our unique products. You`ll be
                          amazed because we have...
                        </p>
                        <p class="product_desc product_desc__long">
                          We are proud to present our unique products. You`ll be
                          amazed because we have a largest choice of tremendous
                          spices. We provide only premium quality goods at a
                          fair price. Our vendors and manufacturers guarantee
                          the quality of our spices. There is no doubt about our
                          reputation because it`s perfect and our clients`
                          testimonials can prove this fact.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$2.70</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/cardamom-seeds.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-fruit-papaya_01_270x190_crop_center30ca.png') }}"
                            alt="Cardamom Seeds"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-fruit-papaya_02_270x190_crop_center30ca.png') }}"
                            alt="Cardamom Seeds"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090886963297"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/cardamom-seeds.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6 item_6_1 item_3_1 item_2_1">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/celery-seed-ground.html"
                            >Celery Seed ...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          You`ll be amazed because we have a largest choice of
                          tremendous spices. We pr...
                        </p>
                        <p class="product_desc product_desc__long">
                          You`ll be amazed because we have a largest choice of
                          tremendous spices. We provide only premium quality
                          goods at a fair price. Our vendors and manufacturers
                          guarantee the quality of our spices. The products of
                          our store are the standard of elegant taste and if you
                          want to express your emotions in cooking you have to
                          buy our products because they are simply unbelievable.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money money_sale">$6.80</span>

                            <span class="money">$6.20</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/celery-seed-ground.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-kiwi_01_270x190_crop_center5720.png') }}"
                            alt="Celery Seed Ground"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-kiwi_02_270x190_crop_center5720.png') }}"
                            alt="Celery Seed Ground"
                          />

                          <span class="product_badge new">new</span>

                          <span class="product_badge sale">–9%</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090887094369"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/celery-seed-ground.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/channa-chick-pea.html"
                            >Channa (Chic...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          We provide only premium quality goods at a fair price.
                          Our vendors and manufa...
                        </p>
                        <p class="product_desc product_desc__long">
                          We provide only premium quality goods at a fair price.
                          Our vendors and manufacturers guarantee the quality of
                          our spices. The products of our store are the standard
                          of elegant taste and if you want to express your
                          emotions in cooking you have to buy our products
                          because they are simply unbelievable. So don`t waste
                          your time on hesitation and make your purchase in our
                          store.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$1.80</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/channa-chick-pea.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-pineapple_01_270x190_crop_center3105.png') }}"
                            alt="Channa (Chick Pea)"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/dried-pineapple_02_270x190_crop_center3105.png') }}"
                            alt="Channa (Chick Pea)"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090887749729"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/channa-chick-pea.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-xs-6 item_4_1 item_2_1">
                    <div class="product_item">
                      <div class="product_info">
                        <p class="product_name">
                          <a href="../products/chiquilin-smoked-paprika.html"
                            >Chiquilin Sm...</a
                          >
                        </p>

                        <p class="product_desc product_desc__short">
                          Our vendors and manufacturers guarantee the quality of
                          our spices. The produc...
                        </p>
                        <p class="product_desc product_desc__long">
                          Our vendors and manufacturers guarantee the quality of
                          our spices. The products of our store are the standard
                          of elegant taste and if you want to express your
                          emotions in cooking you have to buy our products
                          because they are simply unbelievable. Our spices are
                          real bestsellers and they have a great number of
                          faithful fans all over the country. Our assortment can
                          satisfy most whimsical clients.
                        </p>

                        <div class="product_prop">
                          <p class="product_price">
                            <span class="money">$2.70</span>
                          </p>

                          <p class="product_color"></p>
                        </div>
                      </div>

                      <div class="product_img">
                        <a
                          class="img_change"
                          href="../products/chiquilin-smoked-paprika.html"
                        >
                          <img
                            class="img__1"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/malaysian-satay-seasoning_01_270x190_crop_center92ce.png') }}"
                            alt="Chiquilin Smoked Paprika"
                          />

                          <img
                            class="img__2"
                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/malaysian-satay-seasoning_02_270x190_crop_center92ce.png') }}"
                            alt="Chiquilin Smoked Paprika"
                          />

                          <span class="product_badge new">new</span>
                        </a>
                      </div>

                      <div class="product_links">
                        <form
                          method="post"
                          action="https://theme848-spices-store.myshopify.com/cart/add"
                          class="add_to_cart_form"
                        >
                          <input
                            type="hidden"
                            name="id"
                            value="32090887848033"
                          />
                          <button class="btn-cart" type="submit">
                            <i class="fa fa-shopping-bag"></i>Add to cart
                          </button>
                        </form>

                        <a
                          class="wishlist_btn wishlist_add_login"
                          href="../pages/wishlist.html"
                          title="Add to the wishlist"
                          ><i class="fa fa-heart-o" aria-hidden="true"></i
                        ></a>

                        <a
                          class="quick_view_btn"
                          href="../products/chiquilin-smoked-paprika.html"
                          title="Quick view"
                          ><i class="fa fa-search-plus" aria-hidden="true"></i
                        ></a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

                <div class="load_more_wrap">
                  <button class="btn load_more_btn" id="load_more_button">
                    Show more
                  </button>
                  <div id="page_navigation">
                    <span
                      class="page_navigation_arrow hidden"
                      id="page_navigation_prev_prev"
                      ><i class="fa fa-angle-double-left"></i
                    ></span>

                    <span
                      class="page_navigation_arrow hidden"
                      id="page_navigation_prev"
                      ><i class="fa fa-angle-left"></i
                    ></span>

                    <span id="page_navigation_current">1</span>

                    <span
                      class="page_navigation_arrow hidden"
                      id="page_navigation_next"
                      ><i class="fa fa-angle-right"></i
                    ></span>

                    <span
                      class="page_navigation_arrow"
                      id="page_navigation_next_next"
                      ><i class="fa fa-angle-double-right"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar_small col-sm-3 col-sm-pull-9">
              <div
                id="shopify-section-sidebar"
                class="shopify-section page_sidebar"
              >
                <div class="sidebar">
                  <div class="sidebar_widget sidebar_widget__linklist">
                    <h3 class="widget_header">Coocing ingridients</h3>

                    <div class="widget_content">
                      <ul class="list_links">
                        <li class="level_1__item">
                          <a
                            class="level_1__link"
                            href="../products/black-pepper-whole.html"
                            >Black Pepper Whole</a
                          >
                        </li>

                        <li class="level_1__item">
                          <a
                            class="level_1__link"
                            href="../products/camel-green-peas.html"
                            >Camel Green Peas</a
                          >
                        </li>

                        <li class="level_1__item">
                          <a
                            class="level_1__link"
                            href="../products/candied-fancy-nectarines.html"
                            >Candied Fancy Nectarines</a
                          >
                        </li>

                        <li class="level_1__item">
                          <a
                            class="level_1__link"
                            href="../products/cardamom-seeds.html"
                            >Cardamom Seeds</a
                          >
                        </li>

                        <li class="level_1__item">
                          <a
                            class="level_1__link"
                            href="../products/frontier-cinnamon-sticks.html"
                            >Frontier Cinnamon Sticks</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="shopify-section-sidebar-sort"
                class="shopify-section page_sidebar_sort sidebar_widget"
              >
                <div class="section_filter_block">
                  <div
                    class="filter_content_main"
                    id="filter_sidebar-sort"
                    data-canonical="https://theme848-spices-store.myshopify.com/collections/all"
                  >
                    <h3 class="widget_header filter_title">Sort</h3>
                    <p class="filter_text">find</p>

                    <div class="filter_content">
                      <div class="content_row">
                        <div class="select_wrap">
                          <p>Category</p>
                          <select
                            id="category_select"
                            class="filter_select"
                            autocomplete="off"
                          >
                            <option value="all">All</option>

                            <option value="candied-fruits">
                              CANDIED FRUITS
                            </option>

                            <option value="natural-flavorings-extracts">
                              Natural Flavorings &amp; Extracts
                            </option>

                            <option value="salt-free">Salt-Free</option>

                            <option value="seasonings">Seasonings</option>

                            <option value="spice-blends">Spice Blends</option>

                            <option value="spices-herbs">
                              Spices &amp; Herbs
                            </option>
                          </select>
                        </div>

                        <div class="select_wrap">
                          <p>Type</p>
                          <select
                            id="type_select"
                            class="filter_select"
                            autocomplete="off"
                          >
                            <option value="all">All</option>

                            <option value="Chily%20powder">Chily powder</option>

                            <option value="Curry%20powder">Curry powder</option>

                            <option value="Herbs">Herbs</option>

                            <option value="Spices">Spices</option>
                          </select>
                        </div>
                      </div>

                      <div class="button_row">
                        <button class="btn" id="sort_btn">Sort</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="shopify-section-sidebar-ensuing"
                class="shopify-section page_sidebar"
              >
                <div class="sidebar">
                  <div class="sidebar_widget sidebar_widget__banner">
                    <div
                      class="img_placeholder__wrap img_placeholder__large"
                      style="
                        background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/closeup-photo-of-red-and-orange-chilis-1086724_270x360_crop_center0fbd.jpg') }});
                      "
                    ></div>

                    <div class="sidebar_banner_caption">
                      <a href="spice-blends.html">
                        <h3>NEW COLLECTION</h3>

                        <p>OF SPICES</p>
                      </a>
                    </div>
                  </div>

                  <div class="sidebar_widget sidebar_widget__products">
                    <h3 class="widget_header">Products</h3>
                    <div class="widget_content">
                      <ul class="list_products">
                        <li class="product">
                          <div class="product_img">
                            <a href="../products/the-spice-hunter-cloves.html">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/vanilla-beans_01_150x150_crop_centerfcb5.png') }}"
                                alt="The Spice Hunter Cloves"
                              />
                            </a>
                          </div>

                          <div class="product_info">
                            <div class="product_name">
                              <a href="../products/the-spice-hunter-cloves.html"
                                >The Spice Hunter Cloves</a
                              >
                            </div>

                            <div class="product_price">
                              <span class="money">$5.30</span>
                            </div>

                            <div class="product_links">
                              <a
                                class="btn"
                                href="../products/the-spice-hunter-cloves.html"
                                >View</a
                              >
                            </div>
                          </div>
                        </li>

                        <li class="product">
                          <div class="product_img">
                            <a
                              href="../products/schani-moong-split-chilka.html"
                            >
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/tandoori-seasoning_01_150x150_crop_centerc39e.png') }}"
                                alt="Schani Moong Split Chilka"
                              />
                            </a>
                          </div>

                          <div class="product_info">
                            <div class="product_name">
                              <a
                                href="../products/schani-moong-split-chilka.html"
                                >Schani Moong Split Chilka</a
                              >
                            </div>

                            <div class="product_price">
                              <span class="money">$2.10</span>
                            </div>

                            <div class="product_links">
                              <a
                                class="btn"
                                href="../products/schani-moong-split-chilka.html"
                                >View</a
                              >
                            </div>
                          </div>
                        </li>

                        <li class="product">
                          <div class="product_img">
                            <a href="../products/pumpkin-pie-spice-blend.html">
                              <img
                                src="{{ asset('SpiceWebTemplate/cdn/shop/products/star-anise-original-herb_01_150x150_crop_center68ff.png') }}"
                                alt="Pumpkin Pie Spice Blend"
                              />
                            </a>
                          </div>

                          <div class="product_info">
                            <div class="product_name">
                              <a href="../products/pumpkin-pie-spice-blend.html"
                                >Pumpkin Pie Spice Blend</a
                              >
                            </div>

                            <div class="product_price">
                              <span class="money">$2.30</span>
                            </div>

                            <div class="product_links">
                              <a
                                class="btn"
                                href="../products/pumpkin-pie-spice-blend.html"
                                >View</a
                              >
                            </div>
                          </div>
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

        <div id="shopify-section-footer" class="shopify-section">
          <footer class="inverted" style="background: #5fac00">
            <div class="footer_row__1">
              <div class="container">
                <div class="row footer_main">
                  <div class="col-sm-3 footer_block footer_block__2_1">
                    <div class="footer_item footer_item__about">
                      <h3></h3>

                      <img
                        src="{{ asset('SpiceWebTemplate/cdn/shop/files/spiceX_225x125_crop_center8a9c.png') }}"
                        alt="theme848-spices-store"
                      />

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
                          <a href="collections/candied-fruits.html"
                            >CANDIED FRUITS</a
                          >
                        </li>

                        <li>
                          <a href="collections/spices-herbs.html"
                            >Spices & Herbs</a
                          >
                        </li>

                        <li>
                          <a href="collections/natural-flavorings-extracts.html"
                            >Natural Flavorings & Extracts</a
                          >
                        </li>

                        <li>
                          <a href="collections/spice-blends.html"
                            >Spice Blends</a
                          >
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
                          <a href="policies/privacy-policy.html"
                            >Privacy Policy</a
                          >
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
                    <a
                      target="_blank"
                      rel="nofollow"
                      href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore"
                      >Powered by Shopify</a
                    >
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
    </div>

@endsection
