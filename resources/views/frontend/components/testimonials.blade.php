@props(['testimonials' => [
    [
        'image' => 'https://randomuser.me/api/portraits/women/1.jpg',
        'name' => 'Naduni Pramodya',
        'title' => 'Amazing Traveller',
        'quote' => 'Our family trip exceeded all expectations! The guide was knowledgeable and the itinerary perfectly balanced adventure with relaxation.',
        'fullQuote' => 'Our family trip with Happy Mango Tours exceeded all expectations! From the moment we arrived, their attention to detail was exceptional. Our guide was knowledgeable, friendly, and made sure our children had an amazing experience. The accommodations were perfect for our needs, and the itinerary balanced adventure with relaxation. We particularly loved the wildlife safari and the beach stay in Mirissa. Thank you for making our Sri Lanka vacation truly unforgettable!'
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/men/2.jpg',
        'name' => 'John Doe',
        'title' => 'Adventure Seeker',
        'quote' => 'The safari tours were incredible! Our guide knew exactly where to find wildlife and shared fascinating information about local culture.',
        'fullQuote' => 'The safari tours were incredible! Every detail was perfectly planned. Our guide knew exactly where to find wildlife and shared fascinating information about local culture. We saw elephants, leopards, and countless exotic birds. The accommodations were luxurious and the food was amazing. This was truly the adventure of a lifetime!'
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/women/3.jpg',
        'name' => 'Sarah Lee',
        'title' => 'Nature Lover',
        'quote' => 'Happy Mango Tours helped us discover hidden gems of Sri Lanka that we\'d never have found on our own. Truly a memorable experience!',
        'fullQuote' => 'Happy Mango Tours helped us discover hidden gems of Sri Lanka that we\'d never have found on our own. From secluded beaches to ancient temples tucked away in the jungle, every day brought new wonders. The local experiences and cultural immersion made this trip truly unforgettable!'
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/men/4.jpg',
        'name' => 'Michael Wong',
        'title' => 'Food Enthusiast',
        'quote' => 'The culinary tour was outstanding! We experienced authentic Sri Lankan cuisine and even learned how to cook some dishes ourselves.',
        'fullQuote' => 'The culinary tour was outstanding! We experienced authentic Sri Lankan cuisine and even learned how to cook some dishes ourselves. From street food to high-end restaurants, every meal was an adventure. The cooking classes with local chefs were a highlight, and now we can recreate these amazing flavors at home!'
    ]
]])
    [
        'image' => 'https://randomuser.me/api/portraits/men/2.jpg',
        'name' => 'John Doe',
        'title' => 'Adventure Seeker',
        'quote' => 'The safari tours were incredible! Our guide knew exactly where to find wildlife and shared fascinating information about local culture.'
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/women/3.jpg',
        'name' => 'Sarah Lee',
        'title' => 'Nature Lover',
        'quote' => 'Happy Mango Tours helped us discover hidden gems of Sri Lanka that we\'d never have found on our own. Truly a memorable experience!'
    ],
    [
        'image' => 'https://randomuser.me/api/portraits/men/4.jpg',
        'name' => 'Michael Wong',
        'title' => 'Food Enthusiast',
        'quote' => 'The culinary tour was outstanding! We experienced authentic Sri Lankan cuisine and even learned how to cook some dishes ourselves.'
    ]
]])

