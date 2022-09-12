<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home - {{ config('app.name', 'Laravel') }}</title>
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
    @php
        $setting = App\Models\Setting::latest()->first();
    @endphp
    <body class="bg-[#203447]">
        <form action="{{route('survey')}}" method="POST">
            @csrf
            <div class="main-slider swiper h-[100vh] w-[100vw]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover" style="background-image: url({{asset($setting->image)}});">
                            <div class="absolute top-4 left-0 right-0">
                                <div class="container">
                                    <svg data-test-id="logo" width="110" fill="none" viewBox="0 0 150 28" xmlns="http://www.w3.org/2000/svg"><title>Sunrun</title><path d="M15.5 13.8c-3.7-1-4.8-1.7-4.8-3.2 0-1 .9-2 3.2-2a7 7 0 0 1 5 1.8c.1.2.3 0 .4 0l2.1-2.2c.1 0 0-.2 0-.4C19.8 5.7 16.8 5 14 5c-4.3 0-7.6 2-7.6 5.7 0 3.8 2.6 5.5 7.4 6.9 2.7.8 4.2 1.4 4.2 3 0 1.4-1.7 2.2-3.8 2.2-2.3 0-4.4-.4-6-2.2h-.5l-2.2 2.5a.4.4 0 0 0 0 .4c2 2.2 5.2 3 8.4 3 4.4 0 8.3-1.8 8.3-6 0-4-2.6-5.5-6.7-6.7m28-8.4H40a.4.4 0 0 0-.4.3V18c0 2.7-1 4.4-4.2 4.4-3.1 0-4.2-1.5-4.2-4.3V5.7c0-.1-.2-.3-.4-.3h-3.6a.4.4 0 0 0-.4.3v13.1c0 5 3.2 7.6 8.5 7.6s8.7-2.7 8.7-7.7v-13a.3.3 0 0 0-.3-.3m14-.3c-5.3 0-8.7 2.7-8.7 7.7v13a.3.3 0 0 0 .3.4h3.7a.4.4 0 0 0 .3-.3V13.4c0-2.7 1-4.4 4.3-4.4 3 0 4.2 1.5 4.2 4.3v12.5c0 .1 0 .4.3.4h3.6a.4.4 0 0 0 .4-.4v-13c0-5-3.2-7.7-8.5-7.7m46.3.3h-3.7a.4.4 0 0 0-.3.3V18c0 2.7-1 4.4-4.3 4.4-3 0-4.2-1.5-4.2-4.3V5.7c0-.1-.1-.3-.3-.3h-3.7a.4.4 0 0 0-.3.3v13.1c0 5 3.2 7.6 8.5 7.6 5.2 0 8.6-2.7 8.6-7.7v-13a.3.3 0 0 0-.3-.3m14-.3c-5.3 0-8.7 2.7-8.7 7.7v13a.3.3 0 0 0 .3.4h3.7a.4.4 0 0 0 .4-.3V13.4c0-2.7 1-4.4 4.2-4.4 3 0 4.2 1.5 4.2 4.3v12.5c0 .1.1.4.4.4h3.6a.4.4 0 0 0 .4-.4v-13c0-5-3.3-7.7-8.5-7.7m-35.2 0h-2C75.4 5 72 7.8 72 12.8v13a.3.3 0 0 0 .2.4H76a.3.3 0 0 0 .3-.3V13.4c0-2.7 1-4.4 4.2-4.4h2a.6.6 0 0 0 .7-.6V5.8a.6.6 0 0 0-.7-.7" fill="#FFF"></path></svg>
                                </div>
                            </div>
                            <div class="container">
                                <h1 class="text-xl md:text-3xl lg:text-5xl text-inherit font-bold mb-7">{{$setting->title}}</h1>
                                <p class="max-w-[600px] lg:text-lg mx-auto mb-10">{{$setting->content}}</p>
                                <a href="javascript:;" class="main-slider-next button button--primary">Calculate Your Savings</a>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">1</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-10">Do You Own Your Home?</h2>
                                <div class="flex items-center justify-center gap-10">
                                    <a href="javascript:;" class="text-center main-slider-next">
                                        <img src="{{asset('frontend/img/check.png')}}" alt="" class="w-[120px] mx-auto mb-4">
                                        Yes
                                    </a>
                                    <a href="https://solarpanels.sunrun.com/noho/" class="text-center">
                                        <img src="{{asset('frontend/img/times.png')}}" alt="" class="w-[120px] mx-auto mb-4">
                                        No
                                    </a>
                                </div>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">2</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-5">What Is Your ZIP Code?</h2>
                                <div class="mb-10 text-4xl">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <input type="text" name="zipcode" id="zipCodeVal" maxlength="5" class="bg-gray-100 text-gray-700 py-3 px-6 font-semibold text-lg rounded placeholder:text-gray-500 text-center focus:placeholder:opacity-0" placeholder="Enter Your ZIP Code"> <br>
                                <button type="button" id="checkZipCode" class="main-slider-next button button--primary mt-4 relative z-[2]" data->Next</button>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">3</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-10">What is Your Average Electric Bill?</h2>
                                <div id="electricity-bill-slider" class="max-w-[500px] w-[calc(100%-30px)] mx-auto mt-[120px]"></div>
                                <input type="hidden" name="electricityBill" class="text-primary-dark">
                                <button type="button" class="main-slider-next button button--primary mt-8 relative z-[2]">Next</button>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">4</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-5">Where Can We Send Your Free Solar Quote?</h2>
                                <div class="mb-10 text-4xl">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <input type="email" name="email" id="emailAddressVal" class="block w-full max-w-[360px] mx-auto bg-gray-100 text-gray-700 py-3 px-6 font-semibold text-lg rounded placeholder:text-gray-500 text-center focus:placeholder:opacity-0" placeholder="Enter Your Email Address">
                                <button type="button" id="emailCheckButton" class="main-slider-next button button--primary mt-4 relative z-[2]">Next</button>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">5</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-5">Who Is This Quote For?</h2>
                                <div class="max-w-[600px] lg:text-lg mx-auto mb-10">Please enter your first and last name</div>
                                <input type="text" name="firstname" id="checkFirstName" class="block w-full max-w-[360px] mx-auto bg-gray-100 text-gray-700 py-3 px-6 font-semibold text-lg rounded placeholder:text-gray-500 text-center focus:placeholder:opacity-0" placeholder="Enter First Name">
                                <input type="text" name="lastname" id="checkLastName" class="block w-full max-w-[360px] mx-auto bg-gray-100 text-gray-700 py-3 px-6 font-semibold text-lg rounded placeholder:text-gray-500 text-center focus:placeholder:opacity-0 mt-3" placeholder="Enter Last Name">
                                <button type="button" id="nameCheck" class="main-slider-next button button--primary mt-4 relative z-[2]">Next</button>
                            </div>
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="page-slide--inner text-gray-100 bg-cover">
                            <div class="container">
                                <div class="slide-number">6</div>
                                <h2 class="text-2xl md:text-4xl text-inherit font-bold mb-5">Phone Number</h2>
                                <div class="mb-10 text-4xl">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <input type="number" required name="phone" class="block w-full max-w-[360px] mx-auto bg-gray-100 text-gray-700 py-3 px-6 font-semibold text-lg rounded placeholder:text-gray-500 text-center focus:placeholder:opacity-0" placeholder="Enter Phone Number" maxlength="13">
                                <p class="text-xs mt-8 max-w-[600px] mx-auto text-gray-300">By clicking below, I authorize Sunrun to call me and send pre-recorded messages and text messages to me about Sunrun products and services at the telephone number I entered above, using an autodialer, even if I am on a national or state "Do Not Call" list. Message and data rates may apply. Maximum 10 texts per month. Consent for calls & texts is optional. You can opt out anytime. You also agree to our </p>
                                <button type="submit" class="button button--primary mt-4 relative z-[2]">Submit</button>
                            </div>
        
                            <div class="slide-footer">
                                ©<script>document.write(new Date().getFullYear())</script>2022 Sunrun. All rights reserved. <br>
        
                                <div class="flex items-center justify-center flex-wrap gap-y-2 text-center divide-x mt-2">
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">State Contractor License Information</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Privacy Policy</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Do Not Sell My Info</a>
                                    <a href="javascript:;" target="_blank" class="px-2 leading-none whitespace-nowrap">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <button class="main-slider-prev button button--icon"><i class="far fa-long-arrow-up"></i></button>
        <!-- ALL JS -->
        <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
        <script defer src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script defer src="{{asset('frontend/js/main.js')}}"></script>
        <script>
            $("#checkZipCode").click(function() {
                var  zipcode = $("#zipCodeVal").val();
                var  zipcodetotal = $("#zipCodeVal").val();
                if(!zipcode) {
                    alert('Please enter your zip code');
                }
                if(zipcodetotal.length < 5){
                    alert('Please enter your valid zip code');
                }

            });

            const email = document.querySelector('#emailAddressVal');
            const button = document.querySelector('#emailCheckButton');

            const validateEmail= (email) => {
                var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return regex.test(String(email).toLowerCase());
            };

            button.addEventListener('click',()=>{
                console.log(email.value);
                if(!email.value){
                    alert('Please enter your email address');
                }else if(validateEmail(email.value)){

                }else{
                    alert('Invalid Email');
                }
            });
            
            $("#nameCheck").click(function(){
                console.log('success');
                var  firstName = $("#checkFirstName").val();
                var  lastName = $("#checkLastName").val();
                
                if(!firstName && !lastName) {
                    alert('Please enter your first name \n Please enter last name');
                }else if(!firstName) {
                    alert('Please enter your first name');
                }else if(!lastName){
                    alert('Please enter your last name');
                }

            });
        </script>
    </body>
</html>