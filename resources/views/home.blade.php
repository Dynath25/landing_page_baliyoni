<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Hero Section --}}
    <div class="relative w-full">
        {{-- Slider as background --}}
        @include('partials._slider', ['sliders' => $sliders])

        {{-- Overlay for content --}}
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center p-4 text-center text-white">
            {{-- Tombol "Try It Now!" --}}

            {{-- <a href="/project-hand-gesture-main/landing.html" class="text-xl font-bold md:text-xl bg-blue-900 text-white px-10 py-2 mb-8">Try It Now!</a> --}}

            {{-- <div class="relative z-20 max-w-4xl">
                <h1 data-aos="fade-up" class="text-3xl font-bold md:text-3xl bg-yellow-500 text-blue-700 px-10 py-4 ">
                    UDAYANA CENTER OF <br>
                    EXCELENT AI INNOVATION
                </h1>
            </div> --}}
        </div>
    </div>

    <div class="py-24">
        @include('partials._about-us',[
            'img1_url' => asset('asset/abc.jpg'),
            'img2_url' => asset('asset/def.jpg')
        ])
    </div>

    {{-- @include('partials.roadmaps') --}}
    {{-- @include('partials._product-multiple') --}}
    <div id="product" class="bg-gray-100 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

            {{-- Kartu 1 --}}
            <x-product-card desc="Посмотреть<br>дома">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </x-slot>
            </x-product-card>

            {{-- Kartu 2 --}}
            <x-product-card desc="Экскурсия<br>по комплексу">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </x-slot>
            </x-product-card>

            {{-- Kartu 3 (Aktif) --}}
            <x-product-card desc="Рассчитать<br>ипотеку" :active="true">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </x-slot>
            </x-product-card>

            {{-- Kartu 4 --}}
            <x-product-card desc="Скачать<br>буклет">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </x-slot>
            </x-product-card>

            {{-- Kartu 5 --}}
            <x-product-card desc="Заказать такси<br>в отдел продаж">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </x-slot>
            </x-product-card>

        </div>
    </div>
</div>

    {{-- Main Content --}}


    {{-- Main Content Wrapper with consistent padding and spacing --}}
    <div class="space-y-20 px-4 sm:px-6 lg:px-8">
        
        @include('article_news.catalog_article', ['article' => $articles])

    </div>
    @include('partials._people', ['people' => $peoples])
    @include('partials._focus', ['focuses' => $focuses])
    @include('partials._portfolios', ['portfolios' => $portfolios])
    @include('partials._partner', ['partnerships' => $partnerships])
</x-layout>
