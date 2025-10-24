<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white py-16 lg:py-24">
        <div class="container mx-auto px-4 pt-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div x-data="{ mainImage: '{{ asset('storage/' . $product->image) }}' }">
                    <div class="aspect-video rounded-lg overflow-hidden shadow-md mb-4">
                        <img :src="mainImage" alt="{{ $product->name }}" class="w-full h-full object-contain p-4">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        {{-- Thumbnail 1 (Gambar utama) --}}
                        <div @click="mainImage = '{{ asset('storage/' . $product->image) }}'"
                            class="aspect-square bg-gray-100 rounded-md overflow-hidden cursor-pointer border-2 hover:border-red-500">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Thumbnail 1"
                                class="w-full h-full object-contain p-1">
                        </div>
                        {{-- Contoh Thumbnail 2 --}}
                        {{-- <div @click="mainImage = '{{ asset('asset/products/server_side.jpg') }}'"
                            class="aspect-square bg-gray-100 rounded-md overflow-hidden cursor-pointer border-2 hover:border-red-500">
                            <img src="{{ asset('asset/products/server_side.jpg') }}" alt="Thumbnail 2"
                                class="w-full h-full object-contain p-1">
                        </div> --}}
                        {{-- Contoh Thumbnail 3 --}}
                        {{-- <div @click="mainImage = '{{ asset('asset/products/server_back.jpg') }}'"
                            class="aspect-square bg-gray-100 rounded-md overflow-hidden cursor-pointer border-2 hover:border-red-500">
                            <img src="{{ asset('asset/products/server_back.jpg') }}" alt="Thumbnail 3"
                                class="w-full h-full object-contain p-1">
                        </div> --}}
                    </div>
                </div>

                {{-- PERUBAHAN 1: x-data dipindahkan ke sini dan ditambahkan 'price' --}}
                <div x-data="{ quantity: 1, price: {{ $product->price }} }">

                    {{-- Judul, Kategori, dan Harga --}}
                    <div class="pb-6 border-b">
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">{{ $product->name }}</h1>
                        @if ($product->category)
                            <p class="mt-2 text-md font-medium text-red-600">{{ $product->category->name }}</p>
                        @endif
                        <p class="mt-4 text-4xl font-bold text-gray-800">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>

                    {{-- Deskripsi Singkat --}}
                    <div class="mt-4 prose max-w-none text-gray-600">
                        {!! $product->description !!}
                    </div>

                    {{-- Tombol Aksi --}}
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <div class="mt-6 flex items-center space-x-4">

                            {{-- Pengatur Jumlah (Alpine.js) --}}
                            <div class="flex items-center border rounded">
                                {{-- Tombol +/- diberi type="button" agar tidak men-submit form --}}
                                <button type="button" @click="quantity = Math.max(1, quantity - 1)"
                                    class="px-3 py-2 text-gray-600 hover:bg-gray-100">-</button>

                                <input type="text" x-model="quantity"
                                    class="w-12 text-center border-l border-r focus:ring-0 focus:border-gray-300">

                                <button type="button" @click="quantity++"
                                    class="px-3 py-2 text-gray-600 hover:bg-gray-100">+</button>
                            </div>

                            {{-- Input tersembunyi untuk mengirim nilai 'quantity' dari Alpine.js --}}
                            <input type="hidden" name="quantity" :value="quantity">

                            {{-- Tombol Beli diubah menjadi tombol 'submit' --}}
                            <button type="submit"
                                class="flex-grow text-center bg-orange-500 text-white font-semibold py-3 px-6 rounded-md hover:bg-orange-600 transition">
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </form>

                    <div class="mt-6 border-t pt-4">
                        <div class="space-y-3 text-gray-600">
                            <div class="flex">
                                <span class="w-32 font-semibold">Sub Total</span>
                                <span class="mr-2">:</span>
                                {{-- PERUBAHAN 2: Span ini sekarang dinamis dengan x-text --}}
                                <span class="font-bold text-red-600"
                                    x-text="'Rp ' + (quantity * price).toLocaleString('id-ID')"></span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold">Kode Barang</span>
                                <span class="mr-2">:</span>
                                <span>{{-- {{ $product->sku }} --}}150511143743</span>
                            </div>
                            <div class="flex">
                                <span class="w-32 font-semibold">Stok</span>
                                <span class="mr-2">:</span>
                                <span>{{-- {{ $product->stock }} --}}Call</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            {{-- TABEL SPESIFIKASI --}}
            @if ($product->specifications && $product->specifications->isNotEmpty())
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Spesifikasi Detail</h3>

                    {{-- Menggunakan 'dl' untuk daftar definisi yang lebih semantik --}}
                    <dl>
                        @foreach ($product->specifications as $spec)
                            {{-- Setiap baris spesifikasi --}}
                            <div class="flex justify-between py-3 border-b border-gray-200">
                                {{-- Nama Spesifikasi --}}
                                <dt class="font-medium text-gray-500">{{ $spec->name }}</dt>
                                {{-- Nilai Spesifikasi --}}
                                <dd class="text-gray-800 font-semibold text-right">{{ $spec->value }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            @endif

            {{-- PRODUK TERKAIT --}}
            <section class="py-20 bg-gray-50 border-t">
                <div class="container mx-auto px-4">
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Produk Terkait</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                        @forelse ($relatedProducts as $related)
                            <div
                                class="bg-white border rounded-lg group transition hover:shadow-lg hover:-translate-y-1">
                                <a href="{{ route('products.show', $related->slug) }}">
                                    <div class="aspect-square overflow-hidden rounded-t-lg">
                                        <img src="{{ asset('storage/' . $related->image) }}"
                                            alt="{{ $related->name }}"
                                            class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform">
                                    </div>
                                    <div class="p-4 text-sm border-t bg-gray-50">
                                        <h4 class="font-medium text-gray-800 truncate">{{ $related->name }}</h4>
                                        <p class="font-bold text-red-600 mt-1">Rp
                                            {{ number_format($related->price, 0, ',', '.') }}</p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p class="col-span-full text-gray-500 text-center">Tidak ada produk terkait.</p>
                        @endforelse

                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layout>
