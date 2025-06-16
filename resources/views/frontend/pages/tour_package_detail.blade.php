@extends('frontend.new_layout')

@section('title', $tourPackage->name . ' | Happy Mango Tours')
@section('description', $tourPackage->short_description)
@section('keywords', 'Happy Mango Tours, Sri Lanka tours, ' . $tourPackage->name . ', ' . $tourPackage->locations)

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-5xl sm:text-7xl font-black font-pri text-center">{{ $tourPackage->name }}</div>
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
                    <img class="w-full" src="{{ asset('storage/' . $tourPackage->image) }}" alt="{{ $tourPackage->name }}">
                </div>
            </div>
        </div>


        <div class="w-full bg-white flex flex-col sm:flex-row text-black sm:p-20 pt-0">
            <div class="w-full sm:w-2/3 p-10 flex flex-col gap-8">
                <div class="w-full text-5xl sm:text-7xl font-black font-pri">
                    {{ $tourPackage->name }}
                </div>
                <div class="text-xl sm:text-3xl"><span class="font-bold">PRICE ${{ $tourPackage->price }} /</span> {{ $tourPackage->duration }}</div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="flex flex-col sm:flex-row w-full gap-5 sm:gap-10">
                    <div class="flex text-lg sm:text-2xl gap-5">
                        <img src="{{ asset('new_frontend/Assets/calendar-clock.png') }}" alt="">
                        <div class="text-nowrap">{{ $tourPackage->duration }}</div>
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
                    {{ $tourPackage->short_description }}
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-5xl font-black font-pri">About this tour</div>
                <div>
                    {!! $tourPackage->description !!}
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-3xl sm:text-5xl font-black font-pri">Included/Excluded</div>
                <div class="sm:w-4/5 flex">
                    <div class="w-1/2 flex-col flex gap-3 px-3 sm:px-0 text-sm sm:text-md">
                        @foreach($tourPackage->included as $item)
                            <div>{{ $item }}</div>
                        @endforeach
                    </div>
                    <div class="w-1/2 flex-col flex gap-3 px-3 sm:px-0 text-sm sm:text-md">
                        @foreach($tourPackage->excluded as $item)
                            <div>{{ $item }}</div>
                        @endforeach
                    </div>
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class="text-3xl sm:text-5xl font-black font-pri">Itinerary</div>
                <div class="flex flex-col gap-5">
                    @foreach($tourPackage->itinerary as $day)
                        <div class="collapse collapse-arrow bg-base-100 border border-base-300 text-black">
                            <input type="radio" name="my-accordion-2" {{ $loop->first ? 'checked="checked"' : '' }} />
                            <div class="collapse-title">
                                <div class="flex gap-10 p-5 items-center">
                                    <button class="text-white bg-[#02515A] rounded-full py-2 px-4">DAY {{ sprintf('%02d', $day->day) }}</button>
                                    <div class="text-xl">{{ $day->location }}</div>
                                </div>
                            </div>
                            <div class="collapse-content text-sm text-wrap">
                                <div class="w-full p-5 flex flex-col sm:flex-row gap-5 border-t border-slate-600">
                                    @if($day->image)
                                        <img src="{{ asset('storage/' . $day->image) }}" alt="{{ $day->title }}">
                                    @endif
                                    <div>
                                        <h4 class="font-bold text-xl mb-2">{{ $day->title }}</h4>
                                        {!! $day->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <span class="w-3/5 h-[1px] bg-black"></span>
                <div class=""><span class="text-3xl sm:text-5xl font-black font-pri">Tour's Location </span><span class="text-xs sm:text-md">{{ $tourPackage->locations }}</span></div>
                <div>
                    <img class="w-full" src="{{ asset('new_frontend/Assets/Screenshot 2025-04-27 134546.png') }}" alt="Map">
                </div>
            </div>
            <div class="w-full sm:w-1/3">
                <div class="bg-[#02515A] w-full flex flex-col p-10 sm:p-20 text-white">
                    <div class="text-5xl font-pri font-black">Inquairy Now</div>
                    <div class="py-3">It's time to plan just the perfect vacation!</div>
                    <form action="{{ route('tour.inquire') }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tourPackage->id }}">
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
