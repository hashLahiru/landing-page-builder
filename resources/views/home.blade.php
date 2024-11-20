@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    @component('components.hero')
    @endcomponent

    @component('components.header.header-video-order')
    @endcomponent
{{-- 
    @component('components.header.header-search')
    @endcomponent

    @component('components.header.header-carosunl')
    @endcomponent

    @component('components.header.header-simple')
    @endcomponent --}}
    
    <div class="wrapper">
            @component('components.product')        
            @endcomponent   

         
            @component('components.about-us')                
            @endcomponent

            @component('components.cta')                
            @endcomponent

        

    </div>

@endsection
