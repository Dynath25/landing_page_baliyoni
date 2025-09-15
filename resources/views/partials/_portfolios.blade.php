<section id="portfolio" class="bg-blue-900 text-white px-4">
    <div  class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div>
                <div class="relative ">

                    <h2 class="text-2xl font-bold pb-3 text-white w-96">PORTFOLIO</h2>

                    <div class="absolute bottom-1 left-0 w-full h-0.5 bg-white"></div>
                    
                    <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-white"></div>

                </div>     
                <p class="text-gray-300 leading-relaxed mt-4 text-justify">
                    We have been actively engaged in technological innovation in order to become a focal point for the development and dissemination of artificial intelligence and digital technology in Indonesia.
                </p>
            </div>

            @forelse ($portfolios as $portfolio)
            <div class="group relative overflow-hidden rounded-md shadow-lg">
                <img src="{{ Storage::url($portfolio->thumbnail) }}" 
                     alt="{{ $portfolio->title }}" 
                     class="w-full h-60 object-cover transform transition-transform duration-300 ease-in-out group-hover:scale-110">
                
                <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-black/80 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 p-2 bg-blue-600/30 w-full">
                    <h3 class="text-white font-semibold uppercase tracking-wider text-sm px-6 py-2">{{ $portfolio->title}}</h3>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</section>