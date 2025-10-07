function runExercises() {
    console.clear(); // bersihkan console senbelum dijalankan
    // soal 1: const
    const universitas = "Universitas Muhammadiyah Kalimantan Timur";
    console.log("Nama Universitas: ", universitas);

    // soal 2: let
    let JumlahMhs = 25;
    JumlahMhs = JumlahMhs + 5;
    console.log("Jumlah mahasiswa sekarang: ", JumlahMhs);

    // soal 3: string
    let namalengkap = "Aisha Hannah Heriawan";
    console.log("Halo, nama saya " + namalengkap);

    //soal 4: number
    let angka1 = 10;
    let angka2 = 5;
    console.log("Hasil penjumlahan: ", angka1 + angka2);
    console.log("Hasil pengurangan: ", angka1 - angka2);
    console.log("Hasil perkalian: ", angka1 * angka2);
    console.log("Hasil pembagian: ", angka1 / angka2);

    //soal 5: bool
    let nilaiUjian = 80;
    let lulus = nilaiUjian >= 70;
    console.log("Apakah lulus?", lulus);
}