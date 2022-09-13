<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->name }} - {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
        <!-- Place favicon.ico in the root directory -->
        <!-- fonts (Playfair Display, Poppins) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/tailwind.css')}}">
    </head>
    <body>
        @php
            $setting = App\Models\Setting::latest()->first();
        @endphp
        <main class="text-center">
            <div class="container">
                <a href="{{route('home')}}">
                    <div class="py-5">
                        <svg data-test-id="logo" width="110" fill="#00b085" viewBox="0 0 150 28" xmlns="http://www.w3.org/2000/svg"><title>{{$setting->site_name}}</title><path d="M15.5 13.8c-3.7-1-4.8-1.7-4.8-3.2 0-1 .9-2 3.2-2a7 7 0 0 1 5 1.8c.1.2.3 0 .4 0l2.1-2.2c.1 0 0-.2 0-.4C19.8 5.7 16.8 5 14 5c-4.3 0-7.6 2-7.6 5.7 0 3.8 2.6 5.5 7.4 6.9 2.7.8 4.2 1.4 4.2 3 0 1.4-1.7 2.2-3.8 2.2-2.3 0-4.4-.4-6-2.2h-.5l-2.2 2.5a.4.4 0 0 0 0 .4c2 2.2 5.2 3 8.4 3 4.4 0 8.3-1.8 8.3-6 0-4-2.6-5.5-6.7-6.7m28-8.4H40a.4.4 0 0 0-.4.3V18c0 2.7-1 4.4-4.2 4.4-3.1 0-4.2-1.5-4.2-4.3V5.7c0-.1-.2-.3-.4-.3h-3.6a.4.4 0 0 0-.4.3v13.1c0 5 3.2 7.6 8.5 7.6s8.7-2.7 8.7-7.7v-13a.3.3 0 0 0-.3-.3m14-.3c-5.3 0-8.7 2.7-8.7 7.7v13a.3.3 0 0 0 .3.4h3.7a.4.4 0 0 0 .3-.3V13.4c0-2.7 1-4.4 4.3-4.4 3 0 4.2 1.5 4.2 4.3v12.5c0 .1 0 .4.3.4h3.6a.4.4 0 0 0 .4-.4v-13c0-5-3.2-7.7-8.5-7.7m46.3.3h-3.7a.4.4 0 0 0-.3.3V18c0 2.7-1 4.4-4.3 4.4-3 0-4.2-1.5-4.2-4.3V5.7c0-.1-.1-.3-.3-.3h-3.7a.4.4 0 0 0-.3.3v13.1c0 5 3.2 7.6 8.5 7.6 5.2 0 8.6-2.7 8.6-7.7v-13a.3.3 0 0 0-.3-.3m14-.3c-5.3 0-8.7 2.7-8.7 7.7v13a.3.3 0 0 0 .3.4h3.7a.4.4 0 0 0 .4-.3V13.4c0-2.7 1-4.4 4.2-4.4 3 0 4.2 1.5 4.2 4.3v12.5c0 .1.1.4.4.4h3.6a.4.4 0 0 0 .4-.4v-13c0-5-3.3-7.7-8.5-7.7m-35.2 0h-2C75.4 5 72 7.8 72 12.8v13a.3.3 0 0 0 .2.4H76a.3.3 0 0 0 .3-.3V13.4c0-2.7 1-4.4 4.2-4.4h2a.6.6 0 0 0 .7-.6V5.8a.6.6 0 0 0-.7-.7" fill="#269ccc"></path></svg>
                    </div>
                </a>
            </div>
            <div class="py-10 bg-[#01193F] text-gray-100">
                <div class="container">
                    <h4 class="text-2xl md:text-4xl font-bold text-inherit mb-4">{{$page->name}}</h4>
                    <p class="text-sm md:text-base">
                        {!! $page->details !!}
                    </p>
                </div>
            </div>
        </main>
        <button class="main-slider-prev button button--icon"><i class="far fa-long-arrow-up"></i></button>
        <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
        <script defer src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script defer src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>