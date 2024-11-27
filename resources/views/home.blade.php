@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
{{-- Include the header component with data --}}
@include('components.header.header-video-order', ['headerData' => $headerData])

@include('components.product', ['productData' => $productData])

@include('components.features.features-2', ['feature2Data' => $feature2Data])
@include('components.features.features-3', ['feature3Data' => $feature3Data])
@include('components.features.features-4', ['feature4Data' => $feature4Data])
@include('components.features.features-5', ['feature5Data' => $feature5Data])


<div class="wrapper">

    @component('components.about-us') @endcomponent
    @component('components.cta') @endcomponent

</div>
@endsection