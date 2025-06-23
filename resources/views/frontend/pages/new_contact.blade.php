@extends('frontend.new_layout')

@section('title', 'Contact Us | Happy Mango Tours')
@section('description', 'Get in touch with Happy Mango Tours to plan your perfect Sri Lanka trip. We\'re here to answer your questions and help create your dream vacation.')
@section('keywords', 'Happy Mango Tours contact, Sri Lanka tour contact, travel agency contact, book a tour, travel inquiry')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-7xl font-black font-pri">CONTACT</div>
        <div class="text-2xl font-black font-pri">HOME - CONTACT</div>
    </div>
    <div class="max-w-[2500px] w-full bg-white grow text-white">
        <div class="w-full sm:p-20 bg-white flex flex-col items-center justify-center">
            <div class="w-full max-w-[1000px] text-xl sm:text-3xl px-5 sm:px-0 py-15  text-black font-black">Have a question or comment? <br> Use the form below to send us a message. </div>
            <div class="bg-[#F9F9F9] gap-20 sm:gap-0 w-full max-w-[1000px] py-15 px-10 flex flex-col sm:flex-row pb-28">
                <div class="w-full sm:w-1/2 flex flex-col gap-10">
                    <form action="{{ url('/contactFormSubmit') }}" method="POST">
                        @csrf
                        <input class="bg-[#F3F3F3] w-full p-5 border-0 text-[#535446]" type="text" name="name" placeholder="Your Name" required>
                        <input class="bg-[#F3F3F3] w-full p-5 border-0 text-[#535446] mt-10" type="text" name="phone" placeholder="Your Phone Number" required>
                        <input class="bg-[#F3F3F3] w-full p-5 border-0 text-[#535446] mt-10" type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" class="bg-[#F3F3F3] w-full p-5 border-0 text-[#535446] mt-10" placeholder="Message Here" id="" rows="5" required></textarea>
                        <button type="submit" class="bg-[#FF9933] text-white py-3 px-8 mt-10 hover:bg-[#e88929] transition">Send Message</button>
                    </form>
                </div>
                <div class="w-full sm:w-1/2 flex flex-col gap-5 sm:gap-20 px-5 sm:px-10 text-black">
                    <div class="w-full flex justify-center"><img src="{{ asset('new_frontend/Assets/logo.png') }}" alt=""></div>
                    <div>
                        <div class="text-2xl pb-5 text-center">Location</div>
                        <div class="pb-5 text-center">No 38/4 Moragolla, Imbulgasdeniya, Kegalle, Sri Lanka</div>
                    </div>
                    <div>
                        <div class="text-2xl pb-5 text-center">Contact Info</div>
                        <div class="pb-2 text-center">+94 77 700 7707</div>
                        <div class="text-center">info@happymangotours.com</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[500px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8599026831743!2d80.35615!3d7.033359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae30872c88fb6cb%3A0xda2a366134eb5de4!2sKegalle%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1718028789529!5m2!1sen!2sus"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
               <!-- Gallery Section -->
        <section class="pb-4 bg-white" id="gallery">
            {{-- <div class="w-full flex pt-10 pb-5 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Capture the Memories</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri">Gallery</div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Explore the beauty of Sri Lanka through our travelers' experiences</div>
            </div> --}}

            <div class="w-full flex-wrap sm:flex-nowrap flex">
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(10).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Beach view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(11).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Mountain view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(12).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Temple view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(13).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Wildlife view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(14).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Cultural view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
