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
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/36a22843-fc56-444a-a9f5-26e51fbf7aa7" />

- Halaman Register
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/4112f9f4-2648-4bea-91d8-710be82c253e" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/ffc4ae7d-2ffc-47e0-9d0f-96307b97aea7" />

- Halaman Data Buku
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/4c2e4f10-8b16-42a8-9b07-3f83ed0d2f20" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/14edb994-592e-4517-9360-bbfd69e948a4" />

- Halaman Tambah Buku
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/dc27fa91-386c-4d42-bffe-c92779903031" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/dd6ba134-9e6c-4f51-b363-2ca157862e07" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/d13bc5eb-0b99-4e8a-90aa-50f1fdfaefbc" />

- Halaman Edit Buku
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/9748d749-e03a-4fbd-ab69-b11718725a0f" />

# Tampilan Mobile
- Login
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/e47ecdf8-8e38-4c3d-a1ce-650a5de684a2" />

- Register
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/da06476f-6392-484f-a2d6-960c762c9d2c" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/f50cd470-d2a4-4186-98d8-0a8f26b409f4" />

- Data Buku (bisa geser ke samping)
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/f94e8613-57cc-40ef-bb7f-4c52ea1c4985" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/18cfc83c-42ad-4a23-9f39-326a06f474b6" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/2f9dbdc5-2a63-48da-b7da-3f749a4984b5" />

- Tambah Buku
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/e52b9dc9-954c-404a-a1e3-b28ead29efa7" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/dc63a805-db66-494b-ae9a-5f8a5e8c937f" />
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/e803a27e-74d3-46eb-9fab-610a58eb6710" />

- Edit Buku
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/bddade74-8c39-4fc4-9b16-79b466eddf46" />

## Tampilan User
   Tidak dapat mengubah data (Read Only)
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/59a7912a-b9e2-4e76-9e45-9f879d0585cd" />








### UI / UX
- Tema modern classic (ungu / lilac)
- Responsive design
- Tampilan mobile full pada data buku
- Desain yang konsisten pada Login, Register, Tambah & Edit Buku

---

## Struktur Directory
Berikut struktur folder project **Perpustakaan Web**:

<img width="224" height="783" alt="image" src="https://github.com/user-attachments/assets/b718d88f-2469-4b91-82f6-7ed1532a3ebf" />
