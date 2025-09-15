

<section class="w-full bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-6 lg:px-8">
    {{-- <div class="text-center mb-12">
            <div class="relative">
                <h2 class="text-2xl font-bold pb-3 text-red-600 w-96 mx-auto">ABOUT US</h2>
                <div class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-full h-px bg-red-600"></div>
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-1.5 bg-red-600"></div>
            </div>              
        </div> --}}
    <div class="relative mx-auto max-w-screen-xl px-4 flex items-center justify-center">
       
        {{-- Kontainer untuk 2 layer yang tumpang tindih --}}
        <div class="relative flex items-center">

            {{-- Layer 1: Bagian Gambar (Kiri) --}}
            {{-- PERUBAHAN: Ukuran disesuaikan agar lebih proporsional --}}
            <div class="relative z-10">
                <div class="w-[650px] h-[550px] bg-white rounded-2xl overflow-hidden shadow-lg flex flex-col">
                    
                    {{-- Gambar pertama (atas) --}}
                    {{-- PERUBAHAN: Tinggi diubah menjadi h-1/2 agar membagi kontainer sama rata --}}
                    <div class="h-1/2 w-full">
                        {{-- Ganti placeholder di bawah ini dengan gambar Anda --}}
                         @if(isset($img1_url))
                            <img src="{{ $img1_url }}" alt="Gambar Tentang Kami 1" class="w-full h-full object-cover">
                        @endif
                    </div>
                    
                    {{-- Gambar kedua (bawah) --}}
                    {{-- PERUBAHAN: Tinggi diubah menjadi h-1/2 --}}
                    <div class="h-1/2 w-full">
                        {{-- Ganti placeholder di bawah ini dengan gambar Anda --}}
                        @if(isset($img2_url))
                            <img src="{{ $img2_url }}" alt="Gambar Tentang Kami 2" class="w-full h-full object-cover">
                        @endif
                    </div>
                </div>
            </div>

            {{-- Layer 2: Bagian About Us (Kanan dengan overlap) --}}
            {{-- PERUBAHAN: Ukuran, padding, dan struktur flexbox diubah --}}
            <div class="relative z-20 -ml-24 bg-neutral-900 rounded-3xl p-8 shadow-2xl w-[500px] h-[600px] flex flex-col">
                
                {{-- Judul --}}
                <h2 class="text-white text-3xl font-bold mb-4">About Us</h2>

                {{-- Deskripsi --}}
                {{-- PERUBAHAN: flex-grow akan mendorong tombol ke bawah --}}
                <p class="text-gray-300 text-sm leading-relaxed mb-8 flex-grow">
                    PT Baliyoni Saguna adalah mitra terpercaya Anda dalam solusi teknologi informasi dan komunikasi. Kami hadir sebagai One Stop IT Solution untuk membantu transformasi digital Anda.
                </p>

                {{-- Tombol Learn More --}}
                <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-md text-sm font-medium transition-colors duration-200 self-start">
                    Learn more
                </button>
            </div>
            </div>

        </div>
    </div>
</section>