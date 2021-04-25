-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 10.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_donordarah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `gambar`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'donor.jpg', 'Donor Darah', 'Contoh isi berita', '2020-06-05 05:09:24', '2020-06-05 05:09:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `goldarid` int(11) NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beratbadan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donors`
--

INSERT INTO `donors` (`id`, `userid`, `goldarid`, `umur`, `beratbadan`, `penyakit`, `lokasi`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(2, 5, 3, '19', '52', 'maag', '2', '2019-12-16', 2, '2019-12-15 09:02:04', '2019-12-15 09:04:22'),
(4, 7, 3, '20', '52', 'maag', '1', '2021-04-25', 2, '2021-04-25 00:09:04', '2021-04-25 01:17:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `goldars`
--

CREATE TABLE `goldars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goldar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `goldars`
--

INSERT INTO `goldars` (`id`, `goldar`, `created_at`, `updated_at`) VALUES
(1, 'A', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(2, 'B', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(3, 'O', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(4, 'AB', '2019-12-15 07:11:47', '2019-12-15 07:11:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'PDD Fatmawati', 'Jl Fatmawati', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(2, 'PDD Pondok Labu', 'Jl Pondok Labu, sebrang 34', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(3, 'PDD Cinere', 'Jalan Markisa', '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(5, 'PDD Pondok Gede', 'Jl. Pondok Gede Raya No.15 , Bekasi', '2019-12-15 09:20:51', '2019-12-15 09:21:08');

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
(3, '2019_11_24_141807_create_beritas_table', 1),
(4, '2019_11_24_152919_create_lokasis_table', 1),
(5, '2019_11_26_150826_create_donors_table', 1),
(6, '2019_12_14_090753_create_stocks_table', 1),
(7, '2019_12_14_124728_create_goldars_table', 1),
(8, '2019_12_15_133347_create_request_darahs_table', 1);

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
-- Struktur dari tabel `request_darahs`
--

CREATE TABLE `request_darahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `goldarid` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `request_darahs`
--

INSERT INTO `request_darahs` (`id`, `userid`, `goldarid`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 6, 1, '2019-12-15 07:12:06', '2019-12-15 07:13:56'),
(2, 3, 3, 2, 1, '2020-06-05 05:21:05', '2020-06-05 05:21:56'),
(3, 3, 3, 2, 1, '2021-04-25 00:38:18', '2021-04-25 00:49:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goldarid` int(11) NOT NULL,
  `stockdarah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stocks`
--

INSERT INTO `stocks` (`id`, `goldarid`, `stockdarah`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(2, 2, 15, '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(3, 3, 14, '2019-12-15 07:11:47', '2021-04-25 01:17:31'),
(4, 4, 3, '2019-12-15 07:11:47', '2019-12-15 07:13:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@123.com', NULL, '12345678', 'member', NULL, '2019-12-15 07:11:46', '2019-12-15 07:56:41'),
(2, 'admin', 'admin@123.com', NULL, '$2y$10$N.FNoEvHxRFXIyDEHW5FFOMQVjbpxxxY8PfgweAi906RnnDvl7sDS', 'admin', NULL, '2019-12-15 07:11:46', '2019-12-15 07:11:46'),
(3, 'rs', 'rs@123.com', NULL, '$2y$10$EymCHi4MTk6yuk51TsbpdeFp5yzQucP4Kywh1.BCZBvAW4H2GmUbG', 'rs', NULL, '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(4, 'rs2', 'rs2@123.com', NULL, '$2y$10$SvqG2Ek5mx24/jFYMm9EYeOho1untU5hzwAqXzPG6EhmP8yKyMHGm', 'rs', NULL, '2019-12-15 07:11:47', '2019-12-15 07:11:47'),
(5, 'pendonor1', 'pendonor1@gmail.com', NULL, '$2y$10$PuddImvWhfM4AuxwQY5IB.Ki33phmHWcBAXJCs6k2k3bTpXt7Ylmu', 'member', NULL, '2019-12-15 09:01:40', '2019-12-15 09:01:40'),
(7, 'pendonor2', 'pendonor2@gmail.com', NULL, '$2y$10$W8sOJFxhv1b9DBsrSI4RbelPqQbzsq333RGzI3SYPP3YkaOwYDG36', 'member', NULL, '2021-04-25 00:08:44', '2021-04-25 00:08:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `goldars`
--
ALTER TABLE `goldars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `request_darahs`
--
ALTER TABLE `request_darahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `goldars`
--
ALTER TABLE `goldars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `request_darahs`
--
ALTER TABLE `request_darahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
