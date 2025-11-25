console.log("Script cuaca dijalankan");

// data cuaca
const weatherData = {
  "Jakarta": { 
    temperature: 30, 
    condition: "Cerah" 
  },
  "Bandung": { 
    temperature: 25, 
    condition: "Hujan Ringan" 
  },
  "Surabaya": { 
    temperature: 33, 
    condition: "Panas Terik" 
  },
  "Samarinda": { 
    temperature: 28, 
    condition: "Mendung" 
  },
};

// elemen HTML
const inputKota = document.getElementById("city-input");
const Tampilkan = document.getElementById("show-weather");

// tombol
Tampilkan.addEventListener("click", function() {
  const namaKota = inputKota.value.trim();

  if (namaKota === "") {
    console.warn("Kamu belum memasukkan nama kota!");
    return;
  }

  const data = weatherData[namaKota];

  if (data) {
    console.log(`Cuaca di ${namaKota}:`);
    console.log(`Suhu: ${data.temperature}°C`);
    console.log(`Kondisi: ${data.condition}`);
  } else {
    console.error(`Data cuaca untuk kota "${namaKota}" tidak ditemukan.`);
  }
});
