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
                <a href="{{ route('services') }}"
                    class="hover:text-red-600 transition-colors {{ Request::routeIs('services') ? 'text-red-600 font-semibold' : '' }}">Services</a>
                <a href="{{ route('partnership') }}"
                    class="hover:text-red-600 transition-colors
                    {{ Request::routeIs('partnership') ? 'text-red-600 font-semibold' : '' }}">Partnerships</a>
                <a href="{{ route('contact') }}"
                    class="py-1 px-5 text-white hover:bg-red-700 transition-colors lg:block rounded-lg bg-red-600 font-semibold
                    {{ Request::routeIs('contact') ? 'bg-red-700 ring-2 ring-offset-2 ring-red-500' : 'bg-red-600 hover:bg-red-700' }}">
                    Contact Us
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
            <a href="{{ route('partnership') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">PARTNERSHIPS</a>
            <a href="{{ route('contact') }}" @click="mobileOpen = false"
                class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">CONTACT US</a>

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
