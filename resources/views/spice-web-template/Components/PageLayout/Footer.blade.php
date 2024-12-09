@extends('spice-web-template.layouts.app')

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
        
<div id="shopify-section-footer" class="shopify-section">
    <footer class="inverted" style="background: #5fac00">
        <div class="footer_row__1">
            <div class="container">
                <div class="row footer_main">
                    <div class="col-sm-3 footer_block footer_block__2_1">
                        <div class="footer_item footer_item__about">
                            <h3></h3>
                            
                            <img src="{{ asset($SpiceFooterData->SF_logo ?? null) }}"
                                alt="theme848-spices-store" />

                            <div class="about_text">
                                <p>{{$SpiceFooterData->SF_text ?? null}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block">
                        <div class="footer_item footer_item__links">
                            <h3>{{$SpiceFooterData->SF_section1_topic ?? null}}</h3>

                            <ul>
                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url1 ?? null}}">{{$SpiceFooterData->SF_section1_text1 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url2 ?? null}}">{{$SpiceFooterData->SF_section1_text2 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url3 ?? null}}">{{$SpiceFooterData->SF_section1_text3 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url4 ?? null}}">{{$SpiceFooterData->SF_section1_text4 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url5 ?? null}}">{{$SpiceFooterData->SF_section1_text5 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section1_url6 ?? null}}">{{$SpiceFooterData->SF_section1_text6 ?? null}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block footer_block__2_1">
                        <div class="footer_item footer_item__links">
                            <h3>{{$SpiceFooterData->SF_section2_topic ?? null}}</h3>

                            <ul>
                                <li>
                                    <a href="{{$SpiceFooterData->SF_section2_url1 ?? null}}">{{$SpiceFooterData->SF_section2_text1 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section2_url2 ?? null}}">{{$SpiceFooterData->SF_section2_text2 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section2_url3 ?? null}}">{{$SpiceFooterData->SF_section2_text3 ?? null}}</a>
                                </li>

         
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 footer_block">
                        <div class="footer_item footer_item__links">
                            <h3>{{$SpiceFooterData->SF_section3_topic ?? null}}</h3>

                            <ul>
                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url1 ?? null}}">{{$SpiceFooterData->SF_section3_text1 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url2 ?? null}}">{{$SpiceFooterData->SF_section3_text2 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url3 ?? null}}">{{$SpiceFooterData->SF_section3_text3 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url4 ?? null}}">{{$SpiceFooterData->SF_section3_text4 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url5 ?? null}}">{{$SpiceFooterData->SF_section3_text5 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url6 ?? null}}">{{$SpiceFooterData->SF_section3_text6 ?? null}}</a>
                                </li>

                                <li>
                                    <a href="{{$SpiceFooterData->SF_section3_url7 ?? null}}">{{$SpiceFooterData->SF_section3_text7 ?? null}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_row__2">
            <div class="container">
                <div class="footer_wrap_1">
                    <div class="footer_wrap_2 footer_center">
                        {{$SpiceFooterData->SF_text2 ?? null}}
                        <a target="_blank" rel="nofollow"
                            href="{{$SpiceFooterData->SF_text3_url ?? null}}">{{$SpiceFooterData->SF_text3 ?? null}}</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        #shopify-section-footer footer {
            padding-top: 26px;
        }
    </style>
</div>
</div>

<a id="back_top" href="#">
<i class="fa fa-angle-up" aria-hidden="true"></i>
</a>