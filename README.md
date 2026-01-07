## Nama : Putri Melati Ramadhaniati
## NIM  : 312410194
## Kelas: TI.24.A1
## Mata Kuliah: Pemrograman Web 1

---

# Perpustakaan Web (PHP Native)

Sistem Informasi Perpustakaan Berbasis Web adalah aplikasi yang digunakan untuk mengelola data buku dan pengguna pada sebuah perpustakaan secara online.
Aplikasi ini dibuat menggunakan PHP Native, MySQL, dan Bootstrap 5 dengan tampilan modern classic bernuansa ungu (lilac) serta responsif di perangkat mobile.

Aplikasi ini memiliki sistem login dan register, pembagian role pengguna (Admin & User), serta fitur CRUD (Create, Read, Update, Delete) untuk data buku.

---

## Deskripsi Program
Perpustakaan Web adalah aplikasi CRUD (Create, Read, Update, Delete) yang memungkinkan:
- Admin mengelola data buku (tambah, edit, hapus)
- User melihat daftar buku
- Pencarian buku
- Pagination data
- Upload cover buku
- Tampilan modern (Lilac / Ungu) & responsif (mobile full)

---

## Tujuan dibuatnya aplikasi ini adalah:
- Memudahkan pengelolaan data buku perpustakaan
- Menyediakan sistem pencarian buku yang cepat
- Mengatur hak akses pengguna berdasarkan role
- Menyajikan tampilan yang modern, rapi, dan responsif
- Sebagai penerapan konsep CRUD, Session, Pagination, dan Upload File dalam PHP

## Teknologi yang Digunakan
- Bahasa Pemrograman: PHP (Native)
- Database: MySQL
- Frontend: HTML, CSS, Bootstrap 5
- Server Lokal: XAMPP
- Version Control: Git & GitHub


## Role dan Hak Akses
# Admin
- Login ke sistem
- Melihat data buku
- Menambah buku
- Mengedit buku
- Menghapus buku
- Upload cover buku
- Logout

# User
- Login ke sistem
- Melihat data buku
- Mencari buku
- Tidak dapat mengubah data (Read Only)

## Fitur Utama Aplikasi

1. Login & Register
- Autentikasi menggunakan session
- Tampilan modern dan responsif

---

2. Manajemen Data Buku
- Tambah buku
- Edit buku
- Hapus buku
- Upload cover buku

---

3. Pencarian Buku
- Berdasarkan judul, penulis, dan penerbit

---

4. Pagination
- Menampilkan data buku per halaman
- Navigasi halaman otomatis

---

5. Upload Gambar
- Upload cover buku
- Validasi format gambar

---

6. Responsive Design
- Tampilan full di mobile untuk halaman data buku
- Tampilan form tetap rapi di mobile

---

## Alur Kerja Aplikasi
1. User membuka aplikasi
   Dapat diakses di Chrome: ( http://localhost/perpustakaan-web/index.php?page=login )
3. User melakukan Login / Register
5. Sistem mengecek role pengguna
6. User diarahkan ke halaman Dashboard / Data Buku
7. Admin dapat melakukan CRUD buku
8. Data ditampilkan dengan pagination
9. User/Admin dapat logout

---

## Teknologi yang Digunakan
1. PHP Native
2. MySQL
3. Bootstrap 5
4. HTML5 & CSS3
5. JavaScript (basic)
6. XAMPP / Laragon (Local Server)

---

## Screenshot Aplikasi
- Halaman Login
- Halaman Register
- Halaman Data Buku
- Halaman Tambah Buku
- Halaman Edit Buku
- Tampilan Mobile

### UI / UX
- Tema modern classic (ungu / lilac)
- Responsive design
- Tampilan mobile full pada data buku
- Desain yang konsisten pada Login, Register, Tambah & Edit Buku

---

## Struktur Directory
Berikut struktur folder project **Perpustakaan Web**:

<img width="224" height="783" alt="image" src="https://github.com/user-attachments/assets/b718d88f-2469-4b91-82f6-7ed1532a3ebf" />
