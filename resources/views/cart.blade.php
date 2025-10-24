<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <script>
        function cartData(initialItems) {
            return {
                items: initialItems,

                // PERUBAHAN: Tambahkan 'init()' untuk watcher
                init() {
                    // Pantau perubahan pada array 'items'
                    this.$watch('items', (newItems) => {
                        // Hitung total quantity dari semua item
                        const totalQuantity = newItems.reduce((total, item) => total + item.quantity, 0);
                        // Jika items berubah, kirim event 'cart-updated' dengan jumlah baru
                        window.dispatchEvent(new CustomEvent('cart-updated', {
                            detail: {
                                count: totalQuantity
                            }
                        }));
                    });
                    {
                        deep: true
                    });
            },
        }
        }
    </script>

    <div class="bg-gray-50 pt-32 pb-24 min-h-screen" x-data="cartData({{ json_encode($initialCartItems) }})" x-init="init()">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Keranjang Belanja Anda</h1>

            @if (session('cart') && count(session('cart')) > 0)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
                        <div class="divide-y">
                            @php $subtotal = 0; @endphp
                            @foreach (session('cart') as $id => $details)
                                @php $subtotal += $details['price'] * $details['quantity']; @endphp
                                <div class="flex items-center py-4">
                                    <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}"
                                        class="w-24 h-24 object-contain rounded-md mr-4">

                                    <div class="flex-grow">
                                        <p class="font-semibold text-gray-800">{{ $details['name'] }}</p>
                                        <p class="text-sm text-gray-500">Rp {{ number_format($details['price']) }}</p>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        {{-- Form untuk Update Quantity --}}
                                        <form action="{{ route('cart.update', $id) }}" method="POST"
                                            x-data="{ quantity: {{ $details['quantity'] }} }" x-ref="form{{ $id }}"
                                            @submit.prevent="$refs.form{{ $id }}.submit()">
                                            @csrf
                                            <div class="flex items-center border rounded">
                                                <button type="button"
                                                    @click="quantity = Math.max(1, quantity - 1); $nextTick(() => $refs.form{{ $id }}.requestSubmit())"
                                                    class="px-3 py-1"> - </button>
                                                <input type="number" name="quantity" x-model="quantity"
                                                    @change="$refs.form{{ $id }}.requestSubmit()"
                                                    min="1"
                                                    class="w-12 text-center border-l border-r focus:ring-0 focus:border-gray-300">
                                                <button type="button"
                                                    @click="quantity++; $nextTick(() => $refs.form{{ $id }}.requestSubmit())"
                                                    class="px-3 py-1"> + </button>
                                            </div>
                                        </form>

                                        {{-- Form untuk Hapus Item --}}
                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-gray-400 hover:text-red-600"
                                                title="Hapus item">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <aside class="lg:col-span-1">
                        <div class="bg-white p-6 rounded-lg shadow-md sticky top-32">
                            <h3 class="text-xl font-bold text-gray-800 border-b pb-3">Ringkasan Pesanan</h3>
                            <div class="mt-4 space-y-3">
                                <div class="flex justify-between">
                                    <span>Subtotal</span>
                                    <span>Rp {{ number_format($subtotal) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Pengiriman</span>
                                    <span>Dihitung nanti</span>
                                </div>
                                <div class="mt-6 pt-4 border-t">
                                    <div class="flex justify-between font-bold text-lg">
                                        <span>Total</span>
                                        <span>Rp {{ number_format($subtotal) }}</span>
                                    </div>
                                    <a href="#"
                                        class="mt-6 block w-full text-center bg-red-600 text-white font-semibold py-3 rounded-md hover:bg-red-700">
                                        Lanjut ke Checkout
                                    </a>
                                    <a href="{{ route('products.index') }}#product-list"
                                        class="mt-4 block w-full text-center text-sm text-gray-600 hover:text-red-600">
                                        Kembali Berbelanja
                                    </a>
                                </div>
                            </div>
                    </aside>

                </div>
            @else
                {{-- Tampilan jika keranjang kosong --}}
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <p class="text-gray-500">Keranjang Anda masih kosong.</p>
                    <a href="{{ route('products.index') }}#product-list"
                        class="mt-4 inline-block bg-red-600 text-white font-semibold py-2 px-6 rounded-md hover:bg-red-700">
                        Mulai Belanja
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-layout>
