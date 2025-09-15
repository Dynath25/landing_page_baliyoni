<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Hero Section --}}
    <div class="relative w-full">
        {{-- Slider as background --}}
        @include('partials._slider', ['sliders' => $sliders])

        {{-- Overlay for content --}}
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center bg-black bg-opacity-40 p-4 text-center text-white">

            {{-- Content Container --}}
            <a href="/project-hand-gesture-main/landing.html" class="text-xl font-bold md:text-xl bg-blue-900 text-white px-10 py-2 mb-8">Try It Now!</a>

            <div class="relative z-20 max-w-4xl">
                <h1 data-aos="fade-up" class="text-3xl font-bold md:text-3xl bg-yellow-500 text-blue-700 px-10 py-4 ">
                    UDAYANA CENTER OF <br>
                    EXCELENT AI INNOVATION
                </h1>
            </div>
        </div>
    </div>
    
    @include('partials._about')
    @include('partials.roadmaps')
    @include('partials._product')

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
