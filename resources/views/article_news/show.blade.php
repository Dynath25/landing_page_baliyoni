@extends('layouts.layout-berita')

@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <div class="max-w-4xl mx-auto mb-8 text-sm text-gray-500" data-aos="fade-down">
        <a href="/" class="hover:text-blue-600">Beranda</a>
        <span class="mx-2">></span>
        <a href="/articles" class="hover:text-blue-600">Berita</a>
    </div>

    <!-- Kontainer Artikel Utama -->
    <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
        
        <!-- Header Artikel dengan Gambar Latar -->
        <header class="relative w-full h-64 md:h-96">
            <!-- Gambar Thumbnail -->
            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-full object-cover">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
            <!-- Konten Header -->
            <div class="absolute bottom-0 left-0 p-6 md:p-8 text-white">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                    {{ $article->name }}
                </h1>
            </div>
        </header>

        <!-- Konten dan Meta Info -->
        <div class="p-6 md:p-8">
            <!-- Meta Info (Author & Tanggal) -->
            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-6 border-b pb-4">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <span>By <span class="font-semibold text-gray-800">{{ $article->author->name }}</span></span>
                </div>
                <span class="text-gray-300">|</span>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <span>{{ $article->created_at->format('F j, Y') }}</span>
                </div>
            </div>

            <!-- Isi Konten Artikel -->
            <!-- 
              Class 'prose' dari Tailwind Typography akan otomatis menata paragraf, heading, dll.
              Jika Anda tidak menggunakan plugin Typography, Anda bisa menggantinya dengan class manual
              seperti 'space-y-6 text-lg leading-relaxed'.
            -->
            <div class="prose prose-lg max-w-none text-gray-800 text-justify">
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>

    </article>
</div>

@endsection
