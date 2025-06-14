@extends('frontend.new_layout')

@section('title', 'Tour Packages | Happy Mango Tours')
@section('description', 'Explore our customized Sri Lanka tour packages including tailor-made tours and round tours designed to showcase the best of the island.')
@section('keywords', 'Happy Mango Tours packages, Sri Lanka tours, tailor made tours, round tours, travel packages')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-5xl sm:text-7xl font-black font-pri">Tour Packages</div>
        <div class="text-2xl font-black font-pri">HOME - TOURS</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="py-20 w-full px-5 sm:px-10 flex flex-col bg-white text-black items-center justify-center gap-5">
            <div class="w-full justify-center flex gap-5 text-xs sm:text-md">
                <a href="#tailor-made" class="bg-[#FF9933] text-white py-2 px-8 rounded-full font-bold duration-300 text-center">TRAILOR MADE TOURS</a>
                <span class="w-1 h-auto bg-black "></span>
                <a href="#round-tours" class="hover:bg-[#FF9933] hover:text-white py-2 px-8 rounded-full font-bold duration-300 text-center">ROUND TOURS</a>
            </div>
            <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center">Tailor-Made Tours – Your Journey, Your Way!</div>
            <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">At Happy Mango Tours, we believe every traveler is unique. Our Tailor-Made Tours allow you to design a fully customized itinerary based on your interests, budget, and travel style. Whether you seek cultural discoveries, wildlife adventures, scenic getaways, or relaxing beach stays, we'll craft the perfect journey just for you.</div>



            <div id="tailor-made" class="w-full pt-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Tour Package Cards will be displayed here -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/Rectangle 10 copy 5.png') }}" class="w-full h-60 object-cover" alt="Cultural Heritage Tour">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Cultural Heritage Tour</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(24 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">Discover Sri Lanka's UNESCO World Heritage sites, ancient temples, and rich cultural traditions.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">From $899</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/img(18).png') }}" class="w-full h-60 object-cover" alt="Wildlife Safari Adventure">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Wildlife Safari Adventure</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(18 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">Experience thrilling safaris in Sri Lanka's national parks to see elephants, leopards, and exotic birds.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">From $1,099</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/img(24).png') }}" class="w-full h-60 object-cover" alt="Beach Getaway">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">Beach Getaway</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(31 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">Relax on Sri Lanka's golden beaches with pristine waters and luxury beachfront accommodations.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">From $799</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="round-tours" class="w-full pt-20">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-10">Round Tours – Complete Sri Lankan Experience</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">Our carefully designed Round Tours offer comprehensive journeys covering Sri Lanka's highlights in a single trip. These ready-made itineraries combine the best destinations, attractions, and experiences at great value.</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/img(3).png') }}" class="w-full h-60 object-cover" alt="7-Day Classic Tour">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">7-Day Classic Tour</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(42 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">Perfect introduction to Sri Lanka covering cultural triangle, hill country and southern beaches.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">$1,299</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/img(4).png') }}" class="w-full h-60 object-cover" alt="10-Day Complete Island Tour">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">10-Day Complete Island Tour</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(36 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">Comprehensive journey covering all major attractions and hidden gems of Sri Lanka.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">$1,899</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('new_frontend/Assets/av1.png') }}" class="w-full h-60 object-cover" alt="14-Day Ultimate Sri Lanka">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3">14-Day Ultimate Sri Lanka</h3>
                            <div class="flex items-center mb-3">
                                <span class="text-yellow-500 mr-1">★★★★★</span>
                                <span class="text-gray-600 text-sm">(29 reviews)</span>
                            </div>
                            <p class="text-gray-700 mb-4">The most complete Sri Lankan experience at a relaxed pace with premium accommodations.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#FF9933]">$2,499</span>
                                <button class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.components.why_choose_tour')

        </div>
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
