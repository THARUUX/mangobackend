@extends('frontend.new_layout')

@section('title', 'About Us | Happy Mango Tours')
@section('description', 'Learn about Happy Mango Tours, your specialized travel partner in Sri Lanka offering tailor-made journeys and authentic local experiences.')
@section('keywords', 'Happy Mango Tours, about us, Sri Lanka travel agency, local tours, authentic experiences, travel specialists')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-7xl font-black font-pri">About</div>
        <div class="text-2xl font-black font-pri">HOME - ABOUT US</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="w-full flex flex-col sm:flex-row bg-white text-black">
            <div class="sm:w-1/2 h-auto p-10 sm:p-20 flex flex-col justify-center gap-5">
                <div class="text-4xl sm:text-7xl font-pri font-black sm:w-1/2">We Make Your Travel Adventures</div>
                <div>At Happy Mango Tours, we believe travel is more than just visiting places — it's about creating unforgettable memories. Based in Sri Lanka, we specialize in tailor-made and round tours that showcase the island's best. With local expertise, personalized service, and a passion for adventure, we craft journeys that are unique, seamless, and full of authentic experiences.</div>
                <div class="text-black mt-10">we are more than travel planners — we are storytellers who help you write your own Sri Lankan adventure. Our experienced local guides, handpicked accommodations, and thoughtfully curated activities guarantee that your time with us will be meaningful, authentic, and full of special moments.</div>
                <div class="w-full py-5">
                    <button class="bg-[#ff9933] py-2 rounded-full px-8 cursor-pointer hover:bg-[#ffab57] text-white text-sm">Start your trip</button>
                </div>
            </div>
            <div class="sm:w-1/2 h-auto bg-white">
                <img src="{{ asset('new_frontend/Assets/about-1.png') }}" class="w-full h-auto" alt="">
            </div>
        </div>

        <!-- Additional content would go here -->
    </div>
@endsection
