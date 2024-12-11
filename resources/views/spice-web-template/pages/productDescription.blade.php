@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    {{-- @include('spice-web-template.Components.PageLayout.Navbar', ['SpiceNavbarData' => $SpiceNavbarData]) --}}
    <div class="main_content">

        <div class="main_content">
            <div id="shopify-section-template-product"
                class="shopify-section section section_single-product section_product section_template__product">
                <script type="application/json" id="product_json_template-product">
{
    "id": 4584142405729,
    "title": "Black Pepper Whole",
    "handle": "black-pepper-whole",
    "description": "Welcome to the world of the unbelievable smell and perfect taste. From ancient times spices were very rare and expensive. Only very rich people could afford buying spices. Nowadays spices have become a casual part of all the types of cuisine. We can't imagine our life without pepper or cinnamon. We are proud to present our unique products.",
    "published_at": "2020-04-22T04:27:30-04:00",
    "created_at": "2020-04-22T04:27:35-04:00",
    "vendor": "Simply Organic",
    "type": "Spices",
    "tags": ["Lorem ipsum"],
    "price": 205,
    "price_min": 205,
    "price_max": 205,
    "available": true,
    "price_varies": false,
    "compare_at_price": 220,
    "compare_at_price_min": 220,
    "compare_at_price_max": 220,
    "compare_at_price_varies": false,
    "variants": [
        {
            "id": 32090886570081,
            "inventory_quantity": 100,
            "title": "Default Title",
            "option1": "Default Title",
            "option2": null,
            "option3": null,
            "sku": "",
            "requires_shipping": true,
            "taxable": true,
            "featured_image": null,
            "available": true,
            "name": "Black Pepper Whole",
            "public_title": null,
            "options": ["Default Title"],
            "price": 205,
            "weight": 0,
            "compare_at_price": 220,
            "inventory_management": "shopify",
            "barcode": "",
            "requires_selling_plan": false,
            "selling_plan_allocations": [],
            "quantity_rule": { "min": 1, "max": null, "increment": 1 }
        }
    ],
    "images": [
        "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01.png') }}",
        "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02.png') }}",
        "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_03.png') }}"
    ],
    "featured_image": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01.png') }}",
    "options": ["Title"],
    "media": [
        {
            "alt": null,
            "id": 7052640190561,
            "position": 1,
            "preview_image": {
                "aspect_ratio": 1.0,
                "height": 600,
                "width": 600,
                "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01.png') }}"
            },
            "aspect_ratio": 1.0,
            "height": 600,
            "media_type": "image",
            "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01.png') }}",
            "width": 600
        },
        {
            "alt": null,
            "id": 7052640223329,
            "position": 2,
            "preview_image": {
                "aspect_ratio": 1.0,
                "height": 600,
                "width": 600,
                "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02.png') }}"
            },
            "aspect_ratio": 1.0,
            "height": 600,
            "media_type": "image",
            "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02.png') }}",
            "width": 600
        },
        {
            "alt": null,
            "id": 7052640256097,
            "position": 3,
            "preview_image": {
                "aspect_ratio": 1.0,
                "height": 600,
                "width": 600,
                "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_03.png') }}"
            },
            "aspect_ratio": 1.0,
            "height": 600,
            "media_type": "image",
            "src": "{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_03.png') }}",
            "width": 600
        }
    ],
    "requires_selling_plan": false,
    "selling_plan_groups": [],
    "content": "Welcome to the world of the unbelievable smell and perfect taste. From ancient times spices were very rare and expensive. Only very rich people could afford buying spices. Nowadays spices have become a casual part of all the types of cuisine. We can't imagine our life without pepper or cinnamon. We are proud to present our unique products."
}
</script>


                <script
              type="application/json"
              id="variant_weights_template-product"
            >
              { "32090886570081": "0.0 lb" }
            </script>

                {{-- <script>
                    theme.productViewType = "carousel";
                </script> --}}

                <div itemscope itemtype="http://schema.org/Product" class="product-scope container type_carousel">
                    <meta itemprop="url" content="https://theme848-spices-store.myshopify.com/products/black-pepper-whole" />
                    <meta itemprop="image"
                        content="//theme848-spices-store.myshopify.com/cdn/shop/products/baharat-spice_01_grande.png?v=1587544055" />

                    <div class="row">
                        <div class="single_product__img col-sm-7">
                            <div id="gallery_thumbs-template-product"
                                class="gallery_thumbs gallery_thumbs__ swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01_170x163_crop_top1108.png') }}"
                                            alt="" />
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02_170x163_crop_top1108.png') }}"
                                            alt="" />
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_03_170x163_crop_top1108.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>

                            <div id="gallery_big-template-product" class="gallery_big swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img id="primary_img_template-product"
                                            src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01_470x509_crop_top1108.png') }}"
                                            alt="Black Pepper Whole" />
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_02_470x509_crop_top1108.png') }}"
                                            alt="" />
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_03_470x509_crop_top1108.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>

                            <div id="prev_template-product" class="swiper_btn swiper_btn__prev"></div>
                            <div id="next_template-product" class="swiper_btn swiper_btn__next"></div>
                        </div>

                        <div class="single_product__info col-sm-5">
                            <h2 itemprop="name" class="single_product__title">
                                Black Pepper Whole
                            </h2>

                            <div class="single_product__details">
                                <form action="https://theme848-spices-store.myshopify.com/cart/add" method="post"
                                    enctype="multipart/form-data" data-section="template-product">
                                    <div class="details_wrapper">
                                        <p class="single_product__availability">
                                            Availability:

                                            <span id="single_product__availability-template-product"></span>
                                        </p>

                                        <p class="single_product__sku">
                                            SKU:
                                            <span id="single_product__sku-template-product"></span>
                                        </p>

                                        <p class="single_product__barcode">
                                            Barcode:
                                            <span id="single_product__barcode-template-product"></span>
                                        </p>

                                        <p class="single_product__collections">
                                            Collections:

                                            <a href="../collections/natural-flavorings-extracts.html">Natural Flavorings &
                                                Extracts</a>,
                                            <a href="../collections/salt-free.html">Salt-Free</a>,
                                            <a href="../collections/seasonings.html">Seasonings</a>
                                        </p>

                                        <p class="single_product__type">
                                            Product type:

                                            <span> Spices </span>
                                        </p>

                                        <p class="single_product__vendor">
                                            Vendor:
                                            <span>Simply Organic</span>
                                        </p>

                                        <div class="single_product__options hidden">
                                            <select name="id" id="product_select_template-product">
                                                <option value="32090886570081">
                                                    Default Title
                                                </option>
                                            </select>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="price_and_quantity">
                                            <p class="single_product__price">
                                                <span id="single_product__price-template-product"><span
                                                        class="money">$2.05</span></span>
                                            </p>

                                            <div class="single_product__quantity">
                                                <label for="single_product__quantity-template-product">Quantity:
                                                </label>

                                                <div class="quantity_box">
                                                    <span class="quantity_down"><i class="fa fa-minus"
                                                            aria-hidden="true"></i></span>

                                                    <input id="single_product__quantity-template-product"
                                                        class="quantity_input" type="text" name="quantity"
                                                        value="1" />

                                                    <span class="quantity_up"><i class="fa fa-plus"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="button_block">
                                            <button type="submit" name="add" class="btn"
                                                id="single_product__addtocart-template-product">
                                                <i class="fa fa-shopping-bag"></i>Add to cart
                                            </button>

                                            <p class="wishlist_section">
                                                <a href="../pages/wishlist.html" class="wishlist_form"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>
                                            </p>

                                            <span class="btn notify_btn" id="notify_trigger_button">Notify me</span>
                                        </div>
                                    </div>
                                </form>

                                <div class="product_notify">
                                    <form method="post"
                                        action="https://theme848-spices-store.myshopify.com/contact#contact_form"
                                        id="contact_form" accept-charset="UTF-8" class="notify_form">
                                        <input type="hidden" name="form_type" value="contact" /><input type="hidden"
                                            name="utf8" value="✓" />

                                        <p class="form_text">
                                            Enter your email and we will inform you when the goods
                                            appear in stock
                                        </p>

                                        <input type="hidden" name="contact[tags]" value="Notify product" />
                                        <label for="product_notify_input" class="hidden">Body</label>
                                        <input id="product_notify_input" type="hidden" name="contact[product]"
                                            value="https://theme848-spices-store.myshopify.com/products/black-pepper-whole" />
                                        <div class="form_wrapper">
                                            <input required type="email" name="contact[email]" class="notify__input"
                                                placeholder="Enter your email" />
                                            <textarea required name="contact[comment]" class="notify__input"
                                                placeholder="Add your comment about the product of interest to you"></textarea>
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="social_sharing_block">
                                    <a target="_blank"
                                        href="http://www.facebook.com/sharer.php?u=https://theme848-spices-store.myshopify.com/products/black-pepper-whole"
                                        title="Share">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>

                                    <a target="_blank"
                                        href="http://twitter.com/share?text=Black%20Pepper%20Whole&amp;url=https://theme848-spices-store.myshopify.com/products/black-pepper-whole"
                                        title="Share">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>

                                    <a target="_blank"
                                        href="http://plus.google.com/share?url=https://theme848-spices-store.myshopify.com/products/black-pepper-whole"
                                        title="Share">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>

                                    <a target="_blank"
                                        href="../../pinterest.com/pin/create/button/indexa429.html?url=https://theme848-spices-store.myshopify.com/products/black-pepper-whole&amp;media=//theme848-spices-store.myshopify.com/cdn/shop/products/baharat-spice_01_1024x1024.png?v=1587544055&amp;description=Black%20Pepper%20Whole"
                                        title="Share">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form accept-charset="UTF-8" action="https://theme848-spices-store.myshopify.com/contact"
                        id="wishlist_form" method="post">
                        <input name="form_type" type="hidden" value="customer" />
                        <input name="utf8" type="hidden" value="✓" />
                        <input type="hidden" name="contact[email]" value="" />
                        <input id="update-me" type="hidden" name="contact[tags]" value="" />
                    </form>

                    <div class="tab_content_wrapper">
                        <div class="tab_navigation">
                            <span class="tab_nav tab_nav_1 active" data-tab="0">Description</span>

                            <span class="tab_nav tab_nav_2" data-tab="1">Delivery</span>
                        </div>

                        <div class="tab_content">
                            <div class="tab_item tab_item_1 active">
                                <div itemprop="description" class="product_description rte">
                                    <div>
                                        <p>
                                            Welcome to the world of the unbelievable smell and
                                            perfect taste. From ancient times spices were very
                                            rare and expensive. Only very rich people could afford
                                            buying spices. Nowadays spices have become a casual
                                            part of all the types of cuisine. We can`t imagine our
                                            life without pepper or cinnamon. We are proud to
                                            present our unique products.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rte tab_item tab_item_2"></div>
                        </div>
                    </div>
                </div>

                <script>
                    var producText = {
                        available: "Available",
                        unavailable: "Unavailable",
                        items: "items",
                    };
                    var productImage = "products/baharat-spice_01.png";
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper-container', {
    loop: true,
    navigation: {
      nextEl: '.swiper_btn__next',
      prevEl: '.swiper_btn__prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});

                </script>
            </div>
        </div>

        {{-- @include('spice-web-template.Components.PageLayout.Footer', [
            'SpiceFooterData' => $SpiceFooterData,
        ]) --}}
