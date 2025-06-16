@extends('frontend.new_layout')

@section('title', 'Tour Packages | Happy Mango Tours')
@section('description', 'Explore our Sri Lanka tour packages including tailor-made and round tours designed for an unforgettable journey.')
@section('keywords', 'Happy Mango Tours, Sri Lanka tours, tailor-made tours, round tours, travel packages')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-5xl sm:text-7xl font-black font-pri">Tour Packages</div>
        <div class="text-xl sm:text-2xl font-black font-pri">HOME - TOURS</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="py-20 w-full px-5 sm:px-10 flex flex-col bg-white text-black items-center justify-center gap-5">
            <div class="w-full justify-center flex gap-5 text-xs sm:text-md">
                <a href="{{ route('tours.tailor-made') }}" class="bg-[#FF9933] text-white py-2 px-8 rounded-full font-bold duration-300 text-center">TAILOR MADE TOURS</a>
                <span class="w-1 h-auto bg-black"></span>
                <a href="{{ route('tours.round-tour') }}" class="hover:bg-[#FF9933] hover:text-white py-2 px-8 rounded-full font-bold duration-300 text-center">ROUND TOURS</a>
            </div>

            <!-- Tailor Made Tours Section -->
            <section class="w-full py-10">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-8">Tailor-Made Tours – Your Journey, Your Way!</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">
                    At Happy Mango Tours, we believe every traveler is unique. Our Tailor-Made Tours allow you to design a fully customized itinerary based on your interests, budget, and travel style. Whether you seek cultural discoveries, wildlife adventures, scenic getaways, or relaxing beach stays, we'll craft the perfect journey just for you.
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($tailorMadeTours as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-64 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-[#ff9933] rounded-bl-xl text-white text-xs font-bold px-3 py-2">TAILOR MADE TOUR</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ $tour->short_description }}</p>
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

                @if(count($tailorMadeTours) > 9)
                    <div class="w-full flex justify-center py-10">
                        <a href="{{ route('tours.tailor-made') }}" class="bg-[#ff9933] hover:bg-[#ffab58] duration-200 text-white font-bold py-2 px-8 rounded-full cursor-pointer">LOAD MORE TOURS</a>
                    </div>
                @endif
            </section>

            <!-- Round Tours Section -->
            <section class="w-full py-10 mt-10">
                <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center mb-8">Round Tours – Complete Sri Lankan Experience</div>
                <div class="sm:w-3/4 mx-auto flex justify-center text-center font-pri text-sm sm:text-md mb-10">
                    Our carefully designed Round Tours offer comprehensive journeys covering Sri Lanka's highlights in a single trip. These ready-made itineraries combine the best destinations, attractions, and experiences at great value.
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($roundTours as $tour)
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $tour->image) }}" class="w-full h-64 object-cover" alt="{{ $tour->name }}">
                                <div class="absolute top-0 right-0 bg-[#02515A] rounded-bl-xl text-white text-xs font-bold px-3 py-2">ROUND TOUR</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $tour->name }}</h3>
                                <div class="flex items-center mb-3">
                                    <span class="text-yellow-500 mr-1">★★★★★</span>
                                    <span class="text-gray-600 text-sm">(24 reviews)</span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ $tour->short_description }}</p>
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

                @if(count($roundTours) > 9)
                    <div class="w-full flex justify-center py-10">
                        <a href="{{ route('tours.round-tour') }}" class="bg-[#ff9933] hover:bg-[#ffab58] duration-200 text-white font-bold py-2 px-8 rounded-full cursor-pointer">LOAD MORE TOURS</a>
                    </div>
                @endif
            </section>

            <!-- Why Choose Section -->
            <section class="w-full bg-white text-black mt-10">
                <div class="w-full flex pt-10 px-5 sm:px-0 sm:pt-28 pb-10 flex-col justify-center items-center gap-5">
                    <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                    <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri">Why Choose Our Tours?</div>
                    <div class="sm:w-3/4 flex justify-center sm:text-center font-pri">Whether you choose a tailor-made tour or join one of our carefully crafted round tours, we promise an authentic Sri Lankan experience filled with unforgettable memories. Our dedicated team ensures every detail is perfect, from handpicked accommodations to expert local guides who bring each destination to life.</div>
                </div>

                <div class="w-full flex flex-wrap px-5 sm:px-20 pb-20">
                    <div class="sm:w-1/3 w-full flex gap-10 sm:px-10 py-10 sm:py-20">
                        <img class="sm:w-auto" src="{{ asset('new_frontend/Assets/Group 23364.png') }}" alt="Personalized Experiences">
                        <div class="flex flex-col grow gap-5">
                            <div class="text-xl font-bold">Personalized Experiences</div>
                            <div>Journeys tailored to match your interests and preferences.</div>
                        </div>
                    </div>
                    <div class="sm:w-1/3 w-full flex gap-10 sm:px-10 py-10 sm:py-20">
                        <img class="sm:w-auto" src="{{ asset('new_frontend/Assets/Group 23364.png') }}" alt="Local Expert Guides">
                        <div class="flex flex-col grow gap-5">
                            <div class="text-xl font-bold">Local Expert Guides</div>
                            <div>Knowledgeable locals sharing authentic insights and stories.</div>
                        </div>
                    </div>
                    <div class="sm:w-1/3 w-full flex gap-10 sm:px-10 py-10 sm:py-20">
                        <img class="sm:w-auto" src="{{ asset('new_frontend/Assets/Group 23364.png') }}" alt="Quality Accommodations">
                        <div class="flex flex-col grow gap-5">
                            <div class="text-xl font-bold">Quality Accommodations</div>
                            <div>Carefully selected hotels that enhance your travel experience.</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
