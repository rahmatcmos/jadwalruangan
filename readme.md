# Aplikasi Penjadwalan Ruangan Sistem Komputer

Aplikasi ini dibangun menggunakan Laravel 5.2 untuk melakukan pengecekan data jadwal secara simultan menggunakan ajax request setiap 1 menit sekali untuk mendapatkan status ruangan.

Untuk menggunakan aplikasi ini, ikuti langkah berikut:
* Clone repository
* Composer update
* Atur configurasi environtment pada file .env
* php artisan migrate
* php artisan db:seed

jika kalian ingin manual export/import database via phpmyadmin, silahkan cari file jadwalruangan.sql dan ganti config database sesuai dengan sistem kalian

demo dapat diliat di [sini] (http:203.24.50.76/jadwalruangan/public)