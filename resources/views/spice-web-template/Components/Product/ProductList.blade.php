@extends('spice-web-template.layouts.app')           {{-- Nithya Jayasooriya 2024/12/4 --}}

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