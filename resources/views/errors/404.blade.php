<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-image: url('{{ asset('asset/unud.jpg') }}');
        background-size: cover;
        background-position: center;
    }
</style>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <x-navbar></x-navbar>

    <div class="min-h-screen flex flex-col items-center justify-center text-center px-4">

        <!-- Konten Teks -->
        <div class="bg-blue-50 dark:bg-gray-800/50 p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-6xl font-extrabold text-red-600 dark:text-red-500">404</h1>
        <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Halaman Tidak Ditemukan</h2>
        <p class="mt-4 text-base text-white">
            Maaf, kami tidak dapat menemukan halaman yang Anda cari. Mungkin tautannya sudah usang atau Anda salah mengetik alamat.
        </p>
        </div>
        <!-- Tombol Kembali ke Beranda -->
        <div class="mt-10">
            <a href="{{ url('/') }}" 
               class="inline-block rounded-md bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition-colors duration-300">
                Kembali ke Beranda
            </a>
        </div>

    </div>
</body>
</html>
