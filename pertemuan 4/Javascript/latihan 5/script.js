function ubahKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    judul.textContent = "judul berubah";
    paragraf.textContent = "paragraf ini juga aberubah setelah klik tombol";

    judul.style.color = "green";
    judul.style.fontSize = "28px";
    paragraf.style.backgroundColor = "#fef3c7";
    paragraf.style.padding = "12px";
    paragraf.style.borderRadius = "8px";

    console.log("konten berhasil diubah");
}

function resetKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    judul.textContent = "judul asli";
    paragraf.textContent = "ini adalah teks awal paragraf";

    judul.style.color = "#1f2937";
    judul.style.fontSize = "24px";
    paragraf.style.backgroundColor = "transparent";
    paragraf.style.padding = "0";
    paragraf.style.borderInline = "0";

    console.log("konten sudah direset")
}