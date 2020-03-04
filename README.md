# Introduction
**Kirim Tugas** -- adalah aplikasi yang dapat digunakan oleh guru/pendidik untuk mengumpulkan tugas (praktikum) siswa dengan lebih cepat dan rapi melalui jaringan LAN.

file hasil tugas siswa yang dikirim akan disimpan dengan mengubah nama filenya sesuai isian siswa, ini bisa membantu guru/pendidik merapikan arsip haril karya siswa, dan untuk menghindari resiko kehilangan data karena lupa nama dan lokasi file.

meskipun dibuat sederhana, tanpa penggunaan database, semoga aplikasi ini bisa memenuhi fungsinya mengurangi penggunaan "flashdisk bervirus" dari siswa pada saat mengumpulkan tugas.

- Halaman Upload

![alt text](https://preview.ibb.co/gb2yA5/Screenshot_from_2017_07_01_18_18_56.png "screenshoot")

- File berhasil diganti nama

![alt text](https://preview.ibb.co/i7Vwxk/Screenshot_from_2017_07_01_18_16_39.png "screenshoot")

- File sumber sebelum dikirim

![alt text](https://image.ibb.co/idV73Q/Screenshot_from_2017_07_01_18_09_33.png "screenshoot")

## Penggunaan
bisa dipasang di web server lokal, seperti XAMPP

akses dari client dengan ip server, contoh : 192.168.0.1/kirim-tugas

Sebelum siswa mulai upload, pastikan sudah mengisi beberapa pengaturan awal di file ```config.php```, meliputi :
- Nama mapel
- Kelas / rombongan belajar
- Nama tugas
- Format file
- Ukuran maksimal file
- Pilihan mengiring ulang

Setelah semua siswa selesai mengirim tugas, segera amankan (copas) file yang tersimpan di server ke lokal.

## Fitur
- [x] filter ukuran file
- [x] filter tipe/ekstensi file
- [x] filter kirim ulang dan duplikasi file
- [ ] Admin login

## Spesial Thanks
- [SMK Plus Al-Farhan](http://smkplusalfarhan.sch.id/)
terima kasih sudah bersedia menggunakan aplikasi ini.
- [Sekolah Koding](http://sekolahkoding.com/)
terima kasih atas ilmunya yang melimpah, sangat begitu terinspirasi, berkah terus buat adminnya (y).

## Credits
- [Bootstrap](http://getbootstrap.com/)
