{{-- <div class="w-full px-4">
    <!-- 
      Responsive wrapper dengan ukuran yang disesuaikan per breakpoint
    -->
    <div class="relative w-full mx-auto rounded-lg overflow-hidden shadow-2xl bg-black
                max-w-sm sm:max-w-md md:max-w-2xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        
        <!-- Container dengan aspect ratio 16:9 -->
        <div class="relative w-full aspect-video">
            <!-- Elemen video HTML5 -->
            <video 
                class="absolute top-0 left-0 w-full h-full object-cover" 
                controls 
                autoplay  
                loop
                playsinline>
                
                <!-- Sumber video dari penyimpanan lokal -->
                <source src="{{ asset('videos/Lab AI UNUD_Final.mp4') }}" type="video/mp4">
                
                <!-- Pesan fallback -->
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
    </div>
</div> --}}

<div class="w-full px-4">
    <!-- 
      Responsive wrapper dengan ukuran yang disesuaikan per breakpoint
    -->
    <div class="relative w-full mx-auto rounded-lg overflow-hidden shadow-2xl bg-black
                max-w-sm sm:max-w-md md:max-w-2xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        
        <!-- Container dengan aspect ratio 16:9 -->
        <div class="relative w-full aspect-video">
            <!-- Elemen video HTML5 -->
            <video 
                class="absolute top-0 left-0 w-full h-full object-cover" 
                controls 
                autoplay 
                loop
                playsinline>
                
                <!-- Sumber video dari penyimpanan lokal -->
                <source src="{{ asset('videos/LAB_AI.mp4') }}" type="video/mp4">
                
                <!-- Pesan fallback -->
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
    </div>
</div>
