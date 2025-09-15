{{-- resources/views/partials/_slider.blade.php --}}
@if($sliders->isEmpty())
    {{-- Fallback jika tidak ada gambar slider --}}
    <div class="flex h-[60vh] items-center justify-center bg-gray-100 md:h-[72vh] lg:h-[92vh]">
        <div class="text-center text-gray-500">
        </div>
    </div>
@else
    {{-- PERBAIKAN: Tinggi di mobile diubah dari 52vh menjadi 60vh --}}
    <div id="slider-container"
         class="relative w-full h-[92vh] md:h-[72vh] lg:h-[92vh] overflow-hidden group"
         role="region"
         aria-roledescription="carousel"
         aria-label="Galeri Gambar">

        <!-- Gambar-gambar Slider -->
        <div class="w-full h-full">
            @foreach($sliders as $slider)
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100' : 'opacity-0' }}">
                    <img
                        src="{{ asset('storage/' . $slider->thumbnail) }}"
                        alt="{{ $slider->name }}"
                        class="w-full h-full object-cover object-center"
                        @if($loop->first) loading="eager" @else loading="lazy" @endif
                        onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/e2e8f0/4a5568?text=Image+Not+Found';"
                    />
                </div>
            @endforeach
        </div>

        <!-- Konten Overlay (Judul & Tombol) -->
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center bg-black bg-opacity-40 p-4 text-center text-white">

            <div class="relative z-20 max-w-5xl">
                <h1 data-aos="fade-up" 
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold bg-yellow-500 text-blue-700 px-6 py-3 sm:px-10 sm:py-4">
                    UDAYANA CENTER OF <br>
                    EXCELLENT AI INNOVATION
                </h1>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sliderContainer = document.getElementById('slider-container');
            if (!sliderContainer) return;

            const slides = sliderContainer.querySelectorAll('.slide');
            const slideCount = slides.length;

            if (slideCount <= 1) {
                return;
            }

            let activeIndex = 0;
            
            const goToSlide = (index) => {
                if(slides[activeIndex]) slides[activeIndex].classList.replace('opacity-100', 'opacity-0');
                activeIndex = (index + slideCount) % slideCount;
                if(slides[activeIndex]) slides[activeIndex].classList.replace('opacity-0', 'opacity-100');
            };

            const startInterval = () => {
                return setInterval(() => {
                    goToSlide(activeIndex + 1);
                }, 5000);
            };

            let slideInterval = startInterval();
        });
    </script>
@endif
