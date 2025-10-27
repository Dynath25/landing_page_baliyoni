<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="/resources/js/app.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/BY2.png') }}" type="image/png" />
    <title>Baliyoni Group</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full w-full overflow-x-hidden">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        <main>
            <div class="">
                {{ $slot }}
            </div>
        </main>


    </div>
    <x-whatsapp-button />
    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/f363b43e07.js" crossorigin="anonymous"></script>

    {{-- <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script> --}}
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
