@extends('spice-web-template.layouts.app')           {{-- Nithya Jayasooriya 2024/12/4 --}}

@section('title', 'Home Page')

@section('content-spice')

                           
<div>
<div id="shopify-section-1563276479572" class="shopify-section section section_homepage section_lookbook">
    <div class="lookbook_wrap">
        <div class="lookbook_img">
            <div class="img_placeholder__wrap"
                style="
    background-image: url({{ asset('SpiceWebTemplate/cdn/shop/files/lookbook-bg_1440x5471b1d.jpg') }});
  ">
            </div>
        </div>

        <div class="lookbook_container">
            <div class="lookbook_item caption_left caption_bottom" style="left: 25%; top: 33%">
                <a class="lookbook_item__bullet" href="products/chiquilin-smoked-paprika.html">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="products/chiquilin-smoked-paprika.html">
                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/malaysian-satay-seasoning_01_80x100_crop_top92ce.png') }}"
                        alt="Chiquilin Smoked Paprika" />
                    <span class="product_name">Chiquilin Smoked Paprika</span>
                    <span class="money">$2.70</span>
                </a>
            </div>
            <div class="lookbook_item caption_left caption_top" style="left: 36%; top: 67%">
                <a class="lookbook_item__bullet" href="products/frontier-ginger-root-ground.html">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="products/frontier-ginger-root-ground.html">
                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/organic-dried-kaffir-lime-leaves_01_80x100_crop_top97b5.png') }}"
                        alt="Frontier Ginger Root Ground" />
                    <span class="product_name">Frontier Ginger Root Ground</span>
                    <span class="money">$4.20</span>
                </a>
            </div>
            <div class="lookbook_item caption_right caption_top" style="left: 49%; top: 43%">
                <a class="lookbook_item__bullet" href="products/black-pepper-whole.html">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="products/black-pepper-whole.html">
                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/baharat-spice_01_80x100_crop_top1108.png') }}"
                        alt="Black Pepper Whole" />
                    <span class="product_name">Black Pepper Whole</span>
                    <span class="money">$2.05</span>
                </a>
            </div>
            <div class="lookbook_item caption_right caption_bottom" style="left: 74%; top: 65%">
                <a class="lookbook_item__bullet" href="products/camel-green-peas.html">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="products/camel-green-peas.html">
                    <img src="{{ asset('SpiceWebTemplate/cdn/shop/products/basil_california_01_80x100_crop_top3248.png') }}"
                        alt="Camel Green Peas" />
                    <span class="product_name">Camel Green Peas</span>
                    <span class="money">$6.50</span>
                </a>
            </div>
        </div>
    </div>
</div>

                 

                    <div
                    id="shopify-section-1563351982424"
                    class="shopify-section section section_homepage section_blog-with-carousel"
                  >
                    <div class="container">
                      <div class="row">
                        <div class="blog_block col-sm-12">
                          <div
                            class="blog_slider swiper-container"
                            id="blog_slider_1563351982424"
                          >
                            <h2 class="section_heading">Latest from the blog</h2>
        
                            <div class="swiper-wrapper">
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="blogs/news/impact-the-heart-of-business.html"
                                        >Impact - The Heart of Business</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      Thousands of people dream of having their own
                                      business and even more so be a successful
                                      entrepreneur. But what does it take to achieve
                                      success in the business industry? One of the most
                                      successful entrepreneurs featured at the Forbes
                                      website,...
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href="blogs/news/impact-the-heart-of-business.html"
                                      >Read more</a
                                    >
                                  </div>
                                </div>
                              </div>
        
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="blogs/news/believe-in-the-business-of-your-dreams.html"
                                        >Believe in the Business of Your Dreams</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      What is stopping you from believing in the
                                      business of your dreams? Insecurity? Fear? Lack of
                                      confidence? All of the above? How can you overcome
                                      these obstructions? Your Mantras You may be
                                      wondering if you have the necessary skills,
                                      time,...
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href="blogs/news/believe-in-the-business-of-your-dreams.html"
                                      >Read more</a
                                    >
                                  </div>
                                </div>
                              </div>
        
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="blogs/news/explore-new-items-right-now.html"
                                        >Explore New Items Right Now</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      Many students are cash-strapped, nowadays.
                                      Nevertheless, their purchasing power is very high.
                                      Research reveals that 20 million students in the
                                      US have a combined disposable income of $417
                                      billion. Moreover, another survey of students'
                                      parents reveals that students now make...
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href="blogs/news/explore-new-items-right-now.html"
                                      >Read more</a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              id="blog_slider_prev_1563351982424"
                              class="swiper_btn swiper_btn__prev"
                            ></div>
                            <div
                              id="blog_slider_next_1563351982424"
                              class="swiper_btn swiper_btn__next"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
      


         