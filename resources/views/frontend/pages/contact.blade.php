@extends('frontend.app')
@section('title', 'Contact Us | X-GUARD - Get in Touch')
@section('description', 'Contact X-GUARD for customized security solutions. Reach out to us to discuss your safety needs
    and get the protection you deserve.')
@section('keywords', 'X-GUARD contact, security inquiries, get in touch with X-GUARD, customized security, security
    support, reliable protection')

@section('content')
    <section class="hero-section-2">
        <div class="container">
            <div class="col-lg-10 mx-auto row">
                <div class="col-12 text-center">
                    <h1 class="hero-title">Get in Touch</h1>
                </div>
                <div class="col-12">
                    <p class="address">No 66A Nalandararama Road, Nugegoda</p>
                    <a href="#" class="email">xguard.info@gmail.com</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <form action="/contactFormSubmit" id="contactForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xl-10 mx-auto row">

                    <div class="col-12 mb-4">
                        <span class="section-subtitle">CONTACT US</span>
                        <h2 class="section-title">How can we Help You?</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" value="{{ old('fname') }}"
                                placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" value="{{ old('lname') }}"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}"
                                placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="company" value="{{ old('company') }}"
                                placeholder="Company">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" rows="6">{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="col-12 mt-4 d-flex justify-content-center justify-content-lg-start">
                        <button class="btn primary-btn" type="submit">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-xl-10 mx-auto row">
                <div class="col-12">
                    <span class="section-subtitle">Location</span>
                    <h2 class="section-title">Our Location</h2>
                </div>
                <div class="col-12 mt-4">
                    <iframe class="w-100 border-rounded rounded-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2032890033493!2d79.88605687365236!3d6.866225919088489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b9653ea9c93%3A0x5cba7f5c10caf2b9!2sXguard%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1730965368867!5m2!1sen!2slk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
