<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}

    {{-- Memanggil konten dari partial _about.blade.php --}}
    {{-- Pastikan file Anda ada di resources/views/partials/_about.blade.php --}}
    @include('partials._about')

    <section id="focus" class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-black" data-aos-delay="200" data-aos="fade-right"
                        data-aos-easing="ease-in-out">Our Focus</h2>
                    <div class="mt-6 space-y-4 text-black text-lg leading-relaxed text-justify">
                        <p data-aos-delay="300" data-aos="fade-right" data-aos-easing="ease-in-out">
                            IT Service Adalah Salah Satu Divisi PT. Baliyoni Saguna Yang Berfokus Menyediakan Solusi
                            Perangkat Keras Meliputi Jasa Pengadaan, Instalasi, Konfigurasi Dan Pemeliharaan Perangkat
                            Keras. Termasuk Pada Rancang Bangun Infrastruktur Jaringan Komputer Berbasis LAN, WAN,
                            Wireless
                            Dan Fiber Optic.
                        </p>
                        <p data-aos-delay="400" data-aos="fade-right" data-aos-easing="ease-in-out">
                            Kedepannya Divisi IT Service Ini Diarahkan Menjadi Baliyoni Service Center Yang Berfokus
                            Pada
                            Perbaikan, Pemeliharaan, Instalasi Dan Konfigurasi Perangkat Keras Komputer, Perangkat
                            Jaringan
                            Dan Perangkat Keras Pendukung Lainnya.
                        </p>
                    </div>
                </div>

                <div class="relative min-h-[450px]">
                    {{-- Lapisan Belakang (Bingkai Gelap) --}}
                    <div class="absolute top-5 right-0 w-11/12 h-5/6" data-aos-delay="600" data-aos="fade-down"
                        data-aos-easing="ease-in-out">
                        <img src="{{ asset('asset/focus.png') }}" alt="Our Focus Team"
                            class="w-full h-full object-cover shadow-xl">
                        <div class="absolute inset-0 bg-black/35"></div>
                    </div>

                    {{-- Lapisan Depan (Gambar Utama) --}}
                    <div class="absolute bottom-0 left-0 w-11/12 h-5/6" data-aos-delay="300" data-aos="fade-down"
                        data-aos-easing="ease-in-out">
                        <img src="{{ asset('asset/focus.png') }}" alt="Our Focus Team"
                            class="w-full h-full object-cover shadow-xl">
                    </div>
                </div>

            </div>
        </div>
    </section>




</x-layout>
