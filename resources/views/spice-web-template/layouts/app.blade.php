<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Site Name') }}</title>
    <link
      rel="shortcut icon"
      href="{{ asset('SpiceWebTemplate/cdn/shop/files/ICON_32x3214b0.png?v=1614350749')}}  "
      type="image/png"
    />
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <style>
      html,
      body {
        overflow-x: hidden;
      }
      .row {
        overflow: hidden;
      }

      /* #page_preloader__bg {
        background: #fff;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1000;
        -webkit-transition: opacity 0.1s ease-in-out 0.05s,
          z-index 0.1s ease-in-out 0.05s;
        -moz-transition: opacity 0.1s ease-in-out 0.05s,
          z-index 0.1s ease-in-out 0.05s;
        transition: opacity 0.1s ease-in-out 0.05s,
          z-index 0.1s ease-in-out 0.05s;

        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
      #page_preloader__bg.off {
        opacity: 0;
        z-index: -10;
      } */

      /* #page_preloader__img {
        margin: -50px 0 0 -50px;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1001;
        -webkit-transition: transform 0.2s ease-in-out;
        -moz-transition: transform 0.2s ease-in-out;
        transition: transform 0.2s ease-in-out;

        -webkit-transform: scale3d(1, 1, 1);
        -ms-transform: scale3d(1, 1, 1);
        -o-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
      }
      #page_preloader__img.off {
        -webkit-transform: scale3d(0, 0, 1);
        -ms-transform: scale3d(0, 0, 1);
        -o-transform: scale3d(0, 0, 1);
        transform: scale3d(0, 0, 1);
      } */

      .container {
        margin-right: auto;
        margin-left: auto;
      }
      @media (max-width: 767px) {
        .container {
          padding-left: 15px;
          padding-right: 15px;
        }
      }
      @media (min-width: 768px) {
        .container {
          width: 750px;
        }
      }
      @media (min-width: 992px) {
        .container {
          width: 970px;
        }
      }
      @media (min-width: 1200px) {
        .container {
          width: 1170px;
        }
      }
      .container-fluid {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
      }
      .row {
        margin-right: -15px;
        margin-left: -15px;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .col-xs-1,
      .col-sm-1,
      .col-md-1,
      .col-lg-1,
      .col-xs-2,
      .col-sm-2,
      .col-md-2,
      .col-lg-2,
      .col-xs-3,
      .col-sm-3,
      .col-md-3,
      .col-lg-3,
      .col-xs-4,
      .col-sm-4,
      .col-md-4,
      .col-lg-4,
      .col-xs-5,
      .col-sm-5,
      .col-md-5,
      .col-lg-5,
      .col-xs-6,
      .col-sm-6,
      .col-md-6,
      .col-lg-6,
      .col-xs-7,
      .col-sm-7,
      .col-md-7,
      .col-lg-7,
      .col-xs-8,
      .col-sm-8,
      .col-md-8,
      .col-lg-8,
      .col-xs-9,
      .col-sm-9,
      .col-md-9,
      .col-lg-9,
      .col-xs-10,
      .col-sm-10,
      .col-md-10,
      .col-lg-10,
      .col-xs-11,
      .col-sm-11,
      .col-md-11,
      .col-lg-11,
      .col-xs-12,
      .col-sm-12,
      .col-md-12,
      .col-lg-12 {
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        position: relative;
      }
      .col-xs-1,
      .col-xs-2,
      .col-xs-3,
      .col-xs-4,
      .col-xs-5,
      .col-xs-6,
      .col-xs-7,
      .col-xs-8,
      .col-xs-9,
      .col-xs-10,
      .col-xs-11,
      .col-xs-12 {
        float: left;
      }
      .col-xs-12 {
        width: 100%;
      }
      .col-xs-11 {
        width: 91.66666667%;
      }
      .col-xs-10 {
        width: 83.33333333%;
      }
      .col-xs-9 {
        width: 75%;
      }
      .col-xs-8 {
        width: 66.66666667%;
      }
      .col-xs-7 {
        width: 58.33333333%;
      }
      .col-xs-6 {
        width: 50%;
      }
      .col-xs-5 {
        width: 41.66666667%;
      }
      .col-xs-4 {
        width: 33.33333333%;
      }
      .col-xs-3 {
        width: 25%;
      }
      .col-xs-2 {
        width: 16.66666667%;
      }
      .col-xs-1 {
        width: 8.33333333%;
      }
      .col-xs-pull-12 {
        right: 100%;
      }
      .col-xs-pull-11 {
        right: 91.66666667%;
      }
      .col-xs-pull-10 {
        right: 83.33333333%;
      }
      .col-xs-pull-9 {
        right: 75%;
      }
      .col-xs-pull-8 {
        right: 66.66666667%;
      }
      .col-xs-pull-7 {
        right: 58.33333333%;
      }
      .col-xs-pull-6 {
        right: 50%;
      }
      .col-xs-pull-5 {
        right: 41.66666667%;
      }
      .col-xs-pull-4 {
        right: 33.33333333%;
      }
      .col-xs-pull-3 {
        right: 25%;
      }
      .col-xs-pull-2 {
        right: 16.66666667%;
      }
      .col-xs-pull-1 {
        right: 8.33333333%;
      }
      .col-xs-pull-0 {
        right: auto;
      }
      .col-xs-push-12 {
        left: 100%;
      }
      .col-xs-push-11 {
        left: 91.66666667%;
      }
      .col-xs-push-10 {
        left: 83.33333333%;
      }
      .col-xs-push-9 {
        left: 75%;
      }
      .col-xs-push-8 {
        left: 66.66666667%;
      }
      .col-xs-push-7 {
        left: 58.33333333%;
      }
      .col-xs-push-6 {
        left: 50%;
      }
      .col-xs-push-5 {
        left: 41.66666667%;
      }
      .col-xs-push-4 {
        left: 33.33333333%;
      }
      .col-xs-push-3 {
        left: 25%;
      }
      .col-xs-push-2 {
        left: 16.66666667%;
      }
      .col-xs-push-1 {
        left: 8.33333333%;
      }
      .col-xs-push-0 {
        left: auto;
      }
      .col-xs-offset-12 {
        margin-left: 100%;
      }
      .col-xs-offset-11 {
        margin-left: 91.66666667%;
      }
      .col-xs-offset-10 {
        margin-left: 83.33333333%;
      }
      .col-xs-offset-9 {
        margin-left: 75%;
      }
      .col-xs-offset-8 {
        margin-left: 66.66666667%;
      }
      .col-xs-offset-7 {
        margin-left: 58.33333333%;
      }
      .col-xs-offset-6 {
        margin-left: 50%;
      }
      .col-xs-offset-5 {
        margin-left: 41.66666667%;
      }
      .col-xs-offset-4 {
        margin-left: 33.33333333%;
      }
      .col-xs-offset-3 {
        margin-left: 25%;
      }
      .col-xs-offset-2 {
        margin-left: 16.66666667%;
      }
      .col-xs-offset-1 {
        margin-left: 8.33333333%;
      }
      .col-xs-offset-0 {
        margin-left: 0;
      }
      @media (min-width: 768px) {
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
          float: left;
        }
        .col-sm-12 {
          width: 100%;
        }
        .col-sm-11 {
          width: 91.66666667%;
        }
        .col-sm-10 {
          width: 83.33333333%;
        }
        .col-sm-9 {
          width: 75%;
        }
        .col-sm-8 {
          width: 66.66666667%;
        }
        .col-sm-7 {
          width: 58.33333333%;
        }
        .col-sm-6 {
          width: 50%;
        }
        .col-sm-5 {
          width: 41.66666667%;
        }
        .col-sm-4 {
          width: 33.33333333%;
        }
        .col-sm-3 {
          width: 25%;
        }
        .col-sm-2 {
          width: 16.66666667%;
        }
        .col-sm-1 {
          width: 8.33333333%;
        }
        .col-sm-pull-12 {
          right: 100%;
        }
        .col-sm-pull-11 {
          right: 91.66666667%;
        }
        .col-sm-pull-10 {
          right: 83.33333333%;
        }
        .col-sm-pull-9 {
          right: 75%;
        }
        .col-sm-pull-8 {
          right: 66.66666667%;
        }
        .col-sm-pull-7 {
          right: 58.33333333%;
        }
        .col-sm-pull-6 {
          right: 50%;
        }
        .col-sm-pull-5 {
          right: 41.66666667%;
        }
        .col-sm-pull-4 {
          right: 33.33333333%;
        }
        .col-sm-pull-3 {
          right: 25%;
        }
        .col-sm-pull-2 {
          right: 16.66666667%;
        }
        .col-sm-pull-1 {
          right: 8.33333333%;
        }
        .col-sm-pull-0 {
          right: auto;
        }
        .col-sm-push-12 {
          left: 100%;
        }
        .col-sm-push-11 {
          left: 91.66666667%;
        }
        .col-sm-push-10 {
          left: 83.33333333%;
        }
        .col-sm-push-9 {
          left: 75%;
        }
        .col-sm-push-8 {
          left: 66.66666667%;
        }
        .col-sm-push-7 {
          left: 58.33333333%;
        }
        .col-sm-push-6 {
          left: 50%;
        }
        .col-sm-push-5 {
          left: 41.66666667%;
        }
        .col-sm-push-4 {
          left: 33.33333333%;
        }
        .col-sm-push-3 {
          left: 25%;
        }
        .col-sm-push-2 {
          left: 16.66666667%;
        }
        .col-sm-push-1 {
          left: 8.33333333%;
        }
        .col-sm-push-0 {
          left: auto;
        }
        .col-sm-offset-12 {
          margin-left: 100%;
        }
        .col-sm-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
          margin-left: 75%;
        }
        .col-sm-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
          margin-left: 50%;
        }
        .col-sm-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
          margin-left: 25%;
        }
        .col-sm-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
          margin-left: 0;
        }
      }
      @media (min-width: 992px) {
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12 {
          float: left;
        }
        .col-md-12 {
          width: 100%;
        }
        .col-md-11 {
          width: 91.66666667%;
        }
        .col-md-10 {
          width: 83.33333333%;
        }
        .col-md-9 {
          width: 75%;
        }
        .col-md-8 {
          width: 66.66666667%;
        }
        .col-md-7 {
          width: 58.33333333%;
        }
        .col-md-6 {
          width: 50%;
        }
        .col-md-5 {
          width: 41.66666667%;
        }
        .col-md-4 {
          width: 33.33333333%;
        }
        .col-md-3 {
          width: 25%;
        }
        .col-md-2 {
          width: 16.66666667%;
        }
        .col-md-1 {
          width: 8.33333333%;
        }
        .col-md-pull-12 {
          right: 100%;
        }
        .col-md-pull-11 {
          right: 91.66666667%;
        }
        .col-md-pull-10 {
          right: 83.33333333%;
        }
        .col-md-pull-9 {
          right: 75%;
        }
        .col-md-pull-8 {
          right: 66.66666667%;
        }
        .col-md-pull-7 {
          right: 58.33333333%;
        }
        .col-md-pull-6 {
          right: 50%;
        }
        .col-md-pull-5 {
          right: 41.66666667%;
        }
        .col-md-pull-4 {
          right: 33.33333333%;
        }
        .col-md-pull-3 {
          right: 25%;
        }
        .col-md-pull-2 {
          right: 16.66666667%;
        }
        .col-md-pull-1 {
          right: 8.33333333%;
        }
        .col-md-pull-0 {
          right: auto;
        }
        .col-md-push-12 {
          left: 100%;
        }
        .col-md-push-11 {
          left: 91.66666667%;
        }
        .col-md-push-10 {
          left: 83.33333333%;
        }
        .col-md-push-9 {
          left: 75%;
        }
        .col-md-push-8 {
          left: 66.66666667%;
        }
        .col-md-push-7 {
          left: 58.33333333%;
        }
        .col-md-push-6 {
          left: 50%;
        }
        .col-md-push-5 {
          left: 41.66666667%;
        }
        .col-md-push-4 {
          left: 33.33333333%;
        }
        .col-md-push-3 {
          left: 25%;
        }
        .col-md-push-2 {
          left: 16.66666667%;
        }
        .col-md-push-1 {
          left: 8.33333333%;
        }
        .col-md-push-0 {
          left: auto;
        }
        .col-md-offset-12 {
          margin-left: 100%;
        }
        .col-md-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-md-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-md-offset-9 {
          margin-left: 75%;
        }
        .col-md-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-md-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-md-offset-6 {
          margin-left: 50%;
        }
        .col-md-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-md-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-md-offset-3 {
          margin-left: 25%;
        }
        .col-md-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-md-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-md-offset-0 {
          margin-left: 0;
        }
      }
      @media (min-width: 1200px) {
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12 {
          float: left;
        }
        .col-lg-12 {
          width: 100%;
        }
        .col-lg-11 {
          width: 91.66666667%;
        }
        .col-lg-10 {
          width: 83.33333333%;
        }
        .col-lg-9 {
          width: 75%;
        }
        .col-lg-8 {
          width: 66.66666667%;
        }
        .col-lg-7 {
          width: 58.33333333%;
        }
        .col-lg-6 {
          width: 50%;
        }
        .col-lg-5 {
          width: 41.66666667%;
        }
        .col-lg-4 {
          width: 33.33333333%;
        }
        .col-lg-3 {
          width: 25%;
        }
        .col-lg-2 {
          width: 16.66666667%;
        }
        .col-lg-1 {
          width: 8.33333333%;
        }
        .col-lg-pull-12 {
          right: 100%;
        }
        .col-lg-pull-11 {
          right: 91.66666667%;
        }
        .col-lg-pull-10 {
          right: 83.33333333%;
        }
        .col-lg-pull-9 {
          right: 75%;
        }
        .col-lg-pull-8 {
          right: 66.66666667%;
        }
        .col-lg-pull-7 {
          right: 58.33333333%;
        }
        .col-lg-pull-6 {
          right: 50%;
        }
        .col-lg-pull-5 {
          right: 41.66666667%;
        }
        .col-lg-pull-4 {
          right: 33.33333333%;
        }
        .col-lg-pull-3 {
          right: 25%;
        }
        .col-lg-pull-2 {
          right: 16.66666667%;
        }
        .col-lg-pull-1 {
          right: 8.33333333%;
        }
        .col-lg-pull-0 {
          right: auto;
        }
        .col-lg-push-12 {
          left: 100%;
        }
        .col-lg-push-11 {
          left: 91.66666667%;
        }
        .col-lg-push-10 {
          left: 83.33333333%;
        }
        .col-lg-push-9 {
          left: 75%;
        }
        .col-lg-push-8 {
          left: 66.66666667%;
        }
        .col-lg-push-7 {
          left: 58.33333333%;
        }
        .col-lg-push-6 {
          left: 50%;
        }
        .col-lg-push-5 {
          left: 41.66666667%;
        }
        .col-lg-push-4 {
          left: 33.33333333%;
        }
        .col-lg-push-3 {
          left: 25%;
        }
        .col-lg-push-2 {
          left: 16.66666667%;
        }
        .col-lg-push-1 {
          left: 8.33333333%;
        }
        .col-lg-push-0 {
          left: auto;
        }
        .col-lg-offset-12 {
          margin-left: 100%;
        }
        .col-lg-offset-11 {
          margin-left: 91.66666667%;
        }
        .col-lg-offset-10 {
          margin-left: 83.33333333%;
        }
        .col-lg-offset-9 {
          margin-left: 75%;
        }
        .col-lg-offset-8 {
          margin-left: 66.66666667%;
        }
        .col-lg-offset-7 {
          margin-left: 58.33333333%;
        }
        .col-lg-offset-6 {
          margin-left: 50%;
        }
        .col-lg-offset-5 {
          margin-left: 41.66666667%;
        }
        .col-lg-offset-4 {
          margin-left: 33.33333333%;
        }
        .col-lg-offset-3 {
          margin-left: 25%;
        }
        .col-lg-offset-2 {
          margin-left: 16.66666667%;
        }
        .col-lg-offset-1 {
          margin-left: 8.33333333%;
        }
        .col-lg-offset-0 {
          margin-left: 0;
        }
      }
      .section_map {
        margin: 0;
        position: relative;
      }
      .section_map .map_wrapper {
        overflow: hidden;
        position: relative;
        z-index: 1;
      }
      .section_map .map_container {
        position: absolute;
        top: 0;
        right: -44%;
        bottom: 0;
        left: 0;
        z-index: 1;
      }
      .section_map .map_captions__off {
        right: 0;
      }
      .section_map .map_wrapper__small {
        padding: 19.53% 0 0 0;
      }
      .section_map .map_wrapper__medium {
        padding: 29.29% 0 0 0;
      }
      .section_map .map_wrapper__large {
        padding: 39.06% 0 0 0;
      }

      #floating-whatsapp {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

