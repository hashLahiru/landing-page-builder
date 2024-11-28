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

    @include('components.feedbacks.feedback-1', ['feedback1Data' => $feedback1Data])

    @include('components.feedbacks.feedback-2', ['feedback2Data' => $feedback2Data])

    @include('components.feedbacks.feedback-3', ['feedback3Data' => $feedback3Data])

    @include('components.products.product-list-1', ['ProductList1Data' => $ProductList1Data])

    @include('components.products.product-list-2', ['ProductList2Data' => $ProductList2Data])

    {{-- @include('components.products.product-list-3', ['ProductList3Data' => $ProductList3Data]) --}}

    <div class="wrapper">
        @component('components.product')
        @endcomponent
        @component('components.about-us')
        @endcomponent
        @component('components.cta')
        @endcomponent
    </div>
@endsection
