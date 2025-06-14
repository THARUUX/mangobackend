@props(['isActive' => true])

<div class="py-20 w-full px-5 sm:px-10 flex flex-col bg-white text-black items-center justify-center gap-5">
    <div class="w-full justify-center flex gap-5 text-xs sm:text-md">
        <a href="#tailor-made" class="{{ $isActive ? 'bg-[#FF9933] text-white' : 'hover:bg-[#FF9933] hover:text-white' }} py-2 px-8 rounded-full font-bold duration-300 text-center">TAILOR MADE TOURS</a>
        <span class="w-1 h-auto bg-black"></span>
        <a href="#round-tours" class="{{ !$isActive ? 'bg-[#FF9933] text-white' : 'hover:bg-[#FF9933] hover:text-white' }} py-2 px-8 rounded-full font-bold duration-300 text-center">ROUND TOURS</a>
    </div>
    <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center">Tailor-Made Tours – Your Journey, Your Way!</div>
    <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">At Happy Mango Tours, we believe every traveler is unique. Our Tailor-Made Tours allow you to design a fully customized itinerary based on your interests, budget, and travel style. Whether you seek cultural discoveries, wildlife adventures, scenic getaways, or relaxing beach stays, we'll craft the perfect journey just for you.</div>
</div>
