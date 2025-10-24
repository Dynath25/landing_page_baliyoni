{{-- resources/views/pages/services.blade.php --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- PERUBAHAN: Logika x-data diperbarui dengan fungsi scrollToTab --}}
    <div x-data="{
        activeTab: '',
        scrollToTab(tabName) {
            this.activeTab = tabName;
            this.$nextTick(() => {
                const contentElement = document.getElementById('services-content');
                if (contentElement) {
                    contentElement.scrollIntoView({ behavior: 'smooth' });
                }
                AOS.refresh();
            });
        }
    }">

        {{-- BAGIAN 1: SWITCHER FULL-SCREEN --}}
        <section class="h-screen flex items-center justify-center text-center bg-gray-800 text-white relative">
            <div class="absolute inset-0">
                <img src="{{ asset('asset/servis1.jpg') }}" alt="Service Guy"
                    class="w-full h-full object-cover opacity-30">
            </div>

            <div class="relative z-10">
                <h1 class="text-6xl lg:text-8xl font-extrabold" data-aos-delay="100" data-aos="fade-down"
                    data-aos-easing="ease-in-out">Our Services</h1>
                <p class="mt-8 text-xl text-gray-300" data-aos-delay="200" data-aos="fade-down"
                    data-aos-easing="ease-in-out">Pilih jenis layanan yang Anda butuhkan.</p>

                <div class="mt-8 flex justify-center space-x-4">
                    {{-- PERUBAHAN: 'href' dihapus, '@click' memanggil fungsi baru --}}
                    <button @click="scrollToTab('service_centre')"
                        class="px-6 py-3 font-semibold rounded-md transition-colors border bg-red-600 text-white hover:bg-white hover:text-red-600"
                        data-aos-delay="500" data-aos="fade-right" data-aos-easing="ease-in-out">
                        Service Centre
                    </button>
                    <button @click="scrollToTab('maintenance')"
                        class="px-6 py-3 font-semibold rounded-md transition-colors border bg-red-600 text-white hover:bg-white hover:text-red-600"
                        data-aos-delay="550" data-aos="fade-left" data-aos-easing="ease-in-out">
                        Network Solutions
                    </button>
                </div>
            </div>
        </section>

        {{-- BAGIAN 2: AREA KONTEN YANG AKAN MUNCUL --}}
        <section id="services-content">
            <div x-show="activeTab !== ''" x-transition.opacity.duration.500ms>

                <div x-show="activeTab === 'service_centre'">
                    @include('partials._service-centre')
                </div>

                <div x-show="activeTab === 'maintenance'">
                    @include('partials._network-solutions')
                </div>

            </div>
        </section>

    </div>
</x-layout>
