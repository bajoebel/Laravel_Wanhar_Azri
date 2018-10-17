-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17 Okt 2018 pada 08.00
-- Versi Server: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tpp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hpp`
--

CREATE TABLE `hpp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tpp_pegawai_id` int(11) NOT NULL,
  `tpp_tahun` int(11) NOT NULL,
  `tpp_bulan` int(11) NOT NULL,
  `tpp_harikerja` int(11) NOT NULL,
  `tpp_hadir` int(11) NOT NULL,
  `tpp_izin` int(11) NOT NULL,
  `tpp_cuti` int(11) NOT NULL,
  `tpp_tanpaalasan` int(11) NOT NULL,
  `tpp_terlambat` int(11) NOT NULL,
  `tpp_cepatpulang` int(11) NOT NULL,
  `tpp_uwas` int(11) NOT NULL,
  `tpp_upacara` int(11) NOT NULL,
  `tpp_skp` int(11) DEFAULT NULL,
  `tpp_wirid` int(11) DEFAULT NULL,
  `tpp_apel` int(11) DEFAULT NULL,
  `tpp_senam` int(11) DEFAULT NULL,
  `tpp_lkh` int(11) DEFAULT NULL,
  `tpp_sop` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tpp_pelayanan` int(11) DEFAULT NULL,
  `tpp_integritas` int(11) DEFAULT NULL,
  `tpp_komitmen` int(11) DEFAULT NULL,
  `tpp_disiplin` int(11) DEFAULT NULL,
  `tpp_kerjasama` int(11) DEFAULT NULL,
  `tpp_kepemimpinan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hpp`
--

INSERT INTO `hpp` (`id`, `tpp_pegawai_id`, `tpp_tahun`, `tpp_bulan`, `tpp_harikerja`, `tpp_hadir`, `tpp_izin`, `tpp_cuti`, `tpp_tanpaalasan`, `tpp_terlambat`, `tpp_cepatpulang`, `tpp_uwas`, `tpp_upacara`, `tpp_skp`, `tpp_wirid`, `tpp_apel`, `tpp_senam`, `tpp_lkh`, `tpp_sop`, `created_at`, `updated_at`, `tpp_pelayanan`, `tpp_integritas`, `tpp_komitmen`, `tpp_disiplin`, `tpp_kerjasama`, `tpp_kepemimpinan`) VALUES
(1, 1, 2018, 3, 26, 20, 2, 2, 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-15 17:00:00', '2018-10-15 17:00:00', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2018, 1, 26, 23, 1, 1, 1, 20, 20, 12, 1, 80, NULL, NULL, NULL, NULL, NULL, '2018-10-16 01:56:14', '2018-10-16 01:56:14', 100, 1001, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`, `created_at`, `updated_at`) VALUES
(1, 'Kepala OP (Dinas/Badang))', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(2, 'Asisten', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(3, 'Staff Ahli', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(4, 'Camat', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(5, 'Sekretatis OPD', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(6, 'Kepala Bagian', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(7, 'Kepala Bidang', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(8, 'Kepala Sub Bagian', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(9, 'Kepala Seksi', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(10, 'Lurah', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(11, 'Sekretaris Lurah', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(12, 'Staff', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(13, 'Fungsional Tertentu', '2018-10-17 00:00:00', '2018-10-17 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_16_022158_create_pegawai_table', 2),
(4, '2018_10_16_022302_create_tbl_pegawai_table', 2),
(5, '2018_10_16_023316_create_tbl_hpp_table', 3),
(6, '2018_10_16_025622_create_pegawai_table', 4),
(7, '2018_10_16_025654_create_hpp_table', 4),
(8, '2018_10_16_025917_create_pegawai_table', 5),
(9, '2018_10_16_025942_create_hpp_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE `pangkat` (
  `pangkat_id` int(11) NOT NULL,
  `pangkat_nama` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat`
--

INSERT INTO `pangkat` (`pangkat_id`, `pangkat_nama`, `created_at`, `updated_at`) VALUES
(1, 'Golongan II', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(2, 'Golongan III', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(3, 'Golongan IV', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(4, 'Eselon IV', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(5, 'Esselon III', '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(6, 'Eselon II', '2018-10-17 00:00:00', '2018-10-17 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `pegawai_nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_tpp_maksimal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `pegawai_nip`, `pegawai_nama`, `pegawai_pangkat`, `pegawai_jabatan`, `pegawai_tpp_maksimal`, `created_at`, `updated_at`) VALUES
(1, '13104608980', 'Wanhar Azri', '6', '1', '30000000', '2018-10-15 17:00:00', '2018-10-16 16:37:38'),
(2, '09808080', 'Wanhar edit', '2', '13', '5000000', '2018-10-16 00:06:09', '2018-10-16 00:18:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpp_maksimal`
--

CREATE TABLE `tpp_maksimal` (
  `id` int(11) NOT NULL,
  `tpp_pangkat_id` int(11) DEFAULT NULL,
  `tpp_jabatan_id` int(11) DEFAULT NULL,
  `tpp_maksimal` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpp_maksimal`
--

INSERT INTO `tpp_maksimal` (`id`, `tpp_pangkat_id`, `tpp_jabatan_id`, `tpp_maksimal`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 30000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(2, 6, 2, 30000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(3, 6, 3, 30000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(4, 5, 4, 25000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(5, 5, 5, 25000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(6, 5, 6, 25000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(7, 5, 7, 25000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(8, 4, 8, 20000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(9, 4, 9, 20000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(10, 4, 10, 20000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(11, 4, 11, 20000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(12, 3, 12, 15000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(13, 3, 13, 15000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(14, 2, 12, 10000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(15, 2, 13, 10000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(16, 1, 12, 5000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00'),
(17, 1, 13, 5000000, '2018-10-17 00:00:00', '2018-10-17 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hpp`
--
ALTER TABLE `hpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`pangkat_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpp_maksimal`
--
ALTER TABLE `tpp_maksimal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hpp`
--
ALTER TABLE `hpp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `pangkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tpp_maksimal`
--
ALTER TABLE `tpp_maksimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
