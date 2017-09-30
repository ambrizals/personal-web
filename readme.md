# My Personal Web (0.4.9) [BETA]

Aplikasi web ini dibuat menggunakan laravel dengan tujuan untuk membuat sebuah website pribadi, dimana website tersebut memiliki fitur seperti :
- Blog
- Project
- Page Builder

## Getting started
Untuk menggunakannya anda perlu memahami spesifikasi yang dibutuhkan oleh laravel 5.4, seluruh persiapan dapat digunakan berdasarkan dokumentasi yang terdapat pada laravel 5.4 berikut adalah langkah - langkahnya :

- Clone repositori ini atau download langsung dari browser setelah itu diextract.
- Buka folder yang telah diclone atau diextract melalui cmd.
- Buka folder "apps" dengan menggunakan cmd dengan perintah "cd apps"
- Pastikan composer telah terinstall dan lakukan perintah "composer update"
- Pada folder "apps" rename file ".env.example" menjadi ".env"
- Buka file ".env" lalu ubah beberapa konfigurasi agar dapat dijalankan.
- Kembali ke cmd, lakukan perintah "php artisan key:generate"

## Installed Packages
Berikut adalah packages addons yang terpasang :
- HTML & Forms (Laravel Collective)
- BotCaptcha (Captcha-com)
- DataTables Yajrabox


## Informasi user :
- Username : admin@localhost
- Password : admin1234

*Informasi user dapat dilihat pada direktori apps/database/seeds/UserTableSeeder.php*

## Versi : 0.4.9
Change log :
- Updating User Interface (UI Ver.0.9.26)
- Adding new basic comment feature in article (Manage comment in panel is available soon)
- Updating article table (Adding comment count column)
- Create converter when uploading a new photo to JPG Format.

## Versi 0.4.8
Change log :
- Upgrade framework laravel from version 5.4 to version 5.5
- Upgrade LaravelCollective/HTML packages (developer/ not stable)
- Modifying layout and make a new blade part of head
- Changing HTML function (LaravelCollective/HTML) with asset

## Versi 0.4.7
Perubahan struktur file blade dan penambahan modul dasar page builder.

## Versi 0.4.1
Pembaruan gaya pada interface artikel.

## Versi 0.4
Pembaruan pada blog meliputi :
- Penambahan slug
- Mengganti thumbnail menjadi cover.
- Membuat thumbnail.
- Desain dasar halaman blog.

## Versi 0.3.1
Pembaruan dan penyelesaian pada panel artikel.

## Versi 0.3
Pembaruan pada panel artikel dan kategori

## Versi 0.2
Pembaruan pada modul profil
- Adding captcha in change password
- Fix cannot update password in database

## Versi 0.1.3
Pembaruan pada modul profil
- Update foto profil

## Versi 0.1

Versi 0.1 merupakan versi awal dalam pembuatan akun, dimana nantinya pemilik harus melakukan login saat memanage websitenya sendiri.

# Laravel

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
