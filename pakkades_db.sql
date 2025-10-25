-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2025 pada 20.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakkades_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_pengajuans`
--

CREATE TABLE `dokumen_pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengajuan_id` bigint(20) UNSIGNED NOT NULL,
  `persyaratan_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `nama_asli` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen_pengajuans`
--

INSERT INTO `dokumen_pengajuans` (`id`, `pengajuan_id`, `persyaratan_id`, `path`, `nama_asli`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'dokumen/dummy.pdf', 'consectetur.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(3, 1, 1, 'dokumen/dummy.pdf', 'et.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(4, 2, 2, 'dokumen/dummy.pdf', 'fuga.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(6, 2, 1, 'dokumen/dummy.pdf', 'harum.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(7, 2, 1, 'dokumen/dummy.pdf', 'et.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(8, 2, 4, 'dokumen/dummy.pdf', 'velit.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(9, 3, 4, 'dokumen/dummy.pdf', 'sint.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(10, 3, 1, 'dokumen/dummy.pdf', 'sint.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(11, 3, 1, 'dokumen/dummy.pdf', 'ut.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(12, 4, 3, 'dokumen/dummy.pdf', 'qui.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(13, 4, 1, 'dokumen/dummy.pdf', 'tempora.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(14, 4, 4, 'dokumen/dummy.pdf', 'ut.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(15, 5, 3, 'dokumen/dummy.pdf', 'ratione.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(16, 5, 4, 'dokumen/dummy.pdf', 'pariatur.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(17, 5, 2, 'dokumen/dummy.pdf', 'rem.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(18, 6, 2, 'dokumen/dummy.pdf', 'quidem.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(19, 6, 1, 'dokumen/dummy.pdf', 'omnis.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(20, 6, 1, 'dokumen/dummy.pdf', 'autem.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(21, 7, 2, 'dokumen/dummy.pdf', 'sequi.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(22, 7, 3, 'dokumen/dummy.pdf', 'aut.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(24, 8, 2, 'dokumen/dummy.pdf', 'magnam.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(25, 8, 2, 'dokumen/dummy.pdf', 'et.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(26, 8, 4, 'dokumen/dummy.pdf', 'sed.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(27, 8, 1, 'dokumen/dummy.pdf', 'consectetur.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(28, 9, 2, 'dokumen/dummy.pdf', 'sed.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(29, 9, 1, 'dokumen/dummy.pdf', 'quod.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(30, 9, 3, 'dokumen/dummy.pdf', 'eum.pdf', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(33, 10, 1, 'dokumen/dummy.pdf', 'voluptatum.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(34, 10, 2, 'dokumen/dummy.pdf', 'commodi.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(35, 10, 3, 'dokumen/dummy.pdf', 'sunt.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(37, 11, 1, 'dokumen/dummy.pdf', 'est.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(38, 11, 2, 'dokumen/dummy.pdf', 'qui.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(39, 11, 1, 'dokumen/dummy.pdf', 'pariatur.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(40, 12, 4, 'dokumen/dummy.pdf', 'maxime.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(41, 12, 4, 'dokumen/dummy.pdf', 'et.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(42, 12, 1, 'dokumen/dummy.pdf', 'eos.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(43, 12, 4, 'dokumen/dummy.pdf', 'veritatis.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(44, 13, 2, 'dokumen/dummy.pdf', 'sit.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(45, 13, 3, 'dokumen/dummy.pdf', 'autem.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(46, 13, 4, 'dokumen/dummy.pdf', 'aut.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(47, 13, 3, 'dokumen/dummy.pdf', 'in.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(48, 14, 3, 'dokumen/dummy.pdf', 'optio.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(49, 14, 4, 'dokumen/dummy.pdf', 'autem.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(50, 14, 3, 'dokumen/dummy.pdf', 'harum.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(51, 14, 4, 'dokumen/dummy.pdf', 'ratione.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(52, 15, 2, 'dokumen/dummy.pdf', 'quia.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(53, 15, 4, 'dokumen/dummy.pdf', 'modi.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(54, 15, 3, 'dokumen/dummy.pdf', 'fuga.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(56, 16, 3, 'dokumen/dummy.pdf', 'architecto.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(57, 16, 4, 'dokumen/dummy.pdf', 'quod.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(58, 16, 1, 'dokumen/dummy.pdf', 'eos.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(59, 16, 4, 'dokumen/dummy.pdf', 'beatae.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(60, 16, 3, 'dokumen/dummy.pdf', 'fuga.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(61, 17, 1, 'dokumen/dummy.pdf', 'non.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(63, 17, 4, 'dokumen/dummy.pdf', 'quibusdam.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(66, 18, 1, 'dokumen/dummy.pdf', 'aut.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(67, 18, 2, 'dokumen/dummy.pdf', 'earum.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(68, 18, 1, 'dokumen/dummy.pdf', 'accusantium.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(71, 19, 1, 'dokumen/dummy.pdf', 'eum.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(72, 20, 4, 'dokumen/dummy.pdf', 'earum.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(73, 20, 2, 'dokumen/dummy.pdf', 'non.pdf', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(77, 21, 1, 'dokumen-pengajuan/21/S8YKJrkwfSGEFqkNCTMy.pdf', 'TIKET TRAVEL CV AZIRAH TRAVEL.pdf.pdf', '2025-10-25 10:39:33', '2025-10-25 10:39:33'),
(78, 21, 2, 'dokumen-pengajuan/21/I0FlW8XHptLKpTM3NelU.pdf', 'hasil-plagiarisme-Rancang Bangun Sistem Informasi Penagihan WiFi Berbasis Web  Analisis Fungsionalitas dan Potensi Pengembangan pada Studi Kasus Rozitech Multi Media Indonesia fix.pdf', '2025-10-25 10:39:33', '2025-10-25 10:39:33'),
(79, 21, 3, 'dokumen-pengajuan/21/6AVntdWigZ3OILl9wfGr.pdf', 'laporan-pengajuan-2025-09-30.pdf', '2025-10-25 10:39:33', '2025-10-25 10:39:33'),
(80, 21, 4, 'dokumen-pengajuan/21/teZOisdfnNaKdMlHK1LY.pdf', 'TIKET TRAVEL CV AZIRAH TRAVEL.pdf.pdf', '2025-10-25 10:39:33', '2025-10-25 10:39:33'),
(82, 22, 1, 'dokumen-pengajuan/22/xKQgbY6Y0gA4oW7WGWWS.pdf', 'TIKET TRAVEL CV AZIRAH TRAVEL.pdf.pdf', '2025-10-25 10:43:37', '2025-10-25 10:43:37'),
(83, 22, 2, 'dokumen-pengajuan/22/UXHXk44K0kj1EDHwmy9D.pdf', 'hasil-plagiarisme-Rancang Bangun Sistem Informasi Penagihan WiFi Berbasis Web  Analisis Fungsionalitas dan Potensi Pengembangan pada Studi Kasus Rozitech Multi Media Indonesia fix.pdf', '2025-10-25 10:43:37', '2025-10-25 10:43:37'),
(84, 22, 3, 'dokumen-pengajuan/22/SjutA6jNkAP8CiWMvPtc.pdf', 'laporan-pengajuan-2025-09-30.pdf', '2025-10-25 10:43:37', '2025-10-25 10:43:37'),
(85, 22, 4, 'dokumen-pengajuan/22/ddEoIA9RFcenbH8WKvPg.pdf', 'TIKET TRAVEL CV AZIRAH TRAVEL.pdf.pdf', '2025-10-25 10:43:37', '2025-10-25 10:43:37'),
(87, 23, 1, 'dokumen-pengajuan/23/YRDBQFX1qLWxsXapOODL.pdf', 'ID-Card-siswa.pdf', '2025-10-25 10:44:59', '2025-10-25 10:44:59'),
(88, 23, 2, 'dokumen-pengajuan/23/B43ANqArVHn2kUFGKYCC.pdf', 'TIKET TRAVEL CV AZIRAH TRAVEL.pdf.pdf', '2025-10-25 10:44:59', '2025-10-25 10:44:59'),
(89, 23, 3, 'dokumen-pengajuan/23/3EwjcPPbuSHV7Nf8PGAp.pdf', 'hasil-plagiarisme-Rancang Bangun Sistem Informasi Penagihan WiFi Berbasis Web  Analisis Fungsionalitas dan Potensi Pengembangan pada Studi Kasus Rozitech Multi Media Indonesia fix.pdf', '2025-10-25 10:44:59', '2025-10-25 10:44:59'),
(90, 23, 4, 'dokumen-pengajuan/23/9YvKTQra8dzQgzo560uK.pdf', 'ID-Card-Nur-Nafilah-Rahim (1).pdf', '2025-10-25 10:44:59', '2025-10-25 10:44:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` enum('pengajuan','review','keuangan','statistik') NOT NULL,
  `format` enum('pdf','excel') NOT NULL,
  `periode_mulai` date NOT NULL,
  `periode_selesai` date NOT NULL,
  `parameter` longtext DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `status` enum('pending','processing','completed','failed') NOT NULL DEFAULT 'pending',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporans`
--

INSERT INTO `laporans` (`id`, `judul`, `jenis`, `format`, `periode_mulai`, `periode_selesai`, `parameter`, `file_path`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Contoh', 'pengajuan', 'pdf', '2025-09-30', '2025-10-30', '{\"created_at\":\"2025-10-25T16:15:48.050480Z\",\"filters\":{\"jenis\":\"pengajuan\",\"format\":\"pdf\",\"periode\":{\"mulai\":\"2025-09-30\",\"selesai\":\"2025-10-30\"}}}', 'laporan/laporan_pengajuan_20251025_161548.pdf', 'completed', 3, '2025-10-25 09:15:48', '2025-10-25 09:15:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_25_044130_create_all_tables', 1),
(5, '2025_10_25_082722_add_profile_columns_to_users_table', 1),
(6, '2025_10_25_142031_create_laporan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuans`
--

