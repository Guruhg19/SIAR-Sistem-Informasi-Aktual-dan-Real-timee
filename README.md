# 📰 SIAR: Sistem Informasi Aktual dan Real-time

![Laravel](https://img.shields.io/badge/Laravel-11-red?style=flat&logo=laravel)
![Filament](https://img.shields.io/badge/Filament-v3-blueviolet?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-informational?style=flat&logo=mysql)

**SIAR** adalah sebuah aplikasi portal berita digital yang dibangun menggunakan Laravel 11 dan Filament.

---

## 🌟 Fitur Utama

- 🔧 Pembuatan CMS menggunakan Laravel Filament secara cepat dan efisien
- 🗂️ Manajemen kategori berita
- 🔍 Fitur pencarian berita
- 👤 Halaman profil penulis
- 💡 Sistem iklan berbayar yang dapat ditampilkan pada portal berita
- 🛠️ Manajemen database menggunakan ORM Laravel (Eloquent)
- 🧹 Migrasi, seeding, dan struktur data sesuai dengan best practices

---

## 🚀 Cara Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lokal development:

1. **Clone Repository**
   ```bash
   git clone https://github.com/Guruhg19/SIAR-Sistem-Informasi-Aktual-dan-Real-timee.git
   cd SIAR-Sistem-Informasi-Aktual-dan-Real-timee
   ```

2. **Install Dependency**
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Buat file .env**
   ```bash
   cp .env.example .env
   ```

4. **Generate Key**
   ```bash
   php artisan key:generate
   ```

5. **Setup Database**
   - Buat database baru di MySQL (cth: `siar_db`)
   - Atur koneksi database di file `.env`

6. **Jalankan Migrasi dan Seeder**
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

---

## 📦 Teknologi yang Digunakan

- Laravel 11
- Laravel Filament v3
- MySQL
- Tailwind CSS (default dari Filament)
- Eloquent ORM

---

## 🔗 Repository

GitHub: [SIAR - Sistem Informasi Aktual dan Real-time](https://github.com/Guruhg19/SIAR-Sistem-Informasi-Aktual-dan-Real-timee.git)
