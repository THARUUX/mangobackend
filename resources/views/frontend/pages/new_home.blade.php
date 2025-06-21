@extends('frontend.new_layout')

@section('title', 'Home | Happy Mango Tours')
@section('description', 'Unforgettable journeys, breathtaking destinations, and personalized experiences await you at Happy Mango Tours!')
@section('keywords', 'Happy Mango Tours, Sri Lanka tours, travel agency, adventure tours, beach tours, cultural tours')

@section('content')
    <section class="w-full h-screen flex sm:gap-10 justify-center items-center flex-col" style="background-image: url({{ asset('new_frontend/Assets/mainbg.png') }}); background-size: cover; background-position: center;">
        <div class="text-3xl sm:text-6xl font-sec">Explore the World With</div>
        <div class="relative flex flex-col items-center gap-10 sm:gap-20">
            <div class="text-6xl text-center sm:text-9xl font-black font-pri">Happy Mango Tours!</div>
            <div class="w-1/3 top-28 sm:top-24 absolute"><img src="{{ asset('new_frontend/Assets/Search Bar Container.png') }}" class="w-full" alt=""></div>
            <div class="text-md sm:text-2xl w-4/5 sm:w-2/3 text-center">Unforgettable journeys, breathtaking destinations, and personalized experiences await you!</div>
        </div>
    </section>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">

        <!-- Header -->

        <section class="w-full bg-white text-black pb-40" id="1">
            <div class="w-full flex pt-28 pb-10 flex-col justify-center">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri ">Adventures Travels</div>
            </div>

            <div class="w-full flex-col sm:flex-row flex justify-center items-center gap-10">
                <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                    <div class="sm:p-10 px-10 py-5">
                        <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                            <img src="{{ asset('new_frontend/Assets/av1.png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Beach & Island</div>
                    <div class="w-full text-center px-5 sm:px-0 ">Relax on Sri Lanka's golden beaches and explore breathtaking tropical islands.</div>
                </div>
                <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                    <div class="sm:p-10 px-10 py-5">
                        <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                            <img src="{{ asset('new_frontend/Assets/img(3).png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Adventure & Wildlife</div>
                    <div class="w-full text-center px-5 sm:px-0 ">Experience thrilling safaris, jungle treks, and adrenaline-filled adventures.</div>
                </div>
                <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                    <div class="sm:p-10 px-10 py-5">
                        <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                            <img src="{{ asset('new_frontend/Assets/img(4).png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Cultural & Heritage</div>
                    <div class="w-full text-center px-5 sm:px-0 ">Discover ancient temples, historic cities, and Sri Lanka's rich traditions.</div>
                </div>
                <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                    <div class="sm:p-10 px-10 py-5">
                        <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                            <img src="{{ asset('new_frontend/Assets/img(5).png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Ayurvedic & Spa</div>
                    <div class="w-full text-center px-5 sm:px-0 ">Rejuvenate with traditional healing treatments and luxurious spa experiences.</div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="w-full bg-[#02515A] flex flex-col sm:flex-row" id="why-choose-us">
            <div class="w-full sm:w-1/2 text-white py-20 px-10 sm:px-20">
                <div class="w-full flex flex-col gap-10">
                    <div class="text-xl sm:text-3xl font-sec">Unforgettable Journeys</div>
                    <div class="text-4xl sm:text-6xl font-extrabold font-pri">Why Choose Us?</div>
                    <div class="my-5 sm:my-10 flex flex-col gap-5 sm:gap-10">
                        <div class="flex sm:flex-row flex-col gap-4 sm:gap-10 py-5 px-3 border border-white/0 hover:border-white/25">
                            <div class="">
                                <div class="w-[112px] h-[112px] bg-[#FF9933] rounded-full flex justify-center items-center">
                                    <img class="w-auto " src="{{ asset('new_frontend/Assets/guide.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-xl sm:text-3xl font-black">Local & Experienced Guides</div>
                                <div class="text-sm sm:text-md">Knowledgeable guides to ensure an immersive and hassle-free journey.</div>
                            </div>
                        </div>
                        <div class="flex sm:flex-row flex-col gap-4 sm:gap-10 py-5 px-3 border border-white/0 hover:border-white/25">
                            <div class="">
                                <div class="w-[112px] h-[112px] bg-[#FF9933] rounded-full flex justify-center items-center">
                                    <img class="w-auto " src="{{ asset('new_frontend/Assets/tags.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-xl sm:text-3xl font-black">Flexible & Affordable Pricing</div>
                                <div class="text-sm sm:text-md">Customizable packages to suit every budget and preference.</div>
                            </div>
                        </div>
                        <div class="flex sm:flex-row flex-col gap-4 sm:gap-10 py-5 px-3 border border-white/0 hover:border-white/25">
                            <div class="">
                                <div class="w-[112px] h-[112px] bg-[#FF9933] rounded-full flex justify-center items-center">
                                    <img class="w-auto " src="{{ asset('new_frontend/Assets/user-headset.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-xl sm:text-3xl font-black"> 24/7 Customer Support</div>
                                <div class="text-sm sm:text-md">Dedicated assistance whenever you need it, day or night.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="w-full flex items-end h-[871px]" style="background-image: url('{{ asset('new_frontend/Assets/img(6).png') }}'); background-size: cover; background-position: center;">
                    <div class="bg-[#FF9933] hover:bg-[#FFBB55] cursor-pointer duration-300 py-9 px-12 text-xl sm:text-2xl tracking-wider">MORE DETAILS</div>
                </div>
            </div>
        </section>

        <!-- Your Dream Vacation Section -->
        <section class="w-full bg-[#02515A]" id="dream-vacation">
            <div class="py-20 flex sm:flex-row flex-col">
                <div class="w-[278px] h-[754px] hidden sm:flex">
                    <img src="{{ asset('new_frontend/Assets/2.png') }}" class="w-full h-full object-fill" alt="">
                </div>
                <div class="w-full sm:w-1/2 flex grow">
                    <div class="w-full">
                        <img src="{{ asset('new_frontend/Assets/1.png') }}" class="w-full" alt="">
                    </div>
                </div>
                <div class="w-full sm:w-1/2 py-10 sm:py-20 px-10 flex flex-col gap-5 sm:gap-10">
                    <div class="w-full text-4xl sm:text-6xl font-pri text-white">Your Dream Vacation, Perfectly Planned!</div>
                    <div class="text-sm sm:text-xl leading-10 text-white">
                        Happy Mango Tours, we specialize in crafting unforgettable travel experiences tailored just for you. Whether you're looking for a relaxing beach escape, an action-packed adventure, or a deep dive into rich cultural heritage, we have the perfect tour to match your desires. <br><br> With expertly curated packages, experienced local guides, and personalized services, we ensure every journey is seamless, exciting, and filled with incredible memories. Let us take you on an extraordinary adventure—wherever your heart desires!
                    </div>
                    <div class="">
                        <button class="border hover:scale-105 duration-300 py-2 px-5 cursor-pointer font-pri text-white">LEARN MORE ABOUT</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tailor-Made Tours Section -->
        <section class="sm:block w-full bg-white text-black px-5 sm:px-20 pb-10 sm:pb-40" id="tailor-made-tours">
            <div class="w-full flex pt-28 pb-10 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri ">Tailor-Made Tours</div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri ">Customize your dream vacation! Our tailor-made tours let you design your perfect itinerary, choosing destinations, activities, and experiences that match your interests and travel style.</div>
            </div>

            <div class="swiper-container overflow-hidden tailor-made-tours-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[306px]" bis_skin_checked="1"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>FAMILY TRIPS ON MOUNTAIN</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $100/ </span> <span>5DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[306px]" bis_skin_checked="1"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>BEACH HOLIDAY PACKAGE</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $150/ </span> <span>7DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[306px]" bis_skin_checked="1"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>CULTURAL HERITAGE TOUR</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $120/ </span> <span>6DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more tour slides as needed -->
                </div>
                <!-- Add pagination and navigation controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            {{-- <div class="justify-center flex py-15 mt-10">
                <a href="{{ url('/service') }}">
                    <button class="py-3 px-6 rounded-full text-white font-[600] bg-[#02515A]">EXPLORE MORE TOURS</button>
                </a>
            </div> --}}
        </section>

        <!-- Round Tours Section -->
        <section class="sm:block w-full bg-white text-black px-5 sm:px-20 pb-10 sm:pb-40" id="round-tours">
            <div class="w-full flex sm:pt-28 pb-10 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                <div class="text-3xl sm:text-5xl text-center font-black flex justify-center font-pri ">Round Tours - Explore Sri Lanka in a seamless journey! </div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Discover Sri Lanka's most breathtaking destinations with our expertly curated round tours cover the island's top attractions, offering a perfect blend of adventure, culture, and relaxation.</div>
            </div>

            <div class="swiper-container overflow-hidden round-tours-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">ROUND TOURS</div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>ESSENTIAL SRI LANKA</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $899/ </span> <span>7DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">ROUND TOURS</div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>COMPLETE ISLAND EXPLORER</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $1,499/ </span> <span>10DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-full h-[500px] sm:h-[650px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('{{ asset('new_frontend/Assets/img(7).png') }}');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">ROUND TOURS</div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                                <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                        <g transform="translate(-3 14.045) rotate(-90)">
                                            <g transform="translate(6 3)">
                                                <path d="M4.022,0a.525.525,0,0,1,.525.525V6.26H7.52a.524.524,0,0,1,.443.8l-3.5,5.551a.524.524,0,0,1-.888,0L.081,7.063a.524.524,0,0,1,.444-.8H3.5V.525A.525.525,0,0,1,4.022,0ZM6.569,7.309H1.475l2.547,4.042Z" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-5 sm:p-10 font-semibold w-full text-white z-10 group-hover:bg-[#ff9933] duration-300 text-sm sm:text-base">
                                <div>LUXURY SRI LANKA</div>
                                <div><span class="text-xl sm:text-3xl">PRICE $1,899/ </span> <span>12DAYS TRIPS</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more tour slides as needed -->
                </div>
                <!-- Add pagination and navigation controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="justify-center flex py-15 mt-10">
                <a href="{{ url('/service') }}">
                    <button class="py-3 px-6 hover:scale-105 duration-300 rounded-full text-white font-[600] bg-[#ff9933]">EXPLORE MORE TOURS</button>
                </a>
            </div>
        </section>

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

        <!-- Get in Touch Section -->
        <section class="bg-white flex sm:flex-row flex-col w-full" id="get-in-touch">
            <div class="w-full sm:w-3/8 bg-black flex gap-20 flex-col py-20 px-10 sm:px-20">
                <div class="text-3xl sm:text-5xl font-pri font-black text-wrap text-white">Get in Touch With Us</div>
                <div class="flex flex-col gap-10 text-sm sm:text-md text-white">
                    <div class="flex gap-10 items-center">
                        <img src="{{ asset('new_frontend/Assets/Icon Container.png') }}" class="w-[50px] h-[50px]" alt="">
                        <div>No 38/4 Moragolla Imbulgasdeniya KegalleSri Lanka P.O. Box 71000</div>
                    </div>
                    <div class="flex gap-10 items-center">
                        <img src="{{ asset('new_frontend/Assets/Icon Container2.png') }}" class="w-[50px] h-[50px]" alt="">
                        <div>0094777007707</div>
                    </div>
                    <div class="flex gap-10 items-center">
                        <img src="{{ asset('new_frontend/Assets/Icon Container3.png') }}" class="w-[50px] h-[auto]" alt="">
                        <div>info@happymangotours.com</div>
                    </div>
                    <div class="flex gap-10 items-center">
                        <img class="hover:scale-105 duration-300" src="{{ asset('new_frontend/Assets/Icon Container(1).png') }}" class="w-[50px] h-[50px]" alt="">
                        <img class="hover:scale-105 duration-300" src="{{ asset('new_frontend/Assets/Icon Container(2).png') }}" class="w-[50px] h-[50px]" alt="">
                        <img class="hover:scale-105 duration-300" src="{{ asset('new_frontend/Assets/Icon Container(3).png') }}" class="w-[50px] h-[50px]" alt="">
                        <img class="hover:scale-105 duration-300" src="{{ asset('new_frontend/Assets/Icon Container(4).png') }}" class="w-[50px] h-[50px]" alt="">
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-5/8 text-black px-10 py-20 sm:px-20 flex gap-5 flex-col">
                <div class="text-xl sm:text-3xl font-sec">Submit Enquiry</div>
                <div class="text-3xl sm:text-5xl font-black font-pri">How did you hear about us?</div>
                <form action="#" method="POST" class="flex flex-wrap">
                    <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                        <input type="text" id="inquiry_type" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="inquiry_type" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Inquiry types*</label>
                    </div>
                    <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                        <input type="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="email" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your Email*</label>
                    </div>
                    <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                        <input type="text" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="name" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your Name*</label>
                    </div>
                    <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                        <input type="text" id="country" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="country" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Country*</label>
                    </div>
                    <div class="relative z-0 w-full p-5">
                        <textarea id="message" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " rows="4"></textarea>
                        <label for="message" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message*</label>
                    </div>
                    <div class="w-full sm:py-10 flex justify-center">
                        <button type="submit" class="bg-[#ff9933] py-2 rounded-full px-8 cursor-pointer hover:bg-[#ffab57] text-white text-sm">SUBMIT</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="pb-4 bg-white" id="gallery">
            <div class="w-full flex pt-10 pb-5 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Capture the Memories</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri">Gallery</div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Explore the beauty of Sri Lanka through our travelers' experiences</div>
            </div>

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

            <div class="justify-center flex py-6">
                <a href="{{ url('/gallery') }}">
                    <button class="py-3 px-6 rounded-full text-white font-[600] bg-[#02515A]">EXPLORE FULL GALLERY</button>
                </a>
            </div>
        </section>
    </div>

@endsection

@section('additional_css')
<style>
    /* Swiper navigation styling */
    .swiper-button-next,
    .swiper-button-prev {
        color: #ff9933;
        background: rgba(255, 255, 255, 0.7);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        --swiper-navigation-size: 20px;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: rgba(255, 255, 255, 0.9);
    }

    .swiper-pagination-bullet-active {
        background: #ff9933;
    }

    /* Fixes for swiper container */
    .swiper-container {
        padding-bottom: 50px;  /* Space for pagination bullets */
        padding-left: 10px;
        padding-right: 10px;
    }

    .swiper-button-next {
        right: 10px;
    }

    .swiper-button-prev {
        left: 10px;
    }
</style>
@endsection

@section('additional_js')
<script>
    // Swiper initialization
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Tailor-Made Tours Swiper
        const tailorMadeTourSwiper = new Swiper('.tailor-made-tours-swiper', {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: ".tailor-made-tours-swiper .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".tailor-made-tours-swiper .swiper-button-next",
                prevEl: ".tailor-made-tours-swiper .swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Initialize Round Tours Swiper
        const roundToursSwiper = new Swiper('.round-tours-swiper', {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: ".round-tours-swiper .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".round-tours-swiper .swiper-button-next",
                prevEl: ".round-tours-swiper .swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Initialize Testimonials Swiper
        const testimonialsSwiper = new Swiper('.testimonials-swiper', {
            loop: true,
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".testimonials-swiper .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // FAQ Toggles
        const faqButtons = document.querySelectorAll('#faq button');
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');

                // Toggle the icon (rotate the SVG for open/close state)
                const icon = button.querySelector('svg');
                if (content.classList.contains('hidden')) {
                    icon.classList.remove('rotate-180');
                } else {
                    icon.classList.add('rotate-180');
                }
            });
        });
    });
</script>
@endsection
