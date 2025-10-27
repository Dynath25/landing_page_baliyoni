{{-- <footer class="bg-gray-800 mt-auto shadow-lg">
    <div class="flex flex-col md:flex-row justify-between gap-8 p-8 max-w-6xl mx-auto">
        <!-- Logo and Status -->
        <div class="flex flex-col gap-4 items-start">
            <div class="flex items-center gap-2">
                <img src="/asset/UCEAI LOGO.png" class="h-10 w-auto" alt="UCEAI Logo">
            </div>
=        </div>
        
        <!-- Address and Contact -->
        <div>
            <h4 class="text-white font-semibold mb-2">Address</h4>
            <p class="text-white text-sm mb-4">Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung, Bali 80361</p>
            <div class="flex flex-col gap-2 text-white">
                <div class="flex items-center gap-2">
                <span class="iconify" data-icon="line-md:email-twotone" style="color: white;"></span>
                    <a href="mailto:cs@ijasa.id" class="hover:text-blue-500">info@unud.ac.id</a>
                </div>
                <div class="flex items-center gap-2">
                <span class="iconify" data-icon="mdi:contact" style="color: white;"></span> 
                    <a href="https://wa.me/+628113562254" class="hover:text-green-500">+62 (361) 701954, 704845</a>
                </div>
            </div>
        </div>

        <!-- Links -->
        <div>
            <h4 class="text-white font-semibold mb-2">Links</h4>
            <div class="grid grid-cols-2 gap-x-6 gap-y-1 text-white text-sm">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/layanan" class="hover:text-blue-600">Layanan</a>
                <a href="/solusi" class="hover:text-blue-600">Solusi</a>
                <a href="/harga" class="hover:text-blue-600">Harga</a>
                <a href="/articles" class="hover:text-blue-600">Berita</a>
                <a href="/hubungi" class="hover:text-blue-600">Kontak</a>
                <a href="/company" class="hover:text-blue-600">Company</a>
            </div>
        </div>
    </div>

    <p class="p-6 text-center text-sm text-white border-t border-slate-200 mt-8">
        &copy; 2025 UCEAI. All rights reserved.
    </p>
</footer> --}}

<footer class="bg-red-600 mt-auto shadow-lg">
    <div class="flex flex-col md:flex-row justify-between md:items-center gap-8 p-8 max-w-6xl mx-auto">

        <div class="flex flex-col gap-4 items-start">
            <div class="flex items-center gap-2 bg-white rounded-md p-4">
                <img src="/asset/BYS_LOGO.png" class="h-10 w-auto" alt="Baliyoni Logo">
            </div>
        </div>

        <div>
            <!-- Judul kolom dengan garis bawah untuk hierarki visual -->
            <h4 class="text-lg font-semibold text-white mb-4 pb-2 border-b border-white">
                Contact Us
            </h4>

            <!-- Wrapper untuk konten agar mudah diatur jaraknya -->
            <div class="space-y-4">

                <!-- Bagian Alamat -->
                <div class="flex items-start gap-3">
                    <!-- Ikon Alamat -->
                    <div class="flex-shrink-0 pt-1">
                        <span class="iconify" data-icon="mdi:map-marker-outline"
                            style="color: white; font-size: 1.2rem;"></span>
                    </div>
                    <!-- Teks Alamat -->
                    <p class="text-white text-sm leading-relaxed">
                        Jl. Tukad Batanghari No.1C, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80225
                    </p>
                </div>

                <!-- Bagian Email -->
                <div class="flex items-center gap-3">
                    <span class="iconify" data-icon="line-md:email-twotone"
                        style="color: white; font-size: 1.2rem;"></span>
                    <a href="mailto:uceai@unud.ac.id"
                        class="text-white hover:text-gray-800 transition-colors duration-300">
                        info@baliyoni.co.id
                    </a>
                </div>

                <!-- Bagian WhatsApp -->
                <div class="flex items-center gap-3">
                    <!-- Mengganti ikon menjadi ikon WhatsApp yang lebih spesifik -->
                    <span class="iconify" data-icon="mdi:whatsapp" style="color: white; font-size: 1.2rem;"></span>
                    <a href="https://wa.me/+6281916250421"
                        class="text-white hover:text-green-400 transition-colors duration-300">
                        +6281916250421
                    </a>
                </div>

            </div>
        </div>

        <div>
            <h4 class="text-white text-lg font-semibold mb-2">Links</h4>
            <div class="grid grid-cols-2 gap-x-6 gap-y-1 text-white text-sm">
                <a href="/" class="hover:scale-105">Home</a>
                <a href="{{ route('about') }}" class="hover:scale-105">About Us</a>
                <a href="{{ route('services') }}" class="hover:scale-105">Our Services</a>
                <a href="https://balimall.id/" class="hover:scale-105">Our Products</a>
                <a href="{{ route('partnership') }}" class="hover:scale-105">Partnerships</a>
                <a href="{{ route('contact') }}" class="hover:scale-105">Contact Us</a>
            </div>
        </div>

        {{-- <div>
            <h4 class="text-white font-semibold mb-2">Links</h4>
            <div class="grid grid-cols-2 gap-x-6 gap-y-1 text-white text-sm">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/layanan" class="hover:text-blue-600">Layanan</a>
                <a href="/solusi" class="hover:text-blue-600">Solusi</a>
                <a href="/harga" class="hover:text-blue-600">Harga</a>
                <a href="/articles" class="hover:text-blue-600">Berita</a>
                <a href="/hubungi" class="hover:text-blue-600">Kontak</a>
                <a href="/company" class="hover:text-blue-600">Company</a>
            </div>
        </div> --}}
    </div>

    <p class="p-6 text-center text-sm text-white border-t border-slate-200 mt-8">
        &copy; 2025 BYS. All rights reserved.
    </p>
</footer>
