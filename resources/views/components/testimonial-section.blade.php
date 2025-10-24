{{-- resources/views/components/testimonials-section.blade.php --}}

@php
    // Untuk contoh, data testimoni ditulis di sini.
    // Nantinya, ini bisa Anda ambil dari database melalui Filament.
    $testimonials = [
        [
            'name' => 'Andi Wijaya',
            'title' => 'CEO, Maju Jaya Tech',
            'avatar' => 'asset/blank-pfp.png',
            'review' =>
                'Layanan dan produk dari Baliyoni Group benar-benar melebihi ekspektasi. Tim mereka sangat profesional dan responsif. Infrastruktur IT kami sekarang jauh lebih stabil.',
        ],
        [
            'name' => 'Siti Lestari',
            'title' => 'IT Manager, Cipta Karya',
            'avatar' => 'asset/blank-pfp.png',
            'review' =>
                'Pengadaan server berjalan sangat lancar dan cepat. Kualitas produknya original dan bergaransi resmi. Sangat direkomendasikan untuk kebutuhan enterprise.',
        ],
        [
            'name' => 'Budi Santoso',
            'title' => 'Owner, Creative Agency',
            'avatar' => 'asset/blank-pfp.png',
            'review' =>
                'Sebagai agensi kreatif, kami butuh jaringan yang cepat dan handal. Baliyoni Group memberikan solusi Wi-Fi yang mencakup seluruh area kantor kami tanpa kendala. Luar biasa!',
        ],
    ];
@endphp

<section class="py-16 lg:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-6">
            <h2 class="text-4xl font-bold text-gray-800" data-aos="fade-up" data-aos-delay="200"
                data-aos-easing="ease-in-out">What Our Clients Say</h2>
            <p class="mt-4 text-gray-500" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out">Kami bangga
                dapat memberikan layanan terbaik dan membangun hubungan jangka
                panjang dengan para klien kami.</p>
        </div>

        <div class="relative">
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper pb-8">

                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide h-auto" data-aos="fade-up" data-aos-delay="500"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white p-8 rounded-lg shadow-md h-full grid grid-rows-[auto,1fr,auto]">
                                <div class="text-gray-500 text-5xl leading-none">“</div>
                                <p class="text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="700"
                                    data-aos-easing="ease-in-out">
                                    {{ $testimonial['review'] }}
                                </p>
                                <div class="mt-4 flex items-center">
                                    <img src="{{ asset($testimonial['avatar']) }}" alt="{{ $testimonial['name'] }}"
                                        class="w-12 h-12 rounded-full object-cover" data-aos="fade-up"
                                        data-aos-delay="750" data-aos-easing="ease-in-out">
                                    <div class="ml-4">
                                        <p class="font-semibold text-gray-800" data-aos="fade-up" data-aos-delay="800"
                                            data-aos-easing="ease-in-out">{{ $testimonial['name'] }}</p>
                                        <p class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="850"
                                            data-aos-easing="ease-in-out">{{ $testimonial['title'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

{{-- Script Khusus untuk Testimonial Swiper --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialsSwiperEl = document.querySelector('.testimonials-swiper');
        if (testimonialsSwiperEl && typeof Swiper !== 'undefined') {
            const testimonialsSwiper = new Swiper(testimonialsSwiperEl, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
        }
    });
</script>
