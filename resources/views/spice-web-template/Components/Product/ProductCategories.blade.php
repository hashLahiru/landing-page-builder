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