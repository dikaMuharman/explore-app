checklist

-   [x] buat db user
-   [x] buat autentikasi user
-   [x] implementasi role model
-   [x] implemtasi register dan login functional
-   [ ] crud user
-   [ ] buat db wisata
-   [ ] implementasi crud wisata
-   [ ] menampilkan data dari wisata ke halaman client
-   [ ] implementasi route model binding untuk pertukaran data antar halaman
-   [ ] buat db atraksi turis
-   [ ] buat relasi antara wisata dengan db atraksi turis
-   [ ] implementasi crud atraksi turis
-   [ ] menampilkan data dari wisata
-   [ ] buat db reviews
-   [ ] buat relasi antara wisata dengan db reviews
-   [ ] implementasi crud reviews
-   [ ] menampilkan data dari wisata
-   [ ] buat db pemesanan
-   [ ] buat relasi antara pemesanan dengan wisata
-   [ ] implematasi crud pemesanan
-   [ ] tampilkan isi daftar pemesanan tiap pengguna

isi dari tabel wisata

1. no
2. nama wisata
3. status
4. action

form wisata

1. nama (required)
2. lokasi (required)
3. deskripsi (required)
4. foto (required|image|mimes:jpg,bmp,png)

tabel paket wisata

1. no
2. nama paket
3. lokasi wisata
4. action

form paket wisata

1. nama paket (required)
2. lokasi wisata (reqiuired)
3. hotel (required)
4. rating (required|numeric)
5. pesawat (required)
6. kelas pesawat (required)
7. fasilitas (required)
8. harga paket (required|numeric)

tabel atraksi turis

1. no
2. nama
3. nama wisata
4. action

form atraksi turis

1. nama (required)
2. nama wisata (required)
3. foto (required|image|mimes:jpg,bmp,png)

tabel pemesanan

1. no
2. nama
3. wisata
4. nama paket
5. harga
6. action

form pemesanan

1. nama pemesan (required)
2. wisata (required)
3. paket (required)
4. tanggal berangkat (required)
5. tanggal pulang (required)
6. harga paket (required|numeric)
7. jumlah paket (required|numeric)
8. total harga (required|numeric)
