<section id="roadmap" class="bg-white py-16 sm:py-24">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title -->
       <div class="text-center mb-12">
            <div class="relative">
                <h2 class="text-2xl font-bold pb-3 text-blue-800 w-96 mx-auto">ROADMAP</h2>
                <div class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-full h-px bg-blue-800"></div>
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-1.5 bg-blue-800"></div>
            </div>              
        </div>
        <!-- Roadmap Timeline Container -->
        <div class="relative">
            <!-- Center Line (HANYA DESKTOP) -->
            <div class="absolute left-1/2 top-8 h-full w-1 bg-blue-800 transform -translate-x-1/2 hidden md:block"></div>
            
            <!-- Garis timeline di sisi kiri (HANYA MOBILE) -->
            <div class="absolute left-4 top-8 h-full w-1 bg-blue-800 md:hidden"></div>

            <!-- Timeline Items -->
            <div class="relative flex flex-col space-y-12">

                @foreach($roadmapItems as $year => $items)
                    @php
                        $side = $items->first()->side ?? 'left'; 
                    @endphp

                    <!-- Wrapper untuk setiap item tahun -->
                    <div class="relative">

                        <!-- Timeline Marker (Posisinya responsif) -->
                        <div class="absolute left-4 top-8 transform -translate-x-1/2 z-10 md:left-1/2">
                            <div class="w-5 h-5 bg-yellow-400 rounded-full border-4 border-blue-800"></div>
                        </div>

                        <!-- Kontainer Konten -->
                        <!-- 
                          PERBAIKAN UTAMA: 
                          - Di mobile: 'w-full pl-12' (lebar penuh dengan padding kiri).
                          - Di desktop: 'md:w-1/2'.
                          - Posisi diatur dengan 'md:ml-auto' untuk sisi kanan.
                        -->
                        <div class="w-full pl-12 md:w-1/2 md:pl-0 @if($side === 'left') md:pr-8 @else md:ml-auto md:pl-8 @endif">
                            <div class="bg-gray-100 p-6 rounded-lg relative">
                                
                                <!-- Panah Desktop (Arah Kanan) -->
                                <div class="absolute top-8 -right-3 w-0 h-0 hidden @if($side === 'left') md:block @endif 
                                    border-t-[15px] border-t-transparent
                                    border-l-[15px] border-l-gray-100
                                    border-b-[15px] border-b-transparent">
                                </div>
                                
                                <!-- Panah Desktop (Arah Kiri) -->
                                <div class="absolute top-8 -left-3 w-0 h-0 hidden @if($side === 'right') md:block @endif
                                    border-t-[15px] border-t-transparent
                                    border-r-[15px] border-r-gray-100
                                    border-b-[15px] border-b-transparent">
                                </div>

                                <!-- Panah Mobile (Selalu Arah Kiri) -->
                                <div class="absolute top-8 -left-[39px] w-0 h-0 md:hidden
                                    border-t-[15px] border-t-transparent
                                    border-r-[15px] border-r-gray-100
                                    border-b-[15px] border-b-transparent">
                                </div>
                                
                                <!-- Konten dirender di sini -->
                                <!-- Colored Research Boxes -->
                                <div class="space-y-4 mb-6">
                                    @foreach($items->whereIn('type', ['Excellence Research', 'Supporting Research']) as $item)
                                        <div class="{{ $item->type === 'Excellence Research' ? 'bg-green-600' : 'bg-blue-600' }} text-white p-3 rounded-md text-center font-semibold">
                                            {{ $item->title }}
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Year Title -->
                                <h4 class="text-2xl font-bold text-blue-800 mb-4">{{ $year }}</h4>

                                <!-- Topic List -->
                                @foreach($items->where('type', 'Topic')->groupBy('category') as $category => $categoryItems)
                                    <div class="mb-6">
                                        @if($category)
                                            <h5 class="font-bold text-gray-700 uppercase">{{ $category }}</h5>
                                        @endif
                                        <div class="mt-2 @if($category) pl-4 @endif text-gray-600 space-y-2">
                                            @foreach($categoryItems as $item)
                                                <div>
                                                    <p class="font-semibold">{{ $item->title }}</p>
                                                    @if($item->description)
                                                        <p class="text-sm break-words">{{ $item->description }}</p>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
