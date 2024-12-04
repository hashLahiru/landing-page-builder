@extends('spice-web-template.layouts.app')          {{-- Nithya Jayasooriya 2024/12/4 --}}

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


<style>
.button-container {
    display: flex;
    justify-content: center; 
    align-items: center; 
    gap: 40px; 
}

.btn-square {
    padding: 50px 90px; /* Padding on all 4 sides, adjust values as needed */
    background-color: #5fac00; /* Green background color */
    color: white; /* White text color */
    text-align: center; /* Centers text inside the button */
    font-weight: bold; /* Makes the text bold */
    font-size: 20px; /* Makes the text bold */
      
}

.btn-square:hover {
    background-color: #467e03; /* Darker green on hover */
}

</style>

<div id="shopify-section-1563274698392" class="shopify-section section section_homepage section_gallery">
    <h4>explore & choose</h4>

    <h2>categories</h2>
  <div>
 
{{--  
    <div class="button-container" style=" ">
        <a href="#" class="btn-square">Whole Spice</a>
        <a href="#" class="btn-square">Ground Spice</a>
        <a href="#" class="btn-square">Spice Blends</a>
    </div>
  --}}
 
  <div class="section_gallery__4 style_4">
    <div class="row galery_wrap">
      <div class="col-12 col-xs-6 col-lg-3">
        <div class="gallery_item">
          <div
            class="img_placeholder__wrap img_placeholder__small"
            style="background-color: #ffffff"
          ></div>

          <a
            class="item_caption"
            href="collections/candied-fruits.html"
          >
            <div class="caption_text">
              <h4>COOKING INGREDIENTS</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-xs-6 col-lg-3">
        <div class="gallery_item">
          <div
            class="img_placeholder__wrap img_placeholder__small"
            style="background-color: #ffffff"
          ></div>

          <a
            class="item_caption"
            href="collections/natural-flavorings-extracts.html"
          >
            <div class="caption_text">
              <h4>BAKING INGREDIENTS</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-xs-6 col-lg-3">
        <div class="gallery_item">
          <div
            class="img_placeholder__wrap img_placeholder__small"
            style="background-color: #ffffff"
          ></div>

          <a
            class="item_caption"
            href="collections/spice-blends.html"
          >
            <div class="caption_text">
              <h4>SALTS + PEPPERCORNS</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-xs-6 col-lg-3">
        <div class="gallery_item">
          <div
            class="img_placeholder__wrap img_placeholder__small"
            style="background-color: #ffffff"
          ></div>

          <a
            class="item_caption"
            href="products/black-pepper-whole.html"
          >
            <div class="caption_text">
              <h4>herbs</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>