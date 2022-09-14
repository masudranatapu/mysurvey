<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Survey Success - {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <h4 class="text-2xl md:text-4xl font-bold text-inherit mb-4">{{$setting->success_title}}</h4>
                    <p class="text-sm md:text-base">{{$setting->success_content}}</p>
                </div>
            </div>
            <div class="py-10">
                <h3 style="padding: 20px">{{$setting->success_file_content}}</h3>
                <div class="container">
                    <form action="{{route('send-file')}}" method="post" enctype="multipart/form-data" class="flex justify-center gap-4 mb-7">
                        @csrf
                        <label class="file-input max-w-[400px] w-full flex border rounded overflow-hidden focus:outline-2 focus:outline-secondary ring-primary/20 cursor-pointer">
                            <input type="file" id="file" name="image" aria-label="File browser example" class="hidden">
                            <span class="file-name py-3 px-6 flex-grow text-left">Choose A file</span>
                            <span class="file-handle-button bg-secondary text-gray-100 border-l py-3 px-6">Browse</span>
                        </label>
                        <button class="file-handle-button bg-secondary text-gray-100 py-2 px-6">Submit</button>
                    </form>
                    <h4 class="text-2xl font-bold mb-7">The 7 Steps to Going Solar</h4>
                    <p class="max-w-[800px] mx-auto mb-10">{{$setting->success_botton_content}}</p>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 lg:gap-10">
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/1.png" alt="">
                            </div>
                            <h5 class="text-sm">SITE SURVEY</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">1</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/2.png" alt="">
                            </div>
                            <h5 class="text-sm">SYSTEM DESIGN</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">2</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/3.png" alt="">
                            </div>
                            <h5 class="text-sm">PERMITTING</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">3</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/4.png" alt="">
                            </div>
                            <h5 class="text-sm">INSTALLATION</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">4</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/5.png" alt="">
                            </div>
                            <h5 class="text-sm">INSPECTIONS</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">5</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/6.png" alt="">
                            </div>
                            <h5 class="text-sm">UTILITY HOOKUP</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">6</div>
                        </div>
                        <div class="text-center space-y-4">
                            <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto">
                                <img src="{{asset('frontend/dist/img/')}}/icons/7.png" alt="">
                            </div>
                            <h5 class="text-sm">POWER ON</h5>
                            <div class="w-7 h-7 mx-auto rounded-full leading-none flex items-center justify-center border border-gray-700">7</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <button class="main-slider-prev button button--icon"><i class="far fa-long-arrow-up"></i></button>

        <!-- ALL JS -->
        <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
        <script defer src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script defer src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>