{{-- resources/views/partials/_slider.blade.php --}}
<div class="absolute inset-0 z-20 flex flex-col items-center justify-center bg-black bg-opacity-40 p-4 text-center text-white">

    {{-- Content Container --}}
    <a href="/project-hand-gesture-main/landing.html" class="text-xl font-bold md:text-xl bg-blue-900 text-white px-10 py-2 mb-8">Try It Now!</a>

    <div class="relative z-20 max-w-4xl">
        <h1 data-aos="fade-up" class="text-3xl font-bold md:text-3xl bg-yellow-500 text-blue-700 px-10 py-4 ">
            UDAYANA CENTER OF <br>
            EXCELENT AI INNOVATION
        </h1>
    </div>
</div>
@if($sliders->isEmpty())
    <div class="flex h-[52vh] items-center justify-center bg-gray-100 md:h-[72vh] lg:h-[92vh]">
    </div>
@else
    <div id="slider-container"
        class="relative w-full h-[52vh] md:h-[72vh] lg:h-[92vh] overflow-hidden group"
        role="region"
        aria-roledescription="carousel"
        aria-label="Galeri Gambar">

        <div class="w-full h-full">
            @foreach($sliders as $slider)
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100' : 'opacity-0' }}"
                    role="group"
                    aria-roledescription="slide"
                    aria-label="{{ $loop->iteration }} dari {{ $loop->count }}">
                    <img
                        src="{{ asset('storage/' . $slider->thumbnail) }}"
                        alt="{{ $slider->name }}"
                        class="w-full h-full object-cover object-center"
                        {{-- Muat gambar pertama secara langsung, sisanya lazy load --}}
                        @if($loop->first) loading="eager" @else loading="lazy" @endif
                        onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/e2e8f0/4a5568?text=Image+Not+Found';"
                    />
                </div>
            @endforeach
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sliderContainer = document.getElementById('slider-container');
            if (!sliderContainer) return;

            const slides = sliderContainer.querySelectorAll('.slide');
            const dots = sliderContainer.querySelectorAll('.slider-dot');
            const prevButton = document.getElementById('slider-prev');
            const nextButton = document.getElementById('slider-next');
            const slideCount = slides.length;

            if (slideCount <= 1) {
                if(prevButton) prevButton.style.display = 'none';
                if(nextButton) nextButton.style.display = 'none';
                if(dots.length > 0) sliderContainer.querySelector('.absolute.bottom-5').style.display = 'none';
                return;
            }

            let activeIndex = 0;
            let slideInterval;

            const goToSlide = (index) => {
                slides[activeIndex].classList.replace('opacity-100', 'opacity-0');
                dots[activeIndex].classList.replace('bg-white', 'bg-white/50');
                dots[activeIndex].removeAttribute('aria-current');

                activeIndex = (index + slideCount) % slideCount;

                slides[activeIndex].classList.replace('opacity-0', 'opacity-100');
                dots[activeIndex].classList.replace('bg-white/50', 'bg-white');
                dots[activeIndex].setAttribute('aria-current', 'true');
            };

            const startInterval = () => {
                slideInterval = setInterval(() => {
                    goToSlide(activeIndex + 1);
                }, 5000);
            };

            const stopInterval = () => {
                clearInterval(slideInterval);
            };

            // Event Listeners untuk tombol Next/Prev
            nextButton.addEventListener('click', () => {
                goToSlide(activeIndex + 1);
            });

            prevButton.addEventListener('click', () => {
                goToSlide(activeIndex - 1);
            });

            // Event Listeners untuk Dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Jeda saat hover
            sliderContainer.addEventListener('mouseenter', stopInterval);
            sliderContainer.addEventListener('mouseleave', startInterval);

            // Inisialisasi slider
            dots[0].setAttribute('aria-current', 'true');
            startInterval();
        });
    </script>
@endif