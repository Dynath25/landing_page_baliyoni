<div id="product" class="bg-gray-100 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Kontainer untuk 5 kartu, menggunakan Flexbox --}}
        {{-- 'gap-4' memberi jarak antar kartu --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

            {{-- Kartu 1: Посмотреть дома --}}
            <div class="bg-white rounded-xl shadow-sm p-5 w-full sm:w-auto flex-1 flex flex-col h-32">
                <div class="mb-2">
                    {{-- Ikon Rumah --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-sm flex-grow">Посмотреть<br>дома</p>
            </div>

            {{-- Kartu 2: Экскурсия по комплексу --}}
            <div class="bg-white rounded-xl shadow-sm p-5 w-full sm:w-auto flex-1 flex flex-col h-32">
                <div class="mb-2">
                    {{-- Ikon Gedung --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-sm flex-grow">Экскурсия<br>по комплексу</p>
            </div>

            {{-- Kartu 3: Рассчитать ипотеку (State Aktif) --}}
            {{-- PERUBAHAN: Background dan warna teks berbeda untuk meniru state aktif --}}
            <div class="bg-stone-500 rounded-xl shadow-md p-5 w-full sm:w-auto flex-1 flex flex-col h-32">
                <div class="mb-2">
                    {{-- Ikon Kalkulator --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="text-white font-medium text-sm flex-grow">Рассчитать<br>ипотеку</p>
            </div>

            {{-- Kartu 4: Скачать буклет --}}
            <div class="bg-white rounded-xl shadow-sm p-5 w-full sm:w-auto flex-1 flex flex-col h-32">
                <div class="mb-2">
                    {{-- Ikon Download --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-sm flex-grow">Скачать<br>буклет</p>
            </div>

            {{-- Kartu 5: Заказать такси --}}
            <div class="bg-white rounded-xl shadow-sm p-5 w-full sm:w-auto flex-1 flex flex-col h-32">
                <div class="mb-2">
                    {{-- Ikon Mobil/Taksi --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-sm flex-grow">Заказать такси<br>в отдел продаж</p>
            </div>

        </div>
    </div>
</div>