<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div x-data="{
        isLoading: false,
        activeCategory: '{{ $currentCategory->slug ?? 'all' }}',
        updateProducts(url, categorySlug, targetTitle) {
            // Jangan lakukan apa-apa jika kategori yang diklik sama dengan yang aktif
            if (this.activeCategory === categorySlug) return;
    
            this.isLoading = true;
            this.activeCategory = categorySlug;
    
            // Ambil konten grid produk baru dari server di latar belakang
            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(response => response.text())
                .then(html => {
                    // Ganti isi grid produk dengan yang baru
                    this.$refs.productGrid.innerHTML = html;
                    // Ganti judul halaman
                    this.$refs.pageTitle.textContent = targetTitle;
                    this.isLoading = false;
                    // Update URL di browser tanpa reload
                    window.history.pushState({}, '', url);
                });
        }
    }">

        <section class="relative text-white h-screen flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('asset/bg2.jpg') }}" alt="Background" class="w-full h-full object-cover">
                {{-- Lapisan overlay gelap agar teks lebih kontras --}}
                <div class="absolute inset-0 bg-black opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 py-20 lg:py-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="text-center lg:text-left z-10 mt-24">
                        <h1 class="text-4xl lg:text-6xl text-white font-extrabold leading-tight" data-aos="fade-up"
                            data-aos-delay="300" data-aos-easing="ease-in-out">
                            Temukan Solusi Teknologi <strong class="text-red-600">Terbaik</strong> Anda
                        </h1>
                        <p class="mt-6 text-lg text-white max-w-lg mx-auto lg:mx-0" data-aos="fade-up"
                            data-aos-delay="400" data-aos-easing="ease-in-out">
                            Kami menyediakan berbagai produk hardware dan software berkualitas tinggi untuk mendukung
                            kebutuhan bisnis dan personal Anda.
                        </p>
                        <a href="#product-list"
                            class="mt-6 inline-block bg-white text-red-600 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1 hover:bg-red-600 hover:text-white"
                            data-aos="fade-up" data-aos-delay="500" data-aos-easing="ease-in-out">
                            Lihat Produk Kami
                        </a>
                    </div>

                    <div class="absolute -right-8 top-32 -translate-y-1/2 w-3/4 lg:w-1/2 xl:w-2/5 hidden lg:block"
                        data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000">
                        <img src="{{ asset('asset/product/laptop-float3.png') }}" alt="Laptop Produk"
                            class="w-full h-auto object-contain drop-shadow-2xl">
                    </div>
                    <div class="absolute right-64 top-24 -translate-y-1/2 w-3/4 lg:w-1/2 xl:w-2/5 hidden lg:block"
                        data-aos="fade-left" data-aos-delay="600" data-aos-duration="1000">
                        <img src="{{ asset('asset/product/laptop-float.png') }}" alt="Laptop Produk"
                            class="w-full h-auto object-contain drop-shadow-2xl">
                    </div>

                </div>
            </div>
        </section>

        <div id="product-list" class="container mx-auto px-4 py-16 lg:py-24 bg-gray-50" data-aos="fade-up"
            data-aos-delay="300" data-aos-easing="ease-in-out">

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                <aside class="lg:col-span-1 bg-white p-6 rounded-lg shadow-sm self-start lg:sticky top-32">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 pb-3 border-b">Kategori</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('products.index') }}"
                                @click.prevent="updateProducts('{{ route('products.index') }}', 'all', 'Semua Produk')"
                                class="flex justify-between items-center text-gray-700 hover:text-red-600 transition"
                                :class="{ 'text-red-600 font-semibold': activeCategory === 'all' }">
                                <span>Semua Kategori</span>
                                <span
                                    class="text-xs font-mono bg-gray-200 text-gray-600 rounded px-1.5 py-0.5">{{ $products->count() }}</span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('products.index', ['category' => $category->slug]) }}"
                                    @click.prevent="updateProducts('{{ route('products.index', ['category' => $category->slug]) }}', '{{ $category->slug }}', '{{ $category->name }}')"
                                    class="flex justify-between items-center text-gray-700 hover:text-red-600 transition"
                                    :class="{ 'text-red-600 font-semibold': activeCategory === '{{ $category->slug }}' }">
                                    <span>{{ $category->name }}</span>
                                    {{-- Hitung jumlah produk per kategori jika relasinya sudah di-load --}}
                                    <span
                                        class="text-xs font-mono bg-gray-200 text-gray-600 rounded px-1.5 py-0.5">{{ $category->products->count() }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                <main class="lg:col-span-3">
                    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 pb-4 border-b">
                        <h2 class="text-5xl font-bold text-gray-800" x-ref="pageTitle">
                            @if ($currentCategory)
                                {{ $currentCategory->name }}
                            @else
                                Semua Produk
                            @endif
                        </h2>
                        <div class="flex items-center mt-4 sm:mt-0">
                            <label for="sort-options" class="text-sm mr-2 text-gray-700">Urutkan:</label>
                            <select id="sort-options" name="sort"
                                class="border-gray-300 rounded-md shadow-sm text-sm focus:border-red-500 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>
                                    Paling Sesuai</option>
                                <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>
                                    Harga Terendah</option>
                                <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>
                                    Harga Tertinggi</option>
                            </select>
                        </div>
                    </div>

                    {{-- Grid Produk --}}
                    <div class="relative">
                        {{-- Efek loading --}}
                        <div x-show="isLoading" x-transition
                            class="absolute inset-0 bg-white/70 z-10 flex items-center justify-center">
                            {{-- Spinner icon --}}
                            <svg class="animate-spin h-8 w-8 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>
                        {{-- PERUBAHAN 4: Grid diberi x-ref dan diisi dengan @include --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" x-ref="productGrid">
                            @include('partials._product-grid', ['products' => $products])
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <x-testimonial-section />

        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="text-center mb-12">
                    <h2 class="text-5xl font-bold text-gray-800" data-aos="fade-up" data-aos-delay="200"
                        data-aos-easing="ease-in-out">Frequently Asked Questions</h2>
                </div>
                <div class="space-y-4">
                    {{-- Contoh 1 item FAQ dengan Alpine.js --}}
                    <div x-data="{ open: false }" class="bg-white p-4 rounded-lg shadow-sm border hover:border-red-600"
                        data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out">
                        <button @click="open = !open"
                            class="w-full flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>Apakah semua produk bergaransi resmi?</span>
                            <svg class="w-5 h-5 transition-transform" :class="{ 'transform rotate-180': open }">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>Ya, semua produk perangkat keras yang kami jual dilengkapi dengan garansi resmi dari
                                distributor.</p>
                        </div>
                    </div>
                    {{-- Contoh 2 item FAQ --}}
                    <div x-data="{ open: false }" class="bg-white p-4 rounded-lg shadow-sm border hover:border-red-600"
                        data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out">
                        <button @click="open = !open"
                            class="w-full flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>Bagaimana proses klaim garansi?</span>
                            <svg class="w-5 h-5 transition-transform" :class="{ 'transform rotate-180': open }">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>Anda bisa langsung membawa unit yang bermasalah ke service centre kami, atau menghubungi
                                tim
                                support kami untuk panduan lebih lanjut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('sort-options').addEventListener('change', function() {
            const url = new URL(window.location.href);
            url.searchParams.set('sort', this.value);
            window.location.href = url.toString();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const featuredSwiperEl = document.querySelector('.featured-product-swiper');
            if (featuredSwiperEl && typeof Swiper !== 'undefined') {
                const featuredSwiper = new Swiper(featuredSwiperEl, {
                    slidesPerView: 1,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                    },
                });
            }
        });
    </script>
</x-layout>
