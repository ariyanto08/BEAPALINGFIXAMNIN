-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Des 2022 pada 06.54
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bea_3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `nip` bigint DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nip`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
('97b6420f-b8ea-4eb2-bf12-248702072be8', 1234567, 'ajun', 'Ajun@mil.co', '$2y$10$aPcIcl2tehFpvLRf/Ptyi.dLiwDOm1uoUygM1L4kB1ZAxa5g8p1I2', '2022-11-10 07:28:01', '2022-11-10 07:28:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `nama`, `id_user`, `kategori`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(55, 'Gempa Cianjur', NULL, 'Bencana Alam', 'app/image/berita/55-1670646891-WY8Xf.jpg', 'D﻿ari total jumlah korban meninggal itu, 37% adalah anak-anak.\r\nH﻿al itu diungkap oleh Kepala BNPB Suhariyanto dalam jumpa pers bersama otoritas terkait di Cianjur, Rabu sore.\r\n\r\nS﻿ementara, korban luka-luka akibat gempa berjumlah 2.043 orang.\r\nSelain korban meninggal dunia dan cedera, masih ada puluhan orang yang belum ditemukan. \r\n\r\n\"Masih ada korban hilang 40 orang,\" ujar Kepala BNPB, Letjen TNI Suharyanto, saat memberikan keterangan pers di Kantor Bupati Cianjur, Jawa Barat, Rabu (23/11).\r\n\r\n\"Data ini dari Puskesmas dan Rumah Sakit di Cianjur, akan ditelusuri apakah termasuk yang sudah dimakamkan oleh keluarganya,\" tambahnya.\r\nSuharyanto menegaskan tim gabungan terus melakukan pencarian meski terkendala hujan.\r\n\r\n\"Pencarian dan evakuasi dilaksanakan secara terus menerus, meski hujan tim tanpa kenal lelah terus melakukan pencarian,\" tegas Suharyanto.\r\nW﻿arga yang mengungsi dilaporkan 61.908 orang yang tersebar di berbagai wilayah di Cianjur dan sekitarya.\r\nDisebutkan pula gempa itu telah menyebabkan 56.320 rumah rusak.\r\nDijelaskan, rumah yang rusak berat 22.241, rusak sedang 11.641, serta 22.090 rusak ringan)', '2022-11-24 10:48:13', '2022-12-09 21:34:51'),
(59, 'CONTOH BERITA 2', NULL, 'CONTOH', 'app/image/berita/59-1670931831-mI2f4.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-12-13 04:43:51', '2022-12-13 04:43:51'),
(60, 'CONTOH 3', NULL, 'CONTOH', 'app/image/berita/60-1670931850-u4PQ6.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-12-13 04:44:10', '2022-12-13 04:44:10'),
(61, 'CONTOH 4', NULL, 'CONTOH', 'app/image/berita/61-1670931899-2vxtU.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-12-13 04:44:59', '2022-12-13 04:44:59'),
(62, 'CONTOH 5', NULL, 'CONTOH', 'app/image/berita/62-1670931947-MkRD1.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-12-13 04:45:47', '2022-12-13 04:45:47'),
(63, 'contoh kesekian', NULL, 'contoh', 'app/image/berita/63-1670931976-Kxp92.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-12-13 04:46:16', '2022-12-13 04:46:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagram`
--

CREATE TABLE `diagram` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `persentase_masuk` varchar(255) DEFAULT NULL,
  `persentase_keluar` varchar(255) DEFAULT NULL,
  `persentase_cukai` varchar(255) DEFAULT NULL,
  `target_masuk` varchar(255) DEFAULT NULL,
  `target_keluar` varchar(255) DEFAULT NULL,
  `target_cukai` varchar(255) DEFAULT NULL,
  `realisasi_masuk` varchar(255) DEFAULT NULL,
  `realisasi_keluar` varchar(255) DEFAULT NULL,
  `realisasi_cukai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagram`
--

