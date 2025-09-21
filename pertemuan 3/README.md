## Apa itu Tailwind CSS?

Tailwind CSS itu framework CSS yang **berbasis utility class**. Jadi, kita nggak perlu bikin banyak CSS manual, tapi cukup pakai kelas-kelas kecil yang sudah disediakan untuk styling. Contohnya, kalau mau kasih background hitam, tinggal pakai kelas `bg-black`. Kalau mau kasih padding, tinggal pakai `p-6`, dan seterusnya.

Kelebihan Tailwind:

- Cepat bikin tampilan karena tinggal pakai kelas siap pakai.
- Fleksibel dan mudah dikustomisasi.
- Cocok buat yang suka ngoding cepat dan modular.

## Apa itu Bootstrap CSS?

Bootstrap CSS adalah framework CSS yang sudah lama dan sangat populer. Bootstrap menyediakan:

- Komponen siap pakai seperti tombol, navbar, grid system, dan lain-lain.
- Sistem grid yang memudahkan bikin layout responsif.
- Styling default yang rapi dan konsisten.

## Struktur Proyek

1. **Tailwind CSS**  
   - HTML menggunakan kelas-kelas Tailwind untuk styling.  
   - Warna gelap (dark mode) dengan background hitam dan teks putih.  
   - Sidebar navigasi, profil pengguna, dan galeri foto.

2. **Bootstrap CSS**  
   - HTML menggunakan kelas Bootstrap untuk layout dan styling dasar.  
   - CSS tambahan di file terpisah (`styles.css`) untuk kustom warna dan ukuran.  
   - Layout dan fitur mirip versi Tailwind.

## File

- `tailwind.html` — halaman dengan Tailwind CSS (langsung pakai CDN Tailwind).  
- `bootstrap.html` — halaman dengan Bootstrap CSS.  
- `styles.css` — file CSS khusus untuk styling tambahan di versi Bootstrap.  
- Folder `foto/` — berisi gambar profil dan foto postingan yang dipakai di halaman.

## Cara Pakai

1. Pastikan semua file HTML dan CSS ada di folder yang sama.  
2. Pastikan folder `foto` berisi gambar yang sesuai (misal `profil.jpeg`, `post 1.jpeg`, dll).  
3. Buka file HTML yang ingin kamu lihat (`tailwind.html` atau `bootstrap.html`) di browser.  
4. Lihat hasilnya, coba bandingkan perbedaan cara styling antara Tailwind dan Bootstrap.

- **Tailwind CSS** ngajarin kita cara styling yang sangat modular dan cepat, cocok buat yang suka custom desain.  
- **Bootstrap CSS** ngajarin kita cara bikin layout dan komponen dengan cepat dan konsisten, cocok buat prototyping dan proyek yang butuh standar UI.  
- Dengan belajar keduanya, kita jadi lebih fleksibel dan paham berbagai cara bikin tampilan web.