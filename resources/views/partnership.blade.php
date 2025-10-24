{{-- resources/views/pages/partnership.blade.php --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Hero Section --}}
    <section class="relative h-[100vh] flex items-center text-white">
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('asset/shakehand.jpg') }}" alt="Our Partners" class="w-full h-full object-cover opacity-40">
        </div>
        <div class="relative container mx-auto px-4">
            <div class="max-w-xl">
                <h1 class="text-6xl font-extrabold" data-aos-delay="200" data-aos="fade-down"
                    data-aos-easing="ease-in-out">Our Partners</h1>
                <p class="mt-4 text-xl opacity-90" data-aos-delay="300" data-aos="fade-down"
                    data-aos-easing="ease-in-out">
                    Bekerja sama dengan pemimpin industri teknologi untuk memberikan solusi terbaik bagi klien kami.
                </p>
            </div>
        </div>
    </section>

    {{-- Partner Logos Section --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold text-gray-800" data-aos-delay="200" data-aos="fade-up"
                    data-aos-easing="ease-in-out">Who We Work With</h2>
                <p class="mt-4 text-gray-500" data-aos-delay="300" data-aos="fade-up" data-aos-easing="ease-in-out">Kami
                    bangga dapat berkolaborasi dengan berbagai perusahaan ternama di
                    bidangnya masing-masing untuk menghadirkan inovasi dan keunggulan.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 justify-items-center">

                @forelse ($partnerships as $partner)
                    <div class="p-6 rounded-lg shadow-sm flex items-center justify-center h-36 w-full max-w-[200px] border-2 border-red-600 transform hover:scale-105 transition-transform duration-300"
                        data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">
                        {{-- Mengambil gambar dari Filament/Storage --}}
                        <img src="{{ asset('storage/' . $partner->thumbnail) }}" alt="{{ $partner->name }}"
                            class="max-h-full max-w-full object-contain">
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500" data-aos-delay="200" data-aos="fade-right"
                        data-aos-easing="ease-in-out">Daftar partner kami akan segera diperbarui.</p>
                @endforelse

            </div>
        </div>
    </section>

</x-layout>
