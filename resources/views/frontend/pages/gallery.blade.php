@extends('frontend.app')
@section('title', 'Gallery | X-GUARD - Visual Showcase of Security Solutions')
@section('description', 'Browse X-GUARD’s gallery to see a visual showcase of our innovative security solutions in
    action.')
@section('keywords', 'X-GUARD gallery, security images, protection showcase, innovative solutions, visual gallery,
    safeguarding visuals')

@section('content')
    <section class="hero-section-2">
        <div class="container">
            <div class="col-xl-8 mx-auto row">
                <div class="col-12 text-center">
                    <h1 class="hero-title">Our Gallery</h1>
                    <p class="hero-text">Comprehensive Security Solutions for Every Need</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="row mx-auto" id="imageContainer">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4">
                        <div class="card">
                            <a href="{{ asset('uploads/album/' . $gallery->image) }}" data-fancybox="images">
                                <div class="card-body">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.22" height="63.374"
                                            viewBox="0 0 79.22 63.374">
                                            <g id="picture" transform="translate(0 -0.119)">
                                                <path id="Shape"
                                                    d="M72.618,63.374H6.6a6.39,6.39,0,0,1-4.663-1.939A6.387,6.387,0,0,1,0,56.773V6.6A6.388,6.388,0,0,1,1.939,1.939,6.39,6.39,0,0,1,6.6,0H72.617a6.384,6.384,0,0,1,4.662,1.939A6.386,6.386,0,0,1,79.22,6.6V56.773a6.62,6.62,0,0,1-6.6,6.6ZM6.6,5.281A1.339,1.339,0,0,0,5.281,6.6V56.773A1.337,1.337,0,0,0,6.6,58.092H72.617a1.335,1.335,0,0,0,1.32-1.319V6.6a1.337,1.337,0,0,0-1.319-1.319Z"
                                                    transform="translate(0 0.119)" fill="#fdb016" />
                                                <path id="Path"
                                                    d="M7.921,15.843a7.639,7.639,0,0,0,5.612-2.31,7.64,7.64,0,0,0,2.31-5.611,7.643,7.643,0,0,0-2.31-5.612A7.642,7.642,0,0,0,7.921,0,7.641,7.641,0,0,0,2.31,2.31,7.641,7.641,0,0,0,0,7.922a7.638,7.638,0,0,0,2.31,5.611A7.64,7.64,0,0,0,7.921,15.843Z"
                                                    transform="translate(10.563 10.681)" fill="#fdb016" />
                                                <path id="Path-2" data-name="Path"
                                                    d="M19.8,21.125l-6.6-6.6L0,27.727v7.922H58.094V17.165L40.93,0Z"
                                                    transform="translate(10.563 17.282)" fill="#fdb016" />
                                            </g>
                                        </svg>
                                    </div>
                                    <img src="{{ asset('uploads/album/' . $gallery->image) }}" alt="Gallery Image">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                @if (count($galleries) < count($allGalleries))
                    <div class="col-12 d-flex justify-content-center mt-4 mt-lg-5">
                        <button class="btn primary-btn" onclick="loadMoreImages();">Load More</button>
                    </div>
                @endif

                <div class="col-lg-4 d-none">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="79.22" height="63.374"
                                    viewBox="0 0 79.22 63.374">
                                    <g id="picture" transform="translate(0 -0.119)">
                                        <path id="Shape"
                                            d="M72.618,63.374H6.6a6.39,6.39,0,0,1-4.663-1.939A6.387,6.387,0,0,1,0,56.773V6.6A6.388,6.388,0,0,1,1.939,1.939,6.39,6.39,0,0,1,6.6,0H72.617a6.384,6.384,0,0,1,4.662,1.939A6.386,6.386,0,0,1,79.22,6.6V56.773a6.62,6.62,0,0,1-6.6,6.6ZM6.6,5.281A1.339,1.339,0,0,0,5.281,6.6V56.773A1.337,1.337,0,0,0,6.6,58.092H72.617a1.335,1.335,0,0,0,1.32-1.319V6.6a1.337,1.337,0,0,0-1.319-1.319Z"
                                            transform="translate(0 0.119)" fill="#fdb016" />
                                        <path id="Path"
                                            d="M7.921,15.843a7.639,7.639,0,0,0,5.612-2.31,7.64,7.64,0,0,0,2.31-5.611,7.643,7.643,0,0,0-2.31-5.612A7.642,7.642,0,0,0,7.921,0,7.641,7.641,0,0,0,2.31,2.31,7.641,7.641,0,0,0,0,7.922a7.638,7.638,0,0,0,2.31,5.611A7.64,7.64,0,0,0,7.921,15.843Z"
                                            transform="translate(10.563 10.681)" fill="#fdb016" />
                                        <path id="Path-2" data-name="Path"
                                            d="M19.8,21.125l-6.6-6.6L0,27.727v7.922H58.094V17.165L40.93,0Z"
                                            transform="translate(10.563 17.282)" fill="#fdb016" />
                                    </g>
                                </svg>
                            </div>
                            <img src="{{ asset('img/frontend/gallery/default.jpg') }}" alt="Default Image">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
