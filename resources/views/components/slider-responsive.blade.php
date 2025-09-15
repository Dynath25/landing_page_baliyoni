<!-- Diperlukan untuk Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<!-- KOLOM KANAN: Informasi & Banner -->
<div id="information" class="w-full lg:w-1/3">
    <div class="sticky top-24">

        <!-- ======================================================= -->
        <!-- SLIDER BANNER PERSEGI (SQUARE) -->
        <!-- ======================================================= -->
        @if($squareBanners->isNotEmpty())
            <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
                <!-- Judul -->
                <div class="relative inline-block">
                    <h2 class="text-2xl font-bold pb-3 text-blue-800">INFORMATION</h2>
                    <div class="absolute bottom-1 left-0 w-full h-0.5 bg-blue-800"></div>
                    <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-blue-800"></div>
                </div>

                <!-- Alpine.js Slider Component -->
                <div x-data="{
                        currentIndex: 0,
                        images: {{ $squareBanners->pluck('banner')->map(fn($url) => Storage::url($url))->toJson() }},
                        autoplay() {
                            setInterval(() => {
                                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                            }, 5000);
                        }
                    }"
                    x-init="autoplay()"
                    class="mt-4 relative rounded-lg shadow-lg overflow-hidden"
                >
                    <!-- Container Gambar Responsif -->
                    <div class="relative w-full h-80 md:h-96 lg:h-80">
                        @foreach($squareBanners as $index => $banner)
                            <div x-show="currentIndex === {{ $index }}"
                                 x-transition:enter="transition ease-in-out duration-700"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in-out duration-700"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="absolute inset-0">
                                <img src="{{ Storage::url($banner->banner) }}" alt="{{ $banner->information }}" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>

                    <!-- Titik Navigasi -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        @foreach($squareBanners as $index => $banner)
                            <button @click="currentIndex = {{ $index }}"
                                    :class="{'bg-white': currentIndex === {{ $index }}, 'bg-white/50': currentIndex !== {{ $index }} }"
                                    class="w-3 h-3 rounded-full transition"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <!-- ======================================================= -->
        <!-- SLIDER BANNER PERSEGI PANJANG (RECTANGULAR) -->
        <!-- ======================================================= -->
        @if($rectangularBanners->isNotEmpty())
            <div x-data="{
                    currentIndex: 0,
                    images: {{ $rectangularBanners->pluck('banner')->map(fn($url) => Storage::url($url))->toJson() }},
                    autoplay() {
                        setInterval(() => {
                            this.currentIndex = (this.currentIndex + 1) % this.images.length;
                        }, 5000);
                    }
                }"
                x-init="autoplay()"
                class="mt-8 relative rounded-lg shadow-lg overflow-hidden"
            >
                <!-- Container Gambar Responsif -->
                <div class="relative w-full h-96 md:h-[500px] lg:h-[600px]">
                    @foreach($rectangularBanners as $index => $banner)
                        <div x-show="currentIndex === {{ $index }}"
                             x-transition:enter="transition ease-in-out duration-700"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in-out duration-700"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-0">
                            <img src="{{ Storage::url($banner->banner) }}" alt="{{ $banner->information }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>

                <!-- Titik Navigasi -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    @foreach($rectangularBanners as $index => $banner)
                        <button @click="currentIndex = {{ $index }}"
                                :class="{'bg-white': currentIndex === {{ $index }}, 'bg-white/50': currentIndex !== {{ $index }} }"
                                class="w-3 h-3 rounded-full transition"></button>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
