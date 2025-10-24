<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Hero Section --}}
    <div class="relative w-full pt-15 lg:pt-16">
        {{-- Slider as background --}}
        @include('partials._slider', ['sliders' => $sliders])
        <div class="absolute inset-0 bg-black opacity-40"></div>

        {{-- Overlay for content --}}
        <div
            class="absolute inset-0 z-20 flex flex-col items-start justify-center bg-light-grey bg-opacity-50 p-4 text-white">
            {{-- Tombol "Try It Now!" --}}

            {{-- <a href="/project-hand-gesture-main/landing.html" class="text-xl font-bold md:text-xl bg-blue-900 text-white px-10 py-2 mb-8">Try It Now!</a> --}}

            <div class="relative z-20 max-w-2xl mx-auto md:mx-0 px-4 md:px-8 lg:px-12"> {{-- Membatasi lebar teks --}}
                {{-- Judul Utama --}}
                <h1 class="text-5xl lg:text-8xl font-extrabold leading-tight [text-shadow:1px_1px_4px_white]"
                    data-aos-delay="200" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <span class="text-black inline-block rounded-md">One Stop</span><br>
                    <span class="text-black inline-block rounded-md">IT</span>
                    <span class="text-red-600 inline-block rounded-md">Solution</span>
                </h1>

                {{-- Sub-judul / Deskripsi --}}
                <p class="mt-6 text-lg md:text-2xl text-white [text-shadow:2px_2px_2px_rgba(0,0,0,1)]"
                    data-aos-delay="300" data-aos="fade-right" data-aos-easing="ease-in-out">
                    PT Baliyoni Saguna adalah mitra terpercaya Anda dalam solusi teknologi informasi dan komunikasi.
                    Kami hadir sebagai One Stop IT Solution untuk membantu transformasi digital Anda.
                </p>

                {{-- Tombol --}}
                <div class="mt-6">
                    <a href="{{ route('product') }}"
                        class="inline-block bg-red-600 text-white font-bold py-3 px-8 rounded-md text-lg hover:bg-red-700 transition-colors duration-300 shadow-xl"
                        data-aos-delay="400" data-aos="fade-right" data-aos-easing="ease-in-out">
                        Explore Our Product
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-about-section />
    <x-vision-mission />

    {{-- @include('partials.roadmaps') --}}
    {{-- @include('partials._product-multiple') --}}
    <div data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">
        <div id="product" class="bg-gray-200 py-20 lg:py-28">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-4xl lg:text-5xl font-bold text-black">Our Services</h2>
                    <p class="mt-4 text-lg text-black">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, voluptates.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 lg:gap-8 mt-24">

                    <div class="relative bg-white rounded-2xl p-8 text-center pt-20" data-aos-delay="400"
                        data-aos="fade-down" data-aos-easing="ease-in-out">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <div class="bg-gray-800 text-white w-20 h-20 rounded-full flex items-center justify-center shadow-lg"
                                data-aos-delay="600" data-aos="fade-down" data-aos-easing="ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Product</h3>
                        <p class="mt-2 text-gray-500">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eum?
                        </p>
                        <a href="{{ route('product') }}"
                            class="mt-6 inline-block bg-gray-800 text-white font-semibold py-2 px-6 rounded-full hover:bg-gray-700 transition-colors">
                            learn more
                        </a>
                    </div>

                    <div class="relative bg-gray-800 text-white rounded-2xl p-8 text-center pt-20" data-aos-delay="500"
                        data-aos="fade-down" data-aos-easing="ease-in-out">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <div class="bg-red-600 text-white w-20 h-20 rounded-full flex items-center justify-center shadow-lg"
                                data-aos-delay="700" data-aos="fade-down" data-aos-easing="ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0 -3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold">Hardware Service</h3>
                        <p class="mt-2 text-gray-300">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, omnis.
                        </p>
                        <a href="{{ route('services') }}"
                            class="mt-6 inline-block bg-red-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-500 transition-colors">
                            learn more
                        </a>
                    </div>

                    <div class="relative bg-red-600 text-white rounded-2xl p-8 text-center pt-20" data-aos-delay="600"
                        data-aos="fade-down" data-aos-easing="ease-in-out">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <div class="bg-white text-red-600 w-20 h-20 rounded-full flex items-center justify-center shadow-lg"
                                data-aos-delay="800" data-aos="fade-down" data-aos-easing="ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.884 5.063l1.233-.616a2 2 0 012.364 0l1.233.616M16.116 5.063l-1.233.616a2 2 0 01-2.364 0l-1.233-.616m12.422 5.973l-1.636 1.227a2 2 0 01-2.45-.112l-1.636-1.227m-12.422 0l1.636 1.227a2 2 0 002.45.112l1.636-1.227" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold">Network</h3>
                        <p class="mt-2 text-red-100">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <a href="{{ route('services') }}"
                            class="mt-6 inline-block bg-white text-red-600 font-semibold py-2 px-6 rounded-full hover:bg-red-100 transition-colors">
                            learn more
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-featured-product />

    <x-why-us />

    <x-partners-section />

    <x-contact-section />


    {{-- Main Content --}}


    {{-- Main Content Wrapper with consistent padding and spacing --}}
    {{-- <div class="space-y-20 px-4 sm:px-6 lg:px-8">

        @include('article_news.catalog_article', ['article' => $articles])

    </div>
    @include('partials._people', ['people' => $peoples])
    @include('partials._focus', ['focuses' => $focuses])
    @include('partials._portfolios', ['portfolios' => $portfolios])
    @include('partials._partner', ['partnerships' => $partnerships]) --}}
</x-layout>
