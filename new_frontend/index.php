<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</head>
<body>

    <div class="w-screen min-h-screen flex justify-center items-center flex-col text-white">
        <?php include 'components/header.php'; ?>
        
        <section class="w-full h-screen flex  sm:gap-10 justify-center items-center flex-col" style="background-image: url(/Assets/mainbg.png); background-size: cover; background-position: center;">
            <div class="text-3xl sm:text-6xl font-sec">Explore the World With</div>
            <div class="relative flex flex-col items-center gap-10 sm:gap-20">
                <div class="text-6xl text-center sm:text-9xl font-black font-pri">Happy Mango Tours!</div>
                <div class="w-1/3 top-28 sm:top-24 absolute"><img src="Assets/Search Bar Container.png" class="w-full" alt=""></div>
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
                                <img src="Assets/av1.png" class="" alt="">
                            </div>
                        </div>
                        <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Beach & Island</div>
                        <div class="w-full text-center px-5 sm:px-0 ">Relax on Sri Lanka’s golden beaches and explore breathtaking tropical islands.</div>
                    </div>
                    <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                        <div class="sm:p-10 px-10 py-5">
                            <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                                <img src="Assets/img(3).png" class="" alt="">
                            </div>
                        </div>
                        <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Adventure & Wildlife</div>
                        <div class="w-full text-center px-5 sm:px-0 ">Experience thrilling safaris, jungle treks, and adrenaline-filled adventures.</div>
                    </div>
                    <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                        <div class="sm:p-10 px-10 py-5">
                            <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                                <img src="Assets/img(4).png" class="" alt="">
                            </div>
                        </div>
                        <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Cultural & Heritage</div>
                        <div class="w-full text-center px-5 sm:px-0 ">Discover ancient temples, historic cities, and Sri Lanka’s rich traditions.</div>
                    </div>
                    <div class="flex flex-col items-center justify-center sm:w-1/5 gap-3 sm:gap-10 group/item">
                        <div class="sm:p-10 px-10 py-5">
                            <div class="w-full rounded-full group-hover/item:border-[#FF9933] border-8 border-[#00000000] duration-300">
                                <img src="Assets/img(5).png" class="" alt="">
                            </div>
                        </div>
                        <div class="w-fit text-2xl text-center duration-200 cursor-pointer group-hover/item:text-[#FF9933] font-bold">Hill Country & Nature</div>
                        <div class="w-full text-center px-5 sm:px-0 ">Sri Lanka’s scenic highlands, explore tea plantations, and unwind amidst breathtaking waterfalls</div>
                    </div>
                    
                </div>
            </section>

            <section class="w-full bg-[#02515A] flex flex-col sm:flex-row" id="2">
                <div class="w-full sm:w-1/2 text-white py-20 px-10 sm:px-20">
                    <div class="w-full flex flex-col gap-10">
                        <div class="text-xl sm:text-3xl font-sec">Unforgettable Journeys</div>
                        <div class="text-4xl sm:text-6xl font-extrabold font-pri">Why Choose Us?</div>
                        <div class="my-5 sm:my-10 flex flex-col gap-5 sm:gap-10">
                            <div class="flex sm:flex-row flex-col gap-4 sm:gap-10 py-5 px-3 border border-white/0 hover:border-white/25">
                                <div class="">
                                    <div class="w-[112px] h-[112px] bg-[#FF9933] rounded-full flex justify-center items-center">
                                        <img class="w-auto " src="Assets/guide.png" alt="">
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
                                        <img class="w-auto " src="Assets/tags.png" alt="">
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
                                        <img class="w-auto " src="Assets/user-headset.png" alt="">
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
                    <div class="w-full flex items-end h-[871px]" style="background-image: url(Assets/img\(6\).png); background-size: cover; background-position: center;">
                        <div class="bg-[#FF9933] py-9 px-12 text-xl sm:text-2xl tracking-wider">MORE DETAILS</div>
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#02515A]" id="3">
                <div class="py-20  flex sm:flex-row flex-col">
                    <div class="w-[278px] h-[754px] hidden sm:flex">
                        <img src="Assets/2.png" class="w-full h-full object-fill" alt="">
                    </div>
                    <div class="w-full sm:w-1/2 flex grow">
                        <div class="w-full">
                            <img src="Assets/1.png" class="w-full" alt="">
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 py-10 sm:py-20 px-10 flex flex-col gap-5 sm:gap-10">
                        <div class="w-full text-4xl sm:text-6xl font-pri">Your Dream Vacation, Perfectly Planned!</div>
                        <div class="text-sm sm:text-xl leading-10">
                            Happy Mango Tours, we specialize in crafting unforgettable travel experiences tailored just for you. Whether you’re looking for a relaxing beach escape, an action-packed adventure, or a deep dive into rich cultural heritage, we have the perfect tour to match your desires. <br><br> With expertly curated packages, experienced local guides, and personalized services, we ensure every journey is seamless, exciting, and filled with incredible memories. Let us take you on an extraordinary adventure—wherever your heart desires!
                        </div>
                        <div class="">
                            <button class="border py-2 px-5 cursor-pointer font-pri ">LEARN MORE ABOUT</button>
                        </div>
                    </div>

                </div>
            </section>

            <section class=" sm:block w-full bg-white text-black px-5 sm:px-20 pb-10 sm:pb-40" id="4">
                <div class="w-full flex pt-28 pb-10 flex-col justify-center items-center gap-5">
                    <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                    <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri ">Tailor-Made Tours</div>
                    <div class="sm:w-3/7 flex justify-center text-center font-pri ">Customize your dream vacation! Our tailor-made tours let you design your perfect itinerary, choosing destinations, activities, and experiences that match your interests and travel style.</div>
                </div>

                <div class="swiper mySwiper px-4  sm:px-0 pb-16">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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

                    </div>

                    <!-- Pagination & Navigation -->
                    <div class="swiper-pagination mt-5"></div>
                    <div class="swiper-button-prev !text-[#ff9933]"></div>
                    <div class="swiper-button-next !text-[#ff9933]"></div>
                    </div>

                <div class="justify-center flex py-15">
                    <button class="py-3 px-6 rounded-full text-white font-[600] bg-[#02515A]">EXPLORE MORE TOURS</button>
                </div>
            </section>

            <!-- Section 5 -->

            <section class=" sm:block w-full bg-white text-black px-5 sm:px-20 pb-10 sm:pb-40" id="5">
                <div class="w-full flex sm:pt-28 pb-10 flex-col justify-center items-center gap-5">
                    <div class="text-xl sm:text-3xl flex justify-center font-sec">Enjoy with your love</div>
                    <div class="text-3xl sm:text-5xl text-center font-black flex justify-center font-pri ">Round Tours - Explore Sri Lanka in a seamless journey! </div>
                    <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Discover Sri Lanka’s most breathtaking destinations with our expertly curated round tours cover the island’s top attractions, offering a perfect blend of adventure, culture, and relaxation.</div>
                </div>

                <div class="swiper mySwiper px-4 sm:px-0 pb-16">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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
                        <div class="w-full sm:w-[578px] h-[500px] sm:h-[736px] bg-slate-300 flex flex-col justify-end relative group bg-cover bg-center" style="background-image: url('Assets/img(7).png');">
                            <div class="absolute bg-[#ff9933] top-0 right-4 sm:right-7 rounded-b-xl text-white text-xs font-bold px-3 py-2 z-10">TAILOR MADE TOURS</div>
                            <div class="crsl-cont flex flex-col justify-end absolute w-full h-[150px] sm:h-[306px]"></div>
                            <div class="bg-black/50 z-[9] opacity-0 group-hover:opacity-100 duration-300 w-full grow flex justify-center items-center text-white">
                            <div class="border-2 rounded-full p-4 sm:p-5 duration-300 group-hover:rotate-[-30deg]">
                                <!-- Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="white" width="24" height="24" viewBox="0 0 12.86 8.045">
                                <g id="Iconly_Light-Outline_Arrow---Down-3" transform="translate(-3 14.045) rotate(-90)">
                                    <g id="Arrow---Down-3" transform="translate(6 3)">
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


                    </div>

                    <!-- Pagination & Navigation -->
                    <div class="swiper-pagination mt-5"></div>
                    <div class="swiper-button-prev !text-[#ff9933]"></div>
                    <div class="swiper-button-next !text-[#ff9933]"></div>
                    </div>

                <div class="justify-center flex py-15">
                    <button class="py-3 px-6 rounded-full text-white font-[600] bg-[#ff9933]">EXPLORE MORE TOURS</button>
                </div>
            </section>
    
            <script>
            var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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

            </script>

            <?php include 'components/testimonials.php'; ?>
            <?php include 'components/faq.php'; ?>

            <section class="bg-white flex sm:flex-row flex-col w-full">
                <div class="w-full sm:w-3/8 bg-black flex gap-20 flex-col py-20 px-10 sm:px-20">
                    <div class="text-3xl sm:text-5xl font-pri font-black text-wrap">Get in Touch With Us</div>
                    <div class="flex flex-col gap-10 text-sm sm:text-md">
                        <div class="flex gap-10 items-center">
                            <img src="Assets/Icon Container.png" class="w-[50px] h-[50px]" alt="">
                            <div>No 38/4 Moragolla Imbulgasdeniya KegalleSri Lanka P.O. Box 71000</div>
                        </div>
                        <div class="flex gap-10 items-center">
                            <img src="Assets/Icon Container2.png" class="w-[50px] h-[50px]" alt="">
                            <div>0094777007707</div>
                        </div>
                        <div class="flex gap-10 items-center">
                            <img src="Assets/Icon Container3.png" class="w-[50px] h-[auto]" alt="">
                            <div>info@happymangotours.com</div>
                        </div>
                        <div class="flex gap-10 items-center">
                            <img src="Assets/Icon Container(1).png" class="w-[50px] h-[50px]" alt="">
                            <img src="Assets/Icon Container(2).png" class="w-[50px] h-[50px]" alt="">
                            <img src="Assets/Icon Container(3).png" class="w-[50px] h-[50px]" alt="">
                            <img src="Assets/Icon Container(4).png" class="w-[50px] h-[50px]" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-5/8 text-black px-10 py-20 sm:px-20 flex gap-5 flex-col">
                    <div class="text-xl sm:text-3xl font-sec">Submit Enquiry</div>
                    <div class="text-3xl sm:text-5xl font-black font-pri">How did you hear about us?</div>
                    <div class="flex flex-wrap">
                        <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Inquiry types*</label>
                        </div>
                        <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Inquiry types*</label>
                        </div>
                        <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Your Name*</label>
                        </div>
                        <div class="relative z-0 w-full md: w-1/2 sm:w-1/2 p-5">
                            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Country*</label>
                        </div>
                        <div class="relative z-0 w-full p-5">
                            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Message*</label>
                        </div>
                    </div>
                    <div class="w-full sm:py-10 flex justify-center">
                        <button class="bg-[#ff9933] py-2 rounded-full px-8 cursor-pointer hover:bg-[#ffab57] text-white text-sm">SUBMIT</button>
                    </div>
                </div>
            </section>

            <?php include 'components/comp1.php'; ?>

        </div>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>