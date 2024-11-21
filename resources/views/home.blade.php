@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
{{-- Include the header component with data --}}
@include('components.header.header-video-order', ['headerData' => $headerData])

<div class="wrapper">
    @component('components.product') @endcomponent
    @component('components.about-us') @endcomponent
    @component('components.cta') @endcomponent
</div>
@endsection