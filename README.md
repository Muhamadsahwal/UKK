<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Konsep web yang saya buat

Website yang saya buat ini merupakan sebuah web restoran yang memiliki tampilan yang menarik, yang dapat memikat pelanggan dan juga aesthetic

## Filtur Yang Tersedia
-- Halaman Pertama (Landing Page)
- Halaman Home
- Menu
- About
- Tentang
- Galery

-- Halaman Admin
- Product
  

--Authentication
- Login
- Logout

## Akun Default Untuk Pengujian
- **Admin**
- Email:admin@gmail.com
- Password:admin145

## Teknologi Yang Di Gunakan

- Laravel 10
- Start Bootstrap (SB Admin 2)

## Tools Yang Di Gunakan

- Visual Studio Code
- Composeser
- XAMPP

## Persyaratan Instalasi

-  PHP 8.2.12
-  Database (XAMPP)
-  Web Browser (Chrome atau Microsoft Edge)
  

## ERD 

![Cuplikan layar 2024-09-26 053434](https://github.com/user-attachments/assets/7d569409-63e4-4580-b367-3de0f19c7a26)


## UML Diagram Use Case

![Cuplikan layar 2024-09-26 102551](https://github.com/user-attachments/assets/509b8016-90d5-49e0-b989-9593b5989e8f)


    
## Instalasi

1. Clone Repositori
    ```bash
    git clone
    https://github.com/Muhamadsahwal/UKK.git
    composer install
    cp. env.example .env

2. Konfigurasi Database Pada File .env
   ```bash
   DB_DATABASE=UJIKOM
   MASUK KE DATABASE(xampp) lalu di samakan dengan yang di atas

3. Melakukan Migrasi Dan Menyambungkan Storage
   ```bash
   php artisan key:generate
   php artisan storage:link
   php artisan migrate --seed

4. Mulai Web
   ```bash
   php artisan serve

   

