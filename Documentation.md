# UAS PEMWEB

### Oleh  
**20230801543 - Wiedy Marchzindy**

---

## PROSES SLR

- **Rumpun Ilmu**: Bisnis Digital / Web Development  
- **Deskripsi**: Membangun aplikasi web bisnis untuk menampilkan profil perusahaan, layanan, dan pengelolaan data pelanggan secara online.

- **P (Platform)**: Aplikasi Web untuk bisnis / company profile  
- **I (Intervention)**: Teknologi Laravel Filament dengan peran admin, karyawan, dan pelanggan  
- **C (Comparison)**: Pengelolaan bisnis yang masih dilakukan secara manual atau tanpa sistem terintegrasi  
- **O (Outcome)**: Sistem web yang memudahkan pengelolaan data pelanggan dan operasional bisnis secara digital  
- **S (Suspect)**: Perusahaan atau UMKM yang ingin melakukan transformasi digital melalui website bisnis  

**Riset Question (RQ) terkait ide penelitian di atas:**

> Bagaimana penerapan aplikasi web bisnis berbasis Laravel Filament dengan peran admin, karyawan, dan pelanggan dapat membantu proses digitalisasi pengelolaan data pelanggan dan operasional bisnis pada perusahaan/UMKM yang sebelumnya masih menggunakan cara manual?

---

## PROSES RQ

**RQ1:**  
Bagaimana implementasi aplikasi web berbasis Laravel Filament dengan peran admin, karyawan, dan pelanggan dapat meningkatkan efektivitas pengelolaan data pelanggan dan operasional bisnis pada perusahaan/UMKM dibandingkan proses manual tanpa sistem terintegrasi?

**Perkiraan Judul yang Baik:**  
**Pengembangan Aplikasi Web Bisnis Berbasis Laravel Filament dengan Multi-Peran (Admin, Karyawan, Pelanggan) sebagai Solusi Digitalisasi Pengelolaan Data Pelanggan pada UMKM**

---

## SLR

Terlampir file SLR dengan nama: **`SLR.pdf`**

---

## BRD

Terlampir file BRD berdasarkan hasil SLR dengan nama: **`BRD.pdf`**

---

## IMPLEMENTASI WEBSITE
```bash
1. cd boilerplate
2. ./start.sh uas-pemweb
3. cd uas-pemweb
4. cd src
5. code .
6. template website dengan ide saya diambil dari https://themewagon.com/themes/nova-bootstrap5_beta1/
7. cd resource/views
8. mkdir layouts && mkdir pages && mkdir partials
9. dcm CompanyProfile, Contact, Feature, Hero, Service, Service Request
10. membuat file layouts/app.blade.php sebagai layout utama
11. membuat file pages/home.blade.php sebagai halaman utama
12. memecah template menjadi partials (header, hero, feature, about, service, contact, footer)
13. membuat hero section dinamis dari database
14. membuat feature (keunggulan) dinamis dari database
15. membuat halaman about / company profile
16. membuat layanan (service) yang dapat diklik
17. membuat form permintaan layanan (service request)
18. menjalankan migrate untuk membuat tabel database
19. membuat Filament Resource untuk setiap data master
20. menghubungkan frontend dengan data dari database
21. membuat route untuk submit permintaan layanan
22. membuat API untuk service request
23. menguji input data dari admin ke frontend
24. menguji pengiriman data melalui API
