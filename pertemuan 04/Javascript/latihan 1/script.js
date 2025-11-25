// ambil elemen
const tombol = document.getElementById("btn");
const teks = document.getElementById("teks");

// event klik tonbol
tombol.addEventListener("click", function () {
    teks.textContent = "Teks berhasil diubah dengan js";
    teks.style.color = "green";
});