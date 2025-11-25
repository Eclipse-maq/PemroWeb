function cekKelulusan() {
    console.clear();
    let nilai = document.getElementById("nilai").value;

    if (nilai === "") {
        console.log("⚠️ silahkan masukkan nilai terlebih dahulu.");
    }

    nilai = parseInt(nilai);

    if (nilai >= 70) {
        console.log("Nilai anda: ", nilai, "status: Lulus✅");
    } else {
        console.log("Nilai anda: ", nilai, "status: Tidak lulus❎");
    }
}