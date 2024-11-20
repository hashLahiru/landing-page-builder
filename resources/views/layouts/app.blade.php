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
          ! function(f, b, e, v, n, t, s) {
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
          }(window,
            document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');
    
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
    <script>
        $(document).ready(function() {
    
          $sidebar = $('.sidebar');
          $sidebar_img_container = $sidebar.find('.sidebar-background');
    
          $full_page = $('.full-page');
    
          $sidebar_responsive = $('body > .navbar-collapse');
          sidebar_mini_active = false;
    
          window_width = $(window).width();
    
          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
          // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
          //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
          //         $('.fixed-plugin .dropdown').addClass('show');
          //     }
          //
          // }
    
          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });
    
          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');
    
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
    
            var new_color = $(this).data('color');
    
            if ($sidebar.length != 0) {
              $sidebar.attr('data-active-color', new_color);
            }
    
            if ($full_page.length != 0) {
              $full_page.attr('data-active-color', new_color);
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-active-color', new_color);
            }
          });
    
          $('.fixed-plugin .background-color span').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
    
            var new_color = $(this).data('color');
    
            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }
    
            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });
    
          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');
    
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');
    
    
            var new_image = $(this).find("img").attr('src');
    
            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }
    
            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }
    
            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }
    
            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });
    
          $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
            $full_page_background = $('.full-page-background');
    
            $input = $(this);
    
            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }
    
              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }
    
              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }
    
              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }
    
              background_image = false;
            }
          });
    
    
          $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
            $body = $('body');
    
            $input = $(this);
    
            if (paperDashboard.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              paperDashboard.misc.sidebar_mini_active = false;
            } else {
              $('body').addClass('sidebar-mini');
              paperDashboard.misc.sidebar_mini_active = true;
            }
    
            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);
    
            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);
    
          });
    
        });
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8e4d9c578de5cdd2","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"1b7cbb72744b40c580f8633c6b62637e","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>