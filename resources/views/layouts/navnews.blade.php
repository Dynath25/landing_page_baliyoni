<nav class="bg-transparent drop-shadow-md backdrop-blur-sm fixed top-0 z-50 left-0 w-full transition-colors duration-300 ease-in-out" 
    x-data="{ isOpen: false, isScrolled: false }"
    x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 50 })"
    :class="{ 'bg-gray-50/50': isScrolled, 'bg-transparent': !isScrolled }">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- Tambahkan class untuk mengatur ukuran gambar -->
                    <a href="/" class="router-link-active router-link-exact-active items-center flex gap-2 px-2"
                        aria-current="page"><img src="data:image/svg+xml,%3csvg%20width='239'%20height='205'%20viewBox='0%200%20239%20205'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M238.522%20100.051C238.522%20155.279%20193.75%20200.051%20138.522%20200.051C129.486%20200.051%20120.73%20198.852%20112.404%20196.606C52.7408%20220.359%20-32.4304%20186.149%2013.0217%20120.551C12.7386%20122.008%2012.4901%20123.436%2012.2754%20124.833C8.16842%20138.772%2010.3869%20152.888%2017.0262%20162.275C24.4249%20175.109%2038.2%20181.422%2054.2838%20183.512C71.8192%20187.221%2093.9839%20186.293%20119.272%20176.801C162.074%20160.734%20193.188%20103.145%20204.268%2082.6368C205.444%2080.4609%20206.394%2078.7024%20207.108%2077.4552L214.233%2078.8295L200.395%2035.3714L167.022%2067.3009L175.274%2069.7324C144.522%20148.301%2084.7718%20172.801%2051.7718%20167.051C24.7099%20162.336%2012.818%20138.352%2020.188%20113.266C22.255%20107.79%2025.3851%20102.36%2029.6719%2097.2169C27.175%20104.936%2026.491%20112.231%2028.2717%20120.051C34.0217%20145.301%2057.0217%20149.356%2082.5217%20143.551C104.215%20138.613%20118.522%20127.051%20138.522%20100.051L144.272%20102.051L138.022%2064.301L107.772%2085.551L113.022%2089.801C112.337%2091.1372%20111.667%2092.6728%20110.937%2094.3458C106.067%20105.506%2098.5269%20122.783%2066.2717%20127.801C47.2686%20130.757%2039.0786%20117.245%2038.525%2099.2242C38.605%2089.3449%2040.1176%2079.8071%2042.8652%2070.8081C42.9979%2070.3884%2043.1334%2069.9693%2043.2717%2069.551L43.2417%2069.6027C56.1219%2029.2633%2093.9103%200.0509644%20138.522%200.0509644C193.75%200.0509644%20238.522%2044.8225%20238.522%20100.051Z'%20fill='%23B8292E'/%3e%3c/svg%3e"
                            width="28" height="28" alt="">
                        <p class="font-bold text-2xl">iJASA</p>
                    </a>
                </div>
            </div>
            <!-- Navigasi Desktop -->
            <div class="hidden md:block flex-grow">
                <div class="ml-10 flex items-baseline justify-center gap-10 font-light">
                    <a href="/layanan" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Layanan</a>
                    <a href="/solusi" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Solusi</a>
                    <a href="/harga" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Harga</a>
                    <a href="{{ route('article.index') }}" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Berita</a>
                    <a href="/dukungan" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Berita</a>
                    <a href="/partnership" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Partnership</a>
                    <a href="/gallery" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Gallery</a>
                </div>
            </div>
            <!-- Tombol Hubungi Kami di Desktop -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 mb-4">
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                        href="/hubungi">
                        <span
                            class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Hubungi Kami
                        </span>
                    </a>
                </div>
            </div>
            <!-- Tombol Menu Mobile -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center rounded-md bg-transparent p-2 text-gray-400 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-transparent focus:ring-offset-2 focus:ring-offset-transparent">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, tampil hanya jika isOpen bernilai true -->
    <div class="md:hidden" x-show="isOpen">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/" class="block text-black hover:bg-transparent hover:text-red-600 rounded-md">Layanan</a>
            <a href="/solusi" class="block text-black hover:bg-transparent hover:text-red-600 rounded-md">Solusi</a>
            <a href="/harga" class="block text-black hover:bg-transparent hover:text-red-600 rounded-md">Harga</a>
            <a href="{{ route('article.index') }}" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Berita</a>
            <a href="/partnership" class="text-black hover:bg-transparent hover:text-red-600 rounded-md">Partnership</a>
            <a href="/gallery" class="block text-black hover:bg-transparent hover:text-red-600 rounded-md">Gallery</a>
        </div>
        <div class="px-5">
            <button type="button"
                class="w-full text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                Hubungi Kami
            </button>
        </div>
    </div>
</nav>
