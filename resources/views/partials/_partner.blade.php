<!-- Container Utama untuk Grid Logo -->
<div id="partner" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="text-center mb-16 px-4">
        <div class="relative px-4">
            <h2 class="text-3xl font-bold pb-3 text-blue-800">PARTNER</h2>
            <div class="absolute bottom-1 left-0 w-full h-px bg-blue-800"></div>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/3 h-1.5 bg-blue-800"></div>
        </div>              
    </div>

    <!-- 
      PERBAIKAN:
      - 'flex-col': Membuat layout vertikal di mobile (default).
      - 'sm:flex-row': Mengembalikan layout ke horizontal di tablet ke atas.
      - 'gap-y-12': Mengatur jarak vertikal di mobile.
      - 'sm:gap-x-16': Mengatur jarak horizontal di tablet ke atas.
    -->
    <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-y-12 sm:gap-x-16 gap-x-24">

        @forelse($partnerships as $partnership)
            <div class="text-center transition-transform transform hover:scale-110">
                <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                     alt="{{ $partnership->name }}" 
                     class="max-h-20 mx-auto object-contain">
            </div>
        @empty
        @endforelse

    </div>
</div>
