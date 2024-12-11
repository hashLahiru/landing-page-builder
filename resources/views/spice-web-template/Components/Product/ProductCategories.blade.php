@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
    <div class="page_wrapper">
        <!-- Collections Section -->
        <div class="container">
            <h1 class="page_heading">Collections</h1>
            <div class="row collection_listing__main">
                @foreach ($categories as $category)
                    <div class="col-xs-4">
                        <div class="collection_item flexible_block flexible_block__normal flexible_block__hover flexible_block__">
                            <a href="javascript:void(0);" class="category-filter" data-category-id="{{ $category->id }}">
                                <div class="layer_1 collection_img">
                                    <div class="img_placeholder__wrap img_placeholder__medium"
                                        style="background-image: url({{ asset($category->cat_image) }});">
                                    </div>
                                </div>
                                <div class="layer_2">
                                    <div>
                                        <span class="collection_title">{{ $category->name }}</span>
                                        <span class="collection_products">{{ $category->product_count }} products</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Products Section -->
        <div class="container">
            <h1 class="page_heading">Products</h1>
            <div class="product_options">
                <div class="product_options__search">
                    <input type="text" id="productSearch" placeholder="Search products..." />
                </div>
                <div class="product_options__all">
                    <button id="showAllButton" type="button">All</button>
                </div>
            </div>

            <div class="row product_listing__main layout__medium_sb" id="product_listing__sorted">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-xs-6 item_6_1 item_4_1 item_3_1 item_2_1 product-item" 
                         data-category-id="{{ $product->category_id }}" data-product-name="{{ $product->prod_name }}">
                        <div class="product_item">
                            <div class="product_info">
                                <p class="product_name">{{ $product->prod_name }}</p>
                                <p class="product_desc product_desc__short">{{ $product->description }}</p>
                                <p class="product_desc product_desc__long">{{ $product->description }}</p>

                                <div class="product_prop">
                                    <p class="product_price">
                                        <span class="money">${{ number_format($product->price - $product->discount, 2) }}</span>
                                        @if ($product->discount > 0)
                                            <span class="money">{{ number_format($product->price, 2) }}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="product_img">
                                @if ($product->img1_url)
                                    <img class="img__1" src="{{ asset($product->img1_url) }}" alt="{{ $product->prod_name }}" />
                                @elseif ($product->img2_url)
                                    <img class="img__2" src="{{ asset($product->img2_url) }}" alt="{{ $product->prod_name }}" />
                                @elseif ($product->img3_url)
                                    <img class="img__3" src="{{ asset($product->img3_url) }}" alt="{{ $product->prod_name }}" />
                                @else
                                    <img class="img__default" src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" />
                                @endif
                            </div>
                            <div class="product_links">
                                <button class="btn-cart" type="button" onclick="openWhatsApp('{{ $product->prod_name }}')">
                                    <i class="fa fa-whatsapp"></i>Order on WhatsApp
                                </button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        // Filter products by category
        document.querySelectorAll('.category-filter').forEach(item => {
            item.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-category-id');
                filterProductsByCategory(categoryId);
            });
        });

        // Filter products by search term
        document.getElementById('productSearch').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            filterProductsBySearch(searchTerm);
        });

        // Show all products
        document.getElementById('showAllButton').addEventListener('click', function() {
            const products = document.querySelectorAll('.product-item');
            products.forEach(product => {
                product.style.display = 'block';
            });
        });

        function filterProductsByCategory(categoryId) {
            const products = document.querySelectorAll('.product-item');
            products.forEach(product => {
                const productCategoryId = product.getAttribute('data-category-id');
                if (categoryId === 'all' || categoryId === productCategoryId) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        function filterProductsBySearch(searchTerm) {
            const products = document.querySelectorAll('.product-item');
            products.forEach(product => {
                const productName = product.getAttribute('data-product-name').toLowerCase();
                if (productName.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        function openWhatsApp(productName) {
            var message = "Can I order " + productName;
            var encodedMessage = encodeURIComponent(message);
            var whatsappLink = "https://wa.me/+94761968819?text=" + encodedMessage;

            document.getElementById('whatsapp_button').setAttribute('href', whatsappLink);
            window.open(whatsappLink, '_blank');
        }
    </script>
