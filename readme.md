# Aplikasi Penjadwalan Ruangan Sistem Komputer

Aplikasi ini dibangun menggunakan Laravel 5.2 untuk melakukan pengecekan data jadwal secara simultan menggunakan ajax request setiap 1 menit sekali untuk mendapatkan status ruangan.

Untuk menggunakan aplikasi ini, ikuti langkah berikut:
1. Clone repository
2. Composer update
3. Atur configurasi environtment pada file .env
4. php artisan migrate
5. php artisan db:seed

jika kalian ingin manual export/import database via phpmyadmin, silahkan cari file jadwalruangan.sql dan ganti config database sesuai dengan sistem kalian

demo dapat diliat di sini