<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-kit-2-pro" />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/paper-kit.min7317.css?v=2.3.1') }}">
    <title>@yield('title', 'Default Title')</title>

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{asset('js/header-script.js')}}"></script>
</head>

<body>
    <!-- Include Navbar -->
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('components.footer')

    <!-- JS Files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/paper-kit.min.js?v=2.3.1') }}"></script>
</body>

</html>