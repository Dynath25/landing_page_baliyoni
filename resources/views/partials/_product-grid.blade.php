{{-- resources/views/partials/_product-grid.blade.php --}}
@forelse ($products as $product)
    <div
        class="group bg-white rounded-lg shadow-sm border overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
        <a href="{{ route('products.show', $product->slug) }}">
            <div class="w-full aspect-square bg-white relative">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-full object-contain p-4 transition-transform duration-300 group-hover:scale-105">
                {{-- Badge Kategori --}}
                <span
                    class="absolute top-2 left-2 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded-full">{{ $product->category->name }}</span>
            </div>
            <div class="p-4 border-t">
                <h3 class="font-semibold text-gray-800 group-hover:text-red-600 transition-colors line-clamp-2 h-12">
                    {{ $product->name }}</h3>
                <p class="mt-2 text-xl font-bold text-gray-900">Rp
                    {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
        </a>
    </div>
@empty
    <p class="sm:col-span-2 md:col-span-3 text-center text-gray-500 py-16">Tidak ada produk
        ditemukan.</p>
@endforelse
