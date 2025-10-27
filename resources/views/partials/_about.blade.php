<div id="about" class="bg-white text-red-500 w-full pb-4 lg:pb-8">
    <section id="about-content" class="py-24 lg:py-32">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 lg:grid-cols-6 gap-8">

                <div class="hidden lg:flex flex-col items-center justify-start pt-20 lg:pt-44" data-aos-delay="200"
                    data-aos="fade-up" data-aos-easing="ease-in-out">
                    <h2 class="text-3xl font-bold text-gray-800 transform -rotate-90 whitespace-nowrap">
                        One Stop Solution
                    </h2>
                </div>

                <div class="lg:col-span-5">
                    <h1 class="text-6xl lg:text-7xl font-bold text-black mb-6" data-aos-delay="300"
                        data-aos="fade-right" data-aos-easing="ease-in-out">About Us.</h1>
                    <p class="text-lg text-black leading-relaxed text-justify" data-aos-delay="400"
                        data-aos="fade-right" data-aos-easing="ease-in-out">
                        PT Baliyoni Saguna, Dikenal Dengan Brand Baliyoni Telah Berkiprah Dibisnis Teknologi Informasi
                        Dan Komunikasi (TIK) Selama Hampir Dua Dekade, Didirikan Tanggal 3 Mei 2000 Di Bali. Baliyoni
                        Telah Melayani Kebutuhan Teknologi Informasi Dan Komunikasi Puluhan Institusi Pemerintah Dan
                        Swasta Untuk Meningkatkan Performa, Efektivitas Dan Produktivitas Layanan Dan Kinerja Para
                        Pelanggannya.
                    </p>
                    <p class="mt-4 text-lg text-black leading-relaxed text-justify" data-aos-delay="500"
                        data-aos="fade-right" data-aos-easing="ease-in-out">
                        Prestasi Dan Kiprah Panjang Baliyoni Didukung Ketersediaan SDM Ahli Berpengalaman, Pemanfaatan
                        Teknologi Enterprise Resources Planning (ERP) Sebagai Backbone Back Office Perusahaan Serta
                        Kontrol Kualitas Yang Ketat Terhadap Proses Dan Hasil Akhir Pekerjaan Menjadikan Baliyoni Tetap
                        Eksis Hingga Hari Ini. Untuk Menjawab Dinamikanya Perkembangan Bisnis Di Hari Ini Dan Di Masa
                        Yang Akan Datang, Baliyoni Telah Melakukan Refocusing Business-Nya Melalui Komitmen Menjadi One
                        Stop IT Solution. Kesungguhan Komitmen Tersebut Juga Didukung Tekad Kuat Untuk Menyertakan
                        Kreativitas Dan Inovasi
                    </p>
                </div>
            </div>
    </section>

    <section id="about-image" class="my-20 lg:my-28" data-aos-delay="200" data-aos="fade-up"
        data-aos-easing="ease-in-out">
        <img src="{{ asset('asset/about_hardware.png') }}" alt="Hardware components" class="w-full h-auto shadow-lg">
    </section>

    <section id="about-motto" class="text-center mb-24">
        <div class="container mx-auto px-4">
            <h3 class="text-4xl font-bold text-red-600" data-aos-delay="200" data-aos="fade-down"
                data-aos-easing="ease-in-out">
                Our <strong class="text-black">Motto</strong>
            </h3>
            <h1 class="text-6xl lg:text-8xl font-extrabold text-black mt-2" data-aos-delay="800" data-aos="fade-down"
                data-aos-easing="ease-in-out">
                One Stop Solution
            </h1>
        </div>
    </section>
