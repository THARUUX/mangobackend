@extends('frontend.app')
@section('title', 'About Us | X-GUARD - Trusted Security Solutions')
@section('description', 'Learn about X-GUARD, our mission to provide top-tier security solutions, and how we ensure the
    safety of your assets.')
@section('keywords', 'X-GUARD, about X-GUARD, security mission, trusted security services, safeguarding assets,
    innovative security solutions')

@section('content')
    <section class="hero-section-2">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-xl-8 mx-auto text-center">
                    <h1 class="hero-title">About us</h1>
                    <p class="hero-text">Comprehensive Security Solutions for Every Need</p>
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
                <div class="col-lg-6 mt-4 mt-lg-0 ps-0 ps-lg-4 right-wrapper">
                    <div class="image">
                        <img src="{{ asset('img/frontend/banner/security-men.jpg') }}" alt="Xguard About">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Our Vision & Mission</h2>
                    <p class="section-text">Our vision is to create safer environments, and our mission is to provide
                        reliable, innovative security services that protect and inspire trust.</p>
                </div>
            </div>
            <div class="row mx-auto mt-4 mt-lg-5">
                <div class="col-12 col-xl-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49.374" height="49.374"
                                    viewBox="0 0 49.374 49.374">
                                    <path id="vision-target"
                                        d="M0,14.4V10.286A10.3,10.3,0,0,1,10.286,0H14.4a2.057,2.057,0,0,1,0,4.115H10.286a6.179,6.179,0,0,0-6.172,6.172V14.4A2.057,2.057,0,0,1,0,14.4Zm24.687,6.172A4.115,4.115,0,1,0,28.8,24.687,4.113,4.113,0,0,0,24.687,20.573ZM14.4,45.26H10.286a6.179,6.179,0,0,1-6.172-6.172V34.973a2.057,2.057,0,1,0-4.115,0v4.115A10.3,10.3,0,0,0,10.286,49.374H14.4a2.057,2.057,0,1,0,0-4.115ZM39.088,0H34.973a2.057,2.057,0,1,0,0,4.115h4.115a6.179,6.179,0,0,1,6.172,6.172V14.4a2.057,2.057,0,1,0,4.115,0V10.286A10.3,10.3,0,0,0,39.088,0Zm-14.4,37.031c-9.416,0-15.473-8.272-16.579-10.486a4.114,4.114,0,0,1,0-3.713c1.1-2.216,7.159-10.488,16.579-10.488s15.475,8.272,16.579,10.488h0a4.126,4.126,0,0,1,0,3.707c-1.107,2.218-7.161,10.49-16.581,10.49Zm12.9-12.36c-.675-1.352-5.629-8.213-12.9-8.213s-12.224,6.861-12.9,8.213c.675,1.387,5.631,8.245,12.9,8.245S36.911,26.02,37.586,24.671Zm9.731,8.245a2.058,2.058,0,0,0-2.057,2.057v4.115a6.179,6.179,0,0,1-6.172,6.172H34.973a2.057,2.057,0,1,0,0,4.115h4.115A10.3,10.3,0,0,0,49.374,39.088V34.973A2.058,2.058,0,0,0,47.317,32.916Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Our Vision</h3>
                                <p class="card-text">To be the most dynamic security service provider to meet evolving
                                    demands of our stakeholders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-11 mx-auto mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46.726" height="46.726"
                                    viewBox="0 0 46.726 46.726">
                                    <path id="flag"
                                        d="M29.2,5.841A5.841,5.841,0,0,0,23.363,0H0V46.726H3.894V25.31H19.469v1.947A5.841,5.841,0,0,0,25.31,33.1H46.726V7.788H29.2ZM3.894,3.894H23.363A1.947,1.947,0,0,1,25.31,5.841V21.416H3.894Zm38.938,7.788V29.2H25.31a1.947,1.947,0,0,1-1.947-1.947V25.31H29.2V11.681Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Our Mission</h3>
                                <p class="card-text">To benchmark the delivery of seamless security services, investigation
                                    services, other related services while upholding the best practices in people management
                                    and corporate environmental management within the private security industry under the
                                    umbrella of National Security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Core Values</h2>
                    <p class="section-text">At X-Guard Security, our core values—professionalism, integrity, dignity, and
                        honesty—drive our commitment to safeguarding what matters most.</p>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="49.994" height="49.994"
                                    viewBox="0 0 49.994 49.994">
                                    <path id="briefcase"
                                        d="M39.578,8.332H37.287A10.434,10.434,0,0,0,27.08,0H22.914A10.434,10.434,0,0,0,12.707,8.332H10.415A10.428,10.428,0,0,0,0,18.748V39.578A10.428,10.428,0,0,0,10.415,49.994H39.578A10.428,10.428,0,0,0,49.994,39.578V18.748A10.428,10.428,0,0,0,39.578,8.332ZM22.914,4.166H27.08a6.249,6.249,0,0,1,5.866,4.166h-15.9A6.249,6.249,0,0,1,22.914,4.166ZM10.415,12.5H39.578a6.249,6.249,0,0,1,6.249,6.249V25H4.166V18.748A6.249,6.249,0,0,1,10.415,12.5ZM39.578,45.828H10.415a6.249,6.249,0,0,1-6.249-6.249V29.163H22.914v2.083a2.083,2.083,0,0,0,4.166,0V29.163H45.828V39.578A6.249,6.249,0,0,1,39.578,45.828Z"
                                        fill="#fdb016" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Professionalism</h3>
                                <p class="card-text">Delivering exceptional service with precision and dedication.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="57.401" height="52.697"
                                    viewBox="0 0 57.401 52.697">
                                    <g id="Group_33" data-name="Group 33" transform="translate(-514 -2045)">
                                        <path id="heart-partner-handshake"
                                            d="M57.4,17.743a20.8,20.8,0,0,1-1.822,8.113,2.392,2.392,0,0,1-4.4-1.875,16.13,16.13,0,0,0,1.44-6.238c0-6.482-4.929-11.959-10.763-11.959A14.392,14.392,0,0,0,31.413,9.836l-9.146,8.488a2.567,2.567,0,0,0-.39,3.181,2.39,2.39,0,0,0,1.767,1.012,2.345,2.345,0,0,0,1.885-.694l9.981-9.555a2.392,2.392,0,1,1,3.308,3.456l-2.961,2.834L47.21,28.523a7.2,7.2,0,0,1,1.524,9.117,7.038,7.038,0,0,1-4.939,3.243c-.139.019-.275.036-.414.048a6.73,6.73,0,0,1-1.009,3.528,7,7,0,0,1-6.262,3.31,6.935,6.935,0,0,1-6.9,5.927,6.986,6.986,0,0,1-4.618-1.741L17.163,45.3C9.33,38.217,0,27.7,0,17.743,0,8.511,6.974,1,15.546,1a14.307,14.307,0,0,1,5.733,1.2,2.392,2.392,0,1,1-1.9,4.389,9.58,9.58,0,0,0-3.834-.8c-5.833,0-10.763,5.477-10.763,11.959,0,6.4,5.532,14.917,15.582,24l7.4,6.635a2.223,2.223,0,0,0,3.348-.536,2.415,2.415,0,0,0-.624-2.982l-7.67-7.292A2.392,2.392,0,0,1,26.108,34.1l8.9,8.4a2.18,2.18,0,0,0,1.727.469,2.223,2.223,0,0,0,1.579-1.048,2.419,2.419,0,0,0-.624-2.985l-8.515-7.709a2.391,2.391,0,0,1,3.2-3.559l8.95,7.964a2.19,2.19,0,0,0,1.777.517A2.223,2.223,0,0,0,44.677,35.1a2.419,2.419,0,0,0-.624-2.985L32.386,21.879l-3.516,3.365a7.174,7.174,0,0,1-10.88-.945,7.375,7.375,0,0,1,.952-9.421l9.22-8.558A19.114,19.114,0,0,1,41.85,1C50.422,1,57.4,8.509,57.4,17.741Z"
                                            transform="translate(514 2044.001)" fill="#fdb016" />
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Integrity</h3>
                                <p class="card-text">Acting with honesty, transparency, and accountability in all we do.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg id="Group_35" data-name="Group 35" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="61.851" height="61.851"
                                    viewBox="0 0 61.851 61.851">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_15" data-name="Rectangle 15" width="61.851" height="61.851"
                                                fill="#fdb016" stroke="#fdb016" stroke-width="1" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_34" data-name="Group 34" clip-path="url(#clip-path)">
                                        <path id="Path_55" data-name="Path 55"
                                            d="M16.546,226.769a13.4,13.4,0,0,1,.575,2.171,2.435,2.435,0,0,1-1.538,2.556c-1.495.68-3.016,1.309-4.549,1.9a2.691,2.691,0,0,1-3.522-1.619c-1.47-3.489-2.918-6.988-4.375-10.483q-1.416-3.4-2.831-6.8a2.755,2.755,0,0,1,1.646-3.95q1.872-.781,3.748-1.552a2.771,2.771,0,0,1,4.038,1.671c.088.208.178.416.288.674.222-.094.408-.166.587-.251,2.67-1.267,5.336-2.542,8.009-3.8a9.572,9.572,0,0,1,9.916.663,15.517,15.517,0,0,0,4.731,1.831c1.585.43,3.174.846,4.762,1.269a4.576,4.576,0,0,1,2.87,2.062.6.6,0,0,0,.842.313c3.768-1.118,7.534-2.238,11.315-3.311a10.38,10.38,0,0,1,5.242-.344,4.269,4.269,0,0,1,3.338,5.636,5.893,5.893,0,0,1-3.618,4.119q-9.858,3.824-19.743,7.577a11.169,11.169,0,0,1-5,.925,21.709,21.709,0,0,1-3.645-.776c-2.326-.636-4.638-1.326-6.95-2.012a4.6,4.6,0,0,0-3.573.284c-.847.439-1.716.837-2.568,1.25m-.769-1.6c.921-.446,1.782-.857,2.638-1.279a6.11,6.11,0,0,1,4.669-.382c1.152.355,2.315.676,3.473,1.013,1.737.505,3.475,1.007,5.21,1.518a8.78,8.78,0,0,0,5.686-.537c6.678-2.513,13.332-5.088,19.986-7.664a4.108,4.108,0,0,0,2.5-2.941,2.437,2.437,0,0,0-2.123-3.384,8,8,0,0,0-3.216.085c-4.22,1.12-8.4,2.369-12.6,3.6-.151.044-.309.357-.318.551a4.735,4.735,0,0,1-5.951,4.473c-2.5-.642-4.984-1.326-7.475-1.994-1.125-.3-2.252-.593-3.37-.92a.845.845,0,0,1-.66-1.091.886.886,0,0,1,1.134-.6c.162.037.322.084.483.127q5.093,1.36,10.186,2.719a2.95,2.95,0,1,0,1.541-5.688c-1.7-.467-3.419-.9-5.12-1.381a13.477,13.477,0,0,1-4.394-1.668,8.419,8.419,0,0,0-9.2-.613c-2.589,1.29-5.216,2.5-7.825,3.753-.09.043-.173.1-.305.177l5.051,12.127M7,210.408c-.122.041-.322.1-.513.174-1.307.54-2.615,1.078-3.917,1.63-.807.342-.973.761-.629,1.587q3.572,8.586,7.152,17.168c.354.849.751,1,1.625.645q1.906-.779,3.807-1.57c.851-.355,1.031-.778.684-1.619-.683-1.653-1.375-3.3-2.063-4.954q-2.53-6.078-5.056-12.158a1.206,1.206,0,0,0-1.089-.9"
                                            transform="translate(0 -171.735)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                        <path id="Path_56" data-name="Path 56"
                                            d="M176.849,6.471c-1.742,0-3.406-.007-5.07.015-.12,0-.289.2-.348.341a3.453,3.453,0,0,1-2.022,2.012c-.355.133-.408.324-.408.65q.011,7.511-.007,15.021a.706.706,0,0,0,.541.763c2.044.826,4.079,1.673,6.118,2.512.982.4,1.071.532,1.072,1.569,0,.355.011.71,0,1.064a.96.96,0,0,1-1.046,1.058c-.145.01-.292,0-.438,0H161.033c-1.282,0-1.466-.195-1.473-1.5-.011-2-.063-1.718,1.637-2.432q2.762-1.16,5.545-2.272a.7.7,0,0,0,.518-.78q-.025-7.479,0-14.958a.643.643,0,0,0-.472-.733,3.434,3.434,0,0,1-1.934-1.938c-.072-.167-.293-.38-.448-.383-1.624-.028-3.248-.017-4.972-.017.093.279.154.488.231.69,1.158,3.054,2.281,6.123,3.5,9.154a4.015,4.015,0,0,1-.055,3.144,5.376,5.376,0,0,1-10.368-1.83,2.65,2.65,0,0,1,.185-.9q1.805-4.788,3.632-9.568c.072-.19.13-.386.231-.687-.912,0-1.756,0-2.6,0a3.471,3.471,0,0,1-.746-.039.821.821,0,0,1-.711-.889.8.8,0,0,1,.706-.827,3.426,3.426,0,0,1,.684-.047c3.338,0,6.675-.007,10.012.005a.683.683,0,0,0,.785-.495,3.19,3.19,0,0,1,1.91-1.869c.334-.128.464-.283.432-.631A4.114,4.114,0,0,1,167.26.8a.818.818,0,0,1,.87-.8c.513,0,.9.3.847.8a1.654,1.654,0,0,0,1.1,1.9,3.578,3.578,0,0,1,1.26,1.485.775.775,0,0,0,.788.495c3.338-.016,6.675-.01,10.012-.009.987,0,1.42.288,1.4.927-.015.613-.431.877-1.388.878h-2.693c.6,1.585,1.166,3.079,1.733,4.571.643,1.692,1.229,3.409,1.949,5.068a4.369,4.369,0,0,1-.755,4.667,5.356,5.356,0,0,1-5.774,1.839,5.443,5.443,0,0,1-3.832-4.77,2.56,2.56,0,0,1,.167-1.03c1.2-3.194,2.417-6.38,3.629-9.569.087-.229.163-.463.272-.772m1.316,1.592L174.959,16.5h6.411l-3.205-8.434M154.9,16.492h6.409l-3.143-8.254-.143.034-3.123,8.22m19.955,13.152.064-.156a2.746,2.746,0,0,0-.385-.239c-2.017-.837-4.033-1.674-6.057-2.491a.943.943,0,0,0-.642-.012c-2.063.831-4.118,1.682-6.171,2.536a3,3,0,0,0-.47.361Zm-20.2-11.281a3.517,3.517,0,0,0,3.815,2.672c1.459-.083,3.006-1.465,3.037-2.672Zm26.945.031h-6.87a3.552,3.552,0,0,0,6.87,0M169.879,5.567a1.713,1.713,0,0,0-1.745-1.731,1.733,1.733,0,1,0,0,3.465,1.723,1.723,0,0,0,1.747-1.734"
                                            transform="translate(-127.191 0.001)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Dignity</h3>
                                <p class="card-text">Respecting and valuing everyone we serve and work with.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg id="Group_38" data-name="Group 38" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="61.904" height="74.387"
                                    viewBox="0 0 61.904 74.387">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_20" data-name="Rectangle 20" width="61.904"
                                                height="74.387" fill="#fdb016" stroke="#fdb016" stroke-width="1" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_37" data-name="Group 37" clip-path="url(#clip-path)">
                                        <path id="Path_57" data-name="Path 57"
                                            d="M27.322,0c.454.145.911.281,1.361.436a7.922,7.922,0,0,1,3.491,2.5A4.413,4.413,0,0,0,33.475,4C35.615,5.111,37.29,6.6,37.71,9.094a8.973,8.973,0,0,1-.781,5.236c-.685,1.514-1.531,2.955-2.276,4.443a2.884,2.884,0,0,0-.322,1.147,18.95,18.95,0,0,1-.457,5.324,10.422,10.422,0,0,1-2.9,4.612,1.345,1.345,0,0,0-.515,1.185c.04.6.009,1.2.009,1.872,1.126,0,2.162.014,3.2,0a13.239,13.239,0,0,1,11.1,5.109,12.632,12.632,0,0,1,2.837,7.835c.071,3.775.022,7.552.022,11.328,0,.117-.023.234-.041.4H45.4c0-.289,0-.571,0-.853-.014-3.8.058-7.6-.064-11.4a10.871,10.871,0,0,0-9.066-10.011c-1.929-.256-3.9-.185-5.807-.261-1.616,4.044-3.55,5.626-6.724,5.588-3.147-.039-5.144-1.715-6.535-5.525-2.408.1-4.858-.261-7.247.512A11.1,11.1,0,0,0,2.223,46.2q-.068,9.985,0,19.97A5.608,5.608,0,0,0,5.835,71.71a5.525,5.525,0,0,0,6.4-1.317c3.772-3.759,7.494-7.568,11.235-11.357.084-.085.161-.178.178-.2l-5.085-5.076L7.087,65.057,5.518,63.51c1.128-1.126,2.227-2.249,3.36-3.337a1.515,1.515,0,0,0,.5-1.206c-.018-3.946-.01-7.891-.01-11.837v-.891h2.21V57.494c.312-.284.5-.441.671-.612q5.844-5.761,11.688-11.521a5.738,5.738,0,1,1,8.205,8.023c-2.712,2.8-5.469,5.553-8.207,8.326-3.367,3.41-6.712,6.844-10.11,10.224A8.01,8.01,0,0,1,2.164,71.8,7.4,7.4,0,0,1,.038,66.624C0,59.629-.03,52.633.043,45.638A13.231,13.231,0,0,1,11,33.137a29.382,29.382,0,0,1,3.252-.217c.939-.034,1.88-.007,2.912-.007,0-.809.022-1.55-.016-2.289a.911.911,0,0,0-.331-.515,10.546,10.546,0,0,1-3.608-8.375c.038-2.081.008-4.163.006-6.245,0-.3.067-.6-.41-.691-3.091-.612-4.722-2.709-5.339-5.616a26.053,26.053,0,0,1-.363-4.538C7.057,3.1,7.119,1.548,7.131,0h6.1V2.2H9.313c0,1.549-.032,3.045.014,4.538a11,11,0,0,0,.307,2.149,4.423,4.423,0,0,0,3.443,3.7,8.58,8.58,0,0,0,1.8.177c4.334.015,8.667.037,13,0a5.6,5.6,0,0,1,4.9,2.6c.234.332.445.681.707,1.085a15.6,15.6,0,0,0,2.014-5.055,4.451,4.451,0,0,0-2.306-5.021c-.517-.3-1.095-.505-1.626-.789a1.633,1.633,0,0,1-.632-.521,5.591,5.591,0,0,0-5.11-2.878q-4.794.007-9.587,0h-.823V0ZM15.405,14.954c0,2.409-.006,4.727.005,7.044a9.29,9.29,0,0,0,.115,1.368,8.318,8.318,0,0,0,16.331.76,24.983,24.983,0,0,0,.27-4.031,5.575,5.575,0,0,0-1.639-4.049,3.141,3.141,0,0,0-2.5-1.1c-3.1.012-6.192,0-9.288,0H15.405m9.988,42.07c.825-.811,1.691-1.652,2.545-2.505.923-.923,1.863-1.831,2.744-2.793a3.514,3.514,0,0,0-.033-4.857,3.385,3.385,0,0,0-4.717-.3c-1.882,1.8-3.6,3.773-5.349,5.632l4.81,4.824M19.461,31.83a27.6,27.6,0,0,0,.017,2.916,4.352,4.352,0,0,0,4.848,3.674c3.516-.576,4.356-3.523,3.755-6.589a10.944,10.944,0,0,1-8.62,0"
                                            transform="translate(0)" fill="#fdb016" stroke="#fdb016" stroke-width="1" />
                                        <path id="Path_58" data-name="Path 58"
                                            d="M217.369,97.142a5.93,5.93,0,0,1,3.252.88.766.766,0,0,0,.908-.022c3.428-1.909,7.921-.612,9.471,2.738a7.6,7.6,0,0,1-.122,6.129,12.7,12.7,0,0,1-5.249,6.122,45.553,45.553,0,0,1-4.079,2.188,1.105,1.105,0,0,1-.817.063,18,18,0,0,1-8.2-6,9.154,9.154,0,0,1-1.88-6.883c.5-3.191,3.125-5.223,6.719-5.221m3.538,3.9c-.1-.092-.292-.273-.487-.451a4.694,4.694,0,0,0-3.516-1.264,4.077,4.077,0,0,0-4.147,4.348,8.015,8.015,0,0,0,1.763,4.519,16.168,16.168,0,0,0,6.211,4.643.994.994,0,0,0,.791-.046,38.619,38.619,0,0,0,3.7-2.268A9.725,9.725,0,0,0,229.2,104.9c.859-3.673-1.938-6.433-5.549-5.381a14.388,14.388,0,0,0-2.741,1.523"
                                            transform="translate(-169.689 -78.269)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                        <rect id="Rectangle_16" data-name="Rectangle 16" width="2.092" height="28.102"
                                            transform="translate(36.089 46.238)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                        <rect id="Rectangle_17" data-name="Rectangle 17" width="2.148" height="14.488"
                                            transform="translate(45.463 59.825)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                        <rect id="Rectangle_18" data-name="Rectangle 18" width="2.085" height="2.103"
                                            transform="translate(48.138 26.169)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                        <rect id="Rectangle_19" data-name="Rectangle 19" width="2.096" height="2.086"
                                            transform="translate(52.493 26.191)" fill="#fdb016" stroke="#fdb016"
                                            stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="card-title">Honesty</h3>
                                <p class="card-text">Building trust through clear, truthful, and open communication.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Our Team</h2>
                    <p class="section-text">Our dedicated team of professionals brings expertise, integrity, and commitment
                        to delivering top-tier security solutions.</p>
                </div>
            </div>
            <div class="row mx-auto mt-4 mt-lg-5">
                <div class="owl-carousel owl-theme team-carousel">
                    <div class="col-12 item">
                        <div class="row">
                            <div class="col-12 col-lg-6 left-wrapper">
                                <div class="image">
                                    <img src="{{ asset('img/frontend/team/buveendra-illangage.jpg') }}"
                                        alt="Buveendra Illangage">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0 right-wrapper">
                                <h3 class="name">Mr. Buveendra Illangage</h3>
                                <span class="position">Chairman & Managing Director</span>
                                <p class="description">Buveendra Illangage is the Founder Managing Director of two
                                    companies X
                                    Guard
                                    (Pvt) Ltd and
                                    Apeiro (Pvt) Ltd, and the partner of a law firm Weragoda & Illangage Associates. He
                                    is a
                                    lawyer
                                    by profession specialising in commercial law. He has previously served as the
                                    General
                                    Manager at
                                    a leading UK based Conveyancing Firm operating in Sri Lanka, the Assistant General
                                    Manager
                                    at
                                    Maga Engineering (Pvt) Ltd overseeing Legal, HR and Administration, and prior to
                                    that as
                                    a
                                    Head
                                    of Operations for Colombo and AVP – Operations at Colombo at two other leading
                                    international companies. He has a number of years of court experience with him with
                                    nearly
                                    15
                                    years as an Attorney at Law, as well extensive experience in Administration, Human
                                    Resources
                                    Management, in Logistics, and Insurance. He holds a law degree from the University
                                    of
                                    London. He
                                    is an old boy of the Royal College Colombo., and a Life Member of the Bar
                                    Association of
                                    Sri
                                    Lanka.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 item">
                        <div class="row">
                            <div class="col-12 col-lg-6 left-wrapper">
                                <div class="image">
                                    <img src="{{ asset('img/frontend/team/nuwan-jayawickrama.jpg') }}"
                                        alt="Nuwan Jayawickrama">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0 right-wrapper">
                                <h3 class="name">Mr. Nuwan Jayawickrama</h3>
                                <span class="position">Director Operations, HR & Administration</span>
                                <p class="description">Wing Commander (Retd) Nuwan Jayawickrama MSc, MHRM,
                                    BSc, USP, psc has altogether 25 years of experience in
                                    defence management and commercial security operations. He
                                    is a graduate of Defence Service Staff College of Sri Lanka, Sir
                                    John Kotelawala Defence University and Indian Air Force
                                    Intelligence School, Pune India. He holds Master’s Degrees in
                                    Defence & Strategic Studies from Sir John Kotelawala Defence
                                    University (KDU), Human Resource Management from
                                    University of Colombo and Bachelor’s Degree in Management
                                    Defence Studies) from KDU. He is a proud product of Maliyadeva Boys’ College
                                    Kurunegala and Pinnawala Central College, Rambukkana. He is an Associate
                                    Member of the Chartered Institute of Personal Management and a Member of
                                    Institute of Chartered Professional Managers of Sri Lanka. He has been awarded
                                    with Uththama Seva Padakkama for his unblemished record of conduct in the
                                    Sri Lanka Air Force from 1999 to 2021.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 item">
                        <div class="row">
                            <div class="col-12 col-lg-6 left-wrapper">
                                <div class="image">
                                    <img src="{{ asset('img/frontend/team/nelusha-pushpawela.jpg') }}"
                                        alt="Nelusha Pushpawela">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0 right-wrapper">
                                <h3 class="name">Mr. Nelusha Pushpawela</h3>
                                <span class="position">Business Development</span>
                                <p class="description">Nelusha Pushpawela is a Business Development Director at XGuard with
                                    over a decade of experience in Business Process Outsourcing (BPO) and the security
                                    industry. He has managed large teams, focusing on process improvement, standardization,
                                    documentation, and enhancing operational efficiency. Nelusha's results-driven approach
                                    and strategic vision have contributed to XGuard's growth and success, with a strong
                                    commitment to innovation and client satisfaction. Buveendra Illangage, the Founder and
                                    Managing Director of XGuard and Apeiro (Pvt) Ltd, is a lawyer specializing in commercial
                                    law. He has served in leadership roles, including General Manager at a UK-based
                                    Conveyancing Firm and Assistant General Manager at Maga Engineering. With nearly 15
                                    years as an Attorney, he holds a law degree from the University of London and is a Life
                                    Member of the Bar Association of Sri Lanka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-center gap-3 mt-4">
                    <div>
                        <div class="prev-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="4" d="M31 36L19 24l12-12"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <div class="next-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="4" d="m19 12l12 12l-12 12"></path>
                            </svg>
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
            <div class="row mx-auto mt-4 mt-lg-8">
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
