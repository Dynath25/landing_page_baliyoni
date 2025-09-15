<x-layout>
    <div class="mt-20 max-w-6xl mx-auto text-black">
    <h1 class="text-3xl font-bold text-center">Paket <span class="text-red-600">Layanan</span></h1>
    
        <h1  data-v-88007872="" data-aos-delay="200" data-aos="fade-down" class="font-bold text-white text-xl mt-20 mb-5 text-center w-full p-6 bg-red-600">Bandwith</h1>
    </div>

   
    
    <div data-v-88007872="" data-aos-delay="200" data-aos="fade-down" class="max-w-6xl mx-auto pricing-table bg-white  border-red-600 border shadow-[0px_3px_9px_rgba(0,0,0,0.8)] rounded-2xl">
        <div data-v-88007872=""  class="grid   grid-cols-1 lg:grid-cols-3   rounded-2xl ">
            <div data-v-88007872="" class="my-auto p-4 font-semibold">Fiber Optics</div>
            <div data-v-88007872="" class="flex w-full p-4 shadow-[0px_2px_9px_rgba(0,0,0,0.5)] ">
                <div data-v-88007872="" class="my-auto w-full">
                    <p data-v-88007872="" class="font-semibold">Speed</p>
                    <select id="listSpeed" data-v-88007872=""
                        class="group p-2 border border-red-600 rounded-md shadow w-full " onchange="getDataSpeed()">
                        <option data-v-88007872="" value="1">Choose Speed</option>
                        <option data-v-88007872="" value="100">100 Mbps</option>
                        <option data-v-88007872="" value="200">200 Mbps</option>
                        <option data-v-88007872="" value="300">300 Mbps</option>
                        <option data-v-88007872="" value="400">400 Mbps</option>
                        <option data-v-88007872="" value="500">500 Mbps</option>
                        <option data-v-88007872="" value="600">600 Mbps</option>
                        <option data-v-88007872="" value="700">700 Mbps</option>
                        <option data-v-88007872="" value="800">800 Mbps</option>
                        <option data-v-88007872="" value="900">900 Mbps</option>
                        <option data-v-88007872="" value="1000">1000 Mbps</option>
                        <option data-v-88007872="" value="1500">1500 Mbps</option>
                        <option data-v-88007872="" value="2000">2000 Mbps</option>
                        <option data-v-88007872="" value="3000">3000 Mbps</option>
                    </select>
                </div>
            </div>
            <div data-v-88007872="" class="p-2 flex flex-col justify-between overflow-x-clip ">
                <div data-v-88007872="">
                    <div data-v-953e2f91="" data-v-88007872="">
                        <p data-v-953e2f91="" class="ml-2 font-bold">Internet</p>
                        <ul data-v-953e2f91="" class="ml-10 list-disc mb-3">
                            <li data-v-953e2f91="">1:1 Upstream and Downstream Bandwidth</li>
                            <li data-v-953e2f91="">Minimum 100 Mbps International Link</li>
                            <li data-v-953e2f91="">24x7 Support and Maintenance</li>
                            <li data-v-953e2f91="">99.9% Network Availability</li>
                            <li data-v-953e2f91="">Monthly Bandwidth Usage Reports</li>
                            <li data-v-953e2f91="">Clear Issue Resolution Procedures</li>
                        </ul>
                        <p data-v-953e2f91="" class="ml-2 font-bold">Managed Service</p>
                        <ul data-v-953e2f91="" class="ml-10 list-disc mb-3">
                            <li data-v-953e2f91="">Onsite Engineer</li>
                            <li data-v-953e2f91="">Aruba Access Point</li>
                            <li data-v-953e2f91="">CCTV</li>
                            <li data-v-953e2f91="">Managed Switch 2/24 Port</li>
                        </ul>
                        <p data-v-953e2f91="" class="ml-2 font-bold ">Audit Internal Issue</p>
                        <ul data-v-953e2f91="" class="ml-10 list-disc">
                            <li data-v-953e2f91="">Dokumen Tata Kelola</li>
                            <li data-v-953e2f91="">Dokumen Rekomendasi</li>
                            <li data-v-953e2f91="">Konsultasi</li>
                        </ul>
                    </div>
                </div>
                <div id="animationMove"
                    class="mt-4 group hidden ml- transition-transform transform -translate-x-full opacity-0 duration-500 ease-out">
                    <p id="speedFor" class="ml-2 font-bold"></p>
                    <ul id="pricing" class="list-disc ml-10">
                        <li id="speedFeatures1"></li>
                        <li id="speedFeatures2"></li>
                    </ul>
                    <p id="priceText" class="mt-6 tabular-nums ml-4"></p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div data-aos-delay="200" data-aos="fade-down" class="mt-8 max-w-6xl mx-auto mb-14 ">
        <div>
            <h1 class="font-bold text-white text-xl text-center  w-full p-4 bg-red-600 mb-3">Metro-E</h1>
        </div>
        <div data-v-88007872="" class="pricing-table bg-white  border-solid shadow-[0px_2px_9px_rgba(0,0,0,0.5)] rounded-md">
            <div data-v-88007872=""
                class="grid  grid-cols-1 lg:grid-cols-3">
                <div data-v-88007872="" class="my-auto p-4">Inner City (Sarbagita)</div>
                <div data-v-88007872="" class="w-full p-4 ">
                    <p data-v-88007872="">Metro-E Speed</p><select id="metroSpeed"
                        class="p-2 border border-red-600 rounded-md shadow w-full " onchange="getDataMetro()">
                        <option data-v-88007872="" value="1">Choose Speed</option>
                        <option data-v-88007872="" value="100">100 Mbps</option>
                        <option data-v-88007872="" value="200">200 Mbps</option>
                        <option data-v-88007872="" value="300">300 Mbps</option>
                        <option data-v-88007872="" value="400">400 Mbps</option>
                        <option data-v-88007872="" value="500">500 Mbps</option>
                        <option data-v-88007872="" value="1000">1000 Mbps</option>
                        <option data-v-88007872="" value="2000">2000 Mbps</option>
                        <option data-v-88007872="" value="3000">3000 Mbps</option>
                        <option data-v-88007872="" value="4000">4000 Mbps</option>
                        <option data-v-88007872="" value="5000">5000 Mbps</option>
                        <option data-v-88007872="" value="8000">8000 Mbps</option>
                        <option data-v-88007872="" value="10000">10000 Mbps</option>
                    </select>
                </div>
                <div data-v-88007872="" id="animationMove2" class="group tabular-nums p-4 overflow-x-clip divide-red-600">
                    <p data-v-88007872="" class="text-sm">Whats included :</p>
                    <p data-v-88007872="" id="priceMetro" class="mt-3 opacity-0 transition-transform transform   -translate-x-full duration-500 ease-out"></p>
                </div> 
            </div>
            <div data-v-88007872="" class="grid grid-cols-3 divide-x divide-red-600">
                <div data-v-88007872="" class="p-2 my-auto text-center border-t border-red-600">Outer City</div>
                <div data-v-88007872="" class="p-2 my-auto col-span-2 text-center border-t">Contact Us</div>
            </div>
        </div>
    </div>

    
    

    <script>
        let getDataSpeed = () => {
            let option = document.getElementById('listSpeed');
            let move = document.getElementById('animationMove');
            let price = document.getElementById('pricing');
            let priceText = document.getElementById('priceText');
            let speedFor = document.getElementById('speedFor');
            let speedFeatures1 = document.getElementById('speedFeatures1');
            let speedFeatures2 = document.getElementById('speedFeatures2');

            let selected = option.value;

            move.classList.add('-translate-x-full', 'opacity-0');
            move.classList.add('hidden');

            speedFor.innerText = '';
            speedFeatures1.innerText = '';
            speedFeatures2.innerText = '';
            priceText.innerText = '';

            switch (selected) {
                case "1":
                    price.classList.add('hidden');
                    break;
                case "100":
                    speedFor.innerText = "For 100 Mbps :"
                    speedFeatures1.innerText = "Up to 20 Access Point"
                    speedFeatures2.innerText = "Up to 5 CCTV"
                    priceText.innerText = "Rp 78.000.000,00.";
                    price.classList.remove('hidden');
                    break;
                case "200":
                    speedFor.innerText = "For 200 Mbps :"
                    speedFeatures1.innerText = "Up to 32 Access Point"
                    speedFeatures2.innerText = "Up to 10 CCTV"
                    priceText.innerText = "Rp 146.000.000,00.";
                    price.classList.remove('hidden');
                    break;
                case "300":
                    speedFor.innerText = "For 300 Mbps :"
                    speedFeatures1.innerText = "Up to 48 Access Point"
                    speedFeatures2.innerText = "Up to 15 CCTV"
                    priceText.innerText = "Rp 159.000.000,00.";
                    price.classList.remove('hidden');
                    break;
                case "400":
                    speedFor.innerText = "For 400 Mbps :"
                    speedFeatures1.innerText = "Up to 64 Access Point"
                    speedFeatures2.innerText = "Up to 20 CCTV"
                    priceText.innerText = "Rp 168.500.120,00.";
                    price.classList.remove('hidden');
                    break;
                case "500":
                    speedFor.innerText = "For 500 Mbps :"
                    speedFeatures1.innerText = "Up to 80 Access Point"
                    speedFeatures2.innerText = "Up to 25 CCTV"
                    priceText.innerText = "Rp 180.522.350,00.";
                    price.classList.remove('hidden');
                    break;
                case "600":
                    speedFor.innerText = "For 600 Mbps:"
                    speedFeatures1.innerText = "Up to 96 Access Point"
                    speedFeatures2.innerText = "Up to 30 CCTV"
                    priceText.innerText = "Rp 201.450.200,00";
                    price.classList.remove('hidden');
                    break;
                case "700":
                    speedFor.innerText = "For 700 Mbps :"
                    speedFeatures1.innerText = "Up to 112 Access Point"
                    speedFeatures2.innerText = "Up to 35 CCTV"
                    priceText.innerText = "Rp 235.650.450,00.";
                    price.classList.remove('hidden');
                    break;
                case "800":
                    speedFor.innerText = "For 800 Mbps :"
                    speedFeatures1.innerText = "Up to 128 Access Point"
                    speedFeatures2.innerText = "Up to 40 CCTV"
                    priceText.innerText = "Rp 258.656.300,00.";
                    price.classList.remove('hidden');
                    break;
                case "900":
                    speedFor.innerText = "For 900 Mbps :"
                    speedFeatures1.innerText = "Up to 144 Access Point"
                    speedFeatures2.innerText = "Up to 45 CCTV"
                    priceText.innerText = "Rp 284.567.200,00.";
                    price.classList.remove('hidden');
                    break;
                case "1000":
                    speedFor.innerText = "For 1000 Mbps :"
                    speedFeatures1.innerText = "Up to 160 Access Point"
                    speedFeatures2.innerText = "Up to 50 CCTV"
                    priceText.innerText = "Rp 310.888.555,00.";
                    price.classList.remove('hidden');
                    break;
                case "1500":
                    speedFor.innerText = "For 1500 Mbps :"
                    speedFeatures1.innerText = "Up to 240 Access Point"
                    speedFeatures2.innerText = "Up to 55 CCTV"
                    priceText.innerText = "Rp 452.654.254.";
                    price.classList.remove('hidden');
                    break;
                case "2000":
                    speedFor.innerText = "For 2000 Mbps : "
                    speedFeatures1.innerText = "Up to 320 Access Point"
                    speedFeatures2.innerText = "Up to 60 CCTV"
                    priceText.innerText = "Rp 590.084.652,00.";
                    price.classList.remove('hidden');
                    break;
                case "3000":
                    speedFor.innerText = "For 3000 Mbps"
                    speedFeatures1.innerText = "Up to 480 Access Point"
                    speedFeatures2.innerText = "Up to 65 CCTV"
                    priceText.innerText = "Rp 846.500.000,00.";
                    price.classList.remove('hidden');
                    break;

                default:
                    break;
            }

            if (selected !== "1") {
                // Mulai dengan menghapus hidden lalu opacity dan translate-x-full secara bertahap
                move.classList.remove('hidden');
                setTimeout(() => {
                    move.classList.remove('-translate-x-full');
                    move.classList.remove('opacity-0');
                }, 100); // Ini memberikan jeda kecil untuk memastikan browser memproses transisi dengan lancar
            }
        };
    </script>

    <style>
        .transition-transform {
            transition: transform 200ms ease-out;
        }

        .transition-opacity {
            transition: opacity 0.5s ease-out;
        }
    </style>

