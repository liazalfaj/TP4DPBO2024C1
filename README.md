# TP4DPBO2024C1
## Janji 
Saya Amelia Zalfa Julianti dengan NIM 2203999 mengerjakan Tugas praktikum 4 mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan sesuai dengan apa yang telah dispesifikasikan. Aamiin.

## Desain Program

**Controllers**:
1. `LoyaltyController`: Menangani operasi terkait loyalitas, seperti menambah, mengedit, menghapus, dan menampilkan data loyalitas.
2. `MembersController`: Menangani operasi terkait anggota, seperti menambah, mengedit, menghapus, dan menampilkan data anggota.

**Models**:
1. `DB`: Kelas dasar untuk berinteraksi dengan database MySQL.
2. `Loyalty`: Turunan dari `DB`, menangani operasi database terkait loyalitas.
3. `Members`: Turunan dari `DB`, menangani operasi database terkait anggota.
4. `Template`: Kelas untuk mengelola tampilan HTML dengan mengganti placeholder dengan data yang sebenarnya.

**Views**:
1. `AddMembersView`, `EditMembersView`, `MembersView`: Mengatur tampilan untuk menambah, mengedit, dan menampilkan data anggota.
2. `AddLoyaltyView`, `EditLoyaltyView`, `LoyaltyView`: Mengatur tampilan untuk menambah, mengedit, dan menampilkan data loyalitas.

**Templates**:
Berisi file HTML dengan placeholder yang akan diisi dengan data sebenarnya saat tampilan dirender.

**Koneksi Database**:
`connection.php`: Berisi konfigurasi untuk mengakses database MySQL.

**File Utama**:
1. `index.php`: Memuat `MembersController` dan menampilkan daftar anggota.
2. `create.php`: Memuat `MembersController` dan menampilkan formulir untuk menambah anggota baru.
3. `edit.php`: Memuat `MembersController` dan menampilkan formulir untuk mengedit data anggota.
4. `delete.php`: Memuat `MembersController` dan menghapus data anggota.
5. `loyalty.php`: Memuat `LoyaltyController` dan menampilkan daftar loyalitas.
6. `createloyalty.php`: Memuat `LoyaltyController` dan menampilkan formulir untuk menambah loyalitas baru.
7. `editloyalty.php`: Memuat `LoyaltyController` dan menampilkan formulir untuk mengedit data loyalitas.
8. `deleteloyalty.php`: Memuat `LoyaltyController` dan menghapus data loyalitas.

## Alur Program
1. **Operasi Anggota (Members)**:
   - Saat pengguna mengakses `index.php`, program memuat `MembersController` dan memanggil metode `index()`.
   - Metode `index()` pada `MembersController` akan mengambil data anggota dari database melalui model `Members`, kemudian merender data tersebut menggunakan `MembersView`.
   - Jika pengguna ingin menambah anggota baru, pengguna akan diarahkan ke `create.php`.
   - `create.php` akan memuat `MembersController` dan memanggil metode `addMemberView()`.
   - Metode `addMemberView()` akan merender formulir untuk menambah anggota baru menggunakan `AddMembersView`.
   - Setelah pengguna mengisi formulir dan menekan tombol submit, data akan dikirim ke `create.php` dan metode `add()` pada `MembersController` akan dipanggil untuk menyimpan data baru ke database melalui model `Members`.
   - Untuk mengedit data anggota, pengguna akan diarahkan ke `edit.php` dengan menyertakan ID anggota yang ingin diedit.
   - `edit.php` akan memuat `MembersController` dan memanggil metode `editMemberView()` dengan ID anggota yang diberikan.
   - Metode `editMemberView()` akan mengambil data anggota dari database melalui model `Members` dan merender formulir edit menggunakan `EditMembersView`.
   - Setelah pengguna mengubah data dan menekan tombol submit, data akan dikirim ke `edit.php` dan metode `edit()` pada `MembersController` akan dipanggil untuk mengupdate data di database melalui model `Members`.
   - Untuk menghapus data anggota, pengguna akan diarahkan ke `delete.php` dengan menyertakan ID anggota yang ingin dihapus.
   - `delete.php` akan memuat `MembersController` dan memanggil metode `delete()` dengan ID anggota yang diberikan, kemudian data akan dihapus dari database melalui model `Members`.

2. **Operasi Loyalitas (Loyalty)**:
   - Alur untuk operasi loyalitas (menambah, mengedit, dan menghapus) serupa dengan operasi anggota, hanya saja menggunakan `LoyaltyController`, `Loyalty` (model), dan berbagai view terkait loyalitas (`AddLoyaltyView`, `EditLoyaltyView`, `LoyaltyView`).
   - File-file seperti `loyalty.php`, `createloyalty.php`, `editloyalty.php`, dan `deleteloyalty.php` digunakan untuk menangani operasi pada loyalitas.
## Dokumentasi
https://github.com/liazalfaj/TP4DPBO2024C1/assets/114666885/fe73df5e-ce97-4e99-991d-ae1f563709c6

![Screenshot 2024-05-01 235035](https://github.com/liazalfaj/TP4DPBO2024C1/assets/114666885/f7018b8c-9fd4-4ee7-b6a1-6c6d67b79021)

![image](https://github.com/liazalfaj/TP4DPBO2024C1/assets/114666885/e561affa-44e9-409f-872a-375514134557)

![image](https://github.com/liazalfaj/TP4DPBO2024C1/assets/114666885/8fbf7a2d-e2fa-4f0e-a8ab-cc79e2b68cd2)


