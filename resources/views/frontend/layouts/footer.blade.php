<section class="contact-section">
    <div class="container">
        <div class="row mx-auto align-items-center">
            <div class="col-lg-6">
                <h3 class="section-title">Reach Out for Customized <br class="d-none d-lg-block"> Security Solutions
                </h3>
                <p class="section-text mb-0">Have questions or need more information? Our team is here to assist
                    you. <br class="d-none d-lg-block">
                    Contact us today to discuss
                    how X-GUARD can meet your security needs.</p>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="info contact-info">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1200 1200">
                            <path fill="currentColor"
                                d="M600 0C268.629 0 0 268.629 0 600s268.629 600 600 600s600-268.629 600-600S931.371 0 600 0M384.375 238.33c12.362-.729 23.536 6.66 32.007 19.775l82.031 155.566c8.637 18.434 3.729 38.172-9.155 51.343l-37.573 37.573c-2.319 3.178-3.845 6.757-3.882 10.693c14.409 55.775 58.117 107.223 96.681 142.603c38.562 35.38 80.009 83.281 133.812 94.629c6.65 1.855 14.797 2.52 19.556-1.903l43.652-44.458c15.068-11.421 36.866-16.956 52.954-7.617h.732l148.021 87.378c21.728 13.619 23.979 39.944 8.423 55.957L849.683 941.016c-15.056 15.44-35.058 20.631-54.491 20.654c-85.948-2.575-167.158-44.759-233.862-88.11c-109.49-79.653-209.923-178.446-272.975-297.803c-24.182-50.05-52.589-113.91-49.878-169.774c.242-21.016 5.928-41.605 20.728-55.151l101.953-101.953c7.942-6.758 15.799-10.111 23.217-10.549">
                            </path>
                        </svg>
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-1 gap-lg-3">
                        <a href="tel:+94723555567">+94 72 355 5567</a>
                        <span class="d-none d-lg-block">|</span>
                        <a href="tel:+94112089090">+94 11 2 089 090</a>
                    </div>
                </div>
                <div class="info location-info mb-1">
                    <div class="icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 0C149.3 0 64 85.3 64 192c0 36.9 11 65.4 30.1 94.3l141.7 215c4.3 6.5 11.7 10.7 20.2 10.7s16-4.3 20.2-10.7l141.7-215C437 257.4 448 228.9 448 192C448 85.3 362.7 0 256 0m0 298.6c-58.9 0-106.7-47.8-106.7-106.8S197.1 85 256 85s106.7 47.8 106.7 106.8S314.9 298.6 256 298.6">
                            </path>
                        </svg>
                    </div>
                    <span>No 66A Nalandararama Road, Nugegoda</span>
                </div>
                <div class="info mail-info mb-0">
                    <div class="icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M424 80H88a56.06 56.06 0 0 0-56 56v240a56.06 56.06 0 0 0 56 56h336a56.06 56.06 0 0 0 56-56V136a56.06 56.06 0 0 0-56-56m-14.18 92.63l-144 112a16 16 0 0 1-19.64 0l-144-112a16 16 0 1 1 19.64-25.26L256 251.73l134.18-104.36a16 16 0 0 1 19.64 25.26">
                            </path>
                        </svg>
                    </div>
                    <a href="mailto:xguard.info@gmail.com">xguard.info@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row mx-auto">

            <div class="col-12 col-lg-4">
                <div class="logo-wrapper">
                    <img class="logo" src="{{ asset('img/frontend/logo/white-logo.webp') }}"
                        alt="{{ config('app.name') }}">
                </div>
                <p class="description section-text pt-3 pe-lg-4">
                    At X-GUARD, we are committed to safeguarding your assets and ensuring peace of mind through
                    innovative, reliable, and
                    customized security services.
                </p>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center my-4 mt-lg-0">
                <div class="w-100 px-3">
                    <ul class="menu-list">
                        <li><a href="/">Home</a>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/service">Service</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-4 subscribe mt-4 mt-lg-0">
                <h6>Newsletter</h6>
                <form action="/subscribe" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Address"
                            aria-label="Email Address" name="email" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button class="btn primary-btn" type="submit">Action</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 my-4">
                <hr class="divider">
            </div>

            <div class="col-12 copyright d-lg-flex justify-content-between px-3 px-lg-0">
                <div class="d-flex align-items-center gap-3 justify-content-center justify-content-lg-start">
                    <div>
                        <a href="https://www.facebook.com/XGuard0/" target="_blank" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22 22 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/company/xguard-security-investigations" target="_blank"
                            title="Linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M3.44 4.89c.8 0 1.44-.65 1.44-1.44s-.65-1.44-1.44-1.44S2 2.66 2 3.45s.65 1.44 1.44 1.44m2.81 1.09V14h2.48v-3.96c0-1.05.2-2.06 1.49-2.06s1.29 1.2 1.29 2.12V14H14V9.6c0-2.16-.46-3.82-2.98-3.82c-1.21 0-2.02.66-2.35 1.29h-.03v-1.1H6.26Zm-4.05 0h2.49V14H2.2z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" target="_blank" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-3 mt-lg-0 text-center text-lg-start">
                    <p>Copyright © 2024 Web Crafted By <a class="text-warning" href="https://digitalnext.lk"
                            target="_blank">DIGITALNEXT</a>
                    </p>
                </div>
            </div>

        </div>

    </div>

</footer>
