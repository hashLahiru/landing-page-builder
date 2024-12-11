@extends('spice-web-template.layouts.app') {{-- Nithya Jayasooriya 2024/12/4 --}}

@section('title', 'Home Page')

@section('content-spice')
    <div class="page_wrapper">
        <div id="shopify-section-1563276353830" class="shopify-section section section_homepage section_featured-products">
            <div class="container">
                <h2 class="section_heading">Popular Products</h2>
                <div class="row product_listing__main product_listing__main_featured">
                    @foreach ($PopularProductData as $product)
                        <div class="col-xs-4 item_3_1 item_2_1">
                            <div class="product_item">
                                <div class="product_info">
                                    <p class="product_name">
                                        <a href="#">{{ $product->prod_name }}</a>
                                    </p>
                                    <p class="product_desc product_desc__short">
                                        {{ $product->description }}
                                    </p>
                                    <div class="product_prop">
                                        <p class="product_price">
                                            <span class="money">{{ number_format($product->price, 2) }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img__1" src="{{ asset($product->img1_url) }}"
                                            alt="{{ $product->prod_name }}" />
                                    </a>
                                </div>
                                <div class="product_links">
                                    <a class="btn-cart"
                                        href="https://wa.me/1234567890?text={{ urlencode('Can I order ' . $product->prod_name . '?') }}"
                                        target="_blank">
                                        <i class="fa fa-whatsapp"></i>Order on WhatsApp
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
