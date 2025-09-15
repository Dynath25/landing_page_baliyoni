<x-layout>
    <div class="p-6 md:p-8 mt-14 text-center">
        <h1 class="text-2xl md:text-4xl font-semibold text-gray-800">
            Dukungan
        </h1>
        <p class="text-base md:text-lg font-light text-gray-600 mt-1 md:mt-2">
            Dukungan iJASA
        </p>
    </div>

    <div 
        data-aos-delay="200" 
        data-aos="fade-down" 
        data-aos-easing="ease-in-out" 
        class="max-w-6xl mx-auto p-4 mt-8">
        <div class="my-6 mx-auto mt-4 mb-14 z-1">
            <!-- Responsive grid layout -->

            <div class="flex flex-wrap justify-center gap-4">
                @forelse($dukungans as $dukungan)
                    <div class="rounded-lg shadow-lg transform transition-transform hover:scale-105 hover:border-red-600">
                        <div class="w-auto h-40 flex items-center justify-center">
                            <img 
                                src="{{ asset('storage/' . $dukungan->thumbnail) }}" 
                                alt="{{ $dukungan->name }}" 
                                class="max-w-auto max-h-40 object-contain rounded">
                        </div>
                    </div>
                @empty
                    <div class="text-center mt-8">
                        <p class="text-lg font-light text-gray-600">Dukungan Tidak Tersedia Saat Ini</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</x-layout>
