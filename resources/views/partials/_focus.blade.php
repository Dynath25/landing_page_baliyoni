<div id="focus" class="bg-white py-6 sm:py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="relative px-4">
                <h2 class="text-3xl font-bold pb-3 text-blue-800 text-center">FOCUS FIELD</h2>
                <div class="absolute bottom-1 left-0 w-full h-px bg-blue-800"></div>
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/3 h-1.5 bg-blue-800"></div>
            </div>
        <div class="mx-auto max-w-2xl lg:text-center">
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none ">
            <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">

                @foreach ($focuses as $focus)
                <div class="flex flex-col ">
                    <!-- 1. Hapus 'lg:mx-0' dari sini agar gambar selalu di tengah -->
                    <div class="items-center justify-center">
                    <div class="h-20 w-20 lg:h-24 lg:w-24 rounded-md overflow-hidden mx-auto bg-blue-900">
                        <img src="{{ Storage::url($focus->focus_image) }}" alt="{{ $focus->focus_judul }}" class="w-full h-full object-cover">
                    </div>
                    </div>
                    <div class="mt-6 flex flex-auto flex-col text-base leading-7 text-gray-600 px-4 lg:px-0">
                        <h3 class="text-md font-bold text-gray-900 text-center">{{ $focus->focus_judul }}</h3>
                        <!-- 2. Tambahkan 'text-justify' di sini -->
                        <p class="text-sm mt-4 flex-auto text-justify">{{ $focus->focus_description }}</p>
                    </div>

                    {{-- <div class="mt-6 items-end justify-items-end">
                        <a href="#" class="inline-block rounded-md bg-yellow-400 px-5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-yellow-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">
                            View More
                        </a>
                    </div> --}}
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>
