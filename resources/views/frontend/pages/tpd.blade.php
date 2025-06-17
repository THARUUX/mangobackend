@extends('frontend.new_layout')

@section('title', 'Experience the Best of Sri Lanka | Happy Mango Tours')
@section('description', 'Discover the heart and soul of Sri Lanka with our carefully crafted tour package that covers the island\'s most iconic destinations, culture, and natural wonders.')
@section('keywords', 'Happy Mango Tours, Sri Lanka tours, Sri Lanka packages, Kandy, Colombo, Matara, Galle')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-5xl sm:text-7xl font-black font-pri text-center">Experience the Best of Sri Lanka</div>
        <div class="text-xl sm:text-2xl font-black font-pri">HOME - TOURS</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="w-full p-10 bg-white">
            <div class="flex flex-col sm:flex-row gap-5 sm:gap-0">
                <div class="w-full sm:w-1/3 sm:p-20">
                    <div class="flex flex-col bg-[#FF9933]">
                        <div class="py-10 border-b flex px-15 gap-10 items-center text-xl font-bold hover:bg-[#02515A] duration-300">
                            <div>
                                <img src="{{ asset('new_frontend/Assets/marker (4).png') }}" alt="">
                            </div>
                            <div class="text-lg">ABOUT</div>
                        </div>
                        <div class="py-10 border-b flex px-15 gap-10 items-center text-xl font-bold hover:bg-[#02515A] duration-300">
                            <div>
                                <img src="{{ asset('new_frontend/Assets/marker (4).png') }}" alt="">
                            </div>
                            <div class="text-lg">INCLUDE AND EXCLUDE</div>
                        </div>
                        <div class="py-10 border-b flex px-15 gap-10 items-center text-xl font-bold hover:bg-[#02515A] duration-300">
                            <div>
                                <img src="{{ asset('new_frontend/Assets/marker (4).png') }}" alt="">
                            </div>
                            <div class="text-lg">ITINERARY</div>
                        </div>
                        <div class="py-10 border-b flex px-15 gap-10 items-center text-xl font-bold hover:bg-[#02515A] duration-300">
                            <div>
                                <img src="{{ asset('new_frontend/Assets/marker (4).png') }}" alt="">
                            </div>
                            <div class="text-lg">LOCATION</div>
                        </div>
                    </div>
                </div>
                <div class="sm:w-2/3 sm:p-20">
                    <img class="w-full" src="{{ asset('new_frontend/Assets/img(28).png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="w-full bg-white flex flex-col sm:flex-row text-black sm:p-20 pt-0">
            <div class="w-full sm:w-2/3 p-10 flex flex-col gap-8">
                <div class="w-full text-5xl sm:text-7xl font-black font-pri">
                    Experience the Best of Sri Lanka
                </div>
                <div class="text-xl sm:text-3xl"><span class="font-bold">PRICE $119 /</span> 5Days Trip</div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="flex flex-col sm:flex-row w-full gap-5 sm:gap-10">
                    <div class="flex text-lg sm:text-2xl gap-5">
                        <img src="{{ asset('new_frontend/Assets/calendar-clock.png') }}" alt="">
                        <div class="text-nowrap">5Days Trip</div>
                    </div>
                    <div class="flex text-lg sm:text-2xl gap-5">
                        <img src="{{ asset('new_frontend/Assets/footprint.png') }}" alt="">
                        <div class="text-nowrap">Daily Tour</div>
                    </div>
                    <div class="flex text-lg sm:text-2xl gap-5">
                        <img src="{{ asset('new_frontend/Assets/team-check-alt.png') }}" alt="">
                        <div class="text-nowrap">25 people</div>
                    </div>
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div>
                    Discover the heart and soul of Sri Lanka with our carefully crafted "Best of Sri Lanka Tour." From ancient cities and lush hill country to golden beaches and thrilling safaris, this journey brings together the island's most iconic destinations, culture, and natural wonders — all in one unforgettable adventure.
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-5xl font-black font-pri">About this tour</div>
                <div>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-3xl sm:text-5xl font-black font-pri">Included/Excluded</div>
                <div class="sm:w-4/5 flex">
                    <div class="w-1/2 flex-col flex gap-3 px-3 sm:px-0 text-sm sm:text-md">
                        <div>Meet and assistance at the Colombo Airport.</div>
                        <div>Specialized bilingual guide</div>
                        <div>All fuel, insurance and license fees of the vehicle.</div>
                        <div>Replacement of vehicle in case of breakdown.</div>
                    </div>
                    <div class="w-1/2 flex-col flex gap-3 px-3 sm:px-0 text-sm sm:text-md">
                        <div>Meet and assistance at the Colombo Airport.</div>
                        <div>Specialized bilingual guide</div>
                        <div>All fuel, insurance and license fees of the vehicle.</div>
                        <div>Replacement of vehicle in case of breakdown.</div>
                    </div>
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-3xl sm:text-5xl font-black font-pri">Itinerary</div>
                <div class="flex flex-col gap-5">
                    {{-- Commented out alternative design
                    <div class="flex flex-col bg-[#F6F6F6] rounded-2xl">
                        <div class="flex gap-10 p-5 border-b border-slate-600 items-center">
                            <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY 01</button>
                            <div class="text-xl">Kandy</div>
                        </div>
                        <div class="w-full p-5 flex gap-5">
                            <img src="{{ asset('new_frontend/Assets/Image 4.png') }}" class="" alt="">
                            <div>
                                Arrive in Sri Lanka to a warm welcome from our guide at the airport. Explore the Pinnawala Elephant Orphanage on your way to Kandy, known for the world's largest captive elephant herd. Founded in 1975, the sanctuary cares for orphaned elephants.
                                <br><br>
                                After checking into your hotel, relax and attend the Kandy Cultural Dance Show in the evening. Visit the iconic Tooth Relic Temple, "Dalada Maligawa," for a dose of peaceful Buddhist culture with your guide's insights. Sleep overnight as a proud Kandyan, enjoying a journey blending nature and culture.
                            </div>
                        </div>
                    </div>
                    --}}

                    <div class="collapse collapse-arrow bg-base-100 border border-base-300 text-black">
                        <input type="radio" name="my-accordion-2" checked="checked" />
                        <div class="collapse-title ">
                            <div class="flex gap-10 p-5 items-center">
                                <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY 01</button>
                                <div class="text-xl">Kandy</div>
                            </div>
                        </div>
                        <div class="collapse-content text-sm text-wrap">
                            <div class="w-full p-5 flex flex-col sm:flex-row gap-5 border-t border-slate-600">
                                <img src="{{ asset('new_frontend/Assets/Image 4.png') }}" class="" alt="">
                                <div>
                                    Arrive in Sri Lanka to a warm welcome from our guide at the airport. Explore the Pinnawala Elephant Orphanage on your way to Kandy, known for the world's largest captive elephant herd. Founded in 1975, the sanctuary cares for orphaned elephants.
                                    <br><br>
                                    After checking into your hotel, relax and attend the Kandy Cultural Dance Show in the evening. Visit the iconic Tooth Relic Temple, "Dalada Maligawa," for a dose of peaceful Buddhist culture with your guide's insights. Sleep overnight as a proud Kandyan, enjoying a journey blending nature and culture.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-100 border border-base-300 text-black">
                        <input type="radio" name="my-accordion-2" />
                        <div class="collapse-title ">
                            <div class="flex gap-10 p-5 items-center">
                                <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY 02</button>
                                <div class="text-xl">Colombo</div>
                            </div>
                        </div>
                        <div class="collapse-content text-sm text-wrap">
                            <div class="w-full p-5 flex flex-col sm:flex-row gap-5 border-t border-slate-600">
                                <img src="{{ asset('new_frontend/Assets/Image 4.png') }}" class="" alt="">
                                <div>
                                    Arrive in Sri Lanka to a warm welcome from our guide at the airport. Explore the Pinnawala Elephant Orphanage on your way to Kandy, known for the world's largest captive elephant herd. Founded in 1975, the sanctuary cares for orphaned elephants.
                                    <br><br>
                                    After checking into your hotel, relax and attend the Kandy Cultural Dance Show in the evening. Visit the iconic Tooth Relic Temple, "Dalada Maligawa," for a dose of peaceful Buddhist culture with your guide's insights. Sleep overnight as a proud Kandyan, enjoying a journey blending nature and culture.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-100 border border-base-300 text-black">
                        <input type="radio" name="my-accordion-2" />
                        <div class="collapse-title ">
                            <div class="flex gap-10 p-5 items-center">
                                <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY 03</button>
                                <div class="text-xl">Matara</div>
                            </div>
                        </div>
                        <div class="collapse-content text-sm text-wrap">
                            <div class="w-full p-5 flex flex-col sm:flex-row gap-5 border-t border-slate-600">
                                <img src="{{ asset('new_frontend/Assets/Image 4.png') }}" class="" alt="">
                                <div>
                                    Arrive in Sri Lanka to a warm welcome from our guide at the airport. Explore the Pinnawala Elephant Orphanage on your way to Kandy, known for the world's largest captive elephant herd. Founded in 1975, the sanctuary cares for orphaned elephants.
                                    <br><br>
                                    After checking into your hotel, relax and attend the Kandy Cultural Dance Show in the evening. Visit the iconic Tooth Relic Temple, "Dalada Maligawa," for a dose of peaceful Buddhist culture with your guide's insights. Sleep overnight as a proud Kandyan, enjoying a journey blending nature and culture.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-100 border border-base-300 text-black">
                        <input type="radio" name="my-accordion-2" />
                        <div class="collapse-title ">
                            <div class="flex gap-10 p-5 items-center">
                                <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY 04</button>
                                <div class="text-xl">Galle</div>
                            </div>
                        </div>
                        <div class="collapse-content text-sm text-wrap">
                            <div class="w-full p-5 flex flex-col sm:flex-row gap-5 border-t border-slate-600">
                                <img src="{{ asset('new_frontend/Assets/Image 4.png') }}" class="" alt="">
                                <div>
                                    Arrive in Sri Lanka to a warm welcome from our guide at the airport. Explore the Pinnawala Elephant Orphanage on your way to Kandy, known for the world's largest captive elephant herd. Founded in 1975, the sanctuary cares for orphaned elephants.
                                    <br><br>
                                    After checking into your hotel, relax and attend the Kandy Cultural Dance Show in the evening. Visit the iconic Tooth Relic Temple, "Dalada Maligawa," for a dose of peaceful Buddhist culture with your guide's insights. Sleep overnight as a proud Kandyan, enjoying a journey blending nature and culture.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class=""><span class="text-3xl sm:text-5xl font-black font-pri">Tour's Location </span><span class="text-xs sm:text-md">Kandy | Colombo | Matara | Galle</span></div>
                <div>
                    <img class="w-full" src="{{ asset('new_frontend/Assets/Screenshot 2025-04-27 134546.png') }}" alt="Tour Map">
                </div>
            </div>
            <div class="w-full sm:w-1/3">
                <div class="bg-[#02515A] w-full flex flex-col p-10 sm:p-20 text-white">
                    <div class="text-5xl font-pri font-black">Inquiry Now</div>
                    <div class="py-3">It's time to plan just the perfect vacation!</div>
                    <form action="{{ route('tour.inquire') }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <input type="hidden" name="tour_id" value="1">
                        <input type="text" name="name" placeholder="NAME" class="bg-[#00000000] border-0 border-b border-slate-400 py-3" required>
                        <input type="email" name="email" placeholder="EMAIL" class="bg-[#00000000] border-0 border-b border-slate-400 py-3" required>
                        <input type="tel" name="phone" placeholder="PHONE" class="bg-[#00000000] border-0 border-b border-slate-400 py-3" required>
                        <input type="date" name="date" placeholder="DATE" class="bg-[#00000000] border-0 border-b border-slate-400 py-3" required>
                        <input type="number" name="adults" placeholder="NUMBER OF ADULTS" class="bg-[#00000000] border-0 border-b border-slate-400 py-3" required>
                        <textarea name="message" placeholder="MESSAGE" class="bg-[#00000000] border-0 border-b border-slate-400 py-3"></textarea>
                        <div class="w-full flex justify-center py-20">
                            <button type="submit" class="w-full bg-[#FF9933] py-3 rounded-full text-md font-bold">SEND NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
