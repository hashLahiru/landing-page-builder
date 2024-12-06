@extends('spice-web-template.layouts.app')         {{-- Nithya Jayasooriya 2024/12/4 --}}

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
                <div id="shopify-section-1563274168890" class="shopify-section index-section">
                    <div class="section section_homepage section_slideshow_full_width section_slideshow__large swiper-container"
                        id="slideshow_1563274168890" data-autoplay="false" data-speed="5000">
                        <div class="swiper-wrapper">    

                           

                            <div class="swiper-slide image_slide">
                                <div class="img_placeholder__wrap img_placeholder__large"
                                    style="
                      background-image: url({{ asset($HeroHomeData->HH_img_url ?? '') }});
                    ">
                                </div>

                                <div class="slide_caption position_left">
                                    <div class="container">
                                        <div class="caption_text">
                                            <h2 style="color: #5fac00; text-transform: capitalize;">{{ $HeroHomeData->HH_title ?? null }}</h2>

                                            <a class="btn slider_btn" href="{{ $HeroHomeData->HH_btn_url ?? null }}">{{ $HeroHomeData->HH_btn_text ?? null }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div id="pagination_1563274168890" class="swiper_pagination"></div> --}}

                            {{-- <div id="slider_prev_1563274168890" class="swiper_btn swiper_btn__prev"></div>
                            <div id="slider_next_1563274168890" class="swiper_btn swiper_btn__next"></div> --}}
                        </div>
                    </div>
                </div>









                {{-- <div id="shopify-section-1563275721948"
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
                </div> --}}
 


                                        {{-- <div class="article_item swiper-slide">
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

      
    </div>
@endsection --}}