#whatsapp_button {
    position: fixed;
    bottom: 20px; /* Distance from the bottom of the screen */
    right: 20px;  /* Distance from the right side of the screen */
    background-color: #25d366; /* WhatsApp green color */
    color: white;
    padding: 15px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    font-size: 30px;
    z-index: 9999;
    transition: background-color 0.3s ease;
}

#whatsapp_button:hover {
    background-color: #128c7e; /* Darker WhatsApp color on hover */
}

#whatsapp_button i {
    margin: 0;
}

.product_options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.product_options__search input {
    width: 60%;
    padding: 10px;
    font-size: 14px;
}

.product_options__all button {
    padding: 10px 20px;
    background-color: #333;
    color: white;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.product_options__all button:hover {
    background-color: #555;
}


    </style>
    <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch" />
    <script>
      (function () {
        if ("sendBeacon" in navigator && "performance" in window) {
          var session_token = document.cookie.match(/_shopify_s=([^;]*)/);
          function handle_abandonment_event(e) {
            var entries = performance.getEntries().filter(function (entry) {
              return /monorail-edge.shopifysvc.com/.test(entry.name);
            });
            if (!window.abandonment_tracked && entries.length === 0) {
              window.abandonment_tracked = true;
              var currentMs = Date.now();
              var navigation_start = performance.timing.navigationStart;
              var payload = {
                shop_id: 28234023009,
                url: window.location.href,
                navigation_start,
                duration: currentMs - navigation_start,
                session_token:
                  session_token && session_token.length === 2
                    ? session_token[1]
                    : "",
                page_type: "index",
              };
              window.navigator.sendBeacon(
                "https://monorail-edge.shopifysvc.com/v1/produce",
                JSON.stringify({
                  schema_id: "online_store_buyer_site_abandonment/1.1",
                  payload: payload,
                  metadata: {
                    event_created_at_ms: currentMs,
                    event_sent_at_ms: currentMs,
                  },
                })
              );
            }
          }
          window.addEventListener("pagehide", handle_abandonment_event);
        }
      })();
    </script>
    <script id="web-pixels-manager-setup">
      (function d(d, e, r, a, n) {
        var o,
          i,
          t,
          s,
          l =
            ((i = (o = {
              modern:
                /Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](12[89]|1[3-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(12[7-9]|1[3-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(12[89]|1[3-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,
              legacy:
                /Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](12[89]|1[3-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(12[7-9]|1[3-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(12[89]|1[3-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/,
            }).modern),
            (t = o.legacy),
            (s = navigator.userAgent),
            i.test(s) ? "modern" : (t.test(s), "legacy"));
        window.Shopify = window.Shopify || {};
        var c = window.Shopify;
        c.analytics = c.analytics || {};
        var u = c.analytics;
        (u.replayQueue = []),
          (u.publish = function (d, e, r) {
            return u.replayQueue.push([d, e, r]), !0;
          });
        try {
          self.performance.mark("wpm:start");
        } catch (d) {}
        var h = [r, "/wpm", "/b", n, l.substring(0, 1), ".js"].join("");
        !(function (d) {
          var e = d.src,
            r = d.async,
            a = void 0 === r || r,
            n = d.onload,
            o = d.onerror,
            i = document.createElement("script"),
            t = document.head,
            s = document.body;
          (i.async = a),
            (i.src = e),
            n && i.addEventListener("load", n),
            o && i.addEventListener("error", o),
            t
              ? t.appendChild(i)
              : s
              ? s.appendChild(i)
              : console.error(
                  "Did not find a head or body element to append the script"
                );
        })({
          src: h,
          async: !0,
          onload: function () {
            var r = window.webPixelsManager.init(d);
            e(r);
            var a = window.Shopify.analytics;
            a.replayQueue.forEach(function (d) {
              var e = d[0],
                a = d[1],
                n = d[2];
              r.publishCustomEvent(e, a, n);
            }),
              (a.replayQueue = []),
              (a.publish = r.publishCustomEvent),
              (a.visitor = r.visitor);
          },
          onerror: function () {
            var e = d.storefrontBaseUrl.replace(/\/$/, ""),
              r = "".concat(
                e,
                "/.well-known/shopify/monorail/unstable/produce_batch"
              ),
              n = JSON.stringify({
                metadata: { event_sent_at_ms: new Date().getTime() },
                events: [
                  {
                    schema_id: "web_pixels_manager_load/3.1",
                    payload: {
                      version: a || "latest",
                      bundle_target: l,
                      page_url: self.location.href,
                      status: "failed",
                      surface: d.surface,
                      error_msg: "".concat(h, " has failed to load"),
                    },
                    metadata: { event_created_at_ms: new Date().getTime() },
                  },
                ],
              });
            try {
              if (self.navigator.sendBeacon.bind(self.navigator)(r, n))
                return !0;
            } catch (d) {}
            var o = new XMLHttpRequest();
            try {
              return (
                o.open("POST.html", r, !0),
                o.setRequestHeader("Content-Type", "text/plain"),
                o.send(n),
                !0
              );
            } catch (d) {
              console &&
                console.warn &&
                console.warn(
                  "[Web Pixels Manager] Got an unhandled error while logging a load error."
                );
            }
            return !1;
          },
        });
      })(
        {
          shopId: 28234023009,
          storefrontBaseUrl: "https://theme848-spices-store.myshopify.com",
          extensionsBaseUrl:
            "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
          surface: "storefront-renderer",
          enabledBetaFlags: [],
          webPixelsConfigList: [
            {
              id: "shopify-app-pixel",
              configuration: "{}",
              eventPayloadVersion: "v1",
              runtimeContext: "STRICT",
              scriptVersion: "0220",
              apiClientId: "shopify-pixel",
              type: "APP",
              privacyPurposes: ["ANALYTICS", "MARKETING"],
            },
            {
              id: "shopify-custom-pixel",
              eventPayloadVersion: "v1",
              runtimeContext: "LAX",
              scriptVersion: "0220",
              apiClientId: "shopify-pixel",
              type: "CUSTOM",
              privacyPurposes: ["ANALYTICS", "MARKETING"],
            },
          ],
          isMerchantRequest: false,
          initData: {
            shop: {
              name: "theme848-spices-store",
              paymentSettings: { currencyCode: "USD" },
              myshopifyDomain: "theme848-spices-store.myshopify.com",
              countryCode: "UA",
              storefrontUrl: "https:\/\/theme848-spices-store.myshopify.com",
            },
            customer: null,
            cart: null,
            checkout: null,
            productVariants: [],
            purchasingCompany: null,
          },
        },
        function pageEvents(webPixelsManagerAPI) {
          webPixelsManagerAPI.publish("page_viewed", {});
        },
        "cdn.html",
        "1518c2ba4d2b3301a1e3cb6576947ef22edf7bb6",
        "3c762e5aw5b983e43pc2dc4883m545d5a27"
      );
    </script>
    <script>
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = "USD";
      var meta = { page: { pageType: "home" } };
      for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
      }
    </script>
    <script>
      window.ShopifyAnalytics.merchantGoogleAnalytics = function () {};
    </script>
    <script class="analytics">
      (function () {
        var customDocumentWrite = function (content) {
          var jquery = null;

          if (window.jQuery) {
            jquery = window.jQuery;
          } else if (window.Checkout && window.Checkout.$) {
            jquery = window.Checkout.$;
          }

          if (jquery) {
            jquery("body").append(content);
          }
        };

        var hasLoggedConversion = function (token) {
          if (token) {
            return document.cookie.indexOf("loggedConversion=" + token) !== -1;
          }
          return false;
        };

        var setCookieIfConversion = function (token) {
          if (token) {
            var twoMonthsFromNow = new Date(Date.now());
            twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

            document.cookie =
              "loggedConversion=" + token + "; expires=" + twoMonthsFromNow;
          }
        };

        var trekkie =
          (window.ShopifyAnalytics.lib =
          window.trekkie =
            window.trekkie || []);
        if (trekkie.integrations) {
          return;
        }
        trekkie.methods = [
          "identify",
          "page",
          "ready",
          "track",
          "trackForm",
          "trackLink",
        ];
        trekkie.factory = function (method) {
          return function () {
            var args = Array.prototype.slice.call(arguments);
            args.unshift(method);
            trekkie.push(args);
            return trekkie;
          };
        };
        for (var i = 0; i < trekkie.methods.length; i++) {
          var key = trekkie.methods[i];
          trekkie[key] = trekkie.factory(key);
        }
        trekkie.load = function (config) {
          trekkie.config = config || {};
          trekkie.config.initialDocumentCookie = document.cookie;
          var first = document.getElementsByTagName("script")[0];
          var script = document.createElement("script");
          script.type = "text/javascript";
          script.onerror = function (e) {
            var scriptFallback = document.createElement("script");
            scriptFallback.type = "text/javascript";
            scriptFallback.onerror = function (error) {
              var Monorail = {
                produce: function produce(monorailDomain, schemaId, payload) {
                  var currentMs = new Date().getTime();
                  var event = {
                    schema_id: schemaId,
                    payload: payload,
                    metadata: {
                      event_created_at_ms: currentMs,
                      event_sent_at_ms: currentMs,
                    },
                  };
                  return Monorail.sendRequest(
                    "https://" + monorailDomain + "/v1/produce",
                    JSON.stringify(event)
                  );
                },
                sendRequest: function sendRequest(endpointUrl, payload) {
                  // Try the sendBeacon API
                  if (
                    window &&
                    window.navigator &&
                    typeof window.navigator.sendBeacon === "function" &&
                    typeof window.Blob === "function" &&
                    !Monorail.isIos12()
                  ) {
                    var blobData = new window.Blob([payload], {
                      type: "text/plain",
                    });

                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                      return true;
                    } // sendBeacon was not successful
                  } // XHR beacon

                  var xhr = new XMLHttpRequest();

                  try {
                    xhr.open("POST.html", endpointUrl);
                    xhr.setRequestHeader("Content-Type", "text/plain");
                    xhr.send(payload);
                  } catch (e) {
                    console.log(e);
                  }

                  return false;
                },
                isIos12: function isIos12() {
                  return (
                    window.navigator.userAgent.lastIndexOf(
                      "iPhone; CPU iPhone OS 12_"
                    ) !== -1 ||
                    window.navigator.userAgent.lastIndexOf(
                      "iPad; CPU OS 12_"
                    ) !== -1
                  );
                },
              };
              Monorail.produce(
                "monorail-edge.shopifysvc.com",
                "trekkie_storefront_load_errors/1.1",
                {
                  shop_id: 28234023009,
                  theme_id: 81750818913,
                  app_name: "storefront",
                  context_url: window.location.href,
                  source_url:
                    "//theme848-spices-store.myshopify.com/cdn/s/trekkie.storefront.20de3b35f21c3bd6ff73e3f1547eb7d54e6e94e4.min.js",
                }
              );
            };
            scriptFallback.async = true;
            scriptFallback.src =
              "{{ asset('SpiceWebTemplate/cdn/s/trekkie.storefront.20de3b35f21c3bd6ff73e3f1547eb7d54e6e94e4.min.js') }}";
            first.parentNode.insertBefore(scriptFallback, first);
          };
          script.async = true;
          script.src =
            "{{ asset('SpiceWebTemplate/cdn/s/trekkie.storefront.20de3b35f21c3bd6ff73e3f1547eb7d54e6e94e4.min.js') }}";
          first.parentNode.insertBefore(script, first);
        };
        trekkie.load({
          Trekkie: {
            appName: "storefront",
            development: false,
            defaultAttributes: {
              shopId: 28234023009,
              isMerchantRequest: null,
              themeId: 81750818913,
              themeCityHash: "823708759597868212",
              contentLanguage: "en",
              currency: "USD",
            },
            isServerSideCookieWritingEnabled: true,
            monorailRegion: "shop_domain",
          },
          "Session Attribution": {},
          S2S: {
            facebookCapiEnabled: false,
            source: "trekkie-storefront-renderer",
            apiClientId: 580111,
          },
        });

        var loaded = false;
        trekkie.ready(function () {
          if (loaded) return;
          loaded = true;

          window.ShopifyAnalytics.lib = window.trekkie;

          var originalDocumentWrite = document.write;
          document.write = customDocumentWrite;
          try {
            window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
          } catch (error) {}
          document.write = originalDocumentWrite;

          window.ShopifyAnalytics.lib.page(null, { pageType: "home" });

          var match = window.location.pathname.match(
            /checkouts\/(.+)\/(thank_you|post_purchase)/
          );
          var token = match ? match[1] : undefined;
          if (!hasLoggedConversion(token)) {
            setCookieIfConversion(token);
          }
        });

        var eventsListenerScript = document.createElement("script");
        eventsListenerScript.async = true;
        eventsListenerScript.src =
          " {{ asset('cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js') }}";
        document
          .getElementsByTagName("head")[0]
          .appendChild(eventsListenerScript);
      })();
    </script>
    <script class="boomerang">
      (function () {
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.themeName = "SuitUp";
        window.BOOMR.themeVersion = "1.0.0";
        window.BOOMR.shopId = 28234023009;
        window.BOOMR.themeId = 81750818913;
      })();
    </script>
    <script
      defer
      src="{{ asset('SpiceWebTemplate/cdn/shopifycloud/perf-kit/shopify-perf-kit-1.0.2.min.js') }}"
      data-application="storefront-renderer"
      data-shop-id="28234023009"
      data-render-region="gcp-asia-southeast1"
      data-page-type="index"
      data-theme-instance-id="81750818913"
      data-monorail-region="shop_domain"
      data-resource-timing-sampling-rate="10"
    ></script>


</head>

<body class="font-sans antialiased">
    <main>
        @yield('content-spice')
    </main>
</body>
<script>
    var theme = {
        moneyFormat: "${{!! '{' !!}amount{!! '}' !!}",
    };
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script
      src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/assets1b9b.js') }}"
      defer
    ></script>
    <script
      src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/shop949e.js') }}"
      defer
    ></script>
    <link
      href="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/style.scssfb2e.css') }}"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <script
      src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/animateba16.js') }}"
      defer
    ></script>
    <link
      href="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/animate65d2.css') }}"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <script>
      theme.titleAnimation = true;
    </script>
    <noscript id="deferred_styles">
      <link
        href="{{ asset('SpiceWebTemplate/cdn/shop/t/2/assets/responsive.scss5928.css?v=46812263404506072931587974575') }}"
        rel="stylesheet"
        type="text/css"
        media="all"
      />

      <link
        href="http://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;subset=cyrillic"
        rel="stylesheet"
        type="text/css"
      />
    </noscript>
    <script>
      var loadDeferredStyles = function () {
        var addStylesNode = document.getElementById("deferred_styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf =
        requestAnimationFrame ||
        mozRequestAnimationFrame ||
        webkitRequestAnimationFrame ||
        msRequestAnimationFrame;
      if (raf)
        raf(function () {
          window.setTimeout(loadDeferredStyles, 0);
        });
      else window.addEventListener("load", loadDeferredStyles);
    </script>
    <script>
      window.performance &&
        window.performance.mark &&
        window.performance.mark("shopify.content_for_header.start");
    </script>
    <meta
      id="shopify-digital-wallet"
      name="shopify-digital-wallet"
      content="/28234023009/digital_wallets/dialog"
    />
    <script
      async="async"
      src="{{ asset('SpiceWebTemplate/checkouts/internal/preloads231c.js?locale=en-LK') }}"
    ></script>
    <script id="shopify-features" type="application/json">
      {
        "accessToken": "068df45217fbfa85f2d954e2a5bfdfdb",
        "betas": ["rich-media-storefront-analytics"],
        "domain": "theme848-spices-store.myshopify.com",
        "predictiveSearch": true,
        "shopId": 28234023009,
        "smart_payment_buttons_url": "https:\/\/theme848-spices-store.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
        "dynamic_checkout_cart_url": "https:\/\/theme848-spices-store.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
        "locale": "en"
      }
    </script>
    <script>
      var Shopify = Shopify || {};
      Shopify.shop = "theme848-spices-store.myshopify.com";
      Shopify.locale = "en";
      Shopify.currency = { active: "USD", rate: "1.0" };
      Shopify.country = "LK";
      Shopify.theme = {
        name: "EZE-653",
        id: 81750818913,
        schema_name: "SuitUp",
        schema_version: "1.0.0",
        theme_store_id: null,
        role: "main",
      };
      Shopify.theme.handle = "null";
      Shopify.theme.style = { id: null, handle: null };
      Shopify.cdnHost = "theme848-spices-store.myshopify.com/cdn";
      Shopify.routes = Shopify.routes || {};
      Shopify.routes.root = "index.html";
    </script>
    <script type="module">
      !(function (o) {
        (o.Shopify = o.Shopify || {}).modules = !0;
      })(window);
    </script>
    <script>
      !(function (o) {
        function n() {
          var o = [];
          function n() {
            o.push(Array.prototype.slice.apply(arguments));
          }
          return (n.q = o), n;
        }
        var t = (o.Shopify = o.Shopify || {});
        (t.loadFeatures = n()), (t.autoloadFeatures = n());
      })(window);
    </script>
    <script id="shop-js-analytics" type="application/json">
      { "pageType": "index" }
    </script>
    <script id="__st">
      var __st = {
        a: 28234023009,
        offset: -18000,
        reqid: "e1d1185c-d19c-4272-a956-b40952f8019e-1733121584",
        pageurl: "theme848-spices-store.myshopify.com\/",
        u: "c76b9cd0389a",
        p: "home",
      };
    </script>
    <script>
      window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script id="captcha-bootstrap">
      !(function () {
        "use strict";
        const t = "contact",
          e = "account",
          n = "new_comment",
          o = [
            [t, t],
            ["blogs", n],
            ["comments", n],
            [t, "customer"],
          ],
          c = [
            [e, "customer_login"],
            [e, "guest_login"],
            [e, "recover_customer_password"],
            [e, "create_customer"],
          ],
          r = (t) =>
            t
              .map(
                ([t, e]) =>
                  `form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`
              )
              .join(",");
        function s(t, e, n = !1) {
          try {
            const o = window.sessionStorage;
            for (const [n, c] of Object.entries(JSON.parse(o.getItem(e))))
              t.elements[n] && (t.elements[n].value = c);
            n && o.removeItem(e);
          } catch {}
        }
        const a = "form_key",
          i = [
            "recaptcha-v3-token",
            "g-recaptcha-response",
            "h-captcha-response",
            "password",
          ],
          u = () => {
            try {
              return window.sessionStorage;
            } catch {
              return;
            }
          },
          m = (t) => t.elements[a],
          f = "form_type",
          d = "cptcha";
        function p(t) {
          t.dataset[d] = !0;
        }
        const l = window,
          h = l.document,
          _ = "Shopify",
          y = "ce_forms",
          E = "captcha";
        let v = !1;
        ((t, e) => {
          const n =
            ((g = "f06e6c50-85a8-45c8-87d0-21a2b65856fe"),
            "../cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.4.0.iife.js",
            (T = {
              infoText: "Protected by hCaptcha",
              privacyText: "Privacy",
              termsText: "Terms",
            }),
            (t, e, n) => {
              const o = l[_][y],
                c = o.bindForm;
              if (c) return c(t, g, e, T).then(n);
              o.q.push([[t, g, e, T], n]),
                v ||
                  (h.body.append(
                    Object.assign(h.createElement("script"), {
                      id: "captcha-provider",
                      async: !0,
                      src: "https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.4.0.iife.js",
                    })
                  ),
                  (v = !0));
            });
          var g, T;
          (l[_] = l[_] || {}),
            (l[_][y] = l[_][y] || {}),
            (l[_][y].q = []),
            (l[_][E] = l[_][E] || {}),
            (l[_][E].protect = function (t, e) {
              n(t, void 0, e), p(t);
            }),
            Object.freeze(l[_][E]),
            (function (t, e, n, l, h, _) {
              const [y, E, v, g] = (function (t, e, n) {
                  const s = e ? o : [],
                    a = t ? c : [],
                    i = [...s, ...a],
                    u = [...o],
                    m = r(i),
                    f = r(s),
                    d = n && r(i.filter(([t, e]) => n.includes(e))),
                    p = r(u),
                    l = (t) => () =>
                      t
                        ? [...document.querySelectorAll(t)].map((t) => t.form)
                        : [];
                  return [l(m), l(f), l(d), l(p)];
                })(l, h, _),
                T = (t) => {
                  const e = t.target;
                  return e instanceof HTMLFormElement ? e : e && e.form;
                },
                S = (t) => y().includes(t);
              t.addEventListener("submit", (t) => {
                const e = T(t);
                if (!e) return;
                const n =
                    S(e) &&
                    !e.dataset.hcaptchaBound &&
                    !e.dataset.recaptchaBound,
                  o = m(e),
                  c = g().includes(e) && (!o || !o.value);
                (n || c) && t.preventDefault(),
                  c &&
                    !n &&
                    ((function (t) {
                      try {
                        if (!u()) return;
                        !(function (t) {
                          const e = u();
                          if (!e) return;
                          const n = m(t);
                          if (!n) return;
                          const o = n.value;
                          o && e.removeItem(o);
                        })(t);
                        const e = Array.from(
                          Array(32),
                          () => Math.random().toString(36)[2]
                        ).join("");
                        !(function (t, e) {
                          m(t) ||
                            t.append(
                              Object.assign(document.createElement("input"), {
                                type: "hidden",
                                name: a,
                              })
                            ),
                            (t.elements[a].value = e);
                        })(t, e),
                          (function (t, e) {
                            const n = u();
                            if (!n) return;
                            const o = [
                                ...t.querySelectorAll('input[type="password"]'),
                              ].map(({ name: t }) => t),
                              c = [...i, ...o],
                              r = {};
                            for (const [s, a] of new FormData(t).entries())
                              c.includes(s) || (r[s] = a);
                            n.setItem(e, JSON.stringify(r));
                          })(t, e);
                      } catch (e) {
                        console.error("failed to persist form", e);
                      }
                    })(e),
                    e.submit());
              });
              const w = (t, e) => {
                t &&
                  !t.dataset[d] &&
                  (n(
                    t,
                    e.some((e) => e === t)
                  ),
                  p(t));
              };
              for (const o of ["focusin", "change"])
                t.addEventListener(o, (t) => {
                  const e = T(t);
                  S(e) && w(e, E());
                });
              const A = e.get("form_key"),
                b = e.get(f),
                I = A && b;
              t.addEventListener("DOMContentLoaded", () => {
                const t = E();
                if (I) for (const e of t) e.elements[f].value === b && s(e, A);
                [
                  ...new Set([
                    ...v(),
                    ...y().filter((t) => "true" === t.dataset.shopifyCaptcha),
                  ]),
                ].forEach((e) => w(e, t));
              });
            })(h, new URLSearchParams(l.location.search), n, !0, !0, [
              "guest_login",
            ]);
        })();
      })();
    </script>
    <script
      integrity="sha256-EGCDRYTvIEOXsReXgqGwkAR+5Dl8tickSrieA/ZcQwc="
      data-source-attribution="shopify.loadfeatures"
      defer="defer"
      src="{{ asset('SpiceWebTemplate/cdn/shopifycloud/shopify/assets/storefront/load_feature-1060834584ef204397b1179782a1b090047ee4397cb627244ab89e03f65c4307.js') }}"
      crossorigin="anonymous"
    ></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
      var Shopify = Shopify || {};
      Shopify.PaymentButton = Shopify.PaymentButton || {
        isStorefrontPortableWallets: !0,
        init: function () {
          window.Shopify.PaymentButton.init = function () {};
          var t = document.createElement("script");
          (t.src =
            "{{ asset('SpiceWebTemplate/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js') }}"),
            (t.type = "module"),
            document.head.appendChild(t);
        },
      };
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
      function portableWalletsHideBuyerConsent(e) {
        var t = document.getElementById("shopify-buyer-consent"),
          n = document.getElementById("shopify-subscription-policy-button");
        t &&
          n &&
          (t.classList.add("hidden"),
          t.setAttribute("aria-hidden", "true"),
          n.removeEventListener("click", e));
      }
      function portableWalletsShowBuyerConsent(e) {
        var t = document.getElementById("shopify-buyer-consent"),
          n = document.getElementById("shopify-subscription-policy-button");
        t &&
          n &&
          (t.classList.remove("hidden"),
          t.removeAttribute("aria-hidden"),
          n.addEventListener("click", e));
      }
      window.Shopify?.PaymentButton &&
        ((window.Shopify.PaymentButton.hideBuyerConsent =
          portableWalletsHideBuyerConsent),
        (window.Shopify.PaymentButton.showBuyerConsent =
          portableWalletsShowBuyerConsent));
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">
      document.addEventListener("DOMContentLoaded", function () {
        function t() {
          return document.querySelector(
            "shopify-accelerated-checkout-cart, shopify-accelerated-checkout"
          );
        }
        if (t()) Shopify.PaymentButton.init();
        else {
          new MutationObserver(function (e, n) {
            t() && (Shopify.PaymentButton.init(), n.disconnect());
          }).observe(document.body, { childList: !0, subtree: !0 });
        }
      });
    </script>
    <script
      id="sections-script"
      data-sections="index-slideshow-full-width,index-lookbook,index-blog-carousel,header,footer"
      defer="defer"
      src="{{ asset('SpiceWebTemplate/cdn/shop/t/2/compiled_assets/scripts7f11.js') }}"
    ></script>
    <script>
      window.performance &&
        window.performance.mark &&
        window.performance.mark("shopify.content_for_header.end");
    </script>
    </html>
