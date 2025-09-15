<div id="people" class="bg-blue-900 mt-12">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        
        <!-- PERBAIKAN: Judul dibuat responsif -->
        <div class="relative mb-12 text-center lg:text-left px-4">
            <div class="relative">
                <h2 class="text-2xl font-bold pb-3 text-white">PEOPLE</h2>
                <div class="absolute bottom-1 left-0 w-full h-0.5 bg-white"></div>
                <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-white"></div>
            </div>
        </div>

        <!-- 
          PERBAIKAN: 
          - Di mobile, grid diubah menjadi 1 kolom (grid-cols-1).
          - 2 kolom dimulai dari layar tablet (sm:grid-cols-2).
        -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-x-8 gap-y-12">
            @foreach ($peoples as $person)
            <div class="text-center">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full mx-auto mb-2 overflow-hidden shadow-lg">
                    <img src="{{ Storage::url($person->people_avatar) }}" class="w-full h-full object-cover" alt="{{ $person->people }}">
                </div>
                <p class="text-white font-semibold mt-4 text-sm">{{ $person->people }} <br>{{ $person->people_position }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