</div>
<section id="vision-mission" class="py-8 lg:py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-80 lg:h-96">
        {{-- Gambar Kiri --}}
        <div class="h-full bg-cover bg-no-repeat bg-left"
            style="background-image: url('{{ asset('asset/about_hardware.png') }}')" data-aos-delay="200"
            data-aos="fade-left" data-aos-easing="ease-in-out">
        </div>

        {{-- Teks Visi di Tengah --}}
        <div class="md:col-span-2 h-full flex flex-col justify-center p-32">
            <h2 class="text-6xl lg:text-7xl font-bold text-black" data-aos-delay="200" data-aos="fade-up"
                data-aos-easing="ease-in-out">Our Vision</h2>
            <p class="mt-4 text-2xl text-black max-w-xl mx-auto" data-aos-delay="300" data-aos="fade-up"
                data-aos-easing="ease-in-out">
                Mengoptimalkan Pemanfaatan Teknologi Informasi Sebagai Solusi Efektif (One Stop Solution) Yang
                Di Landasi Kreativitas Dan Inovasi.
            </p>
        </div>

        {{-- Gambar Kanan --}}
        <div class="h-full bg-cover bg-no-repeat bg-right"
            style="background-image: url('{{ asset('asset/about_hardware.png') }}')" data-aos-delay="200"
            data-aos="fade-right" data-aos-easing="ease-in-out">
        </div>
    </div>
    <div class="container mx-auto px-4">
        <div class="mt-56 lg:mt-64" x-data="{
            activeSlide: 0,
            totalSlides: 5,
            slidesVisible: 3,
            maxScrollSteps() {
                return this.totalSlides - this.slidesVisible;
            },
            scroll() {
                this.$refs.slider.style.transform = `translateX(-${this.activeSlide * (100 / this.slidesVisible)}%)`;
            },
            next() {
                // Jika sudah di slide terakhir, kembali ke awal. Jika tidak, maju 1.
                this.activeSlide = (this.activeSlide < this.maxScrollSteps()) ? this.activeSlide + 1 : 0;
                this.scroll();
            },
            prev() {
                // Jika sudah di slide pertama, pergi ke akhir. Jika tidak, mundur 1.
                this.activeSlide = (this.activeSlide > 0) ? this.activeSlide - 1 : this.maxScrollSteps();
                this.scroll();
            }
        }">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                <div class="lg:pr-8">
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-800" data-aos-delay="200" data-aos="fade-right"
                        data-aos-easing="ease-in-out">Our Mission</h2>
                    <p class="mt-2 text-lg text-gray-500" data-aos-delay="300" data-aos="fade-right"
                        data-aos-easing="ease-in-out">Misi Kami Adalah</p>
                    <div class="mt-6 flex space-x-3" data-aos-delay="350" data-aos="fade-right"
                        data-aos-easing="ease-in-out">
                        {{-- PERUBAHAN: Atribut ':disabled' dihapus --}}
                        <button @click="prev"
                            class="bg-white p-3 rounded-full shadow-md hover:bg-red-600 border-2 border-red-600 text-red-600 hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </button>
                        <button @click="next"
                            class="bg-white p-3 rounded-full shadow-md hover:bg-red-600 border-2 border-red-600 text-red-600 hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-3 overflow-hidden">
                    {{-- Slider Track --}}
                    <div class="flex transition-transform duration-500 ease-in-out" x-ref="slider">

                        {{-- Ulangi blok 'div' ini untuk setiap misi --}}
                        {{-- Slide 1 --}}
                        <div class="w-1/3 flex-shrink-0 px-3" data-aos-delay="200" data-aos="fade-down"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-red-600">
                                <img src="{{ asset('asset/tech-stuff1.jpg') }}" alt="Misi 1"
                                    class="w-full h-40 object-cover">
                                <p class="p-4 text-center text-black">Menghadirkan produk teknologi informasi
                                    terkini dan terpercaya</p>
                            </div>
                        </div>

                        {{-- Slide 2 --}}
                        <div class="w-1/3 flex-shrink-0 px-3" data-aos-delay="300" data-aos="fade-down"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-red-600">
                                <img src="{{ asset('asset/tech-stuff2.jpg') }}" alt="Misi 2"
                                    class="w-full h-40 object-cover">
                                <p class="p-4 text-center text-black">Menyediakan layanan pengolah data yang
                                    handal</p>
                            </div>
                        </div>

                        {{-- Slide 3 --}}
                        <div class="w-1/3 flex-shrink-0 px-3" data-aos-delay="400" data-aos="fade-down"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-red-600">
                                <img src="{{ asset('asset/abc.jpg') }}" alt="Misi 3"
                                    class="w-full h-40 object-cover">
                                <p class="p-4 text-center text-black">Merancang desain arsitektur enterprise
                                    global</p>
                            </div>
                        </div>

                        {{-- Slide 4 --}}
                        <div class="w-1/3 flex-shrink-0 px-3" data-aos-delay="500" data-aos="fade-down"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-red-600">
                                <img src="{{ asset('asset/choose-us-4.jpg') }}" alt="Misi 4"
                                    class="w-full h-40 object-cover">
                                <p class="p-4 text-center text-black">Memberikan layanan purna jual yang
                                    memuaskan</p>
                            </div>
                        </div>

                        {{-- Slide 5 --}}
                        <div class="w-1/3 flex-shrink-0 px-3" data-aos-delay="600" data-aos="fade-down"
                            data-aos-easing="ease-in-out">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-red-600">
                                <img src="{{ asset('asset/choose-us-5.jpg') }}" alt="Misi 5"
                                    class="w-full h-40 object-cover">
                                <p class="p-4 text-center text-black">Mengembangkan kemitraan yang berkelanjutan
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</div>