INSERT INTO `diagram` (`id`, `nama`, `gambar`, `persentase_masuk`, `persentase_keluar`, `persentase_cukai`, `target_masuk`, `target_keluar`, `target_cukai`, `realisasi_masuk`, `realisasi_keluar`, `realisasi_cukai`, `created_at`, `updated_at`) VALUES
(2, 'Bea Per 30 November', 'app/image/diagram/2-1670930717-Cfgy2.png', '24', '23', '3', '10000000', '120980000', '600000000000', '100000000000000', '12300000000', '9000000000', '2022-12-07 06:37:40', '2022-12-13 21:32:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `direktori`
--

CREATE TABLE `direktori` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `direktori`
--

INSERT INTO `direktori` (`id`, `nama`, `link`, `created_at`, `updated_at`) VALUES
(2, 'direktori', 'http://peraturan.beacukai.go.id/', '2022-12-08 00:07:49', '2022-12-13 04:58:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL,
  `jawaban` text,
  `kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`, `kategori`, `created_at`, `updated_at`) VALUES
(14, 'Bagaimana pendaftaran IMEI yang dilakukan setelah keluar dari Kawasan Pabean ( Pelabuhan / Bandara ) saat kedatangan dari luar negeri ?', 'Apabila pemilik barang belum mendaftarkan IMEI setelah melewati pelabuhan/bandara 1x24 jam, diberikan waktu sampai dengan 60 hari dengan melampirkan:\r\npasspor (kedatangan LN)\r\nkartu identitas (Batam - TLDDP)\r\ntiket perjalanan/boarding pass\r\ninvoice, dan dokumen lainnya\r\nperangkat HP\r\nDengan mendaftarkan melalui aplikasi Mobile Bea Cukai atau website www.beacukai.go.id\r\nPajak yang dibayarkan BM 10%, PPN 11%, dan PPH 10% (ada NPWP), 20% (tidak ada NPWP). Tidak diberlakukan deminimus pembebasan pajak.\r\nKetentuan ini hanya berlaku untuk barang yang dibawa secara pribadi dengan bawaan barang penumpang dan barang kiriman menggunakan jasa ekspedisi.', 'Registrasi IMEI', '2022-12-13 05:00:15', '2022-12-13 05:00:15'),
(15, 'Bagaimana cara mengetahui penipuan barang kiriman dari luar negeri yang mengatasnamakan Bea Cukai ?', 'Perlu diketahui, seluruh pembayaran pajak langsung disetor ke rekening kas negara menggunakan e-billing dan SPPBMCP, bukan melalui rekening pribadi. Jika melalui rekening pribadi atau rekening Bea Cukai, jelas itu penipuan.', 'Barang Kiriman', '2022-12-13 05:01:09', '2022-12-13 05:01:09'),
(16, 'Barang kiriman tertahan di Bea Cukai, bagaimana solusinya ?', 'Proses sama seperti diatas, lalu liat status terakhir barang kiriman pada website www.beacukai.go.id/barangkirimanbatam atau CEISA Barang Kiriman.', 'Barang Kiriman', '2022-12-13 05:01:36', '2022-12-13 05:01:36'),
(17, 'Berapa batasan bawaan penumpang dan berapa besaran pajaknya ?', 'Berdasarkan Peraturan Menteri Keuangan Nomor 203/PMK.04/2017 tentang Ketentuan Ekspor dan Impor Barang yang Dibawa oleh Penumpang dan Awak Sarana Pengangkut, batas pembebasan bea masuk yang diberikan terhadap barang impor yang dibawa oleh Penumpang adalah sebesar USD 500 (lima puluh United States Dollar) per orang untuk setiap kedatangan.\r\nDalam hal barang impor yang dibawa oleh Penumpang tersebut melebihi batas pembebasan bea masuk sebesar USD 500, atas barang impor tersebut dikenakan Bea Masuk 10%, PPN 11%, dan PPh 10% (NPWP) atau 20% (Tanpa NPWP).', 'Barang Penumpang dan Pelintas Batas', '2022-12-13 05:02:17', '2022-12-13 05:02:17'),
(18, '-', '-', 'Registrasi dan Aplikasi Kepabeanan', '2022-12-13 05:02:27', '2022-12-13 05:02:27'),
(19, '-', '-', 'Impor', '2022-12-13 05:03:03', '2022-12-13 05:03:03'),
(20, '-', '-', 'Ekspor', '2022-12-13 05:03:14', '2022-12-13 05:03:14'),
(21, '-', '-', 'Cukai', '2022-12-13 05:03:25', '2022-12-13 05:03:25'),
(22, '-', '-', 'Pengangkutan dan Manifes', '2022-12-13 05:03:37', '2022-12-13 05:03:37'),
(23, '-', '-', 'Penipuan', '2022-12-13 05:03:48', '2022-12-13 05:03:48'),
(24, '-', '-', 'Pengaduan', '2022-12-13 05:04:02', '2022-12-13 05:04:02'),
(25, '-', '-', 'Informasi Lainnya', '2022-12-13 05:04:13', '2022-12-13 05:04:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(52, 'app/image/iklan/-1670490084-QDwhM.png', 'gtgtg', '2022-12-08 02:01:24', '2022-12-08 02:01:24'),
(53, 'app/image/iklan/-1670490094-4J37F.png', 'gggggygy', '2022-12-08 02:01:34', '2022-12-08 02:01:47'),
(54, 'app/image/iklan/-1670490120-uCJ4p.png', 'guuuugug', '2022-12-08 02:02:00', '2022-12-08 02:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `janji`
--

CREATE TABLE `janji` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `janji`
--

INSERT INTO `janji` (`id`, `nama`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(9, 'janji layanan 1', NULL, 'app/image/janji/9-1670931533-RA8gy.svg', '2022-12-13 04:38:53', '2022-12-13 04:38:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komposisi`
--

CREATE TABLE `komposisi` (
  `id` int NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komposisi`
--

INSERT INTO `komposisi` (`id`, `level`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'jabatan', 'Eselon III', 1, '2022-11-08 03:05:35', '2022-11-08 03:05:35'),
(2, 'jabatan', 'Eselon IV', 4, '2022-11-08 03:06:04', '2022-11-08 03:06:04'),
(3, 'usia', 's.d 30 tahun', 21, '2022-11-08 03:12:54', '2022-11-08 03:12:54'),
(4, 'jabatan', 'PBC Pertama', 6, '2022-11-08 03:13:25', '2022-11-08 03:13:25'),
(5, 'jabatan', 'PBC Terampil', 2, '2022-11-08 03:14:02', '2022-11-08 03:14:02'),
(6, 'jabatan', 'Pelaksana Pemeriksa', 32, '2022-11-08 03:14:22', '2022-11-08 03:14:22'),
(7, 'usia', '31 s.d 40 tahun', 11, '2022-11-08 03:14:53', '2022-11-08 03:14:53'),
(8, 'usia', '41 s.d 50 tahun', 13, '2022-11-08 03:15:20', '2022-11-08 03:15:20'),
(9, 'usia', 'di atas 50 tahun', 0, '2022-11-08 03:15:58', '2022-11-08 03:15:58'),
(10, 'jenis_kelamin', 'Laki-laki', 39, '2022-11-08 03:16:51', '2022-11-08 03:16:51'),
(11, 'jenis_kelamin', 'Perempuan', 6, '2022-11-08 03:17:09', '2022-11-08 03:17:09'),
(12, 'pendidikan', 'SMA-D I', 26, '2022-11-08 03:17:40', '2022-11-08 03:17:40'),
(13, 'pendidikan', 'D III', 9, '2022-11-08 03:18:11', '2022-11-08 03:18:11'),
(14, 'pendidikan', 'DIV-S I', 7, '2022-11-08 03:18:30', '2022-11-08 03:18:30'),
(15, 'pendidikan', 'S II', 4, '2022-11-08 03:18:50', '2022-11-08 03:18:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maklumat`
--

CREATE TABLE `maklumat` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maklumat`
--

INSERT INTO `maklumat` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(9, 'MAKLUMAT 1', 'app/image/maklumat/-1670931705-h1vXN.jpg', '2022-12-13 04:41:45', '2022-12-13 04:41:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `id_user`, `link`, `created_at`, `updated_at`) VALUES
(9, NULL, 'https://www.youtube.com/embed/x8MeGjPNZ6g', '2022-12-13 04:28:43', '2022-12-13 04:28:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sop`
--

CREATE TABLE `sop` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sop`
--

INSERT INTO `sop` (`id`, `nama`, `link`, `created_at`, `updated_at`) VALUES
(4, 'Penggunaan alat penyelamat di laut', 'https://drive.google.com/drive/folders/1D0bhGlweyYtA8GMZ-1S-U0rrEiw3grdB', '2022-11-08 19:50:09', '2022-12-13 04:57:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'struktur organisasi 1', 'app/image/struktur/-1670930980-UG89X.svg', '2022-12-13 04:29:40', '2022-12-13 04:29:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` bigint DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Arii', 1234567890, 'ade@mail.co', '$2y$10$fMi6PgwaQ9powtbLKF/2AOTR4qWc44NySu41jKOWlbs7Ykp2af70e', '1', NULL, '2022-10-30 19:36:26', '2022-11-11 04:20:04'),
(39, 'Sakti', 987654321, 'sakti@mail.co', '$2y$10$S330QUA.ouIg/TvVvvdPiO1V1HhQ8tVmSY9uc41/yMV2cL.f8oCDW', '2', NULL, '2022-11-10 21:09:26', '2022-11-11 04:20:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `id_user`, `link`, `created_at`, `updated_at`) VALUES
(7, NULL, 'https://www.youtube.com/embed/tTXY4ZlzXjY', '2022-11-24 10:30:30', '2022-11-24 10:30:30'),
(8, NULL, 'https://www.youtube.com/embed/Nb23cdubkbU', '2022-11-24 10:31:45', '2022-11-24 10:31:45'),
(10, NULL, 'https://www.youtube.com/embed/4b9N1AVVsRU', '2022-11-24 10:33:14', '2022-11-24 10:33:14'),
(11, NULL, 'https://www.youtube.com/embed/ATjq7Oi2m7w', '2022-12-13 04:52:58', '2022-12-13 04:52:58'),
(12, NULL, 'https://www.youtube.com/embed/p6DPv_nkwEU', '2022-12-13 04:54:14', '2022-12-13 04:54:14'),
(13, NULL, 'https://www.youtube.com/embed/p6DPv_nkwEU', '2022-12-13 04:54:15', '2022-12-13 04:54:15'),
(14, NULL, 'https://www.youtube.com/embed/JeUJY1eWKNI', '2022-12-13 04:54:40', '2022-12-13 04:54:40'),
(15, NULL, 'https://www.youtube.com/embed/PgAuVib7dDE', '2022-12-13 04:55:10', '2022-12-13 04:55:10'),
(16, NULL, 'https://www.youtube.com/embed/Nb23cdubkbU', '2022-12-13 04:55:58', '2022-12-13 04:55:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `level`, `deskripsi`, `created_at`, `updated_at`) VALUES
(11, 'Visi', 'Menjadi Institusi Kepabeanan dan Cukai Terkemuka di Dunia.\r\nVisi DJBC mencerminkan cita-cita tertinggi DJBC dengan lebih baik melalui penetapan target yang menantang dan secara terus-menerus terpelihara di masa depan.', '2022-11-08 03:35:26', '2022-11-08 03:35:26'),
(12, 'Misi', 'Kami memfasilitasi perdagangan dan industri;\r\nKami menjaga perbatasan dan melindungi masyarakat Indonesia dari penyelundupan dan perdagangan illegal; \r\ndan Kami optimalkan penerimaan negara di sektor kepabeanan dan cukai.\r\nMisi ini merupakan langkah spesifik yang harus dikerjakan DJBC demi tercapainya visi DJBC. \r\nPeran serta secara keseluruhan terkait dengan besaran perdagangan, keamanan dan penerimaan merupakan satu kesatuan yang tidak terpisahkan.', '2022-11-08 03:36:00', '2022-11-08 03:36:00'),
(15, 'Motto', 'Sinergi dalam mengawasi, Melayani Sepenuh Hati.', '2022-11-08 03:38:36', '2022-11-08 03:38:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(12, 'PROFIL WILYAH KERJA', 'app/image/wilayah/-1670931077-FaWlz.svg', '2022-12-13 04:31:17', '2022-12-13 04:36:44'),
(13, 'WILAYAH PENGAWASAN', 'app/image/wilayah/-1670931140-8ffdc.svg', '2022-12-13 04:32:20', '2022-12-13 04:33:32'),
(14, 'WILAYAH PENGAWASAN KPPBC TMP C KETAPANG', 'app/image/wilayah/-1670931171-uqCgA.svg', '2022-12-13 04:32:51', '2022-12-13 04:32:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagram`
--
ALTER TABLE `diagram`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `direktori`
--
ALTER TABLE `direktori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maklumat`
--
ALTER TABLE `maklumat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `diagram`
--
ALTER TABLE `diagram`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `direktori`
--
ALTER TABLE `direktori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `janji`
--
ALTER TABLE `janji`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `maklumat`
--
ALTER TABLE `maklumat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sop`
--
ALTER TABLE `sop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