<section class="w-full flex justify-center flex-col items-center" id="testimonials">
    <div class="w-full flex sm:flex-row flex-col">
        <div class="w-full sm:w-1/2 sm:px-44 px-10 py-10 sm:py-44 flex justify-center items-center bg-[#02515A] text-white">
            <div class="w-full testimonial-featured">
                @foreach($testimonials as $index => $testimonial)
                    <div class="testimonial-content {{ $loop->first ? 'active' : 'hidden' }}" data-index="{{ $index }}">
                        <div class="text-3xl font-bold">{{ $testimonial['name'] }}</div>
                        <div class="text-xl">{{ $testimonial['title'] }}</div>
                        <div class="text-md mt-10">
                            {{ $testimonial['fullQuote'] ?? $testimonial['quote'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="sm:w-1/2 sm:px-40 px-10 py-10 sm:py-0 bg-white flex flex-col items-center justify-center text-black">
            <div class="font-sec text-xl sm:text-4xl">Enjoy with your love</div>
            <div class="text-4xl sm:text-6xl font-black my-5 sm:my-10">Testimonials</div>
            <div class="text-lg">What our happy travelers say about their experiences with us.</div>
            <div class="mt-12 relative w-full max-w-6xl mx-auto px-4">
                <div class="swiper-container testimonials-swiper">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="flex flex-col items-center bg-gray-50 p-6 rounded-lg shadow-sm h-full">
                                    <img src="{{ $testimonial['image'] }}" class="rounded-full border-4 border-orange-400 w-24 h-24 object-cover" alt="{{ $testimonial['name'] }}" />
                                    <h4 class="text-xl font-bold mt-4">{{ $testimonial['name'] }}</h4>
                                    <p class="text-gray-500">{{ $testimonial['title'] }}</p>
                                    <div class="text-orange-400 mt-2 text-lg">★★★★★</div>
                                    <p class="text-gray-600 mt-4 text-center">"{{ $testimonial['quote'] }}"</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Navigation arrows -->
                    <div class="swiper-button-prev text-[#FF9933] after:text-[#FF9933]"></div>
                    <div class="swiper-button-next text-[#FF9933] after:text-[#FF9933]"></div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .testimonials-swiper .swiper-slide {
            display: flex !important;
        }
        .testimonials-swiper .swiper-button-next,
        .testimonials-swiper .swiper-button-prev {
            color: #FF9933;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .testimonials-swiper .swiper-button-next:after,
        .testimonials-swiper .swiper-button-prev:after {
            font-size: 20px;
        }
        .testimonials-swiper .swiper-pagination-bullet-active {
            background-color: #FF9933;
        }
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #FF9933;
            color: white;
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialSwiper = new Swiper(".testimonials-swiper", {
                loop: true,
                slidesPerView: 1,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true
                },
                on: {
                    init: function() {
                        updateFeaturedTestimonial(this.realIndex);
                    },
                    slideChange: function() {
                        updateFeaturedTestimonial(this.realIndex);
                    }
                }
            });

            function updateFeaturedTestimonial(index) {
                const testimonials = document.querySelectorAll('.testimonial-content');
                testimonials.forEach((content, i) => {
                    if (i === index) {
                        content.style.opacity = '0';
                        content.classList.remove('hidden');
                        setTimeout(() => {
                            content.style.opacity = '1';
                        }, 50);
                    } else {
                        content.style.opacity = '0';
                        setTimeout(() => {
                            content.classList.add('hidden');
                        }, 500);
                    }
                });
            }
        });
    </script>

    <style>
        .testimonial-content {
            opacity: 0;
            transition: all 0.5s ease-in-out;
            position: absolute;
            width: 100%;
        }
        .testimonial-content:not(.hidden) {
            opacity: 1;
        }
        .testimonial-featured {
            position: relative;
            min-height: 400px;
        }
        .testimonials-swiper .swiper-button-next,
        .testimonials-swiper .swiper-button-prev {
            color: #FF9933;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .testimonials-swiper .swiper-button-next:after,
        .testimonials-swiper .swiper-button-prev:after {
            font-size: 20px;
        }
        .testimonials-swiper .swiper-button-next:hover,
        .testimonials-swiper .swiper-button-prev:hover {
            background-color: #FF9933;
            color: white;
        }
        .testimonials-swiper .swiper-pagination-bullet-active {
            background-color: #FF9933;
        }
    </style>
    @endpush
@endonce
