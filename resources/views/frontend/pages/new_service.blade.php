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
            @include('frontend.components.tailor_made_intro', ['isActive' => true])

            <!-- All Tour Packages Section -->
            <div id="all-packages" class="w-full pt-10">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-8">Explore Our Tour Packages</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">
                    Discover the best of Sri Lanka through our carefully curated tour packages. Whether you're looking for adventure, relaxation, or cultural immersion, we have something for everyone.
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($tourPackages as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-60 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-{{ $tour->type == 'tailor-made' ? '[#ff9933]' : '[#02515A]' }} rounded-bl-xl text-white text-xs font-bold px-3 py-2">
                                    {{ $tour->type == 'tailor-made' ? 'TAILOR MADE TOUR' : 'ROUND TOUR' }}
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ \Illuminate\Support\Str::limit($tour->short_description, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-[#FF9933]">${{ $tour->price }}</span>
                                    <a href="{{ route('tours.detail', $tour->slug) }}" class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-10">
                            <p>No tour packages available at the moment. Please check back later.</p>
                        </div>
                    @endforelse
                </div>
                <div class="w-full flex justify-center mt-10">
                    <a href="{{ route('tours') }}" class="bg-[#ff9933] hover:bg-[#ffab58] duration-200 text-white font-bold py-2 px-8 rounded-full cursor-pointer">VIEW ALL TOUR PACKAGES</a>
                </div>
            </div>


            <div id="tailor-made" class="w-full pt-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Tailor Made Tour Cards -->
                    @forelse($tailorMadeTours as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-60 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-[#ff9933] rounded-bl-xl text-white text-xs font-bold px-3 py-2">TAILOR MADE TOUR</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ \Illuminate\Support\Str::limit($tour->short_description, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-[#FF9933]">${{ $tour->price }}</span>
                                    <a href="{{ route('tours.detail', $tour->slug) }}" class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-10">
                            <p>No tailor-made tours available at the moment. Please check back later.</p>
                        </div>
                    @endforelse
                </div>
                <div class="w-full flex justify-center mt-10">
                    <a href="{{ route('tours.tailor-made') }}" class="bg-[#ff9933] hover:bg-[#ffab58] duration-200 text-white font-bold py-2 px-8 rounded-full cursor-pointer">VIEW ALL TAILOR MADE TOURS</a>
                </div>
            </div>

            <div id="round-tours" class="w-full pt-20">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-10">Round Tours – Complete Sri Lankan Experience</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">Our carefully designed Round Tours offer comprehensive journeys covering Sri Lanka's highlights in a single trip. These ready-made itineraries combine the best destinations, attractions, and experiences at great value.</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($roundTours as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-60 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-[#02515A] rounded-bl-xl text-white text-xs font-bold px-3 py-2">ROUND TOUR</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ \Illuminate\Support\Str::limit($tour->short_description, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-[#FF9933]">${{ $tour->price }}</span>
                                    <a href="{{ route('tours.detail', $tour->slug) }}" class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-10">
                            <p>No round tours available at the moment. Please check back later.</p>
                        </div>
                    @endforelse
                </div>
                <div class="w-full flex justify-center mt-10">
                    <a href="{{ route('tours.round-tour') }}" class="bg-[#ff9933] hover:bg-[#ffab58] duration-200 text-white font-bold py-2 px-8 rounded-full cursor-pointer">VIEW ALL ROUND TOURS</a>
                </div>
            </div>

            <!-- Featured Tours Section -->
            <div id="featured-tours" class="w-full pt-20">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-10">Featured Tour Packages</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">Experience our most popular and highly-rated tour packages across Sri Lanka. These exclusive selections offer the best Sri Lankan experiences.</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($featuredTours as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-60 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-[#8A2BE2] rounded-bl-xl text-white text-xs font-bold px-3 py-2">FEATURED</div>
                                <div class="absolute top-0 left-0 bg-{{ $tour->type == 'tailor-made' ? '[#ff9933]' : '[#02515A]' }} rounded-br-xl text-white text-xs font-bold px-3 py-2">
                                    {{ $tour->type == 'tailor-made' ? 'TAILOR MADE' : 'ROUND TOUR' }}
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ \Illuminate\Support\Str::limit($tour->short_description, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-[#FF9933]">${{ $tour->price }}</span>
                                    <a href="{{ route('tours.detail', $tour->slug) }}" class="bg-[#FF9933] text-white py-2 px-4 rounded-full hover:bg-[#e88929]">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-10">
                            <p>No featured tours available at the moment. Please check back later.</p>
                        </div>
                    @endforelse
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
