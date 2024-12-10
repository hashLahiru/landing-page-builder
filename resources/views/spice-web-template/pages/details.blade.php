@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')

@include('spice-web-template.Components.PageLayout.Navbar', ['SpiceNavbarData' => $SpiceNavbarData]) 
@include('spice-web-template.Components.Product.ProductDescription') 
@include('spice-web-template.Components.PageLayout.Footer', ['SpiceFooterData' => $SpiceFooterData]) 


@endsection 