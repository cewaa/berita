## Tools Yang Digunakan
- [Visual Studio Code](https://code.visualstudio.com/)
- [XAMPP](https://www.apachefriends.org/download.html)

## Fitur Yang Tersedia
- dashboard
- halaman login
- halaman admin
- Authentication
- Login
- Logout
- Membuat berita
- Melihat isi berita
- Multi User
- Admin :
Pengguna yang dapat Melihat dan Menggunakan Fungsi CRUD Mengenai berita yang ada di Halaman Dashboard yaitu Laman Admin

- User :
Pengguna yang dapat Melihat Halaman Dashboard dan isi dari berita yang telah dibuat admin


## akun default untuk pengujian
  admin email
  admin@example.com
  password123

  
  user email
  user@example.com
  password123

## ERD 
![Screenshot 2024-09-27 034602](https://github.com/user-attachments/assets/08745e7b-9640-4a14-825d-f1e1386e08d0)

## UML
![uml](https://github.com/user-attachments/assets/042b09ac-cfd2-4f73-85c8-b41cfd7ee2bb)

## Teknologi Yang Digunakan
- Laravel 11 Bootstrap

## Persyaratan Untuk Melakukan Instalasi
- PHP 8.2.12 & Web Server (Apache)
- Database (MariaDB)
- Web Browser (Chrome)

## Instalasi 
1 . Clone Repository

git clone https://github.com/cewaa/berita

2 . Pindah ke Direktori Proyek

cd berita

Setelah Itu Masuk Ke dalam Visual Studio Code

code .

3 . Install atau Update composer

composer install

4 . Konfigurasikan file .env

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=berita_db

DB_USERNAME=root

DB_PASSWORD=

DB_COLLATION=utf8mb4_unicode_ci


5. Melakukan Migrasi

php artisan migrate


5. Menjalankan kelas seeder

php artisan db:seed --UserSeeder


6. Mulai Situs Web

php artisan serve
