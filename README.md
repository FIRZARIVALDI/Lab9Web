# Lab9Web - PHP Modular

Praktikum 9 Pemrograman Web: modularisasi, function, template, dan routing.

## Tujuan
Memecah aplikasi PHP menjadi modul (config, views, helpers, modules), memakai template bersama,
function helper, dan router berbasis whitelist, lalu mengintegrasikannya ke aplikasi CRUD.

## Kebutuhan
XAMPP/Laragon (Apache + PHP 8+ + MySQL), browser, VS Code.

## Cara Menjalankan
1. Salin folder `Lab9Web` ke `htdocs` (XAMPP) atau `www` (Laragon).
2. Buka phpMyAdmin, import `project/database.sql`.
3. Sesuaikan kredensial di `project/config/database.php` bila perlu.
4. Buka `http://localhost/Lab9Web/project/index.php`.
5. Latihan dasar: `http://localhost/Lab9Web/praktik/home.php`.

## Struktur
```
Lab9Web/
├── praktik/            # Bagian C-E (include/require, template, function)
└── project/
    ├── index.php       # router
    ├── config/database.php
    ├── views/          # header, footer, dashboard, 404
    ├── helpers/functions.php
    ├── modules/user/   # list, add, edit, delete
    ├── modules/page/   # profil, kontak
    ├── assets/css|js
    ├── .htaccess
    └── database.sql
```

## Daftar Rute
| page | File |
|---|---|
| dashboard | views/dashboard.php |
| profil | modules/page/profil.php |
| kontak | modules/page/kontak.php |
| user/list | modules/user/list.php |
| user/add | modules/user/add.php |
| user/edit | modules/user/edit.php |
| user/delete | modules/user/delete.php (POST only) |
| lainnya | views/404.php (status 404) |

## Langkah Praktikum
1. Uji include vs require (praktik/uji-include.php).
2. Template header/footer + 3 halaman (praktik/).
3. Function & helpers (praktik/helpers.php, latihan-function*.php).
4. Struktur direktori modular (project/).
5. Router whitelist + 404.
6. Refactor CRUD ke modules/user; koneksi hanya di config/database.php.
7. Tantangan: menu aktif, flash message, URL rewrite (.htaccess), CSRF + delete via POST.

## Kendala & Solusi
(Isi dengan kendala Anda sendiri, contoh: CSS tidak tampil saat memakai rewrite -> gunakan base_url().)

## Screenshot
(Letakkan screenshot di folder `screenshots/` lalu tautkan di sini.)
