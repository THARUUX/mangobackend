@extends('frontend.new_layout')

@section('title', '{{ $post->title }} | Happy Mango Tours Blog')
@section('description', '{{ Str::limit(strip_tags($post->content), 160) }}')
@section('keywords', 'Happy Mango Tours, {{ $post->title }}, Sri Lanka travel blog, {{ $post->category->name ?? "travel" }}')

@section('content')
    <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
        <div class="text-5xl sm:text-7xl text-center font-black font-pri">{{ $post->title }}</div>
        <div class="text-xl sm:text-2xl font-black font-pri">Home - Blog</div>
    </div>
    <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
        <div class="w-full sm:p-10 sm:py-20 bg-white flex flex-col sm:flex-row">
            <div class="w-full sm:w-5/7 p-10 sm:py-20 flex flex-col gap-5 sm:gap-20 text-black text-sm">
                <img src="{{ asset('uploads/'.$post->image) }}" class="w-full" alt="{{ $post->title }}">

                <div class="blog-content">
                    {!! $post->content !!}
                </div>

                <div class="flex items-center justify-between border-t border-gray-200 pt-5">
                    <div class="flex items-center gap-3">
                        <span class="text-gray-600">Posted on:</span>
                        <span>{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-gray-600">Category:</span>
                        <span>{{ $post->category->name ?? 'Uncategorized' }}</span>
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-2/7 p-10 flex flex-col gap-8 text-black">
                <div class="text-2xl font-bold">Recent Posts</div>
                <div class="flex flex-col gap-6">
                    @foreach($recentPosts as $recentPost)
                    <div class="flex gap-4 items-center">
                        <div class="w-1/4">
                            <img src="{{ asset('uploads/'.$recentPost->image) }}" class="w-full rounded" alt="{{ $recentPost->title }}">
                        </div>
                        <div class="w-3/4">
                            <a href="{{ url('blog/'.$recentPost->slug) }}" class="font-bold hover:text-[#FF9933]">{{ Str::limit($recentPost->title, 50) }}</a>
                            <div class="text-xs text-gray-500">{{ $recentPost->created_at->format('d M Y') }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-2xl font-bold mt-6">Categories</div>
                <div class="flex flex-col gap-3">
                    @foreach($categories as $category)
                    <a href="{{ url('blog?type='.$category->name) }}" class="hover:text-[#FF9933]">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
