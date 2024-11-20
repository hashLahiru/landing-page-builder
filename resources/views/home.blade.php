@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    @component('components.hero')
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
