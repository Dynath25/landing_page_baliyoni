@props([
    'desc' => ''
])

<div class="group rounded-xl p-5 w-full sm:w-auto flex-1 flex flex-col h-32 transition-all duration-200 bg-white shadow-sm hover:shadow-md  hover:bg-red-500 hover:scale-105">
    
    {{-- Wrapper Ikon --}}
    <div class="mb-2 text-gray-800 group-hover:text-white">
        {{ $icon }}
    </div>

    {{-- Deskripsi --}}
    <p class="font-medium text-sm flex-grow text-gray-800  group-hover:text-white">
        {!! $desc !!}
    </p>
</div>