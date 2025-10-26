# Sistem Pengajuan Dana Desa

Sistem untuk mengelola pengajuan dana desa dengan workflow dari desa → kecamatan → kabupaten.

## 🚀 Fitur Utama

- **Multi-level Authentication** (Desa, Kecamatan, Kabupaten)
- **Pengajuan Dana Desa** (DD Non Earmark & DD Earmark)
- **Tahapan Pengajuan** (Tahap 1 & Tahap 2)
- **Manajemen Dokumen** dengan validasi kelengkapan
- **Review & Approval** oleh kecamatan dan kabupaten
- **Tracking Status** real-time

## 👥 Akses Login

### Demo Accounts:

| Role | Email | Password | Keterangan |
|------|-------|----------|------------|
| **Desa** | `desa@pakkades.com` | `password` | Membuat & mengajukan proposal |
| **Kecamatan** | `kecamatan@pakkades.com` | `password` | Mereview pengajuan dari desa |
| **Kabupaten** | `kabupaten@pakkades.com` | `password` | Approval final & monitoring |

## 📋 Persyaratan Dokumen

### DD (Non Earmark)
**Tahap 1:**
- Perdes APBDes
- Surat Pengantar Desa  
- Perkades BLT
- Rincian Tagging OMSPAN

**Tahap 2:**
- Laporan Realisasi Tahun Sebelumnya
- Laporan Penyerapan Tahap 1

### DD (Earmark)
**Tahap 1:**
- Perdes APBDes
- Surat Pengantar Desa
- Perkades BLT
- Realisasi BLT Tahun Sebelumnya

**Tahap 2:**
- Laporan Realisasi Tahun Sebelumnya
- Laporan Realisasi Tahap 1

## 🛠️ Instalasi

1. **Clone Repository**
   ```bash
   git clone [repository-url]
   cd [project-folder]
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   - Buat database MySQL
   - Update file `.env` dengan kredensial database

5. **Jalankan Migration & Seeder**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

## 🔐 Role & Permission

- **Desa**: Buat, edit, ajukan pengajuan
- **Kecamatan**: Review & verifikasi dokumen
- **Kabupaten**: Approval final & monitoring

## 📞 Support
085730302827
Untuk pertanyaan atau bantuan, hubungi tim development.
