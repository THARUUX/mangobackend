@extends('frontend.app')
@section('title', $post->title . ' | X-GUARD Blog')
@section('description', $post->description)
@section('keywords',
    'X-GUARD blog, security insights, asset protection, innovative security, security trends,
    safeguarding tips')
@section('content')
    <section class="hero-section-2 blog-detail">
        <div class="container">
            <div class="col-xl-8 mx-auto row">
            </div>
        </div>
    </section>

    <section class="blog-detail-section">
        <div class="container">
            <div class="col-lg-10 mx-auto row mx-auto align-items-center info">
                <div class="col-lg-5">
                    <div class="thumbnail">
                        <img src="{{ asset('uploads/post/' . $post->image) }}" alt="Blog">
                    </div>
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <span class="category">{{ $post->category->name }}</span>
                    <h1 class="title">{{ $post->title }}</h1>
                    <div class="d-flex align-items-center gap-2 author">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.008" height="16.01" viewBox="0 0 12.008 16.01">
                            <g id="user" transform="translate(-3)">
                                <path id="Path_63" data-name="Path 63"
                                    d="M10,8.005A4,4,0,1,0,6,4a4,4,0,0,0,4,4Zm0-6.671A2.668,2.668,0,1,1,7.334,4,2.668,2.668,0,0,1,10,1.334Z"
                                    transform="translate(-0.999)" fill="#fdb016" />
                                <path id="Path_64" data-name="Path 64"
                                    d="M9,14a6.011,6.011,0,0,0-6,6,.667.667,0,1,0,1.334,0,4.67,4.67,0,1,1,9.339,0,.667.667,0,0,0,1.334,0A6.011,6.011,0,0,0,9,14Z"
                                    transform="translate(0 -4.661)" fill="#fdb016" />
                            </g>
                        </svg>
                        <span>by XGUARD</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 date">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15"
                            height="15" viewBox="0 0 15 15">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_21" data-name="Rectangle 21" width="15" height="15"
                                        transform="translate(-0.202 -0.202)" fill="#fdb016" />
                                </clipPath>
                            </defs>
                            <g id="Group_41" data-name="Group 41" transform="translate(243.882 -871.118)">
                                <g id="Group_40" data-name="Group 40" transform="translate(-243.68 871.32)">
                                    <g id="Group_39" data-name="Group 39" clip-path="url(#clip-path)">
                                        <path id="Path_59" data-name="Path 59"
                                            d="M10.647,1.121h-.56V.56a.56.56,0,0,0-1.121,0v.56H4.483V.56a.56.56,0,1,0-1.121,0v.56H2.8A2.805,2.805,0,0,0,0,3.923v6.724a2.805,2.805,0,0,0,2.8,2.8h7.845a2.805,2.805,0,0,0,2.8-2.8V3.923a2.805,2.805,0,0,0-2.8-2.8m-9.526,2.8A1.681,1.681,0,0,1,2.8,2.241h7.845a1.681,1.681,0,0,1,1.681,1.681v.56H1.121Zm9.526,8.406H2.8a1.681,1.681,0,0,1-1.681-1.681V5.6H12.328v5.043a1.681,1.681,0,0,1-1.681,1.681"
                                            transform="translate(0.543 0.543)" fill="#fdb016" />
                                        <path id="Path_60" data-name="Path 60"
                                            d="M224.841,288a.841.841,0,1,1-.841.841.841.841,0,0,1,.841-.841"
                                            transform="translate(-217.573 -279.892)" fill="#fdb016" />
                                        <path id="Path_61" data-name="Path 61"
                                            d="M118.174,288a.841.841,0,1,1-.841.841.841.841,0,0,1,.841-.841"
                                            transform="translate(-113.708 -279.892)" fill="#fdb016" />
                                        <path id="Path_62" data-name="Path 62"
                                            d="M331.508,288a.841.841,0,1,1-.841.841.841.841,0,0,1,.841-.841"
                                            transform="translate(-321.438 -279.892)" fill="#fdb016" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 mx-auto row content">

                <div class="col-12 mt-4 mt-lg-5">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section recent-blog-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-12 text-center">
                    <h2 class="section-title">Recent News & Blog</h2>
                    <p class="section-text">Comprehensive Security Solutions for Every Need</p>
                </div>
            </div>
            <div class="row mx-auto mt-4 mt-lg-5">

                @foreach ($recents as $recent)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="image">
                                    <div class="category">{{ $recent->category->name }}</div>
                                    <img src="{{ asset('uploads/post/' . $recent->image) }}" alt="Gallery Image">
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ $recent->title }}</h3>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="author">by XGUARD</span>
                                        <span class="date">{{ $post->created_at->format('d M Y') }}</span>
                                    </div>
                                    <div class="text">{!! $recent->short_content !!}</div>
                                    <a href="/blog/{{ $recent->slug }}" type="button" class="btn read-more-btn">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (count($recents) <= 0)
                    <div class="col-12">
                        <p class="text-secondary text-center">No Any Recent Posts</p>
                    </div>
                @endif

            </div>
        </div>
    </section>
    </section>
@endsection