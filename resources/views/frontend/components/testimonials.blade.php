@props(['testimonials' => [
    [
        'image' => 'https://randomuser.me/api/portraits/women/1.jpg',
        'name' => 'Naduni Pramodya',
        'title' => 'Amazing Traveller',
        'quote' => 'Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum.',
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/men/2.jpg',
        'name' => 'John Doe',
        'title' => 'Adventure Seeker',
        'quote' => 'Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.',
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/women/3.jpg',
        'name' => 'Sarah Lee',
        'title' => 'Nature Lover',
        'quote' => 'Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.',
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/men/4.jpg',
        'name' => 'Mike Ross',
        'title' => 'Explorer',
        'quote' => 'Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.',
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/women/5.jpg',
        'name' => 'Emily Clark',
        'title' => 'Beach Lover',
        'quote' => 'Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.',
    ]
]])

<section class="w-full flex justify-center flex-col items-center" id="testimonials">
    <div class="w-full flex sm:flex-row flex-col">
        <div class="w-full sm:w-1/2 sm:px-44 px-10 py-10 sm:py-44 flex justify-center items-center bg-[#02515A] text-white">
            <div class="w-full testimonial-content-container">
                @foreach($testimonials as $index => $testimonial)
                    <div class="testimonial-content {{ $index === 0 ? 'active' : 'hidden' }}" data-index="{{ $index }}">
                        <div class="text-3xl font-bold">{{ $testimonial['name'] }}</div>
                        <div class="text-xl">{{ $testimonial['title'] }}</div>
                        <div class="text-md mt-10">
                            {{ $testimonial['quote'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="sm:w-1/2 sm:px-10 lg:px-20 px-10 py-10 sm:py-0 bg-white flex flex-col items-center justify-center text-black">
            <div class="font-sec text-xl sm:text-4xl">Enjoy with your love</div>
            <div class="text-4xl sm:text-6xl font-black my-5 sm:my-10">Testimonials</div>
            <div class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="swiper mySwiper mt-12 relative w-full max-w-6xl mx-auto px-4">
                <!-- Navigation buttons positioned outside the slider for better visibility -->
                <div class="swiper-button-prev absolute left-0 z-10 transform -translate-y-1/2 -translate-x-1"></div>
                <div class="swiper-button-next absolute right-0 z-10 transform -translate-y-1/2 translate-x-1"></div>

                <div class="swiper-wrapper py-10">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="swiper-slide flex flex-col items-center justify-center">
                            <div class="testimonial-card flex flex-col items-center">
                                <img src="{{ $testimonial['image'] }}" class="rounded-full border-4 border-orange-400 w-24 h-24 md:w-32 md:h-32 object-cover" alt="{{ $testimonial['name'] }}" />
                                <h4 class="text-xl font-bold mt-4 text-center">{{ $testimonial['name'] }}</h4>
                                <p class="text-gray-500 text-center">{{ $testimonial['title'] }}</p>
                                <div class="text-orange-400 mt-2 text-lg text-center">★★★★★</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-slide {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            height: auto !important;
        }

        .testimonial-card {
            max-width: 300px;
            transition: transform 0.3s ease;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .swiper-slide-active .testimonial-card {
            transform: scale(1.05);
        }

        .testimonial-content {
            opacity: 0;
            transition: all 0.5s ease-in-out;
            position: absolute;
            width: 100%;
        }

        .testimonial-content.active {
            opacity: 1;
            position: relative;
        }

        .testimonial-content-container {
            position: relative;
            min-height: 300px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #FF9933;
            width: 44px;
            height: 44px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px;
            font-weight: bold;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: #02515A;
            background: #f5f5f5;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
            delay: 3000, // 3 seconds delay between slides
            disableOnInteraction: false, // autoplay won't stop after user interaction
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            },
        });
    </script>

    @endpush
@endonce
