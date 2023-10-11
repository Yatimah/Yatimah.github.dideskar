-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jul 2023 pada 08.13
-- Versi server: 10.5.21-MariaDB-cll-lve-log
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dideskar_aplikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `role_id` int(2) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `jekel`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 1, '$2y$10$d7Tkj4pMcEwdPb4gW14i1uMGm8Nij1e2.XUVzddQIelOan.oUeZra', '2022-03-17 13:47:13', '0000-00-00 00:00:00'),
(2, 'Kepala Desa', 'kades@gmail.com', 'Laki-laki', 2, '$2y$10$Q93HdyfptAa5TQPWEd/BJewVoUu0k4Rlo9ke2taQU73vXxSwsJQ7q', '2022-03-17 13:47:51', '2023-06-09 15:04:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_beda_nama`
--

CREATE TABLE `surat_keterangan_beda_nama` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_di_ktp` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat_a` text NOT NULL,
  `nama_di_kk` varchar(100) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama_di_buku_nikah` varchar(100) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_surat_keterangan_rt/rw` varchar(225) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_keterangan_beda_nama`
--

INSERT INTO `surat_keterangan_beda_nama` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `nama_di_ktp`, `nik`, `tempat_lahir`, `tanggal_lahir`, `alamat_a`, `nama_di_kk`, `no_kk`, `nama_di_buku_nikah`, `file_ktp`, `file_surat_keterangan_rt/rw`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN PENGANTAR', '002/SKP/04/2022', '11/04/2022', '11/05/2022', 'Untuk Pengantar Kerja Ke Malaysia', 'skp-id-1-tgl20220411-2037-350.', 'skp-id-1-tgl20220411', 'Diterima', '', '0', '2022-04-11 06:20:37', '0000-00-00 00:00:00', '0', '0', '0', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN PENGANTAR', '003/SKP/06/2022', '21/06/2022', '21/07/2022', 'dasdsds', 'skp-id-1-tgl20220621-4744-427.', 'skp-id-1-tgl20220621', 'Menunggu Verifikasi', '', '0', '2022-06-21 17:47:44', '0000-00-00 00:00:00', '0', '0', '0', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_domisili`
--

CREATE TABLE `surat_keterangan_domisili` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_kepala_desa` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_surat_keterangan_rt/rw` varchar(225) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_keterangan_domisili`
--

INSERT INTO `surat_keterangan_domisili` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `nama_kepala_desa`, `jabatan`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `file_ktp`, `file_surat_keterangan_rt/rw`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN DOMISILI', '001/SKD/04/2022', '11/04/2022', '11/05/2022', 'Untuk pindah', '', 'skd-id-1-tgl20220411-1210-834.jpeg', 'skd-id-1-tgl20220411-1210-308.', 'Diterima', '', '0', '2022-04-11 06:12:10', '0000-00-00 00:00:00', '0', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN DOMISILI', '002/SKD/06/2022', '21/06/2022', '21/07/2022', 'qweqwewq', '', 'skd-id-1-tgl20220621-4507-594.jpg', 'skd-id-1-tgl20220621-4507-486.', 'Terverifikasi', '', '0', '2022-06-21 17:45:07', '0000-00-00 00:00:00', '0', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_domisili_usaha`
--

CREATE TABLE `surat_keterangan_domisili_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_surat_keterangan_rt/rw` varchar(225) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='f';

--
-- Dumping data untuk tabel `surat_keterangan_domisili_usaha`
--

INSERT INTO `surat_keterangan_domisili_usaha` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `nama`, `tempat_lahir`, `tanggal_lahir`, `nik`, `jabatan`, `alamat`, `nama_usaha`, `alamat_usaha`, `file_ktp`, `file_surat_keterangan_rt/rw`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN USAHA', '001/SKU/06/2023', '11/06/2023', '11/06/2024', 'mail-ikan-koi', '2023-06-12', 'ikan koi', 'Untuk Rekomendasi usaha koi', 'sku-id-1-tgl20220411-1938-534.jpeg', 'sku-id-1-tgl20220411-1938-718.jpeg', 'Diterima', '', '0', '2023-06-11 06:19:38', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN USAHA', '002/SKU/06/2023', '21/06/2023', '21/07/2023', 'Lorem', '2023-06-21', 'Lorem', 'lorem', 'sku-id-1-tgl20220621-3308-496.jpg', 'sku-id-1-tgl20220621-3308-303.jpeg', 'Terverifikasi', '', '0', '2023-06-21 17:33:08', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_pemakaman`
--

CREATE TABLE `surat_keterangan_pemakaman` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `nik_a` varchar(30) NOT NULL,
  `jekel_a` varchar(15) NOT NULL,
  `tempat_lahir_a` varchar(20) NOT NULL,
  `tanggal_lahir_a` varchar(20) NOT NULL,
  `kewarganegaraan_a` varchar(5) NOT NULL,
  `status_perkawinan_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(225) NOT NULL,
  `alamat_a` text NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_surat_keterangan_rt/rw` varchar(225) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `jam_meninggal` varchar(10) NOT NULL,
  `tempat_meninggal` varchar(225) NOT NULL,
  `sebab_meninggal` varchar(225) NOT NULL,
  `tempat_pemakaman` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_keterangan_pemakaman`
--

INSERT INTO `surat_keterangan_pemakaman` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `hubungan`, `nama_alm`, `bin`, `nik_a`, `jekel_a`, `tempat_lahir_a`, `tanggal_lahir_a`, `kewarganegaraan_a`, `status_perkawinan_a`, `pekerjaan_a`, `alamat_a`, `file_ktp`, `file_surat_keterangan_rt/rw`, `hari`, `tanggal_meninggal`, `jam_meninggal`, `tempat_meninggal`, `sebab_meninggal`, `tempat_pemakaman`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN PEMAKAMAN', '001/SKK/04/2022', '11/04/2022', '11/05/2022', 'Keponakan', 'mujnah', 'somat', '030302939392923', 'perempuan', 'CILACAP', '1998-02-11', 'WNI', 'Janda', 'Mantan TK', 'DESA KARANGKANDRI', 'skk-id-1-tgl20220411-2410-42.jpeg', 'skk-id-1-tgl20220411-2410-290.jpeg', 'Senin', '2023-04-11', '09:00', 'RSUD CILACAP', 'Sakit Keras', 'TPU Desa Setempat', 'Untuk Keterangan', 'Diterima', NULL, 0, '2023-04-11 06:24:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_usaha`
--

CREATE TABLE `surat_keterangan_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_surat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_surat` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_kadaluarsa` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_ktp/nik` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_usaha` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_mulai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_usaha` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file_ktp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file_surat_keterangan_rt/rw` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_warga`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'ferrytrendy@gmail.com', '$2y$10$5WafUSB/o8V1StpuRgR4YuJ3s2.wiuwCi9i4vfiiBGnz/slSUDp6C', 3, '2023-06-19 01:44:14', '0000-00-00 00:00:00'),
(2, 2, 'yatimahimah779@gmail.com', '$2y$10$yD.zojpN0KfUdMif6zRV.OIJIkdGBI/wnFa0IK059Sssom2h8Bd4S', 3, '2023-06-19 02:15:47', '0000-00-00 00:00:00'),
(3, 3, 'dideskar@gmail.com', '$2y$10$MH9eqISItCAdf2kbvKx88eB5o0CmXYQDXBHUErn1Yd8H/K92xv5dK', 3, '2023-06-19 08:12:51', '0000-00-00 00:00:00'),
(4, 4, 'imahyatimah43@gmail.com', '$2y$10$42WHxdF7EzKpbAlzzhc4.ulEoU8wBiITmUUN7evOpN6l4PAqLC2NC', 3, '2023-06-20 04:52:33', '0000-00-00 00:00:00'),
(5, 5, 'nur337043@gmail.com', '$2y$10$fUVv1EyvSEwsQCOAY4039uFB7zG7WwVwdKADCFyU752ifVp1kKsre', 3, '2023-06-20 04:57:16', '0000-00-00 00:00:00'),
(6, 6, 'dekafals88@gmail.com', '$2y$10$xTwLgkLJazphRoYB3WSF0e4XfbJH0g7kyoExSLkFiydfGqMkF0WOC', 3, '2023-06-21 04:44:53', '0000-00-00 00:00:00'),
(7, 7, 'vidayati64@gmail.com', '$2y$10$FTxXDStI.IWZvZmzWW.jT.FX6gU5jUGbZksN7xN8Ebj4q68bEbNF.', 3, '2023-06-21 08:53:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `jekel`, `agama`, `golongan_darah`, `pendidikan`, `status_pernikahan`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `rt`, `rw`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1231234564567897', '', 'Laki-laki', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '2023-06-19 01:44:14', '0000-00-00 00:00:00'),
(2, '9876543212345678', 'Yatimah', 'Perempuan', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jalan Lingkar Timur RT 04 RW 01 Karangkandri', '2023-06-19 02:15:47', '2023-06-20 12:18:36'),
(3, '1234567890123456', 'Desa', 'Laki-laki', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jalan Lingkar Timur', '2023-06-19 08:12:51', '0000-00-00 00:00:00'),
(4, '0987654321123456', 'Yatimah', 'Perempuan', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jalan Lingkar Timur RT 04 RW 01 Karangkandri', '2023-06-20 04:52:33', '2023-06-20 12:19:18'),
(5, '1234567890678904', 'Nur', 'Perempuan', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jalan Lingkar Timur RT 04 RW 01 Karangkandri', '2023-06-20 04:57:16', '2023-06-20 12:19:51'),
(6, '3301081708990001', 'Deka Saputra', 'Laki-laki', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jalan bharata ', '2023-06-21 04:44:53', '0000-00-00 00:00:00'),
(7, '3301026005980006', 'Vidayati', 'Laki-laki', '', '', '', '', '', '', '0000-00-00', 0, 0, 'Jl. Jambu RT 1 RW 2', '2023-06-21 08:53:12', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keterangan_beda_nama`
--
ALTER TABLE `surat_keterangan_beda_nama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_keterangan_domisili_usaha`
--
ALTER TABLE `surat_keterangan_domisili_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_keterangan_pemakaman`
--
ALTER TABLE `surat_keterangan_pemakaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  ADD PRIMARY KEY (`id`,`id_warga`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_beda_nama`
--
ALTER TABLE `surat_keterangan_beda_nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_domisili_usaha`
--
ALTER TABLE `surat_keterangan_domisili_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_pemakaman`
--
ALTER TABLE `surat_keterangan_pemakaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_usaha`
--
ALTER TABLE `surat_keterangan_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_beda_nama`
--
ALTER TABLE `surat_keterangan_beda_nama`
  ADD CONSTRAINT `surat_keterangan_beda_nama_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_domisili`
--
ALTER TABLE `surat_keterangan_domisili`
  ADD CONSTRAINT `surat_keterangan_domisili_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_domisili_usaha`
--
ALTER TABLE `surat_keterangan_domisili_usaha`
  ADD CONSTRAINT `surat_keterangan_domisili_usaha_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_pemakaman`
--
ALTER TABLE `surat_keterangan_pemakaman`
  ADD CONSTRAINT `surat_keterangan_pemakaman_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
