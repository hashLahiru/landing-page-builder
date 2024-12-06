@extends('spice-web-template.layouts.app')           {{-- Nithya Jayasooriya 2024/12/4 --}}

@section('title', 'Home Page')

@section('content-spice')

                           
<div>
<div id="shopify-section-1563276479572" class="shopify-section section section_homepage section_lookbook">
    <div class="lookbook_wrap">
        <div class="lookbook_img">
            <div class="img_placeholder__wrap"
                style="
    background-image: url({{ asset($BlogPostData->BP_img ?? '') }});
  ">
            </div>
        </div>

        <div class="lookbook_container">
            <div class="lookbook_item caption_left caption_bottom" style="left: 25%; top: 33%">
                <a class="lookbook_item__bullet" href="{{ $BlogPostData->BP_icon1_url ?? null }}">
                    <i class="{{ $BlogPostData->BP_icon1 ?? null }}" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="{{ $BlogPostData->BP_box1_url ?? null }}">
                    <img src="{{ asset( $BlogPostData->BP_box1_img ?? null ) }}"
                        alt="Chiquilin Smoked Paprika" />
                    <span class="product_name">{{ $BlogPostData->BP_box1_text ?? null }}</span>
                    <span class="money">{{ $BlogPostData->BP_box1_price ?? null }}</span>
                </a>
            </div>
            <div class="lookbook_item caption_left caption_top" style="left: 36%; top: 67%">
                <a class="lookbook_item__bullet" href="{{ $BlogPostData->BP_icon2_url ?? null }}">
                    <i class="{{ $BlogPostData->BP_icon2 ?? null }}" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="{{ $BlogPostData->BP_box2_url ?? null }}">
                    <img src="{{ asset($BlogPostData->BP_box2_img ?? null) }}"
                        alt="Frontier Ginger Root Ground" />
                    <span class="product_name">{{ $BlogPostData->BP_box2_text ?? null }}</span>
                    <span class="money">{{ $BlogPostData->BP_box2_price ?? null }}</span>
                </a>
            </div>
            <div class="lookbook_item caption_right caption_top" style="left: 49%; top: 43%">
                <a class="lookbook_item__bullet" href="{{ $BlogPostData->BP_icon3_url ?? null }}">
                    <i class="{{ $BlogPostData->BP_icon3 ?? null }}" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="{{ $BlogPostData->BP_box3_url ?? null }}">
                    <img src="{{ asset($BlogPostData->BP_box3_img ?? null ) }}"
                        alt="Black Pepper Whole" />
                    <span class="product_name">{{ $BlogPostData->BP_box3_text ?? null }}</span>
                    <span class="money">{{ $BlogPostData->BP_box3_price ?? null }}</span>
                </a>
            </div>
            <div class="lookbook_item caption_right caption_bottom" style="left: 74%; top: 65%">
                <a class="lookbook_item__bullet" href="{{ $BlogPostData->BP_icon4_url ?? null }}">
                    <i class="{{ $BlogPostData->BP_icon4 ?? null }}" aria-hidden="true"></i>
                </a>

                <a class="lookbook_item__caption" href="{{ $BlogPostData->BP_box4_url ?? null }}">
                    <img src="{{ asset( $BlogPostData->BP_box4_img ?? null ) }}"
                        alt="Camel Green Peas" />
                    <span class="product_name">{{ $BlogPostData->BP_box4_text ?? null }}</span>
                    <span class="money">{{ $BlogPostData->BP_box4_price ?? null }}</span>
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
                            <h2 class="section_heading">{{ $BlogPostData->BP_title ?? null }}</h2>
        
                            <div class="swiper-wrapper">
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="{{ $BlogPostData->BP_title1_url ?? null }}"
                                        >{{ $BlogPostData->BP_title1 ?? null }}</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      {{ $BlogPostData->BP_para1 ?? null }}
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href=" {{ $BlogPostData->BP_btn1_url ?? null }}"
                                      > {{ $BlogPostData->BP_btn1_text ?? null }}</a
                                    >
                                  </div>
                                </div>
                              </div>
        
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="{{ $BlogPostData->BP_title2_url ?? null }}"
                                        >{{ $BlogPostData->BP_title2 ?? null }}</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      {{ $BlogPostData->BP_para2 ?? null }}
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href=" {{ $BlogPostData->BP_btn2_url ?? null }}"
                                      > {{ $BlogPostData->BP_btn2_text ?? null }}</a
                                    >
                                  </div>
                                </div>
                              </div>
        
                              <div class="article_item swiper-slide">
                                <div class="layer_2">
                                  <div class="blog_article_content">
                                    <h3 class="article_title">
                                      <a
                                        href="{{ $BlogPostData->BP_title3_url ?? null }}"
                                        >{{ $BlogPostData->BP_title3 ?? null }}</a
                                      >
                                    </h3>
        
                                    <p class="article_content">
                                      {{ $BlogPostData->BP_para3 ?? null }}
                                    </p>
        
                                    <a
                                      class="btn article_btn"
                                      href=" {{ $BlogPostData->BP_btn3_url ?? null }}"
                                      > {{ $BlogPostData->BP_btn3_text ?? null }}</a
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
      


         