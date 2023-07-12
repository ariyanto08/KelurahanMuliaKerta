-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jun 2023 pada 17.20
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
-- Database: `desadon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_pengguna` int NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_pengguna`, `username`, `password`, `created_at`, `updated_at`) VALUES
(14, 'admin', '$2y$10$aNtsP9QpmctPsK07H/H1..YZw6djgoTfx/c65DCwsW1BumNn0CCTy', '2023-06-16 00:42:34', '2023-06-16 00:42:34'),
(15, 'admin', '$2y$10$Q/.jzd4xNerL3cNOgyGZYe5nQrHdhIzyxHQbnz23zURkIAU48qhum', '2023-06-16 00:43:04', '2023-06-16 00:43:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id_anggota` int NOT NULL,
  `no_kk` bigint NOT NULL,
  `nik` bigint NOT NULL,
  `hubungan` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`id_anggota`, `no_kk`, `nik`, `hubungan`, `created_at`, `updated_at`) VALUES
(27, 12331232131312, 1234550283, 'Istri', '2023-06-14 02:26:26', '2023-06-14 02:26:26'),
(28, 2134131, 1234550283, 'Istri', '2023-06-16 09:37:52', '2023-06-16 09:37:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `no_kk` bigint NOT NULL,
  `nik` bigint NOT NULL,
  `desa` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rw` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kec` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kab` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `prov` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`no_kk`, `nik`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`, `created_at`, `updated_at`) VALUES
(2134131, 213542726, 'dsad', '21', '2', 'sdasd', 'sasdasd', 'dasd', '2023-06-16 09:37:42', '2023-06-16 09:37:42'),
(12331232131312, 101001010, 'MURE', '09', '56', 'fFDFW', 'geriku', 'joiku', '2023-06-14 02:23:08', '2023-06-14 02:23:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_lahir` int NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgl_lh` date DEFAULT NULL,
  `tempat_lh` varchar(255) DEFAULT NULL,
  `jekel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `no_kk` bigint DEFAULT NULL,
  `anakke` int DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_lahir`, `nama`, `tgl_lh`, `tempat_lh`, `jekel`, `no_kk`, `anakke`, `alamat`, `created_at`, `updated_at`) VALUES
(17, 'sda', '2023-06-13', NULL, 'Perempuan', 12331232131312, NULL, NULL, '2023-06-16 09:35:56', '2023-06-16 09:35:56'),
(18, 'sadsad', NULL, NULL, 'Perempuan', 2134131, NULL, NULL, '2023-06-16 09:38:51', '2023-06-16 09:38:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meninggal`
--

CREATE TABLE `meninggal` (
  `id_mendu` int NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_mendu` date DEFAULT NULL,
  `sebab` varchar(255) DEFAULT NULL,
  `hari_mati` varchar(255) DEFAULT NULL,
  `tempat_mati` varchar(255) DEFAULT NULL,
  `tempat_makam` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `meninggal`
--

INSERT INTO `meninggal` (`id_mendu`, `nik`, `tgl_mendu`, `sebab`, `hari_mati`, `tempat_mati`, `tempat_makam`, `created_at`, `updated_at`) VALUES
(12, 1023846347544376, '2023-06-16', 'gtgt', 'senin', 'rumah', 'makam umum', '2023-06-15 11:45:58', '2023-06-15 11:45:58'),
(13, 213542726, NULL, 'das', 'dasd', 'dasd', 'dasd', '2023-06-16 09:58:24', '2023-06-16 09:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `tempat_lh` varchar(15) DEFAULT NULL,
  `tgl_lh` date DEFAULT NULL,
  `jekel` varchar(255) DEFAULT NULL,
  `desa` varchar(15) DEFAULT NULL,
  `rt` varchar(4) DEFAULT NULL,
  `rw` varchar(4) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `kawin` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `pekerjaan`, `kawin`, `status`, `kewarganegaraan`, `alamat`, `created_at`, `updated_at`) VALUES
(142, '12341', '1414', '2023-06-27', 'Laki-Laki', 'sad', '1', '1', 'sdad', 'dasd', 'Sudah Menikah', 1, 'asdas', 'dasd', '2023-06-16 09:55:41', '2023-06-16 09:55:41'),
(101001010, 'Crewneck', 'oiuy', '2023-05-05', 'Laki-Laki', 'MURE', '09', '76', 'swsw', 'gege', 'Sudah Menikah', 1, 'indonesia', 'jalan jalan', '2023-06-14 04:17:42', '2023-06-14 04:17:42'),
(213542726, 'ari', 'ari', '2023-06-23', 'Laki-Laki', 'sda', '23', '23', 'cin', 'dasd', 'Sudah Menikah', 2, 'ha', 'asdad', '2023-06-16 16:58:24', '2023-06-16 09:58:24'),
(1234550283, 'awawa', 'YHHY', '2023-06-05', 'Perempuan', 'MURE', '12', '34', 'KONG', 'gege', 'Sudah Menikah', 1, 'indonesia', 'jalan mana', '2023-06-14 08:10:41', '2023-06-14 08:10:41'),
(1023846347544376, 'baju', 'oiuy', '2023-05-28', 'Laki-Laki', 'kauman', '12', '56', 'KONG', 'gege', 'Belum Menikah', 2, 'indo', 'jalan sini', '2023-06-15 12:44:13', '2023-06-15 12:44:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pengguna` int NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pengguna`, `username`, `password`, `created_at`, `updated_at`) VALUES
(19, 'user', '$2y$10$Dvp/IhaGR2voGlnYL9fhD.VTrUHBnm.mXTPros6P.CW0r7btg7gSm', '2023-06-16 00:50:38', '2023-06-16 00:50:38'),
(20, 'user2', '$2y$10$5gxxT6ooyJV794SG65K9j.alVJMcbMruLthlU/T2ZQIzLvfdvI7Fq', '2023-06-16 10:03:04', '2023-06-16 10:03:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_lahir`);

--
-- Indeks untuk tabel `meninggal`
--
ALTER TABLE `meninggal`
  ADD PRIMARY KEY (`id_mendu`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_lahir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `meninggal`
--
ALTER TABLE `meninggal`
  MODIFY `id_mendu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `nik` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023846347544377;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
