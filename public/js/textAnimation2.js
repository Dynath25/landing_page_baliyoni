document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.getElementById("animated-text2");
    const text = textElement.innerText;
    textElement.innerHTML = ""; // Kosongkan teks sebelum mulai animasi

    // Looping untuk menampilkan huruf satu per satu
    let i = 0;
    function showText() {
        if (i < text.length) {
            textElement.innerHTML += text.charAt(i);
            textElement.classList.remove("opacity-0"); // Tampilkan teks yang sedang muncul
            i++;
            setTimeout(showText, 100); // Sesuaikan kecepatan muncul (dalam milidetik)
        }
    }

    showText(); // Memulai animasi teks
});
