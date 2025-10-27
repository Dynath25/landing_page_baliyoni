{{-- CSS Kustom untuk scrollbar --}}
<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        border: 3px solid transparent;
    }

    /* Sembunyikan scrollbar secara default */
    .custom-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: transparent transparent;
    }

    /* Tampilkan scrollbar saat group di-hover */
    .group:hover .custom-scrollbar {
        scrollbar-color: rgba(255, 255, 255, 0.5) transparent;
    }

    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .animate-scroll {
        animation: scroll 10s linear infinite;
    }
</style>

<div>
    <section class="relative h-screen flex items-center text-white">
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('asset/netHero.png') }}" alt="Internet Services"
                class="w-full h-full object-cover opacity-40">
        </div>
        <div class="relative container mx-auto px-4">
            <div class="max-w-lg">
                <h1 class="text-8xl font-extrabold" data-aos-delay="100" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Internet Services</h1>
                <p class="mt-4 text-4xl opacity-90" data-aos-delay="200" data-aos="fade-up"
                    data-aos-easing="ease-in-out">Service & Maintenance Komputer Jaringan.</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">
                <img src="{{ asset('asset/router.jpg') }}" alt="stuff" class="rounded-lg shadow-xl"
                    data-aos-delay="100" data-aos="fade-right" data-aos-easing="ease-in-out">
                <div>
                    <h3 class="text-5xl font-bold text-gray-800" data-aos-delay="300" data-aos="fade-up"
                        data-aos-easing="ease-in-out">Service & Maintenance Komputer Jaringan</h3>
                    <p class="mt-4 text-lg text-gray-600 text-justify" data-aos-delay="400" data-aos="fade-up"
                        data-aos-easing="ease-in-out">
                        Seiring dengan pertumbuhan perusahaan dan organisasi, kebutuhan akan penggunaan komputer,
                        jaringan, internet dan berbagai teknologi lainnya pasti akan sangat dibutuhkan. Awalnya mungkin
                        baru sedikit computer yang digunakan seperti Desktop, tapi kemudian perusahaan/organisasi akan
                        menambah laptop, notebook, smartphone, printer, jaringan dan lainnya. Semakin banyak sumberdaya
                        yang ada, semakin perlu dilakukan perawatan bulanan maupun mingguan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            {{-- PERUBAHAN: Mengembalikan layout ke grid 2 kolom --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">

                <div>
                    <h2 class="text-5xl font-bold text-gray-800" data-aos-delay="200" data-aos="fade-right"
                        data-aos-easing="ease-in-out">Penawaran Jasa yang kami tawarkan adalah:</h2>
                    <div class="mt-8 flex space-x-4">
                        <button
                            class="penawaran-swiper-button-prev text-red-600 bg-white p-3 rounded-full shadow-lg hover:bg-red-600 hover:text-white transition disabled:opacity-50"
                            data-aos-delay="500" data-aos="fade-right" data-aos-easing="ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button
                            class="penawaran-swiper-button-next text-red-600 bg-white p-3 rounded-full shadow-lg hover:bg-red-600 hover:text-white transition disabled:opacity-50"
                            data-aos-delay="300" data-aos="fade-right" data-aos-easing="ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-2 overflow-hidden">
                    <div class="swiper penawaran-swiper overflow-hidden">
                        <div class="swiper-wrapper py-4">
                            <div class="swiper-slide h-full" data-aos-delay="600" data-aos="fade-up"
                                data-aos-easing="ease-in-out">
                                <div class="group bg-red-600 text-white p-6 rounded-lg h-[450px] flex flex-col">
                                    <h4 class="font-bold text-3xl flex-shrink-0">Kontrak Service & Maintenance Komputer
                                    </h4>
                                    <div class="mt-4 text-lg flex-grow overflow-y-auto custom-scrollbar pr-2">
                                        <p class="space-y-2">
                                            Kontrak ini merupakan perawatan komputer, laptop, printer, server dan
                                            perangkat
                                            jaringan yang ada. Untuk memastikan semua perangkat berjalan dengan baik,
                                            termasuk jika memungkinkan jasa konsultasi kelistrikan yang digunakan.

                                            Untuk jasa maintenance komputer yang dilakukan adalah Hardisk
                                            cleanup/defragment, install dan uninstall program, Backup Data, Update anti
                                            virus, update software, mereperasi perangkat yang rusak, membersihkan virus
                                            local dan luar, membersihkan fisik perangkat serta hal-hal lain yang diminta
                                            perusahaan mitra.
                                            (Kontrak bisa didiskusikan apakah bulanan, on call saja ataupun rutin
                                            mingguan).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-full" data-aos-delay="600" data-aos="fade-up"
                                data-aos-easing="ease-in-out">
                                <div class="group bg-red-600 text-white p-6 rounded-lg h-[450px] flex flex-col">
                                    <h4 class="font-bold text-3xl flex-shrink-0">Instalasi, Setup dan Konfigurasi
                                        jaringan dan server
                                    </h4>
                                    <div class="mt-4 text-lg flex-grow overflow-y-auto custom-scrollbar pr-2">
                                        <p>Jika ditahap awal anda ingin kami membantu melakukan setup awal di perusahaan
                                            Anda, kami sejak awal bisa membantu mendesainkan berbagai keperluan Anda.
                                            Hal ini perlu dilakukan agar investasi anda tidak terbuang percuma, para
                                            engineer kami akan memberikan berbagai konsultasi kepada anda. Beberapa jasa
                                            yang sering kami kerjakan adalah sebagai berikut:</p>
                                        <ul class="list-disc list-inside mt-4 space-y-1">
                                            <li>Installation & Configuration Mikrotik RouterOS Server.</li>
                                            <li>Setup & Configuration Gateway Server.</li>
                                            <li>Setup & Configuration Hotspot Server.</li>
                                            <li>Setup & Configuration Web Proxy Server.</li>
                                            <li>Setup & Configuration Bandwidth Management & MRTG.</li>
                                            <li>Setup & Configuration Firewall Rules.</li>
                                            <li>Maintenance, Installation & Configuration Wireless Access Point.</li>
                                            <li>Wireless Network.</li>
                                            <li>Network Documentation.</li>
                                            <li>Server Room Documentation & Labeling.</li>
                                            <li>Training & Transfer Technology.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-full" data-aos-delay="600" data-aos="fade-up"
                                data-aos-easing="ease-in-out">
                                <div class="group bg-red-600 text-white p-6 rounded-lg h-[450px] flex flex-col">
                                    <h4 class="font-bold text-3xl flex-shrink-0"> Konsultasi Rekomendasi Jaringan</h4>
                                    <div class="mt-4 text-lg flex-grow overflow-y-auto custom-scrollbar pr-2">
                                        <p>Jika kondisi jaringan, komputer maupun wireless anda dirasa kurang optimal,
                                            semisal melambatnya akses internet padahal pemakai sedikit ataupun sudah
                                            berlangganan mahal tapi akses lambat, ataupun masalah keamanan, Anda bisa
                                            mengundang kami dan kami akan analisa dan berikan rekomendasi terbaik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <section class="py-20 bg-gray-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold" data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">Siap
                Meningkatkan Performa Jaringan Anda?</h2>
            <p class="mt-6 text-xl max-w-2xl mx-auto" data-aos-delay="1000" data-aos="fade-up"
                data-aos-easing="ease-in-out">
                Jangan biarkan konektivitas yang lambat menghambat bisnis Anda!</p>
            <a href="{{ route('contact') }}"
                class="mt-8 text-lg inline-block bg-red-600 text-white font-bold py-3 px-8 rounded-md hover:bg-white hover:text-red-600 transition"
                data-aos-delay="1500" data-aos="fade-up" data-aos-easing="ease-in-out">
                Mulai Konsultasi
            </a>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-8" data-aos-delay="200" data-aos="fade-down"
                data-aos-easing="ease-in-out">Teknologi & Partner</h2>
            <div
                class="w-full mt-16 overflow-hidden [mask-image:linear-gradient(to_right,transparent,white_10%,white_90%,transparent)]">
                <div class="flex w-max animate-scroll">
                    <div class="flex items-center shrink-0">
                        <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-12 mx-8" alt="Cisco Logo">
                        <img src="{{ asset('asset/partners/mikrotik.png') }}" class="max-h-12 mx-8"
                            alt="MikroTik Logo">
                        <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-12 mx-8" alt="Cisco Logo">
                        <img src="{{ asset('asset/partners/mikrotik.png') }}" class="max-h-12 mx-8"
                            alt="MikroTik Logo">

                    </div>
                    <div class="flex items-center shrink-0" aria-hidden="true">
                        <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-12 mx-8" alt="Cisco Logo">
                        <img src="{{ asset('asset/partners/mikrotik.png') }}" class="max-h-12 mx-8"
                            alt="MikroTik Logo">
                        <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-12 mx-8" alt="Cisco Logo">
                        <img src="{{ asset('asset/partners/mikrotik.png') }}" class="max-h-12 mx-8"
                            alt="MikroTik Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Script untuk slider Penawaran Jasa --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const penawaranSwiperEl = document.querySelector('.penawaran-swiper');
            if (penawaranSwiperEl && typeof Swiper !== 'undefined') {
                const penawaranSwiper = new Swiper(penawaranSwiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    navigation: {
                        nextEl: '.penawaran-swiper-button-next',
                        prevEl: '.penawaran-swiper-button-prev',
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        }
                    },
                });
            }
        });
    </script>
</div>
