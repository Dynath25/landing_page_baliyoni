{{-- Menerima props untuk data teks sederhana --}}
@props([
    'headerAbout' => 'Default About Header',
    'isiAbout' => 'Default about text...',
    'headerVisi' => 'Default Visi Header',
    'subHeaderVisi' => 'Default visi sub-header...',
])

<section class="relative mb-96 mt-42 sm:mt-24 flex flex-col md:flex-row items-center justify-center p-4 space-y-6 md:space-y-0">
    
    {{-- Bagian Gambar (Latar Belakang) --}}
    {{-- Menggunakan named slots 'img1' dan 'img2' untuk konten HTML --}}
    <div class="relative md:absolute z-0 flex justify-center md:justify-end md:mr-[750px]">
        <div class="w-72 h-[350px] md:w-96 md:h-[450px] bg-white rounded-xl overflow-hidden shadow-lg">
            {{ $img1 ?? '' }}
            {{ $img2 ?? '' }}
        </div>
    </div>

    {{-- Bagian About Us (Lapisan Depan) --}}
    <div class="relative md:absolute z-20 w-full md:w-[400px] h-auto md:h-[500px] bg-neutral-900 text-white rounded-2xl p-6 shadow-2xl">
        <h2 class="text-2xl font-bold mb-4">{{ $headerAbout }}</h2>
        <p class="text-[12px] text-justify mb-4">{{ $isiAbout }}</p>
        <button class="bg-red-500 text-white text-sm px-4 py-2 rounded-md hover:bg-red-600">
            <a href="{{ url('/About') }}">Lebih Lanjut</a>
        </button>
    </div>

    {{-- Bagian Visi & Misi --}}
    <div class="relative md:absolute z-0 flex justify-center md:justify-start md:ml-[750px]">
        <div class="w-72 h-auto md:w-96 md:h-[450px] bg-white rounded-2xl p-6 shadow-xl">
            <h3 class="text-xl font-bold mb-2">{{ $headerVisi }}</h3>
            <p class="text-sm text-justify mb-4">{{ $subHeaderVisi }}</p>
            <ul class="text-[12px] text-justify text-red-600 space-y-2">
                {{-- Menggunakan named slots untuk setiap item list --}}
                <li>{{ $list1 ?? '' }}</li>
                <li>{{ $list2 ?? '' }}</li>
                <li>{{ $list3 ?? '' }}</li>
                <li>{{ $list4 ?? '' }}</li>
                <li>{{ $list5 ?? '' }}</li>
            </ul>
        </div>
    </div>
</section>