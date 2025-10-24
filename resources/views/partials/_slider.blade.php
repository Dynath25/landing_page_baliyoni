{{-- resources/views/partials/_slider.blade.php --}}
@if ($sliders->isEmpty())
    {{-- Fallback jika tidak ada gambar slider --}}
    <div class="h-[92vh] w-full bg-gray-200"></div>
@else
    <div id="slider-container" class="relative w-full h-[92vh] overflow-hidden group">
        <div class="w-full h-full">
            @foreach ($sliders as $slider)
                <div
                    class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100' : 'opacity-0' }}">
                    <img src="{{ asset('storage/' . $slider->thumbnail) }}" alt="{{ $slider->name }}"
                        class="w-full h-full object-cover object-center"
                        @if ($loop->first) loading="eager" @else loading="lazy" @endif
                        onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/e2e8f0/4a5568?text=Image+Not+Found';" />
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sliderContainer = document.getElementById('slider-container');
            if (!sliderContainer) return;

            const slides = sliderContainer.querySelectorAll('.slide');
            const slideCount = slides.length;

            if (slideCount <= 1) return;

            let activeIndex = 0;
            const goToSlide = (index) => {
                if (slides[activeIndex]) slides[activeIndex].classList.replace('opacity-100', 'opacity-0');
                activeIndex = (index + slideCount) % slideCount;
                if (slides[activeIndex]) slides[activeIndex].classList.replace('opacity-0', 'opacity-100');
            };

            setInterval(() => {
                goToSlide(activeIndex + 1);
            }, 5000);
        });
    </script>
@endif
