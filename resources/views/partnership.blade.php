<x-layout>
    <div class="p-6 md:p-8 mt-14 text-center">
        <h1 class="text-2xl md:text-4xl font-semibold text-gray-800">
            Our <span class="text-red-600">Partnerships</span>
        </h1>
        <p class="text-base md:text-lg font-light text-gray-600 mt-1 md:mt-2">
            We are grateful to all our partners for their invaluable support.
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
                @forelse($partnerships as $partnership)
                    <div class="rounded-lg shadow-lg hover:shadow-xl transform transition-transform hover:scale-105 hover:border-red-600 transition-shadow bg-transparent">
 			<div class="w-auto h-40 flex items-center justify-center bg-transparent">
                            <img
                                src="{{ asset('storage/' . $partnership->thumbnail) }}"
                                alt="{{ $partnership->name }}"
                                class="max-w-auto max-h-40 object-contain rounded bg-transparent"
                            >
			</div>
                        </div>
 	               @empty
                    <div class="text-center mt-8 col-span-full">
                        <p class="text-lg font-light text-gray-600">Partnership Tidak Tersedia Saat Ini</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>

