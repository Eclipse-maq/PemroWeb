console.log("scriot praktikum dijalankan");

//var untuk menangkap elemen dari html
const elNama = document.getElementById('nama-mhs');
const elNilai = document.getElementById('nilai-mhs');
const elStatus = document.getElementById('status-kelulusan');

// mengambil input elemen
const inputNama = document.getElementById('input-nama');
const inputNilai = document.getElementById('input-nilai');

// menangani kli tombol submit
document.getElementById('submit-btn').addEventListener('click', function() {
    // mendapatkan nilai input dari  pengguna
    const namaMahasiswa = inputNama.value;
    const nilai = parseInt(inputNilai.value);

    elNama.textContent = namaMahasiswa;
    elNilai.textContent = nilai;

    // logika kelulusan (if... else)
    let pesanStatus = " ";
    let isLulus;
    
    if (nilai >= 75) {
        pesanStatus = "selamat, anda dinyatkana lulus";
        isLulus = true;
    } else {
        pesanStatus = "tetap semangat, anda harus mengulang";
        isLulus = false;
    }

    // menampilkan status kelulusan
    elStatus.textContent = pesanStatus;

    // mengubah gaya berdasarkan status kelulusan
    if (isLulus === true) {
        elStatus.style.color = 'green';
        elStatus.style.fontWeight = 'bold';
    } else {
        elStatus.style.color = 'red';
        elStatus.style.fontWeight = 'bold';
    }
});

// menampilkan nama dan nilai
