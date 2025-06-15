@foreach ($posts as $post)
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
