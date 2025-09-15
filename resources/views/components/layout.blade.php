<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite('resources/css/app.css')
  
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>


  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
  <script src="/resources/js/app.js"></script>
  <link rel="icon" href="{{ asset('asset/uceai.jpg') }}" type="image/png" />
  <title>UCEAI</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
</head>

<body class="h-full w-full overflow-x-hidden">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <div class="min-h-full">
    
    <x-navbar></x-navbar>

    <main>
      <div class="">
        {{$slot}}
      </div>
    </main>

  </div>
<x-whatsapp-button />
<x-footer></x-footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
</body>
</html>
