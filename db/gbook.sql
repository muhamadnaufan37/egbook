-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 19.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_identitas` varchar(128) NOT NULL,
  `nomor_identitas` varchar(128) NOT NULL,
  `keperluan` varchar(128) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `jenis_identitas`, `nomor_identitas`, `keperluan`, `created_at`) VALUES
(3, 'Nama1', 'KARTU PELAJAR', '34234223555523', 'Berkunjung', '06/12/2022 00:00'),
(4, 'Nama2', 'KARTU PELAJAR', '184543300', 'Berkunjung', '06/12/2022 00:00'),
(5, 'Nama3', 'KARTU PELAJAR', '184543300', 'Berkunjung', '06/12/2022 00:00'),
(6, 'Nama4', 'KARTU PELAJAR', '184543301', 'Magang', '06/12/2022 00:00'),
(7, 'Nama5', 'KARTU PELAJAR', '184543301', 'Magang', '06/12/2022 00:00'),
(8, 'Nama6', 'KARTU PELAJAR', '184543302', 'Meminjam buku', '06/12/2022 00:00'),
(9, 'Nama7', 'KARTU PELAJAR', '184543302', 'Meminjam buku', '06/12/2022 00:00'),
(10, 'Nama8', 'KARTU PELAJAR', '184543303', 'Mengembalikan buku', '06/12/2022 00:00'),
(11, 'Nama9', 'KARTU PELAJAR', '184543303', 'Mengembalikan buku', '06/12/2022 00:00'),
(12, 'Nama10', 'KARTU PELAJAR', '184543304', 'Membaca', '06/12/2022 00:00'),
(13, 'Nama11', 'KARTU PELAJAR', '184543304', 'Membaca', '06/12/2022 00:00'),
(14, 'Nama12', 'KARTU PELAJAR', '184543305', 'Kerja kelompok', '06/12/2022 00:00'),
(15, 'Nama13', 'KARTU PELAJAR', '184543305', 'Kerja kelompok', '06/12/2022 00:00'),
(16, 'Nama14', 'KARTU PELAJAR', '184543306', 'Mengerjakan pr', '06/12/2022 00:00'),
(17, 'Nama15', 'KARTU PELAJAR', '184543306', 'Mengerjakan pr', '06/12/2022 00:00'),
(18, 'Nama16', 'KARTU PELAJAR', '184543307', 'Berkunjung', '06/12/2022 00:00'),
(19, 'Nama17', 'KARTU PELAJAR', '184543307', 'Berkunjung', '06/12/2022 00:00'),
(20, 'Nama18', 'KARTU PELAJAR', '184543308', 'Magang', '07/12/2022 00:00'),
(21, 'Nama19', 'KARTU PELAJAR', '184543308', 'Magang', '08/12/2022 00:00'),
(22, 'Nama20', 'KARTU PELAJAR', '184543309', 'Meminjam buku', '09/12/2022 00:00'),
(23, 'Nama21', 'KARTU PELAJAR', '184543309', 'Meminjam buku', '10/12/2022 00:00'),
(24, 'Nama22', 'KARTU PELAJAR', '184543310', 'Mengembalikan buku', '11/12/2022 00:00'),
(25, 'Nama23', 'KARTU PELAJAR', '184543310', 'Mengembalikan buku', '12/12/2022 00:00'),
(26, 'Nama24', 'KARTU PELAJAR', '184543311', 'Membaca', '13/12/2022 00:00'),
(27, 'Nama25', 'KARTU PELAJAR', '184543311', 'Membaca', '14/12/2022 00:00'),
(28, 'Nama26', 'KARTU PELAJAR', '184543312', 'Kerja kelompok', '15/12/2022 00:00'),
(29, 'Nama27', 'KARTU PELAJAR', '184543312', 'Kerja kelompok', '16/12/2022 00:00'),
(30, 'Nama28', 'KARTU PELAJAR', '184543313', 'Mengerjakan pr', '17/12/2022 00:00'),
(31, 'Nama29', 'KARTU PELAJAR', '184543313', 'Mengerjakan pr', '18/12/2022 00:00'),
(32, 'Nama30', 'KARTU PELAJAR', '184543314', 'Berkunjung', '19/12/2022 00:00'),
(33, 'Nama31', 'KARTU PELAJAR', '184543314', 'Berkunjung', '20/12/2022 00:00'),
(34, 'Nama32', 'KARTU PELAJAR', '184543315', 'Magang', '21/12/2022 00:00'),
(35, 'Nama33', 'KARTU PELAJAR', '184543315', 'Magang', '22/12/2022 00:00'),
(36, 'Nama34', 'KARTU PELAJAR', '184543316', 'Meminjam buku', '23/12/2022 00:00'),
(37, 'Nama35', 'KARTU PELAJAR', '184543316', 'Meminjam buku', '24/12/2022 00:00'),
(38, 'Nama36', 'KARTU PELAJAR', '184543317', 'Mengembalikan buku', '25/12/2022 00:00'),
(39, 'Nama37', 'KARTU PELAJAR', '184543317', 'Mengembalikan buku', '26/12/2022 00:00'),
(40, 'Nama38', 'KARTU PELAJAR', '184543318', 'Membaca', '27/12/2022 00:00'),
(41, 'Nama39', 'KARTU PELAJAR', '184543318', 'Membaca', '28/12/2022 00:00'),
(42, 'Nama40', 'KARTU PELAJAR', '184543319', 'Kerja kelompok', '29/12/2022 00:00'),
(43, 'Nama41', 'KARTU PELAJAR', '184543319', 'Kerja kelompok', '30/12/2022 00:00'),
(44, 'Nama42', 'KARTU PELAJAR', '184543320', 'Mengerjakan pr', '31/12/2022 00:00'),
(45, 'Nama43', 'KARTU PELAJAR', '184543320', 'Mengerjakan pr', '01/01/2023 00:00'),
(46, 'Nama44', 'KARTU PELAJAR', '184543321', 'Berkunjung', '02/01/2023 00:00'),
(47, 'Nama45', 'KARTU PELAJAR', '184543321', 'Berkunjung', '03/01/2023 00:00'),
(48, 'Nama46', 'KARTU PELAJAR', '184543322', 'Magang', '04/01/2023 00:00'),
(49, 'Nama47', 'KARTU PELAJAR', '184543322', 'Magang', '05/01/2023 00:00'),
(50, 'Nama48', 'KARTU PELAJAR', '184543323', 'Meminjam buku', '06/01/2023 00:00'),
(51, 'Nama49', 'KARTU PELAJAR', '184543323', 'Meminjam buku', '07/01/2023 00:00'),
(52, 'Nama50', 'KARTU PELAJAR', '184543324', 'Mengembalikan buku', '08/01/2023 00:00'),
(53, 'Nama51', 'KARTU PELAJAR', '184543324', 'Mengembalikan buku', '09/01/2023 00:00'),
(54, 'Nama52', 'KARTU PELAJAR', '184543325', 'Membaca', '01/12/2022 00:00'),
(55, 'Nama53', 'KARTU PELAJAR', '184543325', 'Membaca', '02/12/2022 00:00'),
(56, 'Nama54', 'KARTU PELAJAR', '184543326', 'Kerja kelompok', '03/12/2022 00:00'),
(57, 'Nama55', 'KARTU PELAJAR', '184543326', 'Kerja kelompok', '04/12/2022 00:00'),
(58, 'Nama56', 'KARTU PELAJAR', '184543327', 'Mengerjakan pr', '05/12/2022 00:00'),
(59, 'Nama57', 'KARTU PELAJAR', '184543327', 'Mengerjakan pr', '06/12/2022 00:00'),
(60, 'Nama58', 'KARTU PELAJAR', '184543328', 'Berkunjung', '07/12/2022 00:00'),
(61, 'Nama59', 'KARTU PELAJAR', '184543328', 'Berkunjung', '08/12/2022 00:00'),
(62, 'Nama60', 'KARTU PELAJAR', '184543329', 'Magang', '09/12/2022 00:00'),
(63, 'Nama61', 'KARTU PELAJAR', '184543329', 'Magang', '10/12/2022 00:00'),
(64, 'Nama62', 'KARTU PELAJAR', '184543330', 'Meminjam buku', '11/12/2022 00:00'),
(65, 'Nama63', 'KARTU PELAJAR', '184543330', 'Meminjam buku', '12/12/2022 00:00'),
(66, 'Nama64', 'KARTU PELAJAR', '184543331', 'Mengembalikan buku', '13/12/2022 00:00'),
(67, 'Nama65', 'KARTU PELAJAR', '184543331', 'Mengembalikan buku', '14/12/2022 00:00'),
(68, 'Nama66', 'KARTU PELAJAR', '184543332', 'Membaca', '15/12/2022 00:00'),
(69, 'Nama67', 'KARTU PELAJAR', '184543332', 'Membaca', '16/12/2022 00:00'),
(70, 'Nama68', 'KARTU PELAJAR', '184543333', 'Kerja kelompok', '17/12/2022 00:00'),
(71, 'Nama69', 'KARTU PELAJAR', '184543333', 'Kerja kelompok', '18/12/2022 00:00'),
(72, 'Nama70', 'KARTU PELAJAR', '184543334', 'Mengerjakan pr', '19/12/2022 00:00'),
(73, 'Nama71', 'KARTU PELAJAR', '184543334', 'Mengerjakan pr', '19/12/2022 00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
