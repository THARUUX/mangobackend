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


@if ($hasMore)
    <div class="col-12 d-flex justify-content-center mt-4 mt-lg-5">
        <button class="btn primary-btn" onclick="loadMorePosts();">Load More</button>
    </div>
@endif
