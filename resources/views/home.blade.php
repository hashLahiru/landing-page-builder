@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    @component('components.hero')
    @endcomponent

    @component('components.header.header-video-order')
    @endcomponent

    @component('components.header.header-search')
    @endcomponent

    @component('components.header.header-carosunl')
    @endcomponent

    @component('components.header.header-simple')
    @endcomponent

    {{-- features --}}
    @component('components.features.features-1')
    @endcomponent

    @component('components.features.features-2')
    @endcomponent

    @component('components.features.features-3')
    @endcomponent

    @component('components.features.features-4')
    @endcomponent

    @component('components.features.features-5')
    @endcomponent

    {{-- blogs --}}
    @component('components.blogs.blogpost-1')
    @endcomponent

    @component('components.blogs.blogpost-2')
    @endcomponent

    @component('components.blogs.blogpost-3')
    @endcomponent

    @component('components.blogs.blogpost-4')
    @endcomponent

    @component('components.blogs.blogpost-5')
    @endcomponent

    {{-- teams --}}
    @component('components.teams.team-1')
    @endcomponent

    @component('components.teams.team-2')
    @endcomponent

    @component('components.teams.team-3')
    @endcomponent

    @component('components.teams.team-4')
    @endcomponent

    @component('components.teams.team-5')
    @endcomponent


    {{-- products --}}
    @component('components.products.product-list-1')
    @endcomponent

    @component('components.products.product-list-2')
    @endcomponent

    @component('components.products.product-list-3')
    @endcomponent
  
    @component('components.products.product-list-4')
    @endcomponent

    {{-- pricing --}}
    
    @component('components.pricing.pricing-plan-1')
    @endcomponent

    @component('components.pricing.pricing-plan-2')
    @endcomponent

    @component('components.pricing.pricing-plan-3')
    @endcomponent

    @component('components.pricing.pricing-plan-4')
    @endcomponent

    @component('components.pricing.pricing-plan-5')
    @endcomponent

    {{-- feedback --}}

    @component('components.feedbacks.feedback-1')
    @endcomponent

    @component('components.feedbacks.feedback-2')
    @endcomponent

    @component('components.feedbacks.feedback-3')
    @endcomponent

    {{-- contact us --}}


    @component('components.CTA.cta-1')
    @endcomponent
        
    @component('components.CTA.cta-2')
    @endcomponent



    <div class="wrapper">
            @component('components.product')        
            @endcomponent   

         
            @component('components.about-us')                
            @endcomponent

            @component('components.cta')                
            @endcomponent

        

    </div>

@endsection
