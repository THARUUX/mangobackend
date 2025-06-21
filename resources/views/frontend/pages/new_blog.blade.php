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
            <div class="w-full text-4xl sm:text-6xl font-pri font-black text-center">Tradiational doors & travel</div>
            <div class="sm:w-3/7 flex justify-center text-center font-pri">Our Blog </div>
            <div class="w-full sm:px-20 flex flex-wrap">
                @foreach($posts as $post)
                <div class="sm:w-1/3 p-5 flex flex-col group">
                    <div class="relative overflow-hidden rounded-t-lg">
                        <img src="{{ asset('uploads/post/'.$post->image) }}" class="w-full h-[250px] object-cover transition-transform duration-300 group-hover:scale-105" alt="{{ $post->title }}">
                        <div class="absolute top-3 left-3 text-white group-hover:bg-[#FF9933] bg-black/80 duration-300 py-2 px-4 rounded-full text-sm font-bold">
                            <div>{{ $post->category->name ?? 'Uncategorized' }}</div>
                        </div>
                    </div>
                    <div class="flex w-full p-5 border border-t-0 flex-col gap-5 rounded-b-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="sm:text-2xl text-lg font-bold">{{ $post->title }}</div>
                        <div class="text-sm text-gray-600 line-clamp-3">{{ Str::limit($post->short_content, 150) }}</div>
                        <div class="pt-5 flex items-center justify-between border-t border-gray-100">
                            <div class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</div>
                            <a href="{{ url('blog/'.$post->slug) }}" class="text-sm font-bold text-[#FF9933] hover:text-[#e88929] flex items-center gap-1">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
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
            <!-- Gallery Section -->
        <section class="pb-4 bg-white" id="gallery">
            {{-- <div class="w-full flex pt-10 pb-5 flex-col justify-center items-center gap-5">
                <div class="text-xl sm:text-3xl flex justify-center font-sec">Capture the Memories</div>
                <div class="text-3xl sm:text-5xl font-black flex justify-center font-pri">Gallery</div>
                <div class="sm:w-3/7 flex justify-center text-center font-pri text-sm sm:text-md">Explore the beauty of Sri Lanka through our travelers' experiences</div>
            </div> --}}

            <div class="w-full flex-wrap sm:flex-nowrap flex">
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(10).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Beach view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(11).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Mountain view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(12).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Temple view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(13).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Wildlife view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(14).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Cultural view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-auto max-w-1/2 sm:max-w-1/7 sm:w-1/7 grow p-[1px] sm:p-1 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('new_frontend/Assets/img(15).png') }}" class="w-full h-auto transition-all duration-500 transform group-hover:scale-110" alt="Resort view">
                        <div class="w-full opacity-0 group-hover:opacity-100 duration-300 h-full top-0 absolute flex justify-center items-center p-5">
                            <div class="w-full h-full absolute flex justify-center items-center bg-black/50">
                                <img src="{{ asset('new_frontend/Assets/Group 23469.png') }}" alt="View image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
