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
        <div class="w-full sm:p-20 bg-white flex justify-center">
            <div class="bg-[#F9F9F9] w-[1000px] py-15 px-10 flex flex-col sm:flex-row pb-28">
                <div class="w-full sm:w-1/2 flex flex-col gap-10">
                    <form action="{{ url('/contactFormSubmit') }}" method="POST">
                        @csrf
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446]" type="text" name="name" placeholder="Your Name" required>
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446] mt-10" type="text" name="phone" placeholder="Your Phone Number" required>
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446] mt-10" type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" class="bg-[#F3F3F3] p-5 border-0 text-[#535446] mt-10" placeholder="Message Here" id="" rows="5" required></textarea>
                        <button type="submit" class="bg-[#FF9933] text-white py-3 px-8 mt-10 hover:bg-[#e88929] transition">Send Message</button>
                    </form>
                </div>
                <div class="w-full sm:w-1/2 flex flex-col gap-5 sm:gap-20 p-5 sm:p-10 text-black">
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
    </div>
@endsection
