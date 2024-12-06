@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
{{-- @include('spice-web-template.layouts.Navbar') --}}

{{-- <script>
    preloaderBg = document.getElementById("page_preloader__bg");
    preloaderImg = document.getElementById("page_preloader__img");

    window.addEventListener("load", function() {
        preloaderBg.classList.add("off");
        preloaderImg.classList.add("off");
    });
</script> --}}

{{-- @include('spice-web-template.Components.PageLayout.Navbar') --}}
{{-- @include('spice-web-template.Components.Hero.HeroHome') --}}
{{-- @include('spice-web-template.Components.Product.HomeProductCategories')
@include('spice-web-template.Components.Product.PopularProduct') 
@include('spice-web-template.Components.Features.BlogPost')
@include('spice-web-template.Components.PageLayout.Footer') --}}



@include('spice-web-template.Components.Hero.HeroHome', ['HeroHomeData' => $HeroHomeData])
@include('spice-web-template.Components.Product.HomeProductCategories', ['HomeProductCategoriesData' => $HomeProductCategoriesData])
@include('spice-web-template.Components.Product.PopularProduct', ['PopularProductData' => $PopularProductData])
@include('spice-web-template.Components.Features.BlogPost', ['BlogPostData' => $BlogPostData])
@endsection 

