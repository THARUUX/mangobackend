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
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper(".mySwiper", {
                loop: true,
                centeredSlides: true,
                spaceBetween: 40,
                effect: "coverflow",
                grabCursor: true,
                autoplay: {
                    delay: 3000, // 3 seconds between slides
                    disableOnInteraction: false,
                },
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1.1,
                    },
                    640: {
                        slidesPerView: 1.3,
                    },
                    768: {
                        slidesPerView: 1.8,
                    },
                    1024: {
                        slidesPerView: 2.5,
                    }
                },
                on: {
                    init: function () {
                        updateTestimonialContent(this.realIndex);
                    },
                    slideChange: function () {
                        updateTestimonialContent(this.realIndex);
                    }
                }
            });

            function updateTestimonialContent(index) {
                const testimonialContents = document.querySelectorAll('.testimonial-content');
                testimonialContents.forEach((content, i) => {
                    if (i === index) {
                        content.classList.add('active');
                        content.classList.remove('hidden');
                    } else {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    }
                });
            }
        });
    </script>
    @endpush
@endonce
