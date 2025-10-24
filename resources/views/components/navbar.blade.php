<!-- Diperlukan untuk Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<nav class="bg-white border-b-2 border-red-600 fixed top-0 z-40 w-full" x-data="{ mobileOpen: false }">
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- Main Navigation Bar (Dasar) -->
        {{-- 
          PERBAIKAN: Tinggi diubah menjadi 'h-20' untuk mobile/tablet dan 'lg:h-32' untuk desktop.
        --}}
        <div class="flex items-center justify-between h-20 lg:h-25">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" aria-current="page">
                    <img src="/asset/BYS_LOGO.png" class="h-10 lg:h-17 w-auto" alt="BYS Logo">
                </a>
            </div>

            <!-- Desktop Main Menu -->
            <div class="hidden lg:flex items-center space-x-12 text-lg font-semibold text-gray-700">
                <a href="/"
                    class="hover:text-red-600 transition-colors {{ Request::routeIs('home') ? 'text-red-600 font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="hover:text-red-600 transition-colors {{ Request::routeIs('about') ? 'text-red-600 font-semibold' : '' }}">About</a>
                <div x-data="{ open: false }" @click.outside="open = false" class="relative">
                    <button @click="open = !open"
                        class="flex items-center hover:text-red-600 transition-colors {{ Request::routeIs('services') ? 'text-red-600 font-semibold' : '' }}">
                        <span>Services</span>
                        {{-- Ikon panah ke bawah --}}
                        <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute top-full mt-2 w-56 bg-white rounded-md shadow-lg z-20 border"
                        style="display: none;">

                        <a href="{{ route('services') }}"
                            class="block px-4 py-2 text-base text-gray-700 hover:bg-gray-100 hover:text-red-600">Our
                            Services</a>
                        <a href="{{ route('product') }}"
                            class="block px-4 py-2 text-base text-gray-700 hover:bg-gray-100 hover:text-red-600">Product
                            Catalog</a>
                    </div>
                </div>
                {{-- <a href="{{ route('services') }}" class="hover:text-red-600 transition-colors">Services</a> --}}
                <a href="{{ route('partnership') }}"
                    class="hover:text-red-600 transition-colors
                    {{ Request::routeIs('partnership') ? 'text-red-600 font-semibold' : '' }}">Partnerships</a>
                <a href="{{ route('contact') }}"
                    class="py-1 px-5 text-white hover:bg-red-700 transition-colors lg:block rounded-lg bg-red-600 font-semibold
                    {{ Request::routeIs('contact') ? 'bg-red-700 ring-2 ring-offset-2 ring-red-500' : 'bg-red-600 hover:bg-red-700' }}">
                    Contact Us
                </a>
                <a href="{{ route('cart.index') }}" class="relative text-gray-700 hover:text-red-600 transition-colors"
                    x-data="{ cartCount: {{ $cartCount }} }" @cart-updated.window="cartCount = $event.detail.count">

                    {{-- Ikon SVG Anda --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>

                    {{-- Badge Jumlah Item --}}
                    {{-- 'x-show' akan menampilkan badge hanya jika jumlah > 0 --}}
                    <span x-show="cartCount > 0" x-text="cartCount"
                        class="absolute -top-2 -right-2 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
                    </span>
                </a>
            </div>
        </div>

        <!-- Top Bar (Melayang di atas) -->
        {{-- <div class="hidden lg:block absolute top-0 right-4 h-14 bg-red-700 rounded-bl-lg">
            <div class="flex items-center h-full divide-x divide-gray-400 text-xs text-gray-300">
                <a href="#partner" class="px-3 hover:text-white transition-colors">ACTIVE PARTNER</a>
                <a href="#portfolio" class="px-3 hover:text-white transition-colors">PORTFOLIO</a>
                <a href="#news" class="px-3 hover:text-white transition-colors">NEWS & INFORMATION</a>
                <a href="#people" class="px-3 hover:text-white transition-colors">EXPERT TEAMS</a>
                <a href="/hubungi" class="px-3 hover:text-white transition-colors">CONTACT US</a>
            </div>
        </div> --}}

        <!-- Tombol Menu Mobile -->
        <div class="absolute top-1/2 -translate-y-1/2 right-0 pr-4 lg:hidden">
            <button @click="mobileOpen = !mobileOpen" class="text-gray-800 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div x-show="mobileOpen" x-transition class="lg:hidden bg-white shadow-lg">
        <div class="px-4 py-4 space-y-2">
            <!-- Main menu items for mobile -->
            <a href="/" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">HOME</a>
            <a href="{{ route('about') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">ABOUT</a>
            <a href="{{ route('services') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">SERVICES</a>
            <a href="{{ route('product') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">PRODUCTS</a>
            <a href="{{ route('partnership') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">PARTNERSHIPS</a>
            <a href="{{ route('contact') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">CONTACT US</a>
            <a href="{{ route('cart.index') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">YOUR CART</a>

            <!-- Top menu items for mobile -->
            {{-- <div class="border-t pt-3 mt-3">
                <div class="grid grid-cols-2 gap-2 text-xs">
                    <a href="#partner" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">ACTIVE
                        PARTNER</a>
                    <a href="#portfolio" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">PORTFOLIO</a>
                    <a href="#news" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">NEWS & INFO</a>
                    <a href="#people" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">EXPERT TEAMS</a>
                    <a href="/hubungi" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">CONTACT US</a>
                </div>
            </div> --}}
        </div>
    </div>
</nav>
