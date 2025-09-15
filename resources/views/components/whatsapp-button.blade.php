<!-- 
  PENTING: Pastikan Anda telah menyertakan link untuk Material Design Icons di <head> HTML Anda
  agar ikon WhatsApp dapat tampil.
-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">

<!-- Container Tombol WhatsApp -->
<!-- PERBAIKAN: Posisi disesuaikan agar lebih responsif -->
<div class="fixed bottom-2 right-4 md:bottom-8 md:right-8 z-50 group">
    <a href="https://wa.me/+6281916250421" target="_blank"
       aria-label="Hubungi kami di WhatsApp"
       class="bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 hover:scale-105 transition-transform duration-300 ease-in-out flex items-center justify-center
              w-14 h-14 md:w-16 md:h-16">
        <!-- PERBAIKAN: Ukuran ikon dibuat responsif -->
        <i class="mdi mdi-whatsapp text-2xl md:text-3xl"></i>
    </a>
    <!-- 
      PERBAIKAN: Posisi tooltip diubah agar berada di atas tombol.
      - 'bottom-full' menempatkannya di atas.
      - 'left-1/2 -translate-x-1/2' menempatkannya di tengah.
      - 'mb-2' memberi sedikit jarak.
    -->
    <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 text-white text-xs py-1 px-3 bg-gray-800 rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
        Hubungi kami <br>di WhatsApp
    </span>
</div>