<script>
    let getDataMetro = () => {
        let option = document.getElementById('metroSpeed');
        let priceMetro = document.getElementById('priceMetro');

        let selected = option.value;

        // Sembunyikan harga terlebih dahulu
        priceMetro.classList.add('-translate-x-full','opacity-0');
        priceMetro.classList.add('hidden');

        priceMetro.innerText = ''; // Kosongkan konten

        // Tentukan harga berdasarkan opsi yang dipilih
        switch (selected) {
            case "1":
                // Harga tetap kosong, elemen tidak menampilkan apa-apa
                priceMetro.innerText = '';
                break;
            case "100":
                priceMetro.innerText = "Rp 2.250.000,00.";
                break;
            case "200":
                priceMetro.innerText = "Rp 2.700.000,00.";
                break;
            case "300":
                priceMetro.innerText = "Rp 3.300.000,00.";
                break;
            case "400":
                priceMetro.innerText = "Rp 4.050.000,00.";
                break;
            case "500":
                priceMetro.innerText = "Rp 4.950.000,00.";
                break;
            case "1000":
                priceMetro.innerText = "Rp 6.525.000,00.";
                break;
            case "2000":
                priceMetro.innerText = "Rp 8.100.000,00.";
                break;
            case "3000":
                priceMetro.innerText = "Rp 9.675.000,00.";
                break;
            case "4000":
                priceMetro.innerText = "Rp 11.250.000,00.";
                break;
            case "5000":
                priceMetro.innerText = "Rp 16.500.000,00.";
                break;
            case "8000":
                priceMetro.innerText = "Rp 25.500.000,00.";
                break;
            case "10000":
                priceMetro.innerText = "Rp 37.500.000,00.";
                break;
            default:
                break;
        }

        if (selected !== "1") {
            // Memicu animasi opacity agar harga muncul
                priceMetro.classList.remove('hidden');
            setTimeout(() => {
                priceMetro.classList.remove('opacity-0');
                priceMetro.classList.remove('-translate-x-full');
            }, 100); // Menambahkan jeda kecil untuk memulai animasi
        }
    };
</script>

<style>
    /* Animasi untuk opacity */
    .transition-opacity {
        transition: opacity 0.5s ease-out;
    }

    .opacity-0 {
        opacity: 0;
    }

    .opacity-100 {
        opacity: 1;
    }
</style>
</x-layout>
