@extends('frontend.app')
@section('title', 'Home | X-GUARD - Your Security, Our Priority')
@section('description',
    'Welcome to X-GUARD, the trusted provider of tailored security solutions. Protecting what
    matters most with innovative and reliable services.')
@section('keywords',
    'X-GUARD, security solutions, reliable security, innovative protection, security services,
    safeguarding assets')
@section('content')
    <section class="hero-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mx-auto">
                <div class="col-xl-8 position-relative z-2">
                    <h1 class="hero-title">Protect What Matters <br class="d-none d-lg-block"> Most with X-GUARD</h1>
                    <p class="hero-text">Your trusted partner in advanced security solutions.</p>
                    <a href="{{ route('about') }}" type="button" class="btn primary-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row mx-auto align-items-center">
                <div class="col-lg-6">
                    <span class="section-subtitle">About X-GUARD: Your Security, Our Priority</span>
                    <h2 class="section-title">Delivering exceptional security solutions tailored to protect what matters
                        most.</h2>
                    <p class="section-text">At X-GUARD, we are committed to safeguarding you and your assets and ensuring
                        peace of
                        mind through
                        innovative, reliable, and customized security services. With a focus on excellence, our mission is
                        to deliver top-tier protection and safety solutions that meet the unique needs of each client.</p>
                    <a href="{{ route('contact') }}" type="button" class="btn primary-btn mt-4">Contact us Now</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 ps-0 ps-lg-4 mx-auto right-wrapper">
                    <div class="image">
                        <img src="{{ asset('img/frontend/banner/team.jpg') }}" alt="Xguard About">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-6 col-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="71.201" height="81.42" viewBox="0 0 71.201 81.42">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="71.201" height="81.42" fill="#231f20" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path
                                        d="M176.42,240.73,174.2,221.476l.168-.119q.857.875,1.715,1.749c1.1,1.113,1.792,1.025,2.537-.328q3.189-5.794,6.375-11.59c.147-.268.3-.531.539-.945.284,2.1,1.669,2.839,3.366,3.347,2.392.716,4.748,1.55,7.12,2.33,2.078.683,3.156.357,4.53-1.408a12.365,12.365,0,0,1,5.049,7.012,15.082,15.082,0,0,1,.5,3.657c.059,4.245.028,8.491.021,12.737a2.566,2.566,0,0,1-2.8,2.853q-13.157.021-26.314,0c-.163,0-.327-.025-.58-.045"
                                        transform="translate(-134.93 -162.853)" fill="#231f20" />
                                    <path
                                        d="M5.562,214.473c1.6,1.846,2.486,2.078,4.834,1.3,2.371-.783,4.731-1.6,7.119-2.33a3.781,3.781,0,0,0,3.082-3.282c.239.423.382.671.52.922q3.207,5.832,6.414,11.664c.715,1.3,1.429,1.391,2.487.33a14.094,14.094,0,0,1,1.914-1.689c-.738,6.408-1.476,12.815-2.225,19.326h-.96q-12.777,0-25.554,0c-2.263,0-3.182-.917-3.182-3.157,0-4.189-.031-8.379.009-12.568a12.571,12.571,0,0,1,5.141-10.238c.129-.1.269-.188.4-.279m2.9,9.615H20.725v-2.233H8.462Z"
                                        transform="translate(0 -162.791)" fill="#231f20" />
                                    <path
                                        d="M84.712,0a15.413,15.413,0,0,1,2.8.991C93.3,4.4,99.048,7.866,104.8,11.336a2.241,2.241,0,0,1,.431,3.71c-.967.981-1.949,1.95-2.961,2.884a1.216,1.216,0,0,1-.88.289,105.425,105.425,0,0,0-21.778-1.1c-3.783.222-7.55.7-11.322,1.1a1.345,1.345,0,0,1-1.277-.386c-.912-.956-1.889-1.849-2.818-2.789a2.234,2.234,0,0,1,.437-3.7C70.378,7.87,76.129,4.4,81.912.989A15.364,15.364,0,0,1,84.712,0m.035,14.111a4.206,4.206,0,0,0,4.181-4.267,4.218,4.218,0,0,0-8.436.076,4.2,4.2,0,0,0,4.255,4.191"
                                        transform="translate(-49.11)" fill="#231f20" />
                                    <path
                                        d="M92.977,114.2c9.83,6.46,19.5,6.471,29.268.008a18.711,18.711,0,0,1-5.69,12.211,12.679,12.679,0,0,1-6.088,3.268,12.446,12.446,0,0,1-10.8-2.452c-4.177-3.288-6.1-7.775-6.691-13.035"
                                        transform="translate(-72.019 -88.458)" fill="#231f20" />
                                    <path
                                        d="M86.615,87a109.73,109.73,0,0,1,31.842-.052c.3.582,0,.944-.371,1.328a21.733,21.733,0,0,1-29.9.827,8.045,8.045,0,0,1-.962-.941A7.7,7.7,0,0,1,86.615,87"
                                        transform="translate(-67.091 -66.467)" fill="#231f20" />
                                    <path
                                        d="M146.093,242.642a2.28,2.28,0,0,1,1.089,1.942c.758,6.868,1.569,13.731,2.347,20.6a1.192,1.192,0,0,1-.18.83c-.975,1.122-2,2.2-3.057,3.358-1.288-1.26-2.378-2.306-3.436-3.383a.927.927,0,0,1-.174-.674c.441-3.936.9-7.87,1.356-11.8.348-3.014.738-6.024,1.017-9.044a2.427,2.427,0,0,1,1.037-1.823"
                                        transform="translate(-110.517 -187.949)" fill="#231f20" />
                                    <path
                                        d="M128.088,198.885l-8.687-7.458c1.1-.36,2.039-.693,3-.966a1.407,1.407,0,0,1,.722.15,14.733,14.733,0,0,0,9.436.13,3.274,3.274,0,0,1,2.341.051c.566.222,1.149.4,1.865.648l-8.677,7.446"
                                        transform="translate(-92.487 -147.517)" fill="#231f20" />
                                    <path
                                        d="M110.378,207.119l-4.9,4.668-6.71-12.2c.632-.217,1.221-.442,1.826-.61a.687.687,0,0,1,.505.187c3.07,2.624,6.132,5.257,9.279,7.96"
                                        transform="translate(-76.504 -154.116)" fill="#231f20" />
                                    <path
                                        d="M177.377,199.756,170.7,211.909l-4.881-4.654,5.819-5c.958-.823,1.959-1.6,2.862-2.479a1.468,1.468,0,0,1,1.915-.376,7.933,7.933,0,0,0,.966.357"
                                        transform="translate(-128.439 -154.291)" fill="#231f20" />
                                    <path
                                        d="M33.451,206.492a5.623,5.623,0,0,1-.655-.505,1.222,1.222,0,0,1-.193-.461c-.568-1.62-.5-1.757,1.1-2.285q3.753-1.234,7.508-2.463c1.085-.354,1.325-.208,1.73,1.013.41,1.237.31,1.5-.755,1.857q-3.991,1.321-7.988,2.623c-.211.069-.426.127-.75.223"
                                        transform="translate(-25.002 -155.39)" fill="#231f20" />
                                    <path
                                        d="M236.248,200.232c.437.122.655.173.867.243q3.995,1.309,7.987,2.625c1.056.349,1.154.615.74,1.864-.4,1.211-.644,1.355-1.735,1q-3.755-1.229-7.506-2.471c-1.613-.533-1.71-.714-1.056-2.358a3.846,3.846,0,0,1,.7-.9"
                                        transform="translate(-182.158 -155.098)" fill="#231f20" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="card-title">Security Services</h3>
                        <p class="card-text">Comprehensive security solutions including theft and vandalism protection,
                            gate control, personal safety, property safeguarding, and tailored services by elite
                            personnel.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="84.093" height="84.082" viewBox="0 0 84.093 84.082">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="84.093" height="84.082" fill="#fdb016" />
                                    </clipPath>
                                </defs>
                                <g transform="translate(0 0)">
                                    <g transform="translate(0 0)" clip-path="url(#a)">
                                        <path
                                            d="M45.044,78.086a39.465,39.465,0,0,1-19.072-5.117.856.856,0,0,0-1.256.167c-2.68,2.727-5.354,5.461-8.1,8.118A9.691,9.691,0,0,1,.526,77.328,9.161,9.161,0,0,1,2.667,67.75c2.68-2.846,5.493-5.568,8.272-8.319a.912.912,0,0,0,.2-1.323A38.975,38.975,0,0,1,74.483,13.37a38.329,38.329,0,0,1,9.395,21.54A38.968,38.968,0,0,1,53.628,77.06a27.57,27.57,0,0,1-3.011.535c-1.853.2-3.715.331-5.573.49m.1-2.9A36.185,36.185,0,1,0,8.955,39.029,36.182,36.182,0,0,0,45.141,75.183M13.175,61.361c-2.955,2.9-5.925,5.659-8.712,8.6A6.251,6.251,0,0,0,3.144,76.34a6.9,6.9,0,0,0,11.478,2.94c2.607-2.5,5.126-5.1,7.682-7.662.178-.178.341-.374.55-.608a38.778,38.778,0,0,1-9.679-9.649"
                                            transform="translate(0 -0.001)" fill="#fdb016" />
                                        <path
                                            d="M45.829,63.711c.861-1.9,1.508-3.661,2.416-5.27,1.535-2.714,3.159-5.382,4.879-7.982a28.17,28.17,0,0,0,5.09-15.041c.116-4.86-.67-9.518-4.22-13.218s-7.976-4.963-13.012-4.226C30.8,19.467,25.076,25.828,22.288,35.267c-1.376,4.658-1.022,9.372-.21,14.128.616,3.61.762,7.3,1.112,10.955a1.648,1.648,0,0,1-.039.344c-9.6-4.986-17.625-17.951-14.305-32.539A29.954,29.954,0,1,1,45.829,63.711"
                                            transform="translate(7.043 4.186)" fill="#fdb016" />
                                        <path
                                            d="M17.546,21.363c.4-.857.721-1.624,1.119-2.352.088-.159.442-.24.674-.24q13.4-.017,26.8-.021c.548,0,.793.153.81.728.017.6.124,1.207.2,1.885Z"
                                            transform="translate(15.29 16.339)" fill="#fdb016" />
                                        <path
                                            d="M47.752,21.682c-.137.932-.251,1.731-.372,2.573H16.813c.153-.8.283-1.555.457-2.3.024-.11.24-.225.384-.253a3.608,3.608,0,0,1,.7-.019h29.4Z"
                                            transform="translate(14.652 18.887)" fill="#fdb016" />
                                        <path
                                            d="M46.757,24.622a17.811,17.811,0,0,1-.883,2.19c-.125.23-.614.361-.938.363-5.6.021-11.2.015-16.8.015-3.472,0-6.943-.028-10.413.021-.823.011-1.1-.26-1.039-1.035.037-.488.007-.983.007-1.553Z"
                                            transform="translate(14.533 21.456)" fill="#fdb016" />
                                        <path
                                            d="M17.368,30.047c-.146-.816-.292-1.634-.453-2.525H44.1c-.58.883-1.065,1.664-1.6,2.4-.1.14-.419.172-.636.172q-12.037.011-24.072,0a3.479,3.479,0,0,1-.415-.054"
                                            transform="translate(14.74 23.983)" fill="#fdb016" />
                                        <path
                                            d="M44.831,18.434H19.1c.842-.917,1.523-1.7,2.253-2.424a1.155,1.155,0,0,1,.735-.157q10.367-.014,20.736.015a1.356,1.356,0,0,1,.949.537,18.587,18.587,0,0,1,1.054,2.029"
                                            transform="translate(16.648 13.808)" fill="#fdb016" />
                                        <path
                                            d="M17.647,32.915c-.086-.793-.174-1.6-.269-2.478h22.74c-.481.822-.9,1.578-1.368,2.3a.783.783,0,0,1-.58.256q-10.109.017-20.213,0a1.506,1.506,0,0,1-.309-.082"
                                            transform="translate(15.144 26.523)" fill="#fdb016" />
                                        <path
                                            d="M17.726,35.8c-.036-.767-.075-1.572-.116-2.453H36.847c-.335.771-.644,1.542-1.011,2.283a.727.727,0,0,1-.556.268q-8.652.014-17.305,0a1.128,1.128,0,0,1-.249-.094"
                                            transform="translate(15.346 29.06)" fill="#fdb016" />
                                        <path d="M22.653,15.231c4.192-2.2,10.858-3.049,14.678,0Z"
                                            transform="translate(19.741 11.546)" fill="#fdb016" />
                                        <path
                                            d="M19.915,36.24H32.639c.056.054.112.11.17.165-.238.226-.451.61-.717.651a28.612,28.612,0,0,1-12.116-.7c-.017,0-.026-.047-.062-.118"
                                            transform="translate(17.355 31.58)" fill="#fdb016" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h3 class="card-title">Investigations</h3>
                        <p class="card-text">Incident investigations, tracking and tracing, surveillance, statement
                            recording, and coordination with authorities.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="69.355" height="83.226"
                                viewBox="0 0 69.355 83.226">
                                <path
                                    d="M64.225,9.14,36.677.009,9.13,9.14A10.4,10.4,0,0,0,2,19.016V41.591c0,26.091,31.9,40.5,33.27,41.1l1.228.544,1.276-.423c1.373-.458,33.582-11.478,33.582-41.221V19.016a10.4,10.4,0,0,0-7.131-9.877ZM38.217,48.488a6.5,6.5,0,0,1-4.629,1.918h-.114a6.492,6.492,0,0,1-4.664-2.081l-8-8.323,5-4.792L33.6,43.325,51.564,25.358l4.9,4.9Z"
                                    transform="translate(-2 -0.009)" fill="#fdb016" />
                            </svg>
                        </div>
                        <h3 class="card-title">Bouncers</h3>
                        <p class="card-text">Professional, proactive, and polite bouncers for events, clubs, and
                            schools, ensuring safety with intelligence and common sense.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="67.071" height="83.299" viewBox="0 0 67.071 83.299">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="67.071" height="83.299" fill="#fdb016" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path
                                        d="M54.263,0c2,1.335,4,2.677,6.006,4A26.306,26.306,0,0,0,74.905,8.472c1.357.008,2.713-.006,4.07.009a2.4,2.4,0,0,1,2.565,2.387c.056,2.9.017,5.805.013,8.708a1.047,1.047,0,0,1-.084.263H25.706c-.017-.276-.045-.513-.045-.751,0-2.6-.01-5.209,0-7.814a2.516,2.516,0,0,1,2.831-2.8,41.888,41.888,0,0,0,9.474-.625,27.154,27.154,0,0,0,9.058-3.889L52.961,0Z"
                                        transform="translate(-20.077)" fill="#fdb016" />
                                    <path
                                        d="M33.535,147.689H4.809c-3.24,0-4.808-1.555-4.808-4.765q0-12.247,0-24.494c0-2.9,1.642-4.559,4.524-4.559q29.011,0,58.022,0c2.876,0,4.523,1.664,4.524,4.559q0,12.329,0,24.657c0,2.98-1.638,4.6-4.647,4.6q-14.444,0-28.889,0m13.177-13.617c.679,0,1.3.037,1.911-.006a6.308,6.308,0,0,0,.007-12.591c-1.377-.085-2.762-.052-4.144-.041a2.433,2.433,0,0,0-2.656,2.692q-.008,6.665,0,13.331a2.45,2.45,0,1,0,4.88-.009c.009-1.08,0-2.16,0-3.376M19.968,130.71c-.14-.374-.22-.574-.291-.776-.8-2.3-1.582-4.606-2.418-6.892a2.422,2.422,0,0,0-4.586,1.561q2.343,6.875,4.758,13.725a2.622,2.622,0,0,0,2.558,1.789,2.65,2.65,0,0,0,2.607-1.841c1.532-4.537,3.059-9.077,4.525-13.636a2.436,2.436,0,1,0-4.679-1.354c-.8,2.413-1.605,4.821-2.474,7.424m17.027.067H37c0-2.223.009-4.446,0-6.669a2.448,2.448,0,1,0-4.875,0q-.02,6.669,0,13.337a3.367,3.367,0,0,0,.217,1.186,2.413,2.413,0,0,0,4.638-.864c.034-2.331.01-4.662.01-6.994"
                                        transform="translate(0 -89.104)" fill="#fdb016" />
                                    <path
                                        d="M44.548,292.061H92.454c-1.272,1.884-2.357,3.66-3.607,5.311A34.812,34.812,0,0,1,78.358,306.5c-2.769,1.6-5.548,3.185-8.292,4.827a2.939,2.939,0,0,1-3.343-.008c-3.819-2.325-7.765-4.454-11.475-6.938a32.924,32.924,0,0,1-10.4-11.684c-.1-.183-.179-.379-.3-.634"
                                        transform="translate(-34.86 -228.543)" fill="#fdb016" />
                                    <path
                                        d="M214.979,173.927v-2.878c.956.031,1.991-.324,2.6.665a1.7,1.7,0,0,1,.078,1.412c-.549,1.1-1.641.769-2.677.8"
                                        transform="translate(-168.225 -133.82)" fill="#fdb016" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="card-title">VIP Security</h3>
                        <p class="card-text">VIP security provider for national and international events.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="74.065" height="74.041" viewBox="0 0 74.065 74.041">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="74.065" height="74.041" fill="#fdb016" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path
                                        d="M74.064,42.641c-.141.554-.268,1.111-.423,1.661a10.808,10.808,0,0,1-10.269,7.877,50.58,50.58,0,0,1-6.209-.16,10.765,10.765,0,0,1-9.126-10.175,2.682,2.682,0,0,1,.213-1.041q4.6-11.3,9.231-22.6c.088-.216.163-.438.262-.709H43.128A6.638,6.638,0,0,1,39.22,21.4V52.377c4.932,1.766,8.247,5.135,8.329,8.471H26.51c-.055-3.232,3.5-6.853,8.341-8.468v-.763q0-14.723.012-29.446A.973.973,0,0,0,34.2,21.1a6.062,6.062,0,0,1-3.073-3.128c-.137-.3-.236-.517-.65-.515-4.63.018-9.261.011-13.891.013a2.649,2.649,0,0,0-.333.05c.192.484.362.928.543,1.369,2.9,7.059,5.777,14.128,8.725,21.167a5.468,5.468,0,0,1,.324,3.3,10.866,10.866,0,0,1-10.611,8.834,50.253,50.253,0,0,1-5.993-.15A10.747,10.747,0,0,1,0,41.961a2.923,2.923,0,0,1,.22-1.182q4.586-11.272,9.2-22.533c.09-.219.171-.441.289-.747H4.371V13.142H30.887a6.766,6.766,0,0,1,3.679-3.863c.166-.072.27-.464.272-.708.019-2.58.012-5.161.012-7.741V0h4.341V3.474c0,1.712.014,3.425-.01,5.137a.731.731,0,0,0,.521.8,6.031,6.031,0,0,1,3.163,3.132.879.879,0,0,0,.971.592q12.48-.019,24.96-.009h.888V17.43H64.314a5.555,5.555,0,0,0,.155.548Q69.16,29.4,73.858,40.824a3.436,3.436,0,0,0,.207.371ZM5.422,39.128H20.58L13,20.936,5.422,39.128m55.62-18.194L53.469,39.116H68.615L61.042,20.934"
                                        transform="translate(0.001)" fill="#fdb016" />
                                    <path
                                        d="M90.462,346.138a28.78,28.78,0,0,1,.139-3.46,6.33,6.33,0,0,1,6.194-5.351q13.2-.05,26.4,0a6.443,6.443,0,0,1,6.326,6.35c.019.819.006,1.639.007,2.459Z"
                                        transform="translate(-72.975 -272.097)" fill="#fdb016" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="card-title">Law Enforcement and Administrative Support</h3>
                        <p class="card-text">Background checks, complaint filing, document retrieval, and locating
                            individuals for serving notices and summons.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-xl-4 px-0 card">
                    <div class="card-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="73.884" height="72.974" viewBox="0 0 73.884 72.974">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="73.883" height="72.974" fill="#fdb016" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path
                                        d="M58.886,171.859l7.812,22.1.144-.018c.09-1.11.191-2.22.267-3.331.163-2.393.283-4.79.492-7.179a3,3,0,0,1,.617-1.478c.819-1.063,1.727-2.058,2.73-3.232-.809-.758-1.7-1.489-2.469-2.335-1.553-1.713-1.523-2.218.006-3.927,2.017-2.255,3.506-2.237,5.484.066.049.057.1.114.145.172,1.2,1.476,1.217,2.028-.032,3.445-.841.954-1.744,1.852-2.67,2.828.414.473.875,1.052,1.391,1.578a6.408,6.408,0,0,1,1.834,4.576c.083,2.939.395,5.872.61,8.808l.185.048,7.862-22.232c1.665.377,3.3.7,4.91,1.126,1.493.395,2.975.85,4.431,1.365a6.6,6.6,0,0,1,4.624,6.184c.482,5.4,1.091,10.784,1.6,16.18.237,2.511.336,5.035.563,7.547a1.66,1.66,0,0,1-1.221,1.959,43.532,43.532,0,0,1-5.046,1.345A96.721,96.721,0,0,1,77.418,208.8c-5.944.071-11.893.028-17.834-.161a60.072,60.072,0,0,1-13.791-1.764,13.118,13.118,0,0,1-2.145-.86,1.517,1.517,0,0,1-.913-1.645c.312-3.407.58-6.818.917-10.223.448-4.522,1.045-9.032,1.383-13.561a6.3,6.3,0,0,1,3.96-5.7,73.545,73.545,0,0,1,7.366-2.458c.8-.252,1.642-.378,2.525-.576m24.929,14.927c0,.575,0,1.117,0,1.659,0,.989,0,.99.956.991h7.038v-2.65Z"
                                        transform="translate(-33.987 -135.863)" fill="#fdb016" />
                                    <path
                                        d="M144.336,13.129a20.545,20.545,0,0,1-5.369,13.919,10.2,10.2,0,0,1-6.136,3.472,9.279,9.279,0,0,1-7.894-2.826,19.418,19.418,0,0,1-5.612-10.54,17.268,17.268,0,0,1,.272-8.887A11.688,11.688,0,0,1,129.786.094a14.511,14.511,0,0,1,7.063.867c4.7,1.953,6.99,5.652,7.479,10.6.051.519.007,1.048.007,1.573"
                                        transform="translate(-94.566 0)" fill="#fdb016" />
                                    <path
                                        d="M20.086,37.151c-.148,2.108-.28,4.214-.466,6.315a1.219,1.219,0,0,1-.534.708A31.5,31.5,0,0,0,6.06,75.952a11.158,11.158,0,0,1-.092,3.119c-.324,3.023-.7,6.04-1.139,9.073A35.648,35.648,0,0,1,.01,69.165,36.189,36.189,0,0,1,5.687,50.336a36.65,36.65,0,0,1,14.4-13.185"
                                        transform="translate(0 -29.554)" fill="#fdb016" />
                                    <path
                                        d="M279.766,88.549c-.4-4.12-.826-8.237-1.188-12.36a15.824,15.824,0,0,1,.174-2.385c.8-11.963-3.7-21.465-13.278-28.613a1.207,1.207,0,0,1-.472-.746c-.163-2.079-.277-4.162-.4-6.134,17.639,8.551,25.485,31.853,15.164,50.239"
                                        transform="translate(-210.494 -30.476)" fill="#fdb016" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="card-title">Other service</h3>
                        <p class="card-text">Other services for secure and professional
                            assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-section">
        <div class="container">
            <div class="row justify-content-center mx-auto">
                <div
                    class="col-12 d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2 gap-lg-4">
                    <div class="w-100 d-flex justify-content-center card">
                        <div class="d-flex align-items-center mx-auto gap-2">
                            <h3 class="mb-0">125+</h3>
                            <span>Guards</span>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center mt-4 mt-lg-0 card">
                        <div class="d-flex align-items-center mx-auto gap-2">
                            <h3 class="mb-0">25+</h3>
                            <span>Units</span>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center mt-4 mt-lg-0 card">
                        <div class="d-flex align-items-center mx-auto gap-2">
                            <h3 class="mb-0">10+</h3>
                            <span>Sectors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="section-subtitle">About X-GUARD: Your Security, Our Priority</span>
                    <h2 class="section-title">Real Experiences, Trusted Security</h2>
                    <p class="section-text">Discover how X-GUARD has earned the trust of clients through exceptional
                        service and unwavering
                        commitment to safety. Hear from those who rely on us for their security needs.</p>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5">
                <div class="col-10 col-lg-8 col-xxl-7 mx-auto position-relative">
                    <div class="prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="M31 36L19 24l12-12"></path>
                        </svg>
                    </div>
                    <div class="next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="m19 12l12 12l-12 12"></path>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-theme reviews-carousel">
                            <div class="item">
                                <div class="review-card">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="quote">"</div>
                                        <p class="review-text">Their professional and vigilant security personnel have
                                            ensured the safety and security of our premises, they exhibit excellent
                                            communication skills and adaptability when needed.</p>
                                        <div class="quote">"</div>
                                    </div>
                                    <div class="user-info">
                                        <div class="image">
                                            <img src="{{ asset('img/frontend/reviews/arunan-vengadasalam.jpg') }}"
                                                alt="Arunan Vengadasalam">
                                        </div>
                                        <h5 class="name">Arunan Vengadasalam</h5>
                                        <span class="role">Managing Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="section-subtitle">Trusted by Industry Leaders</span>
                    <h2 class="section-title">Our Esteemed Clientele</h2>
                    <p class="section-text">From multinational corporations to local businesses, our clients trust X-GUARD
                        for reliable, top-quality security services. We are honored to protect what matters most to them.
                    </p>
                </div>
            </div>
            <div class="row mt-4 mt-lg-8 mx-auto">
                <div class="col-10 col-lg-8 col-xxl-7 mx-auto position-relative">
                    <div class="prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="M31 36L19 24l12-12"></path>
                        </svg>
                    </div>
                    <div class="next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4" d="m19 12l12 12l-12 12"></path>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-theme clients-carousel">
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/havelock-city.png') }}" alt="Havelock City">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/Span-Tower.png') }}" alt="Span Tower">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/hilton.png') }}" alt="Hilton">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/sunsetblu.jpg') }}" alt="Coir Roots">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/colombo_apartment.jpg') }}"
                                    alt="Colombo Apartment">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/bookpack.jpg') }}" alt="Bookpack">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/ken_tower.jpg') }}" alt="Ken Tower">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/travel_story.jpg') }}" alt="Travel Story">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/astoria.jpg') }}" alt="Astria">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/coir_roots.jpg') }}" alt="Coir Roots">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/mirage.jpg') }}" alt="Mirage Colombo">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/frontend/clients/littlt_england_nursery.jpg') }}"
                                    alt="Littlt England Nursery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
