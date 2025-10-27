@php
    // Data ini nantinya bisa Anda ambil dari database
    // Misalnya, produk yang ditandai sebagai 'is_featured'
    $featuredProducts = [
        [
            'image' => 'asset/product/server2.png',
            'element' => 'asset/tes2.png',
            'badge' => 'Featured Product',
            'badge_color' => 'red',
            'name' => 'High-Performance Server',
            'description' =>
                'Solusi server handal dengan performa tinggi yang dirancang untuk kebutuhan enterprise, memastikan ketersediaan data dan aplikasi bisnis Anda 24/7.',
            'link' => '#',
        ],
        [
            'image' => 'asset/product/laptop-float.png',
            'element' => 'asset/tes3.png',
            'badge' => 'Best Seller',
            'badge_color' => 'blue',
            'name' => 'Modern Business Laptop',
            'description' =>
                'Dibekali dengan performa tinggi, desain portabel, dan fitur keamanan canggih untuk menunjang produktivitas Anda di mana saja.',
            'link' => '#',
        ],
    ];
@endphp

<section class="py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="swiper featured-product-swiper">
            <div class="swiper-wrapper">

                @foreach ($featuredProducts as $product)
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
                            <div class="relative min-h-[450px] transform hover:scale-110 transition-transform duration-300"
                                data-aos-delay="300" data-aos="fade-up" data-aos-easing="ease-in-out">
                                {{-- <div
                                    class="absolute bottom-0 right-0 w-11/12 h-5/6 bg-{{ $product['badge_color'] }}-600 rounded-2xl">
                                </div> --}}
                                <div class="absolute bottom-0 right-0 w-11/12 h-5/6 p-2">
                                    <img src="{{ asset($product['element']) }}" alt="{{ $product['name'] }} detail"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="absolute bottom-5 right-7 w-11/12 h-5/6">
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                                        class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div>
                                <span class="font-semibold text-{{ $product['badge_color'] }}-600" data-aos-delay="300"
                                    data-aos="fade-up" data-aos-easing="ease-in-out">{{ $product['badge'] }}</span>
                                <h2 class="mt-2 text-4xl lg:text-5xl font-bold text-gray-800" data-aos-delay="400"
                                    data-aos="fade-up" data-aos-easing="ease-in-out">{{ $product['name'] }}
                                </h2>
                                <p class="mt-4 text-gray-600 leading-relaxed" data-aos-delay="500" data-aos="fade-up"
                                    data-aos-easing="ease-in-out">{{ $product['description'] }}</p>
                                <div class="relative inline-block mt-8" data-aos="fade-up" data-aos-delay="600">
                                    <div class="absolute top-1 left-1 w-full h-full border-2 border-red-600 rounded-md">
                                    </div>
                                    <a href="https://balimall.id/"
                                        class="relative inline-block bg-red-600 text-lg text-white font-bold py-3 px-8 rounded-md transition transform hover:-translate-x-1 hover:-translate-y-1">
                                        See More Product
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="flex justify-center space-x-4 mt-8">
                <button
                    class="featured-swiper-button-prev border-b border-red-600 text-red-600 bg-white p-3 rounded-full shadow-md hover:bg-red-600 hover:text-white transition disabled:opacity-50">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="featured-swiper-button-next border-b border-red-600 text-red-600 bg-white p-3 rounded-full shadow-md hover:bg-red-600 hover:text-white transition disabled:opacity-50">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
</section>

{{-- Script untuk Featured Product Swiper --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const featuredSwiperEl = document.querySelector('.featured-product-swiper');
        if (featuredSwiperEl && typeof Swiper !== 'undefined') {
            const featuredSwiper = new Swiper(featuredSwiperEl, {
                slidesPerView: 1,
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: '.featured-swiper-button-next',
                    prevEl: '.featured-swiper-button-prev',
                },
            });
        }
    });
</script>
