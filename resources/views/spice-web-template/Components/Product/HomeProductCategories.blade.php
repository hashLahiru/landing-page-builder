{{-- Nithya Jayasooriya 2024/12/4 --}}
@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }

        .btn-square {
            padding: 50px 90px;
            /* Padding on all 4 sides, adjust values as needed */
            background-color: #5fac00;
            /* Green background color */
            color: white;
            /* White text color */
            text-align: center;
            /* Centers text inside the button */
            font-weight: bold;
            /* Makes the text bold */
            font-size: 20px;
            /* Makes the text bold */

        }

        .btn-square:hover {
            background-color: #467e03;
            /* Darker green on hover */
        }
    </style>

    <div id="shopify-section-1563274698392" class="shopify-section section section_homepage section_gallery">
        <h4>{{ $HomeProductCategoriesData->H_cate_title1 ?? null }}</h4>

        <h2>{{ $HomeProductCategoriesData->H_cate_title2 ?? null }}</h2>
        <div>

            <div class="section_gallery__4 style_4">
                <div class="row galery_wrap">
                    <div class="col-12 col-xs-6 col-lg-4">
                        <div class="gallery_item">
                            <div class="img_placeholder__wrap img_placeholder__small" style="background-color: #ffffff"></div>
                            <a class="item_caption" href="{{ $HomeProductCategoriesData->H_cate_btn1_url ?? null }}">
                                <div class="caption_text">
                                    <h4>{{ $HomeProductCategoriesData->H_cate_btn1_text ?? null }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-lg-4">
                        <div class="gallery_item">
                            <div class="img_placeholder__wrap img_placeholder__small" style="background-color: #ffffff">
                            </div>
                            <a class="item_caption" href="{{ $HomeProductCategoriesData->H_cate_btn2_url ?? null }}">
                                <div class="caption_text">
                                    <h4>{{ $HomeProductCategoriesData->H_cate_btn2_text ?? null }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-lg-4">
                        <div class="gallery_item">
                            <div class="img_placeholder__wrap img_placeholder__small" style="background-color: #ffffff">
                            </div>

                            <a class="item_caption" href="{{ $HomeProductCategoriesData->H_cate_btn3_url ?? null }}">
                                <div class="caption_text">
                                    <h4>{{ $HomeProductCategoriesData->H_cate_btn3_text ?? null }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
