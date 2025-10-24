{{-- resources/views/components/partners-section.blade.php --}}

<style>
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

<section id="partnership" class="py-18 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">

            <div class="lg:pr-8 text-center lg:text-left">
                <h2 class="text-4xl font-bold text-gray-800" data-aos-delay="200" data-aos="fade-right"
                    data-aos-easing="ease-in-out">Our Partners</h2>
                <p class="mt-4 text-gray-500" data-aos-delay="300" data-aos="fade-right" data-aos-easing="ease-in-out">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat doloribus fugit! Provident
                    dolor repudiandae numquam.
                </p>
                <a href="{{ route('partnership') }}"
                    class="mt-6 inline-block bg-red-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-800 transition-colors"
                    data-aos-delay="350" data-aos="fade-right" data-aos-easing="ease-in-out">
                    See more
                </a>
            </div>

            <div class="lg:col-span-2 w-full">
                <div
                    class="w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,white_10%,white_90%,transparent)]">

                    {{-- Kontainer "film strip" yang bergerak --}}
                    <div class="flex w-max animate-scroll hover:[animation-play-state:paused]">

                        <div class="flex items-center shrink-0">
                            <img src="{{ asset('asset/partners/hp.png') }}" class="max-h-10 mx-8" alt="HP Logo">
                            <img src="{{ asset('asset/partners/google.png') }}" class="max-h-10 mx-8" alt="Google Logo">
                            <img src="{{ asset('asset/partners/ibm.png') }}" class="max-h-12 mx-8" alt="IBM Logo">
                            <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-10 mx-8" alt="Cisco Logo">
                        </div>

                        {{-- 'aria-hidden' agar tidak dibaca dua kali oleh screen reader --}}
                        <div class="flex items-center shrink-0" aria-hidden="true">
                            <img src="{{ asset('asset/partners/hp.png') }}" class="max-h-10 mx-8" alt="HP Logo">
                            <img src="{{ asset('asset/partners/google.png') }}" class="max-h-10 mx-8" alt="Google Logo">
                            <img src="{{ asset('asset/partners/ibm.png') }}" class="max-h-12 mx-8" alt="IBM Logo">
                            <img src="{{ asset('asset/partners/cisco.png') }}" class="max-h-10 mx-8" alt="Cisco Logo">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
