<x-layout>
    <div class="p-8 mt-14 text-center">
        <h1 class="text-4xl font-semibold text-gray-800">Our <span class="text-red-600">Gallery</span></h1>
        <p class="text-lg font-light text-gray-600 mt-2">Moment iJASA on Event.</p>
    </div>

    <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="max-w-6xl mx-auto p-4 mt-8">
        <div id="Solutions" class="my-6 max-w-6xl mx-auto mt-4 mb-14 z-1">
            <!-- Gallery Grid -->
            <div class="gap-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @if($galleries->isEmpty())
                    <p class="text-lg text-gray-500 col-span-full text-center">Gallery Tidak Tersedia Saat Ini</p>
                @else
                    @foreach($galleries as $gallery)
                        <div class="p-2 border rounded-lg border-transparent shadow-lg transition-transform transform hover:scale-110 hover:border-red-600">
                            <img src="{{ asset('storage/' . $gallery->thumbnail) }}" alt="{{ $gallery->name }}" class="w-full h-48 object-cover object-center">
                            <div class="flex items-center mb-2 pt-2">
                                <h3 class="text-xl text-center font-bold text-gray-800">{{ Str::limit($gallery->name, 100) }}</h3>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-layout>
