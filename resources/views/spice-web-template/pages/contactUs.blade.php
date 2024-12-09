@extends('spice-web-template.layouts.app')

@section('title', 'Home Page')

@section('content-spice')
{{-- @include('spice-web-template.Components.PageLayout.Navbar')
@include('spice-web-template.Components.Hero.HeroContactus')
@include('spice-web-template.Components.CTA.Contactus')
@include('spice-web-template.Components.PageLayout.Footer') --}}


@include('spice-web-template.Components.PageLayout.Navbar', ['SpiceNavbarData' => $SpiceNavbarData]) 
{{-- @include('spice-web-template.Components.Hero.HeroContactus', ['HeroContactusData' => $HeroContactusData]) --}}
@include('spice-web-template.Components.CTA.Contactus', ['SpiceContactusData' => $SpiceContactusData])  
@include('spice-web-template.Components.PageLayout.Footer', ['SpiceFooterData' => $SpiceFooterData]) 

@endsection