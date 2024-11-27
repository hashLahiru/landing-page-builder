<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Site Name') }}</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/paper-kit.min7317.css?v=2.3.1') }}">

  <!-- Laravel's App styles -->
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .async-hide {
      opacity: 0 !important
    }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('js/header-script.js') }}"></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    <!-- Include Navbar -->
    @include('components.navbar')

    {{--
    <!-- Page Heading -->
    @isset($header)
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endisset --}}

    <!-- Page Content -->
    <main>
      @yield('content')
    </main>

    <!-- Include Footer -->
    @include('components.footer')

  </div>

  <!-- JS Files -->
  <script src="{{ asset('/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/paper-kit.min7317.js?v=2.3.1') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/bootstrap-switch.js') }}"></script>
  <script src="{{ asset('/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <script src="{{ asset('/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/presentation-page/main.js') }}"></script>
  <script src="{{ asset('/js/plugins/photo_swipe/photoswipe.min.js') }}"></script>
  <script src="{{ asset('/js/plugins/photo_swipe/photoswipe-ui-default.min.js') }}"></script>
  <script src="{{ asset('/js/plugins/photo_swipe/init-gallery.js') }}"></script>
  <script src="{{ asset('/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/demo/jquery.sharrre.js') }}"></script>

  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>

  <script>
    $(document).ready(function() {    
                // Facebook Pixel Code Don't Delete
                !function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');
        
                try {
                    fbq('init', '111649226022273');
                    fbq('track', "PageView");
                } catch (err) {
                    console.log('Facebook Track Error:', err);
                }
            });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>

</html>