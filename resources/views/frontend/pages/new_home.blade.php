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

        <!-- Additional sections would continue here -->
    </div>
@endsection

@section('additional_js')
<script>
    // Any JavaScript specific to the home page can go here
</script>
@endsection