CREATE TABLE `pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pengajuan` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('DD','ADD') NOT NULL,
  `tahun_anggaran` varchar(4) NOT NULL,
  `status` enum('draft','diajukan','diproses','disetujui','ditolak') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuans`
--

INSERT INTO `pengajuans` (`id`, `nomor_pengajuan`, `user_id`, `jenis`, `tahun_anggaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PGJ-202510251557141936', 6, 'ADD', '2021', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(2, 'PGJ-202510251557149276', 12, 'DD', '2022', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(3, 'PGJ-202510251557146951', 5, 'DD', '2025', 'ditolak', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(4, 'PGJ-202510251557141659', 1, 'DD', '2020', 'disetujui', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(5, 'PGJ-202510251557143729', 11, 'DD', '2021', 'diproses', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(6, 'PGJ-202510251557148166', 9, 'ADD', '2022', 'disetujui', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(7, 'PGJ-202510251557146086', 9, 'DD', '2023', 'ditolak', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(8, 'PGJ-202510251557145454', 1, 'ADD', '2020', 'diproses', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(9, 'PGJ-202510251557146674', 13, 'DD', '2023', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(10, 'PGJ-202510251557141162', 5, 'ADD', '2021', 'diproses', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(11, 'PGJ-202510251557145705', 8, 'ADD', '2022', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(12, 'PGJ-202510251557149354', 6, 'ADD', '2023', 'disetujui', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(13, 'PGJ-202510251557145669', 10, 'DD', '2021', 'ditolak', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(14, 'PGJ-202510251557146824', 1, 'ADD', '2021', 'draft', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(15, 'PGJ-202510251557146183', 12, 'DD', '2022', 'ditolak', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(16, 'PGJ-202510251557148011', 11, 'DD', '2021', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(17, 'PGJ-202510251557145208', 10, 'DD', '2025', 'draft', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(18, 'PGJ-202510251557143985', 7, 'DD', '2022', 'diproses', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(19, 'PGJ-202510251557146566', 5, 'ADD', '2024', 'disetujui', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(20, 'PGJ-202510251557144993', 8, 'ADD', '2025', 'diajukan', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(21, 'PGJ-20251025173933jEWM47', 1, 'ADD', '2025', 'draft', '2025-10-25 10:39:33', '2025-10-25 10:39:33'),
(22, 'PGJ-20251025174337upH5Jz', 1, 'ADD', '2025', 'draft', '2025-10-25 10:43:37', '2025-10-25 10:43:37'),
(23, 'PGJ-20251025174459Q8VJ8e', 1, 'DD', '2025', 'diajukan', '2025-10-25 10:44:59', '2025-10-25 10:51:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_dokumen`
--

CREATE TABLE `persyaratan_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `wajib` tinyint(1) NOT NULL DEFAULT 1,
  `tipe_file` varchar(255) NOT NULL DEFAULT 'pdf',
  `ukuran_max` int(11) NOT NULL DEFAULT 2048,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_dokumen`
--

INSERT INTO `persyaratan_dokumen` (`id`, `nama`, `kode`, `deskripsi`, `wajib`, `tipe_file`, `ukuran_max`, `created_at`, `updated_at`) VALUES
(1, 'Perdes APBDes', 'PERDES_APBDES', 'Peraturan Desa tentang APBDes', 1, 'pdf', 2048, '2025-10-25 08:57:10', '2025-10-25 08:57:10'),
(2, 'Surat Pengantar', 'SURAT_PENGANTAR', 'Surat pengantar dari desa', 1, 'pdf', 1024, '2025-10-25 08:57:10', '2025-10-25 08:57:10'),
(3, 'Laporan Realisasi', 'LAPORAN_REALISASI', 'Laporan realisasi penggunaan dana', 1, 'pdf', 3072, '2025-10-25 08:57:10', '2025-10-25 08:57:10'),
(4, 'LPP', 'LPP', 'Laporan Pertanggungjawaban Penyerapan', 1, 'pdf', 2048, '2025-10-25 08:57:10', '2025-10-25 08:57:10'),
(6, 'Tes', '80', NULL, 0, 'pdf', 2048, '2025-10-25 11:00:32', '2025-10-25 11:00:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_dokumens`
--

CREATE TABLE `review_dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dokumen_pengajuan_id` bigint(20) UNSIGNED NOT NULL,
  `reviewer_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('disetujui','ditolak') DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `review_dokumens`
--

INSERT INTO `review_dokumens` (`id`, `dokumen_pengajuan_id`, `reviewer_id`, `status`, `catatan`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 'ditolak', 'Tempora dolorem laboriosam veniam reiciendis in.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(3, 3, 3, 'disetujui', 'Quasi magni neque sed animi commodi totam perspiciatis dolore.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(4, 4, 3, 'ditolak', 'Neque maxime sed necessitatibus dolore iusto consequatur.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(6, 6, 3, 'disetujui', 'Voluptatum non numquam dolorem.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(7, 7, 3, 'disetujui', 'Porro nam omnis enim quia cupiditate modi.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(8, 8, 3, 'ditolak', 'Rerum quisquam et est inventore reiciendis eum.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(9, 9, 3, 'ditolak', 'Pariatur ut eveniet illo error ratione quaerat.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(10, 10, 3, 'ditolak', 'Non maiores quo aut illum et iure at.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(11, 11, 3, 'disetujui', 'Fugit molestiae voluptatum molestiae sit quos necessitatibus ea architecto.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(12, 12, 3, 'disetujui', 'Molestiae omnis qui eos quia est consequatur.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(13, 13, 3, 'disetujui', 'Omnis quaerat soluta magni est eveniet aut quod.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(14, 14, 3, 'ditolak', 'Aperiam ipsam consequatur minima eveniet accusamus libero cum.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(15, 15, 3, 'disetujui', 'Eligendi alias amet iure.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(16, 16, 3, 'disetujui', 'Sapiente corrupti aspernatur sit consequatur nemo.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(17, 17, 3, 'disetujui', 'Impedit occaecati animi consequuntur asperiores.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(18, 18, 3, 'ditolak', 'Minus ut omnis tenetur labore impedit aliquam consequatur.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(19, 19, 3, 'disetujui', 'Suscipit consequatur vero dolorem ipsum.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(20, 20, 3, 'disetujui', 'Repudiandae ipsum ipsum similique quis.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(21, 21, 3, 'ditolak', 'Voluptate alias aliquid et dignissimos aut minus rerum est.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(22, 22, 3, 'ditolak', 'Earum nisi voluptatem numquam velit rerum quae at.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(24, 24, 3, 'ditolak', 'Quod sed quisquam est dolor recusandae.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(25, 25, 3, 'ditolak', 'Nemo tempora qui totam minus repellendus tempora.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(26, 26, 3, 'disetujui', 'Fuga sed sed aut.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(27, 27, 3, 'ditolak', 'Magnam eaque doloremque nihil labore suscipit aut repudiandae.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(28, 28, 3, 'disetujui', 'Minus alias iure laborum quae sint eaque.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(29, 29, 3, 'disetujui', 'Iste quaerat ut quod fugiat eos nihil molestiae beatae.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(30, 30, 3, 'disetujui', 'Fugit iure aut temporibus quasi dignissimos quod rem.', '2025-10-25 08:57:14', '2025-10-25 08:57:14'),
(33, 33, 3, 'disetujui', 'Sapiente ex possimus impedit consequatur nobis quo.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(34, 34, 3, 'disetujui', 'Voluptatum error totam occaecati qui non velit facere.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(35, 35, 3, 'ditolak', 'Culpa tempore voluptas quo quae sed qui.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(37, 37, 3, 'ditolak', 'Laborum omnis repudiandae velit qui harum.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(38, 38, 3, 'disetujui', 'Officia praesentium dolor dicta reprehenderit aspernatur nesciunt repudiandae.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(39, 39, 3, 'disetujui', 'Laudantium voluptatum earum magnam quae provident.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(40, 40, 3, 'disetujui', 'Ullam reiciendis exercitationem pariatur occaecati neque tempora illum.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(41, 41, 3, 'ditolak', 'Nulla animi minima aperiam sunt et qui qui.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(42, 42, 3, 'ditolak', 'Dolore voluptatibus recusandae quas magni voluptatem temporibus et.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(43, 43, 3, 'ditolak', 'Qui sit dolores ducimus sunt sunt et assumenda.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(44, 44, 3, 'ditolak', 'Autem magni ut porro eaque dolorem vel.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(45, 45, 3, 'ditolak', 'Deleniti unde debitis et eius.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(46, 46, 3, 'ditolak', 'Repudiandae dicta minus enim reiciendis ut corrupti voluptatem.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(47, 47, 3, 'disetujui', 'Rem dolores totam similique veritatis.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(48, 48, 3, 'disetujui', 'Omnis maiores et at aut in vel veritatis ab.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(49, 49, 3, 'disetujui', 'Illum possimus aperiam excepturi quia est.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(50, 50, 3, 'ditolak', 'Incidunt qui numquam aut aut.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(51, 51, 3, 'ditolak', 'Error porro consequatur perferendis voluptatem atque rerum.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(52, 52, 3, 'ditolak', 'Voluptatem accusamus laboriosam laudantium voluptas vero.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(53, 53, 3, 'ditolak', 'Rem in aliquid quo quis.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(54, 54, 3, 'disetujui', 'Autem aliquid perferendis ipsam suscipit.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(56, 56, 3, 'ditolak', 'Excepturi excepturi vitae libero modi.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(57, 57, 3, 'ditolak', 'Eos fugit dolores impedit.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(58, 58, 3, 'ditolak', 'Eum atque et minus molestias natus ex.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(59, 59, 3, 'disetujui', 'Et iste doloremque sit natus tempore architecto hic.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(60, 60, 3, 'ditolak', 'Repellat voluptas quisquam voluptatem et sequi.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(61, 61, 3, 'disetujui', 'In possimus qui nulla aut.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(63, 63, 3, 'disetujui', 'Fugit cumque enim sed exercitationem sint aut ratione.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(66, 66, 3, 'disetujui', 'Quo dolor fuga error non ut adipisci quia.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(67, 67, 3, 'disetujui', 'Ut nulla vel nulla enim nostrum et mollitia.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(68, 68, 3, 'disetujui', 'Quas veniam eaque facere illo.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(71, 71, 3, 'ditolak', 'Quibusdam molestiae atque quis sapiente et tempora.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(72, 72, 3, 'ditolak', 'Adipisci similique sit autem.', '2025-10-25 08:57:15', '2025-10-25 08:57:15'),
(73, 73, 3, 'disetujui', 'Commodi dignissimos eos eligendi quam.', '2025-10-25 08:57:15', '2025-10-25 08:57:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CIwccdd1DiIhpwPRz4guYCTJdirH0d7KH7s8iUN0', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36 Edg/141.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRkpVZHRDU3BBbDVTNGd5aVRST3cxSVZTQ2NjR29odTE5TldtZDhLeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1761415249),
('hHRfSFi0d6JAhdtYdUBXF27iD0TYralGGBP9hQWd', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM1pGa1p2TGhQQ05pSFBOVHNhN05DTXo1MW53UWhjNW9hMEhYeFJjTyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1761415202),
('N9lQlqetpmmNDIepY5zU39z2HclGLJqxTs4IvOnd', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUXdVZ2xSbGFkSHBoVVVwOXJ2ZTZOQ2JxYzhhZG5Rdks1TXlHdWNEUCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjtzOjU6InJvdXRlIjtzOjk6ImRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1761415157);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'desa',
  `nama_desa` varchar(255) DEFAULT NULL,
  `nama_kecamatan` varchar(255) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `nama_desa`, `nama_kecamatan`, `profile_photo_path`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Desa', 'desa@pakkades.com', NULL, '$2y$12$KoRi01PjL/qtfxSMBGP8juF58SpELubRic.gfq.Q4nyobNTZAqMRC', 'desa', 'Desa Contoh', 'Kecamatan Contoh', 'profile-photos/zXFp6vDGZTZv4o7XGeo34mWRJzhqNrkUjBmIDiQp.png', NULL, NULL, '2025-10-25 08:57:10', '2025-10-25 10:57:37'),
(2, 'Admin Kecamatan', 'kecamatan@pakkades.com', NULL, '$2y$12$Y6gRq06YLpAl1d1hXwmoyuzHJuG/97PyPhUcU38ANaGDOwqK1kyGu', 'kecamatan', NULL, 'Kecamatan Contoh', 'profile-photos/hiW5frvlw8l1gE435ReG80L1mrSWPTQUJIiiWH0M.png', NULL, NULL, '2025-10-25 08:57:10', '2025-10-25 10:59:54'),
(3, 'Admin Kabupaten', 'kabupaten@pakkades.com', NULL, '$2y$12$68rH4G79FzMzI3zY6Y6l3.f//mNUjrcsuvPs7KQ3uYz7kb1enaIPC', 'kabupaten', NULL, NULL, 'profile-photos/utsvn6EgnfAgjTdzWjId3CZNJLBPi63qZsWHIBZj.png', NULL, NULL, '2025-10-25 08:57:11', '2025-10-25 10:58:37'),
(4, 'Admin Desa 1', 'desa1@pakkades.com', NULL, '$2y$12$cAtiuUHjOBIBycW7a2nlBe9aNeUdHjiZBQ9bdxFf80kcMv4cdkGmy', 'desa', 'Desa Contoh 1', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:11', '2025-10-25 08:57:11'),
(5, 'Admin Desa 2', 'desa2@pakkades.com', NULL, '$2y$12$ElEP9MWleXxm/u5dahswQOGad4Lc10VIXeuvEAAst07s9lrDu3Jli', 'desa', 'Desa Contoh 2', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:11', '2025-10-25 08:57:11'),
(6, 'Admin Desa 3', 'desa3@pakkades.com', NULL, '$2y$12$G1BmEqHSdPEbOAhy77i8Tu2Xpv3/VONwXBuCaxQ4XLJzWbagSnb/G', 'desa', 'Desa Contoh 3', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:11', '2025-10-25 08:57:11'),
(7, 'Admin Desa 4', 'desa4@pakkades.com', NULL, '$2y$12$X7X0LPyk7hZeQQsKQ1UcDOdjsDqU1P.0TelOL5cxivWvxIzp36jJG', 'desa', 'Desa Contoh 4', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:12', '2025-10-25 08:57:12'),
(8, 'Admin Desa 5', 'desa5@pakkades.com', NULL, '$2y$12$Zo42/2MPiZjkpvN7agnOA.jxUiTkgWiiNEAxF/NbFtYSi5dHfBE7G', 'desa', 'Desa Contoh 5', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:12', '2025-10-25 08:57:12'),
(9, 'Admin Desa 6', 'desa6@pakkades.com', NULL, '$2y$12$qMXOqeFehGbkaaZYWIeOA.af09LAPWAdrrdYmcAjzbwpx/7DpjVJe', 'desa', 'Desa Contoh 6', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:12', '2025-10-25 08:57:12'),
(10, 'Admin Desa 7', 'desa7@pakkades.com', NULL, '$2y$12$5/l3Zl/EpYwEpZAGg3o0k.I5FJ.hyfNBTfIZQ1uYzufCTbZapHeCm', 'desa', 'Desa Contoh 7', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:13', '2025-10-25 08:57:13'),
(11, 'Admin Desa 8', 'desa8@pakkades.com', NULL, '$2y$12$L9IIPw780VvZFv51gQTEAuqM/sGpqDYFyUQ7QTlBFE6H8z6IklvPC', 'desa', 'Desa Contoh 8', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:13', '2025-10-25 08:57:13'),
(12, 'Admin Desa 9', 'desa9@pakkades.com', NULL, '$2y$12$I08zHUg8eJIELKIgXVsCU.IzCL54MCShBUSnLszi7gGSEIDNwqO7G', 'desa', 'Desa Contoh 9', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:13', '2025-10-25 08:57:13'),
(13, 'Admin Desa 10', 'desa10@pakkades.com', NULL, '$2y$12$HuWv.XFNNJ5PrNKQAjMleeVPFb7oKvgjk5R1OD0seq/x2f5uWiyU2', 'desa', 'Desa Contoh 10', 'Kecamatan Contoh', NULL, NULL, NULL, '2025-10-25 08:57:14', '2025-10-25 08:57:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dokumen_pengajuans`
--
ALTER TABLE `dokumen_pengajuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_pengajuans_pengajuan_id_foreign` (`pengajuan_id`),
  ADD KEY `dokumen_pengajuans_persyaratan_id_foreign` (`persyaratan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengajuans_nomor_pengajuan_unique` (`nomor_pengajuan`),
  ADD KEY `pengajuans_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `persyaratan_dokumen`
--
ALTER TABLE `persyaratan_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persyaratan_dokumen_kode_unique` (`kode`);

--
-- Indeks untuk tabel `review_dokumens`
--
ALTER TABLE `review_dokumens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_dokumens_dokumen_pengajuan_id_foreign` (`dokumen_pengajuan_id`),
  ADD KEY `review_dokumens_reviewer_id_foreign` (`reviewer_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen_pengajuans`
--
ALTER TABLE `dokumen_pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_dokumen`
--
ALTER TABLE `persyaratan_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `review_dokumens`
--
ALTER TABLE `review_dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumen_pengajuans`
--
ALTER TABLE `dokumen_pengajuans`
  ADD CONSTRAINT `dokumen_pengajuans_pengajuan_id_foreign` FOREIGN KEY (`pengajuan_id`) REFERENCES `pengajuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dokumen_pengajuans_persyaratan_id_foreign` FOREIGN KEY (`persyaratan_id`) REFERENCES `persyaratan_dokumen` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD CONSTRAINT `pengajuans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `review_dokumens`
--
ALTER TABLE `review_dokumens`
  ADD CONSTRAINT `review_dokumens_dokumen_pengajuan_id_foreign` FOREIGN KEY (`dokumen_pengajuan_id`) REFERENCES `dokumen_pengajuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_dokumens_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
