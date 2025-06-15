@extends('frontend.new_layout')

@section('title', 'About Us | Happy Mango Tours')
@section('description', 'Learn about Happy Mango Tours, your specialized travel partner in Sri Lanka offering tailor-made journeys and authentic local experiences.')
@section('keywords', 'Happy Mango Tours, about us, Sri Lanka travel agency, local tours, authentic experiences, travel specialists')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-7xl font-black font-pri">About</div>
        <div class="text-2xl font-black font-pri">HOME - ABOUT US</div>
    </div>
    <div class="max-w-[2500px] w-full bg-white grow">
        <!-- Hero Section -->
        <div class="w-full flex flex-col sm:flex-row bg-white text-black">
            <div class="sm:w-1/2 h-auto p-10 sm:p-20 flex flex-col justify-center gap-5">
                <div class="font-sec text-xl sm:text-2xl text-[#02515A]">Welcome to Happy Mango Tours</div>
                <div class="text-4xl sm:text-7xl font-pri font-black sm:w-2/3">We Make Your Travel Adventures</div>
                <div class="text-gray-600">At Happy Mango Tours, we believe travel is more than just visiting places — it's about creating unforgettable memories. Based in Sri Lanka, we specialize in tailor-made and round tours that showcase the island's best. With local expertise, personalized service, and a passion for adventure, we craft journeys that are unique, seamless, and full of authentic experiences.</div>
                <div class="text-gray-600 mt-5">We are more than travel planners — we are storytellers who help you write your own Sri Lankan adventure. Our experienced local guides, handpicked accommodations, and thoughtfully curated activities guarantee that your time with us will be meaningful, authentic, and full of special moments.</div>
                <div class="w-full py-5">
                    <a href="{{ url('/contact') }}">
                        <button class="bg-[#ff9933] py-3 px-8 rounded-full cursor-pointer hover:bg-[#ffab57] text-white text-sm font-semibold transition duration-300 transform hover:scale-105">Start Your Journey</button>
                    </a>
                </div>
            </div>
            <div class="sm:w-1/2 h-auto bg-white">
                <div class="sm:pt-20 sm:py-16">Join us and discover the real Sri Lanka — its vibrant culture, its breathtaking landscapes, its warm-hearted people — with a travel experience made just for you. Your journey begins here, with Happy Mango Tours, where every trip is a happy memory in the making.</div>
                <img src="{{ asset('new_frontend/Assets/img(17).png') }}" class="w-full h-auto rounded-lg shadow-lg" alt="Sri Lanka Experience">
            </div>
        </div>

        <!-- Testimonials Section -->
        @include('frontend.components.testimonials')

        <!-- FAQ Section -->
        <section class="w-full flex flex-col sm:flex-row bg-white" id="faq">
            <div class="flex w-full sm:w-1/2 p-10 sm:p-20">
                <div class="flex flex-col gap-10 ">
                    <div class="text-black flex gap-3 sm:gap-8 flex-col">
                        <div class="font-sec text-xl sm:text-3xl">Enjoy with your love</div>
                        <div class="font-pri text-4xl sm:text-6xl font-[1000]">FAQ</div>
                    </div>
                    <div class="text-black">
                        Got questions? We've got answers! Here are some common queries to help you plan your perfect trip with Happy Mango Tours.
                    </div>
                    <div class="w-full">
                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg">
                                <button class="flex justify-between w-full p-4 text-left font-medium text-gray-900 focus:outline-none">
                                    <span>What types of tours do you offer?</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="p-4 border-t border-gray-200 hidden">
                                    <p class="text-gray-700">We offer a variety of tour types including tailor-made private tours, round tours covering multiple destinations, adventure tours, cultural & heritage tours, wildlife safaris, beach getaways, and special interest tours such as photography, culinary, or Ayurvedic experiences.</p>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg">
                                <button class="flex justify-between w-full p-4 text-left font-medium text-gray-900 focus:outline-none">
                                    <span>Can I customize my travel itinerary?</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="p-4 border-t border-gray-200 hidden">
                                    <p class="text-gray-700">Absolutely! Our tailor-made tours are specifically designed to be customized according to your preferences, interests, timeframe, and budget. Just let us know what you're looking for, and our travel experts will create the perfect itinerary for you.</p>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg">
                                <button class="flex justify-between w-full p-4 text-left font-medium text-gray-900 focus:outline-none">
                                    <span>Do you provide transportation and accommodation?</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="p-4 border-t border-gray-200 hidden">
                                    <p class="text-gray-700">Yes, our tour packages include private transportation with experienced drivers and carefully selected accommodations ranging from boutique hotels to luxury resorts based on your preferences and budget. We handle all the logistics so you can simply enjoy your journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <img src="{{ asset('new_frontend/Assets/img(8).png') }}" class="w-full h-full object-cover" alt="">
            </div>
        </section>

        <!-- Additional Swiper Initialization -->
        @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const testimonialsSwiper = new Swiper(".testimonials-swiper", {
                    loop: true,
                    centeredSlides: true,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1.2,
                        },
                        640: {
                            slidesPerView: 1.5,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        }
                    }
                });
            });
        </script>
        @endpush

        @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            .testimonials-swiper .swiper-slide {
                display: flex !important;
                padding: 1rem;
            }

            .testimonials-swiper .swiper-button-next,
            .testimonials-swiper .swiper-button-prev {
                background-color: white;
                padding: 2rem;
                border-radius: 50%;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .testimonials-swiper .swiper-button-next:hover,
            .testimonials-swiper .swiper-button-prev:hover {
                transform: scale(1.1);
            }

            .testimonials-swiper .swiper-button-disabled {
                opacity: 0.5;
            }
        </style>
        @endpush

        <!-- Gallery Section -->
        <section class="pb-4 bg-white" id="gallery">
            {{-- <div class="w-full flex pt-10 pb-5 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Capture the Memories</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri">Gallery</div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Explore the beauty of Sri Lanka through our travelers' experiences</div>
            </div> --}}

            <div class="w-full flex-wrap sm:flex-nowrap flex">
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(10).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Beach view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(11).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Mountain view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(12).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Temple view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(13).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Wildlife view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(14).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Cultural view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
