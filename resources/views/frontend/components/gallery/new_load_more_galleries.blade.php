@foreach ($galleries as $gallery)
<div class="relative group">
    <div class="absolute opacity-0 duration-300 group-hover:opacity-100 bg-[#00000077] w-full h-full flex justify-center text-white items-center font-medium flex-col gap-10">
        <div class="text-2xl sm:text-5xl">{{ $gallery->title }}</div>
        <div class="px-10 sm:text-md text-xs text-wrap">{{ $gallery->description }}</div>
    </div>
    <img src="{{ asset('uploads/'.$gallery->image) }}" alt="{{ $gallery->title }}">
</div>
@endforeach
