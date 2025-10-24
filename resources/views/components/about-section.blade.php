{{-- resources/views/components/about-section.blade.php --}}

<section id="about" class="py-20 lg:py-28 bg-white overflow-hidden">
    <div class="container mx-auto px-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center">
            <div class="relative">
                <div class="flex gap-4 items-start">
                    <div class="flex flex-col gap-4 w-[35%]">
                        <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out">
                            <img src="{{ asset('asset/cpu.png') }}" class="w-full rounded-lg" alt="Intel Processor">
                        </div>
                        <div data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">
                            <img src="{{ asset('asset/office.png') }}" class="w-full rounded-lg" alt="Office Interior">
                        </div>
                    </div>
                    <div class="w-[45%] -mt-8">
                        <div data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">
                            <img src="{{ asset('asset/printer.png') }}" class="w-full rounded-lg" alt="Printer">
                        </div>
                    </div>
                </div>

                {{-- PERUBAHAN: style=".." diubah menjadi kelas Tailwind --}}
                <div class="absolute top-[-1rem] left-[-2rem]" data-aos-delay="400" data-aos="fade-right"
                    data-aos-easing="ease-in-out">
                    <div class="bg-white p-3 rounded-xl border shadow-lg text-center border-red-600">
                        <h3 class="text-xl font-bold text-gray-800">45+</h3>
                        <p class="text-sm text-gray-500 whitespace-nowrap">Active Partners</p>
                    </div>
                </div>

                <div class="absolute bottom-[1rem] right-[8.5rem]" data-aos-delay="300" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
                    <div class="bg-white p-3 rounded-xl border shadow-lg text-center border-red-600">
                        <h3 class="text-xl font-bold text-gray-800">100+</h3>
                        <p class="text-sm text-gray-500 whitespace-nowrap">Satisfied Customers</p>
                    </div>
                </div>

                <div class="absolute bottom-[-2.5rem] left-[8.5%]" data-aos-delay="200" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
                    <div class="bg-white p-3 rounded-xl border shadow-lg text-center border-red-600">
                        <h3 class="text-xl font-bold text-gray-800">62+</h3>
                        <p class="text-sm text-gray-500 whitespace-nowrap">Companies</p>
                    </div>
                </div>
            </div>

            <div class="lg:pl-10">
                <h2 class="text-6xl lg:text-7xl font-bold text-gray-800 mb-4" data-aos-delay="300" data-aos="fade-left"
                    data-aos-easing="ease-in-out">About Us</h2>
                <p class="text-xl text-gray-600 leading-relaxed text-justify" data-aos-delay="400" data-aos="fade-left"
                    data-aos-easing="ease-in-out">
                    PT Baliyoni Saguna is your trusted partner in information and communication technology solutions. We
                    are here as a <strong class="text-black font-bold">One Stop IT</strong>
                    <strong class="text-red-600 font-bold">Solution</strong> to assist in your digital
                    transformation.
                </p>
                <a href="{{ asset('about') }}"
                    class="mt-8 inline-block bg-red-600 text-white font-semibold py-3 px-6 rounded-md text-base hover:bg-red-700 transition-colors duration-300"
                    data-aos-delay="400" data-aos="fade-left" data-aos-easing="ease-in-out">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>
