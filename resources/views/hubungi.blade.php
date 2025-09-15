<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        <div class="p-16 mt-32">
            <h1 class="text-3xl font-semibold text-center">CONTACT <span class="text-blue-800">UCEAI</span></h1>
        </div>
        <div class="mx-auto max-w-6xl w-full p-4 z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-5 lg:divide-x"> <!-- Menambahkan gap yang lebih besar -->

                <!-- Contact Information -->

                <div class="text-2xl p-4 flex flex-col gap-2 text-slate-600 h-80 border shadow-md bg-blue-900">
                <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
                    <div class="leading-tight">
                        <div id="animated-text" class="text-2xl text-white font-bold mb-3 transition-opacity opacity-0">Our Contact</div>
                        <div class="text-lg text-white font-normal tracking-tighter">Email</div>
                        <a href="mailto:uceai@unud.ac.id" class="flex gap-1 items-center hover:underline text-base mb-5 text-white font-light">
                            <span class="iconify i-ph:envelope-light" aria-hidden="true">uceai@unud.ac.id</span>
                        </a>

                        <div class="text-lg text-white font-normal tracking-tighter">No telp</div>
                            <a href="https://wa.me/+6281916250421" class="flex gap-1 items-center hover:underline text-base text-white font-light">
                            <span class="iconify i-ph:whatsapp-logo-light" aria-hidden="true">+62 819-1625-0421</span>
                        </a>
                    </div>


                    <div class="mt-auto text-sm text-white">
                        <address>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung, Bali 80361</address>
                    </div>
                </div>


                <!-- Form Section -->
                <div class="w-full bg-white p-4 flex flex-col rounded-md shadow-[0px_2px_14px_rgba(0,0,0,0.4)] z-20">
                    <div id="animated-text2" class="text-2xl text-black font-bold mb-3 transition-opacity opacity-0">Contact Us</div>
                    <div class="text-black mb-8">
                        Our top team is ready to assist you. Please send your message via the form below, and we will get back to you shortly.</div>
                    <!-- Form Section -->
                    <form id="contactForm" action="/send-mail" method="POST">
                        @csrf
                        <!-- Email Field -->
                        <p class="mb-2 text-md text-slate-800">Email</p>
                        <input
                            name="email"
                            class="shadow w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"
                            type="email"
                            required
                            placeholder="cth: email@gmail.com">

                        <!-- Phone Number Field -->
                        <p class="mt-4 text-md text-slate-800">Phone Number (Whatsapp)</p>
                        <input
                            name="phone"
                            class="shadow w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"
                            type="text"
                            required
                            placeholder="cth: 62812345678">

                        <!-- Text Area Field -->
                        <p class="mt-4 mb-2 text-md text-slate-800">Bagaimana kami dapat membantu?</p>
                        <textarea
                            name="message"
                            required
                            class="shadow h-32 w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"></textarea>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="group relative inline-flex border border-blue-900 focus:outline-none mt-3">
                            <p class="font-bold inline-flex items-center justify-center self-stretch px-8 py-2 text-sm text-blue-900 text-center uppercase bg-white ring-1 ring-blue-900 ring-offset-1 transform transition-transform hover:translate-y-1 hover:translate-x-1 focus:translate-y-1 focus:translate-x-1">Send</p>
                            <span class="iconify i-eos-icons:three-dots-loading" aria-hidden="true" style="display:none;"></span>
                        </button>
                    </form>

                </div>

            </div>
        </div>
        <script src="{{ asset('js/textAnimation.js') }}"></script>
        <script src="{{ asset('js/textAnimation2.js') }}"></script>





</x-layout>