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

        <div class="page_container">
            <div class="main_content">
                <!-- BEGIN content_for_index -->
                <div id="" class="shopify">
                    <div class="section section_homepage section_slideshow_full_width section_slideshow__large swiper-container"
                        id="" data-autoplay="false" data-speed="5000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset($HeroContactusData->HC_mainimg_url ?? null) }});
                    "> 
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2>{{ $HeroContactusData->HC_maintitle ?? null }}</h2>

                                            {{-- <a class="btn slider_btn" href="collections/sexy-lingerie.html">SHOP NOW</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>