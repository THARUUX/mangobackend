<section class="w-full flex justify-center flex-col items-center">
    <div class="w-full flex sm:flex-row flex-col">
        <div class="w-full sm:w-1/2 sm:px-44 px-10 py-10 sm:py-44 flex justify-center items-center bg-[#02515A] text-white">
            <div class="w-full">
                <div class="text-3xl font-bold">Naduni Pramodya</div>
                <div class="text-xl">Amazing Traveller</div>
                <div class="text-md mt-10">
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum.
                </div>
            </div>
        </div>
        <div class=" sm:w-1/2 sm:px-40 px-10 py-10 sm:py-0 bg-white flex flex-col items-center justify-center text-black">
            <div class="font-sec text-xl sm:text-4xl">Enjoy with your love</div>
            <div class="text-4xl sm:text-6xl font-black my-5 sm:my-10">Testimonials</div>
            <div class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="swiper mySwiper mt-12 relative w-full max-w-6xl mx-auto px-4">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-auto object-cover" />
                <h4 class="text-xl font-bold mt-4">Naduni Pramodya</h4>
                <p class="text-gray-500">Amazing Traveller</p>
                <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/men/2.jpg" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-auto object-cover" />
                <h4 class="text-xl font-bold mt-4">John Doe</h4>
                <p class="text-gray-500">Adventure Seeker</p>
                <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/women/3.jpg" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-auto object-cover" />
                <h4 class="text-xl font-bold mt-4">Sarah Lee</h4>
                <p class="text-gray-500">Nature Lover</p>
                <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/men/4.jpg" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-auto object-cover" />
                <h4 class="text-xl font-bold mt-4">Mike Ross</h4>
                <p class="text-gray-500">Explorer</p>
                <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/women/5.jpg" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-auto object-cover" />
                <h4 class="text-xl font-bold mt-4">Emily Clark</h4>
                <p class="text-gray-500">Beach Lover</p>
                <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                </div>

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            </div>
        </div>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    const swiper = new Swiper(".mySwiper", {
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
        slidesPerView: 1.2,
        },
        640: {
        slidesPerView: 1.5,
        },
        768: {
        slidesPerView: 2,
        },
        1024: {
        slidesPerView: 3,
        }
    }
    });
</script>

<style>
    .swiper-slide{
        display: flex !important;
    }
</style>


