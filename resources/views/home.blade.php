@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
{{-- Include the header component with data --}}

@include('components.header.header-video-order', ['headerData' => $headerData])

{{-- Nithya Jayasooriya -2024/12/1 --}}
@include('components.header.header-search', ['header2Data' => $header2Data])

@include('components.header.header-carosunl', ['header3Data' => $header3Data])

@include('components.header.header-simple', ['header4Data' => $header4Data]) 

@include('components.product', ['productData' => $productData])


{{-- Nithya Jayasooriya -2024/11/25 --}}
@include('components.features.features-2', ['feature2Data' => $feature2Data])

@include('components.features.features-3', ['feature3Data' => $feature3Data])

@include('components.features.features-4', ['feature4Data' => $feature4Data])

@include('components.features.features-5', ['feature5Data' => $feature5Data])

{{-- Nithya Jayasooriya -2024/11/30 --}}
@include('components.teams.team-1', ['Teams1Data' => $Teams1Data]) 

@include('components.teams.team-2', ['Teams2Data' => $Teams2Data]) 

@include('components.teams.team-3', ['Teams3Data' => $Teams3Data]) 

@include('components.teams.team-4', ['Teams4Data' => $Teams4Data]) 

@include('components.teams.team-5', ['Teams5Data' => $Teams5Data]) 

@include('components.products.product-list-1', ['ProductList1Data' => $ProductList1Data])

@include('components.products.product-list-2', ['ProductList2Data' => $ProductList2Data])

@include('components.products.product-list-3', ['ProductList3Data' => $ProductList3Data]) 

@include('components.products.product-list-4', ['ProductList4Data' => $ProductList4Data]) 

@include('components.pricing.pricing-plan-1', ['PricingPlan1Data' => $PricingPlan1Data]) 

@include('components.pricing.pricing-plan-2', ['PricingPlan2Data' => $PricingPlan2Data]) 

@include('components.pricing.pricing-plan-3', ['PricingPlan3Data' => $PricingPlan3Data]) 

@include('components.pricing.pricing-plan-4', ['PricingPlan4Data' => $PricingPlan4Data]) 

@include('components.pricing.pricing-plan-5', ['PricingPlan5Data' => $PricingPlan5Data]) 

@include('components.feedbacks.feedback-1', ['feedback1Data' => $feedback1Data])

@include('components.feedbacks.feedback-2', ['feedback2Data' => $feedback2Data])

@include('components.feedbacks.feedback-3', ['feedback3Data' => $feedback3Data])

@include('components.about-us', ['aboutData' => $aboutData]) 


{{-- @include('components.footer', ['footerData' => $footerData]) --}}












    <div class="wrapper">
        {{-- @component('components.product')
        @endcomponent --}}
        {{-- @component('components.about-us')
        @endcomponent --}}
        {{-- @component('components.cta')
        @endcomponent --}}
    </div>
@endsection
