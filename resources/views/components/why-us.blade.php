{{-- resources/views/components/why-choose-us.blade.php --}}

<section id="why-us" class="py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-4">

        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800" data-aos-delay="200" data-aos="fade-down"
                data-aos-easing="ease-in-out">Why Choose Us</h2>
            <p class="mt-2 text-2xl text-gray-500" data-aos-delay="300" data-aos="fade-down"
                data-aos-easing="ease-in-out">
                Why Choose Baliyoni?</p>
        </div>

        {{-- Wrapper utama untuk komponen interaktif Alpine.js --}}
        <div x-data="{ activeTab: 1 }" class="mt-20">

            <div class="relative max-w-4xl mx-auto">
                <div class="absolute top-1/3 -translate-y-1/3 w-full h-0.5 bg-gray-200" data-aos-delay="400"
                    data-aos="fade-down" data-aos-easing="ease-in-out"></div>
                <div class="relative flex justify-between" data-aos-delay="400" data-aos="fade-down"
                    data-aos-easing="ease-in-out">
                    @foreach (['Over 20 Years of Experience', 'Professional Human Resources', 'One Stop IT Solution', 'Modern Infrastructure & Technology', 'Commitment to Quality & Innovation'] as $index => $title)
                        <div @click="activeTab = {{ $index + 1 }}" class="flex-1 text-center cursor-pointer group">
                            <div class="relative inline-block">
                                <div class="w-5 h-5 rounded-full transition-colors"
                                    :class="activeTab === {{ $index + 1 }} ? 'bg-red-600' :
                                        'bg-gray-300 group-hover:bg-red-400'">
                                </div>
                                <span
                                    class="absolute -top-12 left-1/2 -translate-x-1/2 text-sm font-semibold w-36 text-center transition-colors"
                                    :class="activeTab === {{ $index + 1 }} ? 'text-red-600' :
                                        'text-gray-500 group-hover:text-red-400'">
                                    {{ $title }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-[3.5rem] relative" data-aos-delay="300" data-aos="fade-up" data-aos-easing="ease-in-out">
                {{-- Tab 1: Pengalaman --}}
                <div x-show="activeTab === 1" x-transition.opacity.duration.500ms>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <div class="w-full aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="{{ asset('asset/choose-us-1.jpg') }}" alt="Pengalaman"
                                class="w-full h-auto rounded-lg shadow-xl">
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <strong>Over 20 Years of Experience:</strong> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Amet illum dolor accusamus iusto harum explicabo ipsa esse nobis quidem
                            sint molestias totam nihil quasi, aliquid libero praesentium! Reprehenderit, soluta nulla?
                        </p>
                    </div>
                </div>

                {{-- Tab 2: Sumber Daya --}}
                <div x-show="activeTab === 2" x-transition.opacity.duration.500ms>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <div class="w-full aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="{{ asset('asset/choose-us-2.jpg') }}" alt="Sumber Daya"
                                class="w-full h-auto rounded-lg shadow-xl">
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <strong>Professional Human Resources:</strong> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ipsa omnis commodi aliquam et, in excepturi odit suscipit vitae non, ab
                            voluptate recusandae sit obcaecati ex soluta! Ut excepturi deserunt incidunt.
                        </p>
                    </div>
                </div>

                {{-- Tab 3: One Stop Solution --}}
                <div x-show="activeTab === 3" x-transition.opacity.duration.500ms>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <div class="w-full aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="{{ asset('asset/choose-us-3.jpg') }}" alt="One Stop Solution"
                                class="w-full h-auto rounded-lg shadow-xl">
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <strong>One Stop IT Solution:</strong> Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Distinctio non harum numquam fugit minima doloribus eligendi voluptatibus
                            necessitatibus maiores neque deleniti sint laboriosam totam aut cupiditate, alias similique
                            voluptas possimus.
                        </p>
                    </div>
                </div>

                {{-- Tab 4: Teknologi --}}
                <div x-show="activeTab === 4" x-transition.opacity.duration.500ms>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <div class="w-full aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="{{ asset('asset/choose-us-4.jpg') }}" alt="Teknologi Modern"
                                class="w-full h-auto rounded-lg shadow-xl">
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <strong>Modern Infrastructure & Technology:</strong> Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Saepe sequi harum dolores fugiat, atque corporis ipsam, assumenda dolore
                            ut sapiente, illum laudantium consequatur error mollitia vel dolorum ex recusandae facilis!
                        </p>
                    </div>
                </div>

                {{-- Tab 5: Komitmen --}}
                <div x-show="activeTab === 5" x-transition.opacity.duration.500ms>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <div class="w-full aspect-video rounded-lg overflow-hidden shadow-xl">
                            <img src="{{ asset('asset/choose-us-5.jpg') }}" alt="Komitmen"
                                class="w-full h-auto rounded-lg shadow-xl">
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <strong>Commitment to Quality & Innovation:</strong> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Ut, beatae. Deleniti ex sunt, ab unde, maxime sit aliquam expedita qui
                            blanditiis eveniet odio porro sequi necessitatibus perspiciatis accusantium repudiandae
                            consequuntur?
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
