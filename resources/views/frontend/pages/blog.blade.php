@extends('frontend.app')
@section('title', 'Blog | X-GUARD - Insights on Security Solutions')
@section('description', 'Stay updated with X-GUARD’s latest insights, tips, and trends on innovative security solutions
    and asset protection.')
@section('keywords', 'X-GUARD blog, security tips, innovative security solutions, asset protection, security trends,
    safeguarding insights')

@section('content')
    <section class="hero-section-2">
        <div class="container">
            <div class="col-xl-8 mx-auto row">
                <div class="col-12 text-center">
                    <h1 class="hero-title">News & Blog</h1>
                    <p class="hero-text">Comprehensive Security Solutions for Every Need</p>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ul class="tab-list px-0">
                        <a href="/blog">
                            <li class="{{ !Request::has('type') ? 'active' : '' }}">
                                All
                            </li>
                        </a>
                        @foreach ($types as $type)
                            <a href="/blog?type={{ $type->name }}">
                                <li class="{{ Request::get('type') == $type->name ? 'active' : '' }}">{{ $type->name }}
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row mx-auto" id="blogContainer">

                @if (count($posts))
                    @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="image">
                                        <div class="category">{{ $post->category->name }}</div>
                                        <img src="{{ asset('uploads/post/' . $post->image) }}" alt="Gallery Image">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">{{ $post->title }}</h3>
                                        <div class="d-flex align-items-center gap-3">
                                            <span class="author">by XGUARD</span>
                                            <span class="date">{{ $post->created_at->format('d M Y') }}</span>
                                        </div>
                                        <div class="text">
                                            {!! $post->short_content !!}
                                        </div>
                                        <a href="blog/{{ $post->slug }}" type="button" class="btn read-more-btn">READ
                                            MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    @if (count($posts) < count($allPosts))
                        <div class="col-12 d-flex justify-content-center mt-4 mt-lg-5">
                            <button class="btn primary-btn" onclick="loadMorePosts();">Load More</button>
                        </div>
                    @endif
                @else
                    <h4 class="text-center text-secondary">No Data</h4>
                @endif
            </div>


        </div>
    </section>
@endsection
