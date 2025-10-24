<style>
    .notification-bubble::after {
        content: '';
        position: absolute;
        top: -18px;
        right: 16px;
        border-width: 10px;
        border-style: solid;
        border-color: transparent transparent #DC2626 transparent;
        /* Warna di sisi atas */
    }
</style>

@if (session()->has('success'))
    {{-- Kontainer utama HANYA untuk positioning dan logika Alpine.js --}}
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition {{-- Z-index 50, lebih tinggi dari navbar --}}
        class="fixed top-16 right-16 z-50">

        <div class="notification-bubble relative bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('success') }}
        </div>

    </div>
@endif
