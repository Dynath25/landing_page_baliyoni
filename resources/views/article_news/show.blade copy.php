@extends('layouts.layout-berita')

<div>
@section('content')

<div data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100" class="container max-w-4xl my-20 bg-white mx-auto rounded-lg shadow-lg overflow-hidden">
    
    <!-- Gambar Thumbnail Artikel -->
    <div class="relative">
        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-96 object-cover">
    </div>

    <!-- Informasi Penulis & Artikel -->
    <div class="px-6 py-4">
        <div class="flex items-center space-x-2 font-light text-gray-600">
            <span class="iconify mt-1 text-orange-500" data-icon="wpf:create-new" data-inline="false"></span>
            <p class="font-medium">Author : <span class="font-semibold text-red-600">{{ $article->author->name }}</span></p>
        </div>
        
        <!-- Judul Artikel -->
        <h1 class="mt-6 text-4xl font-bold leading-tight text-gray-800">{{ $article->name }}</h1>

        <!-- Konten Artikel -->
        <div class="mt-4 text-gray-700 leading-relaxed text-lg font-light font-serif3">
            {!! nl2br(e($article->content)) !!}
        </div>
        
        <!-- Tanggal Terbit -->
        <div class="flex justify-between items-center mt-6 text-sm text-gray-500">
            <p>Published on {{ $article->created_at->format('F j, Y') }}</p>
            
        </div>
    </div>

    <!-- Garis Pemisah -->
    <div class="border-t mt-4"></div>


</div>

@endsection
