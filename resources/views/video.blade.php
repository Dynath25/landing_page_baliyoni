{{-- @extends('layouts.video-layout')

<section class="min-h-screen bg-blue-900 flex items-center justify-center py-8 lg:py-12">
    <div class="container mx-auto px-4 lg:px-6 xl:px-8">
        <div class="text-center mb-8" data-aos="fade-up" data-aos-delay="100">
            <!-- Optional: Tambahkan judul atau deskripsi di sini -->
        </div>
        
        <div data-aos="fade-up" data-aos-delay="200">
            <x-video-player />
        </div>
    </div>
</section> --}}

{{-- contoh layout section yang memanggil komponen --}}
@extends('layouts.video-layout')

<section class="min-h-screen bg-black">
  <x-video-player />
</section>
