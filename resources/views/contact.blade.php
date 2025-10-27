<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="relative h-screen flex items-center text-white" data-aos-delay="200" data-aos="fade-down"
        data-aos-easing="ease-in-out">
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('asset/contact.jpg') }}" alt="Service Centre" class="w-full h-full object-cover opacity-40">
        </div>
        <div class="relative container mx-auto px-4">
            <div class="max-w-lg">
                <h1 class="text-7xl font-extrabold" data-aos-delay="400" data-aos="fade-right">Contact Us</h1>
                <p class="mt-4 text-2xl opacity-90" data-aos-delay="500" data-aos="fade-right">Lorem ipsum dolor sit
                    amet,
                    consectetur adipisicing elit. Unde
                    debitis, itaque odio impedit dolor beatae velit voluptas sunt corrupti est iusto sit nesciunt quas
                    nemo accusamus vero ipsam in alias!</p>
            </div>
        </div>
    </section>
    <div class="container mx-auto px-4 pt-5 pb-24" data-aos-delay="200" data-aos="fade-up"
        data-aos-easing="ease-in-out">
        <div class="relative -mt-24 max-w-4xl mx-auto bg-white rounded-xl shadow-2xl p-8 lg:p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-6xl font-bold text-black">Send Us<br>Message.</h2>
                </div>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div data-aos-delay="300" data-aos="fade-left" data-aos-easing="ease-in-out">
                        <label for="name" class="text-sm font-medium text-gray-700">Name :</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full bg-gray-200 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div data-aos-delay="400" data-aos="fade-left" data-aos-easing="ease-in-out">
                        <label for="email" class="text-sm font-medium text-gray-700">Email :</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full bg-gray-200 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div data-aos-delay="500" data-aos="fade-left" data-aos-easing="ease-in-out">
                        <label for="message" class="text-sm font-medium text-gray-700">Message :</label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full bg-gray-200 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-red-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-red-700 transition">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="py-16 bg-white pb-32">
        <div class="container mx-auto px-4 text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-center">
                <div class="text-center md:text-left" data-aos-delay="200" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
                    <h2 class="text-4xl font-bold text-gray-800">Our Social Media</h2>
                    <p class="mt-5 text-gray-500 max-w-2xl mx-auto text-lg">Lorem ipsum dolor sit amet, consectetur
                        adipisicing
                        elit. Sed ea quaerat et nisi eligendi culpa officia, vel ipsa quae velit, labore necessitatibus
                        saepe
                        iusto nemo dolore. Modi, recusandae. Ducimus, accusamus.</p>
                </div>
                <div class="text-center md:text-right">
                    <div class="mt-8 flex justify-center space-x-6">
                        <a href="https://wa.me/.." target="_blank" class="text-green-500 hover:opacity-80 transition"
                            data-aos-delay="400" data-aos="fade-down" data-aos-easing="ease-in-out">
                            <i class="fa-brands fa-whatsapp fa-4x"></i>
                        </a>
                        <a href="#" target="_blank" class="text-blue-600 hover:opacity-80 transition"
                            data-aos-delay="600" data-aos="fade-up" data-aos-easing="ease-in-out">
                            <i class="fa-brands fa-facebook fa-4x"></i>
                        </a>
                        <a href="#" target="_blank" class="text-pink-600 hover:opacity-80 transition"
                            data-aos-delay="800" data-aos="fade-down" data-aos-easing="ease-in-out">
                            <i class="fa-brands fa-instagram fa-4x"></i>
                        </a>
                        <a href="#" target="_blank" class="text-gray-800 hover:opacity-80 transition"
                            data-aos-delay="1000" data-aos="fade-up" data-aos-easing="ease-in-out">
                            <i class="fa-brands fa-tiktok fa-4x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 lg:py-24" data-aos-delay="200" data-aos="fade-up" data-aos-easing="ease-in-out">
        <div class="absolute inset-0 z-0 bg-black">
            <img src="{{ asset('asset/bg1.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative z-10 container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-5xl font-bold text-red-600" data-aos-delay="200" data-aos="fade-up"
                        data-aos-easing="ease-in-out">Where to Find Us :</h2>
                    <div class="mt-6 space-y-4">
                        <div data-aos-delay="400" data-aos="fade-right">
                            <h4 class="font-semibold text-red-600 text-xl" data-aos-easing="ease-in-out">Address:
                            </h4>
                            <p class="text-white text-xl">Jl. Tukad Batanghari No. 1C, Renon, Denpasar</p>
                        </div>
                        <div data-aos-delay="500" data-aos="fade-right">
                            <h4 class="font-semibold text-red-600 text-xl" data-aos-easing="ease-in-out">Telephone:
                            </h4>
                            <p class="text-white text-xl">(0361) 257055</p>
                        </div>
                        <div data-aos-delay="600" data-aos="fade-right">
                            <h4 class="font-semibold text-red-600 text-xl" data-aos-easing="ease-in-out">Email:</h4>
                            <p class="text-white text-xl">info@baliyoni.co.id</p>
                        </div>
                    </div>
                </div>
                <div class="w-full h-80 rounded-lg overflow-hidden shadow-lg" data-aos-delay="1000"
                    data-aos="fade-left" data-aos-easing="ease-in-out">
                    {{-- Ganti 'src' ini dengan link embed Google Maps Anda --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.0348913652972!2d115.2294758618882!3d-8.678275203749838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240fce6bbb933%3A0xf1c14ed205fad523!2sPT.+Baliyoni+Saguna!5e0!3m2!1sid!2sid!4v1509674191340"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    </div>
</x-layout>
