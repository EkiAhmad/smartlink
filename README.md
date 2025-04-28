# Task Management System

Sistem Manajemen Tugas Internal  
Laravel 11 + Filament Admin + Filament Shield

## Cara Instalasi & Menjalankan Sistem Secara Lokal

note: sebelum penginstalan aplikasi ini pastikan sudah ada menginstall wampp / xampp atau aplikasi apapun yang lain (pastikan sudah terinstall php dan mysql)

1. Clone repository
Clone repository
bash git clone https://github.com/username/task-management.git
lalu ke
cd task-management

2. Install dependencies
sebelum itu pastikan sudah menginstall composer
composer install (pada project path=\task-management)

3. Setup environment
cp .env.example .env
atau hapus maunual .example dibelakang .env
lalu
php artisan key:generate
untuk generetae key pada laravel
lalu
buat db task_management pada mysql anda
dan set DB_DATABASE="laravel" ke "task_management" pada file .env seperti dibawah
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management
DB_USERNAME=root
DB_PASSWORD=

4. Migrasi database
buat data user untuk login diawal dengan seeding
php artisan migrate --seed

5. Jalankan server
jalankan aplikasi dengan perintah
php artisan serve

6. Login
jalankan dengan format
username = admin@mail.cc
password = pass

enjoy!
