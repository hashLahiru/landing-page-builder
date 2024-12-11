@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    @include('spice-web-template.Components.PageLayout.Navbar', ['SpiceNavbarData' => $SpiceNavbarData])

    <div id="shopify-section-1563274168890" class="shopify-section index-section">
        <div class="section section_homepage section_slideshow_full_width section_slideshow__large swiper-container"
            id="slideshow_1563274168890" data-autoplay="false" data-speed="5000">
            <div class="swiper-wrapper">

                <div class="swiper-slide image_slide">
                    <div class="img_placeholder__wrap img_placeholder__large"
                        style="
                                   background-image: url('{{ asset('/SpiceWebTemplate/cdn/shop/files/slide-3_2048x1214_crop_top7279.jpg') }}');">
                    </div>
                    <div class="slide_caption position_center">
                        <div class="container">
                            <div class="caption_text">
                                <h2>{{ $HeroProductData->HP_title ?? null }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('spice-web-template.Components.CTA.Contactus', ['SpiceContactusData' => $SpiceContactusData])
    @include('spice-web-template.Components.PageLayout.Footer', ['SpiceFooterData' => $SpiceFooterData])
