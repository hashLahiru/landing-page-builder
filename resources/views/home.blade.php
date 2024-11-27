@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
{{-- Include the header component with data --}}
@include('components.header.header-video-order', ['headerData' => $headerData])

@include('components.product', ['productData' => $productData])

<div class="wrapper">
    @component('components.about-us') @endcomponent
    @component('components.cta') @endcomponent
</div>
@endsection