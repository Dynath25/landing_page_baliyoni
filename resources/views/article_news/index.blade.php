@extends('layouts.app')

@section('content')
<div class="relative w-full">
        @include('partials._slider_article', ['sliders' => $sliders])
    </div>
<div class="flex flex-col lg:flex-row gap-8 max-w-screen-xl mx-auto px-8 sm:px-8 lg:px-8">

    <!-- Kolom Kiri: Latest News (2/3 lebar di desktop) -->
    <div class="w-full lg:w-2/3 px-4">
        <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
            
            <!-- Judul Responsif -->
            <div class="relative">
                <h2 class="text-2xl md:text-3xl font-bold pb-3 text-blue-800">UCEAI NEWS</h2>
                <div class="absolute bottom-1 left-0 w-full h-0.5 bg-blue-800"></div>
                <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-blue-800"></div>
            </div>              

            <!-- Grid Artikel -->
            <div id="Solutions" class="my-4">
                <!-- 
                  PERBAIKAN RESPONSIVE GRID:
                  - Mobile: 1 kolom (grid-cols-1)
                  - Tablet: 2 kolom (sm:grid-cols-2)
                  - Desktop: 3 kolom (lg:grid-cols-3)
                -->
                <div class="gap-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($articles as $article)
                    <div class="flex flex-col border rounded-lg border-transparent shadow-lg transition-transform transform hover:scale-105 hover:border-blue-600" data-aos="fade-down" data-aos-delay="200" data-aos-duration="600">
                        
                        <!-- Kontainer gambar dengan tinggi responsif -->
                        <div class="w-full h-48 lg:h-72 overflow-hidden rounded-t-lg flex-shrink-0">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Kontainer konten teks -->
                        <div class="flex flex-col flex-grow px-4 py-4">
                            <div class="">
                                <!-- Tipografi judul responsif -->
                                <h3 class="text-lg md:text-xl font-bold text-gray-800 break-words">{{ Str::limit($article->name, 100) }}</h3>
                            </div>
                            <div class="py-4 flex-grow">
                                <p class="text-gray-600 text-sm lg:text-lg break-words text-justify">{{ Str::limit($article->content, 200, '...') }}</p>
                            </div>
                            <div class="mt-auto pt-0 lg:pt-2">
                                <a href="{{ route('article.show', $article->slug) }}" class="inline-block bg-blue-600 text-white px-2 py-1 lg:px-4 lg:py-2 rounded hover:bg-blue-700 transition-colors">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Information Banner -->
    @include('partials._information')
</div>
