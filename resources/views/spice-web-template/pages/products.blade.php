@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')

{{-- @include('spice-web-template.Components.PageLayout.Navbar')
@include('spice-web-template.Components.Hero.HeroProducts')
@include('spice-web-template.Components.Product.ProductCategories')
@include('spice-web-template.Components.Product.ProductList')
@include('spice-web-template.Components.PageLayout.Footer') --}}

@include('spice-web-template.Components.PageLayout.Navbar', ['SpiceNavbarData' => $SpiceNavbarData]) 
@include('spice-web-template.Components.Hero.HeroProducts', ['HeroProductData' => $HeroProductData]) 
@include('spice-web-template.Components.PageLayout.Footer', ['SpiceFooterData' => $SpiceFooterData]) 
@endsection 