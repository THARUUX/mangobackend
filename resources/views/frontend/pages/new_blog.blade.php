@extends('frontend.new_layout')

@section('title', 'Blog | Happy Mango Tours')
@section('description', 'Explore our travel blog with insights, tips, and stories about Sri Lanka destinations, culture, wildlife, and experiences.')
@section('keywords', 'Happy Mango Tours blog, travel blog, Sri Lanka travel tips, travel insights, Sri Lankan destinations')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-7xl font-black font-pri">Blog</div>
        <div class="text-2xl font-black font-pri">HOME - BLOG</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="py-20 w-full px-5 sm:px-10 flex flex-col bg-white text-black items-center justify-center gap-5">
            <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center">Daily Updates & News</div>
            <div class="sm:w-3/7 flex justify-center text-center font-pri">Our Blog </div>
            <div class="w-full sm:px-20 flex flex-wrap">
                @foreach($posts as $post)
                <div class="sm:w-1/3 p-5 flex flex-col group">
                    <div class="relative">
                        <img src="{{ asset('uploads/'.$post->image) }}" class="w-full" alt="{{ $post->title }}">
                        <div class="absolute top-0 text-white group-hover:bg-[#FF9933] bg-black duration-300 py-3 px-7 font-bold">
                            <div>{{ $post->category->name ?? 'Uncategorized' }}</div>
                        </div>
                    </div>
                    <div class="flex w-full p-5 border border-t-0 flex-col gap-5">
                        <div class="sm:text-2xl text-lg font-bold">{{ $post->title }}</div>
                        <div class="text-sm text-nowrap text-ellipsis overflow-hidden">{{ Str::limit($post->excerpt, 150) }}</div>
                        <div class="pt-5 flex items-center justify-between">
                            <div class="text-sm text-gray-600">{{ $post->created_at->format('d M Y') }}</div>
                            <a href="{{ url('blog/'.$post->slug) }}" class="text-sm font-bold text-blue-500 hover:text-[#FF9933]">Read more ➜</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if(count($allPosts) > count($posts))
            <div class="w-full flex justify-center mt-10">
                <button id="load-more" class="bg-[#ff9933] py-2 rounded-full px-8 cursor-pointer hover:bg-[#ffab57] text-white text-sm">Load more</button>
            </div>
            @endif
        </div>
    </div>
@endsection

@section('additional_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreButton = document.getElementById('load-more');
        if (loadMoreButton) {
            let skip = {{ count($posts) }};
            loadMoreButton.addEventListener('click', function() {
                fetch('{{ url("/blog/loadMore") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        skip: skip,
                        type: '{{ request()->input("type") }}'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.html) {
                        document.querySelector('.w-full.sm\\:px-20.flex.flex-wrap').insertAdjacentHTML('beforeend', data.html);
                        skip += data.count;
                        if (data.remaining <= 0) {
                            loadMoreButton.style.display = 'none';
                        }
                    }
                });
            });
        }
    });
</script>
@endsection
