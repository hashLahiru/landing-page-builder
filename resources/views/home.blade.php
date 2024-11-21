@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
{{-- @include('components.hero', ['landingPageData' => $landingPageData]) --}}
@include('components.header.header-video-order')

<div class="wrapper">
    @component('components.product') @endcomponent
    @component('components.about-us') @endcomponent
    @component('components.cta') @endcomponent
</div>
@endsection